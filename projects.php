<?php
 include_once 'db.php';

$get_data_query =  "SELECT * FROM clientProjects;";
$data_fetched = mysqli_query($mysqli,$get_data_query);

$result = mysqli_query("SELECT dt_date FROM clientProjects");
while($rows=mysqli_fetch_assoc($result)){
    echo $rows['dt_date'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="text-center p-3 mb-5 bg-primary " style="color: white;">
           <h1>Current Projects</h1>
    </div>
    <div class="container">

    <div class="table-responsive">
        <table class="table table-striped">
        <thead class="thead-dark">
            <th>
                Delivery Date
            </th>
            <th>
                Topic
            </th>
            <th>
                Number of Words
            </th>
            <th>
                Instructions
            </th>
        </thead>
        
       <?php
        while($rows=mysqli_fetch_assoc($data_fetched)){
        ?>
        
            <tr>
                <td><?php echo $rows['delivery_date']; ?></td>
                <td><?php echo $rows['topic']; ?></td>
                <td><?php echo $rows['num_words']; ?></td>
                <td><?php echo $rows['instructions']; ?></td>
            </tr>
        <?php
        }
        ?>

       
    </table>
    </div>
    <a href="./index.php" class="btn btn-primary">Go to home</a>
    </div>
</body>
</html>


