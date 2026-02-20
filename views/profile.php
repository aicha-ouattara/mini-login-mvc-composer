<?php include 'views/layout/header.php'; ?>

<h2>Bienvenue <?= $_SESSION['user']['username'] ?> !!</h2>

<a href="index.php?action=edit">Modifier mon profil</a><br>
<a href="index.php?action=delete">Supprimer mon compte</a><br>
<a href="index.php?action=logout">Déconnexion</a>

<?php include 'views/layout/footer.php'; ?>
