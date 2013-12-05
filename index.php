<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="AlgoQuest System" />
  <meta name="description" content="La première solution d'accélération des Bases de Données Relationnelle sous forme inverse complète" />
<title>AlgoQuest System</title>


<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>    
	<link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript"> 
	   DD_belatedPNG.fix('img'); 
       DD_belatedPNG.fix('#pager-alt a, ul.list-bottom li');
       DD_belatedPNG.fix('#footer-content, .dot-separator');
       DD_belatedPNG.fix('blockquote');   
	</script>    
<![endif]-->
<!--[if IE 7]>    
	<style type="text/css">
    #pager-alt{top:260px;}
    #slideshow ul, #slideshow li{margin:12px 0px 0px 6px;}
    #content .front-box-content{padding-bottom:45px;}
    .slide-more{padding:10px 20px 0px 20px;}
    </style>
<![endif]-->
<!--[if IE 8]>    
	<style type="text/css">
    #pager{top:260px;}
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
    $('#slideshow, .slide-more').corner("8px");
</script>
<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
   $(function(){     
         $('#slideshow ul').cycle({
            timeout: 8000,  // milliseconds between slide transitions (0 to disable auto advance)
            fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...            
            pager:   '#pager-alt',  // selector for element to use as pager container
            pause:   true,	  // true to enable "pause on hover"
            pauseOnPagerHover: true // true to pause when hovering over pager link
        });
     });
</script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript">
            Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('h6') ('.slide-more') ('.heading1-slide') ('.heading2-slide') ('ul.navigation',{hover:true});
</script>  

<!--
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
-->

