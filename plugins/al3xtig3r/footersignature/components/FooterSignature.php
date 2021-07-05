<?php

namespace Al3xTig3r\FooterSignature\Components;

use Cms\Classes\ComponentBase;
use Event;

use Al3xTig3r\FooterSignature\Models\Settings;

class FooterSignature extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Footer Signature',
            'description' => 'Footer signature'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function text()
    {
        return Settings::instance()->text;
    }

    public function icon()
    {
        if(Settings::get('randomIcon'))
            $icon = Settings::get('icons')[rand(0, count(Settings::get('icons')) - 1)]['classes'];
        else
            $icon = Settings::get('selectedIcon');

        return $icon;
    }

}
