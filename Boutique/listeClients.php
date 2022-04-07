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
    
    <h1>Liste des clients du site</h1><hr>
    <table>
        <tr>
            <th>#</th><th>Nom</th><th>Prénom</th>
            <th>mail</th><th>tel</th><th>adresse</th>
            <th>ville</th><th>cp</th><th>image</th>
            <th>modifier</th><th>supprimer</th>
        </tr>
    <?php
    $id = mysqli_connect("127.0.0.1","root","","boutique");
    $req = "select * from client order by nom";
    $resultat = mysqli_query($id, $req);
    while($ligne = mysqli_fetch_assoc($resultat))
    {
    $mail = $ligne["mail"];
    $image = $ligne["image"];
    echo "<tr>
            <td>".$ligne["idc"]."</td>
            <td>".$ligne["nom"]."</td>
            <td>".$ligne["prenom"]."</td>
            <td>".$ligne["mail"]."</td>
            <td>".$ligne["tel"]."</td>
            <td>".$ligne["adresse"]."</td>
            <td>".$ligne["ville"]."</td>
            <td>".$ligne["cp"]."</td>
            <td><img src='images/$image' width='70'></td>
            <td><a href='modif.php?idc=".$ligne["idc"]."'><img src='modif.png' width='25'></a></td>
            <td><a href='supp.php?idc=".$ligne["idc"]."'><img src='supp.png' width='25'></a></td>
        
        </tr>";
    }
    ?>
    </table>
    Il y a <?php echo mysqli_num_rows($resultat);?> client(s) <br><br><br><br><br><br><br>








<form action="inscription.php" method="post">
    <input type="submit" value="back">
</form>
</body>
</html>