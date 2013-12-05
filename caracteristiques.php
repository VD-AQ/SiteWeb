<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
<title>AlgoQuest System | Caracteristiques</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>    
	<link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript"> 
	   DD_belatedPNG.fix('img'); 
       DD_belatedPNG.fix('ul.list-bottom li');
       DD_belatedPNG.fix('#footer-content, .dot-separator');
       DD_belatedPNG.fix('blockquote');       
	</script>    
<![endif]-->
<!--[if IE 7]>    
	<style type="text/css">
    .maincontent{padding:0px 0px 60px 0px;}
    #content-fullwidth{padding-bottom:15px;}
    </style>
<![endif]-->

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript">
            Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('h6') ('.more-button') ('ul.navigation',{hover:true});
</script>  

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27961555-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

  <!-- google analytics -->
  <?php include_once("analyticstracking.php") ?>

	<div id="container">
    
    	<!-- BEGIN OF HEADER -->
    	<div id="top-container-inner">
        
        	<!-- begin of logo and mainmenu -->
        	<div id="header">
            	<div id="logo"><a href="/"><img src="images/client-logo-new.jpg" alt="" /></a></div>
            	<div id="lang-container" style="text-align:right">
            		<a href="/" ><img src="/images/lang-fr_on.jpg" style="position: relative;top: 3px;" /></a> | <a href="/en/"><img src="/images/lang-en_off.jpg" style="position: relative;top: 3px;" /></a>
            	</div>
            	<div class="accroche">La première solution  d'accélération des Bases de Données Relationnelles sous forme inverse complète</div>
                <div id="mainmenu">
                    <?php include('menu.php'); ?>
                </div>            
            </div>
            <!-- end of logo and mainmenu -->    
                    
        </div>
        <!-- END OF HEADER -->
        
        <!-- BEGIN OF PAGE TITLE -->
        <div id="page-title">
        	<div id="page-title-inner">
                <div class="title">
                <h1>Caractéristiques</h1>
                </div>
                <div class="dot-separator-title"></div>
                <div class="description">
                <p>La première solution  d'accélération des Bases de Données Relationnelles sous forme inverse complète</p>
                </div>
            </div>   	            
        </div>
        <!-- END OF PAGE TITLE --> 
        
        <!-- BEGIN OF CONTENT -->
        <div id="content">
        
        	<div id="content-fullwidth">          
                
<div class="maincontent">
                

<h4>Une technologie innovante</h4>

<p class="indent">L’accélérateur repose sur une <strong>approche alternative des problèmes combinatoires</strong> : grâce à une représentation des données sous forme de graphes (arcs et sommets par opposition à lignes et colonnes) et à une suite d’algorithmes, le traitement des informations ne nécessite :
<li>Ni indexation</li>
<li>Ni cubes</li>
<li>Ni autre table intermédiaire</li>
<li>La lecture du graphe après propagation des contraintes permet de construire les réponses sans déployer les jointures de tables nécessaires dans une approche traditionnelle.</li></p>

<h4>Un outil extrêmement puissant</h4>
<p class="indent">La représentation des données sous forme de graphes permet de <strong>diviser les temps de traitements / calculs de façon extrêmement significative</strong> (de 1 à plusieurs ordres de grandeur) par comparaison aux meilleures bases de données du marché.</p>
<p class="indent">Les temps de traitement sont <strong>très peu sensibles à l’aspect combinatoire des requêtes</strong>.</p>
<p class="indent">Plusieurs requêtes peuvent être lancées simultanément <strong>sans ralentissement du traitement</strong>.</p>

<h4>Une avance technologique importante</h4>
<p class="indent">Des <strong>délais de chargement réduits</strong> (les données sont lues et chargées une seule fois quelques soient les jointures à venir dans les requête)</p>
<p class="indent">Des <strong>modalités d’utilisation simplifiées</strong> (pas de tuning des requêtes nécessaires à l’optimisation des traitements, pas de partitionnement des tables quelques soient les volumes, etc.)</p>
<p class="indent">Une <strong>vitesse de traitement améliorée</strong> et <strong>stable dans 100% des cas</strong> et <strong>quelle que soit la configuration</strong></p>
<p class="indent">Un <strong>stockage des fichiers sans préparation particulière</strong> (pas de volume de stockage à réserver et/ou à déclarer en préalable au chargement)</p>

<h4 id="nonintrusif">Une technologie non intrusive garantissant l’intégrité des données</h4>
<p class="indent">Aucune des opérations nécessaires à la collecte, à la préparation, au traitement des données, au requetage et à la lecture de la réponse ne nécessite d’intervention sur la base de données du client.</p>
<p>La technologie dispose :
<li>d’un ETL (Extract Transform and Load) qui permet l’export des tables de la base sur un support externe, et leur chargement dans un ensemble de fichiers aux formats propriétaires</li>
<li>d’un outil d’interrogation au format SQL à partir duquel il exécute les requêtes.</li>
<li>d’un moteur pour exécuter la requête.</li>
<li>d’un afficheur qui construit la réponse dans un fichier au format CSV (lisible dans un tableur par exemple).</li></p>
<p class="indent"><strong>Le format des résultats est standard</strong> et la lecture de la réponse peut donc se faire aussi bien dans l’outil de requetage qu’à l’aide d’un traitement de texte ou d’un tableur.</p>


<h4>Une technologie évolutive</h4>
<p class="indent">La technologie est évolutive par la <strong>création de fonctions spécifiques</strong> découlant de la <strong>mise en œuvre de requêtes jusqu’alors inenvisageables</strong> (mise en facteur automatique des lignes réponses identiques par exemple).</p>

<h4>Une technologie aboutie et testée</h4>
<p class="indent">De nombreux tests ont été pratiqués avec des résultats probants sur des bases de données de tailles différentes (1 Giga à 1 Téra  de données).</p>

<h4>Un besoin en ressources matérielles limité</h4>
<p class="indent">La mise en œuvre de ce nouveau type d’algorithmes induit une utilisation optimale des ressources, avec pour conséquence la réduction importante des besoins matériels, aussi bien en calculs qu’en stockages.
<li>Préconisation standard : un serveur bi-processeurs bi-coeurs INTEL, RAM 8 Giga, Disque 1 Tera-Octet, sous Windows, Linux ou Mac Os.</li></p>

              
                
                
                </div>
            </div>            
                  
        </div>
        
        
        
        
        
        
        
        <!-- END OF CONTENT -->
        
        <?php include('footer.php'); ?>
    	
    </div>
</body>
</html>
