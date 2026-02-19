<?php
namespace App\Controllers;

use App\Config\Database;
use App\Models\User;

class UserController
{
    private $user;

    public function __construct()
    {
        session_start();
        $db = new Database();
        $this->user = new User($db->getConnection());
    }

    public function login()
    {
        if (!empty($_POST)) {
            $data = $this->user->findByUsername($_POST['username']);
            if ($data && password_verify($_POST['password'], $data['password'])) {
                $_SESSION['user'] = $data;
                header("Location: index.php?action=profile");
                exit;
            } else {
                $error = "Identifiants incorrects";
            }
        }
        require 'views/login.php';
    }

    public function register()
    {
        if (!empty($_POST)) {
            $this->user->create($_POST['username'], $_POST['password']);
            header("Location: index.php");
            exit;
        }
        require 'views/register.php';
    }

    public function profile()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
            exit;
        }
        require 'views/profile.php';
    }

    public function edit()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php");
            exit;
        }

        if (!empty($_POST)) {
            $this->user->update($_SESSION['user']['id'], $_POST['username']);
            $_SESSION['user']['username'] = $_POST['username'];
            header("Location: index.php?action=profile");
        }

        require 'views/edit.php';
    }

    public function delete()
    {
        $this->user->delete($_SESSION['user']['id']);
        session_destroy();
        header("Location: index.php");
    }

    public function logout()
    {
        session_destroy();
        header("Location: index.php");
    }
}
