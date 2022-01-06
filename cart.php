<?php
require 'inc/head.php';
require 'inc/data/products.php';
if(!isset($_SESSION['name'])){
    header('Location:/login.php');
    die;
}
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <h1>Panier</h1>
        <table>
            <tr>
                <th>Nom du produits</th>
                <th>Nombre</th>
            </tr>

        <?php
        foreach ($_SESSION['cart'] as $idProduct => $quantity) {
            if(isset($catalog[$idProduct])){
        ?>
            <tr>
                <td><?= $catalog[$idProduct]['name'] ?></td>
                <td><?= $quantity ?></td>
        <?php
            }
            }
        ?>
            </tr>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
