function docReady(fn) {
  // see if DOM is already available
  if (document.readyState === 'complete' || document.readyState === 'interactive') {
    // call on next available tick
    setTimeout(fn, 1);
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

// SHIELD HOST
const shield_host = 'https://shield.valkyriatech.com.br/';

// APP IDENTIFIER DECLARATION
const app_identifier = '';

docReady(function(){

  let identifier = (app_identifier == '') ? window.location.hostname : app_identifier;

  fetch(shield_host + '?' + new URLSearchParams({

    action: 'verifyStatus',
    app_identifier: identifier

  }))
  .then(function(response) {
    return response.json();
  })
  .then((json) => {

    if (json.status == false || json.status == 0) {
      if (json.content.redirect_page != null && json.content.redirect_page != '')

        window.location.href = json.content.redirect_page;

      else {

        window.location.href = (shield_host + '?action=inactiveApp&app_identifier=' + identifier);

      }
    }

  });
});
