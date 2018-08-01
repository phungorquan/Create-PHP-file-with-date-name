<?php

date_default_timezone_set('Asia/Ho_Chi_Minh'); 	// Get GMT+7
$time_Data = date('d/m/Y - H:i:s');		// Get date and time with format below
						// Ex:01/08/2018 - 16:38:15
										
$change = date('d-m-Y');				// Get day-month-year
$changepath = "$change-History.txt";	// Combine date with your file name(History-you can change) 
$changepath = str_replace('"', "'", $changepath); 	// typecasting
$changepath = "./HISTORY/$changepath";	// Create another folder with name is HISTORY
					// Meanwhile create a file inside a HISTORY with format name is 01-08-2018
										
$fp = @fopen($changepath, "a"); // Open 01-08-2018 file to write with append method
fwrite($fp,$time_Data);		// Write date and time in file with format 01/08/2018 - 16:38:15
$ID = $_GET['id'];		// Get data via id character by GET method 

if (!$fp)				// IF unsuccess
{
    echo 'error';			// Display error
}
else					// ELSE success
{
    fwrite($fp, " | ID: ".$ID); 	// write data get from character id and write after date and time formated above
					// Ex : 01/08/2018 - 16:38:15 | yourdatawillappear right here
    echo "OK";				// Display OK
}

fwrite($fp,"\r\n");			// \r\n
fclose($fp);				// close file

// You have to create a HISTORY file first 
// Then you can try : localhost/createtime.php?id=yourdata (you need to mention about your port)

?>

