
# Laravel UTM Analytics

## Installation

Add following to the `composer.json` file
```php
...
"repositories": [
    ...
    {
        "type": "vcs",
        "url": "https://github.com/SirOlaoluwani/laravel-package-test"
    }
]
```

the install via composer

```php
composer require olaoluwani/utm-analytics
```

Add the following in the `config/app` file

```php
...
/*
* Package Service Providers...
*/
...
Olaoluwani\UtmAnalytics\Providers\UTMAnalyticsProvider::class
...
```

Run the following command in your terminal

```php
php artisan vendor:publish --provider="Olaoluwani\UtmAnalytics\Providers\UTMAnalyticsProvider" --tag="migrations"
```


Then run migrations

```php
php artisan migrate
```


## Usage

To get a list of all utm data
```php
api/utm-analytics/
```

To get a list 
```php
api/utm-analytics/save/{userId}
```
replace `{userId}` with the user's id
