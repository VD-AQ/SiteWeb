<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="AlgoQuest System" />
  <meta name="description" content="" />
<title>AlgoQuest System | Un avis d'expert</title>

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
    </style>
<![endif]-->

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script type="text/javascript">
    $('.box-bq').corner("8px");
</script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript">
            Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('h6') ('ul.navigation',{hover:true});
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
                <h1>AlgoQuest : avis d'expert</h1>
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
        
        	<div id="content-left">          
                <div class="maincontent">
                  
              
<h1 id="invention">Invention tardive</h1>
<p class="indent">La technologie implémentée dans le logiciel développé par AlgoQuest est ce que les experts appellent une "forme inverse" de base de données relationnelle.<br/>
Cette représentation est connue depuis l'invention des systèmes de gestion de bases de données relationnelles pour être la plus performante pour l'exécution de l'instruction SELECT, mais elle est tombée dans l'oubli car personne n'avait su réaliser toutes les opérations de l'algèbre relationnelle sous cette forme inverse, jusqu'à ce qu'AlgoQuest résolve ce défi en inventant l'algorithme qui manquait, la jointure.</p>

<h1 id=performances>Gain de performances étonnant</h1>
<p class="indent">Il n'est donc pas étonnant que cet algorithme dont l'invention a été si tardive soit particulièrement compliqué, mais il est très surprenant qu'il soit si performant.<br/>
En effet, alors que les meilleurs algorithmes de jointure sur forme directe ont une complexité en n², où n est le nombre d'enregistrements des tables, l'algorithme de jointure sur forme inverse implémenté par Algoquest a une complexité en p.log(p) , où p est le nombre de valeurs distinctes, toujours inférieur à n.<br/>
Dans de nombreuses applications, p est même d'un ordre de grandeur inférieur à n, ce qui accroît encore le gain de performances par rapport à une jointure conventionnelle.<br/>
La forme inverse développée par AlgoQuest est donc beaucoup plus performante que la forme droite pour les deux opérations de l'algèbre relationnelle qui sont les fondements de la recherche de données, SELECT et JOIN, mais également pour PROJECT.<br/>
Seule la quatrième et dernière opération, INSERT, est plus complexe que dans la forme droite, mais sa complexité reste du même ordre que lorsqu'elle est exécutée sur un champ indexé dans une forme directe de base relationnelle.</p>

<h1 id="proprietes">Principales propriétés</h1>
<p class="indent">La représentation développée par AlgoQuest est portable et peut être copiée d'une machine physique à une autre sans nécessiter de reconstruction d'index. Elle est également particulièrement adaptée à une gestion de la base de données en mémoire. La base de données peut être répartie sur plusieurs disques et les algorithmes de gestion sont parallélisables.
<br/>La forme inverse peut être intégrée dans une architecture distribuée synchrone ou asynchrone, transactionnelle ou décisionnelle. 
<br/>Le contrôle d'accès peut être géré au niveau des transactions mais pas au niveau des données. 
<br/>Le principal inconvénient de toute forme inverse est que la structure de données n'est pas lisible sans les logiciels adéquats, ce qui exclut son utilisation lorsque des utilisateurs veulent accéder directement aux fichiers de la base.</p>

<h1 id="oeuvre">Mise en oeuvre</h1>
<p class="indent">La forme inverse peut être mise en oeuvre selon trois modalités :
<li>Comme base de données autonome stockée sur disque, ce qui correspond à l’implémentation actuelle réalisée par AlgoQuest,</li>
<li>Comme base de données autonome en mémoire,</li>
<li>En complément avec une base de données en forme directe, pour accélérer les consultations, comme pour un "datawarehouse".</li></p>
<p>L'utilisation de forme inverse construite dynamiquement pour les besoins d'une requête comportant une ou plusieurs jointures peut même être utile dans les applications où le nombre de valeurs p est très inférieur au nombre d'enregistrements n, malgré la charge de conversion de forme directe en forme inverse.</p>

<h1 id="avantages">Autres avantages</h1>
<p class="indent">L'intérêt de la représentation développée par AlgoQuest dépasse l'amélioration des performances: 
<li>Elle permet d'éviter la dénormalisation des bases de données qui est une étape délicate des projets mettant en oeuvre des projets de bases de données relationnelles et nuit à la maintenabilité des systèmes. </li>
<li>Il est possible de définir des vues persistantes de la base sans duplication de données</li>
<li>Il est également facile de gérer des types de données étendus, de construire ces types dynamiquement tout en étendant les opérations relationnelles aux types étendus, ce qui offre des possibilités nouvelles de couplage d'une base de données relationnelle avec les environnements de programmation modernes.</li></p>
<p></p>
<h4>Pierre MOLLER: normalien, ancien dirigeant des bases de données objets MATISSE</h4>
                </div>
            </div>
            
            <div id="content-right">
            
            	<!-- begin of sidebar -->
            	<div class="sidebar">
                <h3>En savoir plus sur AlgoQuest</h3>
                <h6>Avis d'un expert</h6>
                <ul class="sidebar-list">
					<li><a href="techno.php#invention">Invention tardive</a></li>
					<li><a href="techno.php#performances">Performances</a></li>
					<li><a href="techno.php#proprietes">Propriétés</a></li>
					<li><a href="techno.php#oeuvre">Mise en oeuvre</a></li>
					<li><a href="techno.php#avantages">Autres avantages</a></li>
				</ul>
				<h6>Solution</h6>
				<ul class="sidebar-list">
                    <li><a href="outilbi.php#produit">Produit</a></li>
                    <li><a href="outilbi.php#specificites">Spécificités techniques</a></li>
                    <li><a href="outilbi.php#domaines">Domaines d'application</a></li>
                </ul>
                </div>
                <div class="sidebar-bottom"></div>
                <!-- end of sidebar -->
                
                  <!-- begin of sidebar -->
            	<div class="sidebar">
                <h3>Les avantages d'AlgoQuest</h3>
                <img src="images/adv-icon1.gif" alt="" class="imgleft" />
                <strong>Des résultats améliorés</strong><p>Un outil non statistique, aucun résultat n'est oublié.</p>
                <img src="images/adv-icon2.gif" alt="" class="imgleft" />
                <strong>Une rapidité hors du commun</strong><p>Accélérez considérablement le traitement de vos bases de données.</p>
                <img src="images/adv-icon3.gif" alt="" class="imgleft" />
                <strong>Evitez des investissements inutiles</strong><p>Grâce au système AlgoQuest, bien plus léger que les systèmes actuels, vous réduisez fortement vos besoins matériels.</p>
                </div>
                <div class="sidebar-bottom"></div>
                <!-- end of sidebar -->         
                
            </div>                
                  
        </div>
        <!-- END OF CONTENT -->
        
      <?php include('footer.php'); ?>

    	
    </div>
</body>
</html>
