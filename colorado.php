<?php include 'js/functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Colorado Trips</title>
<link rel="icon" type="image/x-icon" href="img/brandIconFavicon.png">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400&display=swap" rel="stylesheet"> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<script src="js/jquery3.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/script.js"></script>
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
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="colorado.php">Colorado</a>
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




                  <h1>Exploring Colorado</h1>
                    <div class="container d-flex justify-content-center">
                      <img src="img/IMG_9601.JPG" alt="Amy in Colorado" class="coloradoTopImage">
                    </div>
                      <div id="tabContainer">
                        <ul>
                            <li><a href="#panel1" data-tab-index="1" tabindex="0">San Juans</a></li>
                            <li><a href="#panel2" data-tab-index="2" tabindex="0">Mount Whitney</a></li>
                        </ul>
                        <!-- panel 1 -->
                        <div id="panel1" data-tab-index="1">
                          <h2 class="text-center">San Juans fun</h2>
                          <div class="clearfix">   
                                <img src="img/avon.jpg" class="tabImage float-md-start">
                                <p class="tabParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eleifend, ipsum eget fringilla pulvinar, dolor lorem aliquam ante, vel dapibus ex nunc ut lorem. Ut posuere vulputate consequat. Proin et vehicula velit. Curabitur eleifend elit a libero maximus, eu dapibus orci scelerisque. Vivamus auctor tempor ligula. Donec auctor nisl quis arcu ornare, ut bibendum libero lacinia. Curabitur in urna odio. Praesent eget turpis ante. Donec porta ligula non malesuada aliquet. Nulla eget mi imperdiet, aliquam ipsum vel, feugiat orci. Donec vel convallis sapien. Phasellus id ligula quis urna pellentesque finibus. Nulla efficitur porttitor felis non accumsan. Pellentesque id bibendum orci, vitae ultrices eros. Aliquam lorem sapien, sagittis rutrum sagittis ac, dictum in metus. Sed vestibulum sodales lacus, pretium dapibus nulla efficitur sit amet. Cras odio eros, posuere sit amet lectus ullamcorper, feugiat eleifend arcu. Vestibulum sed dolor elit. Duis non sollicitudin nulla. Praesent auctor justo vitae ligula consectetur malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla consectetur sit amet nisl vitae iaculis. Nullam et ullamcorper erat, vitae pretium dui. Duis vel augue lacus. Fusce nulla risus, auctor ac arcu at, volutpat imperdiet est. Phasellus lacus felis, interdum ut porta sed, pretium vitae sem. Nam auctor quam ut orci luctus bibendum. In euismod volutpat feugiat. Nunc ut ornare felis, id tristique lectus. Donec sed lectus a arcu bibendum placerat vel a quam. Ut pretium nisl nunc, vel dignissim neque finibus quis. Aenean sit amet eleifend urna.</p>
                              </div>
                                <h3 class="border-bottom border-info text-center">"Our home away from home.."</h3>
                              <div class="clearfix">
                                <img src="img/sanjuan1.jpg" class="tabImage2 float-md-end">
                                <p class="tabParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eleifend, ipsum eget fringilla pulvinar, dolor lorem aliquam ante, vel dapibus ex nunc ut lorem. Ut posuere vulputate consequat. Proin et vehicula velit. Curabitur eleifend elit a libero maximus, eu dapibus orci scelerisque. Vivamus auctor tempor ligula. Donec auctor nisl quis arcu ornare, ut bibendum libero lacinia. Curabitur in urna odio. Praesent eget turpis ante. Donec porta ligula non malesuada aliquet. Nulla eget mi imperdiet, aliquam ipsum vel, feugiat orci. Donec vel convallis sapien. Phasellus id ligula quis urna pellentesque finibus. Nulla efficitur porttitor felis non accumsan. Pellentesque id bibendum orci, vitae ultrices eros. Aliquam lorem sapien, sagittis rutrum sagittis ac, dictum in metus. Sed vestibulum sodales lacus, pretium dapibus nulla efficitur sit amet. Cras odio eros, posuere sit amet lectus ullamcorper, feugiat eleifend arcu. Vestibulum sed dolor elit. Duis non sollicitudin nulla. Praesent auctor justo vitae ligula consectetur malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla consectetur sit amet nisl vitae iaculis. Nullam et ullamcorper erat, vitae pretium dui. Duis vel augue lacus. Fusce nulla risus, auctor ac arcu at, volutpat imperdiet est. Phasellus lacus felis, interdum ut porta sed, pretium vitae sem. Nam auctor quam ut orci luctus bibendum. In euismod volutpat feugiat. Nunc ut ornare felis, id tristique lectus. Donec sed lectus a arcu bibendum placerat vel a quam. Ut pretium nisl nunc, vel dignissim neque finibus quis. Aenean sit amet eleifend urna.</p>
                              </div>
                        </div>
                        <!-- panel 2 -->
                        <div id="panel2" data-tab-index="2">
                            <h2 class="text-center">Mount Whitney in a day</h2>
                              <div class="clearfix">   
                                <img src="img/whitney2.jpg" class="tabImage float-md-start">
                                <p class="tabParagraph">It had been a short two weeks since Chase ran his first ever marathon in Colorado, peaking at 13,000' of altitude in the San Juans. That same weekend, I ran eight miles after hiking a steep eight miles the day before, all at altitude. So to say we were worn out was putting it lightly, but we started our ten hour drive to sunny California anyway. See, it was a miracle that we got a permit to hike Mount Whitney at all, so we had to take what we could get and live a little along the way. <br><br>Chase claimed he would not go after his race (followed by two awful weeks in Missouri humidity recovering) but he followed through anyway. You can see him looking worn down in the photo to the left, but no rest days for the summer of 2022! After we arrived in a nearby town, we rested up the best we could, packed up, and prepared for quite an early start. Maybe I should call it a late start, because we were heading up the mountain before 2am, after a sad four hour restless nap.</p>
                              </div>
                                <h3 class="border-bottom border-info text-center">"Quite the long day.."</h3>
                              <div class="clearfix">
                                <img src="img/whitney1.jpg" class="tabImage2 float-md-end">
                                <p class="tabParagraph">The trail started out easy enough, fortunately for us, but that also meant that we were hiking significantly faster than we should have been. We saw a handful of people starting around the time we did, and the parking was surprisingly empty, no signs of people or bears lurking around besides the few people starting the same crazy time we were. The biggest "mishap" on the way up was Chase thinking he saw a bear. We saw some green eyes across a pitch black field and he was uneasy for some time. We have another four plus hours until sunrise though, so we continued on.<br><br>We arrived at the campground and it was still quite early. No camping for us that day, so we ate some food and continued on. This was the point where we started seeing the bigger crowds, as many campers were leaving around the time we were. So we started up the 99 switchbacks, unwilling to keep count of the pain we had left to endure. To be fair, the switchbacks weren't so bad, we made quick work of that section. It was above the switchbacks, where it felt like you were walking along a cliff for miles that was rough. We made it to the top without much fuss, but we still had to get back down and the clouds were moving in. We were practically limping the last few miles to the car but we had achieved our huge goal, Mount Whitney in a day! You can't help but feel it was all worth it during the drive back down the mountain. Time to recover for two weeks before heading to Europe!</p>
                              </div>
                        </div>                            
                      </div>
                      <!-- end of tab container-->


<?php otherPosts() ?>

</div>

<?php footer() ?>
</div>
</body>

</html>
