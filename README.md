# Denmark vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Denmark vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/dk-vat-format-validator
```

## Usage example

Valid Denmark vat number:

```php
$validator = new DKVatFormatValidator();
$validator->isValid('DK12345678');
$validator->isValid('12345678');
```

Returns:

```shell
true
true
```

Invalid Denmark vat number:

```php
$validator = new DKVatFormatValidator();
$validator->isValid('DK123456789');
$validator->isValid('DK1234567');
$validator->isValid('123456789');
$validator->isValid('1234567');
$validator->isValid('DE12345678');
```

```shell
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
