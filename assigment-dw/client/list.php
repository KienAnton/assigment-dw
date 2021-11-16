<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
    <h2>Streets</h2>
    <table class="w3-table w3-striped">
        <tr>
            <th>Name</th>
            <th>District</th>
            <th>Year</th>
            <th>Status</th>
        </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assigment-dw";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM streets";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["districtid"] . "</td>
                <td>" . $row["year"] . "</td>
                <td>" . $row["status"] . "</td>
            </tr>
            ";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </table>
</div>
</body>
</html>



