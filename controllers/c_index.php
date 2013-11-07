<?php

class index_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    }

    // accessed via http://localhost/index/index/
    public function index() {

        // Any method that loads a view will commonly start with the following.
        $this->template->content = View::instance('v_index_index');
        $this->template->title   = "Hello World";

        // CSS/JS includes
        /*
        $client_files_head = Array("");
        $this->template->client_files_head = Utils::load_client_files($client_files);

        $client_files_body = Array("");
        $this->template->client_files_body = Utils::load_client_files($client_files_body);
        */

        // Render the view
        echo $this->template;
    }

}

?>
