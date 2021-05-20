# SHIELD - Multiplatform Plugins

The purpose of these plugins is to use [SHIELD's API](https://shield.valkyriatech.com.br/) and control all application access in just one place.
As a software engineer, if you need to quickly block the access for some project, SHIELD is for you.

## About

For further information about **SHIELD**, it's functionality and help, access the [site](https://shield.valkyriatech.com.br/).

## Plugins functionality

All plugins do the same thing: a <code>GET</code> request to the API. If there's no plugin in the technology you're using, create your own solution:

**Endpoint:** [https://shield.valkyriatech.com.br/](https://shield.valkyriatech.com.br/)  
**Body parameters:**

| Name           | Type       | Value                      |
|----------------|------------|----------------------------|
| action         |  _STRING_  |  <code>verifyStatus</code> |
| app_identifier |  _STRING_  | <code>**YOUR_APP_ID**</code>   |

It will return a <code>JSON</code> response, like:

```json
{
  "status": 1,
  "content": {
    "redirect_page": ""
  },
  "message": null
}
```

**OBS:** <code>redirect_page</code> is a configurable attribute in [SHIELD's Dashboard](https://shield.valkyriatech.com.br/app)
