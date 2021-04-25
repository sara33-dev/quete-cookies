<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>

<?php
if (!isset($_SESSION['username'])) {
    header('Location: /login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">

        <ul>
            <?php foreach ($_SESSION['cookies'] as $cookiesId => $quantity) : ?>
                <li>
                    <?php echo $catalog[$cookiesId]['name']; ?> : <?= $quantity ?>
                    <br>
                    <?php echo $catalog[$cookiesId]['description']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
