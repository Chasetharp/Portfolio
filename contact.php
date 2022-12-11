<?php include 'js/functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Amy</title>
<link rel="icon" type="image/x-icon" href="img/brandIconFavicon.png">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet"> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/jquery3.js"></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body>
  <div id="backSection">
  <div id="section1">
  <nav class="navbar navbar-light navbar-expand-lg fs-4 px-3">          
    <div class="container-fluid">
    <a href="." class="navbar-brand"><img src="img/brandIcon.png"></a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav pt-3">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="colorado.php">Colorado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="utah.php">Utah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="overseas.php">Overseas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




<div>
  <h1>Contact Epics with Amy</h1>
<div class="container d-flex justify-content-center pt-3">
  <button class="btn btn-lg" id="contactDialog">Contact me</button>
</div>
<div id="contactMe">
    <form action="mail.php" method="POST" id="contact-form" class="container">
        <input type="text" name="name" class="form-control m-2" placeholder="Name" required>
        <input type="tel" name="phone" class="form-control m-2" placeholder="Phone #" required>
        <input type="email" name="email" class="form-control m-2" placeholder="Email" required>
        <textarea name="message" class="form-control m-2" placeholder="Message:"></textarea>
        <input type="submit" id="submit" value="Get in touch" class="form-control m-2 btn">
        <button id="closeDialog" class="btn dialogClose m-2 form-control">Close</button>
      </form>
</div>  


  <div class="introduction">
    <img src="img/IMG_9601.JPG" class="portraitContact">
    <p class="paraHome">
    You have to allow the paint to break to make it beautiful. Work on one thing at a time. Don't get carried away - we have plenty of time. Nice little fluffy clouds laying around in the sky being lazy. As trees get older they lose their chlorophyll. You have to make these big decisions. Clouds are free. They just float around the sky all day and have fun. Van Dyke Brown is a very nice brown, it's almost like a chocolate brown. Just let your mind wander and enjoy. This should make you happy. This is probably the greatest thing to happen in my life - to be able to share this with you. In nature, dead trees are just as normal as live trees.
<br><br>
Let all these little things happen. Don't fight them. Learn to use them. Just let these leaves jump off the brush Maybe there's a little something happening right here. This piece of canvas is your world. Maybe there's a happy little Evergreen that lives here. Anytime you learn something your time and energy are not wasted. See there, told you that would be easy. Isn't it great to do something you can't fail at? You better get your coat out, this is going to be a cold painting. That's why I paint - because I can create the kind of world I want - and I can make this world as happy as I want it. All you need is a dream in your heart, and an almighty knife.
<br><br>
Do an almighty painting with us. Water's like me. It's laaazy... Boy, it always looks for the easiest way to do things Isn't that fantastic? We'll paint one happy little tree right here. The first step to doing anything is to believe you can do it. See it finished in your mind before you ever start. We don't make mistakes we just have happy little accidents. Now let's put some happy little clouds in here. If it's not what you want - stop and change it. Don't just keep going and expect it will get better. If you don't think every day is a good day - try missing a few. You'll see. There he comes. Put it in, leave it alone.
    </p>
  </div>



</div>

</div>
<?php footer() ?>
</div>

</body>

</html>