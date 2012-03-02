<!doctype html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title>Startup Grid: &middot; The #1 Source for Startups</title>
  
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- scripts at bottom of page -->  
 	<link rel="stylesheet" href="css/style.css" />
  	<!-- div id="Counter" style="position:fixed;top:0;right:0;width:300;height:100;color:white;z-index:10000;"></div-->

	<!-- Google Analytics --> 
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-20709274-7']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>



</head>


	<!-- Logo -->
	<div id="StartupGridLogoContainer">
		<div id="StartupGridLogo">
		</div>
	</div>
	<!-- /Logo -->


<body onload="initialize()" class="demos ">
	
 	<div id="debugDisplay" style="position:fixed;top:0;right:0;width:200;height:50;border:1px solid red">
 	
 	</div>
 	
 	
  <!-- login - ->
	  <div id="loginContainer">
	  	<div id="cssIsRetarded">
		  	<div id="login">
			  	<a class="janrainEngage" href="#">LOG IN</a>
			</div>
	  	</div>
	  </div>
    <!-- /login -->





	<!-- header - ->
		<div id="header" style="position:relative;margin:auto;width:960px;">
			<h1>Startup Grid - StartupChile<font size=3><font color=blue> ALPHA<font color=black size=2></h1>  <h3></h3>
			<p>
				Welcome to the Grid. You can find all StartupChile companies here. Filter, sort and search by industry, stage, or founder name. <a class="janrainEngage" href="#">LOG IN</a> to make changes. <a href="mailto:cccannorman@gmail.com?subject=Add my startup to the Startup Grid!">Feedback?</a>
			</p>
		</div>  
	<!-- /header -->


	<!-- body --> 
		<!-- for positioning purposes, since 50% positioning on elements changes with a scroll bar, causing jumping-->		
		<div id="forceScrollBar" 
			style="margin:0 auto; width:1024px; height:101%; position:absolute;top:0;">
		</div>
	
		<!-- for hiding all elements from clicks at the start to prevent css errors during loading (mouseover options during loading cuases malformed position coordinates) -->
		<div id="plasticWrap"
			style="z-index:10000000;position:absolute;top:0;left:0;width:100px;height:100px;color:rgba(255,1,1,0.5);">
		</div>	
	
	
	
	<div id="FilterContainerIHateCSS">
		<div id="Filter">
			<div id="FiltersTitle">Filter by:</div>
		  <?php?><div>
			
			<!-- filter by Stage -->
				<div id="filter_stage" class="rounded filterContainer">
			  		<div id="filter_stage_label" class="rounded filterLabel">
				  		Development Stage
			  		</div>
			  	
			  		<div id="filter_stage_options" class="rounded innerShadow">
			  			Development Stage
					    <div class="option-combo">
					      <ul class="filter option-set clearfix " data-filter-group="shape"> 
					          <li><a name="any" href="#filter-stage-any" data-filter-value="" class="selected">any</a></li>
					          <li><a name="bob" href="#filter-stage-idea" data-filter-value=".Idea">idea</a></li>
					          <li><a href="#filter-stage-prototype" data-filter-value=".Prototype">prototype</a></li>
					          <li><a href="#filter-stage-beta" data-filter-value=".Beta">beta</a></li>
						      <li><a href="#filter-stage-growth" data-filter-value=".Square">growth</a></li>
						      <li><a href="#filter-stage-profitable" data-filter-value=".Profitable">profitable</a>   </li>
					      </ul>
					    </div>
				    </div> <!--/filter_stage_options-->
			  	
				</div> <!-- /filter stage -->
				
				<!-- filter By investment -->
				<div id="filter_investment" class="rounded filterContainer">
			  		<div id="filter_investment_label" class="rounded filterLabel">
					  		Outside Investment
			  		</div>
			  		
				  	<div id="filter_investment_options" class="rounded innerShadow">
						Outside Investment
		  				    <div class="option-combo">
						      <ul class="filter option-set clearfix " data-filter-group="color"> 
	  					        <li><a name="any" href="#filter-stage-any" data-filter-value="" class="selected">any</a></li>
								<li><a name="bob" href="#filter-color-zero" data-filter-value=".zero">zero-5K</a> <!-- most bootrapped "collection" cvn-->
								<li><a href="#filter-color-any" data-filter-value="">$5-50K</a>
								<li><a href="#filter-color-zero" data-filter-value=".zero">$50-500K</a>
								<li><a href="#filter-color-zero" data-filter-value=".zero">$500K-5M</a>
						      </ul>				
						  </div>
				    </div>
				</div> <!-- /filter_invesemtnt-->
			  		
				  	
			  	<!-- filter By Industry: -->
				<div id="filter_industry" class="rounded filterContainer">
			  		<div id="filter_industry_label" class="rounded filterLabel">
					  		Industry
			  		</div>
			  		<div id="filter_industry_options" class="rounded innerShadow">
		  				Industry
					    <div class="option-combo">
					      <ul class="filter option-set clearfix multiple " data-filter-group="size"> 
					        <li><a name="any" href="#filter-size-any" data-filter-value="" class="selected">any</a></li>
					          <li><a href="#filter-size-education" data-filter-value=".Education">education</a></li>
					          <li><a href="#filter-size-social" data-filter-value=".Social">social</a></li>
					          <li><a href="#filter-size-games" data-filter-value=".Games">games</a></li>
					          <li><a href="#" data-filter-value=".Finance">finance</a></li>
					          <li><a href="#" data-filter-value=".Entertainment">tv/radio</a></li>
					          <li><a href="#" data-filter-value=".Bio">bio / health</a></li>
					          <li><a href="#" data-filter-value=".Web">web</a></li>
					          <li><a href="#" data-filter-value=".Mobile">mobile</a></li>
	
					      </ul>
					    </div>
				    </div> <!-- /filter investment options -->
			    </div><!-- filter investment -->
					    

	

			  	<div id="filter_search" class="rounded">
			  		<div>
				  		Search:
					   	<input type="text" maxlength="30" name="name" value="" id="manualSearch" />
					   	<br><input type="button" id="resetManualSearch" value="clear" />
				   	</div>
				</div>

	
		
	
				<!--sort- ->		  		
			  		<td>    
				  		<div class="option-combo">
					      <ul id="sort" class="option-set clearfix" data-option-key="sortBy">
					        <li><a href="#mixed" data-option-value="number" class="selected">mixed</a></li>
					        <li><a href="#original" data-option-value="original-order">original</a></li>
					        <li><a href="#alphabetical" data-option-value="alphabetical">alphabetical</a></li>
					      </ul>
					    </div>
				    </td>-->


	
			  	
					<!-- size - ->
			  		<td>    
				  		<div class="option-combo">
					      <ul id="sort" class="option-set clearfix" data-option-key="sortBy">
					        <li><a href="#mixed" onclick="makeSmaller();">mixed</a></li>
					        <li><a href="#original" onclick="makeNormal();">original</a></li>
					      </ul>
					    </div>
				    </td>-->
			  	
		  				  	
			  </table>
		    </div>
	   <!-- // */ ?> -->
		  </div> <!-- /filter -->
	</div><!-- /filtercontainerIHateCSS -->
	<pre>

