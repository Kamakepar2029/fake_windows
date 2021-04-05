<?php
if (isset($_GET['src'])){
	$source = $_GET['src'];
?>
<!doctype html>
<html style="height:100%;">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Circular Html5 Audio Player Demo</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="progres-bar.css">
    <style>
    html { min-height:100vh;}
    body { background-color:#fafafa; font-family:'Roboto';}
    .container { margin:150px auto; max-width:960px;}
    .mediPlayer { float:left; margin:20px;}
    </style>
</head>
<body style="display:flex;align-items:center;justify-content:center;height:100%;width:100%;margin:0px;">
<div class="mediPlayer">
    <audio class="listen" preload="none" data-size="250" src="<?=$source?>"></audio>
</div>
</div>
<!-- Media Player / -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="player.js"></script>

<script>
    $(document).ready(function () {
        $('.mediPlayer').mediaPlayer();
    });
</script>
<script type="text/javascript">
</script>
</body>
</html>
<?php } ?>