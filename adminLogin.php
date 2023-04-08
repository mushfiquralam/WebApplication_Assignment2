<?php
    include 'connection.php';
    $error_message = ' ';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo '$username';
        // echo '$password';
        $sql = "SELECT * FROM logininfo WHERE username = '$username' AND password = '$password'";
        $result=$connect->query($sql);
        if($result->num_rows >0){
            header('Location: adminHome.php');            
        }      
        else{
            $error_message = 'Invalid username or password. Please try again!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Sign In</title>
</head>
<body>
    <div class="login">
        <h1 class="text-center">Sign In</h1>
        <?php
        if ($error_message != ' ') {
            echo "<div class= 'text-red-500 text-sm mb-3 text-center'>$error_message</div>";
        }
        ?>
        <form class="needs-validation" method="POST">
            <div class="form-group">
                <label class="form-label" for="username">
                    User Name
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <input class="form-control" type="text" id="username" name="username" placeholder="Enter User Name" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">
                    Password
                    <span class="text-danger">
                        *
                    </span>
                 </label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="text-center">
                <input class="btn btn-primary w-50" type="submit" name="submit" value="Sign In">
            </div>
               
        </form>
    </div>
</body>
</html>