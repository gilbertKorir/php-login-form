<?php
$username = $_POST['username'];
$password = $_POST['password'];

// if(!empty($username)){
//     if(!empty($password)){
//         $host = "localhost";
//         $dbusername = "root";
//         $dbpassword = "";
//         $dbname = "voting";

 
        //connect database
        $conn = new mysqli('localhost', 'root', '', 'voting');
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error); 
        }
        else {
            $stmt = $conn->prepare("insert into form(username, password)
            values(?, ?)");
            $stmt->bind_param("si",$username, $password);
            $stmt->execute();
            echo "Details submitted sucessfully";
            $stmt->close();
            $conn->close();

             }
//             else{
//                 echo "Error: ". $sql . "<br>". 
//                 $conn->error;
//             }
//             $conn->close(); 
//         }
//     }
//     else{
//         echo "password should not be empty";
//         die();
//     }
// }
// else{
//     echo "Username should be there";
//     die();
// }


?>