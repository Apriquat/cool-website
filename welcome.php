<!DOCTYPE html>
<html>
    <head>
        <title>Thanks for registering!</title>
    </head>

    <body>
        <?php
            $severname = "localhost";
            $username = "root";
            $password = "WebDesign43450!";
            $dbname = "userDB";

            $conn = new mysqli($severname, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //encrypt password
            $usnm = $_POST['username'];
            $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO Users (username, password) VALUES ('$usnm', '$pw')";
            if ($conn->query($sql) === TRUE) {
                echo "user successfully registered";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        ?>
    </body>
</html>