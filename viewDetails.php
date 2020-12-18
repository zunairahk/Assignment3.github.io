<html>
<body>
    <table border='4'>
        <tr>
            <th>Title</th>
            <th>Username</th>
            <th>Password</th>
            <th>URL</th>
        </tr>
    <?php
        include_once "db.php";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storePassword";
        $table = "savePassword";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM savePassword";
        $result = $conn->query($sql);

        if (!empty($result) && $result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>" . 
                $row["title"]. "</td><td>" . 
                $row["username"] . "</td><td>". 
                $row["_password"]. "</td><td>".
                $row["_url"]. "</td></tr>";
            }
        }
        echo "</table>";

        $conn->close();
    ?>
</body>
</html>