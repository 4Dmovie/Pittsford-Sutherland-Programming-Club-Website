<?php
$link = mysqli_connect("fdb15.biz.nf","2268644_cp","sutherland2015","2268644_cp") or die("Error ".mysqli_error($link));
?>
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
  <li><a href="tutorial.html">Tutorials and Schedules</a></li>
  <li><a href="warmup.php">Warm-up Problems</a></li>
  <li><a href="project.php">Groups and Projects</a></li>
  <li><a href="pictures.php">Snapshots</a></li>

  <li><a href="../links.html">Useful Links</a></li>
    <li><a href="../previous years/16-17/16-17main.html">2016-2017 Meeting Materials</a></li>
  <br><br>
  
  <li><a href="09.29.17.html">First Meeting</a></li>
  <li><a href="10.13.17.html">Sphero robotic ball</a></li>
  <li><a href="10.20.17.html">warm-up1, Sphero robotic ball task, <br>and introduction to graph</a></li>
  <li><a href="11.03.17.html">Implementaton practice</a></li>
  <li><a href = "files/kahoot1.htm"> Kahoot1 Solutions </a> </li>
   <li><a href = "ACSL/contest1.php"> ACSL Contest1 Prep </a> </li>
  <?php
  $query = "SELECT * FROM ts ORDER BY id ASC";
  $result = mysqli_query($link, $query);
  while($row = mysqli_fetch_array($result)){
  $sid = $row['id'];
  if(($row['filepath'] || $row['code']) && $row['type'] == "ts"){
  $initlink = "<li><a href=\"initts.php?id=".$sid."\">".$row['title']."</a></li>";
 
  echo $initlink;
  }
}
?>
</ul>
</nav>

