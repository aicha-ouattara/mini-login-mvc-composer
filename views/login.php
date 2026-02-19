<?php include 'views/layout/header.php'; ?>

<h2>Connexion</h2>
<?php if (!empty($error)) echo $error; ?>

<form method="post">
    <input name="username" placeholder="Nom">
    <input type="password" name="password" placeholder="Mot de passe">
    <button>Connexion</button>
</form>

<a href="index.php?action=register">Inscription</a>

<?php include 'views/layout/footer.php'; ?>
