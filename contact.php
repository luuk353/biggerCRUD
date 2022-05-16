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
    <?php include("phpincludes/headertemplate.php")?>
    <main>
        <nav>
            <ul class="menu">
                <li class="menu_list">
                    <span class="front fas fa-home"></span>
                    <a href="index.php" class="side">home</a>
                </li>
                <li class="menu_list">
                    <span class="front fas fa-info"></span>
                    <a href="#" class="side">over ons</a>
                </li>
                <li class="menu_list">
                    <span class="front fas fa-briefcase"></span>
                    <a href="#" class="side">Vlucht boeken</a>
                </li>
                <li class="menu_list">
                    <span class="front fas fa-paper-plane"></span>
                    <a href="contact.php" class="side">contact</a>
                </li>
            </ul>
        </nav>
        <div class="contentblok">
            <form>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>

    </main>
    <?php include("phpincludes/footertemplate.php")?>
</body>

</html>