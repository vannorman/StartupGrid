<?php
	

		echo '<div name="eachStartup" 
						class="' . 'color-shape '
								. $row['Industry'] . ' '
								. $row['Round']  . ' '
								. strtolower($row['Founders'])  . ' '
								. strtolower($row['Name']) . ' '
								. strtolower($row['Origin'])  . ' '
								. strtolower($row['Stage'])
							.'"
							style="'.$addStyle.'">';
					
					// Logo
					// Uncomment to: If logo is the default (missing actual logo SRC), click to edit logo
						// ref: StartupChile logo here: 'http://tctechcrunch.files.wordpress.com/2011/02/startup-chile.jpg')
						
						// display the actual logo SRC we already have in the database
	
							
					// Name 
						echo '<div class="nameContainer">
							<div class="name">'
							. "<div id='" . $tableName . "," . $row['key'] . ",Name'>"
								. "<c class='click1 getDivInfo'>"
									. $row['Name'] 
								. "</c>"
							. "</div>"
						. '</div>
						</div>';
					

					
					// Description
					$Description = stripslashes(substr($row['Description'],0,165));
					echo "<div class='description' id='" . $tableName . "," . $row['key'] . ",Description'>"
						. "<p class='editable_textarea'>"
							. $Description
						. "</p>"
					. "</div>";

					// Founders - detects # of founders
					$founderNumber = "Founder";
					if (strlen(preg_replace('/[^A-Z]+/', '', $row['Founders'])) > 2) // if more than 2 capitals, assume 2 founders
						$founderNumber = "Founders";

						
					// Left side
					echo '<div class="leftText">'
						.$founderNumber.'<br><br>'
						.'Contact<br>'
						.'Seeking<br>'
						.'Location<br>'
						.'Industry<br>'						
						.'Stage'
					.'</div>';
					
					// middle
					echo '<div class="verticalLine"></div>';
					


					// right side

						// Founders
						// this is outside the right side div because sometimes it's 2 lines, sometimes 1
						
						echo "<div class='founders' id='" . $tableName . "," . $row['key'] . ",Founders'>"
							. "<c class='click1 getDivInfo'>"
								.$row['Founders']
							. "</c>"
						. "</div>";


					echo '<div class="rightText">';
						echo "<br><br>"; // to displace 2 lines for the Founder names space
						
						// Contact
						echo "<div id='" . $tableName . "," . $row['key'] . ",Email'>"
							. "<c class='click1 getDivInfo'>"
								.$row['Email']
							. "</c>"
						. "</div>";


						
						// Seeking
						echo "<div id='" . $tableName . "," . $row['key'] . ",Seeking'>"
							. "<c class='click1 getDivInfo'>"
								.$row['Seeking'].""
							. "</c>"
						. "</div>";
						
						// Location
						echo "<div id='" . $tableName . "," . $row['key'] . ",Location'>"
							. "<c class='click1 getDivInfo'>"
								.$row['Origin'].""
							. "</c>"
						. "</div>";
						
						// Industry
						echo "<div id='" . $tableName . "," . $row['key'] . ",Industry'>"
							. "<c class='click1 getDivInfo'>"
								.$row['Industry']
							. "</c>"
						. "</div>";
						
						// Stage
						echo "<div id='" . $tableName . "," . $row['key'] . ",Stage'>"
							. "<c class='editable_select'>"
								. $row['Stage']
							. "</c>"
						. "</div>";						

					
					echo '</div>';

				// Edit button
				echo '<div class="claimButton">'
					. "<input type=button value=Claim onClick=ClaimStartup('Startups_Clean',".$row['key'].",\"".$_SESSION['user']."\") />"
				. '</div>';
				
				echo "</div>";  // close EachStartup*/
?>
	