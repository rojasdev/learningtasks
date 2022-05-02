<?php
$param = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Demo</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
    </head>
    <body>
       <div id="wrapper">
            <div id="menu">
             <ul class="navigation">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index.php?load=news">News</a></li>
                  <li><a href="index.php?load=contact">Contact</a></li>
                  <li><a href="index.php?load=about">About</a></li>
                </ul>
            </div>
           <div id="content">
            <?php
               switch($param){
                   case 'news':
                       include 'news.php';
                   break;
                   case 'contact':
                        include 'contact.php';
                   break;
                   case 'about':
                       include 'about.php';
                   break;
                   default:
                        include 'home.php';
                   break;
               }
            ?>
           </div>
        </div>
    </body>
</html>