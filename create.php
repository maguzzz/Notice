<?php
require_once "actions/db_connect.php";

#Creating Note
if ($_POST) {
    $name = $_POST["name"];
    $text = $_POST["text"];

    $sql = "INSERT INTO notes (name, text) VALUES ('$name','$text')";
    mysqli_query($connect, $sql);

    #Printing if the note was created
    if (mysqli_query($connect, $sql)) {
        $class = "success";
        $message = "Note $name successfully created <br>";
    } else {
        $class = "danger";
        $message = "Error Creating note";
    }
    mysqli_close($connect);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create Note</title>
    <?php require_once "components/boot.php" ?>
</head>

<body>
    <div id="fields">
        <h2 class="h2">Create Note</h2>
        <form action="create.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td><input class="form-control" type="text" name="name" placeholder="Note name"></td>
                </tr>
                <tr>
                    <th>Text</th>
                    <td><input class="form-control" type="text" name="text" placeholder="Note Text"></td>
                </tr>
                <td>
                    <button class="btn btn-success" type="submit">
                        Add Note
                    </button>
                </td>
                <td>
                    <a href="index.php">
                        <button class="btn btn-warning" type="button">
                            Home
                        </button>
                    </a>
                </td>
            </table>

            <div class=" alter alert-<?= $class?>">
                <p><?php echo $message; ?></p>
            </div>

        </form>
    </div>
</body>

</html>