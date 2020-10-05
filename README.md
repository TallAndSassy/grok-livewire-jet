# :
[![License](https://img.shields.io/github/license/:tallandsassy/:grok-livewire-jet)](https://github.com/:tallandsassy/:grok-livewire-jet/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:tallandsassy/:grok-livewire-jet.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:grok-livewire-jet)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:tallandsassy/:grok-livewire-jet/run-tests?label=tests)](https://github.com/:tallandsassy/:grok-livewire-jet/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:tallandsassy/:grok-livewire-jet/badge.svg?branch=master)](https://coveralls.io/github/:tallandsassy/:grok-livewire-jet?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:tallandsassy/:grok-livewire-jet.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:grok-livewire-jet)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Please send love

## Installation

You can install the package via composer:

[ ] Make a local table for testing called 'tmp_laravel_package' (per 'phpunit.xml')

```bash
composer require tallandsassy/grok-livewire-jet
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="TallAndSassy\GrokLivewireJet\GrokLivewireJetServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TallAndSassy\GrokLivewireJet\GrokLivewireJetServiceProvider" --tag="config"
```

You can grok the routes (when .env(local)) by visiting 
    
http://test-tallandsassy.test/grok/TallAndSassy/GrokLivewireJet/string
http://test-tallandsassy.test/grok/TallAndSassy/GrokLivewireJet/controller

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$grok-livewire-jet = new TallAndSassy\GrokLivewireJet();
echo $grok-livewire-jet->echoPhrase('Hello, TallAndSassy!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:jjrohrer](https://github.com/:jjrohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
