from ShieldAuthenticator import ShieldAuthenticator

# APP IDENTIFIER DECLARATION
shieldAuth = ShieldAuthenticator('PASTE_THE_APP_ID_HERE')
confirmation = shieldAuth.authenticate()

if (confirmation):
    # continue
else:
    # app blocked!
