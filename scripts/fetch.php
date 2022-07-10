<?php

/* Get the name of the uploaded file */
$filename = $_FILES['file']['name'];

/* Choose where to save the uploaded file */
$location = "../downloads/".$filename;

/* Save the uploaded file to the local filesystem */
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  <html><p style="color: green;">Success file is downloaded onto are servers.</p></html> 
} else { 
  <html><p style="color: red;">Failed file could not be downloaded to are servers sorry for the inconvince.</p></html>
}

?>
