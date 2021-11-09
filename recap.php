<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récap</title>
</head>
<body>
    <?php 
    
            
            if(!isset($_SESSION['product']) || empty($_SESSION['product'])){
                    echo "<p>Aucun produit es session...</p>";
            }else{
                echo "<table>",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Total</th>",
                            "<tr>",
                        "<thead>",
                    "<tbody>";
                $totalGeneral = 0;
                foreach($_SESSION["product"] as $index =>$product){
                    echo "<tr>",
                                "<th>".$index."</th>",
                                "<th>".$product['name']."</th>",
                                "<th>".number_format($product['price'],2,",","&nbsp;")."&nbsp;€</th>",
                                "<th>".$product['qtt']."</th>",
                                "<th>".number_format($product['total'],2,",","&nbsp;")."&nbsp;€</th>",
                        "<tr>";
                    $totalGeneral += $product['total'];
                }
                echo "<tr>",
                        "<td colspan=4>Total général : </td>",
                        "<td><strong>".number_format($totalGeneral,2,",","&nbsp;")."&nbsp;€</strong></td>",
                    "</tbody>",
                "</table>";
            }
    ?>
</body>
</html>