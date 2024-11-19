<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email'=> $_POST['email'],
    'password' => $_POST['password']
]);

$signedId =(new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$signedId) {
    $form->error('email', 'No matching account found for that email address and password.')->throw();
}
redirect('/');

