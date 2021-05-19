# SHIELD | Python3 Plugin

Developed to use **SHIELD's API** and controll applications access.

For SHIELD information and basic tutorial, follow the [Usage](https://shield.valkyriatech.com.br/#usage) section.

## Installation

Use <code>main.py</code> as base for your application and put <code>ShieldAuthenticator.py</code> in the **same directory**.

## Configuration

In <code>main.py</code>, set you **APP ID**. <code>authenticate()</code> will return a _boolean_. Just follow the example **if statement** and decide how your application will handle it.

```python
# APP IDENTIFIER DECLARATION
shieldAuth = ShieldAuthenticator('PASTE_THE_APP_ID_HERE')
confirmation = shieldAuth.authenticate()

if (confirmation):
    # continue
else:
    # app blocked!
```
