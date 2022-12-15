<?php

/*
portal-config.php

Used to store all of our IT162 configuration information

*/

ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "IT162 Portal - Sam Smolen";
        $logo = 'fa-home';
        $pageID ='Welcome';
    break;

    case 'contactme.php':
        $title = "Contact Sam";
        $logo = 'fa-pencil-square-o';
        $pageID ='Contact Sam';
        $logo_color = ' style="color:#0f0"';
    break;

    case 'flowchart.php':
        $title = "IT162 Portal - Flowchart";
        $pageID ='Flowchart';
    break;

    case 'big/index.php':
        $title = "IT162 Portal - BIG";
        $pageID ='BIG';
    break;

    case 'aia.php':
        $title = "IT162 Portal - AIA";
        $logo = 'fa-universal-access';
        $pageID ='AIA';
        $logo_color = ' style="color:#00f"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = ''; //no icon by default
        $pageID = 'Welcome';
        $logo_color = ''; //make logo_color an empty string by default
}

$nav1['index.php']="Welcome";
$nav1['contactme.php']="contact sam";
$nav1['flowchart.php']="flowchart";
$nav1['big/index.php']="BIG";
$nav1['aia.php']="AIA";
$nav1['https://samsmolen.com/benstile2.0/index.php']="Final Project";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";
        }

	    
    	    
    }
      
    return $myReturn;    
}


/*
<a href="index.php" class="active">Welcome</a>
<a href="big/index.php">BIG</a>
<a href="aia.php">AIA</a>
<a href="flowchart.php">Flowchart</a>
<a href="fp/index.php">Final Project</a>
<a href="contactme.php">Contact Sam</a>
*/

?>
