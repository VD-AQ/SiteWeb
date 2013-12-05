<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="AlgoQuest System" />
  <meta name="description" content="" />
<title>AlgoQuest System | Technologie</title>

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
                <h1>AlgoQuest : Technologie</h1>
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
                  <li class="big2"><a href="caracteristiques.php">Caractéristiques</a></li><br/>
                  <li class="big2"><a href="outilbi.php">Solution</a></li><br/>
                  <li class="big2"><a href="techno.php">Avis d'expert</a></li><br/>
                  <li class="big2"><a href="utilisation.php">Notice d'utilisation</a></li>
              
                </div>
            </div>
            
            <div id="content-right">
            
            	
                
                 <!-- begin of sidebar -->
            	<div class="sidebar">
                <h3>Les avantages d'AlgoQuest</h3>
                <img src="images/adv-icon1.gif" alt="" class="imgleft" />
                <strong>Des résultats améliorés</strong><p>Un outil non statistique, aucun résultat n'est oublié.</p>
                <img src="images/adv-icon2.gif" alt="" class="imgleft" />
                <strong>Une rapidité hors du commun</strong><p>Accélérez considérablement le traitement de vos bases de données.</p>
                <img src="images/adv-icon3.gif" alt="" class="imgleft" />
                <strong>Evitez des investissements inutiles</strong><p>Grâce au système AlgoQuest, bien plus léger que les systèmes actuels, vous réduisez considérablement vos besoins matériels.</p>
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
