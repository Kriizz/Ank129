<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Configuration du CMS
    |--------------------------------------------------------------------------
    |
    | Pour configurer le cms, veuillez modifier les paramètres ci-dessous avec 
    | vos propres valeurs.
    | Ne touchez rien d'autres sous risques de disfonctionnement de l'application.
    */

    // Nom du serveur
    'name' => 'Ankadia',
    // Slogan du serveur
    'title' => 'Serveur privé Dofus 1.29',
    // Description du serveur
    'desc' => 'Meilleur serveur privé Dofus 1.29',
    // Configuration de la base de donnée
    'database' => [
        'host' => '217.182.206.168',
        'port' => 3306,
        'user' => 'ankadia',
        'pass' => '123456789Vi',
        'auth' => 'ankadia129_world',
        'world' => 'ankadia129_world',
    ],
    // Mode débug, pour activer l'affichage des erreurs
    'debug' => true,
    // Thème du site
    // Thèmes disponibles: razoff, koli, debutant, eni, hupper, halouine, moon, sidimote, idole, dofus, wanted, elio, goultard, frigost, champs, nowel, cania, saharash, ougi
    'theme' => 'sidimote',
    // Configuration du message principal
    'message' => [
        'active' => true,
        'title' => 'Ankadia débarque',
        'desc' => 'Preparez-vous !',
        // Position disponible: left, center, right
        'position' => 'left',
        'newsId' => 1,
    ],
    // Configuration des serveurs
    'servers' => [
        [
            'id' => '4007',
            'name' => 'Linla',
            'online' => true,
            'population' => 'Faible',
            'info' => 'Serveur AnkaLike',
        ],
        [
            'id' => '14',
            'name' => 'Syola',
            'online' => true,
            'population' => 'Faible',
            'info' => 'Serveur AnkaFun',
        ],
    ],
    // Nombre de personnages affichés dans le ladder
    'ladder_limit' => 50,
    // Configuration des liens de telechargement du serveur
    'download' => [
        'win' => '',
        'mac' => '',
    ],
    // Configuration des réseaux sociaux
    'social' => [
        'forum' => 'https://dozenofelites.com/',
        'twitter' => 'https://twitter.com/dofusfr',
        'facebook' => 'https://www.facebook.com/DOFUS/',
        'discord' => '',
        'youtube' => 'https://www.youtube.com/user/dofus',
    ],
    // Configuration du module Google Recaptcha
    'recaptcha' => [
        'public' => '6Lf0vCYUAAAAAEPx6aJekhMOTGTbL7elS_23CvMr',
        'private' => '6Lf0vCYUAAAAAFxBI4VlOYZDN-a3Y_xg4QfTgi9k',
    ],
    // Configuration des modules
    'module' => [
        'ladder' => true,
        'shop' => true,
        'lotery' => true,
        'support' => true,
        'vote_ip' => false,
        'vote_gift' => true,
        'servers' => true,
        'staff' => true,
        'search' => true,
        'encyclopedia' => true,
        'gift_code' => true,
        'bourse_kamas' => true,
        'private_page' => true,
        'twitter' => true,
        'facebook' => true,
        'youtube' => true,
        'discord' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => 'production',

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => 'http://127.0.0.1/ANK129PRO/public/',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'fr',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'fr',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */
        Laravel\Tinker\TinkerServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

        // Barryvdh Debugbar
        Barryvdh\Debugbar\ServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
