<?php
function filepath($lang) {
  return 'lang/'.basename($lang).'.php'; // basename prevents injections
}

define('DEFAULTLANG', 'en');

$lang = DEFAULTLANG;
if ($_GET['lang']) { // specified in URL?
  $lang = $_GET['lang'];
  if (!file_exists(filepath($lang))) { Header("Location: /"); exit; } // unknown language
} else { // specified in header?
  $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if ($browser_lang != 'en' && file_exists(filepath($browser_lang))) {
    Header("Location: /".$browser_lang); exit; // redirect to preferred language
  }
}
include_once(filepath(DEFAULTLANG)); // defaults
include_once(filepath($lang));

?><!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>AntiPRISM.eu – Stop Online Spying!</title>
    <meta property="og:image" content="logo.png" />   
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/antiprism.css" type="text/css" media="all">
    
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
        <img src="/logos/pp-se.png" width="40"/> A Pirate project
      </div>
      <div class="section lang">
        <select onchange="document.location.replace('http://antiprism.eu/'+this.options[this.selectedIndex].value)">
          <option value="ca"<?php if($lang=='ca') { echo ' selected'; } ?>>CA - Català</option>
          <option value="cz"<?php if($lang=='cz') { echo ' selected'; } ?>>CZ - Česky</option>
          <option value="de"<?php if($lang=='de') { echo ' selected'; } ?>>DE - Deutsch</option>
          <option value="et"<?php if($lang=='et') { echo ' selected'; } ?>>ET - Eesti</option>
          <option value="el"<?php if($lang=='el') { echo ' selected'; } ?>>EL - Ελληνικά</option>
          <option value="en"<?php if($lang=='en') { echo ' selected'; } ?>>EN - English</option>
          <option value="es"<?php if($lang=='es') { echo ' selected'; } ?>>ES - Español</option>
          <option value="fi"<?php if($lang=='fi') { echo ' selected'; } ?>>FI - Suomi</option>
          <option value="fr"<?php if($lang=='fr') { echo ' selected'; } ?>>FR - Français</option>
          <option value="it"<?php if($lang=='it') { echo ' selected'; } ?>>IT - Italiano</option>
          <option value="nl"<?php if($lang=='nl') { echo ' selected'; } ?>>NL - Nederlands</option>
          <option value="ru"<?php if($lang=='ru') { echo ' selected'; } ?>>RU - Русский</option>
          <option value="sl"<?php if($lang=='sl') { echo ' selected'; } ?>>SL - Slovenščina</option>
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
        <ul class="sigs">
          <li style="clear: left; margin-left:50px; margin-right: 10px;">
            <a href="http://ameliaandersdotter.eu" target="_blank" title="Amelia Andersdotter"><img src="/sigs/AA.png" width="313" height="53" style="position:relative;left:-15px; top:9px" /></a><br />
            <small>Amelia Andersdotter, MEP<br />(Piratpartiet)</small>
          </li>     
          <li style="width:170px; margin-top: 2px">
            <a href="https://twitter.com/mmarzoc" target="_blank" title="Mercè Marzo"><img src="/sigs/MM.png" width="240" height="43" style="position:relative; left:-80px; top: 10px" /></a><br />
            <small>Mercè Marzo, Councilwoman<br />Alella (Pirates de Catalunya)</small>
          </li>
          <li style="margin-top:-5px">
            <a href="https://twitter.com/fisima_" target="_blank" title="Philip Pacanda"><img src="/sigs/PP.png" width="203" height="51" style="position:relative;left:-30px; top: 10px" /></a><br />
            <small>Philip Pacanda, Councilman<br />Graz (Piratenpartei Österreichs)</small>
          </li>
         </ul>
        <ul class="logos">
          <li style="clear: left; margin-left:130px; margin-top:-10px"><a href="http://pirata.cat" target="_blank" title="Pirates de Catalunya"><img src="/logos/pp-cat.jpg" width="124" height="144"/></a><a href="http://pirata.cat" target="_blank" title="Pirates de Catalunya" style="width:124px; height: 144px;"></a></li>     
          <li style="-webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -ms-transform: rotate(2deg); -o-transform: rotate(2deg); transform: rotate(2deg)"><a href="http://pirateparty.org.uk" target="_blank" title="Pirate Party UK"><img src="/logos/pp-uk.png" width="107" height="150"/></a><a href="http://pirateparty.org.uk" target="_blank" title="Pirate Party UK" style="width:107px; height: 150px;"></a></li>
          <li style="-webkit-transform: rotate(-1deg); -moz-transform: rotate(-1deg); -ms-transform: rotate(-1deg); -o-transform: rotate(-1deg); transform: rotate(-1deg)"><a href="http://partidopirata.es" target="_blank" title="Partido Pirata"><img src="/logos/pp-es.png" width="100" height="100"/></a><a href="http://partidopirata.es" target="_blank" title="Partido Pirata" style="width:100px; height: 100px;"></a></li>
          <li style="-webkit-transform: rotate(4deg); -moz-transform: rotate(4deg); -ms-transform: rotate(4deg); -o-transform: rotate(4deg); transform: rotate(4deg)"><a href="http://piratpartiet.se" target="_blank" title="Piratpartiet"><img src="/logos/pp-se.png" width="100" height="100"/></a><a href="http://piratpartiet.se" target="_blank" title="Piratpartiet" style="width:100px; height:100px;"></a></li>
          
          <li style="clear:left; -webkit-transform: rotate(3deg); -moz-transform: rotate(3deg); -ms-transform: rotate(3deg); -o-transform: rotate(3deg); transform: rotate(3deg)"><a href="http://piratenpartei.at" target="_blank" title="Piratenpartei Österreichs"><img src="/logos/pp-at.png" width="274" height="56"/></a><a href="http://piratenpartei.at" target="_blank" title="Piratenpartei Österreichs" style="width:274px; height: 56px;"></a></li>
          <li style=""><a href="http://piratenpartei.de" target="_blank" title="Piratenpartei Deutschland"><img src="/logos/pp-de.png" width="227" height="88"/></a><a href="http://piratenpartei.de" target="_blank" title="Piratenpartei Deutschland" style="width:227px; height: 88px;"></a></li>
          <li style="margin-left:-15px;margin-top:-20px"><a href="http://pirati.cz" target="_blank" title="Pirátské strany"><img src="/logos/pp-cz.jpg" width="200" height="77"/></a><a href="http://pirati.cz" target="_blank" title="Pirátské strany" style="width:200px; height: 77px;"></a></li>

          <li style="clear:left; margin-top:-15px; margin-left:0px"><a href="https://www.piratenpartij.nl" target="_blank" title="Piratenpartij"><img src="/logos/pp-nl.png" width="335" height="105"/></a><a href="https://www.piratenpartij.nl" target="_blank" title="Piratenpartij" style="width:335px; height: 105px;"></a></li>
          <li style="margin-top:10px; margin-left:-20px; -webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -ms-transform: rotate(2deg); -o-transform: rotate(2deg); transform: rotate(2deg)"><a href="http://pirateparty.be/" target="_blank" title="Pirate Party Belgium"><img src="/logos/pp-be.png" width="100" height="100"/></a><a href="http://pirateparty.be/" target="_blank" title="Pirate Party Belgium" style="width:100px; height: 100px;"></a></li>
          <li style="margin-top: 10px; -webkit-transform: rotate(3deg); -moz-transform: rotate(3deg); -ms-transform: rotate(3deg); -o-transform: rotate(3deg); transform: rotate(3deg)"><a href="http://www.partito-pirata.it/" target="_blank" title="Partito Pirata"><img src="/logos/pp-it.png" width="259" height="76"/></a><a href="http://www.partito-pirata.it" target="_blank" title="Partito Pirata" style="width:259px; height: 76px;"></a></li>

          <li style="clear:left; margin-left:20px"><a href="https://www.partipirate.org/" target="_blank" title="Parti Pirate"><img src="/logos/pp-fr.png" width="200" height="79"/></a><a href="https://www.partipirate.org/" target="_blank" title="Parti Pirate" style="width:200px; height: 79px;"></a></li>
          <li style="-webkit-transform: rotate(0); -moz-transform: rotate(0); -ms-transform: rotate(0); -o-transform: rotate(0); transform: rotate(0)"><a href="http://www.floridapirates.org" target="_blank" title="Pirate Party Florida"><img src="/logos/pp-us-fl.jpg" width="80" height="80"/></a><a href="http://www.floridapirates.org" target="_blank" title="Pirate Party Florida" style="width:80px; height: 80px;"></a></li>
          <li><a href="http://piratskastranka.si/" target="_blank" title="Piratska stranka Slovenije"><img src="/logos/pp-si.png" width="200" height="80"/></a><a href="http://piratskastranka.si/" target="_blank" title="Piratska stranka Slovenije" style="width:200px; height: 80px;"></a></li>
          <li style="-webkit-transform: rotate(4deg); -moz-transform: rotate(4deg); -ms-transform: rotate(4deg); -o-transform: rotate(4deg); transform: rotate(4deg)"><a href="https://www.pirateparty.gr" target="_blank" title="Κόμμα Πειρατών Ελλάδας"><img src="/logos/pp-se.png" width="80" height="80"/></a><a href="https://www.pirateparty.gr" target="_blank" title="Κόμμα Πειρατών Ελλάδας" style="width:80px; height: 80px;"></a></li>

          <li style="clear:left; margin-top:25px; margin-left:50px; -webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -ms-transform: rotate(2deg); -o-transform: rotate(2deg); transform: rotate(2deg)"><a href="http://piraadipartei.ee" target="_blank" title="Piraadipartei"><img src="/logos/pp-ee.png" width="256" height="62"/></a><a href="http://piraadipartei.ee/" target="_blank" title="Piraadipartei" style="width:256px; height: 62px;"></a></li>
          <li style="margin-top:20px; -webkit-transform: rotate(-2deg); -moz-transform: rotate(-2deg); -ms-transform: rotate(-2deg); -o-transform: rotate(-2deg); transform: rotate(-2deg)"><a href="http://pirateparty.org.au/" target="_blank" title="Pirate Party Australia"><img src="/logos/pp-au.png" width="100" height="100"/></a><a href="http://pirateparty.org.au/" target="_blank" title="Pirate Party Australia" style="width:100px; height: 100px;"></a></li>
          <li style="margin-top:30px; -webkit-transform: rotate(-2deg); -moz-transform: rotate(-2deg); -ms-transform: rotate(-2deg); -o-transform: rotate(-2deg); transform: rotate(-2deg)"><a href="http://piratepartei.lu/" target="_blank" title="Piratepartei"><img src="/logos/pp-lu.png" width="234" height="66"/></a><a href="http://piratepartei.lu/" target="_blank" title="Piratepartei" style="width:234px; height: 66px;"></a></li>

          <li style="clear:left; margin-top:-10px; margin-left:70px; -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg)"><a href="http://piraattipuolue.fi/" target="_blank" title="Piraattipuolue"><img src="/logos/pp-fi.png" width="291" height="42"/></a><a href="http://piraattipuolue.fi/" target="_blank" title="Piraattipuolue" style="width:291px; height: 42px;"></a></li>
          <li style="margin-top: -10px; -webkit-transform: rotate(-1deg); -moz-transform: rotate(-1deg); -ms-transform: rotate(-1deg); -o-transform: rotate(-1deg); transform: rotate(-1deg)"><a href="http://www.partipirate.tn/" target="_blank" title="حزب القراصنة"><img src="/logos/pp-tn.png" width="220" height="100"/></a><a href="http://www.partipirate.tn/" target="_blank" title="حزب القراصنة" style="width:220px; height: 100px;"></a></li>
          <li style="margin-top: -20px; margin-left: -10px; -webkit-transform: rotate(2deg); -moz-transform: rotate(2deg); -ms-transform: rotate(2deg); -o-transform: rotate(2deg); transform: rotate(2deg)"><a href="http://www.pirateparty.ca/" target="_blank" title="Pirate Party of Canada"><img src="/logos/pp-ca.png" width="90" height="90"/></a><a href="http://www.pirateparty.ca/" target="_blank" title="Pirate Party of Canada" style="width:90px; height: 90px;"></a></li>

          <li style="clear:left; margin-top: -40px; margin-left: 60px; -webkit-transform: rotate(-1deg); -moz-transform: rotate(-1deg); -ms-transform: rotate(-1deg); -o-transform: rotate(-1deg); transform: rotate(-1deg)"><a href="http://pirate-party.ru/" target="_blank" title="Пиратская Партия России"><img src="/logos/pp-ru.jpg" width="281" height="36"/></a><a href="http://pirate-party.ru/" target="_blank" title="Пиратская Партия России" style="width:281px; height: 36px;"></a></li>
          <li style="margin-top:0px; -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg)"><a href="http://piratenpartei.ch/" target="_blank" title="Piratenpartei / Parti Pirate / Partito Pirata"><img src="/logos/pp-ch.png" width="279" height="61"/></a><a href="http://piratenpartei.ch" target="_blank" title="Piratenpartei / Parti Pirate / Partito Pirata" style="width:279px; height: 61px;"></a></li>        </ul>
        </ul>
      </div>

    </div>

    <div id="share">
      <div id="page">
        <div class="box">
          <h3><?php echo $share; ?></h3>
          <a style="margin-left:140px" id="twitter" href="" target="share" onclick="var w=window.open(this.href, 'share', 'width=550,height=270,left='+(screen.width/2-275)+','+'top='+(screen.height/2-220));"><img src="/sharetw.png" width="130" title="Twitter" /></a>
          <a id="facebook" href="" target="share" onclick="var w=window.open(this.href, 'share', 'width=550,height=300,left='+(screen.width/2-275)+','+'top='+(screen.height/2-220)); return showInfo()"><img src="/sharefb.png" width="130" title="Facebook" /></a>
        </div>
      </div>
      <div id="credits">
        This text is <a href="https://creativecommons.org/publicdomain/zero/1.0/">in the public domain</a>. Please share, translate, add to, build on.<br />
        Site run by PP-AT / Piratenpartei Österreichs / <a href="mailto:c3o@piratenpartei.at">contact</a>
      </div>
    </div>

  <script type="text/javascript">
    var url = encodeURIComponent('http://antiprism.eu'); // incl language?
    var title = encodeURIComponent('AntiPRISM.eu');
    var text = encodeURIComponent('Europe must act now on #PRISM and #Tempora! Here are six essential steps to defend our liberties:');
    var longText = encodeURIComponent('1. Protect whistleblowers. / 2. Uncover the facts. / 3. Strengthen European data protection / 4. Spearhead an international Treaty on the Freedom of the Internet / 5. Fund privacy-conscious software / 6. Prevent a European PRISM');
    var icon = encodeURIComponent('http://antiprism.eu/logo.png');

    var twitterAccount = 'ppinternational';
    var twitterAccountDesc = encodeURIComponent('The International Pirate Parties');
    var twitterUrl = 'https://twitter.com/intent/tweet?original_referer='+url+'&related='+twitterAccount+'%3A'+twitterAccountDesc+'&text='+text+'&url='+url;

    var facebookAppID = 173403852835299;
    var facebookUrl = 'https://www.facebook.com/dialog/feed?link='+url+'&picture='+icon+'&name='+title+'&caption='+text+'&description='+longText+'&e2e=%7B%7D&app_id='+facebookAppID+'&locale=en_US&sdk=joey&display=popup&next='+url;

    document.getElementById('twitter').href = twitterUrl;
    document.getElementById('facebook').href = facebookUrl;

    var lis = document.getElementById('supporters').getElementsByTagName('li');
    for (var li in lis) {
      if (lis[li].addEventListener) {
        lis[li].addEventListener("mouseover", function() {
          var img = this.firstChild.firstChild;
          if (!img._origSrc) img._origSrc = img.src;
          img.src = img.src.replace(/\.(png|jpg)$/, '-color.$1');
          img.addEventListener("error", function() {
            img.src = img._origSrc;
          });
        }, false);
        lis[li].addEventListener("mouseout", function() {
          var img = this.firstChild.firstChild;
          img.src = img._origSrc;
        }, false);
      }
    }
  </script>

  </body>
</html>
