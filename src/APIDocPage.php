<?php

namespace Gurucomkz\RedocSS;

use Page;

class APIDocPage extends Page
{
    private static $table_name = 'APIDocPage';

    private static $db = [
        'Content' => 'Text',
    ];

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
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
