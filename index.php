<html>
<head><title>Random</title></head>
<body>

<p>A randomly selected number
<?php 
$choice=rand(101,200); echo $choice;
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
