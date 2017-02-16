

window.fbAsyncInit = function() {
  FB.init({
    appId      : '169951450122327',
    cookie     : false,  // enable cookies to allow the server to access 
    status     : true,
    oauth      : true,               // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });
;};

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

    function checkLoginState() {
    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
      window.location.replace('http://localhost/uploadtube/fbconnect.php');
      }
      else {
      window.location.replace('http://localhost/uploadtube/fbconnect.php');
    }
  });
}
function fb_logout () {
  var elem=document.getElementById('fdel2');
  
  document.location.replace('http://localhost/uploadtube/sess_destr.php');
  // body...
}

function sess_true (a) {
  var elem=document.getElementById('fdel2');
        
       /*FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);*/
      /*document.getElementById('fb_button').innerHTML =
        'Thanks for logging in, ' + a + '!';*/
        elem.innerHTML='<img src="'+a+'"  style="margin-top:-10px;" onclick="fb_logout()"/>';
      
    /*});*/
}
function sess_false () {
  /*FB.login(function(response) {
      console.log(response.grantedScopes+" ");     
      }, {scope: 'public_profile,email,publish_actions',return_scopes: true}); */ // body...
}