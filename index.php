<?php
  $nama = "Fazal Said";
  $details = "A Website builder freelancer.";
  $instagram = "https://instagram.com/fazallsaid";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $nama; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fazal Said Homepage.">
    <meta name="keywords" content="Fazal Said, Fazal, fazal, fazalsaid">
    <meta name="author" content="Fazal Said">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>
    <section id="hero"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 163.5" style="enable-background:new 0 0 100 163.5;" xml:space="preserve">
<g transform="translate(0.000000,749.000000) scale(0.100000,-0.100000)">
	<path d="M352.5,7487.4C351.4,7484.3,0,5858.4,0,5856.4c0-0.7,74-0.9,164.1-0.7l164.3,0.7l31.6,174.6l31.6,174.6h106.9h106.9l24.4-127.7c13.5-70.3,28.6-149.1,33.6-175l9.2-47.6h163.5H1000l-1.1,4.8c-2.8,11.1-350.7,1626.1-350.7,1627.9c0,1.1-61.1,2-147.3,2C384.8,7490,353.1,7489.3,352.5,7487.4z M542.3,6713.5c22.3-163.5,40.4-298.8,40.4-300.5c0-2.8-10.7-3.3-84-3.3h-84.2l1.3,7.2c2.2,12.7,84,590.8,84,593.4C499.8,7022.7,507,6971.7,542.3,6713.5z"/>
</g>
</svg>
      <header>
        <div class="nav-toggle">
          <p>Menu</p><span></span>
        </div>
        <ul class="nav">
          <li><a href="#about">About</a></li>
          <li><a href="#full-slide">Work</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </header>
      <div class="wrapper">
        <div class="welcome">
          <h1>Hello, welcome to my page.</h1>
          <p>Know about me here.</p>
        </div>
        <div class="photographer"><img src="assets/img/hero.png" alt="Photographer"></div>
      </div>
    </section>
    <section id="about"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 203.6" style="enable-background:new 0 0 100 203.6;" xml:space="preserve">
<g transform="translate(0.000000,749.000000) scale(0.100000,-0.100000)">
	<path d="M0,6471.9V5454.2h206.5h206.5v436.2v436.2h7.6c19.8,0.3,107.9,5.7,128.3,8.2c90.2,10.9,154.9,29.4,220.4,62.8c141.1,72.6,213.3,213.3,228.3,444.1c8.7,135.3-7.3,272.3-42.9,368.3c-48.6,130.5-131,212.8-253.8,253.8c-15.5,5.2-43.5,12.8-62.2,17.1l-34,7.3l-302.2,0.8L0,7490V6471.9z M490.5,7190.8c51.1-13.6,71.2-28.8,92.9-69.8c22.3-41.9,26.4-81.5,24.7-243.2l-1.4-115l-8.4-32.1c-10.9-40.5-13.6-45.4-35.6-67.9c-21.2-22-30.7-27.4-60.6-34.5c-18.8-4.3-68.2-10.9-82.6-10.9c-3.3,0-3.8,44-3.8,291.1v291.3l26.6-1.6C456.8,7197.3,478.6,7194,490.5,7190.8z"/>
</g>
</svg>
      <div class="wrapper">
        <div class="camera"><img src="assets/img/camera.png" alt="Camera"></div>
        <div class="blurb">
          <h2>I'm <strong><?php echo $nama; ?></strong></h2>
          <p><?php echo $details; ?></p>
          <div class="social"><a href="<?php echo $instagram; ?>"><i class="icon-instagram"></i></a></div>
        </div>
      </div>
    </section>
    <section id="full-slide"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 171.2" style="enable-background:new 0 0 100 171.2;" xml:space="preserve">
<g transform="translate(0.000000,750.000000) scale(0.100000,-0.100000)">
	<path d="M253.7,7486.3c-151.6-74.7-233.3-224.4-251.4-460.9c-3.2-41.5-3-726.7,0-763.9c7.5-86.3,21.9-155.7,44.5-213.7c51.4-130.6,124.4-207.8,239.3-253.2l17.8-6.8l197.9,0.5l197.9,0.7l22.8,10c98.4,42.7,167.6,112.8,214.8,217.1c34.2,75.6,52.5,154.8,60.3,260.3c3.2,42,3,700.9,0,743.1c-8.2,113.2-29.2,200.4-66,276.2c-44.1,90.4-104.6,151.6-190.9,193.4l-22.8,11H499.8H281.5L253.7,7486.3zM541.1,7263.7c52.3-15.8,85.6-58.7,101.8-131.3c11.4-51.6,11.2-43.8,11.2-488.6c0-384-0.2-418.7-3.9-444.3c-9.8-68.3-28.5-112.8-59.4-141.8c-24-22.4-52.5-32.6-92-32.6c-35.2,0-57.5,6.8-82.2,25.8c-40.9,30.8-63.2,89-69.9,182c-1.6,21.7-2.1,171.2-1.6,434.9c0.9,362.1,1.4,404.1,4.8,425.1c7.1,43.4,21,89,34.2,112.6c16.4,28.8,49.5,52.7,83.8,60.5C486.3,7270.1,523.3,7269,541.1,7263.7z"/>
