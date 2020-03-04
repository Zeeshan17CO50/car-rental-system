<?php
$servername = "localhost";
$username = "dar";
$pwd = "waseem";
$db = "sqlfile";

$conn = new mysqli($servername, $username, $pwd, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST["con-submit"]){
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $subject = $_POST["subject"];
    $nessage = $_POST["message"];

    $sql = "insert into contact(username, useremail, subject, message) values('$username', '$useremail', '$subject', '$message')";

    // echo $sql;
    if ($conn->query($sql) === TRUE) {
        header("location:thank.html");
           
    }
    else{
        echo "NOT INSERTED".$conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact us</title>
</head>

<body style="background-image: url(img/bg.jpg);opacity: 1;
filter: alpha(opacity=100);">

    <header>
        <legend>Car Rental System</legend>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="carrental/car-listing.php">CAR LISTING</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="rlogout.php">LOGOUT</a></li>
                <li><a href="carrental/admin/index.php">ADMIN</a></li><br>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <article class="col-2">
                <h2>Contact Us</h2>
                <fieldset>
                    <h2 height="50" color="red">Fill the details </h2>
                    <form action="contact.php" method="POST">
                        <p>Username:<br>
                            <input id="username" type="text" placeholder="Name" name="username">
                            <br>

                            Email <br><input id="email" type="email" name="useremail" value=""
                                placeholder="username@example.com" required="required"><br>

                            Subject<br> <input id="subject" type="text" name="subject" value=""
                                placeholder="A short description about the matter" required="required">
                            <br>

                            Message<br> <textarea id="message" name="message" rows="3" cols="40"
                                required="required"></textarea></p>
                        <input id="submit-btn" type="submit" name="con-submit" value="Submit">
                    </form>
                    <script src="js/validate.js"></script>

                </fieldset>
            </article>
            <article class="col-2">
                <div class="links">
                    <h2>Get Connected</h2>
                    <img src="img/map.png" widht="500px" height="300px">
                    <a href="https://facebook.com"><i class="fab fa-facebook"></i>Facebook</a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
                    <a href="https://linkedin.com"><i class="fab fa-linkedin"></i>LinkedIn</a>
                    <a href="https://github.com"><i class="fab fa-github"></i>Github</a>
                    <a href="https://stackoverflow.com"><i class="fab fa-stack-overflow"></i>StackOverflow</a>
                </div>
            </article>

        </section>
    </main>
    <footer>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy;All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>

</html>