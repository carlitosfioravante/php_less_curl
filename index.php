<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>PHP Less CURL</title>
</head>
<body>
<?php
  $url = 'http://teste.com';
  $data = array('token' => 'teste');

  // use key 'http' even if you send the request to https://...
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);

  if ($result === FALSE) { /* Error */ }

  var_dump($result);
  
  // Exemplo de return of image
  //echo '<img src="data:image/png;base64,' . base64_encode($result) . '"/>';
?>
</body>
</html>
