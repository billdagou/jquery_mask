# TYPO3 Extension: jQuery Mask

EXT:jquery_mask allows you to use [jQuery Mask](http://igorescobar.github.io/jQuery-Mask-Plugin/) in your extensions.

**The extension version only matches the jQuery Mask library version, it doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template.

	<jqmask:load />

You can also load your own library.

    <jqmask:load src="..." />

For more options please refer to &lt;f:asset.script&gt;.

To use other jQuery Mask source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\JqueryMask\Utility\ExtensionUtility::registerSource(\Vendor\Extension\Source::class);