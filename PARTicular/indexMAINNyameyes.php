<html>
  <head>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="authTest.js"></script>
	<script src="searchMain.js"></script>
	<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
    
    <!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

<!-- CSS Reset -->
<link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

<!-- Milligram CSS minified -->
<link rel="stylesheet" href="milligram.css">

<!-- Importing Javascript File -->
<script src="javascript1.js"></script>

<!-- Importing Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- You should properly set the path from the main file. -->

              

  <title>PARTicular</title>
  </head>

  <body>

      <div class="container">

        <div class="row nobr linkrow">
          <img src="logo.png" alt="The PARTicular logo" style="padding: 00px 00px 0px 00px; height: auto; width: auto; max width: 100%;"></img>


              <container class="menubuttons">
                <input class="button smallerbutton" value="Home" type="submit"><br>
                <input class="button smallerbutton" value="About" type="submit"><br>
                <input class="button smallerbutton" value="Contact" type="submit"><br>
                <input class="button smallerbutton" value="Sponsor" type="submit"><br>
              </container>

        </div>

        <div class="row" style="background-color: #D8D8D8">
          <div class="column">
              <img src ="http://images.clipartpanda.com/computer-clip-art-Computer2_Computer_Clipart_Pictures.png" alt="an ad example1" style="padding: 20px;"</img>
              <p1><b>Type in your desired specs and generate your very own dream PC to get the best gaming experience for you!</b></p1>
              <hr>
              <h5><b>OUR FAVOURITE PC RETAILERS</b></h5>
              <img src ="http://www.neponline.co.uk/wp-content/uploads/2013/08/NEP_logo_130.jpg" alt="an ad example2" style="padding: 20px;"</img>
          </div>
          <div class="column column-75">

              <div class="row row1">
                <h1><b>BUILD YOUR PC NOW</b></h1>
              </div>

              <div class="row row2">

                  <div class="column1">
                    <p><b>Motherboard</b></p>
                    	<?php
                        $conn = new mysqli('localhost', 'sgesson', '', 'my_sgesson') 
                        or die ('Cannot connect to db');
                        
                            $result = $conn->query("select id, Name, Type from ComputerParts");
                            echo "<select name='idMotherboard' class='comboboxes' id='motherboardCombo' >";
                            while ($row = $result->fetch_assoc()) {

                                          unset($id, $name, $type);
                                          $id = $row['id'];
                                          $name = $row['Name']; 
                                          $type = $row['Type'];
                                          if ($type == 'Motherboard'){
                                          	echo '<option value="'.$id.'">'.$name.'</option>';
                                          }

                        }

                            echo "</select>";

                        ?> 
                     
    				<a class="button button-outline addbutton popup" onmouseover="popUp1()"  href="dbInsertForm.php">
                    	<span class="popuptext" id="myPopup1"> <p style="font-size:20px"> Add to list </p> </span>
                    	+
                    </a>                   
                 
                    <p><b>RAM</b></p>
                    <?php
                        $conn = new mysqli('localhost', 'sgesson', '', 'my_sgesson') 
                        or die ('Cannot connect to db');
                        
                            $result = $conn->query("select id, Name, Type from ComputerParts");
                            echo "<select name='idRAM' class='comboboxes' id='RAMCombo' >";
                            while ($row = $result->fetch_assoc()) {

                                          unset($id, $name, $type);
                                          $id = $row['id'];
                                          $name = $row['Name']; 
                                          $type = $row['Type'];
                                          if ($type == 'RAM'){
                                          	echo '<option value="'.$id.'">'.$name.'</option>';
                                          }

                        }

                            echo "</select>";

                        ?> 
                        
                    <a class="button button-outline addbutton popup" onmouseover="popUp2()" href="dbInsertForm.php">
                    	<span class="popuptext" id="myPopup2"> <p style="font-size:20px"> Add to list </p> </span>
                    	+
                    </a>
                  </div>

                  <div class="column1">
                    <p><b>GPU</b></p>
                    <?php
                        $conn = new mysqli('localhost', 'sgesson', '', 'my_sgesson') 
                        or die ('Cannot connect to db');
                        
                            $result = $conn->query("select id, Name, Type from ComputerParts");
                            echo "<select name='idGPU' class='comboboxes' id='GPUCombo' >";
                            while ($row = $result->fetch_assoc()) {

                                          unset($id, $name, $type);
                                          $id = $row['id'];
                                          $name = $row['Name']; 
                                          $type = $row['Type'];
                                          if ($type == 'GPU'){
                                          	echo '<option value="'.$id.'">'.$name.'</option>';
                                          }

                        }

                            echo "</select>";

                        ?> 
                        
                    <a class="button button-outline addbutton popup" onmouseover="popUp3()" href="dbInsertForm.php">
                    	<span class="popuptext" id="myPopup3"> <p style="font-size:20px"> Add to list </p> </span>
                    	+
                    </a>

                    <p><b>Case</b></p>
                    <?php
                        $conn = new mysqli('localhost', 'sgesson', '', 'my_sgesson') 
                        or die ('Cannot connect to db');
                        
                            $result = $conn->query("select id, Name, Type from ComputerParts");
                            echo "<select name='idCase' class='comboboxes' id='CaseCombo' >";
                            while ($row = $result->fetch_assoc()) {

                                          unset($id, $name, $type);
                                          $id = $row['id'];
                                          $name = $row['Name']; 
                                          $type = $row['Type'];
                                          if ($type == 'Case'){
                                          	echo '<option value="'.$id.'">'.$name.'</option>';
                                          }

                        }

                            echo "</select>";

                        ?>

                        
                    <a class="button button-outline addbutton popup" onmouseover="popUp4()" href="dbInsertForm.php">
                    	<span class="popuptext" id="myPopup4"> <p style="font-size:20px"> Add to list </p> </span>
                    	+
                    </a>

                </div>

              </div>

              <div class="row row3">
              <a class="button button-outline searchbutton" onclick="searchFunction()" href="#">Search</a>
              <section id="login-container" class="pre-auth">
					This app requires access to youtube account 
                    please <a href="#" id="login-link">authorize</a> to continue.
			  </section>
              
				
              <form style="padding-left: 50px">
                <p><b>Average Estimated Price</b></p>
                <input name="priceBox" id="priceBox" type="text" value = "">
                <p><b>Suggested Power Supply Requirements</b></p>
                <input type="text">
              </form>
              
           
              
              <div style="visibility:hidden" id="ytVideo">
              	<iframe width="420" height="315"src="" id="yttVideo"> </iframe>
              </div>
              
              </div>

        </div>
      </div>

  </body>
</html>
