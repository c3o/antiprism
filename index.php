<?php

$lang = $_GET['lang'];
$filepath = 'lang/'.basename($lang).'.php';
if (!$lang || !file_exists($filepath)) { $lang = 'en'; }
include($filepath);

?><!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<title>AntiPRISM.eu – Stop Online Spying!</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="antiprism.css" type="text/css" media="all">
    
    <script type="text/javascript">
      function toggle(o) {
        var p = o.parentNode.parentNode;
        p.className = (p.className.indexOf('state-expanded') == -1) ? p.className+' state-expanded' : p.className.replace(/ ?state-expanded ?/, '');
        return false;
      }
    </script>
	</head>
	<body>
	  <div id="pirate">
	    <div class="section">
	      <img src="logos/pp-se.png" width="40"/> A Pirate project
	    </div>
	    <div class="section lang">
	      <select onchange="document.location.replace('http://antiprism.eu/?lang='+this.options[this.selectedIndex].value)">
	        <option value="">EN - English</option>
          <option value="cat">CAT - Català</option>
          <option value="cz">CZ - Česky</option>
	        <option value="de">DE - Deutsch</option>
          <option value="ee">EE - Eesti</option>
          <option value="es">ES - Español</option>
          <option value="it">IT - Italiano</option>
	      </select>
	    </div>
	  </div>
		<div id="page">
      <div id="logo">
        <div id="bg"></div>
   			<h1>
   			  <span class="pre">European</span>
   			  <span class="main">Anti PRISM</span>
   			  <span class="post">Initiative</span>
   			</h1>
        <div id="bar" style="background:red; height:35px; -webkit-transform:rotate(-45deg); position:absolute; top: 200px; left: 140px; box-shadow: rgba(0,0,0,.6) -7px 7px 0"></div>
      </div>
			
			<ul id="menu">
        <?php echo $menu; ?>
			</ul>
			
      <?php echo $manifesto; ?>

			<div id="supporters" class="box">
				<h3>–<?php echo $undersigned; ?>–</h3>
				<ul>
					<li style="margin-left:80px"><a href="http://pirata.cat" target="_blank" class="btn" title="Pirates de Catalunya"><img src="logos/pp-cat.jpg" width="145" height="167"/></a><a href="http://pirata.cat" target="_blank" class="btn" title="Pirates de Catalunya" style="width:145px; height: 167px;"></a></li>
					
					<li style="-webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -ms-transform: rotate(2deg); -o-transform: rotate(2deg); transform: rotate(2deg)"><a href="http://pirateparty.org.uk" target="_blank" class="btn" title="Pirate Party UK"><img src="logos/pp-uk.png" width="125" height="175"/></a><a href="http://pirateparty.org.uk" target="_blank" class="btn" title="Pirate Party UK" style="width:125px; height: 175px;"></a></li>
					
					<li style="-webkit-transform: rotate(-1deg); -moz-transform: rotate(-1deg); -ms-transform: rotate(-1deg); -o-transform: rotate(-1deg); transform: rotate(-1deg)"><a href="http://partidopirata.es" target="_blank" class="btn" title="Partido Pirata"><img src="logos/pp-es.png" width="123" height="123"/></a><a href="http://partidopirata.es" target="_blank" class="btn" title="Partido Pirata" style="width:123px; height: 123px;"></a></li>

					<li style="-webkit-transform: rotate(4deg); -moz-transform: rotate(4deg); -ms-transform: rotate(4deg); -o-transform: rotate(4deg); transform: rotate(4deg)"><a href="http://piratpartiet.se" target="_blank" class="btn" title="Piratpartiet"><img src="logos/pp-se.png" width="118" height="118"/></a><a href="http://piratpartiet.se" target="_blank" class="btn" title="Piratpartiet" style="width:118px; height:118px;"></a></li>
					
					<li style="clear:left; -webkit-transform: rotate(3deg); -moz-transform: rotate(3deg); -ms-transform: rotate(3deg); -o-transform: rotate(3deg); transform: rotate(3deg)"><a href="http://piratenpartei.at" target="_blank" class="btn" title="Piratenpartei Österreichs"><img src="logos/pp-at.png" width="304" height="62"/></a><a href="http://piratenpartei.at" target="_blank" class="btn" title="Piratenpartei Österreichs" style="width:304px; height: 62px;"></a></li>

          <li style=""><a href="http://piratenpartei.de" target="_blank" class="btn" title="Piratenpartei Deutschland"><img src="logos/pp-de.png" width="227" height="88"/></a><a href="http://piratenpartei.de" target="_blank" class="btn" title="Piratenpartei Deutschland" style="width:227px; height: 88px;"></a></li>

          <li style="margin-left:-15px;margin-top:-20px"><a href="http://pirati.cz" target="_blank" class="btn" title="Pirátské strany"><img src="logos/pp-cz.png" width="190" height="61"/></a><a href="http://pirati.cz" target="_blank" class="btn" title="Pirátské strany" style="width:190px; height: 61px;"></a></li>

          <li style="clear:left; margin-left:80px"><a href="https://www.piratenpartij.nl" target="_blank" class="btn" title="Piratenpartij"><img src="logos/pp-nl.png" width="335" height="105"/></a><a href="https://www.piratenpartij.nl" target="_blank" class="btn" title="Piratenpartij" style="width:335px; height: 105px;"></a></li>

          <li><a href="http://piratskastranka.si/" target="_blank" class="btn" title="Piratska stranka Slovenije"><img src="logos/pp-si.png" width="250" height="100"/></a><a href="http://piratskastranka.si/" target="_blank" class="btn" title="Piratska stranka Slovenije" style="width:250px; height: 100px;"></a></li>

				</ul>
			</div>

      <div id="credits">
        This text is <a href="https://creativecommons.org/publicdomain/zero/1.0/">in the public domain</a>. Please share, translate, add to, build on.<br />
        Site run by PP-AT / Piratenpartei Österreichs / <a href="mailto:c3o@piratenpartei.at">contact</a>
      </div>
    </div>

  <script type="text/javascript">
    var lis = document.getElementById('supporters').getElementsByTagName('li');
    for (var li in lis) {
      if (lis[li].addEventListener) {
        lis[li].addEventListener("mouseover", function() {
          var img = this.firstChild.firstChild;
          img.src = img.src.replace(/\.png/, '-color.png');
          img.addEventListener("error", function() {
            img.src = img.src.replace(/-color\.png/, '.png');
          });
        }, false);
        lis[li].addEventListener("mouseout", function() {
          var img = this.firstChild.firstChild;
          img.src = img.src.replace(/-color\.png/, '.png');
        }, false);
      }
    }
  </script>

	</body>
</html>