</g>
</svg>
      <ul class="banner">
        <li class="active"></li>
        <li></li>
        <li></li>
      </ul><i class="icon-chevron-thin-left prev"></i><i class="icon-chevron-thin-right next"></i>
    </section>
    <section id="featured"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 248.8" style="enable-background:new 0 0 100 248.8;" xml:space="preserve">
<g transform="translate(0.000000,749.000000) scale(0.100000,-0.100000)">
	<path d="M0,6245.8V5001.6h500h500V5176v174.4H752.5H505v1069.8V7490H252.5H0V6245.8z"/>
</g>
</svg>
      <div class="wrapper">
        <div class="blurb">
          <h2><strong>Ut enim</strong> ad minim</h2>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
        <div class="featured"><img src="assets/img/featured.jpg" alt="Featured"></div>
      </div>
    </section>
    <section id="three-slide"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 248.8" style="enable-background:new 0 0 100 248.8;" xml:space="preserve">
<g transform="translate(0.000000,749.000000) scale(0.100000,-0.100000)">
	<path d="M0,6245.8V5001.6h500h500V5176v174.4H752.5H505v1069.8V7490H252.5H0V6245.8z"/>
</g>
</svg>
      <div class="wrapper">
        <ul class="slider">
          <li class="back"><img src="assets/img/three-slide/thumb-1.jpg"></li>
          <li class="current"><img src="assets/img/three-slide/thumb-2.jpg"></li>
          <li class="front"><img src="assets/img/three-slide/thumb-3.jpg"></li>
          <li><img src="assets/img/three-slide/thumb-4.jpg"></li>
        </ul>
      </div><i class="icon-chevron-thin-left prev"></i><i class="icon-chevron-thin-right next"></i>
    </section>
    <section id="contact"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 171.2" style="enable-background:new 0 0 100 171.2;" xml:space="preserve">
<g transform="translate(0.000000,750.000000) scale(0.100000,-0.100000)">
	<path d="M253.7,7486.3c-151.6-74.7-233.3-224.4-251.4-460.9c-3.2-41.5-3-726.7,0-763.9c7.5-86.3,21.9-155.7,44.5-213.7c51.4-130.6,124.4-207.8,239.3-253.2l17.8-6.8l197.9,0.5l197.9,0.7l22.8,10c98.4,42.7,167.6,112.8,214.8,217.1c34.2,75.6,52.5,154.8,60.3,260.3c3.2,42,3,700.9,0,743.1c-8.2,113.2-29.2,200.4-66,276.2c-44.1,90.4-104.6,151.6-190.9,193.4l-22.8,11H499.8H281.5L253.7,7486.3zM541.1,7263.7c52.3-15.8,85.6-58.7,101.8-131.3c11.4-51.6,11.2-43.8,11.2-488.6c0-384-0.2-418.7-3.9-444.3c-9.8-68.3-28.5-112.8-59.4-141.8c-24-22.4-52.5-32.6-92-32.6c-35.2,0-57.5,6.8-82.2,25.8c-40.9,30.8-63.2,89-69.9,182c-1.6,21.7-2.1,171.2-1.6,434.9c0.9,362.1,1.4,404.1,4.8,425.1c7.1,43.4,21,89,34.2,112.6c16.4,28.8,49.5,52.7,83.8,60.5C486.3,7270.1,523.3,7269,541.1,7263.7z"/>
</g>
</svg>
      <div class="wrapper">
        <div class="blurb">
          <h2><strong>Say</strong> Hello</h2>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
        <form>
          <input type="email" placeholder="Your Email">
          <input type="text" placeholder="Subject">
          <textarea placeholder="Message"></textarea>
          <input type="submit" value="Send Message">
        </form>
      </div>
      <p class="copyright">&copy; Apollo 2016</p>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="assets/js/functions-min.js"></script>
  </body>
</html>