<?php

class RegisterController
{
    public function index(): void
    {
        $data = [];
        View::load('connection/register', $data);
    }

    /**
     * @throws Exception
     */
    public function connect(): void
    {
        if (isset($_POST['password'])) {
            $pass = md5($_POST['password']);
            extract($_POST, EXTR_OVERWRITE);
            $data = array(
                'firstName' => $first_name,
                'lastName' => $last_name,
                'login' => $username,
                'password' => $pass,
                'is_admin' => 0
            );
            $db = new users();
            if ($db->insert($data)) {
                notif::add('account created successfully<br><br>connect now');
                view::load('connection/login');
            } else {
                notif::add('Error in creating account !', 'error');
            }
        } else {
            notif::add('error in created account<br><br>try again', 'error');
            View::load('register');
        }
    }
}