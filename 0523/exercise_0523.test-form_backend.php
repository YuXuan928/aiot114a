<?php
$username = $_POST["username"];
$usersex = $_POST["usersex"];
$userschool = $_POST["userschool"];
$userthought = $_POST["userthought"];
?>


<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單結果</title>
</head>

<body bgcolor="#d1fce8">

    <?php
    if($usersex = "male"){
        echo "<h2>$username 先生  您好 !</h2>";

    } else {
        echo "<h2>$username 小姐  您好 !</h2>";
    }

    echo "您的學歷為:" . $userschool . "<br>";

    echo "您喜歡活動如下: ";

    echo "<ul>";
    foreach ($_POST['userinterest'] as $value){
        echo"<li>" . $value . "</li>";
    }
    echo "</ul>";

    echo "您對於臉書經營社群的看法為:<br>";
    echo "<p>" . $userthought . "</p>";

?>

</body>

</html>