<!DOCTYPE HTML>
<html>
<head>
 <meta charset="UTF-8">
 <title>Team BlueRidge</title>
 <link href="css/style.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
 <style type="text/css">
	#members {
		margin-left:auto;
		margin-right:auto;
	}
	tr .name {
		text-align:center;
		width:200px;
	}
	tr .title {
		text-align:left;
		width:auto;
	}
 </style>
 <link rel="stylesheet" href="css/core.css" media="screen"/>
 <link rel="stylesheet" href="css/mobile.css" media="handheld, only screen and (max-device-width:480px)"/>
</head>

<body>
 <div class="container">
  <header>
   <div id="header-nonmobile">
    <div id="header-stuff">
     <span style="font-size:12px;"><br />&nbsp;</span>
     <p id="header-text">Team BlueRidge</p>
    </div>
    <div id="social-networks">
        <!-- Google + -->
        <g:plusone annotation="none"></g:plusone>
         <!-- Google+ JS -->
		<script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
        <!--Facebook-->
        <a href="https://www.facebook.com/TeamBlueridge"><img src="img/facebook-icon.png" width="24px" /></a>
        <!--Blog-->
        <a href="/blog/"><img src="img/feed-icon.png" width="24" /></a>
	</div>
    <img src="img/header.jpg" width="100%" height="298" alt="Team Blueridge: Header" usemap="#header" />
    <map name="header">
     <area shape="rect" coords="1000,285,760,298" alt="Pisgah in Violet Mist ©2012 Jeff Pittman Art" href="http://jeffpittmanart.com" />
    </map>
   </div>
   <div id="header-mobile">
    <p>Team BlueRidge</p>
   </div>
  </header>
   <div id="mobile-nav">
    <p><a href="/">Home</a> | <a href="donations.php">Donate</a> | <a href="the-team.php">The Team</a> | <a href="/blog/">Blog</a> | <a href="/forum/">Forum</a> | <a href="/wiki/">Wiki</a></p>
   </div>
   <div class="sidebar1">
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="donations.php">Donations</a></li>
        <li><a href="the-team.php">The Team</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/forum/">Forum</a></li>
        <li><a href="/wiki/">Wiki</a></li>
      </ul>
    </nav>
    <aside>
      <p>Click the links above to check out our site!</p>
    </aside>
    <!-- end .sidebar1 -->
   </div>
   <article class="content">
    <section>
     <h2>The Team</h2>
     <!--I think a table works better for organizing members -kalaker -->
       <table id="members">
        <tr>
          <td class="name"><h3>Member Name</h3></td>
          <td class="title"><h3>Member Title</h3></td>
        </tr>
        <tr>
          <td class="name">eoghan</td>
          <td class="title"><strong><em>Marvel Developer</em></strong></td>
        </tr>
        <tr>
          <td class="name">insink71</td>
          <td class="title"><strong><em>Hobbyist</em></strong></td>
        </tr>
        <tr>
          <td class="name">kalaker</td>
          <td class="title"><strong><em>Tester, BlueBot Dev</em></strong></td>
        </tr>
        <tr>
          <td class="name">simonsimons34</td>
          <td class="title"><strong><em>Founder, Developer</em></strong></td>
        </tr>
       </table>
    </section>
    <!-- end .content -->
   </article>
   <aside>
    <h3>News</h3>
    <?php include('includes/aside-news.html'); ?>
   </aside>
   <footer>
    <p id="footer-nav"><a href="/">Home</a> | <a href="donations.php">Donate</a> | <a href="the-team.php">The Team</a> | <a href="/blog/">Blog</a> | <a href="/forum/">Forum</a> | <a href="/wiki/">Wiki</a></p>
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
   <!-- end .container -->
 </div>
</body>
</html>
