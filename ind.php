

<!DOCTYPE html>
<html>
<head>
    <title>espace de connexion</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles.css">
    <script src="js/script.js"></script>
</head>


<body>
<div class="contenair"> 
        <div class="heading">
            <h2>Login</h2>
        </div>

<div class="bg-danger mx-20">
    <div class="col-lg-5 col-lg-offset-3">
        <form class="login-form" method="post" action="contacts.php" role="form">
<h3 class="connect">connectez-vous ici</h3>


<div class="row">
                            <div class="col-md-6">
                                <label for="login">LOGIN</label>
                                <input type="login" id="login" required name="login" placeholder="votre login" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="mot">MOT DE PASSE</label>
                                <input type="password" id="password" required name="password" placeholder="votre mot de passe" value="">
                                <p class="comments"></p>
                            </div> 


                            <p>
                            <div>

                            <button  class="button1"><a href="contacts.php"></a>se connecter</button>
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp

                                <button  class="button1"><a href="contacts.php"></a>creer un compte</button>
                               
                                </div>
                            </p>  
        </form>
       </div>
    </div>

  </div>
</body>
</html>