<?php

class AgriTayo {
    private $server = "mysql:host=localhost;dbname=mangementdb";
    private $user = "root";
    private $password = "";
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    private $conn;

    public function openConnection() {
        try {
            $this->conn = new PDO($this->server, $this->user, $this->password, $this->options);
            return $this->conn;
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }

    public function closeConnection() {
        $this->conn = null;
    }
    public function getUsers(){
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll();
        $userCount = $stmt->rowCount();

        if ($userCount > 0){
           return $users;
    } else {
           return 0;
    }
}


public function login()  
{
    
    //get user inputs from the form
    if(isset($_POST['submit'])){
        $password = $_POST["password"];
        $email =$_POST['email'];
      
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM users  WHERE email =? AND password =?"); 
            $stmt->execute([ $email, $password]);
            $total =$stmt ->rowCount();

            if($total >0){

                echo "success";

            }else{
                echo "failed to log in";
            }

      
        }
        
    
}  
public function user_validation_exsit($email){
    $connection = $this->openConnection();
    $stmt = $connection->prepare("SELECT * FROM users  WHERE email =? AND password =?"); 
    $stmt->execute([ $email]);
    $total =$stmt ->rowCount();

    return $total;
    
}

public function addUser()
{
    if(isset($_POST['create']))
    {
         $email =$_POST['email'];

         $firstname  =$_POST['firstname'];
         $lastname= $_POST['lastname'];
         $mobile =$_POST['mobile'];
         $address =$_POST['address'];
         $password =password_hash($_POST['password'], PASSWORD_DEFAULT);

         $connection = $this->openConnection();
         $stmt = $connection->prepare("INSERT INTO users (`firstname`, `lastname`, `email`, `password`, `mobile`, `address`) 
         VALUES (?, ?, ?, ?, ?, ?)");
         $stmt->execute([$firstname, $lastname, $email, $password, $mobile, $address]);
     }
  }
}
$agritayo  = new AgriTayo();
        

    