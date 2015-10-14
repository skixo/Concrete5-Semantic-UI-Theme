<?php

namespace Concrete\Package\SemanticUi\Theme\SemanticUi;

use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Semantic UI');
    }

    public function getThemeDescription()
    {
        return t('User Interface is the language of the web');
    }

    public function registerAssets()
    {
        /*
        $this->requireAsset('css', 'font-awesome');
       	$this->requireAsset('javascript', 'jquery');
        */
    }

    public function getThemeDefaultBlockTemplates()
    {
        // allows to overwrite default templates
        /*
        return array(
            'search' => 'search.php'
        );
        */
    }

    public function getThemeBlockClasses()
    {
        // css classes available in blocks
        /*
        return array(
            'social_links' => array("singleColor","flatFullColor","roundedGradient","roundedFlat"),
            'content' => array('blue-background')
        );
        */
    }

    public function getThemeEditorClasses()
    {
        // css classes available in WYSIWYG
        /*
        return array(
            array('title' => t('Site Title'), 'menuClass' => 'site-title', 'spanClass' => 'site-title')
        );
        */
    }
}

?>