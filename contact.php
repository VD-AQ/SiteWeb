<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
<title>AlgoQuest System | Contact</title>

<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]>    
	<link href="css/ie6.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript"> 
	   DD_belatedPNG.fix('img'); 
       DD_belatedPNG.fix('ul.list-bottom li, .contact-separator');
       DD_belatedPNG.fix('#footer-content, .dot-separator');
       DD_belatedPNG.fix('blockquote');         
	</script>   
<![endif]-->
<!--[if IE 7]>    
	<style type="text/css">
    .maincontent{padding:0px 0px 60px 0px;}
    .input-submit{float:left; margin-left:323px;}
    </style>
<![endif]-->
<!--[if IE 8]>    
	<style type="text/css">
    .input-submit{float:left; margin-left:323px;}
    </style>
<![endif]-->
<style type='text/css' media='screen,projection'>
<!--
fieldset { border:0;margin:0;padding:0; }
label {  padding-right:15px; float:left; min-width:70px; max-width: 70px;}
form p { clear:both;}
-->
</style>

<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/verifForm.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script type="text/javascript">
    $('.map').corner("8px");
</script>
<script type="text/javascript" src="js/fade.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){				
		$(".google-map").colorbox({iframe:true, innerWidth:600, innerHeight:400});				
	});
</script>
<script type="text/javascript" src="js/functionAddEvent.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/xmlHttp.js"></script>
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
                <h1>AlgoQuest : Contact</h1>
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
            <div class="front-box-content-3">
            	<p><br/><br/><br/><br/></p>
            	<center><p><font size="5"><em>"Il est plus facile de désintégrer un atome qu'un préjugé"</em>.</font></p></center>
            	<p align="right" class="decalage"><strong>Einstein</strong></p>
            </div>
			
			 <div class="maincontent">
			 	<h3>Pour nous contacter :</h3>
				<form method="post" action="scripts/form-contact.php" id="contactFormArea" name="contactFormArea" onSubmit="return verifFormContact();" >
					<fieldset id="erreur-container" style="display:none;" >
						<h6>Erreurs du formulaire</h6>
					</fieldset>
					<fieldset>
						<h6>Informations</h6>
						<p>
							<label>Titre*</label>
							<select class="select required" id="form-contact-civilite" required="required" name="form-contact-civilite">
								<option value="Monsieur">Monsieur</option>
								<option value="Madame">Madame</option>
								<option value="Mademoiselle">Mademoiselle</option>
							</select> 
						</p>
						<p>
							<label>Nom*</label>
							<input type="text"  class="input required" id="form-contact-nom" required="required" name="form-contact-nom" />
						</p>
						<p>
							<label>Prénom* </label>
							<input type="text" class="input required" id="form-contact-prenom" required="required" name="form-contact-prenom"/>
						</p>
						<p>
							<label>Courriel*</label>
							<input type="email"  class="input email required" placeholder="email@domain.fr"  id="form-contact-email" required="required" name="form-contact-email" />
						</p>
						<p>
							<label>Fonction</label>
							<input type="text" class="input"  id="form-contact-fonction" name="form-contact-fonction"/><span class="italic">(facultatif)</span>
						</p>
						<p>
							<label>Société</label>
							<input type="text" class="input"  id="form-contact-societe" name="form-contact-societe"/><span class="italic">(facultatif)</span>
						</p>
						<p>
							<label>Téléphone</label>
							<input type="text" class="input"  id="form-contact-telephone" name="form-contact-telephone" /><span class="italic">(facultatif)</span>
						</p>
					</fieldset>
					
					<fieldset>
						<p>
							<label style="float:right; width:330px !important; max-width:350px !important; ">Je souhaite être contacté pour avoir de plus amples informations.</label>
							<input style="margin-left: 144px;" type="checkbox" name="form-contact-infos" id="form-contact-infos" />
							<br/>
						</p>
						<p>
							<label style="float:right; width:330px !important; max-width:350px !important; ">Je souhaite une démonstration.</label>
							<input style="margin-left: 144px;" type="checkbox" name="form-contact-demo" id="form-contact-demo" />
							<br/>
						</p>
						<p>
							<label style="float:right; width:330px !important; max-width:350px !important; ">Autre.</label>
							<input style="margin-left: 144px;" type="checkbox" name="form-contact-autre" id="form-contact-autre" />
							<br/>
						</p>
						<p>
							<label>Message facultatif : </label>
							<textarea class="textarea" id="form-contact-message" name="form-contact-message" ></textarea>
						</p>
					</fieldset>
					
					<fieldset>
						<p>
							<input type="submit" class="input-submit" id="form-contact-submit" name="form-contact-submit"  value="" />
						</p>
					</fieldset>
				</form>
				
			</div>
                  
        </div>
        <!-- END OF CONTENT -->
        
        <?php include('footer.php'); ?>
    	
    </div>
</body>
</html>
