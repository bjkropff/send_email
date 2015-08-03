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

        function test_setName()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $new_name = "Billy";
            $test_email->setName($new_name);
            $result = $test_email->getName();

            //Assert
            $this->assertEquals("Billy", $result);
        }

        function test_getEmail()
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
            $result = $test_email->getEmail();

            //Assert
            $this->assertEquals("bill@gmail.com", $result);
        }

        function test_setEmail()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $new_email = "billy@gmail.com";
            $test_email->setEmail($new_email);
            $result = $test_email->getEmail();

            //Assert
            $this->assertEquals("billy@gmail.com", $result);
        }

        function test_getSubject()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $result = $test_email->getSubject();

            //Assert
            $this->assertEquals("Just saying hi", $result);
        }

        function test_setSubject()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $new_subject = "Just saying hi, again";
            $test_email->setSubject($new_subject);
            $result = $test_email->getSubject();

            //Assert
            $this->assertEquals("Just saying hi, again", $result);
        }

        function test_getMessage()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $result = $test_email->getMessage();

            //Assert
            $this->assertEquals("Hello to you good sir", $result);
        }

        function test_setMessage()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $new_message = "Hello to you good sir, again";
            $test_email->setMessage($new_message);
            $result = $test_email->getMessage();

            //Assert
            $this->assertEquals("Hello to you good sir, again", $result);
        }

        function test_getNotarobot()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $result = $test_email->getNotarobot();

            //Assert
            $this->assertEquals("123", $result);
        }

        function test_setNotarobot()
        {
            //Arrange
            $name = "Bill";
            $email = "bill@gmail.com";
            $subject = "Just saying hi";
            $message = "Hello to you good sir";
            $notarobot = "123";
            $test_email = new Email($name, $email, $subject, $message, $notarobot);

            //Act
            $new_notarobot = "123123";
            $test_email->setNotarobot($new_notarobot);
            $result = $test_email->getNotarobot();

            //Assert
            $this->assertEquals("123123", $result);
        }

    }
?>