<article class = "article">
<div class="container">
        <header class="clearfix">
            <span><font size = "5" >2017-2018 Timeline</font></span>
        </header>
        <div class="main">
            <ul class="cbp_tmtimeline">
           <!--- <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>May09</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "">AP Exams session 2nd week</a></h2>
                        <p>Good Luck on AP Tests!
                            </p>
                    </div>
                </li>
             <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>May02</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "">AP Exams session 1st week</a></h2>
                        <p>Good Luck on AP Tests!
                            </p>
                    </div>
                </li>
            <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>April07</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "">4th Cornell University High School Programming Contest</a></h2>
                        <p>It was such an exciting experience! Pittsford Team 1 took 4th place out of 23 teams.<br>
                           Pittsford Team 2 made such a huge improvement up to 10th place.
                            </p>
                    </div>
                </li>
            <li>
                    <time class="cbp_tmtime" datetime="2016-04-04 02:01">
                        <span>2017</span> <span>April04</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "">Practice Session for Cornell Programming Conest</a></h2>
                        <p>Work as teams and review the paper resources for the contest.
                            </p>
                    </div>
                </li>
            <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>Mar21</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "queuestack.html">Data Structure: Queues and Stacks</a></h2>
                        <p>Definitions of queue and stack structures. <br>
                           Sample problems implemented by both codes with and without using STL in C++.
                            </p>
                    </div>
                </li>
             <li>
                    <time class="cbp_tmtime" datetime="2017-01-10 01:10 ">
                        <span>2017</span><span>Jan10</span> </time>
                    <div class="cbp_tmicon cbp_tmicon-earth">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "string.html">Data Structure: Strings</a></h2>
                        <p> definitions of characters and strings. <br>
                            C++ functions of strings: add strings; Substring; Erase one character from strings; Size of strings.
                            </p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-12-19 12:19">
                        <span>2016</span> <span>Dec19</span></time>
                    <div class="cbp_tmicon cbp_tmicon-screen">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "euler 1--5.html">Problems: Project Euler problems 1--5</a></h2>
                      <p>Explanations and solutions to first five problems from Project Euler.
                            </p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-11-29 11:29">
                        <span>2016</span> <span>Nov29</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                           <a href = "grammar2.html">C++ Grammar: Arrays, Void and Function</a></h2>
                       <p>Arrays of higher dimenstions. The ways to save a chart. We introduced functions and void that can be used
                         in coding complex problems.
                            </p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-11-22 11:22">
                        <span>2016</span> <span>Nov22</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href="grammar1.html">C++ Grammar: Array, Scope of Variables</a></h2>
                       <p>We introduced the simplest data structure--array. We used arrays to solve Fabonacci sequence problems. 
                            </p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-11-15 14:30">
                        <span>2016</span> <span>Nov15</span></time>
                    <div class="cbp_tmicon cbp_tmicon-screen">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "grammar0.html">C++ Grammar: Input and Output, If and Else, For and While</a></h2>
                        <p>First mention of C++ grammar. We learned to input and output data sets, and some basic sentences like "If" sentences and
                          "for" "while" loops.
                            </p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-10-25 14:30">
                        <span>2016</span> <span>Oct25</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "week2.html">Algorithm: Brute Force</a></h2>
                       <p>Brute Force is the easiest way to solve a problem. It's easy to code and sometimes it's convenient to use. 
                         We learned to compute time complexity of a program so we can see if we can properly use a Brute Force method in a problem.
                            </p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-10-18 14:30">
                        <span>2016</span> <span>Oct18</span></time>
                    <div class="cbp_tmicon cbp_tmicon-mail">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "week1.html">Algorithm: Implementation</a></h2>
                        <p>Implementation is shortly doing what problems ask us to do. We did some example problems together to see how it works.
                            </p>
                    </div>
                </li>--->
          
                <?php
                  $query = "SELECT * FROM ts ORDER BY id DESC";
                  $result = mysqli_query($link, $query);
                  while($row = mysqli_fetch_array($result)){
                  if(($row['filepath'] || $row['code']) && $row['type'] == "ts"){
                   $sid = $row['id'];
                   echo "<li><time class='cbp_tmtime' datetime=".$row['date'].">
                    <span>".$row['yr']."</span> <span>".$row['md']."</span></time>
                    <div class='cbp_tmicon cbp_tmicon-phone'>
                    </div>
                    <div class='cbp_tmlabel'>
                        <h2><a href=\"initts.php?id=".$sid."\"><font color = '#993202'>".$row['title']."</font></a></h2>
                        <p>".$row['timeline']."</p>
                    </div>
                  </li>";
                  }
                  else if ($row['type'] == "ts"){
                  echo "<li><time class='cbp_tmtime' datetime=".$row['date'].">
                    <span>".$row['yr']."</span> <span>".$row['md']."</span></time>
                    <div class='cbp_tmicon cbp_tmicon-phone'>
                    </div>
                    <div class='cbp_tmlabel'>
                        <h2>
                            ".$row['title']." </h2>
                        <p>".$row['timeline']."</p>
                    </div>
                  </li>";
                  }
                  }
             
                ?>
                      <li>
                    <time class="cbp_tmtime" datetime="2016-04-01 02:01">
                        <span>2017</span> <span>Dec01</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href="ACSL/contest1.php">ACSL Contest1 Prep</a>  </h2>
                        <p>Prepared for ACSL Contest1</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-04-01 02:01">
                        <span>2017</span> <span>Nov24</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            Happy Thanksgiving!  </h2>
                        <p>Happy Thanksgiving!</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-04-01 02:01">
                        <span>2017</span> <span>Nov17</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "https://play.kahoot.it/#/k/cfd6f0d0-df59-4d6e-9575-591aaca2e017"><font color = "#993202">Fun Kahoot Time</font> </a> </h2>
                        <p>Played Kahoot on problems related to Computer Science. Here are Kahoot <a href = "https://play.kahoot.it/#/k/cfd6f0d0-df59-4d6e-9575-591aaca2e017"><font color = "#993202">problems</font></a> and  <a href = "files/kahoot1.htm"><font color = "#993202">solutions.</font></a></p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-04-01 02:01">
                        <span>2017</span> <span>Nov10</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            No School</h2>
                        <p>No School due to Veterans Day break.</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-04-01 02:01">
                        <span>2017</span> <span>Nov03</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2>
                            <a href = "11.03.17.html"><font color = "#993202">Implementation Practice</font></a></h2>
                        <p>Reviewed and re-learned Implementaion. Also tried to solve four problems selected from Hackerrank Implementaion section. <br>
                        <a href = "https://www.hackerrank.com/contests/meeting-on-nov-3-2017/challenges"><u><font color = "#993202">Link to Hackerrank problems: https://www.hackerrank.com/contests/meeting-on-nov-3-2017/challenges</font></u></a>
                            </p>
                    </div>
                </li>
           
                <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>Oct27</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2> <a href = "http://sutherland-programming-club.co.nf/current/warmup.php"><font color = "#993202">warm-up2</font></a> </h2>
                           
                        <p>We did Warm-up2 problem set.</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>Oct20</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2> <a href = "10.20.17.html"><font color = "#993202">warm-up1, Sphero robotic ball task, and introduction to graph</font></a> </h2>
                           
                        <p>All of the people who attended the meeting solved all three warm-up problems. Then we shared ideas on a task related Sphero robotic ball, and in the end we introduced graph structure.</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>Oct13</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2> <a href = "10.13.17.html"><font color = "#993202">Sphero robotic ball coding</font></a> </h2>
                           
                        <p>We played Sphero robotic ball. We wrote code to let it run like we did in <a href="https://www.pittsfordschools.org/Page/19265"><font color = "#993202">"Walking Record".</font></a></p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>Oct06</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2> No School </h2>
                           
                        <p>No School due to Columbus Day break.</p>
                    </div>
                </li>
                <li>
                    <time class="cbp_tmtime" datetime="2016-02-01 02:01">
                        <span>2017</span> <span>Sep29</span></time>
                    <div class="cbp_tmicon cbp_tmicon-phone">
                    </div>
                    <div class="cbp_tmlabel">
                        <h2> <a href = "09.29.17.html"><font color = "#993202">First Meeting</font></a> </h2>
                           
                        <p>We discussed the importance of programming, and we had a general view of the projects and groups.</p>
                    </div>
                </li>
                
               
            </ul>
        </div>
    </div>
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
