

<?php if($_SESSION['user'] == NULL) {       ?>
    <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="registration.html">Registration</a></li>
                <li><a href="index.html">Home</a></li>
            </ul>
        </nav>
<?php
}
else {
    ?>
    <nav>
            <ul>
                <li><a href="logout.php?logout=yes">LogOut</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="registration.html">View Users</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
<?php } ?>
