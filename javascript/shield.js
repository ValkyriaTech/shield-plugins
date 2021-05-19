// SHIELD HOST
const shield_host = 'https://shield.valkyriatech.com.br/';

// APP IDENTIFIER DECLARATION
var app_identifier = '';

if (app_identifier == '') {
  if (window)
    app_identifier = window.location.hostname;
  else if (request)
    app_identifier = request.headers.host;
}

if (app_identifier != '') {
  fetch(shield_host + '?' + new URLSearchParams({

    action: 'verifyStatus',
    app_identifier: app_identifier

  }))
  .then(function(response) {
    return response.json();
  })
  .then((json) => {

    if (json.status == false || json.status == 0) {
      if (window) {
        if (json.content.redirect_page != null && json.content.redirect_page != '')

          window.location.href = json.content.redirect_page;

        else {

          window.location.href = (shield_host + '?action=inactiveApp&app_identifier=' + app_identifier);

        }
      } else {

        // app blocked!

      }
    }

  });
} else
    console.log('APP identifier empty!');
