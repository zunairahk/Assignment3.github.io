<html>
<body>
    <?php
        // include_once "db.php";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "CREATE TABLE savePassword (
        title VARCHAR(30) PRIMARY KEY,
        username VARCHAR(20) NOT NULL UNIQUE,
        _password VARCHAR(20) NOT NULL,
        _url VARCHAR(50)
        )";

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
        VALUES ($title,$uname,$pass,$url)";

        $conn->close();
    ?>
</body>
</html>