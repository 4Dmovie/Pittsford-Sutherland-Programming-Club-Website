
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
            font-size: 100%;
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
            background: #afdcf8;
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
            font-size: 0.9em;
            color: #bdd0db;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span:last-child
        {
            font-size: 2.9em;
            color: #3594cb;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child
        {
            color: #6cbfee;
        }
        
        /* Right content */
        .cbp_tmtimeline > li .cbp_tmlabel
        {
            margin: 0 0 15px 25%;
            background: #3594cb;
            color: #fff;
            padding: 2em;
            font-size: 1.2em;
            font-weight: 300;
            line-height: 1.4;
            position: relative;
            border-radius: 5px;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel
        {
            background: #6cbfee;
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
            border-right-color: #3594cb;
            border-width: 10px;
            top: 10px;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after
        {
            border-right-color: #6cbfee;
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
            font-size: 1.4em;
            line-height: 40px;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            color: #fff;
            background: #46a4da;
            border-radius: 50%;
            box-shadow: 0 0 0 8px #afdcf8;
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

header {background: #6495ED;color:white;}
footer {background: #6495ED;color:white;}
.nav {background:	#333399;}

.nav ul {
    color: #f2f2f2;
    font-size: 15px;
}
.nav ul a {
    text-decoration: none;
}
@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 0.1 absolute;flex:0.1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
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
  <li><a href="index.php">Main</a></li>
  <li><a href="current/tutorial.php">Tutorials and Schedules</a></li>
  <li><a href="current/warmup.php">Warm-up Problems</a></li>
 <!--- <li><a href="current/project.php">Groups and Projects</a></li> --->
  <li><a href="current/pictures.php">Snapshots</a></li>

  <li><a href="links.html">Useful Links</a></li>
  
  <li><a href="previous years/16-17/16-17main.html">2016-2017 Meeting Materials</a></li>
  
</ul>
</nav>


  

<article class = "article">
<br>
<img src="current/pictures/indexpic.png" alt="p2" style="width: 500px;height:125px;" align = "right">
<p>



<font color = "black"/>
Founded in 2015, Sutherland Programming club aims to share the fun of coding with more people. We created the first programming teams to attend <a href="https://www.cs.cornell.edu/events/cornell-high-school-programming-contest"> <font color = "orange">Cornell High School Programming Contest</font></a>. The contest is in
<a href="https://en.wikipedia.org/wiki/ACM_International_Collegiate_Programming_Contest"> <font color = "orange">ACM International Collegiate Programming Contest</font></a> format,
which gives the competing teams(3 people per team) 3.5 hours to solve about 10 problems. </p>
In this club, you could enjoy the beauty of algorithms, have fun with different projects, and experience the power of teamwork.
Whether you know how to program or not, this is a club where you can learn something and extend your skills to infinity. Starting from 2017, we compete in <a href="http://www.acsl.org"> <font color = "orange">American Computer Science League(ACSL)</font></a> which is a contest held four times a year.
<p>

<font color = "black"/>

<p> All of the club materials are uploaded to this site.</p>
<p><font color = "#0066cc">Want to get most recently updated meeting materials?</font></p> 
<p><a href="https://www.dropbox.com/sh/r7h9sw3ur7yzjsi/AADdKoInKY46Sk0tr5t_P-bma?dl=0"> <font color = "orange">Click here to view!</font></a></p>
<p><font color = "#0066cc">Interested in C++ syntax, data structures, or some useful algorithms?</font></p> 
<p>Please visit <a href="http://sutherland-programming-club.co.nf/current/tutorial.html"> <font color = "orange">Tutorials</font></a>, which includes a timeline of our meeting schdules and the meeting materials.</p>
<p><font color = "#0066cc">Want to see what projects we are working on now?</font></p> 
<p>Please visit <a href="http://sutherland-programming-club.co.nf/current/project.php"> <font color = "orange">Groups and Projects</font></a> and have a tour of our groups and creative projects such as school guide and game design.</p>
<p><font color = "#0066cc">Want to practice on other sites or online judges containing problem sets and tutorials?</font></p> 
<p>Please visit <a href="http://sutherland-programming-club.co.nf/links.html"> <font color = "orange">Useful Links</font></a>, 
which includes links to websites like USACO, Hackerrank, Codeforces, etc.</p>

<p><font color = "#0066cc">Interested in the pictures taken for the club during the year? </font></p>
<p>Please visit <a href="http://sutherland-programming-club.co.nf/current/pictures.html"> <font color = "orange">Snapshots</font></a>.</p>
<p><font color = "#0066cc">Interested in previous years meeting materials?</font></p> 
<p>Please visit a specific year's web page listed in the <font color = "orange">Table of Contents</font>.

<!---<img src="files/p6.gif" alt="p2" style="width:330px;height:300px;">--->

<!---<div style = "float:right;">
<script language="javascript" type="text/javascript" >
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now



var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';



cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;


for(index=0; index < DAYS_OF_WEEK; index++)
{


if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  week_day =Calendar.getDay();
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {
  var day  = Calendar.getDate();
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  else
  cal += TD_start + day + TD_end;
  }

  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop
cal += '</TD></TR></TABLE></TABLE>';

document.write(cal);

</script>
</div><br><br><br>--->
<!--<br><br><br><br>
<img src="files/pp5.JPG" alt="p2" style="width:550px;height:400px;">&nbsp &nbsp &nbsp&nbsp
<img src="files/pp1.jpg" alt="p2" style="width:550px;height:400px;"><br><br><br><br>
<img src="files/pp2.JPG" alt="p2" style="width:350px;height:300px;">&nbsp &nbsp &nbsp&nbsp
<img src="files/pp3.JPG" alt="p2" style="width:450px;height:300px;">&nbsp &nbsp &nbsp&nbsp
<img src="files/pp4.JPG" alt="p2" style="width:250px;height:300px;">-->

<!---

<?php


$link = mysqli_connect("fdb15.biz.nf", "2268644_oj", "yc083099");

mysqli_select_db($link, "2268644_oj");

$name = $_POST['name'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

// Create connection
if($submit){
        if($name && $comment){
        $sql = mysqli_query($link, "INSERT INTO comment (name,comment) VALUES ('$name', '$comment')");
        header("location: success.php");}
        else
                echo "not found";

}


?>









<form action="index.php" method="POST">
<table>
<tr><td>Name: </td><td><input type="text" name="name" /></td></tr>
<tr><td colspan = "2">Comment: </td></tr>
<tr><td colspan = "2"><textarea name = "comment"></textarea></td></tr>
<tr><td colspan = "2"><input type="submit" name = "submit" value = "Submit"  /></td></tr>


</table>
</form>



<?php

$sql = "SELECT * FROM comment ORDER BY id DESC";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $comment = $row["comment"];
    $dellink = "<a href= \"delete.php?id= ". $id . "\"> Delete </a>";
        echo " - Name: " . $name. '<br />' . "-Comment: " . $comment. "<br>" . '<br />' . '<br />';
        
    }
} else {
    echo "0 results";
}

?>
--->
<h3>Contact Us</h3><!-- start Contact Box -->
<script data-sil-id='59fd34a31127f60015460f5e'> (function() {var d = document, w = window, l = window.location,p = l.protocol == 'file:' ? 'http://' : '//';if (!w.WS) w.WS = {}; c = w.WS;var m=function(t, o){  var e = d.getElementsByTagName('script'); e=e[e.length-1];  var n = d.createElement(t); if (t=='script') {n.async=true;} for (k in o) n[k] = o[k];  e.parentNode.insertBefore(n, e)};   m('script', {      src: p+'bawkbox.com/widget/contact/59fd34a31127f60015460f5e?page='+encodeURIComponent(l+''),      type: 'text/javascript'  });  c.load_net = m;})();</script>
<div class='sil-widget-contact sil-widget' id='sil-widget-59fd34a31127f60015460f5e'><a href='https://htmlcontactbox.com'>Contact Box</a></div>
<!-- end Contact Box -->

<footer>
<center><a href="http://sutherland-programming-club.co.nf">Pittsford Sutherland High School Programming Club</a>
<br> Email us: sutherlandprogramming@gmail.com </center></footer>

</div>
</html>
