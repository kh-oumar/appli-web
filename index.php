<?php 
    session_start();
    
?>       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form action="traitement.php" method="post">
        <div>
            <label for="nom">
                Nom du produit :
                <input type="text" name="name">
            </label>
            
        </div>
        <div>
            <label for="prix">
                Prix du produit :
                <input type="number" step="any" name="price">
            </label>
            
        </div>
        <div>
            <label for="qte">
                Quantité désitée :
                <input type="number" name="qtt" value="1">
            </label>
            
        </div>
        <input type="submit" name="submit" value="Ajouter le produit">
    </form>
</body>
</html>