<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Fábio Vieira - ADM</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="393326472496-hfk224q73qkn4bfh89ejc3pamfms1mjo.apps.googleusercontent.com">
    </head>
    <body>
    	<div class="user">
      	<img id="user-photo" src="https://lh3.googleusercontent.com/-rxonFJkJsdY/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rd8SB83c9G_pEDC4RA7yn3G08LL8Q/photo.jpg">
      	<h2>Olá, <span id="user-name">Obrigado por acessar a minha página teste </span>!</h2>

      	<p><?php echo $_SESSION['userName']; ?>
		
    </div>

     <style type="text/css">
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,500,600,300);
 
      body {
        margin: 0;
        padding: 10%;
        text-align: center;
        font-family: 'Open Sans';
        background: #F8F8F8;
      }
 
      .user {
          padding: 50px 20px;
          background: #FFFFFF;
          border-radius: 2px;
          box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
          width: 330px;
          display: block;
          margin: 0 auto;
      }
 
      #user-photo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: 0 auto 10px auto;
      }
 
      h1 {
        display: block;
        margin: 0 auto;
        text-align: center;
        font-weight: lighter;
      }
 
      #user-name {
        color: #ff8080;
        font-weight: bold;
      }
 
      #user-email {
        display: block;
        margin: 0 auto;
        text-align: center;
        color: #0066AA;
      }
 
      .g-signin2,
      .g-signin2 .abcRioButton {
        display: block;
        margin: 20px auto 0 auto;
        text-align: center;
      }
    </style>

		<p><a href="login.php" onclick="signOut();"><img src="https://img.icons8.com/officel/36/000000/exit.png" title="Sair"></a>

		<script>
		  function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('User signed out.');
			});
		  }
		</script>

		
    </body>
</html>