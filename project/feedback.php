<?php
	//function to print table that have radio buttons
	function feedback($name,$radio){
		echo "<tr>";
		echo "<th></th>";
		for($i=1;$i<=5;$i++)
			echo "<th>$i</th>";
		echo "<th></th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Not $radio</td>";
		for($i=1;$i<=5;$i++)
			echo "<td><input type=\"radio\" name=\"$name\" value=\"$i\" required></td>";
		echo "<td>Very $radio</td>";
		echo "</tr>";
	}
	
	if(isset($_POST['submitFeedback'])){
		echo "<script>alert(\"Thank you for your responses.\")</script>";
		echo "<script>location.href=\"index.php\"</script>";
		exit();
		
	}
?>

<!-- feedback modal -->
<div id="modalfeedback" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom modal-max-width">
      <div class="w3-center">
        <span id="closeFeedback" onclick="document.getElementById('modalfeedback').
			style.display='none';" class="w3-button w3-xlarge w3-hover-red w3-display-topright" 
			title="Close Modal">&times;</span>
        <h1>Feedback</h1>
      </div>

      <form class="w3-container" action="feedback.php" method="post">
        <div class="w3-section">
          <label><b>Flower Choices</b></label>
		  <table class="w3-margin-bottom">
			<?php feedback("satisfy","Satisfy");?>
		  </table>
		  
          <label><b>Website Smoothness</b></label>
          <table class="w3-margin-bottom">
			<?php feedback("friendly","Friendly");?>
		  </table>
		  
		  <label><b>Website Design</b></label>
          <table class="w3-margin-bottom">
			<?php feedback("performance","Good");?>
		  </table>
		  
		  <label><b>Additional Comments</b></label><br>
		  <textarea name="comments" placeholder="Please write additional comments here." 
			rows="4" cols="68"></textarea>
          <button id="submitFeedback" class="w3-button w3-block w3-black w3-section 
			w3-padding w3-round-large" type="submit" name="submitFeedback" value="submit">Submit</button>
          
        </div>
      </form>
    </div>
  </div>
  