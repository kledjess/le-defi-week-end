
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "igs_local";

  $pdo = new PDO("mysql:host=localhost;dbname=igs_local", "root", "");

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $genre = $_POST['telephone'];
    $motdepasse = $_POST['motdepasse1'];
    $motdepasse1 = $_POST['motdepasse'];
    
   

    if ($motdepasse1 == $motdepasse){
         $motdepassecrypte=md5($_POST['motdepasse']);
         $sql = "INSERT INTO igs_localdinscription (prenoms, nom, email,  telephone, motdepasse1,motdepasse)
        VALUES (?,?,?,?,?,?)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$prenom, $nom, $email, $telephone, $motdepassecrypte]);
        header("location:ind.php");
    } else{
        echo "le mot de passe et confimer mot de passe ne sont pas conformes";
    }



?>