</head>
<body>
  
  <!-- google analytics -->
  <?php include_once("analyticstracking.php") ?>

	<div id="container">
    
    	<!-- BEGIN OF HEADER -->
    	<div id="top-container">
        
        	<!-- begin of logo and mainmenu -->
        	<div id="header">
            	<div id="logo"><a href="/"><img src="images/client-logo-new.jpg" alt="" /></a></div>
            	<div id="lang-container" style="text-align:right">
            		<a href="/" ><img src="/images/lang-fr_on.jpg" style="position: relative;top: 3px;" /></a> | <a href="/en/"><img src="/images/lang-en_off.jpg" style="position: relative;top: 3px;" /></a>
            	</div>
            	<div class="accroche">La première solution  d'accélération des Bases de Données Relationnelles sous forme inverse complète !!!</div>
                <div id="mainmenu">
                    <?php include('menu.php'); ?>
                </div>            
            </div>
            <!-- end of logo and mainmenu -->
            
            <!-- begin of slideshow -->
            <div id="slideshow">
            	<ul>
   					<li><!-- slide 5 -->                   
                    <span class="slide-img">
                    	<img src="images/algoquest-performance.jpg" alt="" title="Accélérer vos performances" />
                    </span>  
                    <span class="slide-text">
                        <span class="heading1-slide">Et si vous accéleriez vos performances?</span>
                        <span class="heading2-slide"> </span>
						Donnez-nous 48 heures pour en faire la démonstration dans votre environnement ! 
                        <span class="slide-more"><a href="contact.php">Contactez-nous</a></span>
                    </span>           
                    </li>  
                    
                	<li><!-- slide 0 -->
                    <span class="slide-img">
                    	<img src="images/slide-alt1-1.jpg" alt=""  title="Dépassez vos limites de faisabilité"/>
                    </span>                    
                    <span class="slide-text">
                        <span class="heading1-slide">Dépassez vos limites de faisabilité</span>
                        <span class="heading2-slide">Grâce au système AlgoQuest</span>
                        La technologie de gestion de base de données développée par AlgoQuest permet non seulement d'accélérer  le traitement de vos requêtes, mais autorise également des requêtes jusque-là jugées impossibles.<br/>
                        <span class="slide-more"><a href="technologie.php">En apprendre plus</a></span>
                    </span>
                    </li>

					<li><!-- slide 1 -->
                    <span class="slide-img">
                    	<img src="images/world.jpg" alt=""  title="Votre sécurité"/>
                    </span>                    
                    <span class="slide-text">
                        <span class="heading1-slide">Votre sécurité</span>
                        <span class="heading2-slide">AlgoQuest : un simple accélérateur de base de données</span>
                        Notre technologie est non-intrusive. Vous ne réorganisez pas vos bases et vous ne changez rien à vos habitudes de travail. Si vous le souhaitez vous pouvez, à tout moment et sans délai, revenir à votre configuration antérieure.
						<span class="slide-more"><a href="outilbi.php#nonintrusif">En apprendre plus</a></span>
                    </span>
                    </li>
					
                    
                    <li><!-- slide 2 -->               
                    <span class="slide-img">
                    	<img src="images/slide-alt2-2.jpg" alt="" title="Préservez l'environnement sans concession" />
                    </span>  
                    <span class="slide-text">
                        <span class="heading1-slide">Préservez l'environnement sans concession</span>
                        <span class="heading2-slide">Et faites l'économie d'achats désormais inutiles</span>
                        Le système AlgoQuest est bien plus léger que ses concurrents actuels. Solutions matérielles réduites : vous économisez tout en agissant pour la sauvegarde de l'environnement.
                        <span class="slide-more"><a href="ecoresponsabilite.php">En apprendre plus</a></span>
                    </span>           
                    </li>
                    
                    <li><!-- slide 3 -->                   
                    <span class="slide-img">
                    	<img src="images/algoquest-memoire.jpg" alt=""  title="Vous avez un historique" />
                    </span>  
                    <span class="slide-text">
                        <span class="heading1-slide">Vous avez un historique</span>
                        <span class="heading2-slide">Ne le perdez pas</span>
                        Choisissez un système qui garantit les performances du futur sans vous obliger à faire table rase du passé. Continuez à utiliser vos données dans leur état actuel et ne changez pas votre façon de les requêter. Vous avez vos réponses bien plus rapidement, c'est tout.
                        <span class="slide-more"><a href="presentation.php">En apprendre plus</a></span>
                    </span>           
                    </li>    
    
                </ul> 
                <div id="pager-alt"></div>         
            </div>            
            <!-- end of slideshow -->
            
            <!-- begin of welcome-slogan -->
            <div id="slogan">
            </div>           
            <!-- end of welcome-slogan -->
                    
        </div>
        <!-- END OF HEADER -->
        
        <!-- BEGIN OF CONTENT -->
        <div id="content">

            <!-- begin of content column 2 -->    
            <div class="front-box-content-2">
	            <h3>Témoignages</h3>
	            <blockquote> <blockquote2>
	            <p>Il n'est pas étonnant que cet algorithme dont l'invention a été si tardive soit particulièrement compliqué, mais il est très surprenant qu'il soit si performant.</p>
	            </blockquote2></blockquote>
	            <p align="right"><strong>Pierre MOLLER</strong></p>
            </div>
            
            <div id="demonstration-container" class="slide-text">
            	<span class="heading1-slide">Démonstration</span>
            	<span class="heading2-slide" style="margin-bottom:8px;"></span>
            	<p>Testez AlgoQuest dans votre environnement en seulement 48 heures.</p>
            	
            	<span class="slide-more"><a href="contact.php">Contactez-nous</a></span>
            </div>
            <!-- end of content column 2 -->   

        </div>
        <!-- END OF CONTENT -->
        
        <!-- BEGIN OF FRONT-BOX -->
        <div id="mid-container">
        	<div id="front-box">
            	
               <!-- begin of front content 1 -->
                <div class="front-box-content">
                <h4>Construire votre futur</h4>
                <p>En optant pour la suite AlgoQuest, vous prenez un avantage concurrentiel décisif, et vous pouvez envisager sereinement votre futur.</p>
                </div>
                <!-- end of front content 1 -->
                
                <div class="dot-separator-content"></div>
                
                <!-- begin of front content 2 -->
                <div class="front-box-content">
                <h4>Améliorer vos performances</h4>
                <p>Grâce à AlgoQuest System, vous pouvez accéder à un champ des possibles aujourd'hui hors de portée.</p>
                </div>
                <!-- end of front content 2 -->
                
                <div class="dot-separator-content"></div>
                
                <!-- begin of front content 3 -->
                <div class="front-box-content">
                <h4>Un outil sécurisant</h4>
                <p>La suite AlgoQuest est non intrusive. A tout moment, et sans délai, vous pouvez revenir à votre configuration antérieure.</p>
                </div>
                <!-- end of front content 3 -->
                
            </div>        
        </div>
        <!-- END OF FRONT-BOX --> 
        

        
        <?php include('footer.php'); ?>
    	
    </div>
</body>
</html>
