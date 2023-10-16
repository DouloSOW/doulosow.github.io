
<?php require_once('cnxion.php');?>
<link rel="stylesheet"  type="text/css" href="css/mystyle.css">
<script src="TRAITEMENT_JS/036c985da2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/cartographie.css?v=1" />
<link rel="stylesheet" type="text/css" href="css/CoroView_style.css?v=1" />

<link rel="stylesheet" type="text/css" href="css/highslide22.css?v=1" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Additional files for the Highslide popup effect -->
	<script src="https://www.highcharts.com/media/com_demo/js/highslide-full.min.js"></script>
	<script src="https://www.highcharts.com/media/com_demo/js/highslide.config.js" charset="utf-8"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>

	<?php
include("head.php");
?>
    <script type="text/javascript">
		var url1="TRAITEMENT_PHP/graph10.php"
		var url2="TRAITEMENT_PHP/graph15.php"
		window.onload = function ()
		{
			function graph (url, id)
			{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById(id).innerHTML = this.responseText;
						evalueScripts(id);
					}
				};
				xmlhttp.open("POST", url, false);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send();
			}
			graph(url1, 'resultat1');
			graph(url2, 'resultat2');
		}
	
		function string2Array(string) {  
			eval("var result = " + decodeURI(string));  
			return result;  
		};
		
		function evalueScripts(targetId) {
		  var mesScripts = document.getElementById(targetId).getElementsByTagName("script");
		  for (var i=0; i<mesScripts.length; i++) {
				  eval(mesScripts[i].innerHTML);
		  }
		}
	
	</script>		
</head>
<img class="affiche" src="Images/guer.jpg">

	<form id="formulaire_sup" name="formulaire" enctype="multipart/form-data" method="post" action="" >
					<p class="noms">Tableau de bord des cas guéris <i class="fas fa-user-shield"></i></p>
	
		<fieldset>
		<legend> Cas guéris  <i class="fas fa-user-shield"></i></legend>
					<br />
					<div id="resultat" name="imge">
												<div id="container10" style="width:100%; height:400px;"> </div><br />
						<strong>Note</strong> : Vous pouvez cliquer n'importe où sur le graphique et tirer pour zoomer. Les points de données individuels peuvent aussi être selectionnés pour afficher plus d'informations. Cliquer sur le bouton d'en haut à droite pour télécharger le graphique.

						</div>	
					
		</fieldset>
		
	</form>
<form id="formulaire_sup" name="formulaire" enctype="multipart/form-data" method="post" action="" >
		
		<fieldset>
		<legend> Evolution <i class="fas fa-user-shield"></i> </legend>
					<br />
					<div id="resultat" name="imge">	
										<div id="container15" style="width:100%; height:400px;"> </div><br />
						<strong>Note</strong> : Vous pouvez cliquer n'importe où sur le graphique et tirer pour zoomer. Les points de données individuels peuvent aussi être selectionnés pour afficher plus d'informations. Cliquer sur le bouton d'en haut à droite pour télécharger le graphique.

					</div>	
					
		</fieldset>
		
</form>
<div id='resultat1'></div>
<div id='resultat2'></div>
<?php
include("foot.php");
?>
