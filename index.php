
<?php
use coreAppNS\Route;
use coreAppNS\Controller;
use coreAppNS\View;
use coreAppNS\model;
include("core/route.php");
include("core/controllers.php");
include("core/view.php");
include("core/model.php");
$url=isset($_GET['url'])?$_GET['url']:"main";
new Route ($url);
?>

<?php
include("lang.php");
/*include("lang/defines.php"); */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $lang['PAGE_TITLE']; ?></title>
<style>
body{
direction:rtl;
}
table#main{
width:900px;
}
div{
float:right;
}
div#languages{
width:900px;
height:50px;
background-color:#FFFFFF;
}
div#title{
color:yellow;
font-size:12px;
width:900px;
}
div#head{
background-color:#FFFFFF;
width:900px;
}
</style>
</head>
<body>
<table id="main" cellpadding="0" cellspacing="0">

  </table>
</body>
</html>