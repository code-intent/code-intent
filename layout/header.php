<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Code Intent &reg;</title>
  <!-- Bootstrap core CSS -->
  <!-- Custom styles for this template -->
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <link href="style/bootstrap-theme.min.css" rel="stylesheet">
  <link href="style/main.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="header navbar-fixed-top clearfix">
    <div class="container">
      <div class="logo">{i}</div>
      <ul class="nav nav-pills pull-right">
        <li <?php echo ($_TARGET == "pages/home.html")?"class='active'":null; ?>>
          <a href="home"><i class="intenticon">a</i></a>
        </li>
        <li <?php echo ($_TARGET == "pages/about.html")?"class='active'":null; ?>>
          <a href="about"><i class="intenticon">b</i></a>
        </li>
        <li <?php echo ($_TARGET == "pages/contact.html")?"class='active'":null; ?>>
          <a href="contact"><i class="intenticon">c</i></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron text-center">
    <div class="container">
      <h2>
          <span class="logo-words purple">code<span class="logo white">{i}</span>ntent<span class="blinking-cursor">_</span></span>
      </h2>
    </div>
  </div>
