<?php include 'views/layout/header.php'; ?>

<h2>Modifier mon profil</h2>

<form method="post">
    <input type="text" name="username" value="<?= $_SESSION['user']['username'] ?>">
    <button>Modifier</button>
</form>

<a href="index.php?action=profile">Retour</a>

<?php include 'views/layout/footer.php'; ?>
