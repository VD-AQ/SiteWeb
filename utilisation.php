<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
<title>AlgoQuest System | Notice d'utilisation</title>

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
                <h1>Notice d'utilisation</h1>
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
                
                
                
                <table width="1130" border="0" align="center">
  <tr bgcolor="#ffffff">
	<td width="1120" height="480" colspan="3" align="left" valign="top" bordercolor="#ECE9D8" bgcolor="#FFFFFF"><div>
        <p align="left" class="Style15"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0"><br>
        </p>
        <p align="center" class="Style17">AlgoQuest  Extract &amp; Request</p>
        <p>&nbsp;</p>
        <p class="Style18">Table of Content</p>
      <table width="1130" border="0">
          <tr>
            <td width="743"><p class="Style19"><strong>About this document </strong></p>
              <p><span class="Style19"><strong>AlgoQuest tools : Extract &amp;  Request</strong></span><strong>         </strong></p>
              <p><span class="Style19">I.          Extract </span><br>
                <span class="Style19">I.1.</span>       Step 1 - Request the original database <br>
                <span class="Style19">I.2.</span>       Step 2 - Dump the data into column-based  text files     <br>
                <span class="Style19">I.3.</span>       Step 1 and Step 2 merged       <br>
                <span class="Style19">I.4.</span>       Step 3 - Build the database graph in our  engine            <br>
              <span class="Style19">I.5.</span>        The extract application tool      </p>
             <p><span class="Style19">II.        Request  </span>         <br>
                <span class="Style19">II.2.</span>     Step  1 - Writing the query        <br>
                <span class="Style19">II.2.</span>     Step  2 - Parsing the query        <br>
                <span class="Style19">II.3.</span>     Step  3 - Executing the parsed query     <br>
                <span class="Style19">II.4.</span>     Step  4 - Retrieving the result    </p>
             <p><span class="Style19">III.       Software  description </span>   </p>
             <p><span class="Style19">Appendix A - Example for the extract process</span> <br>
                <span class="Style19">A.1.</span>     Step  1 - Request the original database <br>
                <span class="Style19">A.2.</span>     Step  2 - Dump the data into column-based text files</p>
             <p><span class="Style19">Appendix B - Exam ple for the request process</span>           <br>
                <span class="Style19">B.1.</span>     Step  1 - Writing the query        <br>
                <span class="Style19">B.2.</span>     Step  2 - Parsing the query        <br>
                <span class="Style19">B.3.</span>     Step  4 - Retrieving the result    </p>
             <p><span class="Style19">Appendix C - Results of our tests</span>        <br>
                <span class="Style19">C.1.</span>     Context            <br>
                <span class="Style19">C.2</span>.     Test  perimeter  <br>
                <span class="Style19">Extraction        <br>
              Request </span>          </p>
              <span class="Style19">C.3.     Results</span> </td>
            <td width="108" align="right"><p class="Style19">&nbsp;</p>
              </td>
            <td width="646" align="right"><p>&nbsp;</p>            </td>
          </tr>
        </table>
        <p><br clear="all">
        </p>
        <p class="Style19"><strong>About this  document</strong></p>
        <p>This  document presents the tools developed by AlgoQuest for accelerating database  processes.<br>
          Whereas it  won't get into the details of our engine speciÞcations, it will describe the  tools as are, as well as the ways they can be integrated. The engine being  continuously updated, optimized and completed, the content of this document is  subject to changes and only reßects the state of the tools when it has been  published.</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>AlgoQuest tools  : Extract &amp; Request</strong></p>
        <p>The  Algoquest suite for accelerating database processes is divided into two  components :</p>
        <p align="center">EXTRACT - REQUEST</p>
        <p>As you're  about to find out, this detailed document mainly shows how simple it is to  integrate our database accelerator engine within any existing software  architecture without being invasive, as it needs only the following inlets and  outlets : - connection to the database (input for extraction of the data :  standard DSN);<br>
          - queries  input (SQL queries for the request component);<br>
          - results  output (the result of the queries can be outputted to a file, a stream, etc.).<br>
          The  following diagram is a general representation of the whole extract &amp;  request workßow. Its content is described within the next pages.</p>
        <p>&nbsp;</p>
        <p align="center"><img src="images/tech_image.jpg" alt="" width="599" height="543"></p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>I. Extract</strong></p>
        <p>The Extract  component is the component that will retrieve all the data from the database(s)  and load them into our engine. Its functionalities are similar to an ETL  tool's. It's the only component of the suite that will actually connect to the  original database(s), and it will only request it (them). The Extract component  workßow can be divided into three parts :</p>
        <p>- request  the original database;<br>
          - dump the  data into column-based text files;<br>
          - build the  database graph in our engine.</p>
        <p>This  workßow can be easily integrated, as we demonstrate running a Java application  we developed that uses our engine. It should also be noted that the first two  steps can be executed as one, as we will see.</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>I.1. Step 1 -  Request the original database</strong></p>
        <p>This step  is the only step of the whole suite's workßow that actually needs access to the  original database. Its goal is to request every column from every table of the  original database(s). Since this operation is made entirely in SQL, our extract  component is ensured to be compliant with every relational DBMS supporting SQL  (such as Oracle, Sybase, Ms SQL Server, MySQL, DB2 etc.).</p>
        <p>The result  of this operation is :<br>
          - store the  structure of the database within a readable text file;<br>
          - store the  data of the database within CSV files (one file per table).</p>
        <p>It's  important to note that when we store the structure of the database, we do not  store the schema of the database, i.e. :</p>
        <p align="center"><strong>we do not store any  information of</strong><br>
            <strong>primary keys, indexes,  uniques, foreign keys and constraints.</strong></p>
        <p>The  information we store in the database structure description file:<br>
          - database name;<br>
          - number of tables within the database; - then,  for each table :<br>
          - table rank ( simple table order); - table  name;<br>
          - number of rows of the table;<br>
          - ranks, names and types of each column.</p>
        <p>The  information we store in the database tables CSV files is a CSV dump of all  tables (one file per table). The only limitation of this step is the limitation  of the operating system file system (for example, file size limits with FAT32).</p>
        <p><em>Note that if the first two steps are merged,  the CSV files won't be generated, since their sole use is to be the source of  the step 2 operation. (see Appendix A. 1 for an example)</em></p>
        <p>&nbsp;</p>
        <strong><br clear="all">
        </strong>
        <p class="Style19"><strong>I.2.    Step 2 - Dump the data into column-based  text files</strong></p>
        <p>This step  will format the CSV files (data extracted from the original database(s)) in an  optimized format for the database graph building. This format is quite simple :  each table data is divided into its columns; then, we store each column data in  files (1 million lines per file) in a text format (1 line of data per line of  file).</p>
        <p>The naming  convention for those file is the following :</p>
        <p>[BOO1] [T002] [C004] [P000000000000000008]<br>
          1st  database     2nd table          4t' column        8t' packet of a milion lines</p>
        <p>Since each  packet contains up to a million lines, that naming convention allows our engine  to handle up to a septillion lines per table (that's a million billion billion  lines, or 10^24 lines) over a thousand columns, over a thousand tables, over a  thousand database (that's actually up to 10^34 data cells).</p>
        <p>Let's  already emphasize the fact that all those conventions were <strong>fixed arbitrary</strong>, including the fact that a packet contains 1  million lines only; the only important point is that each packet share the same  maximum amount of lines :</p>
        <p align="center">BY DEFAULT, WE CAN STORE UP TO 10^24 LINES PER  TABLE<br>
          WE CAN INCREASE THIS MAXIMUM AMOUNT<br>
          WE HAVE NO LIMITATION OVER THE NUMBER OF TABLES  AND/OR DATABASES</p>
        <p>(see Appen  dix A.2 for an example)</p>
        <p><em>Note : a packet doesn't contain exactly 1  million lines, but 1 048 576 lines (2^20 lines).</em></p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>I.3.    Step 1 and Step 2 merged</strong></p>
        <p>The data  that we've processed so far is completely readable and hasn't been tranformed;  it has only been disposed in a particular manner. Therefore, all the former  operations can be executed in only one step, most likely directly in SQL (for  example, the use of the BCP utility with Ms SQL Server, or the use of SELECT...  INTO OUTFILE command in MySQL ensures the best performance for the operation, <strong>each data being read and written only once  during the process)</strong>.</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>I.4. Step 3 -  Build the database graph in our engine</strong></p>
        <p>This step  is executed by our engine. The operation consists in reading the files  generated so far and building the database graph using several complex  algorithms.<br>
          The result  of this process is the creation, for each text file that we had generated, of  eight binary files, named after the source text file (only the file extension  changes). Each set of eight files is called a packet; a packet represents one  million lines of one column of one table in the form of graphs. The content of  packets cannot be disclosed, since this process is highly secret; however, we  can expose several facts about the generation process :</p>
        <p align="center"><strong>EACH PACKET OF THE  DATABASE IS BUILT INDEPENDENTLY</strong></p>
        <p>from each  other (two packets can be generated over two processors in parallel)</p>
        <br clear="all">
        <p>Therefore :</p>
        <p align="center"><strong>EACH PACKET IS  INDEPENDENT</strong><br>
          in case of a packets loss, only the lost  packets are to be rebuilt<br>
  <strong>THE PROCESS IS  COMPLETELY LINEAR</strong><br>
          extract time is proportional to the database  size<br>
          extract time is inversely proportional to the  number of processors<br>
  <strong>THE PACKETS CAN BE  STORED ON DIFFERENT DISKS OVER DIFFERENT COMPUTERS</strong><br>
          our engine doesn't need disk spaces to be  allocated, it just needs disk space to store the files</p>
        <p>To  conclude, the tests we've executed so far shows that our extraction process is  about 30% faster than other existing ETL processes; moreover, since we do not  store any schema information, we do not indexate the extracted data; among  other things, it means that we're ready to request our engine <strong>as soon as</strong> the extraction process is  complete :</p>
        <p align="center"><strong>WHENEVER THE EXTRACT IS  COMPLETE</strong><br>
            <strong>WE'RE READY TO REQUEST  ANY COLUMN (OR GROUP OF COLUMNS) OF ANY TABLE</strong><br>
            <strong>WITH ANY JOIN BETWEEN  TABLES</strong></p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>I.5. The extract  application tool</strong></p>
        <p>We provide  a Java application that consists of a GUI driving the whole extraction process.  This application :<br>
          - is cross-platform (the GUI is JAVA, and the  engine consists of executable files, available for<br>
          Windows,  OS X and Unix); - is packaged in a self-installer program;</p>
        <ol>
          <li>contains  a configuration file ini.properties.</li>
          <li>&nbsp;</li>
        </ol>
        <p align="center"><strong>YOU ARE :</strong><br>
            <strong>A DOUBLE-CLICK AWAY  FROM INSTALLATION</strong><br>
            <strong>A DATABASE ADDRESS  (DSN) LINE FROM EXTRACTION</strong><br>
            <strong>MINUTES AWAY FROM REQU  ESTS</strong></p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>II. Request</strong></p>
        <p>The request  component will execute any SQL query and retrieve the result. Its process can  be divided into four parts :<br>
          -  writing the query;<br>
          - parsing the query;<br>
          - executing the parsed query;<br>
          - retrieving the result.</p>
        <p>The request  component obvioulsy needs an existing database graph (generated through the  extract component process).</p>
        <p>&nbsp;</p>
        <strong><br clear="all">
        </strong>
        <p class="Style19"><strong>II.2. Step 1 -  Writing the query</strong></p>
        <p>Our engine  is compliant with SQL 92; it supports : - fetch command (SELECT);<br>
          - agregation commands (COUNT, SUM, DISTINCT); -  Þlters (LIKE, IN, BETWEEN);<br>
          - boolean conditions (AND, OR, NOT);<br>
          - comparisons operators ( = , &gt; , &lt; ,  &gt;= , &lt;= ).<br>
          The  vocabulary supported by our engine is continuously being completed (at this  moment, the MIN, MAX and AVG operations are being fully tested), but is not  complete yet (at this moment, our engine doesn't handle, for example, CONCAT,  ISNULL, IF).<br>
          Our engine  doesn't need a schema; thus, queries can assume any join between any column(s)  of any table(s) - our engine supports single-column joins as well as  multi-column joins.</p>
        <p align="center"><strong>SCHEMALESS MEANS</strong><br>
            <strong>EVERY COLUMN (OR GROUP  OF COLUMNS) OF EVERY TABLES SEE</strong><br>
            <strong>EVERY COLUMN (OR GROUP  OF COLUMNS) OF EVERY TABLE</strong><br>
            <strong>NO INDEXATION NEEDED  AT ANY TIME</strong></p>
        <p>For  optimization reasons, at this moment, the joins must be declared in a  particular order in which the Þrst table of the last join must be the last  table of the next join; for example :</p>
        <p>table_2.column_a  = table_1.column_b AND table_3.column_c = table_2.column_d   is correct<br>
          table_2.column_a  = table_1.column_b AND table_2.column_d = table_3.column_c   is wrong</p>
        <p>(see  Appendix B.1  for an example) </p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>Step 2 - Parsing  the query</strong></p>
        <p>Our engine  can only process the queries in a particular form called Polish Notation (as  known as PreÞx Notation, as known as the Lukasiewicz Notation). Therefore we  use a tool (independent from the engine, and so completely integrable) to parse  the query and transform it in the preÞx notation.</p>
        <p>A query  like :<br>
          SELECT  table_1 .column_1, table_2.column_2 FROM table_1, table_2<br>
          would then  become :</p>
        <p>SELECT , .  table_1 column_1 . table_2 column_2 FROM , table_1 table_2<br>
          (see Appen  dix B.2 for an example)</p>
        <p>It is  important to notice that these operations (writing the query as well as parsing  it) can be done in a 3rd party application, or in any application that would  connect to our engine for the execution of the query.</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>II.2.   Step 3 - Executing the parsed query</strong></p>
        <p>This is the  core process of our request engine. This part being highly conÞdential, we  cannot disclose what happens here; however, some information we can expose :</p>
        <p>- our  request processor is completely linear (double the database size will only  double the request execution <br>
          time);<br>
          -  therefore, the bigger the database, the bigger the difference between our  engine and the other ones;<br>
          - being  schemaless lets us potentially join any column of any table with each other  (simple or multiple columns <br>
          joins);</p>
        <p align="center"><strong>OUR REQUEST PROCESSOR  GETS FASTER THAN ANY OTHER DATABASE REQUEST PROCESSOR AS</strong><br>
            <strong>THE DATABASE SIZE  INCREASES</strong><br>
            <strong>AND / OR</strong><br>
            <strong>THE REQUESTS GET MORE  COMPLEX (INVOLVE MORE COMBINATORICS)</strong><br>
          Moreover,  the memory (RAM) needed for the execution of requests can be limited to as few  as about 200 Mb; however, this size may increase with the size of the data  thesaurus.</p>
        <p align="center"><strong>WE EXPLICITELY ASSURE  THAT THE RESULTS WE PROVIDE ARE COMPLETE, STABLE, AND ACCURATE</strong><br>
            <strong>OUR PROCESS IS A REAL  CALCULATION, NEITHER HEURISTIC NOR STATISTIC RESULT</strong></p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>II.4. Step 4 -  Retrieving the result</strong></p>
        <p>The request  process can return the result into one of the following ways :<br>
          - it dumps  the result into the standard output (meaning that an integrated program that  would launch the request <br>
          tool could get the result as a stream);<br>
          - it writes  the result into a file.</p>
        <p>The format  of the result is a standard CSV (file or stream). The field separator as well  as the new line separator can be configured.</p>
        <p align="center"><strong>THE REQUEST PROCESSOR  OUTPUT</strong><br>
            <strong>CAN EASILY BE  REDIRECTED AND / OR TRANSFORMED</strong><br>
            <strong>BY A 3RD PARTY  APPLICATION</strong></p>
        <p>It can, for  example, be immediately redirected to a reporting application input (Cognos,  Crystal Report, etc.). (see Appendix B.3 for an example)</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>III. Software  description</strong></p>
        <p>Our engine  is composed of a suite of executable files, available for Microsoft Windows,  Mac OS X and Unix operating systems :<br>
          - <strong>cut_in_col</strong> : it loads the CSV files  generated in extraction (Step 1) and cuts them into column-based readable <br>
          files;<br>
          - <strong>AlgoQuestLoader </strong>: using the database  structure description file («base») as well as the column-based files, it <br>
          builds the database graph, which is a  representation of the complete database;<br>
          - <strong>SQL2PreÞx</strong> : using the configuration  file (ini.properties) for paths declarations, it parses a given SQL request <br>
          and transorms it into a Polish Notation  induced request;<br>
          - <strong>AlgoQuestRequester</strong> : using the  configuration file (ini.properties) for paths declarations, it executes the<br>
          generated request (polish notation) and  provides the result</p>
        <p>Note that  both <strong>cut_in_col </strong>and<strong> SQL2PreÞx</strong> are utility executable  programs that can be replaced by implemented code within and existing  architecture that surrounds the AlgoQuest engine.</p>
        <strong><br clear="all">
        </strong>
        <p class="Style19"><strong>Appendix A -  Example for the extract process</strong></p>
        <p class="Style19"><strong>A.1. Step 1 - Request the  original database</strong></p>
        <p>Consider  the following example of the database my_base, composed of two tables customer  and address :</p>
          <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
            <tr>
              <td width="129"><p align="center"><strong>id</strong></p></td>
              <td width="128"><p align="center"><strong>title</strong></p></td>
              <td width="128"><p align="center"><strong>last_name</strong></p></td>
              <td width="128"><p align="center"><strong>Þrst_name</strong></p></td>
              <td width="129"><p align="center"><strong>email</strong></p></td>
            </tr>
            <tr>
              <td width="129"><p align="center">1</p></td>
              <td width="128"><p align="right">Mr</p></td>
              <td width="128"><p>DOE</p></td>
              <td width="128"><p>James</p></td>
              <td width="129" bordercolor="#333333"><p>james@doe.com</p></td>
            </tr>
            <tr>
              <td width="129"><p align="center">2</p></td>
              <td width="128"><p align="right">Ms</p></td>
              <td width="128"><p>SMITH</p></td>
              <td width="128"><p>Lynda</p></td>
              <td width="129"><p>lynda@smith.com</p></td>
            </tr>
            <tr>
              <td width="129"><p align="center">3</p></td>
              <td width="128"><p align="right">Mr</p></td>
              <td width="128"><p>APPLESEED</p></td>
              <td width="128"><p>John</p></td>
              <td width="129"><p>john@appleseed.com</p></td>
            </tr>
      </table>
        
          <br>
          <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
            <tr>
              <td width="37" bordercolor="#333333"><p align="center"><strong>id</strong></p></td>
              <td width="86" bordercolor="#333333"><p align="center"><strong>customer_id</strong></p></td>
              <td width="116" bordercolor="#333333"><p align="center"><strong>address_name</strong></p></td>
              <td width="81" bordercolor="#333333"><p align="center"><strong>street_nbr</strong></p></td>
              <td width="144" bordercolor="#333333"><p align="center"><strong>street</strong></p></td>
              <td width="85" bordercolor="#333333"><p align="center"><strong>zipcode</strong></p></td>
              <td width="92" bordercolor="#333333"><p align="center"><strong>city</strong></p></td>
            </tr>
            <tr>
              <td width="37" bordercolor="#333333"><p align="center">1</p></td>
              <td width="86" bordercolor="#333333"><p align="center">1</p></td>
              <td width="116" bordercolor="#333333"><p>Invoice address</p></td>
              <td width="81" bordercolor="#333333"><p align="center">12</p></td>
              <td width="144" bordercolor="#333333"><p>east 27th</p></td>
              <td width="85" bordercolor="#333333"><p align="right">12345</p></td>
              <td width="92" bordercolor="#333333"><p>Los Angeles</p></td>
            </tr>
            <tr>
              <td width="37" bordercolor="#333333"><p align="center">2</p></td>
              <td width="86" bordercolor="#333333"><p align="center">1</p></td>
              <td width="116" bordercolor="#333333"><p>Delivery</p></td>
              <td width="81" bordercolor="#333333"><p align="center">22</p></td>
              <td width="144" bordercolor="#333333"><p>park lane</p></td>
              <td width="85" bordercolor="#333333"><p align="right">21222</p></td>
              <td width="92" bordercolor="#333333"><p>Washington</p></td>
            </tr>
            <tr>
              <td width="37" bordercolor="#333333"><p align="center">3</p></td>
              <td width="86" bordercolor="#333333"><p align="center">2</p></td>
              <td width="116" bordercolor="#333333"><p>Home</p></td>
              <td width="81" bordercolor="#333333"><p align="center">17</p></td>
              <td width="144" bordercolor="#333333"><p>madison ave.</p></td>
              <td width="85" bordercolor="#333333"><p align="right">45679</p></td>
              <td width="92" bordercolor="#333333"><p>Dallas</p></td>
            </tr>
            <tr>
              <td width="37" bordercolor="#333333"><p align="center">4</p></td>
              <td width="86" bordercolor="#333333"><p align="center">3</p></td>
              <td width="116" bordercolor="#333333"><p>Home</p></td>
              <td width="81" bordercolor="#333333"><p align="center">80</p></td>
              <td width="144" bordercolor="#333333"><p>west 57th</p></td>
              <td width="85" bordercolor="#333333"><p align="right">13122</p></td>
              <td width="92" bordercolor="#333333"><p>New York</p></td>
            </tr>
            <tr>
              <td width="37" bordercolor="#333333"><p align="center">5</p></td>
              <td width="86" bordercolor="#333333"><p align="center">3</p></td>
              <td width="116" bordercolor="#333333"><p>OfÞce</p></td>
              <td width="81" bordercolor="#333333"><p align="center">47</p></td>
              <td width="144" bordercolor="#333333"><p>West 74th</p></td>
              <td width="85" bordercolor="#333333"><p align="right">13122</p></td>
              <td width="92" bordercolor="#333333"><p>New York</p></td>
            </tr>
          </table>
        <p>The file  describing the structure of the database itself, called «base», that is created  :</p>
        <p>my_base                                                  // name of the database<br>
          2                                                             // number of tables in the database</p>
        <p>&quot;customer&quot;           1 3 5                            // &quot;table_name&quot; table_rank number_rows<br>
          number_columns<br>
  &quot;id&quot;                      1  10 NUMBER            // &quot;column_name&quot; column_rank data_size data_type<br>
  &quot;title&quot;                   2 5 VARCHAR2         // ...<br>
  &quot;last_name&quot;          3  150 VARCHAR2<br>
  &quot;f irst_name&quot;        4  100 VARCHAR2<br>
  &quot;email&quot;                 5  150 VARCHAR 2<br>
  &quot;address&quot;             2 5 7                            // again, for the following tables...<br>
  &quot;id&quot; 1 10              NUMBER<br>
  &quot;customer_id&quot;      2 10  NUMBER<br>
  &quot;address_name&quot;   3 100  VARCHAR2<br>
  &quot;street_nbr&quot;         4 10  VARCHAR2<br>
  &quot;street&quot;                5  100 VARCHAR2<br>
  &quot;zipcode&quot;             6  10 VARCHAR2<br>
  &quot;city&quot;                   7  150 VARCHAR2</p>
        <p><em>Note that, as we told, we do not store any  constraint linking a foreign key to its reference (as customer_id is just  considered a number data column of the address table).</em></p>
        <p>The  following CSV files are also created :</p>
        <p><strong>customer .txt</strong></p>
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td width="733" height="48" valign="top"><p>1;Mr;DOE;James;james@doe.com<br>
              2;Ms;SMITH;Lynda;lynda@smith.com<br>
            3;Mr;APPLESEED;John;john@appleseed.com</p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <strong><br clear="all">
        </strong>
        <p><strong>address .txt</strong></p>
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td width="733" valign="top">              1;1;Invoice    address;east 27th;12345;LosAngeles<br>
              2;1;Delivery;22;park    lane;21222;Washington<br>
              3;2;Home;17;madison ave.;45679;Dallas<br>
              4;3;Home;80;west    57th;13122;New York<br>
              5;3;Office;47;west    74th;13122;New York </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>Once the  Step 2 is executed, those CSV files can be deleted from the disk - hence, when  merging the steps 1 and 2, those files aren 't even generated at all.</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>A.2. Step 2 -  Dump the data into column-based text files</strong></p>
        <p>After  executing the cut_in_col executable file, the table customer is divided in five  files (one file per million lines of one column of the table).</p>
        <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
          <tr>
            <td width="727" valign="top"><p>DOE<br>
              SMITH<br>
              APPLESEED </p></td>
          </tr>
        </table>
      <p>&nbsp;</p>
        <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
          <tr>
            <td width="727" valign="top"><p>James<br>
              Lynda<br>
              John</p></td>
          </tr>
        </table>
      <p>&nbsp;</p>
        <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
          <tr>
            <td width="727" valign="top" bordercolor="#333333"><p>james@doe.com<br>
              linda@smith.com<br>
            john@appleseed.com</p>
            </td>
          </tr>
        </table>
        <p>B001T001C001P000000000000000000.txt  (the `id` column)</p>
        <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
          <tr>
            <td width="727" valign="top">              1<br>
              2<br>
            3 </td>
          </tr>
        </table>
        <p>B001T001C002P000000000000000000.txt  (the `title` column)</p>
        <table border="1" cellpadding="0" cellspacing="0" bordercolor="#333333">
          <tr>
            <td width="727" valign="top">              Mr<br>
              Ms<br>
              Mr </td>
          </tr>
        </table>
        <p>B001T001C003P000000000000000000.txt  (the `last_name` column)<br>
          B001T001C004P000000000000000000.txt  (the `Þrst_name` column)<br>
          B001T001C005P000000000000000000.txt  (the `email` column)</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>Appendix B -  Example for the request process</strong></p>
        <p>Within the  following pages, we'll assume the former my_base database has been completed  with the self-explanatory tables : <em>product(id,  title, unit_price) and shopping_cart(id, customerjd, productjd,quantity, price)</em>,  with the following values :</p>
        <p>&nbsp;</p>
        <strong><br clear="all">
        </strong>
        <p class="Style19"><strong>B.1. Step 1 -  Writing the query</strong></p>
        <p>Consider  the following query, that we'll call «query 1», upon the my_base database :<br>
          SELECT<br>
          cust omer.  id, customer. last_name, customer. f irst_name,<br>
          address.  zipcode, address.city, product.title,</p>
        <p><strong>my_base.product</strong></p>
        <table height="60" width="642"border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" align="center">
          <tr>
            <td width="100"  height="5" valign="middle" bgcolor="#2B6991">
            <p align="center"><strong>id</strong></p></td>
            <td width="439" height="5" valign="middle" bgcolor="#2B6991"><p align="center"><strong>title</strong></p></td>
            <td width="103" height="5" valign="middle" bgcolor="#2B6991"><p align="center"><strong>unit_price</strong></p></td>
          </tr>
          <tr>
            <td width="100" valign="middle"><p align="center">1</p></td>
            <td width="439" valign="middle"><p>Avatar Blu-ray+ DVD edition</p></td>
            <td width="103" valign="middle"><p align="right">19,99</p></td>
          </tr>
          <tr>
            <td width="100" valign="middle"><p align="center">2</p></td>
            <td width="439" valign="middle"><p>The West Wing - complete season 1</p></td>
            <td width="103" valign="middle"><p align="right">24,99</p></td>
          </tr>
          <tr>
            <td width="100" height="15" valign="middle"><p align="center">3</p></td>
            <td width="439" valign="middle"><p>Apollo 13 ultimate edition</p></td>
            <td width="103" valign="middle"><p align="right">24,99</p></td>
          </tr>
        </table>
        <p><strong>my_base.shopping_cart</strong><em> (assuming there are other  customers with id 7 and</em> </p>
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" align="center">
          <tr>
            <td width="121" height="10" valign="middle" bgcolor="#2B6991"><p align="center"><strong>id</strong> </p></td>
            <td width="129" height="10" valign="middle" bgcolor="#2B6991"><p align="center"><strong>customer_id</strong></p></td>
            <td width="129" height="10" valign="middle" bgcolor="#2B6991"><p align="center"><strong>product_id</strong></p></td>
            <td width="130" height="10" valign="middle" bgcolor="#2B6991"><p align="center"><strong>quantity</strong></p></td>
            <td width="133" height="10" valign="middle" bgcolor="#2B6991"><p align="center"><strong>price</strong></p></td>
          </tr>
          <tr>
            <td width="121"><p align="center">1</p></td>
            <td width="129"><p align="center">1</p></td>
            <td width="129"><p align="center">1</p></td>
            <td width="130"><p align="right">2</p></td>
            <td width="133"><p align="right">39,98</p></td>
          </tr>
          <tr>
            <td width="121"><p align="center">2</p></td>
            <td width="129"><p align="center">3</p></td>
            <td width="129"><p align="center">1</p></td>
            <td width="130"><p align="right">4</p></td>
            <td width="133"><p align="right">79,96</p></td>
          </tr>
          <tr>
            <td width="121"><p align="center">3</p></td>
            <td width="129"><p align="center">7</p></td>
            <td width="129"><p align="center">2</p></td>
            <td width="130"><p align="right">1</p></td>
            <td width="133"><p align="right">24,99</p></td>
          </tr>
          <tr>
            <td width="121"><p align="center">4</p></td>
            <td width="129"><p align="center">9</p></td>
            <td width="129"><p align="center">3</p></td>
            <td width="130"><p align="right">100</p></td>
            <td width="133"><p align="right">2499,00</p></td>
          </tr>
<tr></tr>
      </table>
        <p>product. unit_price, shopping_cart. quantity,  shopping_cart. price<br>
          FROM<br>
          customer, address, product, shopping_cart<br>
          WHERE<br>
          address.customer_id = customer.id<br>
          AND customer.id = shopping_cart.customer_id<br>
          AND shopping_cart.product_id = product.id<br>
          AND customer.gender = 'M'<br>
          AND address.city IN ('Washington',  'New York' ,'Dallas');</p>
        <p>The joins  may seem completely natural since the database provided in this example is very  simple, but let's insist again on the fact that our database is completely  schemaless, and therefore would accept any kind of join in requests without  needing any indexation.</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>B.2.   Step 2 - Parsing the query</strong></p>
        <p>The query  «query 1 » is parsed and transformed into the following :<br>
          SELECT<br>
          ,,,,,,,, . customer id . customer  last_name . customer f irst_name<br>
          . address zipcode . address city .  product title . product unit_price . shopping_cart quantity . shopping_cart  price<br>
          FROM<br>
          ,,, customer address product  shopping_cart<br>
          WHERE<br>
          AND AND AND AND<br>
          K_JEQ . address customer_id .  customer id<br>
          K_JEQ . customer id . shopping_cart  customer_id<br>
          K_JEQ . shopping_cart product_id .  product id<br>
          K_JEQ . customer gender K_VALUE 'M'<br>
          IN . address city , K_VALUE 'Washington' ,  K_VALUE 'New York' K_VALUE 'Dallas'</p>
        <br clear="all">
        <p class="Style19"><strong>B.3.   Step 4 - Retrieving the result</strong></p>
        <p>&nbsp;</p>
        <p>The  execution of the query «query 1 » would result in the following file :</p>
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td width="733" valign="top" bordercolor="#333333"><p>3;APPLESEED;John;13122;New York;Avatar DVD    Set;19. 99;4;79. 96<br>
              7;JOHNSON;Kyle;20201;Dallas;The West Wing    Complete season 1;24.991;24.99<br>
              9;HOWARD;Ronald;17012;Washington;Apollo    13 Ultimate edition;24.99;100;2499.00</p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p class="Style19"><strong>APPENDIX C -  RESULTS OF OUR TESTS</strong></p>
        <p class="Style19"><strong>C.1. Context</strong></p>
        <p>We designed  a database, called aq_test, to test the performance of the AlgoQuest engine.  This database is composed of Þve tables, called table_1, table_2, table_3,  table_4 and table_5. Each of those tables is composed of the following columns  :</p>
        <table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td width="92" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p></td>
            <td width="207" bgcolor="#2B6991"><p align="center" class="Style22">data type</p></td>
            <td width="343" bgcolor="#2B6991"><p align="center" class="Style22">generation</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">id</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">integer</p></td>
            <td width="343" bgcolor="#FFFFFF"><p>it's an incremented integer, starts at 1</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">Þeld_1</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">varchar(1 0)</p></td>
            <td width="343" rowspan="6" valign="top" bgcolor="#FFFFFF"><p align="center">A random word composed of three components randomely<br>
              selected among the following options :<br>
            abc - def - ghi - jkl - mno - pqr - stu - vwx - yz</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">Þeld_2</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">varchar(1 0)</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">Þeld_3</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">varchar(1 0)</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">Þeld_4</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">varchar(1 0)</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">Þeld_5</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">varchar(1 0)</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">Þeld_6</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">varchar(1 0)</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">value_1</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">integer</p></td>
            <td width="343" bgcolor="#FFFFFF"><p>a random integer between 0 and 1 000</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">value_2</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">integer</p></td>
            <td width="343" bgcolor="#FFFFFF"><p>a random integer between 0 and 10 000</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">value_3</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">integer</p></td>
            <td width="343" bgcolor="#FFFFFF"><p>a random integer between 0 and 100 000</p></td>
          </tr>
          <tr>
            <td width="92" bgcolor="#2B6991"><p align="center" class="Style22">value_4</p></td>
            <td width="207" bgcolor="#FFFFFF"><p align="center">integer</p></td>
            <td width="343" bgcolor="#FFFFFF"><p>a random integer between 0 and 1 000 000</p></td>
          </tr>
        </table>
        <p>table_1 contains 10 000 lines;<br>
          table_2 contains 100 000 lines;<br>
          table_3 contains 1 000 000 lines;<br>
          table_4 contains 10 000 000 lines;<br>
          table_5 contains 100 000 000 lines.</p>
        <p>We have  executed our tests with a common laptop using Microsoft XP with an Intel Core  Duo 2 and 2Gb RAM (32bits OS).</p>
        <p>&nbsp;</p>
        <p class="Style19"><strong>C.2. Test perimeter</strong></p>
        <p><strong>Extraction</strong><br>
          This  database being loaded in a standard database system (such as Ms SQL Server,  MySQL, Oracle, etc.), we Þrst extract the whole database using the AlgoQuest  extract engine.<br>
          We test the  execution time as well as the size of the generated database graph.</p>
        <p><strong>Request</strong><br>
          We query  that generated database graph with the following requests (among others) :</p>
        <p>&nbsp;</p>
        <p>Þrst  request of our test :</p>
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td width="727" valign="top"><p>SELECT<br>
              COUNT (    table_1.value_1 )<br>
              FROM<br>
              table_1,    table_2, table_3, table_4 WHERE<br>
              table    _2.field_1 = table _1.field_1<br>
              AND table    _3.field_2 = table _2.field_2 AND table _4.field_3 = table _3.field_3<br>
              GROUP BY<br>
              table    _1.field_1 ;</p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>1 4th  request of our test :</p>
        <table border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
          <tr>
            <td width="728" valign="top"><p><strong>SELECT</strong><br>
                    <strong>COUNT</strong> ( table _3.field_5 )<br>
              table_1,    table_2, table_3, table_4, table_5<br>
              <strong>WHERE</strong> <br>
              table    _2.field_2 = table _1.field_2<br>
              <strong>AND</strong> table _3.field_5 = table _2.field_5 <strong>AND</strong> table _3.field_3 =    table _2.field_3 <br>
              <strong>AND</strong> table _4.field_1 = table _3.field_1 <strong>AND</strong> table _5.field_3 = table    _4.field_3<br>
              <strong>AND</strong> table _3.field_1 <strong>IN</strong> ('abcabcdef', 'abcdefabc', 'abcdefdef',    'yzyzdef'); </p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p><span class="Style19"><strong>C.3. Results</strong></span><br>
          <br>
          The results  we've obtained are at your disposal, should you be interested in analyzing  them.</p>
        <p align="left" class="Style15"><span class="Style13"><br>
    </span></p></td>
  </tr>
</table>
                
                
                
                
                
                
                
                
                
                </div>
            </div>            
                  
        </div>
        <!-- END OF CONTENT -->
        
        <?php include('footer.php'); ?>
    	
    </div>
</body>
</html>
