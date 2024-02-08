<?php

if(isset($_POST['left'])) echo shell_exec('java Main left');
if(isset($_POST['right'])) echo shell_exec('java Main right');

?>
<html>
<head>
<style>
.btn {width: 100%;height: 100%;}
.red { background:red; }
.green {background:green;}
</style>
</head>
<body>
<form action="" method="post">
<table width="100%" height="100%" align="center">
<tr>
<td><input type="submit" value="left" name="left" class="btn red" /></td>
<td><input type="submit" value="right" name="right" class="btn green"/></td>
</tr>
</table>
</form>
</body>
</html>