<?php
    $target_dir = '/';
    $filename = trim(addslashes($_FILES['file']['name']));
    $filename = preg_replace('/\s+/', '_', $filename);
    $target_file = $target_dir . basename($filename);
    if ( 0 < $_FILES['file']['error'] ) {
      echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    } else if (file_exists($target_file)) {
      echo 'image already exist';
    }
    else {
      move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $filename);
      echo $target_file;
    }
?>
