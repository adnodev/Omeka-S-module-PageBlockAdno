# PageBlockAdno (Omeka-S module)

This module provides an Adno page block for Omeka-S, offering a simple way to insert one or more Adno viewers into the pages of an Omeka-S site.

**[Adno](https://adno.app/en/)** is a web application for viewing, editing and sharing narratives and guided explorations on online images, static images and IIIF images.

## Installation 

See the general end user documentation for information on [installing a module](https://omeka.org/s/docs/user-manual/modules/#installing-modules).

Requirements: Omeka-S >=4.0.0

- From the zip: Download the last release `PageBlockAdno.zip` from the [list of releases](https://github.com/adnodev/Omeka-S-module-PageBlockAdno/releases), and uncompress it in the modules directory.
- From the source: Rename the name of the folder of the module to `PageBlockAdno`.

## Usage 

The module adds an Adno block to site pages. 

### Configuration 

- **Adno instance URL**: The address of your Adno instance. If you do not have one, you can use the default: https://w.adno.app
- **Adno project URL**: the address of your Adno project, it is also possible to provide the address of an IIIF image (`info.json`) or a static image.
- **Parameters**: Use Adno's URL generator to override project settings. For example: https://w.adno.app/#/link or https://your-adn-service/#/link.  
- **Width**: iframe width (px ou %). 
- **Height**: iframe height (px).

**Note**: To upload an Adno project to Omeka-S, you must enable the MIME type `application/json` and the extension `.json` in the Security section of the General Settings.

## ToDo

- [ ] Load an Adno project in IIIF format (bug).
- [ ] Provide multiple views (embed, slider, list, etc.) based on the model of [Adno views tags](https://github.com/adnodev/adno-views-tag) another companion project from Adno. 

## Feedback 

See the online issues on the module issues page on [Github](https://github.com/adnodev/Omeka-S-module-PageBlockAdno/issues).

## Credits

PageBlockAdno module is derived from the [PageBlockIframe](https://github.com/orgs/GhentCDH/Omeka-S-module-PageBlockIframe) module developed by the [Ghent Centre for Digital Humanities](https://www.ghentcdh.ugent.be/) (GhentCDH) at Ghent University (Belgium). 
