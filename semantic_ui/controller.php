<?php

namespace Concrete\Package\SemanticUi;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{
    protected $pkgHandle = 'semantic_ui';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '0.1';

    public function getPackageName()
    {
        return t("Semantic UI");
    }

    public function getPackageDescription()
    {
        return t("User Interface is the language of the web");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('semantic_ui', $pkg);
    }
}