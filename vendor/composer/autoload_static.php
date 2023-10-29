<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08d5830bfa3ef77f238eef0782fe3f12
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/App/Controllers/BaseController.php',
        'App\\Controllers\\IndexController' => __DIR__ . '/../..' . '/App/Controllers/IndexController.php',
        'App\\Controllers\\api\\v1\\FacilityController' => __DIR__ . '/../..' . '/App/Controllers/api/v1/FacilityController.php',
        'App\\Controllers\\api\\v1\\LocationController' => __DIR__ . '/../..' . '/App/Controllers/api/v1/LocationController.php',
        'App\\Controllers\\api\\v1\\TagController' => __DIR__ . '/../..' . '/App/Controllers/api/v1/TagController.php',
        'App\\Controllers\\api\\v1\\Traits\\CreateTraits' => __DIR__ . '/../..' . '/App/Controllers/api/v1/Traits/CreateTraits.php',
        'App\\Controllers\\api\\v1\\Traits\\DeleteTraits' => __DIR__ . '/../..' . '/App/Controllers/api/v1/Traits/DeleteTraits.php',
        'App\\Controllers\\api\\v1\\Traits\\ReadTraits' => __DIR__ . '/../..' . '/App/Controllers/api/v1/Traits/ReadTraits.php',
        'App\\Controllers\\api\\v1\\Traits\\UpdateTraits' => __DIR__ . '/../..' . '/App/Controllers/api/v1/Traits/UpdateTraits.php',
        'App\\Entities\\ResponseItem' => __DIR__ . '/../..' . '/App/Entities/ResponseItem.php',
        'App\\Entities\\ResponsePageList' => __DIR__ . '/../..' . '/App/Entities/ResponsePageList.php',
        'App\\Factories\\BaseFactory' => __DIR__ . '/../..' . '/App/Factories/BaseFactory.php',
        'App\\Factories\\FacilityFactory' => __DIR__ . '/../..' . '/App/Factories/FacilityFactory.php',
        'App\\Factories\\LocationFactory' => __DIR__ . '/../..' . '/App/Factories/LocationFactory.php',
        'App\\Factories\\TagFactory' => __DIR__ . '/../..' . '/App/Factories/TagFactory.php',
        'App\\Models\\BaseModel' => __DIR__ . '/../..' . '/App/Models/BaseModel.php',
        'App\\Models\\FacilityModel' => __DIR__ . '/../..' . '/App/Models/FacilityModel.php',
        'App\\Models\\FacilityTagModel' => __DIR__ . '/../..' . '/App/Models/FacilityTagModel.php',
        'App\\Models\\LocationModel' => __DIR__ . '/../..' . '/App/Models/LocationModel.php',
        'App\\Models\\TagModel' => __DIR__ . '/../..' . '/App/Models/TagModel.php',
        'App\\Models\\Traits\\DeleteTrait' => __DIR__ . '/../..' . '/App/Models/Traits/DeleteTrait.php',
        'App\\Plugins\\Db\\Adapters\\IAdapter' => __DIR__ . '/../..' . '/App/Plugins/Db/Adapters/IAdapter.php',
        'App\\Plugins\\Db\\Adapters\\MySql' => __DIR__ . '/../..' . '/App/Plugins/Db/Adapters/MySql.php',
        'App\\Plugins\\Db\\Connection\\Connection' => __DIR__ . '/../..' . '/App/Plugins/Db/Connection/Connection.php',
        'App\\Plugins\\Db\\Connection\\IConnection' => __DIR__ . '/../..' . '/App/Plugins/Db/Connection/IConnection.php',
        'App\\Plugins\\Db\\Connection\\Mysql' => __DIR__ . '/../..' . '/App/Plugins/Db/Connection/Mysql.php',
        'App\\Plugins\\Db\\Db' => __DIR__ . '/../..' . '/App/Plugins/Db/Db.php',
        'App\\Plugins\\Db\\IDb' => __DIR__ . '/../..' . '/App/Plugins/Db/IDb.php',
        'App\\Plugins\\Di\\Base' => __DIR__ . '/../..' . '/App/Plugins/Di/Base.php',
        'App\\Plugins\\Di\\Factory' => __DIR__ . '/../..' . '/App/Plugins/Di/Factory.php',
        'App\\Plugins\\Di\\Injectable' => __DIR__ . '/../..' . '/App/Plugins/Di/Injectable.php',
        'App\\Plugins\\Di\\ReflectionHelper' => __DIR__ . '/../..' . '/App/Plugins/Di/ReflectionHelper.php',
        'App\\Plugins\\Di\\Traits\\InjectionAwareTrait' => __DIR__ . '/../..' . '/App/Plugins/Di/Traits/InjectionAwareTrait.php',
        'App\\Plugins\\Http\\ApiException' => __DIR__ . '/../..' . '/App/Plugins/Http/ApiException.php',
        'App\\Plugins\\Http\\Exceptions\\BadRequest' => __DIR__ . '/../..' . '/App/Plugins/Http/Exceptions/BadRequest.php',
        'App\\Plugins\\Http\\Exceptions\\InternalServerError' => __DIR__ . '/../..' . '/App/Plugins/Http/Exceptions/InternalServerError.php',
        'App\\Plugins\\Http\\Exceptions\\NotFound' => __DIR__ . '/../..' . '/App/Plugins/Http/Exceptions/NotFound.php',
        'App\\Plugins\\Http\\Exceptions\\Unauthorized' => __DIR__ . '/../..' . '/App/Plugins/Http/Exceptions/Unauthorized.php',
        'App\\Plugins\\Http\\IStatus' => __DIR__ . '/../..' . '/App/Plugins/Http/IStatus.php',
        'App\\Plugins\\Http\\JsonStatus' => __DIR__ . '/../..' . '/App/Plugins/Http/JsonStatus.php',
        'App\\Plugins\\Http\\Response\\BadRequest' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/BadRequest.php',
        'App\\Plugins\\Http\\Response\\Created' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/Created.php',
        'App\\Plugins\\Http\\Response\\InternalServerError' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/InternalServerError.php',
        'App\\Plugins\\Http\\Response\\NoContent' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/NoContent.php',
        'App\\Plugins\\Http\\Response\\NotFound' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/NotFound.php',
        'App\\Plugins\\Http\\Response\\Ok' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/Ok.php',
        'App\\Plugins\\Http\\Response\\Unauthorized' => __DIR__ . '/../..' . '/App/Plugins/Http/Response/Unauthorized.php',
        'App\\Plugins\\Http\\Status' => __DIR__ . '/../..' . '/App/Plugins/Http/Status.php',
        'Bramus\\Router\\Router' => __DIR__ . '/..' . '/bramus/router/src/Bramus/Router/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08d5830bfa3ef77f238eef0782fe3f12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08d5830bfa3ef77f238eef0782fe3f12::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit08d5830bfa3ef77f238eef0782fe3f12::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit08d5830bfa3ef77f238eef0782fe3f12::$classMap;

        }, null, ClassLoader::class);
    }
}
