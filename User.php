<?php
    class Account
    {
        public $name;
        public $username;
        public $email;

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;   
        }

        function set_username($username) {
            $this->username = $username;
        }

        function get_username() {
            return $this->username;
        }

        function set_email($email) {
            $this->email = $email;
        }

        function get_email() {
            return $this->email;
        }
    }

    $example = new Account();
    
    $example->set_name('Gabriel Medel Sayo');
    $example->set_username('GabrielSayo');
    $example->set_email('sayogabrielmedel@gmail.com');


    echo "Name: ".$example->get_name();
    echo "<br>";
    echo "Username: ".$example->get_username();
    echo "<br>";
    echo "Email: ".$example->get_email();
    echo "<br>";
    echo "<br>";
    echo "{$example->get_username()}. Added a Friend.";
    echo "<br>";
    echo "{$example->get_name()}. Posted a Status.";
?>
