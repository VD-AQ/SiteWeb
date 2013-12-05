<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
<title>AlgoQuest System | Licences</title>

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
                <h1>AlgoQuest : Licences</h1>
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
                
                <h4>Une technologie de rupture : le moteur AlgoQuest manipule des paquets</h4>
                <img src="images/numerique.jpg" alt="" class="imgleft border" />
                <p>Un paquet est un ensemble d'au maximum 1.000.000 de rangs (lignes) d'une même colonne appartenant à une table. </p>
                <p>Les outils de chargement AlgoQuest découpent chaque colonne de chaque table en paquet.</p>
                <p>Le paquet est pour le moteur AlgoQuest l'unité de découpage ultime de la base de données, à partir de laquelle il fait tous les calculs.</p>
                <p>La technologie AlgoQuest n'est pas Orientée Lignes et n'est pas non plus Orientée Colonnes. C'est cette particularité qui explique le niveau de performance de la solution AlgoQuest.</p>

                <hr class="content-line" />
                <h4>Rapport Paquets/Volume</h4>  
                <p>En moyenne, il faut 100 paquets pour stoker un Giga-Octet de données.</p>                              
                
                <hr class="content-line" />
                <img src="images/monde.jpg" alt="" class="imgright border" />
                <h4>Principe de tarification</h4>                
                <p> La tarification AlgoQuest System est basée sur trois éléments : </p> 

				<p><li>Le nombre de droits à  paquets</li>
				<li>Le nombre d'utilisateurs simultanés</li>
				<li>Le nombre de requêtes </li></p>
                
                <p>La licence de base contient les droits pour 100 paquets, 1 utilisateur et 100 requêtes.<br/><br/>La tranche suivante de droits à paquets contient 100 droits.<br/>La tranche suivante d'utilisateurs simultanés contient 10 utilisateurs.<br/>La tranche suivante de requêtes contient 100 requêtes.<br/></p>

                <p> Le coût de chaque élément composant le prix est décroissant. </p> 
 
                <hr class="content-line" />
                <img src="images/Planet.jpg" alt="" class="imgleft border" />
                <h4>Principe de facturation</h4>                
                <p>La facturation ne prend en compte que les droits effectivement consommés. </p> 
                <p>Les droits acquis et non consommés dans l'année ouvrent droit à un remboursement basé sur le prix des derniers droits facturés.</p>
                
                <hr class="content-line" />
                <h4>Offre no-limit</h4>
                <p>Pour le lancement et pendant une période d'un an, vous pourrez utiliser AlgoQuest quelque soit votre nombre de requêtes, et quelque soit le nombre d'utilisateurs !</p>
                </div>
            </div>            
                  
        </div>
        <!-- END OF CONTENT -->
        
        <?php include('footer.php'); ?>
    	
    </div>
</body>
</html>
