<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
<title>AlgoQuest System | Presentation</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->


<link href="css/style2.css" rel="stylesheet" type="text/css" />


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
                <h1>AlgoQuest</h1>
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
                
			 
			 
				
				<h1>Présentation AlgoQuest : Quelques considérations techniques</h1><br/>
<p>Algoquest est le seul moteur de bases de données relationnelles fondé sur une algèbre relationnelle inverse complète. Il en résulte les conséquences pratiques suivantes :</p>
<br/>
<h3>I - Pas de schéma :</h3>
<p>Il n’est pas nécessaire de définir un schéma préalable à tout traitement.<br/>
Il existe des versions de SGBDR qui n’utilisent pas de schéma, mais leur particularité est de construire les index des tables concernées par la requête à la volée, puis d’exécuter la requête.<br/>
Ce n’est pas le cas du moteur AlgoQuest, nous utilisons directement les données telles qu’elles ont été préparées par notre outil de chargement, sans aucun traitement supplémentaire des données.<br/>
Les jointures sont définies dans les requêtes et sont calculées directement, sans aucun préalable.<br/>
L’absence de schéma, sans opération préalable à l’exécution des requêtes, signifie également que tout champ est une colonne de jointure potentielle ; il en va de même pour les groupes de champs.<br/>
Cela signifie aussi qu’utiliser un ou plusieurs champs comme colonne de jointure entre deux tables n’a aucune incidence pour notre moteur (aucun coût caché d’exécution).<br/>
De plus, il n'est pas nécessaire de réserver de l'espace disque pour stocker les fichiers construits par l'ETL. Seul l'espace disponible sur disque, où qu'il se trouve, est important.</p>
<br/><br/>

<h3>II - Les changements sur les principales étapes d’un calcul :</h3>


<h4>A) Chargement et stockage des données :</h5>
<h5>a) Absence de schéma</h5>
<p>L’absence de schéma signifie immédiatement qu’il n’y a pas de préparation particulière sur les données (tous les champs sont potentiellement des champs de jointure).<br/>
Le traitement de chaque champ de chaque table sera rigoureusement le même.<br/>
Le système découpe chaque champ de chaque table en paquet d’un million de lignes maximum.<br/>
Chaque paquet, quelle que soit la nature du champ (texte, entier, flottant, entier long etc.. ) sera stocké dans un ensemble de 8 fichiers binaires.<br/>
Chaque paquet est chargé de façon autonome, il n’y a aucun ordre de chargement particulier, et chaque paquet n’est calculé qu’une seule fois pour permettre son utilisation dans les requêtes à venir. Dès qu’un paquet est chargé il est immédiatement requérable, il n’y a aucune opération complémentaire.<br/>
<br/>
<strong>Cette caractéristique a trois conséquences pratiques immédiates :</strong>
<ul>
	<li><strong>1 - </strong>Il est possible, très facilement de paralléliser le chargement, les paquets étant indépendants les uns des autres au chargement.</li><br/>

	<li><strong>2 - </strong>Le chargement est linéaire : les paquets sont manipulés un nombre constant de fois (deux fois pour être précis), sans aucune considération pour les autres paquets appartenant aussi bien à la même colonne, qu’à la même table ou à la même base de données.</li><br/>

	<li><strong>3 - </strong>Les mises à jour sont aussi linéaires (pour la même raison que le chargement). Dans le cas où un paquet a été chargé partiellement (moins d’un million de lignes), le système remplira les fichiers du paquet à concurrence d’un maximum d’un million de lignes puis passera au paquet suivant, exactement comme pour une opération de chargement classique.</li>
</ul></p>

<h5>b) Chargement et mise à jour ; Modification de la base : Ajout et retrait de tables</h5>
<p>Pour ajouter des tables dans la base de données, il suffit de déclarer les tables puis de les charger. L’indépendance de chargement des paquets libère l’utilisateur de tout problème lié à la modification du schéma (il n’y a pas de schéma) ou de dénormalisation des bases.</p>

