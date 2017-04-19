<?php
      include "functions.inc.php";
      $var=loadConf();
?>


<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Wifi Generator </title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="generate.php">

            <div class="form-title-row">
                <h1>QRCode Wifi Generator</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Wifi Network</span>
                    <input type="text" name="name" value="<?php echo $var[0]; ?>">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Key</span>
                    <input type="text" name="key" value="<?php echo randomPassword(); ?>">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Mode</span>
                    <select name="security">
                         <?php 
                                
                                if ($var[1]=="")
                                        echo "<option value=\"\">No Encryption</option>";
                                else
                                        echo "<option value=\"" .$var[1] . "\">". $var[1] ."</option>";
                                                                
                                if ($var[1]!="WPA")
                                        echo "<option value=\"WPA\">WPA</option>";
                                        
                                if ($var[1]!="WEP")
                                        echo "<option value=\"WEP\">WEP</option>";
                                        
                                if ($var[1]!="")
                                        echo "<option value=\"\">No Encryption</option>";
                                                               
                         ?>
                         
                      
                    </select>
                </label>
            </div>

           

            <div class="form-row">
                <button type="submit">Generate</button>
            </div>

        </form>

    </div>

</body>

</html>
