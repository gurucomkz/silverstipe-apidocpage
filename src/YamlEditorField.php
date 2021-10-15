<?php
namespace Gurucomkz\APIDoc;

use SilverStripe\Forms\FormField;
use SilverStripe\View\Requirements;

class YamlEditorField extends FormField
{
    protected $inputType = 'hidden';

    private static $casting = [
        'EditorAttributesHTML' => 'HTMLFragment', // property $EditorAttributesHTML version
        'getEditorAttributesHTML' => 'HTMLFragment', // method $getEditorAttributesHTML($arg) version
        'Value' => 'Text',
    ];

    public function __construct($name, $title = null, $value = null)
    {
        parent::__construct($name, $title, $value);
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.13/ace.js');
    }

    public function forTemplate()
    {
        return $this->Field();
    }

    public function getAttributes()
    {
        $attrs = parent::getAttributes();
        return $attrs;
    }

    public function EditorID()
    {
        return $this->ID() . '_Editor';
    }

    public function getEditorAttributes()
    {
        return [
            'id' => $this->EditorID(),
            'style' => 'width: 100%; min-height: 400px',
        ];
    }
    public function getEditorAttributesHTML()
    {
        return $this->getAttributesHTML($this->getEditorAttributes());
    }
}
