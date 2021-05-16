# SHIELD | PHP Plugin

Developed to use **SHIELD's API** and controll web applications access.

For SHIELD information and basic tutorial, follow the [Usage](https://shield.valkyriatech.com.br/#usage) section.

## Installation

Use <code>index.php</code> as base for your application and put <code>ShieldAuthenticator.php</code> in the **same directory**. Load the default components from your project in <code>loadApplication()</code>:

```php
function loadApplication() {

  // continue loading your application

}
```

## Configuration

This plugin doesn't require an **APP ID**. If the application registered on [SHIELD's Dashboard](https://shield.valkyriatech.com.br/app) is a **web** type, the plugin will automatically use the <code>hostname</code> _(example.xyz)_ as **APP ID**

If the application you are going to use with this plugin **IS NOT** a web type in SHIELD's Dashboard, copy your **APP ID** and paste it on <code>index.php</code>:

```php
<?php

  define('APP_IDENTIFIER', 'PASTE_THE_APP_ID_HERE');

  function loadApplication() {
    ...
  }
```
