<html>
<head>
	    <link rel="stylesheet" href="../css/mediaboxAdvBlack.css" type="text/css" media="screen" />
	<script src="../scripts/mootools.1.2.4.js" type="text/javascript"></script>
	<script src="../scripts/mediaboxAdv.js" type="text/javascript"></script>
	<script type="text/javascript">
	function closeAndRefresh(){
		parent.Mediabox.closerefresh();
		return false;
	}
	</script>
	<script type="text/javascript">
	function closeWindow(){
		parent.Mediabox.close();
		return false;
	}
	function delayedClose(){
	setTimeout("closeWindow()", 2000);
	}
	</script>
<?php
ini_set("display_errors", 1);
$numbertocall = urlencode($_REQUEST['numbertocall']);
$company = urlencode($_REQUEST['company']);
$cust_name = urlencode($_REQUEST['first_name'] . ' ' . $_REQUEST['last_name']);
// REMOVED			$tokenid = 'REMOVED';
$url = 'http://api.voxeo.net/SessionControl/CCXML10.start';
$postvals = 'tokenid=' . $tokenid . '&numbertocall=' . $numbertocall . '&cust_name=' . $cust_name . '&company=' . $company;

if ($_REQUEST['submit'] == 'Call') {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURL_HTTP_VERSION_1_0, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postvals);
	curl_exec($ch);
	curl_close($ch);
	}

?>
</head>

<body onload="Mediabox.open('#mb_inline', '', '300 180');return false;">
	<div id="mb_inline" style="display: none;">
			<script>delayedClose();</script>
			<span style="color: #999999; text-align: center;">Thank you<br/><br/>
			<a href="" onclick="Mediabox.close();return false;">close</a>
	</div>
</body>
</html>
