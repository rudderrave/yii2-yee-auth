# yii2-yee-auth

##Yee CMS - Auth Module use in Yee-Core-Rest

####Frontend authorization module

This module is part of Yee CMS (based on Yii2 Framework).

This module implements user registration, authorization, social authorization, password recovery and so on. 

Installation
------------

Either run

```
composer require --prefer-dist rudderrave/yii2-yee-auth "dev-master"
```

or add

```
"rudderrave/yii2-yee-auth": "dev-master"
```

to the require section of your `composer.json` file.


Run migrations

```php
yii migrate --migrationPath=@vendor/rudderrave/yii2-yee-auth/migrations/
```

Configuration
------
- In your frontend config file

```php
'modules'=>[
    'auth' => [
        'class' => 'yeesoft\auth\AuthModule',
    ],
],
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'google' => [
                'class' => 'yii\authclient\clients\Google',
                'clientId' => '*****',
                'clientSecret' => '*****',
            ],
            'facebook' => [
                'class' => 'yii\authclient\clients\Facebook',
                'clientId' => '*****',
                'clientSecret' => '*****',
            ],
            'twitter' => [
                'class' => 'yii\authclient\clients\Twitter',
                'consumerKey' => '*****',
                'consumerSecret' => '*****',
            ],
        ],
    ],
],
```
