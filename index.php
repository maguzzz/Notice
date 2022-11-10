<?php
require_once "actions/db_connect.php";
$sql = "SELECT * FROM notes";
$result = mysqli_query($connect, $sql);
$tbody = "";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $tbody .= "<tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['text']."</td>
    <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type button>Edit</button></a></td>
    <td><a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type button>Delete</button></a></td>
    </tr>";
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <?php require_once "components/boot.php" ?>
</head>

<body>
 <div class="manageNotes w-75 mt-3">
    <div class="mb3">
        <a href="create.php"><button class="btn btn-primary" type="button">Add Note</button></a>
    </div>
    <p class="h2">
        Notes
    </p>
    <table class="table table-striped">
        <thead class="table-success">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Text</th>
            </tr>
        </thead>
        <tbody>
            <?= $tbody?>
        </tbody>
    </table>
 </div>
</body>
</html>