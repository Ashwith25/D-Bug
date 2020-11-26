<?php
session_start();
if(isset($_SESSION['user'])!=1){
    echo"<br>Session not created.<br>Please login to continue";
    header('refresh:2, url=..\index.php');
    exit();
}

?>
<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'dbug');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userid = $_SESSION["userid"];

$sql = "select * from questions where quesid NOT IN ( SELECT quesid from progress where userid='$userid')";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Bug</title>
    <link rel="shortcut icon" href="..\assets\images\favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="..\assets\practice.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
</head>
<body style="background-color: #BABABA; font-family: 'Montserrat', sans-serif;">
    <div class="main">
        <div class="maincontainer">
            <div class="question-block">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="question">';
                            echo '<div class="hidden-id">'.$row["quesid"].'</div>';
                            echo '<div class="problem">'.$row["question"].'</div>';
                            echo '<div class="answer-hidden">'.$row["answer"].'</div>';
                            echo '<input type="text" class="answer" name="answer-text" placeholder="Enter answer">';
                            echo '<button class="submit-button">Submit</button>';
                            echo '</div>';
                            echo '<hr>';
                        }
                    }
                    // <div class="question">
                    //     <div class="problem"></div>
                    //     <div classs="answer"><input type="text" name="answer-text" placeholder="Enter answer"></div>
                    //     <div class="submit-button"></div>
                    //     <button>Submit</button>
                    // </div>
                ?>
            </div>
            <div class="compiler">
                <iframe height="400px" width="100%" src="https://repl.it/@AshwithPoojary/WiseGreenProgram?lite=true" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>            </div>
            </div>
    </div>
<script src="..\assets\practice.js"></script>
</body>
</html>