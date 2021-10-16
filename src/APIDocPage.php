<?php

namespace Gurucomkz\APIDoc;

use Page;
use SilverStripe\Forms\DropdownField;

class APIDocPage extends Page
{
    private static $table_name = 'APIDocPage';

    private static $singular_name = 'API Doc Page';

    private static $plural_name = 'API Doc Pages';

    const UIMODE_SWAGGER = 'Swagger';
    const UIMODE_REDOC = 'Redoc';

    private static $description = 'Display a Rendered OpenApi YAML';

    private static $db = [
        'UIMode' => 'Enum("' . self::UIMODE_SWAGGER . ',' . self::UIMODE_REDOC . '")',
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
        return $fields;
    }
}