<h5>c) Ajout et/ou retrait de colonne dans les tables :</h5>
<p>De même que pour l'ajout et le retrait de table, l'indépendance de chargement des paquets libère l'utilisateur de tout problème lié à la modification du schéma (il n’y a pas de schéma) ou de dénormalisation des bases.</p>
<br/>

<h4>B) Calculs et Requêtage</h4>
<h5>a) Calculs : besoin en mémoire réduit.</h5>
<p>Le calculateur manipule des paquets. Plus précisément, le calculateur manipule un paquet à la fois. Cette particularité permet de calculer avec un besoin mémoire contrôlé : la taille mémoire nécessaire pour un paquet.<br/>
Quelque soit sa nature, un paquet nécessite 300 mega-octets de mémoire vive pour être calculable. Il est donc possible d’exécuter des calculs sur un nombre quelconque de paquets en disposant de 300 mega-octets de mémoire vive.<br/>
La conséquence immédiate est qu’il est possible d’exécuter une requête en disposant de 300 mega de ram pour le moteur.<br/>
Mais le moteur n’est pas le seul consommateur de mémoire, l’afficheur a ses besoins propres (Cf infra : Affichage).</p>

<h5>b) Traitement des requêtes : vitesse de traitement</h5>
<p>Les paquets sont manipulés un nombre constant de fois par le moteur, quelque soit le nombre de paquets, le type de jointure et le nombre de tables utilisées dans une requête.<br/>
Cette constance permet d’une part une très grande rapidité d’exécution, d’autre part de prédire les délais nécessaires pour les calculs en comptant simplement le nombre de paquets manipulés dans une requête et enfin elle réduit mécaniquement les besoins matériels liés à la manipulation de grandes bases de données.</p>


<br/>

<h4>C) AFFICHAGE :</h4>
<p>L’afficheur, qui intervient dans la phase des calculs après le moteur, a des besoins mémoire qui sont directement liés au nombre de lignes  différentes qui composent la réponse.<br/>
Chaque ligne en affichante est codée dans une chaine de 60 caractères (quelque soit le nombre de champs qui composent cette réponse).<br/>
Si la réponse comporte plusieurs milliers de lignes différentes (indépendamment du nombre d’occurrences de chaque ligne), alors les besoins mémoire de l’afficheur sont négligeables, par contre si la réponse comporte plusieurs millions de lignes différentes (toujours indépendamment du nombre d’occurences de chaque ligne) alors les besoins mémoire augmentent linéairement suivant le nombre de lignes différentes.<br/>
<br/>
<strong>Il existe trois formes d’affichage des réponses :</strong>
<ul>
	<li>Deux formes classiques  : ALL et DISTINCT</li>
	<li>Une forme compressée : FACTOR</li>
</ul></p>
<p>Ce mode d’affichage, implicite sur nos outils, évite la redondance des lignes identiques en n’affichant chaque ligne qu'une seule fois (comme le DISTINCT) mais en précisant en fin de ligne le nombre d’occurrences de la ligne (comme si on avait placé un COUNT en fin de chaque ligne).<br/>
Ce mode d’affichage est beaucoup plus facile à manipuler et/ou stocker sur un support quelconque.</p>



<br/><br/>
<center><input type="button" value="Revenir à la page précédente" onClick="window.close()"></center>


 
				
				


                
                
                </div>
            </div>            
                  
        </div>
        
        
        
        
        
        
        
        <!-- END OF CONTENT -->
        
        <!-- BEGIN OF FOOTER -->
        <div id="bottom-container">
        	<div id="footer-content">
            
            	<!-- begin of footer-address --> 
            	<div id="footer-address">
                <h3>AlgoQuest System</h3>
                <p>Email : <a href="#">contact@algoquest.com</a></p>
                </div>
                <!-- end of footer-address -->
                
                <!-- begin of company-news -->
               
                <!-- end of company-news -->
                
                <!-- begin of footer-menu and copyright -->
                   
                <!-- end of footer-menu and copyright -->
                            
            </div>
        </div>
        <!-- END OF FOOTER -->

    	
    </div>
</body>
</html>
