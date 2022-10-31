
# Laravel UTM Analytics

## Installation

Run the following command in your terminal

```php
php artisan vendor:publish --provider="Olaoluwani\UtmAnalytics\Providers\UTMAnalyticsProvider" --tag="migrations"
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
