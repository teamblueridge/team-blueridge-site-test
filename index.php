<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Team Blueridge</title>
  <meta name="description" content="An android and web development team">
  <meta name="tag" content="Simply Breathtaking" />
  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/core.css" media="screen"/>
  <link rel="stylesheet" href="css/mobile.css" media="handheld, only screen and (max-device-width:480px)"/>
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 & 7 users to upgrade their browser -->
  <!--[if lt IE 8]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<div class="container">
  <header>
   <div id="header-nonmobile">
    <div id="header-stuff">
     <span style="font-size:12px;"><br />&nbsp;</span>
     <p id="header-text">Team BlueRidge</p>
    </div>
    <div id="social-networks">
        <table>
            <tr>
                <td>
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
                </td>
                <td>
                    <!--Facebook-->
                    <a href="https://www.facebook.com/TeamBlueridge"><img src="img/facebook-icon.png" width="24px" /></a>
                </td>
                <td>
                    <!--Blog-->
                    <a href="/blog/"><img src="img/feed-icon.png" width="24" /></a>
                </td>
            </tr>
        </table>
	</div>
    <img src="img/header.jpg" width="100%" height="298" alt="Team Blueridge: Header" usemap="#header" />
    <map name="header">
     <area shape="rect" coords="1000,285,760,298" alt="Pisgah in Violet Mist &#169;2012 Jeff Pittman Art" href="http://jeffpittmanart.com" />
    </map>
   </div>
   <div id="header-mobile">
    <p>Team BlueRidge</p>
   </div>
  </header>
  <div role="main">

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
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Welcome!!</h1>
    <section>
     <h2>Our Team</h2>
      <p>Team BlueRidge has three members: eoghan, insink71, and kalaker. All members are active on XDA and play an important role in our team!<br />
      If you'd like to find out more, <a href="the-team.php">we have a page for that</a>.</p>
    </section>
    <section>
      <h2>Our Work</h2>
      <p>All Team BlueRidge ROMs are open-source and can be found on <a href="http://goo.im/devs/teamblueridge/">Goo.im</a>. All accompanying documentation and support threads can be found on XDA. The source can be found on <a href="http://github.com/teamblueridge/">GitHub</a>.</p>
    </section>
    <section>
      <h2>Donations</h2>
      <p>All Team BlueRidge work comes from volunteers who do this work in their free time and have actual jobs and lives. The only money they get for the ROMs comes from donations from users. If you would like to contribute, please see our <a href="donations.php">donations</a> page.</p>
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

  <!-- JavaScript at the bottom for fast page loading -->
        <!-- Place this render call where appropriate -->
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>