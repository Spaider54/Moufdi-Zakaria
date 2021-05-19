<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <title>Information </title>
</head>
<body>
<h1>
    Infomation Envoyer 
</h1>    

    <?php


      echo "Informations Personnelles :<dl>
    <dt>
        Nom 
    </dt>
    <dd>".
 $_POST['nom']."
    </dd>    
    
        <dt>
        Prenom 
    </dt>
    <dd>".
$_POST['prenom']."
    </dd>    

<dt>
    Sex 
</dt>
<dd>".
$_POST['sex']."
</dd>

<dt>
Date de Naissance :
</dt>
<dd>".
$_POST['datene']."
</dd>

<dt>
Lieux de Naissannce
</dt>
<dd>".
$_POST['lieu_ne']."
</dd>
<dt>
   Nombre de frer et Sousre
</dt>
<dd>".
    $_POST['nbfr_sor']."
</dd>

<dt>
Adresse
</dt>

<dd>
    ".$_POST['adresse']."
</dd>

<dt>
Numero Telephone
</dt>
<dd>".
    $_POST['phone']."
</dd>

<dt>

Email 
</dt>
<dd>".
    $_POST['email']."
</dd>

</dl>";

/* Infomation Authontifuqation */
echo  "<h3>Info Authontifuqation</h3><dl>
    <dt>
        User name 
    </dt>
    <dd>".
    $_POST['username']."
    </dd>
    <dt>
        User Password 
    </dt>
    <dd>"
    .$_POST['password']."
    </dd>
</dl>";

/* Infomation Divers  */
echo "<h3>Divers</h3> <dl>
<dt>
 Centres d’intérêt
</dt>
<dd>";

if(isset($_POST['I1'])) echo $_POST['I1']." Lecteur <br/>";
if(isset($_POST['I2'])) echo "musique <br/>";
if(isset($_POST['I3'])) echo "Dessin <br/>";
if(isset($_POST['I4'])) echo "Cuisine <br/>";

echo "</dd>
<dt>
Colors 
</dt>
<dd>";
if(!empty($_POST['colors']))
{
$colors = $_POST['colors'];
foreach($colors as $color){
    echo "$color <br>";
}
}

echo "
</dd>
<dt>
La Color Prefer 
</dt>
<dd>".
$_POST['coloreanimz']."
</dd>
</dl>Colors :";



?>




<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
