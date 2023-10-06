
<?php

function find_all_students() {

    $localhost = "localhost";
    $dbname = "lp_official";
    $username = "root";
    $password = "";

    $db = new PDO ("mysql:host=" . $localhost . "; dbname=" . $dbname . ";charset=utf8", $username , $password);

    $query = "SELECT * FROM student";
    $stmt = $db->query($query);

    echo "<table border='1'>";
    echo "<tr><th>id</th><th>grade_id</th><th>email</th><th>fullname</th><th>birthdate</th><th>gender</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
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
    <?php

    find_all_students();

    ?>
</body>
</html>