<?php
require ("db.php");
$conn = connect();

$sql = "select * from students ";
$result = $conn -> query($sql);
$students = [];
if ($result -> num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $students[] = $row;
    }
}

?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
<?php include("nav.php"); ?>
<h1 style="text-align:center" >List of students</h1>
<section>
<div class="container">
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Adress</th>
        <th>Telephone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $item):?>
    <tr>
        <td><?php echo $item["id"] ?></td>
        <td><?php echo $item["name"] ?></td>
        <td><?php echo $item["age"] ?></td>
        <td><?php echo $item["address"] ?></td>
        <td><?php echo $item["telephone"] ?></td>
    </tbody>
    </tr>
    <?php endforeach;?>
</table>
<a href="create.php" class="btn btn-outline-primary">Add a new student</a>
</div>
</section>
</body>
</html>