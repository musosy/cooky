<?php require 'inc/head.php'; 
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="container-fluid p-5">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['cart'] as $key => $value) { ?>
                    <tr>
                        <td scope="row"><?= $catalog[$key]['name'] ?></td>
                        <td><?= $catalog[$key]['description'] ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
