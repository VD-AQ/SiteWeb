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
                
			 
			 
				
<h1>Définitions complémentaires :</h1>

<h3>ETL :</h3> 
<p>Cet outil permet de charger les structures des tables et des champs qui composent la base de données. A la différence des autres ETL, il ne chargera pas le schéma de la base, cette notion étant inutile pour le moteur.</p>

<h3>Engine :</h3> 
<p>Le moteur est composé d’une suite de fonctions qui s’appuient toutes sur une représentation inverse complète de la base de données. Les conséquences principales sont : un besoin en mémoire réduit et contrôlé, des jointures modifiables à la volée sans conséquence pour les délais de calculs et des délais de calculs très faibles, car ne dépendant plus du produit des tailles des tables comme c’est le cas avec tous les autres moteurs de SGBDR et les outils de S.B.A. ( Search Based Application).</p>

<h3>Display :</h3> 
<p>L’afficheur contient une fonction qui réduit l’affichage en ne répétant pas une même ligne-réponse mais en indiquant, automatiquement, le nombre de fois où cette ligne apparaît dans la réponse totale. Cette compression naturelle est très utile dans le cas où une réponse contient peu de lignes différentes mais se répétant un grand nombre de fois. Les modes d’affichage traditionnels ( ALL et DISTINCT) sont aussi disponibles.</p>




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
