<?php

namespace PageBlockAdno\Site\BlockLayout;

use Omeka\Api\Representation\SiteRepresentation;
use Omeka\Api\Representation\SitePageRepresentation;
use Omeka\Api\Representation\SitePageBlockRepresentation;
use Omeka\Entity\SitePageBlock;
use Omeka\Site\BlockLayout\AbstractBlockLayout;
use Omeka\Stdlib\ErrorStore;
use Laminas\View\Renderer\PhpRenderer;

class Adno extends AbstractBlockLayout
{
    public function getLabel()
    {
        return 'Adno'; 
    }

    public function form(
        PhpRenderer $view,
        SiteRepresentation $site,
        SitePageRepresentation $page = null,
        SitePageBlockRepresentation $block = null
    ) {
        // Factory is not used to make rendering simpler.
        $services = $site->getServiceLocator();
        $formElementManager = $services->get('FormElementManager');
        $blockFieldset = \PageBlockAdno\Form\AdnoFieldset::class;

        // Set form values
        $data = $block ? $block->data() : [];

        $dataForm = [];
        foreach ($data as $key => $value) {
            $dataForm['o:block[__blockIndex__][o:data][' . $key . ']'] = $value;
        }

        $fieldset = $formElementManager->get($blockFieldset);
        $fieldset->populateValues($dataForm);

        return $view->formCollection($fieldset);
    }

    public function render(PhpRenderer $view, SitePageBlockRepresentation $block)
    {
        $data = $block->data();
        
        $adno = $data['instance'];

	if (isset($data['params']) && !empty($data['params'])) {
		$url = $adno . $view->escapeHtmlAttr($data['params']);
	} else {
		$url = $adno . "/#/embed?url=" . urlencode($data['src']);
	}

        $width  = (isset($data['width']) && !empty($data['width']))  ? $view->escapeHtmlAttr($data['width'])  : '100%';
        $height = (isset($data['height']) && !empty($data['height'])) ? $view->escapeHtmlAttr($data['height']) : '600';

        return sprintf(
            '<iframe src="%s" width="%s" height="%s" allow="fullscreen" loading="lazy"></iframe>',
            $url,
            $width,
            $height
        );

    }

}
