<!-- Document type declaration -->
<!DOCTYPE html>
<!-- Start of HTML document -->
<html lang="en">
    <!-- Start of head section -->
<head>
    <!-- Character encoding for the document -->
    <meta charset="UTF-8">
    <!-- Viewport settings for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the document -->
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
<!-- End of head section -->
</head>
<!-- Adding a class to the body element for a background style -->
<body class="background">
    
<!-- header section starts  -->
<!-- This section contains the main heading, menu icon, and navigation -->

<header>
        <!-- Main heading of the page -->
        <h1 class="heading">Provide Your Contact Information</h1>
        <div id="menu" class="fas fa-bars"></div>
    <!-- Navigation bar -->
    <nav class="navbar">
        <ul>
            <!-- List item with a link to the home page -->
            <li><a href="index.php">Index</a></li>
            <!-- List item with a link to the contact page -->
            <li><a href="retrieve.php">Retrieve</a></li>
        </ul>
    </nav>
</header>
<br><br><br><br><br><br><br><br><br><br><br>
<!---php file starts here-->
<?php
//Database Connectivity
    $servername="localhost";
    $username="root";
    $password="200555530";
    $database="contacts";
//creating a connection
    $conn=mysqli_connect($servername, $username, $password, $database);
   
    //die if connection failed
    if(!$conn)
    {
        die("Sorry, connection failed!!".mysqli_connect_error());
    }
    else
    {
        echo "<center><h1>Connection Successful......</h1>";
    }

    $sql="SELECT * from `form`";
    $result=mysqli_query($conn,$sql);

    //find number of records
    $num=mysqli_num_rows($result);

    //displaY records 
    echo"<br><br><br><br><br>";
    echo "<center><table style='border-collapse: collapse; width: 80%; margin: 0 auto; text-align: center;' border='1'>
    <tr>
        <th style='padding: 10px;'>Serial Number</th>
        <th style='padding: 10px;'>First Name</th>
        <th style='padding: 10px;'>Email</th>
        <th style='padding: 10px;'>Reviews</th>
    </tr>";

    while($row=mysqli_fetch_assoc($result))
    {
       
        echo "<tr>";
        echo "<td style='padding: 10px;'>" . $row['sno'] . "</td>";
        echo "<td style='padding: 10px;'>" . $row['fname'] . "</td>";
        echo "<td style='padding: 10px;'>" . $row['email'] . "</td>";
        echo "<td style='padding: 10px;'>" . $row['reviews'] . "</td>";
        echo "</tr>";
        
    }    
    echo "</table></center>";
?>

<br><br><br><br><br><br><br><br><br><br><br>   
<!-- Footer content container -->
<div class="footer">
    <div class="box-container">
        <!-- Box 1: Why Choose Us -->
        <div class="box">
            <h3>why choose us?</h3>
            <p>We always try our best to provide best quality of products for our customers...</p>
        </div>
        <div class="box">
            <!-- Another div representing a box within the footer -->
            <h3>quick links</h3>
            <!-- Heading level 3 indicating quick links section -->
            <a href="index.php">Index</a>
            <!-- Link to the Home page -->
            <a href="retrieve.php">Retrieve</a>
        </div>
        <!-- Box 3: Newsletter Subscription -->
        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe us for latest updates</p>
            <!-- Newsletter subscription form -->
            <form action="">
                <input type="email" placeholder="your email">
                <input type="submit" class="btn" value="subscribe">
            </form>
        </div>
    </div>
    <!-- Footer credit -->
    <h1 class="credit"> created by <a href="#">Simerpreet Kaur</a> | all rights reserved. </h1>
</div>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>