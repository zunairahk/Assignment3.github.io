<html>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storePassword";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // $sql = "CREATE DATABASE storePassword";
        // if ($conn->query($sql) === TRUE) 
        // {
        //     echo "Database created successfully";
        // } 
        // else 
        // {
        //     echo "Error creating database: " . $conn->error;
        // }

        // $sql = "CREATE TABLE savePassword (
        // title VARCHAR(30) PRIMARY KEY,
        // username VARCHAR(20) NOT NULL,
        // _password VARCHAR(20) NOT NULL,
        // _url VARCHAR(50)
        // )";

        // if ($conn->query($sql) === TRUE) 
        // {
        //     echo "Table created successfully";
        // } 
        // else 
        // {
        //     echo "Error creating table: " . $conn->error;
        // }

        $title=$uname=$pass=$url=0;

        if(isset($_POST["title"]))
        {
            $title = $_POST["title"];
        }

        if(isset($_POST["username"]))
        {
            $uname = $_POST["username"];
        }    
        
        if(isset($_POST["password"]))
        {
            $pass = $_POST["password"];
        } 

        if(isset($_POST["url"]))
        {
            $url = $_POST["url"];
        }    

        $sql = "INSERT INTO savePassword (title,username,_password,_url)
        VALUES ('$title','$uname','$pass','$url')";

        if ($conn->query($sql) === TRUE) 
        {
            echo "New record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
    <center><a href="index.html">BACK</a></center>
</body>
</html>