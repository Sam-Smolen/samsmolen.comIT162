<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/forms.css" />
</head>

<body>
    <main class="wrapper">
        <header>
          <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Sam Smolen's SCC IT162 Portal</a></h1>
          <nav class="topnav" id="myTopnav">
          <?=makeLinks($nav1)?>  

      

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
          </nav>
        </header>
        <div class="wrapper">
          <!--header ends here-->
        <section>
          <h2 class="pageID"><?=$pageID?><h2>