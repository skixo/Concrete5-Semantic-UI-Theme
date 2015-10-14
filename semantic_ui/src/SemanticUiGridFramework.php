<?php

namespace Concrete\Package\SemanticUi\Src;

use Concrete\Core\Page\Theme\GridFramework\GridFramework;

defined('C5_EXECUTE') or die(_("Access Denied."));

class SemanticUiGridFramework extends GridFramework
{
    public function supportsNesting()
    {
        return true;
    }

    public function getPageThemeGridFrameworkName()
    {
        return t('Semantic UI');
    }

    public function getPageThemeGridFrameworkRowStartHTML()
    {
        return '<div class="ui grid">';
    }

    public function getPageThemeGridFrameworkRowEndHTML()
    {
        return '</div>';
    }

    public function getPageThemeGridFrameworkContainerStartHTML()
    {
        return '';
    }

    public function getPageThemeGridFrameworkContainerEndHTML()
    {
        return '';
    }

    public function getPageThemeGridFrameworkColumnClasses()
    {
        $columns = array(
            'one wide',
            'two wide',
            'three wide',
            'four wide',
            'five wide',
            'six wide',
            'seven wide',
            'eight wide',
            'nine wide',
            'ten wide',
            'eleven wide',
            'twelve wide',
            'thirteen wide',
            'fourteen wide',
            'fifteen wide',
            'sixteen wide',
        );
        return $columns;
    }

    public function getPageThemeGridFrameworkColumnAdditionalClasses()
    {
        return 'column';
    }

    abstract public function getPageThemeGridFrameworkColumnOffsetClasses();
    abstract public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses();
}