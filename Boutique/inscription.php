<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boutique.css">
</head>
<body>
    <h1>Inscription nouveau client</h1><hr>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="nom" placeholder="Nom :" required><br><br>
    <input type="text" name="prenom" placeholder="Prénom :" required><br><br>
    <input type="email" name="mail" placeholder="Mail :" required><br><br>
    <input type="password" name="mdp" placeholder="Mot de passe :" required><br><br>
    <input type="tel" name="tel" placeholder="Téléphone :" required><br><br>
    <input type="text" name="adresse" placeholder="Adresse :" required><br><br>
    <input type="text" name="ville" placeholder="Ville :" required><br><br>
    <input type="text" name="cp" placeholder="Code postal :" required><br><br>
    <input type="file" name="image" required><br><br>
    <input type="submit" value="Enregistrer" name="bout">
    </form><hr>

    <?php

       if(isset($_POST["bout"])){
           //var_dump($_POST);
           //var_dump($_FILES);
        //Extraction des informations du formulaire
        extract($_POST);
        //Récupération du type du fichier uploadé
        $pos = strpos($_FILES["image"]["type"],"/");
        $type = substr($_FILES["image"]["type"], $pos+1);
        //Test sur les types autorisés
        if($type!="png" && $type!="jpg" && $type!="jpeg"){
            echo "$type est un Format non pris en charge, veuillez entrer du jpg ou png Merci!!!";
        }else{
            //Test sur la taille des fichiers
         if($_FILES["image"]["size"] >3000000) echo "Fichier trop lourd";
         else {
             //Insertion dans la bdd des infos du client (sauf image)
             $id = mysqli_connect("localhost","root","","boutique");
             $req = "insert into client values 
            (null,'$nom','$prenom','$mail','$mdp','$tel','$adresse','$ville','$cp','')";
            mysqli_query($id, $req);
            //Récupération de l'idc du client qui vient d'être ajouté
            $req = "select max(idc) as maxi from client";
            $res = mysqli_query($id, $req);
            $ligne = mysqli_fetch_assoc($res);
            $idClient = $ligne["maxi"];
            //Concaténation (nom+type) de l'image
            $image = $idClient.".".$type;
            
            //Mise à jour de l'image du nouveau client (on ajoute le nom de l'image en bdd)
            $req = "update client set image='$image' where idc=$idClient";
            mysqli_query($id, $req);
            //L'image uploadé est copiée et renomée dans le dossier images
             $resultat = move_uploaded_file($_FILES["image"]["tmp_name"], "images/$image");

            header("refresh:3; url=listeClients.php");
         }
        }
       }
    ?>






</body>
</html>