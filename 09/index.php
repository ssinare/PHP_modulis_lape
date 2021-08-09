<?php

echo $_GET['pus'] ?? '';
//header('Location: http://localhost/lape/09/index.php?pus=2');
//die;
?>
<?php
if(1==($_GET['pus'] ?? '')): ?>
<h1>Pirmas puslapis</h1>
<?php elseif(2==($_GET['pus'] ?? '')): ?>
<h1 style= "background-color: orange" >Antras puslapis</h1>
<?php else: ?>
<h1>Tokio puslapio nera</h1>   
<?php endif ?>

