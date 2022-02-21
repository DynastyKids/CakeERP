# CakeERP

CakeERP is a suite of PHP based open source ERP apps creating with [CakePHP](https://cakephp.org) 4.x.

Current App is building with a number of features including  Warehouse Management tool, Order Fulfillment, Billing, Accounting, Point of Sales, Human Resources, Newsletter tools, 2FA login security...

More features will be added after first stage completed

## Dependency

1. MySQL suggest 5.7 or higher
2. Minimum PHP 7.2 required
3. PHP extensions: php-mbstring, php-intl, php-mysql, php-pdo, php-xml, php-xmlrpc
4. Enable rewrite feature in Apache 2 setting
5. [Composer](https://getcomposer.org/doc/00-intro.md)

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `composer install` to install additional dependency packages.

## Configuration
Read and edit the environment specific `config/app_local.php` and setup the
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

1. Disable the debug mode by change it from `true` to `false`
2. Set up your own local database by import the schema from `config/schema/erp.sql`
3. Follow the promote screen to complete the initial settings

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server
```

Then visit `http://Your-server-address:8765` to see the welcome page.

4. After your initial setting complete, you can now use website open within your company.

## Future Planning
1. Customer Relation Management
2. Project Management (Or may interacting with your trello)
3. Manufacturing
4. Analytics & Reporting

## Other resources used
### Layout

The original app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default.

The dashboard is uses [Material Dashboard 2](https://github.com/creativetimofficial/material-dashboard) with Boostrap 5.

2FA login management support is powered by [sonata-project/google-authenticator](https://packagist.org/packages/sonata-project/google-authenticator)
