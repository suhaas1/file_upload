<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<?php include 'connect.php' ?>
<input type="file" name="fileToUpload" id="fileToUpload">
<button id="upload">Upload</button>

</body>
</html>

<script>
$('#upload').on('click', function() {
    let file_data = $('#fileToUpload').prop('files')[0];  
    if(file_data.size > 5000000) {
      alert("upload below 5mb");
    } else if(file_data.type == "image/jpeg" || file_data.type == "image/png" || file_data.type == "image/svg+xml" || file_data.type == "jpeg" || file_data.type == "gif") {
      let form_data = new FormData();                  
      form_data.append('file', file_data);
      console.log(form_data);                             
      $.ajax({
          url: 'upload.php',
          dataType: 'text',
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,                         
          type: 'post',
          success: function(php_script_response){
              alert(php_script_response);
          }
      });
    } else {
      alert("upload png, jpg, svg, jpeg, gif image format")
    }
});
</script>