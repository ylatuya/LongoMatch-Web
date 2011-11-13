<?php define('BASE_URL', '') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index,follow" />
    <meta name="title" content="LongoMatch - The digital coach" />
    <meta name="description" content="LongoMatch - The Libre Free digital coach. Sports video analysis and scooting software" />
    <title>LongoMatch - The digital coach</title>
    <link rel="stylesheet" type="text/css" href="<?php print BASE_URL ?>css/jquery.tweet.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php print BASE_URL ?>css/styles.css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">
    <script language="javascript" src="<?php print BASE_URL ?>js/jquery-1.5.2.min.js" type="text/javascript"></script>
    <script language="javascript" src="<?php print BASE_URL ?>js/jquery.tweet.js" type="text/javascript"></script>
    <script language="javascript" src="<?php print BASE_URL ?>js/longomatch.js" type="text/javascript"></script>
    <!-- Forum stuff -->
    <link rel="alternate" type="application/rss+xml" href="<?php print BASE_URL ?>forum/extern.php?action=feed&amp;type=rss" title="RSS" />
    <link rel="alternate" type="application/atom+xml" href="<?php print BASE_URL ?>forum/extern.php?action=feed&amp;type=atom" title="ATOM" />
    <link rel="top" href="<?php print BASE_URL ?>forum" title="Forum index" />
    <link rel="search" href="<?php print BASE_URL ?>forum/search.php" title="Search" />
    <link rel="author" href="<?php print BASE_URL ?>forum/userlist.php" title="User list" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php print BASE_URL ?>forum/style/Oxygen/Oxygen.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php print BASE_URL ?>forum/style/Oxygen/Oxygen_cs.css" />
    <script type="text/javascript" src="<?php print BASE_URL ?>forum/include/js/common.js"></script>
    <!-- End of forum stuff -->
    <!-- Google analytics -->
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-4991423-1");
    pageTracker._initData();
    pageTracker._trackPageview();
    </script>
    </head>
</head>
<body>
<div id="header">
<div id="logo">
  <a href="<?php print BASE_URL ?>index.php" title="LongoMatch - The digital coach"><img src="<?php print BASE_URL ?>img/logo.png" alt="longomatch logo"/></a>
</div>
<div id="header-menu">
  <h1>LongoMatch - The digital coach</h1>
  <!--        <ul id="submenu">
    <li><a href="">ENGLISH</a></li>
    <li><a href="">ABOUT</a></li>
  </ul> -->
<div id="menu-container">
  <ul id="menu">
    <li class="<?php if ($page == 'home') print 'current' ?>"><a href="<?php print BASE_URL ?>index.php">HOME</a></li>
    <li class="<?php if ($page == 'features') print 'current' ?>"><a href="<?php print BASE_URL ?>features.php">FEATURES</a></li>
    <li class="<?php if ($page == 'downloads') print 'current' ?>"><a href="<?php print BASE_URL ?>downloads.php">DOWNLOADS</a></li>
    <li class="<?php if ($page == 'forum') print 'current' ?>"><a href="<?php print BASE_URL ?>forum/index.php">FORUM</a></li>
    <li class="<?php if ($page == 'contribute') print 'current' ?>"><a href="<?php print BASE_URL ?>contribute.php">CONTRIBUTE</a></li>
  </ul>
</div>
</div>
</div>
