<html>
<head><title>Random</title></head>
<body>

<p>I have randomly selected the number
<?php 
$choice=rand(1,100); echo $choice;
?>
.</p>
<p>Its square root is 
<?php
echo sqrt($choice);
?>
.</p>

<p>PHP Information: 
<?php 
phpinfo();
?>
.</p>

</body>
</html>
