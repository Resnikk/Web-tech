    <?php

    if (isset($_POST['submit'])) {
        $gender = $_POST['gender'];
        if ($gender == "") {
            echo "Please select at least one    ";
        } else {
            echo $gender;
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
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male" />Male
                <input type="radio" name="gender" value="Female" />Female
                <input type="radio" name="gender" value="Other" /> Others
                <hr>
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
    </body>

    </html>