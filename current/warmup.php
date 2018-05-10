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
    .nav {text-align:left;-webkit-flex: 0.1 auto;flex:0.1 auto;-webkit-order:1;order:1;}
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
  <li><a href="../index.php">Main</a></li>
  <li><a href="tutorial.php">Tutorials and Schedules</a></li>
  <li><a href="warmup.php">Warm-up Problems</a></li>
  <li><a href="project.php">Groups and Projects</a></li>
  <li><a href="pictures.php">Snapshots</a></li>

  <li><a href="../links.html">Useful Links</a></li>
    <li><a href="../previous years/16-17/16-17main.html">2016-2017 Meeting Materials</a></li>
    <br><br>
  
</ul>
</nav>

<article class = "article">&nbsp &nbsp &nbsp&nbsp&nbsp
<br><br><br>


<font color = "#02047c" face = "cursive"><b>For beginners, please visit <a href = "https://www.learnpython.org/"><font color = orange>learnpython.org</font></a> to learn basic syntax. You may also switch between programming languages if you prefer <a href = "https://www.learn-cpp.org/"><font color = orange>C++</font></a>, <a href = "https://www.learnjavaonline.org/"><font color = orange>Java</font></a>, <a href = "https://www.learn-php.org/"><font color = orange>PHP</font></a>, etc.</b></font> 
<br><br><br>

  <?php
                  $query = "SELECT * FROM ts ORDER BY id DESC";
                  $result = mysqli_query($link, $query);
                  while($row = mysqli_fetch_array($result)){
                  if ($row['type'] == "wa"){
                  echo "<h2 id='l2' style = 'font-family:cursive;font-size:200%;color:#FF7F50;'>".$row['title']."</h2>
  <a href = ".$row['timeline']."><font color = 'green'><u>Link to Hackerrank ".$row['title']." practice</u></font></a><br><br><br><br>
 <p><pre> <font color = 'black' face = 'sans-sarif'><font size = '3'>".$row['description']."  </font></pre></p>

  <br><br>
  <HR WIDTH='100%' COLOR='#6699FF' SIZE='6'>
  <br><br>";
                  }
                  }
             
 ?>

 <h2 id="l2" style = "font-family:cursive;font-size:200%;color:#FF7F50;">Warm-up2</h2>
  <a href = "https://www.hackerrank.com/week1-1"><font color = "green"><u>Link to Hackerrank Warm-up1 practice: www.hackerrank.com/week1-1</u></font></a><br><br><br><br>
  <center><b><font size = "4">a + b Problem</font></b><br><br></center>
  <font color = "black" face = "sans-sarif"><font size = "4"><b>Problem Description:</b></font> <br><br> Print the sum of two numbers a and b (a and b can be decimal numbers).
  <p><b><font size = "4">Input Format:</font></b> <br><br>Two numbers a and b</p>
  <p><b><font size = "4">Output Format:</font></b> <br><br>Print one line &mdash; a + b</p>
  <p><b><font size = "4">Sample Input:</font></b> <br><br> 3 5 </p>
   <p><b><font size = "4">Sample Output:</font></b> <br><br>8</p>
  </font>
  <br><br>
  <HR WIDTH="100%" COLOR="#6699FF" SIZE="6">
  <br><br>
  
  <center><b><font size = "4">Reverse the Apples</font></b><br><br></center>
  <font color = "black" face = "sans-sarif"><font size = "4"><b>Problem Description:</b></font> <br><br> There are many apples on a table with a number on each apple. Bill wants to know the order of numbers if he reverses the positions of all the apples. Could you please help him with that?
  <p><b><font size = "4">Input Format:</font></b> <br><br>The first line contains an integer n (1  ≤  n  ≤ 5000) &mdash; the number of apples.<br> The second line contains n integers &mdash; the ith integer represents the number on the ith apple. </p>
  <p><b><font size = "4">Output Format:</font></b> <br><br>Print one line &mdash; the reversed order of numbers.</p>
  <p><b><font size = "4">Sample Input:</font></b> <br><br>8<br>1 2 3 4 5 6 7 8</p>
   <p><b><font size = "4">Sample Output:</font></b> <br><br>8 7 6 5 4 3 2 1 </p>
  </font>
  <br><br>
  <HR WIDTH="100%" COLOR="#6699FF" SIZE="6">
  <br><br>
  
  <center><b><font size = "4">Find Even Numbers</font></b><br><br></center>
  <font color = "black" face = "sans-sarif"><font size = "4"><b>Problem Description:</b></font> <br><br> Given a list of numbers, please find the number of even numbers. 
  <p><b><font size = "4">Input Format:</font></b> <br><br>The first line contains an integer n (1  ≤  n  ≤ 100000) &mdash; the size of the list.<br> The second line contains n integers &mdash; the ith integer represents the ith number in the list.</p>
  <p><b><font size = "4">Output Format:</font></b> <br><br>One line &mdash; an integer represents the number of even numbers in the list.</p>
  <p><b><font size = "4">Sample Input:</font></b> <br><br>10<br>5 3 6 8 9 4 5 3 2 800</p>
   <p><b><font size = "4">Sample Output:</font></b> <br><br>5</p>
   <p><b><font size = "4">Explanation:</font></b> <br><br>
   Even number are divisible by 2. <br> For example, 2, 4, 6, 8 are even numbers, but 1, 3, 5, 7 are not. <br>
   The even numbers in the sample are: 6 8 4 2 800</p>
  </font>
  <br><br>
  <HR WIDTH="100%" COLOR="#6699FF" SIZE="6">
  <br><br>
  
  
  
  
  
  
  


  
  <h2 id="l2" style = "font-family:cursive;font-size:200%;color:#FF7F50;">Warm-up1</h2>
  <a href = "https://www.hackerrank.com/warm-up1"><font color = "green"><u>Link to Hackerrank Warm-up1 practice: www.hackerrank.com/warm-up1</u></font></a><br><br><br><br>
  <center><b><font size = "4">Hello World!</font></b><br><br></center>
  <font color = "black" face = "sans-sarif"><font size = "4"><b>Problem Description:</b></font> <br><br> Write a program that prints "Hello World!" on the screen.
  <p><b><font size = "4">Input Format:</font></b> <br><br>Nothing for input.</p>
  <p><b><font size = "4">Output Format:</font></b> <br><br>Print one line &mdash; "Hello World!"</p>
  <p><b><font size = "4">Sample Input:</font></b> <br><br>Null</p>
   <p><b><font size = "4">Sample Output:</font></b> <br><br>Hello World!</p>
  </font>
  <br><br>
  <HR WIDTH="100%" COLOR="#6699FF" SIZE="6">
  <br><br>
  
  <center><b><font size = "4">Happy Coding!</font></b><br><br></center>
  <font color = "black" face = "sans-sarif"><font size = "4"><b>Problem Description:</b></font> <br><br> Write a program that prints "Happy Coding!" on the screen.
  <p><b><font size = "4">Input Format:</font></b> <br><br>Nothing for input.</p>
  <p><b><font size = "4">Output Format:</font></b> <br><br>Print one line &mdash; "Happy Coding!"</p>
  <p><b><font size = "4">Sample Input:</font></b> <br><br>Null</p>
   <p><b><font size = "4">Sample Output:</font></b> <br><br>Happy Coding!</p>
  </font>
  <br><br>
  <HR WIDTH="100%" COLOR="#6699FF" SIZE="6">
  <br><br>
  
  <center><b><font size = "4">Follow my name!</font></b><br><br></center>
  <font color = "black" face = "sans-sarif"><font size = "4"><b>Problem Description:</b></font> <br><br> Write a program that reads a name and then prints the name on the screen.
  <p><b><font size = "4">Input Format:</font></b> <br><br>One line &mdash; a string that represents a name.</p>
  <p><b><font size = "4">Output Format:</font></b> <br><br>One line &mdash; a string that represents the name.</p>
  <p><b><font size = "4">Sample Input:</font></b> <br><br>Bob</p>
   <p><b><font size = "4">Sample Output:</font></b> <br><br>Bob</p>
  </font>
  <br><br>
  <HR WIDTH="100%" COLOR="#6699FF" SIZE="6">
  <br><br>
  
  
  
  
  
  
  
  
  
  
  
 



<!---<a href = "oj/submit.php"><font size = "10" color = "#0404B4">Click Here to Submit Code!</font></a>--->

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
<br><br><br><br><br><br><br>

 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/simple/skin.css" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24hs4nDOh7He62ZgiXrjH12%2F"+"&opts=17886&num=10&ts=1495917418366");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
</article>
<footer>
<center><a href="http://sutherland-programming-club.co.nf">Pittsford Sutherland High School Programming Club</a>
<br> Email us: sutherlandprogramming@gmail.com </center> </footer>
</div>
</body>
</html>