<div id="containerBox">
	<!-- <div style="width:768px; outline:2px solid red; height:20px;margin-left:256px;"></div>-->

	    	
	    	
	<div id="container" class="clearfix" style="display:none;">
	
			  <!-- Introduction div -->
	    	<div id="introContainer">
		    	<div name="introduction" id="intro" class="color-shape rounded">
		    		<div id="introTitle">Welcome to the Grid.</div>
		    		<div id="introContent">Use this tool to find your competitors, cofounders, colleagues, and opportunities.</div>
		    		<div id="introClose">x</div>
		    	</div>
	    	</div>
	    	
	    	
	    	
	  <?php 
	  	
		// commented for now, using hardcoded HTML for fast loading.
		/*
	  	// Let's split the fetches into separate databases while we're getting our data in order.
	  	
		  	// Startups Round 0
		  	$tableNames = array("Startups_Clean");
			foreach ($tableNames as $tableName)
			{
				require_once('php/sqllogin.php');
				mysql_select_db("hacktus", $con);
				
				$sql="SELECT * FROM $tableName"; //Create a Query to select all rows in the table Events
							$result = mysql_query($sql);
							$i=0;
							$j=0;
				
				while(($row = mysql_fetch_array($result)))// && $i<40) //Iterate all rows in query results. Each row will be an event
				{
					if (true)
					//if ($i < 7)
					{	
						$i++;
						echo '' // done to create a line break in source
							+'<div name="eachStartup" class="color-shape ' 
								. $row['Industry'] . ' '
								. $row['Round']  . ' '
								. strtolower($row['Founders'])  . ' '
								. $row['Name'] . ' '
								. strtolower($row['Origin'])  . ' '
								. $row['Stage']
							.'">';
							
		
							echo '<div class="logo" style="background-image:url(\''.$row['Logo_URL'].'\');background-size:100%;background-repeat:no-repeat;background-position:center;"></div>';
							
							
							// round 
							echo '<div class="round">' . $row['Round'] . '</div>';
							
							// Name 
							echo '<a href="' . $row['Name_URL'] . '" target="_blank">';
							echo '<div class="nameContainer">
								<div class="name jtextfill">
									<span>' . $row['Name'] . '</span>
								</div>
							</div>';
							
							// Description
							$description = stripslashes(substr($description,0,128)); // limit description length
							echo '<div class="description">' 
									. "<br>"
									. $description
									. "<br><br>•<strong>Founders: </strong>"			
										.$row['Founders']
									. "<br><br>•<strong>Stage: </strong>"			
										.$row['Stage']
		
							. "</div>"; 
						echo '</div>';				
					}
				}
				
				// echo "<script>document.getElementById('Counter').innerHTML+='<br>#of ".$tableName." was: ".$i."';</script>";
			}	
			// */
	  	?>
	    

	    
	    <!-- hardcoded raw HTML (for faster loading) from php output from 21-JAN-2011 -->
	    
	    
			<!-- insert HTML here -->  
			 <div name="eachStartup" class="color-shape Energy zero george cadena Aeterna Sol usa Idea"><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/06/logo_aeternasol1-150x150.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.aeternasol.org" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Aeterna Sol</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>George Cadena<br><br>•<strong>Stage: </strong>Idea</div></div><div name="eachStartup" class="color-shape Commerce zero andreas von hessling maxine liang AI Merchant germany  china Beta"><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_aimerchant.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.aimerchant.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>AI Merchant</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Andreas von Hessling Maxine Liang<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Social zero keith dennis Assert ID usa Prototype"><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/07/logo_assertid-150x150.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Assert ID</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Keith Dennis<br><br>•<strong>Stage: </strong>Prototype</div></div><div name="eachStartup" class="color-shape Tourism zero amit aharoni nicolas meunier CruiseWise israel  france Prototype"><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_cruisewise.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.cruisewise.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>CruiseWise</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Amit Aharoni Nicolas Meunier<br><br>•<strong>Stage: </strong>Prototype</div></div><div name="eachStartup" class="color-shape Mobile & Wireless zero shahar nechmad Death Star Labs usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_deathstar.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.deathstarlabs.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Death Star Labs</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Shahar Nechmad<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Legal zero jesse davis nate lustig Entrustet usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/07/logo_entrustet-150x150.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Entrustet</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jesse Davis Nate Lustig<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web zero raj uttamchandani Eximforce india "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_eximforce.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.eximforce.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Eximforce</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Raj Uttamchandani<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social NGO zero erika anderson H2020 usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_h2020.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.h2020global.org" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>H2020</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Erika Anderson<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Commerce zero javier pajaro diego may Junar argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_junar.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.junar.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Junar</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Javier Pajaro Diego May<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social NGO zero brian bigelow Kijami usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_kijami.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.kijamimedia.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Kijami</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Brian Bigelow<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education zero hank thompson Knowledgestreem usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_knowledgestreem.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.knowledgestreem.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Knowledgestreem</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Hank Thompson<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education zero david lancashire Language Systems usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_lansystems.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.languagesystems.net" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Language Systems</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>David Lancashire<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education zero corey wride Movie Mouth usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_moviemouth.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.moviemouth.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Movie Mouth</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Corey Wride<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Entertainment zero vijay kailas Numote usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_numote.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.numote.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Numote</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Vijay Kailas<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social zero daniel eckler Piccsy usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_piccsy.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.piccsy.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Piccsy</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Daniel Eckler<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce zero james kennedy priscilla groves Piehole ireland "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_piehole.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.piehole.ie" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Piehole</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>James Kennedy Priscilla Groves<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade zero kurt avarell Rocket Relief usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_rocketrelief.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.rocketrelief.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Rocket Relief</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kurt Avarell<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce zero enrique fernandez SupplierSync usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_suppliersync.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.de-pe.com/blog" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SupplierSync</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Enrique Fernandez<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Tourism zero paige brown Tripeezy usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_tripeezy.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.tripeezy.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Tripeezy</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Paige Brown<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce zero filipe gonçalves tiago matos Vendder portugal "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_vendder.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.vendder.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Vendder</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Filipe Gonçalves Tiago Matos<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Agriculture zero lucía iborra Visual Nacert spain "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_visualnacert.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.normagricola.com/pages/cont/index.php?id=4" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Visual Nacert</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Lucía Iborra<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Food zero pablo delgado jorge diaz Yumit spain "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_yumit.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">zero</div><a href="http://www.yumit.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Yumit</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pablo Delgado Jorge Diaz<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one sam ockman 1000 Corks usa "><div class="logo" style="background-image:url('http://a1.1000corks.com/static/images/mendoza/logo2.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.1000corks.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>1000 Corks</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sam Ockman<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Bio one margaret klimen 3Scan usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_3scan.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.3Scan.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>3Scan</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Margaret Klimen<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile & Wireless one agravat bipin b Ability india "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_ability.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.willager.com/ability.html" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Ability</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Agravat Bipin B<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce Web one diego dayan ADPROACH S.A. argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_adproachs.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.adproach.me" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>ADPROACH S.A.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Diego Dayan<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance & Economics one pablo ambram, maritza lanas AgentPiggy argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/08/logo-outlines.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.agentpiggy.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>AgentPiggy</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pablo Ambram, Maritza Lanas<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web one evgeny fadeev AskBot usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_askbot.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.askbot.org" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>AskBot</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Evgeny Fadeev<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one kyn chaturvedi Audiocatch usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_kynchaturvedi.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.audiocatch.com/alpha" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Audiocatch</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kyn Chaturvedi<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce one carolina isabel andrade gallegos AYNI ecuador "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_ayni.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.aynistore.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>AYNI</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Carolina Isabel Andrade Gallegos<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Communications one mayel de borniol josef dunne Babelverse greece "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_babelverse.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.babelverse.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Babelverse</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Mayel de Borniol Josef Dunne<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web Food  one pierce lamb BarBird usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_barbird.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.barbird.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>BarBird</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pierce Lamb<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one daerick lanakila Brighter Future Challenge (BFC) usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_brighterfuturechallenge.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.brighterfuturechallenge.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Brighter Future Challenge (BFC)</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Daerick Lanakila<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web one nischal shetty Buffr india "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/06/logo_buffr-150x121.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.buffr.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Buffr</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nischal Shetty<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one scott bird scott thompson Bungolow usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_bungolow.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.bungolow.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Bungolow</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Scott Bird Scott Thompson<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Bio one raphael barros CapsDOC brazil "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_capsdoc.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.capsdoc.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>CapsDOC</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Raphael Barros<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile/Web/Social Networking one claudio carnino Challengein italy "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_challengein.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.challengein.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Challengein</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Claudio Carnino<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Energy Green one charlotte m thornton CHEBEL Companies (In Formation) canada "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_chebelcompanies.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.chebel.net" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>CHEBEL Companies (In Formation)</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Charlotte M Thornton<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one pablo stevenson CLAIRE chile "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_claire.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>CLAIRE</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pablo Stevenson<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce one juan pablo torras Club Point argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_clubpoint.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.clubpoint.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Club Point</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Juan Pablo Torras<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Working espaces for entrepreneurs one horacio justinario Co-work.cl usa "><div class="logo" style="background-image:url('http://www.co-work.cl/');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.co-work.cl" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Co-work.cl</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Horacio Justinario<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce one tomas salcedo ConcernTrak International chile "><div class="logo" style="background-image:url('http://www.concerntrak.com/');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.concerntrak.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>ConcernTrak International</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Tomas Salcedo<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one jordan sitkin and apolonio valdovinos Decurate usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_decurate.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.decurate.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Decurate</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jordan Sitkin and Apolonio Valdovinos<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Entertainment one lucien carter El Teatro usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_elteatro.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>El Teatro</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Lucien Carter<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one jeremy james eSentry Security usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_esentrysecurity.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.esentrysecurity.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>eSentry Security</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jeremy James<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Bio one stephen delmonte Ethonova usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_ethonova.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.ethonova.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Ethonova</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Stephen Delmonte<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one andrew nicol EveryRack australia "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_everyrack.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.everyrack.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>EveryRack</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Andrew Nicol<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web one mcavallin Evolucion Social usa  chile "><div class="logo" style="background-image:url('http://unbouncepages-com.s3.amazonaws.com/www.ev-social.com/logo_ev-social_maqueta_1.original_4n0ynwbm56qfwphc.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.ev-social.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Evolucion Social</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>MCavallin<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Biotech & Bioinformatics one zachary apte EvolveMol usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_evolvemol.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.evolvemol.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>EvolveMol</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Zachary Apte<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web one jose moura ez4u portugal "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_ez4u.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.ez4uteam.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>ez4u</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jose Moura<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Gaming one alexander boland Fear of Software usa "><div class="logo" style="background-image:url('http://fearofsoftware.com/static/images/logo64.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.fearsoftware.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Fear of Software</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alexander Boland<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Commerce one marc m. FoXido france "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_globalkithomes.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.foxido.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>FoXido</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Marc M.<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Pre-Fabricated Houses one  Zip Kit Homes  "><div class="logo" style="background-image:url('http://www.zipkithomes.com/site/');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="www.globalkithomes.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Zip Kit Homes</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong><br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce Green one sheryl ryan Greenopedia Inc. usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_greenopediainc.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.greenopedia.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Greenopedia Inc.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sheryl Ryan<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social/NGO one ken seville GuaranteedInterview.com canada "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_civiside.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.guaranteedinterview.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>GuaranteedInterview.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ken Seville<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Fitness one yifan zhang geoff oberhofer Gym-Pact usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_gympact.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.gym-pact.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Gym-Pact</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Yifan Zhang Geoff Oberhofer<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Other one jose sanhueza Home Food chile "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_homefood.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Home Food</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>JOSE SANHUEZA<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce Web one maximiliano pallotto HomeViva argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/06/Picture-1-150x150.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.homeviva.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>HomeViva</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Maximiliano Pallotto<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social/NGO one colin james lewis IntroBuddy usa "><div class="logo" style="background-image:url('http://introbuddycom.ipage.com/basic/introBuddy/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.introbuddy.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>IntroBuddy</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Colin James Lewis<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Recruitment one ronaldo martins Job Convo brazil Beta"><div class="logo" style="background-image:url('https://fbcdn-profile-a.akamaihd.net/hprofile-ak-snc4/203546_229192687107471_8304159_n.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Job Convo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ronaldo Martins<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Other one luis videla KloudCatch argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_kloudcatch.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.kloudcatch.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>KloudCatch</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Luis Videla<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Travel Green one kunal kalro Kosmovista india "><div class="logo" style="background-image:url('http://www.kosmovista.com/images/8130-120811121734Final.logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.kosmovista.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Kosmovista</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kunal Kalro<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Energy & Cleantech one karsten schulte KRAFTWERK germany "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_kraftwerk.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.kraftwerk-rps.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>KRAFTWERK</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Karsten Schulte<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Bio one guido nuez-mujica LavaAmp venezuela "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_lavaamp.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.lava-amp.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>LavaAmp</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Guido Nuez-Mujica<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Creative Media and Design one clara viera LEAFER portugal "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_leafer.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.leaferapp.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>LEAFER</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Clara Viera<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Webs one oguz serdar Limk turkey "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/08/Image10.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.limk.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Limk</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Oguz Serdar<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one tom vaughan Lndlrd.com usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_lndlrd.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.lndlrd.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Lndlrd.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Tom Vaughan<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web one frederico camara Loveblip portugal "><div class="logo" style="background-image:url('http://www.kosmovista.com/images/8130-120811121734Final.logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.loveblip.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Loveblip</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Frederico Camara<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one vladimir getselevich Magnifis israel "><div class="logo" style="background-image:url('http://www.magnifis.com/wpress/wp-content/uploads/2011/09/cropped-magnifis_logo_web1.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="www.magnifis.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Magnifis</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Vladimir Getselevich<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web one alar maerand Marker.to estonia "><div class="logo" style="background-image:url('http://marker.to/');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.marker.to" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Marker.to</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alar Maerand<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  one daniel stepp Monomyth Software usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_monomythsoftware.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.monomythsoftware.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Monomyth Software</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Daniel Stepp<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Commerce one matt beaubien MyAutoWeb canada "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_myautoweb.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.myautoweb.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>MyAutoWeb</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Matt Beaubien<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape P2P charity networking website one rafael simao Nonius Group portugal "><div class="logo" style="background-image:url('http://www.noniusgroup.com/wp-content/uploads/2011/07/nonius_small.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.noniusgroup.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Nonius Group</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Rafael Simao<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web one martin muniz Noumad argentina "><div class="logo" style="background-image:url('http://noumad.com/assets/home/logo_noumad-72275bbefb5c8c10422525e5a9c9074c.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://noumad.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Noumad</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Martin Muniz<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one herval freire Novelo brazil "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/06/bkg-150x150.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.getnovelo.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Novelo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Herval Freire<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce Web one marshall haas Obsorb, Inc. usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_obsorb.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.obsorb.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Obsorb, Inc.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Marshall Haas<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile & Wireless one diego saez-gil Off Track Planet argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_offtrackplanet.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.offtrackplanet.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Off Track Planet</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Diego Saez-Gil<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social NGO one matias lloveras ONE Change (Office for Natural Emergencies) argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_onechange.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.one-change.net" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>ONE Change (Office for Natural Emergencies)</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Matias Lloveras<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance & Economics one adrian fisheramp guillermo horno PagaTuAlquiler.com argentina "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_pagatualquiler.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.pagatualquiler.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PagaTuAlquiler.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Adrian Fisheramp Guillermo Horno<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance Commerce one niina fu Partner Management chile "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_partnermanagement.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Partner Management</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Niina Fu<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one halvard bastiansen Pick a Student norway "><div class="logo" style="background-image:url('http://pickastudent.com/images/coming_soon/LogoV3.png?1315613992');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Pick a Student</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Halvard Bastiansen<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web one james haas Picket usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_picket.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Picket</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>James Haas<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Network one yoshi komada Ping pigeon usa "><div class="logo" style="background-image:url('http://www.pingpigeon.com/images/pingpigeon-logo.png?1318881031');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.pingpigeon.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Ping pigeon</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Yoshi Komada<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Bio one eric jobidon Praccel canada "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_dentaldashboard.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.praccel.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Praccel</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Eric Jobidon<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Educational Software one bruno agusto Practical Way Software brazil "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_practicalway.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.practicalway.eu" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Practical Way Software</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Bruno Agusto<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education Bio one ferdinand tongson Professional ESOL usa "><div class="logo" style="background-image:url('http://www.professionalesol.com/templates/th005/images/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.professionalesol.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Professional ESOL</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ferdinand Tongson<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Other one king sidharth Read Jitsu india "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_readjitsu.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.readjitsu.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Read Jitsu</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>King Sidharth<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Commerce one bill chikirivao revokom zimbabwe "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_revokom.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.revokom.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>revokom</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Bill Chikirivao<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile & Wireless one clemens raemy SaferTaxi switzerland "><div class="logo" style="background-image:url('http://www.safertaxi.com/');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.safertaxi.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SaferTaxi</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Clemens Raemy<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social NGO, biotech/health, green one sean kolk, andrew foote, emily woods, nick vanvliet,  christopher quintero Sanivation usa Prototype"><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_sanivation.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.sanivation.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Sanivation</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sean Kolk, Andrew Foote, Emily Woods, Nick VanVliet,  Christopher Quintero<br><br>•<strong>Stage: </strong>Prototype</div></div><div name="eachStartup" class="color-shape Other one jonathan markwell Smidgn uk "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_smidgn.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.smidgn.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Smidgn</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jonathan Markwell<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Web one bertrand fan Recollect usa "><div class="logo" style="background-image:url('http://static.tumblr.com/obyzckh/wivlunm6q/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.smittn.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Recollect</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Bertrand Fan<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Other one benjamin france SOS Systems usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_sossystems.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SOS Systems</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Benjamin France<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Commerce one javier gramajo SQMOS guatemala "><div class="logo" style="background-image:url('http://www.sqmos.com/wp-content/uploads/2011/10/Logo-SQMOS-TM.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.sqmos.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SQMOS</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Javier Gramajo<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance & Economics one santiago pineda StartBull colombia "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_startbull.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://http://www.startbull.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>StartBull</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Santiago Pineda<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Travel one richard li-sheng yang Street Mosaic taiwan "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_streetmosaic.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.streetmosaic.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Street Mosaic</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Richard Li-Sheng Yang<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one eric warnke Surreal canada "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_surreal.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.surrealwifi.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Surreal</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Eric Warnke<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Commerce one gustavo bessone Taggify italy "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_taggify.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.taggify.net" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Taggify</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Gustavo Bessone<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Educational Software one ademar aguiar Tecla Colorida portugal "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/06/tecla_colorida_165x165.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Tecla Colorida</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ademar Aguiar<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Commerce one alberto romero Toldo spain "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/07/logo-toldo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Toldo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alberto Romero<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Other one rub&eacute;n lozano TriviaPad spain "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_triviapad.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.triviapad.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>TriviaPad</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Rub&eacute;n Lozano<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Energy Green one gaurav gupta Turquoise Sunlabs india "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_turquoisesunlabs.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.trqsunlabs.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Turquoise Sunlabs</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Gaurav Gupta<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Vitamins one michael kassaris VitaFlavor usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/08/logo.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>VitaFlavor</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Michael Kassaris<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social NGO one jasmine aarons VOZ usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_voz.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.madebyvoz.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>VOZ</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jasmine Aarons<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise Software & IT one amir salihefendic Wedoist bosnia "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_wedoist.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.wedoist.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Wedoist</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Amir Salihefendic<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce one kshitij pathak XCarbon Technologies Pvt Limited india "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_xcarbon.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.carbon.in" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>XCarbon Technologies Pvt Limited</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kshitij Pathak<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape E-commerce & Trade one manquel tejeda  yourproductvideo alemania "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_yourproductvideo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.yourproductvideo.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>yourproductvideo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Manquel Tejeda <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web one mike propper Yourstorybox usa "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/logos/logo_michaelpropper.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.yourstorybox.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Yourstorybox</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>mike propper<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Enterprise & Software one natalia andreoli monteiro zuggi brazil "><div class="logo" style="background-image:url('http://www.startupchile.org/wp-content/uploads/2011/07/logo_zuggi_roxo.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">one</div><a href="http://www.vimeo.com/15851814" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>zuggi</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Natalia Andreoli Monteiro<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Energy Green two wenny ng nisar shaikh Alcanzar Solar united states "><div class="logo" style="background-image:url('http://www.alcanzarsolar.com/wp-content/uploads/2011/10/alcanzarsolarlogo-300x45.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.alcanzarsolar.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Alcanzar Solar</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Wenny Ng Nisar Shaikh<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two  Alec Manfre united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Alec Manfre</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong><br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Bio Web two salomon  simkins daniel silberman Alodok united states "><div class="logo" style="background-image:url('http://alodok.com/images/alodok-logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://alodok.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Alodok</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Salomon  Simkins Daniel Silberman<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two daniel ponce mauro trigo Amerpages bolivia Profitable"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/27/91/45/show_4e3887b1957861_68164598.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Amerpages</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Daniel Ponce Mauro Trigo<br><br>•<strong>Stage: </strong>Profitable</div></div><div name="eachStartup" class="color-shape Games Entertainment two vijay kailas rosario hernández błażej biesiada Ante Up united states Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/a5/f3/6f/show_4e456e732fad40_07349446.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Ante Up</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Vijay Kailas Rosario Hernández Błażej Biesiada<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two naysawn naderi miguel molina cecchetti Art Sumo canada "><div class="logo" style="background-image:url('http://www.artsumo.com/assets/images/small_logo.gif');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.artsumo.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Art Sumo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Naysawn Naderi Miguel Molina Cecchetti<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education Social two miguel molina cecchetti olivers de abreu heri rakotomalala Ateneo Digital, LLC united states Prototyping"><div class="logo" style="background-image:url('http://www.ateneodigital.com/wp-content/themes/promo/images/logoateneo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.ateneodigital.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Ateneo Digital, LLC</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Miguel Molina Cecchetti Olivers De Abreu Heri Rakotomalala<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two greg wientjes Attract, Inc. united states "><div class="logo" style="background-image:url('');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Attract, Inc.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Greg Wientjes<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Green two cristina palacios aníbal abarca gil alberto padilla luengas federico casas ricardo vazquez alex napoli samuel casasola zamora Aventones mexico Growth"><div class="logo" style="background-image:url('http://aventones.com/wp-content/uploads/2011/08/aventones-página.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.aventones.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Aventones</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Cristina Palacios Aníbal Abarca Gil Alberto Padilla Luengas Federico Casas Ricardo Vazquez Alex Napoli Samuel Casasola Zamora<br><br>•<strong>Stage: </strong>Growth</div></div><div name="eachStartup" class="color-shape  two jennifer marzullo gregory gage timothy  marzullo Backyard Brains united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.backyardbrains.com/Home.aspx" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Backyard Brains</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jennifer Marzullo Gregory Gage Timothy  Marzullo<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Commerce two xavier texido césar soto Baytex S.A. chile "><div class="logo" style="background-image:url('http://baytex.net/en/src/img/img-baytex/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://baytex.net/en/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Baytex S.A.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Xavier Texido César Soto<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two frederico fernando cea skwara Bússola do Investidor brazil "><div class="logo" style="background-image:url('http://cdn2.bussoladoinvestidor.com.br/images/logo_bussola_novo6.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.bussoladoinvestidor.com.br/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Bússola do Investidor</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Frederico Fernando Cea Skwara<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two samuel adcock jonny miller BeHiring uk Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/d8/3e/9e/show_4e43fcfc7effe3_86563910.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://BeHiring.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>BeHiring</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Samuel Adcock Jonny Miller<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Cleantech Computing Information Technology  two pedro gray Belmont portugal Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/42/8d/97/show_4e41262f41df42_94088706.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.belmontelectronics.pt" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Belmont</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pedro Gray<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Web two alexandre guertin jay  gould Bespoke Mobility canada "><div class="logo" style="background-image:url('http://a2.twimg.com/profile_images/1439471886/Bespoke_New_Logo2.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.bespokemobility.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Bespoke Mobility</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alexandre Guertin Jay  Gould<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two matias  sjogren  Biofiltro Ltda chile "><div class="logo" style="background-image:url('http://www.fractalgames.com/bin/img/logo_biofiltro.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.biofiltro.co.nz/index.php" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Biofiltro Ltda</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Matias  Sjogren <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Bio two matias gutierrez Bioquimica.cl S.A. chile "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://bioquimica.cl/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Bioquimica.cl S.A.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Matias Gutierrez<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Digital Media two massimo  scapini  bNapkin united states Beta"><div class="logo" style="background-image:url('http://profile.ak.fbcdn.net/hprofile-ak-snc4/277040_262542107112536_1489844849_n.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://bnapkin.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>bNapkin</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Massimo  Scapini <br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Education Mobile two patrick kedziora Boilingice united states "><div class="logo" style="background-image:url('http://boilingice.com/wordpress/wp-content/themes/dfblog/images/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://boilingice.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Boilingice</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Patrick Kedziora<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two matthew austin clemens piffl BonoVerde united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>BonoVerde</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Matthew Austin Clemens Piffl<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Food two adam link jesper kampmann madsen BookBottles LLC united states "><div class="logo" style="background-image:url('http://bookbottles.com/');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://bookbottles.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>BookBottles LLC</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Adam Link Jesper Kampmann Madsen<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two danny fein Bunsen united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Bunsen</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Danny Fein<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance Web two adrien bustany jose pablo arellano andres arellano Buxus chile "><div class="logo" style="background-image:url('https://buxus.cl/wp-content/themes/buxus/img/logoLogin.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="https://buxus.cl/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Buxus</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Adrien Bustany Jose pablo Arellano Andres Arellano<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two antony evans jonny miller ChamaPro uk "><div class="logo" style="background-image:url('http://unbouncepages-com.s3.amazonaws.com/www.chamapro.com/ChamaPro_final_logo.original.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.chamapro.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>ChamaPro</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Antony Evans Jonny Miller<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Games Travel two mateusz Łapsa-malawski Chayamuni poland Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/cd/c9/79/show_4e4429dae04d84_65892532.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://chayamuni.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Chayamuni</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Mateusz Łapsa-Malawski<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two thiago cardoso Checkout10 brazil Just An Idea"><div class="logo" style="background-image:url('http://www.checkout10.com/_imagens/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.checkout10.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Checkout10</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Thiago Cardoso<br><br>•<strong>Stage: </strong>Just An Idea</div></div><div name="eachStartup" class="color-shape Green two francisco larios sanchez CI2T SL spain Growth"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/c5/39/46/show_4e12ffe5e576c3_98710243.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.ci2t.es" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>CI2T SL</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Francisco Larios Sanchez<br><br>•<strong>Stage: </strong>Growth</div></div><div name="eachStartup" class="color-shape  two deepkarn bedi adam dhanani gordon tindall david alvo Cloudeas LLC united states Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/42/cb/70/show_4e2e682ebeb386_70153602.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://cloudeas.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Cloudeas LLC</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Deepkarn Bedi Adam Dhanani Gordon Tindall David Alvo<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Web two mitul jain mihai voica prashant vaibhav CloudGate germany "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>CloudGate</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Mitul Jain Mihai Voica Prashant Vaibhav<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Entertainment  two gustavo vilgre la madrid juan melano Comenta.TV argentina Beta"><div class="logo" style="background-image:url('http://comenta.tv/images/comentatv.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://comenta.tv/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Comenta.TV</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Gustavo Vilgre La Madrid Juan Melano<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Mobile two elsa chang Community Hitch united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Community Hitch</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Elsa Chang<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two alex hughson Contractor Copilot canada "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.contractorcopilot.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Contractor Copilot</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alex Hughson<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce Web two vamshi mokshagundam ayan barua Credii india Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/17/61/cd/show_4e3f921da2def5_67098498.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Credii</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Vamshi Mokshagundam Ayan Barua<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two srinivasan rsudharshan s Cruns india "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Cruns</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Srinivasan RSudharshan S<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Fitness two michael green Day Zero Project new zealand Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/18/b2/78/show_4e3c9e7c31bbd8_04644299.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://dayzeroproject.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Day Zero Project</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Michael Green<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Computing  two camuel gilyadov Dazo israel Prototyping"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Dazo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Camuel Gilyadov<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Bio Web two guillermo medel roberto león jesper kampmann madsen Dentalink chile Growth"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/a3/a8/b1/show_4e20b075cdcdc0_02349810.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.dentalink.cl" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Dentalink</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Guillermo Medel Roberto León Jesper Kampmann Madsen<br><br>•<strong>Stage: </strong>Growth</div></div><div name="eachStartup" class="color-shape  two kemal levi victor gane adrian bowling george murphy DermLink united states "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/64/74/24/show_4e402bf0d31a39_08464206.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>DermLink</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kemal Levi Victor Gane Adrian Bowling George Murphy<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two stephen hazeltine gustavo veloso bernardo porto DeskMetrics brazil Profitable"><div class="logo" style="background-image:url('http://deskmetrics.com/static/img/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://deskmetrics.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>DeskMetrics</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Stephen Hazeltine Gustavo Veloso Bernardo Porto<br><br>•<strong>Stage: </strong>Profitable</div></div><div name="eachStartup" class="color-shape  two william wood Dot View united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Dot View</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>William Wood<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile Web two robert dombkowski kathryn davies Ebiquous Inc. united states "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/7d/01/09/show_4e709a88a11217_52964400.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Ebiquous Inc.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Robert Dombkowski Kathryn Davies<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Computing Entertainment Gaming Mobile  two nicolas palacios ePig Games chile Profitable"><div class="logo" style="background-image:url('http://www.fractalgames.com/bin/img/logo_epig.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.epiggames.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>ePig Games</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nicolas Palacios<br><br>•<strong>Stage: </strong>Profitable</div></div><div name="eachStartup" class="color-shape Travel Games two gabriela mejia miguel torres luis loaiza andres granda ashwin bhambri luis bajana Escapeswithyou.com equador Prototyping"><div class="logo" style="background-image:url('http://escapeswithyou.com/images/escapes.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.escapeswithyou.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Escapeswithyou.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Gabriela Mejia Miguel Torres Luis Loaiza Andres Granda Ashwin Bhambri Luis Bajana<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two weiting tan Espy singapore "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Espy</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>weiting tan<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Travel two juan apparcel matías apparcel alejandro josé allende lecaros Find Your Place chile Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/42/12/d4/show_4e44668a06f447_33688190.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Find Your Place</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Juan Apparcel Matías Apparcel Alejandro José Allende Lecaros<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two sara zaccaro kevin kent First Born united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>First Born</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sara Zaccaro Kevin Kent<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two ronan o&#039;malley jesper kampmann madsen Fixational other Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/00/42/5d/show_4e3f978c08d321_29319875.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Fixational</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ronan O&#039;Malley Jesper Kampmann Madsen<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Internet  two salvador de la barrera Flipter china Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/96/77/ac/show_4e25430098bf37_17087881.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://flipter.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Flipter</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Salvador de la Barrera<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Social Entertainment two wan koe loo matthew phiongazril ezry azami sourav ray brandon ong kai feng chew Flvrd malaysia Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/75/9d/d2/show_4dde3abdc5d945_85672195.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://flvrd.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Flvrd</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Wan Koe Loo Matthew Phiongazril ezry azami Sourav Ray Brandon Ong Kai Feng Chew<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Education Information Technology Internet Lifestyle  two jennifer turliuk Founder2Founder canada Prototyping"><div class="logo" style="background-image:url('http://www.founder2founder.org/uploads/7/9/1/9/7919300/2045627.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.founder2founder.org" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Founder2Founder</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jennifer Turliuk<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Travel  two natalia nilsson mathias hagstrøm ture strange Frontierre chile Prototyping"><div class="logo" style="background-image:url('http://frontierre.com/frontierre.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://frontierre.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Frontierre</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Natalia Nilsson Mathias Hagstrøm Ture Strange<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two dain lewis eleonora sharef nicholas sedlet Furnitrax united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Furnitrax</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Dain Lewis Eleonora Sharef Nicholas Sedlet<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two petar vujosevic kedar iyer GapJumpers chile Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/e4/ec/f4/show_4e5029f1a9a200_24875087.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://gapjumpers.me" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>GapJumpers</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Petar Vujosevic Kedar Iyer<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Education Internet Media  two sejal hathi tara roberts girltank united states Beta"><div class="logo" style="background-image:url('http://www.girltank.org//images/girltank.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.girltank.org" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>girltank</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sejal Hathi Tara Roberts<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Social Web two denis todirica alexandru palade  marius ungureanu Glazeon romania "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/34/0a/22/show_4e3f2b9646b3e3_73840699.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Glazeon</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Denis Todirica Alexandru Palade  Marius Ungureanu<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Computing Information Technology Internet Mobile  two steve burchell james burchell alex riabov GoGoOffice united states Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/e0/22/44/show_4e44233256ce13_06181803.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.gogooffice.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>GoGoOffice</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Steve Burchell James Burchell Alex Riabov<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Entertainment Games Mobile two andrew cross, jonathan wong, sergei bezborodko GooseChase Adventures canada Profitable"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/58/ce/50/show_4dfe58bc1ecbf4_56476796.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://goosecha.se" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>GooseChase Adventures</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Andrew Cross, Jonathan Wong, Sergei Bezborodko<br><br>•<strong>Stage: </strong>Profitable</div></div><div name="eachStartup" class="color-shape  two manuel pinto israel nacaxe graciane  martins GPNX brazil "><div class="logo" style="background-image:url('http://www.gpnxgroup.com/files/theme/Gpnx_logo_82pxH.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.gpnxgroup.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>GPNX</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Manuel Pinto Israel Nacaxe Graciane  Martins<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web Education two ari shomair Gradematic.com canada Just An Idea"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://gradematic.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Gradematic.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ari Shomair<br><br>•<strong>Stage: </strong>Just An Idea</div></div><div name="eachStartup" class="color-shape  two carlos contreras Grifoo Inc chile "><div class="logo" style="background-image:url('http://www.grifoo.com/images/new/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Grifoo Inc</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Carlos Contreras<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two julio camarena  tyler ulrich graciane  martins Guali Mexico mexico Profitable"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/47/7c/0f/show_4e48ed47ca2139_37694920.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://guali.com.mx" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Guali Mexico</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Julio camarena  Tyler Ulrich Graciane  Martins<br><br>•<strong>Stage: </strong>Profitable</div></div><div name="eachStartup" class="color-shape  two anne-sophie dutat GuiaVulevu.com france "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.GuiaVulevu.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>GuiaVulevu.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Anne-Sophie Dutat<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two charles van norman Hactus united states Prototype"><div class="logo" style="background-image:url('http://www.hactus.com/ui/pottedlogo.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.hactus.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Hactus</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Charles Van Norman<br><br>•<strong>Stage: </strong>Prototype</div></div><div name="eachStartup" class="color-shape  two sharon paul ryan lou  HelloWorldHQ singapore "><div class="logo" style="background-image:url('http://helloworldhq.com/img/hello-logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://helloworldhq.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>HelloWorldHQ</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sharon Paul Ryan Lou <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce two rodolfo del valle nelson letelier Impresionantes chile Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/68/91/59/show_4e3b124af30aa0_82459173.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Impresionantes</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Rodolfo del Valle Nelson Letelier<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Biotech Food and Drink Health Information Technology Internet Nanotech  two mário lavado maria joao marquessme bs Inocrowd portugal Growth"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/2d/67/06/show_4e43bfee3b8561_84423637.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.inocrowd.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Inocrowd</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Mário Lavado Maria Joao Marquessme bs<br><br>•<strong>Stage: </strong>Growth</div></div><div name="eachStartup" class="color-shape Web Travel two pablo buzio johanna molina david lloyd Intern Latin America chile "><div class="logo" style="background-image:url('http://www.fractalgames.com/bin/img/logo_intern.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://internlatinamerica.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Intern Latin America</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pablo Buzio Johanna Molina David Lloyd<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two tim mc cormick Interviewfest united states "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/35/81/2b/show_4e3b3f729b0c82_01107665.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Interviewfest</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Tim Mc Cormick<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile Web two michael waschnig jonny miller IrisRose uk "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/4e/6b/fb/show_4e394cc7646662_64417016.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>IrisRose</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Michael Waschnig Jonny Miller<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two luis alberto del castillo david cuadrado juliana dávila rodríguez iWin Platform Inc. colombia Just An Idea"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>iWin Platform Inc.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Luis Alberto Del Castillo David Cuadrado Juliana Dávila Rodríguez<br><br>•<strong>Stage: </strong>Just An Idea</div></div><div name="eachStartup" class="color-shape Fitness Social Web Mobile two jeremy melul, youssef chaker, mehdi djabri Jogabo uk Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/5e/1a/86/show_4e3fe8e0e515e6_60858983.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://jogabo.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Jogabo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jeremy Melul, Youssef Chaker, Mehdi Djabri<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape  two antti virolainen anna korolyuk juho makkonen  mohamed al hajri Kassi finland "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/5f/9f/ec/show_4e44c3b6a50fb5_10831553.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Kassi</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Antti Virolainen Anna Korolyuk Juho Makkonen  Mohamed Al Hajri<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Entertainment Web two hugo garcia lopez andres garcia KeyEffx equador Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/2e/56/af/show_4e46ac289004a6_58346669.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.keyeffx.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>KeyEffx</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Hugo Garcia Lopez Andres Garcia<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape  two alejandro russo Klooff chile "><div class="logo" style="background-image:url('http://www.fractalgames.com/bin/img/logo_klooff.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://klooff.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Klooff</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alejandro Russo<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education Food travel two pia bustos jerry lakercarlos briceño ana sousa Kodkod, Lugar de Encuentros chile Growth"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.kodkod.net" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Kodkod, Lugar de Encuentros</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Pia Bustos Jerry Lakercarlos briceño Ana Sousa<br><br>•<strong>Stage: </strong>Growth</div></div><div name="eachStartup" class="color-shape  two cristian wolleter pedro silva KSW chile Just An Idea"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/f7/91/f9/show_4d804e0f758240_87535369.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>KSW</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Cristian Wolleter Pedro Silva<br><br>•<strong>Stage: </strong>Just An Idea</div></div><div name="eachStartup" class="color-shape Education Web two ben kaplan Learndipity, Inc. united states "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/f7/91/f9/show_4d804e0f758240_87535369.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Learndipity, Inc.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ben Kaplan<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two rachel  tatem Lendalo united states "><div class="logo" style="background-image:url('http://www.lendalo.com/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.lendalo.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Lendalo</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Rachel  Tatem<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Education two simon asta Lincipit switzerland Just An Idea"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.lincipit.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Lincipit</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Simon Asta<br><br>•<strong>Stage: </strong>Just An Idea</div></div><div name="eachStartup" class="color-shape Entertainment Food and Drink Travel  two nicolás brown jorge chartier Loogares.com chile Beta"><div class="logo" style="background-image:url('http://www.loogares.com/images/mail/logo-loogares.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://loogares.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Loogares.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nicolás Brown Jorge Chartier<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Social Web two danilo durazzo Mappyfriends argentina "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/33/71/9f/show_4adcc68410b2c7_33940557.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Mappyfriends</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Danilo Durazzo<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two jonny miller dean fischer dorothy sanders mohamed al hajri Maptia uk "><div class="logo" style="background-image:url('http://www.maptia.com/themes/precision/css/images/logo-maptia.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.maptia.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Maptia</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jonny Miller Dean Fischer Dorothy Sanders Mohamed Al Hajri<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education Finance two elizabeth taylor paul taylor Matchfund united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.matchfund.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Matchfund</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Elizabeth Taylor Paul Taylor<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Health Mobile  two sandaruwan gunathilake nayana somaratna orlando rocha Medical Joyworks sri lanka Growth"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/4c/e2/f0/show_4e4567c7bf6ce3_52025359.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.medicaljoyworks.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Medical Joyworks</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sandaruwan Gunathilake Nayana Somaratna Orlando Rocha<br><br>•<strong>Stage: </strong>Growth</div></div><div name="eachStartup" class="color-shape Entertainment Social Games two michi kono brian kim  Memecup united states Prototyping"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Memecup</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Michi Kono Brian Kim <br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Internet  two federico vega nicolas vega diana sanchez mohamed al hajri  jesper kampmann madsen josé angel yánez MercadoTransporte Ltd uk Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/29/8d/6a/show_4e38719a1a9b59_25883478.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.MercadoTransporte.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>MercadoTransporte Ltd</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Federico Vega Nicolas Vega Diana Sanchez Mohamed Al Hajri  Jesper Kampmann Madsen José Angel Yánez<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Web Legal two james kennedy MineralRightsWorldwide.com ireland "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/29/8d/6a/show_4e38719a1a9b59_25883478.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>MineralRightsWorldwide.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>James Kennedy<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two colin fain Miro Analytics united states "><div class="logo" style="background-image:url('http://miroanalytics.com/images/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://miroanalytics.com/" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Miro Analytics</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Colin Fain<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Entertainment two roberto  burgos javier vergara petrescu Monitor Emergente chile "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Monitor Emergente</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Roberto  Burgos Javier Vergara Petrescu<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two langdon page Monkey Puzzle Media/Araucaria Films united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Monkey Puzzle Media/Araucaria Films</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Langdon Page<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Retail, Mining two nicolás martelanz gastón dussaillant Motion Displays chile Prototyping"><div class="logo" style="background-image:url('http://delegadosdcc.ing.puc.cl/wp-content/uploads/2011/11/md.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Motion Displays</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nicolás Martelanz Gastón Dussaillant<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two krista c Mozaico united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Mozaico</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Krista C<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Fitness two abhinav krishna akash kumar My Fitness Wallet singapore "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>My Fitness Wallet</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Abhinav Krishna Akash Kumar<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two jens kasemets antti virolainen Mydognotes estonia "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Mydognotes</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jens Kasemets Antti Virolainen<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance two nicolas  rouanet mayel de borniol MyOwnWinery france "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>MyOwnWinery</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nicolas  Rouanet Mayel de Borniol<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Health Internet Lifestyle  two petr base, kristyna limanova Organic Society Ltd. czech republic Beta"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.bio.cz - beta" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Organic Society Ltd.</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Petr Base, Kristyna Limanova<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Web Travel  two sarah eaglesfield suzanne deliscar jonny miller OwnersAbroad uk Profitable"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/ef/8f/f8/show_4e380a6f36d1b4_05234523.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://ownersabroad.org" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>OwnersAbroad</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sarah Eaglesfield Suzanne Deliscar Jonny Miller<br><br>•<strong>Stage: </strong>Profitable</div></div><div name="eachStartup" class="color-shape  two grant devine Patagonia Sostenible united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Patagonia Sostenible</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Grant Devine<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Entertainment Food Web two vena an shane sun tao huang orlando rocha PerfectHitch united states Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/23/86/89/show_4e24a4eda433b2_70129816.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.perfecthitch.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PerfectHitch</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Vena An Shane Sun Tao Huang Orlando Rocha<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape  two taylor moore PixelSteam canada "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PixelSteam</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Taylor Moore<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Real_Estate Retail two brian bowers PopUp Leasing united states Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/68/b9/d2/show_4e3cceef4cba23_05049794.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.popupleasing.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PopUp Leasing</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Brian Bowers<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape  two rebecca west PorMano united states Prototyping"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PorMano</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Rebecca West<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Games Commerce two abhinav sarangi PriceShred.com india "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PriceShred.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Abhinav Sarangi<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two steven faulkner PrinterBot united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>PrinterBot</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Steven Faulkner<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Finance two jared broad QuantConnect chile Prototype"><div class="logo" style="background-image:url('http://quantconnect.com/i/logo.png');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>QuantConnect</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jared Broad<br><br>•<strong>Stage: </strong>Prototype</div></div><div name="eachStartup" class="color-shape Computing Information Technology  two felipe muñoz daniel guajardo felipe ríos nicolás brownjose mosquera jorge chartier Qubity chile Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/45/b5/68/show_4e2ecc64b59b32_84719408.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://qubity.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Qubity</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Felipe Muñoz Daniel Guajardo Felipe Ríos Nicolás Brownjose mosquera Jorge Chartier<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Mobile two emily toop jonny miller Radical Robot Ltd uk "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Radical Robot Ltd</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Emily Toop Jonny Miller<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two juan pablo torres Reacción chile "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Reacción</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Juan Pablo Torres<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Green NGO two mauricio torres benavides akash jain john kyndt Reko Global Water united states "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/3f/f2/16/show_4e452717401172_96137232.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Reko Global Water</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Mauricio Torres Benavides Akash Jain John Kyndt<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two daniel levin heinrich klobuczekgary krane Relationship Technologies Inc united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Relationship Technologies Inc</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Daniel Levin Heinrich Klobuczekgary krane<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Product two anamika chourasia anurag chourasia gary rebeiro brajeshwar oinam RFEyeD india Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/80/c8/75/show_4e43ffbbbae458_03284630.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>RFEyeD</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Anamika Chourasia Anurag Chourasia Gary Rebeiro Brajeshwar Oinam<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Information Technology  two andrew peek evan dinsmore mandhir bajaj Rocketr canada Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/d5/88/ad/show_4e431a65de5e78_95007576.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://rocketr.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Rocketr</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Andrew Peek Evan Dinsmore Mandhir Bajaj<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Energy Green two eden full  Roseicollis Technologies canada "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Roseicollis Technologies</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Eden Full <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape  two samantha o&#039;keefe Safe Water World united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Safe Water World</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Samantha O&#039;Keefe<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two ozan onay Sail united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Sail</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ozan Onay<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Entertainment Information Technology Mobile Travel  two christian daly eric kriegstein rikin mantriucla test  SeatUP united states Prototyping"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SeatUP</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Christian Daly Eric Kriegstein Rikin Mantriucla test <br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Commerce Legal two alfredo sfeir Shellcatch united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Shellcatch</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alfredo Sfeir<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Financial  two nancy wu shagun malhotra karina koloch ashwin bhambri rikin mantri SkyStem LLC united states Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/83/63/a3/show_4e3f54dc646d96_43571718.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.skystems.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SkyStem LLC</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nancy Wu Shagun Malhotra Karina Koloch Ashwin Bhambri Rikin Mantri<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape NGO two thomas grandperrin jean-christophe vasselonmayel de borniol SmartAgro france "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/29/2c/67/show_4e440e2c22a710_88022590.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SmartAgro</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Thomas Grandperrin Jean-Christophe VASSELONMayel de Borniol<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Fitness two jacklyn giron christopher lukic Smashrun united states Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/39/d9/9e/show_4e41d7ed41ca35_88401378.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://smashrun.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Smashrun</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Jacklyn Giron Christopher Lukic<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Energy Green two julian heere marijn berk SOLR netherlands Just An Idea"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SOLR</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Julian Heere Marijn Berk<br><br>•<strong>Stage: </strong>Just An Idea</div></div><div name="eachStartup" class="color-shape Social two ethan montoya StreetMason united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>StreetMason</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Ethan Montoya<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Mobile Web Commerce two kyran dale ian ozsvald jonny miller StrongSteam uk "><div class="logo" style="background-image:url('http://dl.dropbox.com/u/1314015/StrongSteam-Moo_square.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>StrongSteam</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kyran Dale Ian Ozsvald Jonny Miller<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Product Entertainment two juan salas  StudioSnaps chile "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>StudioSnaps</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Juan Salas <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two nithya dayal avinasha shastry prateek dayal SupportBee india "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>SupportBee</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nithya Dayal Avinasha Shastry Prateek Dayal<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce two patrick bernhard arik meyer lydia schueltken Synergos germany "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Synergos</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Patrick Bernhard Arik Meyer Lydia Schueltken<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education Web two nicte mendoza joshua sierles  TeachMySkills united states Prototyping"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://teachmyskills.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>TeachMySkills</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Nicte Mendoza Joshua Sierles <br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Games two alexey sudachen olga marchevskaya Teggo.cl chile Beta"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.teggo.cl" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Teggo.cl</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alexey Sudachen Olga Marchevskaya<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Social Retail two christian o&#039;connell The Scene united states "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/da/3a/08/show_135d37c927d22a54aea808c9a390da64.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>The Scene</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Christian O&#039;Connell<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Entertainment two alejandra negrete roberto gluck demian renzulli nabomita mazumdar TheSocialRadio argentina "><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/f3/59/12/show_4e376c406868e6_93250307.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>TheSocialRadio</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Alejandra Negrete Roberto Gluck Demian Renzulli Nabomita Mazumdar<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Education two frederick hale schneider TongueHackr.com united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>TongueHackr.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Frederick Hale Schneider<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Travel two kenny omanovic Travel Stak australia "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Travel Stak</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Kenny Omanovic<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Games two manuela arnedo  Trendsetter argentina "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Trendsetter</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Manuela Arnedo <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Entertainment Web two sean  collins david quail TribeCastr canada "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>TribeCastr</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Sean  Collins David Quail<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Commerce Web two oscar rodriguez james freedman aponte david alvo TusTrabajitos.com united states Beta"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.tustrabajitos.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>TusTrabajitos.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Oscar Rodriguez James Freedman Aponte David Alvo<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Energy Green NGO two justin bates michael emo blake ringeisen  Visqu united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Visqu</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Justin Bates Michael Emo Blake Ringeisen <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Social Retail two stefan paulsen alejandro matamala sebastián rodríguez  césar soto vitryn.com chile Prototyping"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.vitryn.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>vitryn.com</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Stefan Paulsen Alejandro Matamala Sebastián Rodríguez  César Soto<br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Travel Retail two chris crompton WanderDeal united states Beta"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/c6/4d/68/show_4e41ed484109e1_63100236.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://WanderDeal.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>WanderDeal</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Chris Crompton<br><br>•<strong>Stage: </strong>Beta</div></div><div name="eachStartup" class="color-shape Travel two joe kiernan thomas lyle Waypoint Labs united states "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Waypoint Labs</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Joe Kiernan Thomas Lyle<br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Web two bernardo joselevich  Whelse argentina Prototyping"><div class="logo" style="background-image:url('http://cdn.younoodle.com/pictures/57/06/c7/show_4e6404665eda29_79002919.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="http://www.whelse.com" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Whelse</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Bernardo Joselevich <br><br>•<strong>Stage: </strong>Prototyping</div></div><div name="eachStartup" class="color-shape Commerce Mobile two erisvaldo junior marcus oliveira  Yupi Studios brazil "><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">two</div><a href="" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Yupi Studios</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>Erisvaldo Junior Marcus Oliveira <br><br>•<strong>Stage: </strong></div></div><div name="eachStartup" class="color-shape Legal Two peterjan celis Judge Me belgium Idea"><div class="logo" style="background-image:url('http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg');background-size:100%;background-repeat:no-repeat;background-position:center;"></div><div class="round">Two</div><a href="http://www.judge.me" target="_blank"><div class="nameContainer">
								<div class="name jtextfill">
									<span>Judge Me</span>
								</div>
							</div><div class="description"><br><br><br>•<strong>Founders: </strong>PeterJan Celis<br><br>•<strong>Stage: </strong>Idea</div></div>	
			<!-- END raw HTML -->
	  
	
	  
	  
	</div> <!-- /#container -->
	

</div> <!-- /containerBox / I hate CSS -->
	<div id="loading">Loading Startups ... </div>

	<!-- JQuerY -->
		<script src="http://www.fractalgames.com/bin/js/jquery-1.6.4.min.js"></script>
		
	<!-- Text Fill --> 
		<script src="http://www.fractalgames.com/bin/js/jquery-textFill-0.1.js"></script>
		
	
	<!-- Isotope -->
		<script src="http://www.fractalgames.com/bin/js/jquery.isotope.js"></script>

	<!-- Infinite Scroll -->
		<script src="http://www.fractalgames.com/bin/js/infinite.scroll.js"></script>


	<!-- Jeditable -->
		<script src="http://www.fractalgames.com/bin/js/jquery.jeditable.js" type="text/javascript" charset="utf-8"></script> 

<script>

	// infinitescroll() is called on the element that surrounds 
	// the items you will be loading more of
	  $('#container').infinitescroll({
	 
	    navSelector  : "div.navigation",            
	                   // selector for the paged navigation (it will be hidden)
	    nextSelector : "div.navigation a:first",    
	                   // selector for the NEXT link (to page 2)
	    itemSelector : "#content div.post"          
	                   // selector for all items you'll retrieve
	  });


	function makeSmaller() {
		var allStartups = document.getElementsByName('eachStartup');
		allStartups[0].style.width=20;
		for (var i=0; i<allStartups.length; i++)
		{
			allStartups[i].style.width=20;		
		}

/*		var allStartups = document.getElementsByTagName("color-shape")[0];
		//allStartups.style.width=200;
		alert('allstartups[0] was '+allStartups.style.width);
		for (var each in allStartups) {
			each.style.width=200;
		}*/
	}
	
	var introOpen = true;
	function initialize() {
		GoToTop();
		showContainer();
		
//		TurnAnimation("off");
		

		// var t=setTimeout("showContainer()",1500);
	}
	
	function TurnAnimation(onOff){
		var startups = document.getElementsByName("eachStartup");
		if (onOff == "on") {
			for (var i=0; i<startups.length; i++) {
				var pattern = new RegExp('\\s*' + 'no-transition' + '\\s*');
		        startups[i].className = startups[i].className.replace(pattern, ' ');
				// alert('startup classname: '+startups[i].className);
				//alert('startup '+startups[i].style.display);
			}
		}
		else {
		
			for (var i=0; i<startups.length; i++) {
				startups[i].className += " no-transition";
				// alert('startup classname: '+startups[i].className);
				//alert('startup '+startups[i].style.display);
			}
		}
	}
	
	
	function showContainer() {
	
		// turn off transitions for an instant container
        /*$('#container').css('-moz-transition','none');
        $('#container').css('-webkit-transition','none');
        $('#container').css('-o-transition','none');
	    $('#container').css('transition','none'); 
	*/
		document.getElementById('container').style.display='block';
		document.getElementById('loading').style.display='none';
		document.getElementById('plasticWrap').style.display='none';
		}
		
	function expandOption(divToExpand,numRows) {

	      var $optionSet = divToExpand.find('a').first(); // ugly, since this checks every time the user goes in, this could be stored in boolean. // no meh! I am gonna do it now. Oops, can't store boolean values here since this has to work for each filter. tldc. too long didn't code
	      if ($optionSet.attr('name') == 'any' && $optionSet.hasClass('selected')) // if an option was set, don't re-adjust the window, we are using it
	      {
	      	// firstTime = false;
	  		divToExpand.animate({
			     width: "240px",
			     height: numRows*30+20+"px",
			     left: "-25"
			     // top: "-=25"
	     		 // background-color:rgba(1,1,1,1);
			    }, 0, function() {
			    // Animation complete.
			  });
	  		$('#'+divToExpand.attr('id')+'_label').css('display','none');
	  		$('#'+divToExpand.attr('id')+'_options').css('display','block');
	  	}
	}
	
	function contractOption(divToContract) {		      
      if (divToContract.find('a').first().hasClass('selected')) // if an option was set, don't close the window, we are using it
	  	{
  		  //firstTime = true;
  		  divToContract.animate({
		     width: "190px",
		     height: "27px",
		     left: "0"
		     //top: "+=25"

		  }, 0, function() {
  			$('#'+divToContract.attr('id')+'_label').css('display','block');
  			$('#'+divToContract.attr('id')+'_options').css('display','none');
		    // Animation complete.
		  });
  		}
	}
	
	function GoToTop() {
	   $('html, body').animate({ scrollTop: 0 }, 0); // scroll to the top of the page to see new results
	   }
	
   function CloseIntro() {
   		introOpen = false;
   		//('#introContainer').isotope('destroy'); // not working, says can't call destroy before init?
		$('#intro').css('display','none');
		$('#intro').css('height','0').css('width','0').css('margin','0 0 -6px 0'); // hack to prevent this div from showing up in isotope
		
	}

	


	
  $(function(){
 
	  // TextFill 
	  // - Jquery Automatic text resizer for startup titles (Short titles can be bigger
	  $.fn.jtextfill = function(options) {
	  	alert('started');
        var fontSize = options.maxFontPixels;
        var ourText = $('span:visible:first', this);
        var maxHeight = $(this).height();
        var maxWidth = $(this).width();
        var textHeight;
        var textWidth;
        do {
            ourText.css('font-size', fontSize);
            textHeight = ourText.height();
            textWidth = ourText.width();
            fontSize = fontSize - 1;
            alert('doing');
        } while ((textHeight > maxHeight || textWidth > maxWidth) && fontSize > 3);
        return this;
    }
    

	  
  
  
  // prevent clickability on anything until page is loaded.
  
  /*
  opacity: 0.25,
    left: '+=50',
    height: 'toggle'
  }, 5000, function() {
    // Animation complete.
  });
  */
  	// Filter styles
  		var firstTime = true;
	  	// Stage
	  	var timeSinceChanged = 0;
	  	
	  	
	  	$('#filter_stage').mouseenter(function(){
	  	 	expandOption($(this),2);
	  	});
	  	
	  	$('#filter_stage').mouseleave(function(){
			contractOption($(this));
	  	});
	
		// Investment
	  	$('#filter_investment').mouseenter(function(){
	  	 	expandOption($(this),2);
	  	});
	  	$('#filter_investment').mouseleave(function(){
			contractOption($(this));
	  	});  	
	
	  	// Industry  	
	  	$('#filter_industry').mouseenter(function(){
	  	 	expandOption($(this),3);
	  	});
	  	
	  	$('#filter_industry').mouseleave(function(){
			contractOption($(this));
	  	});  	
  	
  	
  
  	// Isotope stuff
  	var firstRun = true;
 	var selector = "";
    var manualContents ="";
    var $container = $('#container'),
        filters = {};

    $container.isotope({
      animationOptions: {
	     duration: 250,
	     easing: 'linear',
	     queue: false
	   },
	  animationEngine: 'css',
      itemSelector : '.color-shape',
      masonry: {
        columnWidth: 30.8
      }

	  
    });
    
	// remove intro div
	$('#introClose').click(function(){
		CloseIntro();
		FilterNow();
		})

    // filter buttons
    $('.filter a').click(function(){
    
    	// TODO: if firsttime
    	if (introOpen == true)
	    	CloseIntro();
    	
      var $this = $(this);

		// Get the filter group
      var $optionSet = $this.parents('.option-set');


      // don't proceed if already selected, unless this is a 'multiple' class
      if ( $this.hasClass('selected') && !$optionSet.hasClass('multiple')) {
        return;
      }
      
      // deselect 'any', in any case .. heh
      $optionSet.find('a').first().removeClass('selected');
      

      // remove all selected classes, but only if 'any' was not selected and 'multiple' was not a class
      if ($this.attr('name') == 'any' || !$optionSet.hasClass('multiple'))
      { 
      	console.log('removing all selected classes');
      	$optionSet.find('.selected').removeClass('selected');
	  }
	  

	  // IF this is a multiple filter AND you deselected one of 2 or more selected filters, deselect it.
	  if ($optionSet.hasClass('multiple') && $optionSet.find('.selected').length >= 2 && $this.hasClass('selected')) {
    	console.log('removing this selected class');
	  	$this.removeClass('selected');
	  	}
	  else
	      $this.addClass('selected');
      
      
      
      
      // Filters
      
      
      // store filter value in object
      // i.e. filters.color = 'zero'
      var group = $optionSet.attr('data-filter-group');
      
      // clear all filters (yes, filters[group] (should have) already existed, using group=optionset.attr just got the reference)
  		filters[ group ] = '';
  		
  	  // repopulate filters with any "selected" values

    	
    	$optionSet.find('.selected').each(function(thisSelected){
    		filters[group] += $(this).attr('data-filter-value');
    		
    		});
    
      
      // if multiple is selected, add the filter value (instead of replacing the old value) && if this isn't the first value
      /*
      if ($optionSet.hasClass('multiple') && filters[ group ] != undefined) 	
      {
      	if ($this.hasClass('selected')) { //also check to make sure we didn't DESEELCT this filter on click 
      		
      		// Check to see if the fitler already exists in the 'filters' object.
      		var addThis = true;
      		for (var checkDupes in filters) {      		
      			if ($this.attr('data-filter-value') == filters[checkDupes])
      				addThis = false;
			}
			if (addThis == true) // if not, go ahead and add it.
	      		filters[ group ] += $this.attr('data-filter-value');
	    
	    // if any was selected, make sure we remove all filters from 'filters' object.  		
      		if ($this.attr('name') == 'any') {
	      		filters[ group ] = '';
	      		console.log('it was any');
      		}
  		} else { // we deselected this filter, so remove it
	  		// i hate for loops in excess
	  		for (var match in filters) {      		
      			if ($this.attr('data-filter-value') == filters[match])
					filters[match]='';
			}
			
  		}
      	
  	  }
      // class was not multiple, or it was the FIRST time a multiple filter was selected, 
      // so set the filter to the single value of what the user clicked
      else 
      	filters[ group ] = $this.attr('data-filter-value');
      */
      
      
      // convert object into array
      var isoFilters = [];
      for ( var prop in filters ) {
        isoFilters.push( filters[ prop ] )
      }
      
		// Get the contents of the type-to-search too

      selector = isoFilters.join('');
	  FilterNow();

      return false;
    });

	// CVN - Filter as you type  
		// By Founder
		
		
		$("#manualSearch").keyup(function(e){
			manualContents = $("#manualSearch").val().toLowerCase();
			if (manualContents.length>0)
				manualContents = "."+manualContents.split(' ').join('.');
			FilterNow();
		});
	
		// Reset origin	
		$("#resetManualSearch").click(function(){
			manualContents = '';
			$("#manualSearch").val("");
			FilterNow();
		})	

	
	function FilterNow() {
		filterTerms = manualContents + selector;
		//alert('filterterms: '+filterTerms);
		$container.isotope({ filter: filterTerms });
		document.getElementById("debugDisplay").innerHTML = filterTerms;
		GoToTop();

	}
	
	// TODO
	
	// Problem: 
		//transitions are too slow
		// Solution: Turn off transitions or...
			// Do a quick calculation based on presentation order of isotope before and after a filter is applied
			// For visible or soon to be visible elements, apply transition
			// For off screen elements apply instant transition
		
	// Autocomplete
		// When typing Founder name, autocomplete vs a list of all known founders etc	


});
	
	
	$(document).ready(function() {
	  // TextFill - Jquery Automatic text resizer for startup titles (Short titles can be bigger)
	    $('.jtextfill').delay(10000).textfill({ maxFontPixels: 36 });
	});

	
	
</script>

<!-- open ID sign in -->

<script type="text/javascript">
(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    window.janrain.settings = {};
    
    janrain.settings.tokenUrl = 'http://www.startupgrid.net/auth.php';

    function isReady() { janrain.ready = true; };
    if (document.addEventListener) {
      document.addEventListener("DOMContentLoaded", isReady, false);
    } else {
      window.attachEvent('onload', isReady);
    }

    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.id = 'janrainAuthWidget';

    if (document.location.protocol === 'https:') {
      e.src = 'https://rpxnow.com/js/lib/startupgrid/engage.js';
    } else {
      e.src = 'http://widget-cdn.rpxnow.com/js/lib/startupgrid/engage.js';
    }

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(e, s);
})();
</script>
<!--/ open ID -->
  

</body>
</html>