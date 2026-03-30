# Core Contador Matrix Module for Magento 2

## Overview
The `Core_Contador` module provides a DatePicker configuration block and a Helper to fetch configuration settings for a store. This allows administrators to select a date in the configuration section using a jQuery UI DatePicker, and developers can access custom configuration states from the admin section.

## Features
- Provides a Datepicker element configuration component (`Core\Contador\Block\DatePicker`).
- Includes a simple Configuration Helper to fetch store-scoped configuration securely (`Core\Contador\Helper\Data`).

## Requirements
- Magento 2.x
- PHP >= 7.3

## Installation
1. Move or clone this module into the `app/code/Core/Contador` directory of your Magento 2 installation.
2. Run the following commands:
```bash
php bin/magento module:enable Core_Contador
php bin/magento setup:upgrade
php bin/magento cache:clean
```

## Structure
- `Block/DatePicker.php`: System configuration field that renders an administration-side datepicker using jQuery UI.
- `Helper/Data.php`: A basic Helper class that facilitates grabbing module configuration paths across the global store scope.

## Usage (Developer)
**Using the DatePicker Block in `system.xml`**
```xml
<field id="custom_date" translate="label" type="text" sortOrder="10" showInDefault="1" showInWebsite="1" showInStore="1">
    <label>Custom Date</label>
    <frontend_model>Core\Contador\Block\DatePicker</frontend_model>
</field>
```

**Using the Config Helper in your classes**
```php
public function __construct(
    \Core\Contador\Helper\Data $helperData
) {
    $this->helperData = $helperData;
}

public function getMyConfig()
{
    // Retrieve your config setup from: core/contador/my_config_path
    return $this->helperData->getConfig('core/contador/my_config_path');
}
```

## License
Proprietary / Open Source (Update according to the organization's needs).
