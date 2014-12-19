<!DOCTYPE html> 
<html xmlns:fb="https://www.facebook.com/2008/fbml">
  <head> 
    <title> 
      Home Page
    </title> 
  </head> 
<body> 
 	
<div id="fb-root"></div>
<h2>Facebook Connect Button Will be on home page</h2><br />
<div id="user-info"></div>
<p><button id="fb-auth">Login</button></p>

<script>
window.fbAsyncInit = function() {
  FB.init({ appId: '462254307141500',//'462254307141500', 
	    status: true, 
	    cookie: true,
	    xfbml: true,
	    oauth: true});

  function updateButton(response) {
    var button = document.getElementById('fb-auth');
		
    if (response.authResponse) {
      //user is already logged in and connected
	  top.location.href = 'load_facebook_api';
          
      
    } else {
      //user is not connected to your app or logged out
      button.innerHTML = 'Login';
      button.onclick = function() {
        FB.login(function(response) {
	  if (response.authResponse) {
           top.location.href = 'load_facebook_api';	   
          } else {
            //user cancelled login or did not grant authorization
          }
        }, {scope:'publish_stream,manage_pages,offline_access,user_photos,photo_upload'});  	
      }
    }
  }

  // run once with current status and whenever the status changes
  FB.getLoginStatus(updateButton);
  FB.Event.subscribe('auth.statusChange', updateButton);	
};
	
(function() {
  var e = document.createElement('script'); e.async = true;
  e.src = document.location.protocol 
    + '//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);
}());

</script>
</body> 
</html>
