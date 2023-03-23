<?php include 'fp-config.php' ?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://kit.fontawesome.com/a42941f95d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="fpcss/styles.css" />
<link rel="stylesheet" href="fpcss/nav.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<!-- START HEADER -->
<header>
  <div class="title">
    <h1><a class="navlink" href=" ">SIGHTS&#x2022;BY&#x2022;MEDUSA</a></h1>
  </div>
  <div class="navbar">
    <nav>
      <ul class="topnav" id="myTopnav">
          <li><a class="navlink" href=" ">INSTAGRAM</a> <span class="dot-icon">&#x2022;</span> </li>
          <li><a class="navlink" href=" ">CONTACT</a> <span class="dot-icon">&#x2022;</span></li>
          <li><a class="navlink" href=" ">ABOUT</a> </li>
          <!-- <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li> -->
      </ul>
    </nav>
  </div>
</header>
<div class="container">
  <aside>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis quam urna, eu molestie neque blandit convallis. Curabitur viverra non mi vel imperdiet. Suspendisse ante felis, vulputate vitae tincidunt sed, fermentum eu lacus. Maecenas vel tristique metus. Integer non ultricies augue. Proin ante velit, iaculis a ex eget, congue ornare neque. Cras ac nunc fermentum, faucibus nibh vel, maximus orci. Nullam dapibus lobortis erat, sit amet tempus magna porta sit amet.

    In hac habitasse platea dictumst. Suspendisse orci leo, facilisis consequat tempus at, bibendum et orci. Nulla ac eros diam. Curabitur efficitur leo vitae nisi dapibus fermentum in a sem. Sed eu elit eget lacus aliquet congue in sit amet risus. Phasellus arcu arcu, laoreet ut convallis in, pharetra non libero. Etiam egestas nibh justo, ac pulvinar odio ultrices non. Nullam ac ullamcorper erat, sed accumsan eros. Pellentesque venenatis justo fermentum sem tincidunt luctus. Phasellus sit amet tortor sit amet ex malesuada blandit. Duis tristique orci sed sapien facilisis, sit amet mollis ante vehicula. Etiam fringilla ultricies mollis. 
  </aside>
  <section>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus dolor a molestie dignissim. Pellentesque at mi ac dui gravida pretium tincidunt sed lectus. In vulputate dolor magna, at tincidunt arcu placerat ut. Nulla egestas a mi sed sollicitudin. Aenean ultrices et enim sed commodo. Etiam pellentesque eu arcu ut condimentum. Proin suscipit orci quis lectus tempor cursus. Fusce volutpat auctor sem, id lacinia enim dapibus eget. Aenean tempus orci vitae nibh facilisis sodales. Curabitur est metus, pulvinar rhoncus leo nec, vehicula dapibus ante. Etiam laoreet tempus dui, sit amet pretium purus lacinia eu. Nam eget tellus finibus sapien semper laoreet vitae nec sem. Aliquam tempus scelerisque lorem in elementum.

    Nulla tincidunt venenatis nisl in volutpat. Proin sollicitudin, nibh iaculis elementum interdum, est purus bibendum urna, non elementum urna velit id erat. Morbi in enim ullamcorper, ornare arcu ut, suscipit mi. Donec eu ante lectus. Etiam non diam vitae ante sodales luctus. Fusce ac ex id augue sollicitudin rhoncus. Sed eget lacus eu orci fermentum euismod a ut nisi. Aliquam aliquet diam urna, in fermentum sapien elementum in. Maecenas molestie rhoncus mauris eu volutpat. Morbi a justo ut augue ultricies mollis.

    Phasellus a massa sed nunc malesuada venenatis. Proin convallis tortor leo, ac elementum nulla lacinia vitae. Nam ut nisi ullamcorper, molestie diam at, interdum libero. Nullam sed sagittis lorem. Aliquam eu vulputate felis, ultrices consectetur leo. Donec pellentesque molestie ullamcorper. Sed ultricies dolor eget felis ornare, eget sagittis nulla elementum. Praesent malesuada rhoncus neque quis tempus. Duis vestibulum quis nibh a interdum. 
  </section>
</div>

<!-- START Footer -->
<footer>
      <p><small>&copy; 2023-<?=date("Y")?> by 
          <a href="joshuadanielson.me/it162">Josh Danielson, All Rights Reserved</a> ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    



  <script>
	//https://tinyurl.com/dynamic-html-checker
	document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

	//manages mobile nav - from W3Schools
	function myFunction() {
    	    var x = document.getElementById("myTopnav");
    	    if (x.className === "topnav") {
        	         x.className += " responsive";
    	    } else {
        	         x.className = "topnav";
    	   }
	}   
  
    </script>
</body>
</html>

