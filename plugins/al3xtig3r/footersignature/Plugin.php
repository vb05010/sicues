<?php

namespace Al3xTig3r\FooterSignature;

use Backend;
use System\Classes\PluginBase;

use Lang;

use Al3xTig3r\FooterSignature\Models\Settings;

/**
 * FooterSignature Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */        
    public $require = ['RainLab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => Lang::get('al3xtig3r.footersignature::lang.name'),
            'description' => Lang::get('al3xtig3r.footersignature::lang.description'),
            'author'      => 'Al3xTig3r',
            'icon'        => 'icon-pencil-square'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Al3xTig3r\FooterSignature\Components\FooterSignature' => 'footerSignature',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => Lang::get('al3xtig3r.footersignature::lang.settings.title'),
                'description' => Lang::get('al3xtig3r.footersignature::lang.settings.description'),
                'category'    => 'Footer Signature',
                'icon'        => 'icon-pencil-square',
                'class'       => Settings::class,
                'order'       => 500,
                'keywords'    => 'footer signature icons'
            ]
        ];
    }
}
