<?php

namespace Al3xTig3r\FooterSignature\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel',
        'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    /**
     * @var array Translatable fields
     */
    public $translatable = [
        'text'
    ];

    // A unique code
    public $settingsCode = 'al3xtig3r_footersignature_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /**
     * Retrieve options for the "Selected icon" dropdown
     * 
     * @return Collection
     */
    public function getSelectedIconOptions()
    {
        return collect($this->icons)->pluck('name', 'classes');
    }
}
