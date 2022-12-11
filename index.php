<?php 
  include 'js/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Amy's Blog</title>
<link rel="icon" type="image/x-icon" href="img/brandIconFavicon.png">
<link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet"> 
<script src="js/jquery3.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/script.js" ></script>
<script src="js/bootstrap.bundle.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
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
            <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
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


<h1>Welcome to Epics with Amy!</h1>
  <div class="introduction">
    <img src="img/IMG_4229.jpg" class="portrait" alt="Couple photo">
    <p class="paraHome">
    Fluff that up. We don't have anything but happy trees here. Only eight colors that you need. I'm gonna add just a tiny little amount of Prussian Blue. Give him a friend, we forget the trees get lonely too. Of course he's a happy little stone, cause we don't have any other kind. Only think about one thing at a time. Don't get greedy. With something so strong, a little bit can go a long way. Just beat the devil out of it. Let's put some happy little bushes on the other side now. But we're not there yet, so we don't need to worry about it.
<br><br>
I thought today we would do a happy little picture. Almost everything is going to happen for you automatically - you don't have to spend any time working or worrying. We don't want to set these clouds on fire. You need the dark in order to show the light. You want your tree to have some character. Make it special. We'll make some happy little bushes here. Don't fiddle with it all day. In your world you have total and absolute power. A thin paint will stick to a thick paint. If you've been in Alaska less than a year you're a Cheechako.
<br><br>
Put light against light - you have nothing. Put dark against dark - you have nothing. It's the contrast of light and dark that each give the other one meaning. Without washing the brush, I'm gonna go right into some Van Dyke Brown, some Burnt Umber, and a little bit of Sap Green. Let's give him a friend too. Everybody needs a friend. Be brave. You're the greatest thing that has ever been or ever will be. You're special. You're so very special. Use your imagination, let it go. It takes dark in order to show light. I started painting as a hobby when I was little. I didn't know I had any talent. I believe talent is just a pursued interest. Anybody can do what I do. If I paint something, I don't want to have to explain what it is. The light is your friend. Preserve it.
    </p>
  </div>


<?php otherPosts() ?>

</div><!-- End of section 1 -->
  <?php footer() ?>

</div><!-- End of backSection -->


</body>

</html>
