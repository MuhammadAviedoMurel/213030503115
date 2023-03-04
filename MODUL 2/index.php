<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $kondisi = true;

        if($user>10){
            echo "username lebih dari 10";
            $kondisi = false;
        }
        
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "password harus ada huruf kapital\n";
           $kondisi = false;
        }

        if (!preg_match("/[a-z]/", $password)) {
            echo "password harus ada huruf kecil\n";
           $kondisi = false;
        }
    
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "password harus ada special character\n";
            $kondisi = false;
        }
    
        if (!preg_match("/[0-9]/", $password)) {
            echo "password harus ada digit angka\n";
           $kondisi = false;
        }

        if($pass<0){
            echo "password kurang dari 10";
            $kondisi = false;
        }

        if($kondisi == true ){
            echo "Password Berhasil";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">password</label>
                <input type="text" name="password" id="password">
            </li>

            <li>
                <button type="submit">submit</button>
            </li>
        </ul>
    </form>
</body>
</html>