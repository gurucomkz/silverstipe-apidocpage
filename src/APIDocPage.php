<?php

namespace Gurucomkz\APIDoc;

use Page;
use SilverStripe\Forms\DropdownField;

class APIDocPage extends Page
{
    private static $table_name = 'APIDocPage';

    private static $db = [
        'UIMode' => 'Enum("Redoc,Swagger")',
        'Content' => 'Text',
    ];

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab(
            'Root.Main',
            DropdownField::create(
                'UIMode',
                'UI Mode',
                $this->dbObject('UIMode')->enumValues()
            ),
            'Content'
        );
        $fields->replaceField(
            'Content',
            YamlEditorField::create(
                'Content'
            )
            ->addExtraClass('stacked')
        );
        $fields->removeByName('Metadata');
        return $fields;
    }
}
