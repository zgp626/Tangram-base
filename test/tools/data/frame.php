<?php header("Content-type: text/html; charset=utf-8");
?>
<html>
<head>
<style type="text/css">
* {
	margin: 0;
	padding: 0;
}
</style>
<script type="text/javascript" src="/jqadptor/jquery-1.9.1.js"></script>
<script type='text/javascript' src='/jqadptor/jqadptor.js'></script>
<script type='text/javascript' src='/jqadptor/tangram.js'></script>
<?php
// $release = preg_match('/release=true/i', $_SERVER['QUERY_STRING']);
// if($release == 0 && array_key_exists('f', $_GET))
// print "<script type='text/javascript' src='../br/import.php?f={$_GET['f']}'></script>";
// else
// print "<script type='text/javascript' src='../../../release/all_release.js'></script>";
?>
<script type="text/javascript">
	parent && parent.ua.onload && parent.ua.onload(window);
</script>
</head>
<body>
</body>
</html>
