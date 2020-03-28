# Testable - Test Management Tool

Record single every single test that your team doing. Built for Laravel.

## Install

Register the provider on ``config/app.php``.

```php
'providers' => [
    /*
     * Package Service Providers...
     */
     Testable\TestableServiceProvider::class,
]

```

Add the following lines to your Laravel Mix file (webpack.mix.js).

```js
mix.js('packages/tirta-keniten/testable/resources/js/app.js', 'public/vendor/testable/js')
    .sass('packages/tirta-keniten/testable/resources/sass/app.scss', 'public/vendor/testable/css')
```
And re-compile the js and css.

```bash
# for development
npm run wath-poll

# for production
npm run prod
```

## Config

TBA

## Launch

TBA

## Customize

TBA

## License

The Testable is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
