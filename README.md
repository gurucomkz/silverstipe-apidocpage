# SilverStripe 4 page for rendering OpenAPI YAML Files

You can put your OpenAPI YAML in Content field and choole one of the available renderers to display it on a page:
* [Swagger-JS](https://github.com/swagger-api/swagger-js)
* [Redoc](https://github.com/Redocly/redoc)

The editor provides YAML syntax highlighting.

## Installation

```
composer require gurucomkz/silverstipe-apidocpage
```

Do `sake dev/build`, `/admin/?flush=1` and you can create your pretty-rendered API pages.

## Credits
Thanks to these guys:
* [Swagger-JS](https://github.com/swagger-api/swagger-js) for their renderer
* [Redoc](https://github.com/Redocly/redoc) for their renderer
* [ACE.JS](https://ace.c9.io/) for their syntax-highlighted editor
