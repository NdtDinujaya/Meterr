
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <body>
        
        	
        	<input type="button" name="insfert" value="insert" onclick="<?php statusChageOn() ?>" />
            <input type="button" name="select" value="select" onclick="<?php statusChageOff() ?>" />
         

        <?php
            function statusChageOn(){
               $myfile = fopen("Status.txt", "w") or die("Unable to open file!");
				$txt = "0";
				fwrite($myfile, $txt);
				fclose($myfile);
            }
            function statusChageOff(){
               $myfile = fopen("Status.txt", "w") or die("Unable to open file!");
				$txt = "1";
				fwrite($myfile, $txt);
				fclose($myfile);
            }
            
        ?>