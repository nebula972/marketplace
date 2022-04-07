<?php

    extract($_POST);

    $id = mysqli_connect("localhost","root","","boutique");
    $req = "UPDATE client SET
                nom = '$nom',
                prenom = '$prenom',
                mail = '$mail',
                tel = '$tel',
                adresse = '$tel',
                ville = '$ville',
                cp = '$cp',
                image = '$image'
            WHERE idc = $idc";
    mysqli_query($id, $req);
    echo "Les infos du Clients $nom ont bien été mises à jour.....";
    header("refresh:3; url=listeClients.php");

?>