<?php
require 'inc/Autoloader.php';

Session::getInstance()->delete('id');
Session::getInstance()->delete('auth');
Session::getInstance()->setFlash('success',"vous êtes maintenant déconnecté");
App::redirect('signin.php');