# SHIELD | JavaScript Plugin

Developed to use **SHIELD's API** and controll web applications access.

For SHIELD information and basic tutorial, follow the [Usage](https://shield.valkyriatech.com.br/#usage) section.

## Installation

Just load <code>shield.js</code>

## Configuration

This plugin doesn't require an **APP ID**. If the application registered on [SHIELD's Dashboard](https://shield.valkyriatech.com.br/app) is a **web** type, the plugin will automatically use the <code>window.location.hostname</code> as **APP ID**

If the application you are going to use with this plugin **IS NOT** a web type in SHIELD's Dashboard, copy your **APP ID** and paste it on <code>shield.js</code>:

```javascript
// SHIELD HOST
const shield_host = 'https://shield.valkyriatech.com.br/';

// APP IDENTIFIER DECLARATION
const app_identifier = 'PASTE_THE_APP_ID_HERE';

docReady(function(){
...
});
```
