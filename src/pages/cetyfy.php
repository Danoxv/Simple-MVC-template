<?php
$name = '';
if($_GET['ck']=='34270b00ef973938b84e7af48ced2448'){
    $name = 'denis';
}elseif($_GET['ck']=='25270b00ef973938b84e7af48ced2448'){
    $name = 'Vlad';
}
echo <<< _END
<!DOCTYPE html>
<html>
 <head>
    <link href="styles/styles.css" rel="stylesheet">
  <meta charset="utf-8" />
  <title>HTML5</title>

 </head>
 <body>
  <p>   $name Сертификат</p>
 </body>
</html>
_END;