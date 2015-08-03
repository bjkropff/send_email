<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    class Email
    {
        private $name;
        private $email;
        private $subject;
        private $message;
        private $notarobot;

        function __construct($name, $email, $subject, $message, $notarobot)
        {
            $this->name = $name;
            $this->email = $email;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setEmail($new_email)
        {
            $this->email = (string) $new_email;
        }

        function getEmail()
        {
            return $this->email;
        }


        function save()
        {
            array_push($_SESSION['list_of_tasks'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_tasks'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_tasks'] = array();
        }

    }

?>
