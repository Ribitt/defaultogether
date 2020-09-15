<?php
$email=$_GET['email'];

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
    <h2>result 페이지</h2>
 
<script>
  const msg = '<?=$email?>';
  parent.ifun(msg);  
</script>
</body>
</html>