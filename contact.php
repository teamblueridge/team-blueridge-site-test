<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Team BlueRidge</title>
<link href="files/style.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
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
  <a href="#"><img src="img/header.jpg" alt="Team BlueRidge" width="100%" height="200px" id="Insert_logo" style="background: #56A0D3; display:block;" /></a>
  </div>
  <div id="header-mobile">
  <p>Team BlueRidge</p>
  </div>
  </header>
  <div id="social-networks">
          <!-- Place this tag where you want the +1 button to render -->
        <g:plusone annotation="none"></g:plusone>
        
        <!-- Place this render call where appropriate -->
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
    <section>
    <form name="Contact" method="post" action="send.php">
        <p>
            Name: <br />
            <input name="name" type="text" id="name">
        </p>
        <p>
            Email Address: <br />
            <input name="email" type="text" id="email">
        </p>
        <p>
            Who do you wish to contact? <br />
            <select name="who" id="who">
                <option value="eoghan <eoghan@teamblueridge.com>">eoghan</option>
                <option value="insink71 <rob@teamblueridge.com>">insink71</option>
                <option value="kalaker <kalaker@teamblueridge.com>">kalaker</option>
                <option value="Team BlueRidge Webmaster <webmaster@teamblueridge.com>">webmaster</option>
                <option value="eoghan <eoghan@teamblueridge.com>,insink71 <rob@teamblueridge.com>,kalaker <kalaker@teamblueridge.com>,Team BlueRidge Webmaster <webmaster@teamblueridge.com>" selected>Everyone</option>
            </select>
        </p>
        <p>
            Message: <br />
            <textarea rows="7" cols="50" wrap="soft" name="body" id="body"></textarea>
        </p>
        <input type="submit" name="Submit" value="Submit">
    </form>
    </section>
  <!-- end .content --></article>
  <aside>
    <h3>News</h3>
    <?php include('/includes/aside-news.html'); ?>
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
  <!-- end .container --></div>
</body>
</html>