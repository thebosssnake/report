<?php
// include_once(getenv('ROOT_PATH') . '/common/mkt.bootstrap.php');
//页面标记
$sPage = "report2019";
//搜索历史
use bll\mkt\awards\AwardsSearchBll;
// $oAwardsSearchBll = new AwardsSearchBll();
// $aSearchHistory = $oAwardsSearchBll->getAwardsSearchHistory([]);

$bWap = false;

if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || (isset($_SERVER['HTTP_VIA']) && false !== stristr($_SERVER['HTTP_VIA'], 'wap')) || (isset($_SERVER['HTTP_ACCEPT']) && ((false !== strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml')) && ((false === strpos($_SERVER['HTTP_ACCEPT'], 'text/html')) || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))))  //如果有HTTP_X_WAP_PROFILE则一定是移动设备
{
	$bWap = true;
}
else
{
	$aAgent = array('ios','ucbrowser','mqq','nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap',
	);

	if (isset($_SERVER['HTTP_USER_AGENT']))
	{
		// 从HTTP_USER_AGENT中查找手机浏览器的关键字
		if (preg_match("/(" . implode('|', $aAgent) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
		{
			$bWap = true;
		}
	}
}

if ($bWap)
{
	header('Location:' . 'https://hrawards.51job.com/channel/2022wk.php');
	exit();
}

$topLeftUrl = 'http://hrawards.51job.com/channel/image/index_em_cover2019.jpg';
$topRightUrl = '//v.qq.com/txp/iframe/player.html?vid=y0838q91ho0';
$navbar = 5;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>“网课一代”就业前景调查报告</title>
<meta name="description" content="前程无忧为个人提供全新、准确的企业职位招聘信息，为企业提供人才招聘、猎头、培训、测评和人事外包在内的全方位的人力资源服务，帮助个人求职者与企业搭建人才招募和人才培养渠道。">
<meta name="keywords" content="人才，招聘，简历，工作，求职，面试，应聘，跳槽，高薪，兼职，猎头，薪酬，薪资，培训，测评，人事">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="//js.51jobcdn.com/in/css/market/jianli/css/bootstrap.min.css?20180408" rel="stylesheet">
<link href="//js.51jobcdn.com/in/css/mkt/df/mkts.css?20180408" rel="stylesheet">
<script src="//js.51jobcdn.com/in/js/market/jianli/js/jquery.min.js?20180319"></script>
<script language="javascript" src="//js.51jobcdn.com/in/js/mkt/df/fun.js?20190315"></script>
<script language="javascript" src="//js.51jobcdn.com/in/js/mkt/df/home.js?20190318"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>


<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- 新 Bootstrap4 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
 
<!-- bootstrap.bundle.min.js 用于弹窗、提示、下拉菜单，包含了 popper.min.js -->
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
 
<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- 引入 echarts.js -->
<script src="https://cdn.staticfile.org/echarts/4.3.0/echarts.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
$(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
});

</script>
<script type="text/javascript" language="javascript">
function checkInput()
{
  	var obj=document.getElementById("tf_search");
  	if(obj.value==''||obj.value=='请输入搜索内容')
  	{
  	   obj.focus();
  	   return false;
  	}
}

</script>


<style type="text/css">
html,body{width:100%;height:100%;font-family: "Agency FB","微软雅黑";}
body {margin:0;padding: 0; border:0; height:100%; overflow:auto;}
html {overflow:auto !important; overflow:hidden;}

  
  body {
      position: relative;
  }
  ul.nav-pills {
  }
  div.col-8 div {
  }
img{
	object-fit:cover;
}

.titlecolor{
	color:#c08f3d;
}
.latestre{
	width:100%;
	height:60vh;
	margin-bottom: 5rem;
	position:relative;
}
.latestre_title{
	padding-top: 5rem;
}
.briefre{
	margin-left: 25px;
	margin-bottom: 20px;
}
.briefre p{
	line-height:2.5;
	font-size:16px;
	color:#fff;
}
.briefpic{
}
.listtitle{
	border-left: 10px solid #c08f3d;
	padding-left: 10px;
	margin-bottom:20px;
}
.listtitletext{
	color: #c08f3d;
	font-size:24px;
	font-weight:bold;
}
.textmt{
	margin-top:100px;
}
.btnmore{
	font-size: 2.5rem;
	color:#006;
	border:solid #fff 1px;
	border-radius:5px;
	padding:.5rem 3rem;
	background:#fff;
	transition:font-size 0.5s;
	-moz-transition: font-size 0.5s;
	-webkit-transition: font-size 0.5s;
	-o-transition: font-size 0.5s;
}
.btnmore:hover{
	color:#fff;
	background:none;
	text-decoration:none;
}
.navstyle{
	color:#c08f3d;
	font-size:20px;
}
.navstyle:hover{
	font-weight: bold;
	color:#c08f3d;
}
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #c08f3d;
}


.reportlist{
	margin-bottom:100px;
	position: relative;
}
.reportlisttitle{
	text-align:center;
}
.reportlisttitle h1{
	font-weight:bold;
	font-size:28px;
}
.reportcard{
	padding:30px 25px;
}
.reportcard:hover{
	box-shadow: 0px 5px 15px #D4D4D4;
	
}
.reportcardpic{
	width: 500px;
	height:300px;
	object-fit:cover;
}
.reportcardtext{
	width: 100%;
	margin-top:15px;
	line-height:2;
	font-size:15px;
	text-align:justify;
}
.reportcardtext a{
	color:#000;
}
.reportcardtext a:hover{
	color:#428bca;
}
.reportcardtext a h3{
	line-height:2;
	text-align:justify;
}

.reportcardsm{
	padding:30px 25px;
}
.reportcardsm:hover{
	box-shadow: 0px 5px 15px #D4D4D4;
	
}
.reportcardsmpic{
	width: 230px;
	height:144px;
	object-fit:cover;
}
.reportcardsmtext{
	margin-left:10px;
	width: 220px;
	margin-top:15px;
	line-height:2;
	font-size:13px;
	text-align:justify;
}
.reportcardsmtext a{
	color:#000;
}
.reportcardsmtext a:hover{
	color:#428bca;
}
.reportcardsmtext a h2{
	line-height:2;
	text-align:justify;
}

.textstyle{
	font-size:1.7rem;
	line-height:2;
	text-align:justify;
}
</style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="200">

<div class="m-nav">
	<div class="min"  style="margin:0 auto; max-width:1300px; min-width:1200px">
	<?php
	    // include_once MKT_TEMPLATE_PATH."/awards/common/header.template.php";
	?>    
	</div>
</div>


<div class="latestre">
	<div style="width:100%;  position:absolute; left:0;">
			
		<img src="./image/2022wk-bg-01.jpg" alt="2022" id="movie" class="float-right" style="width:100%; height:500px;" />
 
	</div>
			
	<div class="row" style="width:100%; position:absolute; top:20%; left:10%;">
		<div class="  briefre  col-xl-5 col-lg-6 col-md-8 col-sm-10"  style="">
			<div class="latestre_title ">
				<span style="color: #000;font-size:6rem; font-weight:bold;">“网课一代”就业机会调研
</span><br/><br/>
				<span style="color: #000;font-size:2rem; "></span>
			
			</div>
				
		</div>
		<div class="container" style="width:49%;">
		
		
		</div>
	</div>
</div>


<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center" style="">
	<tr>
		<td width="800" align="left" style="padding:0 2rem;">
			<p class="textstyle">11月17日教育部发通知，开展“2023届高校毕业生校园招聘月”系列，表示2023届全国普通高校毕业生规模预计达1158万人，同比增加82万人。</p>
			<p class="textstyle">这一届毕业生多数是2019年入学，经历了2020~2022年三年疫情，网课上了三年，有着与众不同的特征。少数的线下课、少有实习经历，以至于不少学生对自己的就业前途感到“没底”，连同不少家长都在悲伤——只能读研。</p>
			<br/>
			<h1 style="color:#369;">企业对“网课一代”如何认识？</h1>
			<p class="textstyle">我们特别采访了100家雇主的HR，对于2023届毕业生有何印象，需求量如何变化等进行了了解，绘制了本期的《“网课一代“就业前景调查报告》。</p>
			<br/>
			<h1 style="color:#369;">主要发现：</h1>
			<p class="textstyle"><strong>发现一：52%的企业只重专业和能力，18%的企业对网课表示担忧</strong></p>
			<p class="textstyle">调查数据显示，关于“网课一代”进入职场，52%的企业表示不会对这一届学生有观感上的变化，更看重的是个人能力；18%的企业表示对网课为主的大学教育质量不乐观；10%的企业表示更看重毕业生的学校和学历。</p>
			<p class="textstyle" style="text-align:center; margin-top:2rem;"><img src="http://img01.51jobcdn.com/im/mk/artimages/170174.png" style="width:45%;"/></p>
			<br/>
			<p class="textstyle"><strong>发现二：运输物流、生产制造行业 更需要专科</strong></p>
			<p class="textstyle">关于企业对毕业生学历的需求中，调研显示，最需要专科的前五个行业为：运输/物流、生产制造、零售、互联网/电商、房地产。</p>
			<p class="textstyle" style="text-align:center; margin-top:2rem;"><img src="https://img01.51jobcdn.com/im/mk/artimages/170175.png" style="width:45%;"/></p>
			<br/>
			<p class="textstyle"><strong>发现三：超过一半的企业 会减少2023届毕业生需求</strong></p>
			<p class="textstyle">相比2022届，超过一半的企业会减少对2023届的招聘，其中跨国公司最多，占比达61%，其次是国有企业（59%）、民营企业（56%）；就增加的比例而言，国有企业最多，占比为23%，其次是民营企业（18%）、跨国公司（6%）。</p>
			<p class="textstyle" style="text-align:center; margin-top:2rem;"><img src="https://img01.51jobcdn.com/im/mk/artimages/170176.png" style="width:45%;"/></p>
			<br/>
			<p class="textstyle"><strong>更多发现</strong></p>
			<p class="textstyle">企业对于毕业生的学历要求如何？<br/>哪些行业最需要本科生？<br/>哪些行业最需要研究生？<br/>相比2022届，不同行业2023届的招聘量会有什么变化？<br/>针对“网课一代”进入职场，HR会怎么说？<br/>......</p>


			<p class="textstyle" style="text-align:center; font:-size:1rem; margin-top:2rem; color: #ccc; font-weight:bold;">
			扫码回复“网课一代”，领取完整报告<br/>
			<img src="./image/51HR.jpg" style="width:20%;"/></p>
			
		</td>
		<td width="200" align="left" valign="top" style="padding-left:3rem; padding-top:2rem;">
		
		<p class="textstyle" style="text-align:center; font:-size:1rem;"><img src="./image/51hrpai.jpg" style="width:100%;"/>关注51HR派获更多资讯</p>
		<p class="textstyle" style="text-align:center; font:-size:1rem;"><img src="./image/51HR.jpg" style="width:100%;"/>扫码领取完整报告</p>

		</td>
	</tr>
	
</table>



<div style="margin:5rem 0;">&emsp;</div>


<!------------------------------------------- 底部 --------------------------------------->
<?php include_once("./bottom01_test.php"); ?>
<script src="//js.51jobcdn.com/in/js/market/jianli/js/bootstrap.min.js?20180319"></script>
</body>
</html>