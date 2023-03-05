# CMS

Created by: Gustavo Morais

### Composer Main
```json
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Database\\Factories\\": "database/factories/",
        "Database\\Seeders\\": "database/seeders/",
        "GustavoMorais\\Cms\\": "GusCms/Cms/src"
    }
},
```

### config/app.php
```php
'providers' => [
    GustavoMorais\Cms\Providers\CmsServiceProvider::class,
],

'aliases' => Facade::defaultAliases()->merge([
    // 'ExampleClass' => App\Example\ExampleClass::class,
    'GusCmsFacade' => GustavoMorais\Cms\Facades\CmsFacade::class,
])->toArray(),
```

### Cms package command example
```
# gus is the param value
php artisan gus:cms gus
```

![](./imgs/cmsDb1.png)
