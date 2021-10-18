<?php

namespace Gurucomkz\APIDoc;

use PageController;
use SilverStripe\Control\Director;
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
        if ($this->UIMode == 'Redoc') {
            Requirements::css('https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:300,400,700');
            Requirements::javascript('https://cdn.jsdelivr.net/npm/redoc@latest/bundles/redoc.standalone.js');
        } else {
            Requirements::javascript('https://unpkg.com/swagger-ui-dist@3/swagger-ui-bundle.js');
            Requirements::css('https://unpkg.com/swagger-ui-dist@3/swagger-ui.css');
        }
    }

    public function specs(HTTPRequest $request)
    {
        $content = $this->Content;
        $content = str_replace('{SS_HOST}', Director::host($request), $content);
        return HTTPResponse::create()
            ->setBody($content)
            ->addHeader('Content-Type', 'text/yaml');
    }
}
