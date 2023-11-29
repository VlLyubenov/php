<?php
    
    class User{

        //Properties:
        public $name;
        public $email;
        public $password;

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }

        //Constructor

        public function __construct($name,$email,$password)
        {
            // echo '<br>'.'constructor ran'.'<br>';
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

    }

    
    $user1 = new User('Brad','brad@gmail.com','1234');

    // $user1 ->name = 'Brad';

    // var_dump($user1);

    // echo $user1->name;
    $user1->set_name("Brad");
    //echo $user1->name;

    $user2 = new User('John','Jon@gmail.com','123345');
    // $user2->set_name("John");
    // var_dump($user2->name);

    // echo $user1->get_name();
    
    // echo $user1->email;
    // echo $user2->name;




    //Inheretance:
    class Employee extends User{
        public $title;

        public function __construct($name,$email,$password,
        $title)
        {
            parent::__construct($name,$email,$password);
            $this->title = $title;
        }

        public function get_title(){
            return $this -> title;
        }
    
    }
    
    $employee1 = new Employee('sarah','sarah@yahoo.com','1234','Manager');

    echo $employee1->get_title();


?>