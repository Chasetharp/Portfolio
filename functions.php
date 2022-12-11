<?php 
// $active = basename($_SERVER['PHP_SELF'], ".php");

function otherPosts(){
  echo'
  <h2 class="otherPosts">Other Posts you might enjoy:</h2>
  <div class="row">
  <div class="card-deck d-flex justify-content-around flex-wrap">
  
    <div class="card">
      <a class="otherPostsLinks" href="./utah.php#panel2utah">
      <img src="img/pothole2.jpg" class="card-img-top" alt="Pothole desert escape">
      <div class="card-body">
        <h6 class="card-title">Climbing out of the Abyss</h6>
      </div>
      <div class="card-footer">
        <small>By: Amy Konkel</small>
      </div>
  </a>
    </div>
  
  <div class="card">
  <a class="otherPostsLinks" href="./overseas.php#panel3overseas">
    <img src="img/couple.JPG" class="card-img-top" alt="Me and my partner">
    <div class="card-body">
      <h6 class="card-title">Winter escape</h6>
    </div>
    <div class="card-footer">
        <small>By: Amy Konkel</small>
      </div>
  </a>
  </div>
  
  <div class="card">
  <a class="otherPostsLinks" href="./overseas.php#panel2overseas">
      <img src="img/groupDesert.jpg" class="card-img-top" alt="Group photo in Canyon">
      <div class="card-body">
        <h6 class="card-title">It takes a village</h6>
      </div>
      <div class="card-footer">
        <small>By: Amy Konkel</small>
      </div>
  </a>
    </div>
  
  </div>
  </div>
  <!-- end of row and section of other posts -->


  ';
}

function footer(){
  echo'
  <footer id="section2" class="row">
  <legend class="foot" id="media-accord">Social <img class="chevron1" src="img/arrow.png"></img></legend>
    <ul class="socialDrop">
      <li><a href="http://www.instagram.com/chase__tharp"><img class="social" src="img/insta.png"></a></li>
      <li><a href="http://www.linkedin.com/in/chase-tharp-454834218"><img class="social" src="img/linked.png"></a></li>
      <li><a href="mailto:amylkonkel@gmail.com"><img class="social" src="img/email.png"></a></li>
    </ul>
  <legend class="foot" id="credit-accord">Credits <img class="chevron2" src="img/arrow.png"></img></legend>
    <ul class="credits">
      <li>Credit for images:<br></li>
      <li>Instagram Icon: <a href="https://www.iconfinder.com/justui">Just UI</a></li>
    </ul>
  <legend class="foot" id="help-accord">Conservation partners <img class="chevron3" src="img/arrow.png"></img></legend>
    <ul class="conserve">
      <li><a href="https://www.nature.org/en-us/">The Nature Conservancy</a></li>
      <li><a href="https://www.americanrivers.org">American Rivers</a></li>
      <li><a href="https://www.tpl.org">Trust for Public Land</a></li>
      <li><a href="https://www.sierraclubfoundation.org">Sierra Club</a></li>
    </ul>
    
    </footer>
';


}