# TYPO3 Extension: jQuery Mask

EXT:jquery_mask allows you to use [jQuery Mask](http://igorescobar.github.io/jQuery-Mask-Plugin/) in your extensions.

**The extension version only matches the jQuery Mask library version, it doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template with **LoadViewHelper**.

	<jqmask:load />

You can also load your own library.

    <jqmask:load js="..." />
    
Or, load the JS before the &lt;BODY&gt; tag.

    <jqmask:load footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery_mask']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery_mask']['CDN'] = \Vendor\Extension\CDN::class;