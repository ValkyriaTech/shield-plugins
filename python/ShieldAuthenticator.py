import requests
import json

class ShieldAuthenticator:

    def __init__(self, appIdentifier):
        # SHIELD host
        self.host = 'https://shield.valkyriatech.com.br/'
        self.appIdentifier = appIdentifier

    def authenticate(self):
        request = requests.get(self.host + '?action=verifyStatus&app_identifier=' + self.appIdentifier)
        response = json.loads(request.text)

        return (response['status'] == 1)
