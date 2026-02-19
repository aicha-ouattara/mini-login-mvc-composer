# 📘 Mini Module de Connexion PHP (MVC + Composer)

## 🎯 Objectif du projet

Ce projet permet à un utilisateur de :

- s’inscrire
- se connecter
- accéder à sa page profil
- modifier son profil
- supprimer son compte

Il est construit avec :

- PHP orienté objet (POO)
- MVC (Model – View – Controller)
- Composer et autoload PSR-4
- Requêtes préparées avec marqueurs nommés
- Sessions PHP pour la gestion des utilisateurs
- Includes pour header et footer

---

## 📁 Arborescence

/mini-login-composer/
│
├── composer.json
├── index.php → routeur
│
├── config/
│ └── Database.php
│
├── controllers/
│ └── UserController.php
│
├── models/
│ └── User.php
│
├── views/
│ ├── layout/
│ │ ├── header.php
│ │ └── footer.php
│ │
│ ├── login.php
│ ├── register.php
│ ├── profile.php
│ └── edit.php
│
└── database.sql


---

## ✅ Fonctionnalités attendues

1. **Inscription**
   - Nom ≥ 3 caractères
   - Mot de passe ≥ 6 caractères et contenant au moins un chiffre
   - Mot de passe haché avec `password_hash()`

2. **Connexion**
   - Vérification des identifiants avec `password_verify()`
   - Création de session utilisateur
   - Redirection vers la page profil

3. **Profil**
   - Affichage : `Bienvenue [nom] !!`
   - Modification du nom
   - Suppression du compte
   - Déconnexion

---

## 🔧 Installation et lancement

1. Cloner le projet :

```bash
git clone <url-du-projet>
cd mini-login-composer

- Installer Composer :

composer install


- Lancer le projet dans votre serveur local (ex : XAMPP / MAMP / WAMP)

Accéder via navigateur :

http://localhost/mini-login-composer/index.php