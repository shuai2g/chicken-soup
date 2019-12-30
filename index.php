<?php
	ob_start();
	session_start();
	require("data.php");
    $sql="select * from chicken_soup order by rand() limit 1";
    $rs=mysql_query($sql);
    if (!$rs) {
        printf("Error: %s\n", mysqli_error($conn));
        die();
    }

    $rows = [];
    while($row=mysql_fetch_assoc($rs))
    {
        $rows[] = $row;
    }
    /* free result set */
    mysql_free_result($rs);

    /* close connection */
    mysql_close();
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>毒鸡汤 - 壮士可要来一碗！</title>
	<meta name="description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
	<meta name="keywords" content="鸡汤,毒鸡汤,馊鸡汤">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author" content="author@shuaigg.cn" />
	<meta property="og:title" content="毒鸡汤 - 壮士可要来一碗！" />
	<meta property="og:url" content="http://chicken-soup.shuaigg.cn/" />
	<meta property="og:image" content="http://chicken-soup.shuaigg.cn/icon.png" />
	<meta property="og:site_name" content="毒鸡汤 - 壮士可要来一碗！" />
	<meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon" id="page_favionc">
	<link href="./img/min.css" rel="stylesheet">
	<link rel="alternate icon" type="image/png" href="icon.png">

</head>
<body>
<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999"> 
<div class="container">
	<div class="row" style="margin-top: 30px;">
	    <div class="col">
	      <img src="./img/logo.png">
	    </div>
	    <div class="col">
	    	<div class="float-right" style="padding-top: 0px;">
	    		<a class="btn btn-primary btn-filled btn-xs" href="https://github.com/shuai2go/chicken-soup" >开源</a>
	    	</div>
	    </div>
		</div>
</div>
</div>

<div class="main-wrapper" style="position: relative; top: -6vh;">
<div class="container main-sentence justify-content-center text-center">
    <?php if($rows):?>
    <?php foreach ($rows as $index=>$row):?>
    <span id="sentence" style="font-size: 2rem;"><?php echo $row["title"]?></span>
	<?php endforeach?>
    <?php endif?>
</div>
</div>

<div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
	<div class="container">
		<div class="row">
			<div class="col text-center">
	            <p class="lead text">截屏分享朋友</p>
	            <span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="http://chicken-soup.shuaigg.cn" >www.nows.fun</a></span>
	    </div>
  		</div>
	</div>
</div>

<div style="display:none;">
</div>

</body>
</html>