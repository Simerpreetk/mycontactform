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
    <!-- Menu icon for mobile navigation -->
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

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact">
    <!-- Contact form section -->
    <form action="/Simer/index.php" method="POST">
        <!-- Name input -->
        <label for="sno"></label>
        <input type="int" name="sno" id="sno" class="box" placeholder="Serial Number">

        <label for="fname"></label>
        <input type="text" name="fname" id="fname" class="box" placeholder="Name"><br>
        <!-- Email input -->
        <label for="email"></label>
        <input type="email" name="email" id="email" class="box" placeholder="your email">
        <label for="reviews"></label> <br>
        <textarea  name="reviews" id="reviews" cols="30" rows="10" class="box message" placeholder="reviews"></textarea>
        <br>
        <br>
        <!-- Send message button --> 
        <center><button type="submit" class="btn">SUBMIT</button></center>    
    </form>

    <!-- Contact information section -->
    <div class="content">
        <!-- Contact heading -->
        <h3>Please Provide Contact Information</h3>
        <!-- Contact description -->
        <p>You are requested to fill this information so that we can keep track of our customers.....</p>
        <!-- Location icon and address -->
        <div class="icons">
            <i class="fas fa-map-marker-alt"></i> mumbai, india 400104.
        </div>
        <!-- Globe icon and website URL -->
        <div class="icons">
        <i class="fas fa-globe"></i> www.mywebsite.com
        </div>
        <!-- Phone icon and contact number -->
        <div class="icons">
            <i class="fas fa-phone"></i> +123-456-7890
        </div>    
    </div>
</section>
<!-- contact section ends -->

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


<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $sno=$_POST['sno'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $reviews=$_POST['reviews'];

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
        //submit the insertion queries/data to database

        $sql="INSERT INTO form (sno, fname,email, reviews) VALUES ('$sno', '$fname', '$email', '$reviews')";
        $selectQuery = "SELECT * FROM form";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        if($result)
        {
            echo "Data inserted successfully";

        }
        else{
            echo "Data not inserted due to  ".mysqli_error($conn);
        }
    }
}
?>

</body>
</html>