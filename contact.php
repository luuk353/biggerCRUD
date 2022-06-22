<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Website</title>
</head>

<body>

    <?php
    session_start();
    include("phpincludes/headertemplate.php")?>
    <main>
        <?php include ("phpincludes/navbar.php")?>
        <div class="contentblok">
            <form class="contact-reviewform" action="phpincludes/contactform.php" method="post">
                <h1>contact</h1>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="naam" placeholder="Your name..">

                <label for="lname">your email</label>
                <input type="text" id="lname" name="email" placeholder="Your e-mail">

                <label for="subject">Subject</label>
                <textarea id="subject" name="bericht" placeholder="Write something"style="height:200px"></textarea>

                <input type="submit" name="submit" value="Submit">
            </form>

            <form class="contact-reviewform" action="phpincludes/review.php" method="post">
                <h1>review</h1>
                <label for="fname">gebruiker</label>
                <input type="text" id="fname" name="gebruiker" placeholder="Your name..">

                <label for="lname">bericht</label>
                <input type="text" id="lname" name="bericht" placeholder="Your last name..">

                <label for="subject">sterren</label>
                <textarea id="subject" name="sterren" placeholder="Write something.."></textarea>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
<!-- <a href = "admin.php"> adminpage</a> -->
    </main>
    <?php include("phpincludes/footertemplate.php")?>
</body>

</html>