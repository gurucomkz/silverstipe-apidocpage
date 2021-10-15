<?php

namespace Gurucomkz\RedocSS;

use PageController;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;
use SilverStripe\View\Requirements;

class APIDocPageController extends PageController
{
    private static $allowed_actions = [
        'specs',
    ];

    protected function init()
    {
        parent::init();
        Requirements::css('https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:300,400,700');
        Requirements::javascript('https://cdn.jsdelivr.net/npm/redoc@latest/bundles/redoc.standalone.js');
    }

    public function specs(HTTPRequest $request)
    {
        return HTTPResponse::create()
            ->setBody($this->Content)
            ->addHeader('Content-Type', 'text/yaml');
    }
}
