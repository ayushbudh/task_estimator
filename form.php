 <html>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </html>
<?php
 include_once 'db.php';

$topic = $_POST['topic'];
$num_words = $_POST['numwords'];
$instructions = $_POST['instructions'];

if(!empty($topic) && !empty($num_words) && !empty($instructions)){


        function successMsg(){
        ?>
            <div class="container">
                <div class="text-center mt-5">
                    <p class="lead display-4">Date Inserted Successfully!!</p>
                    <a class="btn btn-success" href="./index.php">Return Back</a>
                </div>
            </div>
        <?php
        }

        function failureMsg(){
            ?>
                <div class="container">
                    <div class="text-center mt-5">
                        <p class="lead display-4">Date Insertion Unsuccessfully :( Please try again!</p>
                        <a class="btn btn-danger" href="./index.php">Return Back</a>
                    </div>
                </div>
            <?php
        }

        $date = date('Y-m-d');
        $tomorrowDate = date("Y-m-d", strtotime($date.'+ 1 days'));
        $result = mysqli_query($mysqli, "SELECT SUM(num_words) AS value_sum FROM clientProjects"); 
        $row = mysqli_fetch_assoc($result); 
        // number of words for today
        $sum = $row['value_sum'];

        // no entries
        if($sum==0){
            $query = "INSERT INTO clientProjects ( topic, num_words, instructions, delivery_date) VALUES ('$topic', $num_words, '$instructions','$date' )";
            if(!mysqli_query($mysqli,$query)){
                failureMsg();
            }else{
                successMsg();
            }  
        }elseif ($sum + $num_words <= 1000){
            $query = "INSERT INTO clientProjects ( topic, num_words, instructions, delivery_date) VALUES ('$topic', $num_words, '$instructions','$date' )";
            if(!mysqli_query($mysqli,$query)){
                failureMsg();
            }else{
               successMsg();
            }   
        }elseif($sum + $num_words > 1000){
            if($sum + $num_words >1800){
                $tomorrowDate = date("Y-m-d", strtotime($tomorrowDate.'+ 1 days'));
                $query = "INSERT INTO clientProjects ( topic, num_words, instructions, delivery_date) VALUES ('$topic', $num_words, '$instructions','$tomorrowDate' )";
                if(!mysqli_query($mysqli,$query)){
                    failureMsg();
                }else{
                    successMsg();
                    } 
            }else{
                $query = "INSERT INTO clientProjects ( topic, num_words, instructions, delivery_date) VALUES ('$topic', $num_words, '$instructions','$tomorrowDate' )";
                if(!mysqli_query($mysqli,$query)){
                    failureMsg();
                }else{
                    successMsg();
                } 
            }
        }

    $mysqli->close();

}else{
    ?>
    <div class="container">
        <div class="text-center mt-5">
            <p class="lead display-4">All Fields are required:( Please try again!</p>
            <a class="btn btn-danger" href="./index.php">Return Back</a>
        </div>
    </div>
    <?php
    die();
}
?> 

