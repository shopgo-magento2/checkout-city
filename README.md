Checkout City
=============


#### Contents
*   [Synopsis](#syn)
*   [Overview](#over)
*   [Installation](#install)
*   [Tests](#tests)
*   [Contributors](#contrib)
*   [License](#lic)


## <a name="syn"></a>Synopsis

A module that adds checkout city field to checkout quote shipping address.

## <a name="over"></a>Overview

Checkout City is a module that adds checkout city field to checkout quote shipping address.
Thus, making destination city available for third-party shipping methods.

## <a name="install"></a>Installation

Below, you can find two ways to install the shipping core module.

### 1. Install via Composer (Recommended)
First, make sure that Composer is installed: https://getcomposer.org/doc/00-intro.md

Make sure that Packagist repository is not disabled.

Run Composer require to install the module:

    php <your Composer install dir>/composer.phar require shopgo/checkout-city:*

### 2. Clone the checkout-city repository
Clone the <a href="https://github.com/shopgo-magento2/checkout-city" target="_blank">checkout-city</a> repository using either the HTTPS or SSH protocols.

### 2.1. Copy the code
Create a directory for the checkout city module and copy the cloned repository contents to it:

    mkdir -p <your Magento install dir>/app/code/ShopGo/CheckoutCity
    cp -R <checkout-city clone dir>/* <your Magento install dir>/app/code/ShopGo/CheckoutCity

### Update the Magento database and schema
If you added the module to an existing Magento installation, run the following command:

    php <your Magento install dir>/bin/magento setup:upgrade

### Verify the module is installed and enabled
Enter the following command:

    php <your Magento install dir>/bin/magento module:status

The following confirms you installed the module correctly, and that it's enabled:

    example
        List of enabled modules:
        ...
        ShopGo_CheckoutCity
        ...

### Create a checkout shipping rates validator for your custom shipping method

In order to validate checkout city field changes when your custom shipping module is used,
you have to create a shipping rate validator in your custom shipping module.
You can do that by following this gruide's instructions:
http://devdocs.magento.com/guides/v2.0/howdoi/checkout/checkout_carrier.html

In your validation rules JS file (view/frontend/web/js/model/shipping-rates-validation-rules.js),
make sure that you add "city" field to validation rules:

    'city': {
        'required': true
    }

## <a name="tests"></a>Tests

TODO

## <a name="contrib"></a>Contributors

* Ammar (<ammar@shopgo.me>)
* Emad (<emad@shopgo.me>)

## <a name="lic"></a>License

[Open Source License](LICENSE.txt)
