<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    if ($name == "" || strlen($name) < 2) {
        echo "Invalid format";
    } else {
        echo "Valid";
    }
}
?>

<html>

<head>
    <title>Lab 3.2</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Name</legend>
            name : <input type="text" name="name" value="" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>