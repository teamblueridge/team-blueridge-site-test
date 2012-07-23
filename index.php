<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Team BlueRidge</title>
<link href="css/style.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/core.css" media="screen"/>
<link rel="stylesheet" href="css/mobile.css" media="handheld, only screen and (max-device-width:480px)"/>
</head>

<body>
<!--To whoever is unfortunate to have to read this code:
	Most mobile code directly proceeds the desktop (non-mobile) code
    All mobile code is hidden on non-mobile devices (hopefully)-->
<div class="container">
  <header>
  	<div id="header-nonmobile">
  	<div id="header-stuff">
    <span style="font-size:12px;"><br />&nbsp;</span>
  	<p id="header-text">Team BlueRidge</p>
    </div>
  <a href="#"><img src="img/header.jpg" alt="Team BlueRidge" width="100%" height="200" id="Insert_logo" style="background: #56A0D3; display:block;" /></a>
  </div>
  <div id="header-mobile">
  <p>Team BlueRidge</p>
  </div>
  </header>
  <div id="social-networks">
          <!-- Place this tag where you want the +1 button to render -->
        <g:plusone annotation="none"></g:plusone>
		<!--Facebook-->
        <a href="https://www.facebook.com/TeamBlueridge"><img src="img/facebook-icon.png" width="24px" /></a>
        <!--Blog-->
        <a href="/blog/"><img src="img/feed-icon.png" width="24" /></a>
  </div>
  	<div id="mobile-nav">
      <p><a href="/">Home</a> | <a href="donations.html">Donate</a> | <a href="the-team.html">The Team</a> | <a href="/blog/">Blog</a> | <a href="/forum/">Forum</a> | <a href="/wiki/">Wiki</a></p>
	</div>
  <div class="sidebar1">
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="donations.html">Donations</a></li>
        <li><a href="the-team.html">The Team</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/forum/">Forum</a></li>
        <li><a href="/wiki/">Wiki</a></li>
      </ul>
    </nav>
    <aside>
      <p>Click the links above to check out our site!</p>
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Welcome!!</h1>
    <section>
     <h2>Our Team</h2>
      <p>Team BlueRidge has three members: eoghan, insink71, and kalaker. All members are active on XDA and play an important role in our team!<br />
      If you'd like to find out more, <a href="the-team.html">we have a page for that</a>.</p>
    </section>
    <section>
      <h2>Our Work</h2>
      <p>All Team BlueRidge ROMs are open-source and can be found on <a href="http://goo.im/devs/teamblueridge/">Goo.im</a>. All accompanying documentation and support threads can be found on XDA. The source can be found on <a href="http://github.com/teamblueridge/">GitHub</a>.</p>
    </section>
    <section>
      <h2>Donations</h2>
      <p>All Team BlueRidge work comes from volunteers who do this work in their free time and have actual jobs and lives. The only money they get for the ROMs comes from donations from users. If you would like to contribute, please see our <a href="donations.html">donations</a> page.</p>
    </section>
  <!-- end .content -->
  </article>
  <aside>
    <h3>News</h3>
	<?php include('includes/aside-news.html'); ?>
  </aside>
  <footer>
    <p id="footer-nav"><a href="/">Home</a> | <a href="donations.html">Donate</a> | <a href="the-team.html">The Team</a> | <a href="/blog/">Blog</a> | <a href="/forum/">Forum</a> | <a href="/wiki/">Wiki</a></p>
    <address>
      Team BlueRidge | <a href="mailto:webmaster@teamblueridge.com">webmaster@teamblueridge.com</a> | <a href="http://github.com/teamblueridge">GitHub</a>
      <div id="license-text">
      <br />&nbsp;<br />
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
      </div>
    </address>
  </footer>
  <!-- Place this render call where appropriate -->
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
  <!-- end .container --></div>
</body>
</html>