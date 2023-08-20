<html>
<div class="container">
        <center> <p style="font-size:30px"><b>YOUR CHOICE </p></b>
            <br>
            <br>
            <form action="x.php" method="POST">
                  <label for="district">District Name:</label>
                  <select id="district" name="district" required>
                      <option value="ANANTAPUR">ANANTAPUR</option>
                      <option value="CHITTOOR">CHITTOOR</option>
                      <option value="EAST GODAVARI">EAST GODAVARI</option>
                      <option value="GUNTUR">GUNTUR</option>
                      <option value="KADAPA">KADAPA</option>
                      <option value="KRISHNA">KRISHNA</option>
                      <option value="KURNOOL">KURNOOL</option>
                      <option value="PRAKASAM">PRAKASAM</option>
                      <option value="SPSR NELLORE">SPSR NELLORE</option>
                      <option value="SRIKAKULAM">SRIKAKULAM</option>
                      <option value="VISAKAPATANAM">VISAKAPATANAM</option>
                      <option value="VIZIANAGARAM">VIZIANAGARAM</option>
                      <option value="WEST GODAVARI">WEST GODAVARI</option>
                    </select>

                  <br><br>
                  <label for="season">Season:</label>
                  <select id="season"   name="season" required>
                    <option value="Kharif">Kharif</option>
                    <option value="Rabi">Rabi</option>
                    <option value="Whole Year">Whole Year</option>
                  </select>
                
                  <br><br>
                  <div class="submit-container">
                    <input type="submit" value="Submit">
                  </div>
        		</div>
	        </form>
        </center>		
        </html>

<?php 
    error_reporting(E_ALL); 
    include('errors.php');
    $district = isset($_POST['district']) ? $_POST['district'] : '';
    $season = isset($_POST['season']) ? $_POST['season'] : '';
    $season=ucfirst($season);
    echo $district."<br>".$season;
    echo "python code/c2.py $district $season";
    // Call the Python script and pass the input data as command line arguments
    $output = exec("python code/prediction2.py $district $season");
?>
