<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home Page</title>
	<link rel="stylesheet" href="adminHomeStyle.css">
</head>
<body>
    <div class="container">

    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
	    		 // import database connection from connection.php
	    		include 'connection.php';
                $error_message = 'No result';
                $sql = "SELECT * FROM `messages`";

                $result=$connect->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td data-label='id'>" .$row["ID"]. "</td><td data-label='name'> " . $row["Name"]."</td><td data-label='email'> ". $row["Email"]."</td><td data-label='message'> ". $row["message"]."</td><tr> ";
                    }

                }else{
                    echo $error_message;
                }
                $connect->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

