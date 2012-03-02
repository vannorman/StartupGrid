<?php 
	// Get Session information to see if the user is logged in as Admin.
	session_start();
	session_id($_GET['sessionID']);
	$login =$_SESSION['login'];
	$secretKey = $_SESSION['secretKey'];

	// If we didn't get here from the right place, redirect away
	if ( 	($secretKey != 'T@_#PFO;mes98;g34ytj@') // god, is this terrible
			|| ($login != 'true')	) 
	{
		//echo 'sessionID, secretKey, and login were '.Session_Name().'='.Session_ID().', '.$_SESSION['secretKey'].', '.$_SESSION['login'];
		//$alert='failed. login was '.$login.'. secretkey was '.$secretKey;
		//echo $alert;
		//echo '<script type="text/javascript">alert('.$alert.');</script>';
		header( 'Location: http://www.fractalgames.com/not_startupgrid/index.php' );
	}
	
	
			 
	else 
	{
				
		
		
		
		// allow click to edit on all fields
		// store user in js variable
		
		// reset headers

?>





<!doctype html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- 

Hello curious coder! Thanks for viewing my source. I apologize for the tangled behemoth of spaghetti code you may be about to explore.
This project started because I saw a need for it in my experience in the StartupChile incubator in December 2011.

All of this is open source, so feel free to copy and paste (hell, that's what *I* sure did.) I hope this is a useful tool for you. If you'd like to make it better, or help out in any way, please contact me:

ccvannorman is the address. g-mail is the client.

Cheers!

-->
<html lang="en">
<head>
  

  <title>Startup Grid: &middot; The #1 Source for Startups</title>
  
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- scripts at bottom of page -->  
 	<!-- coda sucks and won't load my folder css -->
	 	<link rel="stylesheet" href="css/style.css" />
	 	<link rel="stylesheet" href="css/admin.css" />
	 	  
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
	
		<style>
			.click1 {
				word-wrap:normal;
				white-space: normal;
				
			}
		</style>


</head>




<body onload="initialize()" class="demos ">
	
 	<div id="debugDisplay" style="position:fixed;top:0;right:0;width:200;height:50;border:1px solid red;z-index:1000000;">
 	
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
	
	<!--div id="FilterTopWhitespace"></div-->

	<!--div id="topContainer" class="roundedBig"-->
	<!-- div id="titleTagline">Welcome to the Grid.</div>
	<div id="titleDescription">Use the filters to search our startup database. You are on your way to finding your next job, co-founder, idea, or investment.</div>			-->
	
	
		<!-- top message bar -->
		<div id="topbar">Just Added to the Grid: StartupChile companies.
			<div id="topbar_close"></div>
		</div>	
		
		
	<div id="FilterContainerIHateCSS">



	

		<div id="Filter">
			<!-- buttons -->	
				<div id="hideFilters" class="button2">Hide</div>
				<div id="showFilters" class="button2">Show</div>

	
			<div id="AdminWelcome">
			
				<div id="AdminWelcomeTitle">StartupGrid Admin</div>
					<div id="AdminWelcomeBody"><p class="editable_textarea"> Welcome! Find your company with Search, then click "Claim". You can also make changes to any company here, but please ensure your changes are accurate. Incorrect changes will be discarded. Thanks -- Charles</p></div>
			
			</div>
			
		<!-- buttons -->
			<div id="contact" class="button"><a href="mailto:charles@startupgrid.net">
				Contact</a>
			</div>
	
			<div id="login" class="button"><a href="http://fractalgames.com/not_startupgrid/index.php">
				Log out</a>
			</div>
	
	
			<div id="StartupGridLogoContainer">
				<div id="StartupGridLogo">
				</div>
			</div>
			

				

			

				
			<!-- Search -->
				<div id="searchFilter">
							Search:
						<input 
							type="text" size="10" maxlength="30" name="name" value="" id="manualSearch" 
							class="filterContainer rounded" class="noFocus" 
							style="border:none;margin-left:10px;width:143px"/>
							<!--input type="button" id="resetManualSearch" value="clear" /-->
						<div id="searchClose"></div>
						<div id="searchHint">Search by Founder, Incubator, Name ...</div>

				</div>
		
 
	   
		  </div> <!-- /filter -->
	</div><!-- /filtercontainerIHateCSS -->

<div id="containerBox">
	<!-- <div style="width:768px; outline:2px solid red; height:20px;margin-left:256px;"></div>-->

	    	
	    	
	<div id="container" class="clearfix" style="display:none;">

	    	
	    	
	    	
	 <?php 
	 
	 
		 // Set user name 
			echo '<script type="text/javascript">var user="'.$_SESSION['user'].'";</script>';
			// Check to see if startup has been claimed
			
			  	
			  	
			  	
			 // SQL 	
		  	/* Startups Round 0 */
			require_once ('php/sqllogin.php');
			mysql_select_db("hacktus", $con);
		
			$tableName = "Startups_Clean";
			
  
  	// Let's split the fetches into separate databases while we're getting our data in order.
		$sql="SELECT * FROM $tableName"; //Create a Query to select all rows in the table Events
					$result = mysql_query($sql);
					$i=0;
					$j=0;
		
	`	// Let's select ONLY the startups which are yours for display first.
	
		

		// For my startup only
		while(($row = mysql_fetch_array($result)))// && $i<4) 
		{
			$i++;
			//if ($i<77) 
			{

				if (strlen($row['Founder_ID'])>2)
				{
					if (strpos($row['Founder_ID'],$_SESSION['user']) !== false)
					{
						// Claim number found
						// insert new "container" for claimed startups that won't be affected by isotope and sit on top of original container
						$addStyle = 'background-color:rgba(100,255,100,0.3);';
						include('php/Display.php');
					}
				}			
			}
		}
		
		// For all other startups
		$result = mysql_query($sql); // re-initialize result
		$addStyle = '';
		while(($row = mysql_fetch_array($result)))// && $i<4) 
		{
			$i++;
			if (strpos($row['Founder_ID'],$_SESSION['user']) === false)	
			{

					include('php/Display.php');
					
			}
		}	
		

		
  	?>
	  	
	    

	    <!-- hardcoded raw HTML (for faster loading) from php output from 21-JAN-2011 -->
	    
	    <!-- END raw HTML -->
	  
	
	  
	  
	</div> <!-- /#container -->
	

</div> <!-- /containerBox / I hate CSS -->


	<div id="loading">Loading Startups ... </div>

	<!-- JQuerY -->
		<script src="http://www.fractalgames.com/bin/js/jquery-1.6.4.min.js"></script>
		
	<!-- poof -->
		<script src="http://www.fractalgames.com/bin/js/poof.js"></script>
		<link rel="stylesheet" href="http://www.fractalgames.com/bin/css/poof.css" />	
		<div class="poof"></div>	
		
	<!-- Text Fill --> 
		<script src="http://www.fractalgames.com/bin/js/jquery-textFill-0.1.js"></script>
		
	
	<!-- Isotope -->
		<script src="http://www.fractalgames.com/bin/js/jquery.isotope.js"></script>

	<!-- Infinite Scroll -->
		<script src="http://www.fractalgames.com/bin/js/infinite.scroll.js"></script>


	<!-- Jeditable -->
		<script src="http://www.fractalgames.com/bin/js/jquery.jeditable.js" type="text/javascript" charset="utf-8"></script> 

<script>

	$(document).ready(function() {

	
/*	$(document).click(function(){
		$('#container').isotope({ sortBy : 'random' });
	});*/
	


	  // TextFill - Jquery Automatic text resizer for startup titles (Short titles can be bigger)
	    $('.jtextfill').delay(10000).textfill({ maxFontPixels: 36 });
	});


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
	var filterHidden = false;
	var topCount = 0;
	// i hate putting useless vars, but i can't figure out how to use handlerevents for hover and mouseenter. 
	// Problem: When you hover on, then off, then back on quickly a contractOption div, it will jitter because the closeoption and expandoption events are triggered asynchronously.
 	filter_0_hover = false;
 	filter_1_hover = false;
	filter_2_hover = false; 		
	filter_3_hover = false;
	search_hover = false;
	var containerBoxOffset = 305;
	function initialize() {
		GoToTop();
		showContainer();
		animateTopBar(0);
		// var t=setTimeout('animateTopBar(-32)',16000);
		

	}
	
	
	
	
	function animateTopBar(thisManyPixels) {
		$('#topbar').animate({
			top: thisManyPixels+"px"
			},800,function(){
			//finished
		});
		$('#Filter').animate({
			top: thisManyPixels+32+"px"
			},800,function(){
			//finished
		});
		containerBoxOffset += thisManyPixels;
		$('#containerBox').animate({
			top: containerBoxOffset+"px"
			},800,function(){
			//finished
		});

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
	
	
	function ShowSearchHint() {
		$('#searchHint').animate({
			width: "450px"
			},200,function(){
			//finished
		})
	}
	
	function HideSearchHint(enableClose) {
		if (enableClose) {
			$('#searchHint').animate({
				width: "0px"
				},100,function(){
				//finished
			})
		}
	}			

	function HideFilter() {
		CloseIntro();
		filterHidden = true;
		//$('#searchText').css('display','none');
		$('#searchClose').css('display','none');
		$('#FilterContainerIHateCSS').animate({
			top: "-200px"
			}, 400, function() {
				$('#hideFilters').css('display','none');
				$('#showFilters').css('display','block');		
		});
		containerBoxOffset -= 215;
		$('#containerBox').animate({
			top: containerBoxOffset+"px"
			}, 400, function () {
				//animateion complete
		});
	}	
			

	function ShowFilter() {
		containerBoxOffset += 215;
		filterHidden = false;
		topCount = 0;
		$('#FilterContainerIHateCSS').animate({
			top: "10px"
			}, 200, function() {
				$('#hideFilters').css('display','block');
				$('#showFilters').css('display','none');		
				//$('#searchText').css('display','block');
				$('#searchClose').css('display','block');
		});
		
			$('#containerBox').animate({
			top: containerBoxOffset
			}, 200, function () {
				//animateion complete
		});
			
		
	}				

			
		
	function expandOption(divToExpand,newWidth) {
		//console.log('expand option running');
	      var $optionSet = divToExpand.find('a').first(); // ugly, since this checks every time the user goes in, this could be stored
	      // no meh! I am gonna do it now. Oops, can't store boolean values here since this has to work for each filter. tldc. too long didn't code
	      divToExpand.find('.filterContent').css('width',newWidth-126);
      	  var selectedFilter = divToExpand.find('.selectedFilter').text('');
	      divToExpand.find('.selectedFilter').css('display','none');
	      
	      // only expand if 'any' was set, (otherwise it should be expanded already)_
	      if (true)//$optionSet.attr('name') == 'any' && $optionSet.hasClass('selected')) 
	      {
	      	// firstTime = false;
	  		divToExpand.animate({
			     width: newWidth,
			     left: "35px"
			     //height: numRows*30+20+"px",
			     // left: "-25"
			     // top: "-=25"
	     		 // background-color:rgba(1,1,1,1);
			    }, 250, function() {
			    // Animation complete.
			  });
  			divToExpand.find('.filterContent').css('display','block');
	  		// $('#'+divToExpand.attr('id')+'_options').css('display','block');
	  	}
	}
	
	function contractOption(divToContract, disableContraction) {
		if (false == disableContraction && $(this).width() > 400){
			var selectedWidth = -35;	
			var selectedText = "";
			if (divToContract.find('a').first().hasClass('selected') == false) {
			  selectedWidth = 0;
			  divToContract.find('.selected').each(function(){
				  console.log('this name was '+$(this).name);
				  selectedWidth += ($(this).width() + 10.5); //the 4 is for the " |", I think
				  selectedText += ($(this).text() + " | ");
				});
				// subtract last " | ";
			 selectedText = selectedText.substring(0,selectedText.length-3);
		     divToContract.find('.selectedFilter').css('display','block').css('width',selectedWidth);	      
		 	 divToContract.find('.selectedFilter').text(selectedText);  
	
		      }
		      
			divToContract.find('.filterContent').css('display','none');
	      if (true)//divToContract.find('a').first().hasClass('selected')) // if an option was set, don't close the window, we are using it
		  	{
	  		  console.log('selectedText width: '+selectedWidth);
	  		  
	  		  //firstTime = true;
	  		  divToContract.animate({
			     width: 120+selectedWidth+35+"px",
			     //height: "27px",
			     left: "55px"
			     //top: "+=25"
	
			  }, 100, function() {
	  			$('#'+divToContract.attr('id')+'_label').css('display','block');
			    // Animation complete.
			  });
	  		}
  		}
	}
	
	function GoToTop() {
	   $('html, body').animate({ scrollTop: 0 }, 0); // scroll to the top of the page to see new results
	   }
	
   function CloseIntro() {
   		introOpen = false;
   		//('#introContainer').isotope('destroy'); // not working, says can't call destroy before init?
		$('#introContainer').css('display','none');
		$('#intro').css('display','none');
		$('#intro').css('height','0').css('width','0').css('margin','0 0 -6px 0'); // hack to prevent this div from showing up in isotope
		// FilterNow();
	}

		// ClaimButton
	function ClaimStartup(tableName,rowKey,value){
	
		// Note: Make sure the div also has 'get div info' so that you can get the correct TableName, Row, etc
		
	 			$.ajax({
            type: "POST",
            url: "php/Claim.php",
            data: "tableName="+tableName
            	+ "&row="+tableRow
            	+ "&value="+value,
            success: function(data){  
                alert('Success! blah..data wuz '+data);
            }  
        });
	
	};



	// anonymous global jquery function
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
			var widthOffset = 23;
	  	var timeSinceChanged = 0;
	  	var mouseOutAllowanceTime = 7700;
		// Location	  	
		  	$('#filter_0').mouseenter(function(){
		  	 	filter_0_hover = true;
		  	 	expandOption($(this),585+widthOffset);
		  	});
		  	
		  	$('#filter_0').mouseleave(function(){
		  		filter_0_hover = false;
				var t=setTimeout('contractOption($("#filter_0"),filter_0_hover)',mouseOutAllowanceTime);
		  	});
	
	  	// Industry  	
		  	$('#filter_1').mouseenter(function(){
		  	 	expandOption($(this),752+widthOffset);
		  	 	filter_1_hover = true;		  	 	
		  	});
		  	$('#filter_1').mouseleave(function(){
		  		filter_1_hover = false;
				var t=setTimeout('contractOption($("#filter_1"),filter_1_hover)',mouseOutAllowanceTime);
		  	});  	
	
		// Stage
		  	$('#filter_2').mouseenter(function(){
		  	 	expandOption($(this),515+widthOffset);
		  	 	filter_2_hover = true;		  	 	
		  	});
		  	
		  	$('#filter_2').mouseleave(function(){
		  		filter_2_hover = false;		  	
				var t=setTimeout('contractOption($("#filter_2"),filter_2_hover)',mouseOutAllowanceTime);
		  	});  
		  		
		// Seeking
		  	$('#filter_3').mouseenter(function(){
		  	 	expandOption($(this),593+widthOffset);
		  	 	filter_3_hover = true;		  	 	
		  	});
		  	
		  	$('#filter_3').mouseleave(function(){
		  		filter_3_hover = false;		  	
				  var t=setTimeout('contractOption($("#filter_3"),filter_3_hover)',mouseOutAllowanceTime);
		  	});  		 
		  	
		// Hidefilters
			$('#hideFilters').click(function(){
				HideFilter();
			});
			
		// Showfilters
			$('#showFilters').click(function(){
				ShowFilter();
			});

		// Search
			$('#manualSearch').mouseenter(function(){
				search_hover=true; 
				ShowSearchHint();	
			});
			
					
			$('#manualSearch').mouseleave(function(){
				var t=setTimeout('HideSearchHint(search_hover)',mouseOutAllowanceTime);
			});
			
					
			$('#manualSearch').blur(function(){
				HideSearchHint(0);
				
			});
						
  	$('.filterContainer').mouseenter(function(){
	  	$('#debugDisplay').text(filter_0_hover);
  	})
  
  	// Isotope stuff
  	var firstRun = true;
 	var selector = "";
    var manualContents ="";
    var $container = $('#container'),
        filters = {};

    $container.isotope ({
	  getSortData : {
	    name : function ( $elem ) {
	      return $elem.find('.name').text();
	     }
	   },
	    
      animationOptions: {
	     duration: 250,
	     easing: 'linear',
	     queue: false
	   },
	  animationEngine: 'css',
      itemSelector : '.color-shape',
      itemPositionDataEnabled: true,
      masonry: {
				columnWidth: 174.4
      },
	  resizesContainer: true

	  
    });
    
	// remove intro div
	$('#introClose').click(function(){
		CloseIntro();
		FilterNow();
		})

	// close top bar
	$('#topbar_close').click(function(){
		CloseIntro();
		FilterNow();
		animateTopBar(-32);

		})


    // filter buttons
    $('.filter a').click(function(e){
    
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
      




      // remove all selected classes, but only if 'any' was not selected and 'multiple' was not a class AND user wasn't holding shift key
      // console.log('check to removing all selected classes.. shiftkeydown was '+e.shiftKey);
      if ($this.attr('name') == 'any' || (!$optionSet.hasClass('multiple')) || !e.shiftKey)
      { 

      	$optionSet.find('.selected').removeClass('selected');
	  }
	  

	  // IF this is a multiple filter AND you deselected one of 2 or more selected filters, deselect it.
	  if ($optionSet.hasClass('multiple') && $optionSet.find('.selected').length >= 2 && $this.hasClass('selected')) {
    	console.log('removing this selected class');
	  	$this.removeClass('selected');
	  	}
	  else // multiple was not an option, or it was but only one thing was selected, or shift key wasn't pressed
	      $this.addClass('selected');
      
      
      
      
      // Filters
      
      
      // store filter value in object
      // i.e. filters.color = 'zero'
      var group = $optionSet.attr('data-filter-group');
      
      // clear all filters (yes, filters[group] (should have) already existed, using group=optionset.attr just got the reference)
  		filters[ group ] = '';
  		
  	  // repopulate filters with any "selected" values. After the first value, check to see if parent was "multiple_or" class. If so, add a | between them.
  	  	var k=0;
    	$optionSet.find('.selected').each(function(thisSelected){

    		if ($optionSet.hasClass('multiple_or')){
    			console.log('multiple or detected');
    			if (k==0) {
    			
    			}
    			if (k>0) {
    				console.log('multiple or with k>0, applying |');
					var this_or_value = "|"+$(this).attr('data-filter-value').substring(1,$(this).attr('data-filter-value').length);
					//var this_or_value = ","+$(this).attr('data-filter-value');
		    		filters[group] += this_or_value;
	    		} else {
		    		filters[group] += $(this).attr('data-filter-value');
	    		}
	    		k++;
    		} else {
	    		filters[group] += $(this).attr('data-filter-value');
    		}
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
		$("#searchClose").click(function(){
			manualContents = '';
			$("#manualSearch").val("");
			FilterNow();
		})

	
	function FilterNow() {
		filterTerms = manualContents + selector;
		//alert('filterterms: '+filterTerms);
		$container.isotope({ filter: filterTerms});
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


	// DO NOT DELETE
	// This gets the position of all visible elements
		/*$('.color-shape').click(function(){
			var brickHeight = 226;
			$('#container').find('.color-shape').each(function(){
			  var position = $(this).data('isotope-item-position');
			  console.log($(this).attr('class')+' item position is x: ' + position.x + ', y: ' + position.y  );
			  //if 
			});
		});*/
		
		
		
		
		
		
		// Jeditable stuff
			// Jeditable  
	var $div;
	$('.getDivInfo').click(function() {
	    var $this = $(this);
	    $div = $this.closest('div');
	    
	    // Get the tableName, row, etc. from the div ID here, and save it into variables
	    splitDiv = $div.attr('id').split(",");
        tableName = splitDiv[0];
        tableRow = splitDiv[1];
        tableColumn = splitDiv[2];
	});
	

	

	
	$('.click1').editable(function(value, settings) {
		
		/*splitDiv = $div.attr('id').split(",");
        tableName = splitDiv[0];
        tableRow = splitDiv[1];
        tableColumn = splitDiv[2];*/
        
	     $.ajax({
            type: "POST",
            url: "php/echo.php",
            data: "tableName="+tableName
            	+ "&row="+tableRow
            	+ "&column="+tableColumn
            	+ "&value="+value
            	+ "&user="+user,
            success: function(data){  
                // alert('Success! blah..data wuz '+data);
            }  
		});     
	    return(value);
		}, { 
		  	indicator : "<img src='/ui/indicator.gif'>"
		}
	);

	
	

	
	
  $(".editable_textarea").editable("php/save.php", { 
      indicator : "<img src='img/indicator.gif'>",
      type   : 'textarea',
      submitdata: { _method: "put" },
      select : true,
      submit : 'OK',
      cancel : 'cancel',
      cssclass : "editable"
  });

	// Stage hack - TODO: fix this!

	$('.editable_select').click(function() {
	  var $this = $(this);
	  
	  // sets a global variable which is used by the .editable function of this class
	  $div = $this.closest('div');
	});
	
	$(".editable_select").editable("/php/save.php", { 
		indicator : '<img src="img/indicator.gif">',
		data   : "{'Inactive':'Inactive','Idea':'Idea','Prototype':'Prototype','Beta':'Beta','Growth':'Growth','Profitable':'Profitable','Dead':'Dead'}",
		type   : "select",
		submit : "OK",
		style  : "inherit",
		submitdata : function(result,status) {
		
			// alert ('result: '+result);
			// TODO
			// Extract value from selection (copied from jeditable source)
			// This relies on other vars from a script at the top which pulls data from save.php for Jeditable purposes. 
			// Yeah, it uses static global variables and requires things to fire in sequence to work. Ugh #TERRIBLE
		  	splitDiv = $div.attr('id').split(",");
		    tableName = splitDiv[0];
		    tableRow = splitDiv[1];
		    tableColumn = splitDiv[2];
		    return {id : 2};
		}
	});

		

});
	
	  	// Set some jeditable vars
		var clicked=false;
		var splitDiv;
		var tableName;
		var tableRow;
		var tableColumn;

		// awful, awful hacks to make editable_select return the Stage AFTER you selected it (default returns the previous value which is WORTHLESS)
		function SetStage(value) {
			// This is called from inside a modded jquery.jeditable.js ( under ajaxoptions // CVN )
			
			$.ajax({
		        type: "POST",
		        url: "php/echo.php",
		        data: "database=hacktus"
		        	+ "&tableName="+tableName
		        	+ "&row="+tableRow
		        	+ "&column="+tableColumn
		        	+ "&value="+value
		        	+ "&user="+user,
		        success: function(data){  
		            //alert('Success! blah..data wuz '+data);
		        }  
			});     
	
			
		}


	
	
</script>

<!-- open ID sign in -->

<script type="text/javascript">
(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    window.janrain.settings = {};
    
    janrain.settings.tokenUrl = 'http://www.fractalgames.com/not_startupgrid/auth.php';

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
  

</cody>
</html>
<?php } ?>