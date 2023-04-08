<?php
    include 'connection.php';
    $error_message = ' ';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql= "INSERT INTO messages (`Name`, `Email`, `message`) VALUES ('$name', '$email', '$message')";
        if($connect->query($sql) == true) {
          $error_message = 'Record created successfully';
        }
        else {
            $error_message = 'Error! Feel free to message us!';
        }
        $connect->close();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Contact Us</h1>
        <?php
        if ($error_message != ' ') {
            echo "<div class= 'text-red-500 text-sm mb-3 text-center'>$error_message</div>";
        }
        ?>
        <form class="contact-form" method="POST">
            <div class="form-group">
                <label class="form-label" for="name">
                    Name 
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Full Name" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">
                    Email 
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Enter Your Email Address" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="message">
                    Message
                    <span class="text-danger">
                        *
                    </span>
                </label>
                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Enter Your Message" required></textarea>
            </div>
            <input class="btn btn-success w-100" type="submit" name="submit" value="Send Message">   
            <div class="text-right">
                <a href="adminLogin.php" class="btn btn-link" role="button">Admin Log In</a>
            </div>
        </form>
        
    </div>
</body>
</html>