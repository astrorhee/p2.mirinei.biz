<?php
class practice_controller extends base_controller {

    public function test_db() {

        
        # Our SQL command
        /*
        $q = "INSERT INTO users SET 
            first_name = 'Sam', 
            last_name = 'Seaborn',
            email = 'seaborn@whitehouse.gov'";

        echo $q;
        */

        /*
        $q = "UPDATE users
            SET email = 'samseaborn@whitehouse.gov'
            WHERE email = 'seaborn@whitehouse.gov'";
        echo $q;
        */

        /*
        $q = "DELETE FROM users
            WHERE email = 'samseaborn@whitehouse.gov'";
        echo $q;
        */

        /*
        # Run the command
        DB::instance(DB_NAME)->query($q);
        */

        /*
        $data = Array(
            'first_name' => 'Sam', 
            'last_name' => 'Seaborn', 
            'email' => 'seaborn@whitehouse.gov'
        );
        */

        /*
        Insert requires 2 params
        1) The table to insert to
        2) An array of data to enter where key = field name and value = field data

        The insert method returns the id of the row that was created
        */
 
        /*
        $user_id = DB::instance(DB_NAME)->insert('users', $data);

        echo 'Inserted a new row; resulting id:'.$user_id;
        */

        /*
        $_POST = DB::instance(DB_NAME)->sanitize['first_name']

        $q = 'SELECT email
            FROM users
            WHERE first_name = 
        echo DB::instance(DB_NAME)->select_field($q);
        */

    }
}
