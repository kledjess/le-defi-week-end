

<!DOCTYPE html>
<html>
<head>
    <title>inscription_form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/st.css">
    <script src="js/script.js"></script>
</head>


<body>
    
     <div class="container">
         <div class="divider"></div>
         <div class="heading">
             <h2>espace d'inscription</h2>
         </div>
         
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="ind.php" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prenom</label>
                                <input type="text" id="firstname"  required name="firstname" class="form-control" placeholder="votre prénom" value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom</label>
                                <input type="text" id="name"  required name="name" class="form-control" placeholder="votre nom" value="">
                                <p class="comments"></p>
                            </div>
                             <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" id="email"  required name="email" class="form-control" placeholder="votre email" value="">
                                <p class="comments"></p>
                            </div>
                             <div class="col-md-6">
                                <label for="name">Telephone</label>
                                <input type="text" id="phone"  required name="phone" class="form-control" placeholder="votre téléphone"value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">mot de passe</label>
                                <input type="password" id="password"  required name="password" class="form-control" placeholder="votre mot de passe"value="">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">confirmation</label>
                                <input type="text" id="password"  required name="password" class="form-control" placeholder="confirmer le mot de passe"value="">
                                <p class="comments"></p>
                            </div>
                            
                             <button  class="button1"><a href="ind.php"></a>enregistrer</button>
                            
                        </div>   
                       
                    </form>
                </div>
            </div>

     </div>

</body>
</html>