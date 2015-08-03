<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Email.php";

    class EmailTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
            Email::deleteAll();
        }


        function test_getName()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);
            //$test_task->save();

            //Act
            $result = $test_email->getName();

            //Assert
            $this->assertEquals("Bill", $result);
        }
    }
?>
