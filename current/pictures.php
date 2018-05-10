<?php
$link = mysqli_connect("fdb15.biz.nf","2268644_cp","sutherland2015","2268644_cp") or die("Error ".mysqli_error($link));
?>
<!DOCTYPE html>
<html>
<head>
<style> 
*, *:after, *:before
        {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body, html
        {
            font-size: 85%;
            padding: 0;
            margin: 0;
        }
        
        /* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
        .clearfix:before, .clearfix:after
        {
            content: " ";
            display: table;
            
        }
        .clearfix:after
        {
            clear: both;
        }
        
        body
        {
            font-family: 'Lato' , Calibri, Arial, sans-serif;
            color: #47a3da;
        }
        
        a
        {
            color: #f0f0f0;
            text-decoration: none;
        }
        
        a:hover
        {
            color: #000;
        }
        
        .main, .container > header
        {
            width: 90%;
            max-width: 69em;
            margin: 0 auto;
            padding: 0 1.875em 3.125em 1.875em;
        }
        
        .container > header
        {
            padding: 2.875em 1.875em 1.875em;
            background: #47da4b;
        }
        
        .container > header h1
        {
            font-size: 2.125em;
            line-height: 1.3;
            margin: 0 0 0.6em 0;
            float: left;
            font-weight: 400;
        }
        
        .container > header > span
        {
            display: block;
            position: relative;
            z-index: 9999;
            font-weight: 700;
            text-transform: uppercase;
            background: #47da4b;
            letter-spacing: 0.5em;
            padding: 0 0 0.6em 0.1em;
        }
        
        .container > header > span span:after
        {
            width: 30px;
            height: 30px;
            left: -12px;
            font-size: 50%;
            top: -8px;
            font-size: 75%;
            position: relative;
        }
        
        .container > header > span span:hover:before
        {
            content: attr(data-content);
            text-transform: none;
            text-indent: 0;
            letter-spacing: 0;
            font-weight: 300;
            font-size: 110%;
            padding: 0.8em 1em;
            line-height: 1.2;
            text-align: left;
            left: auto;
            margin-left: 4px;
            position: absolute;
            color: #fff;
            background: #47a3da;
        }
        
        .container > header nav
        {
            float: right;
            text-align: center;
        }
        
        .container > header nav a
        {
            display: inline-block;
            position: relative;
            text-align: left;
            width: 2.5em;
            height: 2.5em;
            background: #fff;
            border-radius: 50%;
            margin: 0 0.1em;
            border: 4px solid #47a3da;
        }
        
        .container > header nav a > span
        {
            display: none;
        }
        
        .container > header nav a:hover:before
        {
            content: attr(data-info);
            color: #47a3da;
            position: absolute;
            width: 600%;
            top: 120%;
            text-align: right;
            right: 0;
            pointer-events: none;
        }
        
        .container > header nav a:hover
        {
            background: #47a3da;
        }
        
        .bp-icon:after
        {
            font-family: 'bpicons';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            text-align: center;
            color: #47a3da;
            -webkit-font-smoothing: antialiased;
        }
        
        .container > header nav .bp-icon:after
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            line-height: 2;
            text-indent: 0;
        }
        
        .container > header nav a:hover:after
        {
            color: #fff;
        }
        
        .bp-icon-next:after
        {
            content: "\e000";
        }
        .bp-icon-drop:after
        {
            content: "\e001";
        }
        .bp-icon-archive:after
        {
            content: "\e002";
        }
        .bp-icon-about:after
        {
            content: "\e003";
        }
        .bp-icon-prev:after
        {
            content: "\e004";
        }
        
        @media screen and (max-width: 55em)
        {
        
            .container > header h1, .container > header nav
            {
                float: none;
            }
        
            .container > header > span, .container > header h1
            {
                text-align: center;
            }
        
            .container > header nav
            {
                margin: 0 auto;
            }
        
            .container > header > span
            {
                text-indent: 30px;
            }
        }
        
        /* COMPONENT.CSS */
        
        /* Made with http://icomoon.io/ */
        
        .cbp_tmtimeline
        {
            margin: 30px 0 0 0;
            padding: 0;
            list-style: none;
            position: relative;
        }
        
        /* The line */
        .cbp_tmtimeline:before
        {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 10px;
            background: #d0da47;
            left: 20%;
            margin-left: -10px;
        }
        
        .cbp_tmtimeline > li
        {
            position: relative;
        }
        
        /* The date/time */
        .cbp_tmtimeline > li .cbp_tmtime
        {
            display: block;
            width: 25%;
            padding-right: 100px;
            position: absolute;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span
        {
            display: block;
            text-align: right;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span:first-child
        {
            font-size: 1.5em;
            color: #47da78;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span:last-child
        {
            font-size: 2.5em;
            color: #47da78;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child
        {
            color: #47da78;
        }
        
        /* Right content even content*/
        .cbp_tmtimeline > li .cbp_tmlabel
        {
            margin: 0 0 15px 25%;
            background: #b3f854;
            color: #402965;
            padding: 2em;
            font-size: 1.5em;
            font-weight: 300;
            line-height: 1.4;
            position: relative;
            border-radius: 5px;
        }
        
        /* odd content*/
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel
        {
            background: #f6b9ad;
        }
        
        .cbp_tmtimeline > li .cbp_tmlabel h2
        {
            margin-top: 0px;
            padding: 0 0 10px 0;
            border-bottom: 1px solid rgba(255,255,255,0.4);
        }
        
        /* The triangle */
        .cbp_tmtimeline > li .cbp_tmlabel:after
        {
            right: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-right-color: #eec211;
            border-width: 10px;
            top: 10px;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after
        {
            border-right-color: #eec211;
        }
        
        /* The icons */
        .cbp_tmtimeline > li .cbp_tmicon
        {
            width: 40px;
            height: 40px;
            font-family: 'ecoico';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            font-size: 0em;
            line-height: 40px;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            color: #fff;
            background: #fdfd61;
            border-radius: 50%;
            box-shadow: 0 0 0 10px #f7f702;
            text-align: center;
            left: 20%;
            top: 0;
            margin: 0 0 0 -25px;
        }
        
        .cbp_tmicon-phone:before
        {
            content: "\e000";
        }
        
        .cbp_tmicon-screen:before
        {
            content: "\e001";
        }
        
        .cbp_tmicon-mail:before
        {
            content: "\e002";
        }
        
        .cbp_tmicon-earth:before
        {
            content: "\e003";
        }
        /* Example Media Queries */
        @media screen and (max-width: 65.375em)
        {
        
            .cbp_tmtimeline > li .cbp_tmtime span:last-child
            {
                font-size: 1.5em;
            }
        }
        
        @media screen and (max-width: 47.2em)
        {
            .cbp_tmtimeline:before
            {
                display: none;
            }
        
            .cbp_tmtimeline > li .cbp_tmtime
            {
                width: 100%;
                position: relative;
                padding: 0 0 20px 0;
            }
        
            .cbp_tmtimeline > li .cbp_tmtime span
            {
                text-align: left;
            }
        
            .cbp_tmtimeline > li .cbp_tmlabel
            {
                margin: 0 0 30px 0;
                padding: 1em;
                font-weight: 400;
                font-size: 95%;
            }
        
            .cbp_tmtimeline > li .cbp_tmlabel:after
            {
                right: auto;
                left: 20px;
                border-right-color: transparent;
                border-bottom-color: #3594cb;
                top: -20px;
            }
        
            .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after
            {
                border-right-color: transparent;
                border-bottom-color: #6cbfee;
            }
        
            .cbp_tmtimeline > li .cbp_tmicon
            {
                position: relative;
                float: right;
                left: auto;
                margin: -55px 5px 0 0px;
            }
        }
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
text-align: left;
    style = "font-family:Algerian;font-size:200%;color:#FF7F50;"
}

header {background: #6495ED;color:white; font-size: 1.4em;}
footer {background: #6495ED;color:white; font-size: 1.5em;}
.nav {background:	#333399;}

.nav ul {
    color: #f2f2f2;
    font-size: 15px;
}
.nav ul a {
    text-decoration: none;
}
@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 0.05 auto;flex:0.05 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  background-color: #717171;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 1.5s ease;
}

.active, .dot:hover {
  background-color:#717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3.5s;
  animation-name: fade;
  animation-duration: 3.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>

<body>

<div class="flex-container">
<header>
  <h1><font face = "Castellar">Pittsford Sutherland Programming Club</font></h1>
</header>


<nav class="nav" >
<center><font face = "Baskerville Old Face" size = "4" color = "yellow">Table of Contents</font></center>
<ul>
      <li><a href="../index.php">Main</a></li>
  <li><a href="tutorial.php">Tutorials and Schedules</a></li>
  <li><a href="warmup.php">Warm-up Problems</a></li>
  <li><a href="project.php">Groups and Projects</a></li>
  <li><a href="pictures.php">Snapshots</a></li>

  <li><a href="../links.html">Useful Links</a></li>
    <li><a href="../previous years/16-17/16-17main.html">2016-2017 Meeting Materials</a></li>
</ul>
</nav>

<article class = "article">
<br><br><br>



<?php
                  $query = "SELECT * FROM ts ORDER BY id DESC";
                  $result = mysqli_query($link, $query);
                  while($row = mysqli_fetch_array($result)){
                  if($row['filepath'] && $row['type'] == "snap"){
                   
                  echo "<div class='mySlides fade' style='text-align:center'>
                  <div class='numbertext'></div>
                  <img src='../".$row['filepath']."' width='800' height = auto>
                  <div class='text'></div>
                      </div>";
                  }
                  }
?>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

<?php
/*
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>*/
?>
<script>
var x = document.getElementsByClassName("mySlides");
var slideIndex = Math.floor(Math.random() * x.length);
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}    
    x[slideIndex-1].style.display = "block";  
    setTimeout(carousel, 10000); // Change image every 10 seconds
    showSlides(slideIndex);
}

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


</script>






<div style="clear:both"></div>
<br>
<br><br>
<br><br><br><br>
 </article>
<footer>
<center><a href="http://sutherland-programming-club.co.nf">Pittsford Sutherland High School Programming Club</a>
<br> Email us: sutherlandprogramming@gmail.com </center> </footer>
</div>
<?php
mysqli_close($link);
?>

</body>
</html>
