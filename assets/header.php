<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title><?php if ($pagename == "") { echo ucfirst($pagename); } else { echo $pagetitle; } ?></title>
  </head>
  <body>
    <div class="banner">
      <center>
        <h1><strong>Matthieu Tran</strong></h1>
      </center>
    </div>
    <nav>
        <ul>
            <li><a <?php if ($pagename == "home") { echo 'class="active" '; } ?>href="index.html">Home</a></li>
            <li><a <?php if ($pagename == "portfolio") { echo 'class="active" '; } ?>href="portfolio.html">Portfolio</a></li>
            <li><a <?php if ($pagename == "about") { echo 'class="active" '; } ?>href="about.html">About Me</a></li>
        </ul>
    </nav>
    <div class="container">
      <h1> <?php if ($pagename == "") { echo ucfirst($pagename); } else { echo $pagetitle; } ?></h1>