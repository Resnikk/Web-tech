<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) {
    echo "Title: " . $row["Title"]. " - Recipient: " . $row["Recipient"]. $row["Providers"]. $row["Actions"]."<br>";
  }
} else 
{
  echo "0 results";
}
$conn->close();
?>