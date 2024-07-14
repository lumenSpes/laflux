<?php
namespace ExtensionsValley\Basetheme\Helpers;

use ExtensionsValley\Dashboard\Models\Extension;

class ThemeHelper
{
    public $active_template_path;

    public $active_template_name;

    public $template_view_path;

    public $theme_name;

    public $vendor_name;

    public function __construct()
    {

        $ds = DIRECTORY_SEPARATOR;
        $activetheme = [];
        if (\Schema::hasTable('extension_manager')) {
            $activetheme = Extension::WhereNull('deleted_at')
                ->Where('status', 1)
                ->Where('package_type', 'laflux-theme')
                ->Where('name', '<>', 'Basetheme')
                ->first();
        }

        if (!empty($activetheme)) {
            $this->active_template_path = "template" . $ds . strtolower($activetheme->vendor)
                . $ds . strtolower($activetheme->name);
            $this->active_template_name = strtolower($activetheme->vendor) . "." . strtolower($activetheme->name);
            $this->template_view_path = base_path() . '/resources/template/' . strtolower($activetheme->vendor) . $ds . strtolower($activetheme->name);
            $this->theme_name = $activetheme->name;
            $this->vendor_name = $activetheme->vendor;

        } else {

            $this->active_template_path = "template/extensionsvalley/basetheme";
            $this->active_template_name = "extensionsvalley.basetheme";
            $this->template_view_path = base_path() . '/resources/template/extensionsValley/basetheme';
            $this->theme_name = 'Basetheme';
            $this->vendor_name = 'ExtensionsValley';
        }
    }

    public function getPosition()
    {



        $position = new \Illuminate\Support\Collection;
        $theme_positions = [];
        \Event::dispatch('website.template.positions', [$position]);
        $vendor_name = $this->vendor_name;
        $theme_name = $this->theme_name;
        $template_name = strtolower($vendor_name) . "." . strtolower($theme_name);
        if (!empty($position[$template_name])) {
            foreach ($position[$template_name] as $key => $items) {
                $theme_positions[$items['position']] = $items['position'];

            }
        }
        return $theme_positions;
    }

    public function getLayouts()
    {

        $layout = new \Illuminate\Support\Collection;
        \Event::dispatch('website.template.layout', [$layout]);
        $theme_layout = [];
        $vendor_name = $this->vendor_name;
        $theme_name = $this->theme_name;
        $template_name = strtolower($vendor_name) . "." . strtolower($theme_name);
        if (!empty($layout[$template_name])) {
            foreach ($layout[$template_name] as $key => $items) {
                $theme_layout[$key] = $items;

            }
        }
        return $theme_layout;
    }

}
