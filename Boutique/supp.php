<?php
    
    $idc =  $_GET["idc"];

    select * from client where idc=

    echo "Le client numéro : $mail été supprimé de la base.....";

    $id = mysqli_connect("localhost","root","","boutique");
    $req = "delete from client where idc = $idc";
    mysqli_query($id, $req);
    header("refresh:3; url=listeClients.php");
?>