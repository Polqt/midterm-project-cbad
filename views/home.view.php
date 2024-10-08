<?php require 'partials/preloader.php'; ?>
<?php require 'partials/header.php'; ?>

<!-- Home Content, initially hidden -->
<div id="home-content" style="display: none;">
    <p><?php echo $_SESSION['name']; ?></p>
</div>

<?php require 'partials/footer.php'; ?>
