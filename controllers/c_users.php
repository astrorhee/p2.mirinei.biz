<?php

class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 


    public function index() {
        echo "This is the index page";
    }


    public function signup($error = NULL) {

        $this->template->title          = "Sign Up";
        $this->template->content        = View::instance('v_users_signup');
        $this->template->content->error = $error;

        echo $this->template;
    }


    public function p_signup() {

        // Note that !!$var is equivalent to !empty($var) .
        if (!!$_POST['first_name'] and !!$_POST['last_name'] and !!$_POST['email'] and !!$_POST['password']) {
            $_POST['created']  = Time::now();
            $_POST['modified'] = Time::now();
            $_POST['token']    = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
            $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
            $_POST['location'] = NULL;
            $_POST['website']  = NULL;
            $_POST['bio']      = NULL; 

            $user_id = DB::instance(DB_NAME)->insert('users', $_POST);

            // Self-following
            $data = Array(
                "created" => Time::now(),
                "user_id" => $user_id,
                "user_id_followed" => $user_id
            );

            DB::instance(DB_NAME)->insert('users_users', $data);


            setcookie("token", $_POST['token'], strtotime('+1 year'), '/');
            Router::redirect("/users/profile");

        } else {
            Router::redirect("/users/signup/error");
        }
    }


    public function login($error = NULL) {
 
        $this->template->title          = "Login";
        $this->template->content        = View::instance('v_users_login');
        $this->template->content->error = $error;

        echo $this->template;
    }


    public function p_login() {

        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        $q = "SELECT token 
            FROM users 
            WHERE email = '".$_POST['email']."' 
            AND password = '".$_POST['password']."'";

        $token = DB::instance(DB_NAME)->select_field($q);

        if(!$token) {
            Router::redirect("/users/login/error");
        } else {
            setcookie("token", $token, strtotime('+1 year'), '/');
            Router::redirect("/");
        }
    }


    public function logout() {

        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        $data = Array("token" => $new_token);

        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        setcookie("token", "", strtotime('-1 year'), '/');

        Router::redirect("/");
    }


    public function profile($error = NULL) {

        // If user is blank, they're not logged in; redirect them to the login page
        if(!$this->user) {
            Router::redirect('/users/login');
            //die('Members only. < href="/users/login">Login</a>');
        }

        $this->template->title          = "Profile of ".$this->user->first_name;
        $this->template->content        = View::instance('v_users_profile');
        $this->template->content->error = $error;

        echo $this->template;
    }


    public function p_profile() {

        // Note that !!$var is equivalent to !empty($var) .
//        if (!!$_POST['first_name'] and !!$_POST['last_name'] and !!$_POST['email'] and !!$_POST['password']) {
        if (!!$_POST['first_name'] and !!$_POST['last_name'] and !!$_POST['email']) {
            $_POST['modified'] = Time::now();

            if (!$_POST['password']) {
                $_POST['password'] = $this->user->password;
            } else {
                $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);    
            }

            DB::instance(DB_NAME)->update("users", $_POST, "WHERE token = '".$this->user->token."'");

            Router::redirect("/");

        } else {
            Router::redirect("/users/profile/error");
        }
    }

}

?>