<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Fábio - Login</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="393326472496-hfk224q73qkn4bfh89ejc3pamfms1mjo.apps.googleusercontent.com">


		 <style type="text/css"> 

      @import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,600,700,400);
 
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
        color: #0066AA;
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

    </head>
    <body>
    	<div class="user">
      	<img id="user-photo" src="https://lh3.googleusercontent.com/-rxonFJkJsdY/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rd8SB83c9G_pEDC4RA7yn3G08LL8Q/photo.jpg">
      	<h1>Olá, <span id="user-name">Fábio Vieira</span>!</h1>

     <div class="container">
        <div class="card card-container">
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Usuário" required autofocus><p>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required><p>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Acessar</button>
            </form>
            
<h4>Ou entre com uma rede social</h4>

      	<p id="user-email"></p>
    </div>
		<div class="g-signin2" data-onsuccess="onSignIn"></div>
		
		<p id='msg'></p>
		<script>
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var userID = profile.getId(); 
			var userName = profile.getName(); 
			var userPicture = profile.getImageUrl(); 
			var userEmail = profile.getEmail(); 			 
			var userToken = googleUser.getAuthResponse().id_token; 
			
			//document.getElementById('msg').innerHTML = userEmail;
			if(userEmail !== ''){
				var dados = {
					userID:userID,
					userName:userName,
					userPicture:userPicture,
					userEmail:userEmail
				};
				$.post('valida.php', dados, function(retorna){
					if(retorna === '"erro"'){
						var msg = "Usuário não encontrado com esse e-mail";
						document.getElementById('msg').innerHTML = msg;
					}else{
						window.location.href = retorna;
					}
					
				});
			}else{
				var msg = "Usuário não encontrado!";
				document.getElementById('msg').innerHTML = msg;
			}
		}

		</script>		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script>
      var finished_rendering = function() {
      console.log("finished rendering plugins");
      var spinner = document.getElementById("spinner");
      spinner.removeAttribute("style");
      spinner.removeChild(spinner.childNodes[0]);
    }
      FB.Event.subscribe('xfbml.render', finished_rendering);
        </script>

      <div align="center" id="spinner"
    style="
        background: #4267b2;
        border-radius: 5px;
        margin: 20px auto 0 auto;
        color: white;
        height: 25px;
        text-align: center;
        width: 150px;">Facebook<div
    class="fb-login-button"
    data-max-rows="1"
    data-size="large"
    data-button-type="continue_with"
    data-use-continue-as="true"
    ></div>
</div>


     <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>

      <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="false"></div>


    </body>
</html>
