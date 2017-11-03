<?php
$dsn = 'mysql:dbname=aditya;host=db';
$user = 'root';
$password = 'harharbhole';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

foreach($dbh->query("Show variables like '%version%'") as $row) {
    print("<table>");
    printf("<tr><td> %s:</td><td> %s</td></tr>", htmlspecialchars($row[0]), htmlspecialchars($row[1]));
    print("</table>")
}
