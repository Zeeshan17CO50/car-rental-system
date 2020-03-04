<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Look&booK</title>
</head>
<body>
    <article class="login">
        <div class="card">
            <?php
                if($_POST){
                    echo "<p> Welcome <b>".$_POST['uname']."</b>";
                    echo "</p>";
                }
                else{
                    echo "You are not logged in ! Please login to your account";
                    echo "<a href='login.php'>Click here</a>";
                }
            ?>
        </div>
    </article>
</body>
</html>