<?php
namespace PageBlockAdno\Form;

use Laminas\Form\Element;
use Laminas\Form\Fieldset;

class AdnoFieldset extends Fieldset
{
    public function init()
    {
        $blockIndex = $block ? $block->id() : '__blockIndex__';

        $this
             ->add([
                    'name' => 'o:block[__blockIndex__][o:data][instance]',
                    'type' => Element\Url::class,
                    'options' => [
                    'label' => 'Adno instance URL', // @translate
                    'info' => 'The address of your Adno instance. If you do not have one, you can use https://w.adno.app.', // @translate
                    ],
                    'attributes' => [
                    'id' => 'adno-instance',
                    'value' => 'https://w.adno.app',
                    'pattern' => 'https?://.+'
                    ],
            ])
            ->add([
                    'name' => 'o:block[__blockIndex__][o:data][src]',
                    'type' => Element\Url::class,
                    'options' => [
                    'label' => 'Adno project URL', // @translate
                    'info' => 'It is also possible to provide the URL of an image', // @translate
                    ],
                    'attributes' => [
                    'id' => 'adno-src',
                    'pattern' => 'https?://.+'
                    ],
            ])
            ->add([
                    'name' => 'o:block[__blockIndex__][o:data][params]',
                    'type' => Element\Textarea::class,
                    'options' => [
                    'label' => 'Parameters', // @translate
                    'info' => "Use Adno's URL generator to override project settings. https://w.adno.app/#/link", // @translate
                    ],
                    'attributes' => [
                    'id' => 'adno-params',
                    'rows' => 5,
                    ],
            ])
            ->add([
                    'name' => 'o:block[__blockIndex__][o:data][width]',
                    'type' => Element\Text::class,
                    'options' => [
                    'label' => 'Width', // @translate
                    'info' => 'The width of the container in percentage (e.g., 100%) or in pixels (e.g., 600).', // @translate
                    ],
                    'attributes' => [
                    'id' => 'adno-width',
                    'size' => 10,
                    'maxlength' => 10,
                    'pattern' => '[0-9]+%?'
                    ],
            ])
            ->add([
                    'name' => 'o:block[__blockIndex__][o:data][height]',
                    'type' => Element\Text::class,
                    'options' => [
                    'label' => 'Height', // @translate
                    'info' => 'The height of the container in percentage (e.g., 100%) or in pixels (e.g., 600).', // @translate
                    ],
                    'attributes' => [
                    'id' => 'adno-height',
                    'size' => 10,
                    'maxlength' => 10,
                    'pattern' => '[0-9]+%?'
                    ],
            ]);
    }

}
