<?php
include_once(getenv('ROOT_PATH') . '/common/mkt.bootstrap.php');
//ҳ����
$sPage = "report2019";
//������ʷ
use bll\mkt\awards\AwardsSearchBll;
$oAwardsSearchBll = new AwardsSearchBll();
$aSearchHistory = $oAwardsSearchBll->getAwardsSearchHistory([]);

$bWap = false;

if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || (isset($_SERVER['HTTP_VIA']) && false !== stristr($_SERVER['HTTP_VIA'], 'wap')) || (isset($_SERVER['HTTP_ACCEPT']) && ((false !== strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml')) && ((false === strpos($_SERVER['HTTP_ACCEPT'], 'text/html')) || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))))  //�����HTTP_X_WAP_PROFILE��һ�����ƶ��豸
{
	$bWap = true;
}
else
{
	$aAgent = array('ios','ucbrowser','mqq','nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap',
	);

	if (isset($_SERVER['HTTP_USER_AGENT']))
	{
		// ��HTTP_USER_AGENT�в����ֻ�������Ĺؼ���
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
<title>������һ������ҵǰ�����鱨��</title>
<meta name="description" content="ǰ������Ϊ�����ṩȫ�¡�׼ȷ����ҵְλ��Ƹ��Ϣ��Ϊ��ҵ�ṩ�˲���Ƹ����ͷ����ѵ������������������ڵ�ȫ��λ��������Դ���񣬰���������ְ������ҵ��˲���ļ���˲�����������">
<meta name="keywords" content="�˲ţ���Ƹ����������������ְ�����ԣ�ӦƸ�����ۣ���н����ְ����ͷ��н�꣬н�ʣ���ѵ������������">
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

<!-- �� Bootstrap4 ���� CSS �ļ� -->
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 
<!-- jQuery�ļ��������bootstrap.min.js ֮ǰ���� -->
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
 
<!-- bootstrap.bundle.min.js ���ڵ�������ʾ�������˵��������� popper.min.js -->
<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
 
<!-- ���µ� Bootstrap4 ���� JavaScript �ļ� -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- ���� echarts.js -->
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
  	if(obj.value==''||obj.value=='��������������')
  	{
  	   obj.focus();
  	   return false;
  	}
}

</script>


<style type="text/css">
html,body{width:100%;height:100%;font-family: "Agency FB","΢���ź�";}
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
	    include_once MKT_TEMPLATE_PATH."/awards/common/header.template.php";
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
				<span style="color: #000;font-size:6rem; font-weight:bold;">������һ������ҵ�������
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
			<p class="textstyle">11��17�ս�������֪ͨ����չ��2023���У��ҵ��У԰��Ƹ�¡�ϵ�У���ʾ2023��ȫ����ͨ��У��ҵ����ģԤ�ƴ�1158���ˣ�ͬ������82���ˡ�</p>
			<p class="textstyle">��һ���ҵ��������2019����ѧ��������2020~2022���������飬�����������꣬�������ڲ�ͬ�����������������¿Ρ�����ʵϰ�����������ڲ���ѧ�����Լ��ľ�ҵǰ;�е���û�ס�����ͬ���ټҳ����ڱ��ˡ���ֻ�ܶ��С�</p>
			<br/>
			<h1 style="color:#369;">��ҵ�ԡ�����һ���������ʶ��</h1>
			<p class="textstyle">�����ر�ɷ���100�ҹ�����HR������2023���ҵ���к�ӡ����������α仯�Ƚ������˽⣬�����˱��ڵġ�������һ������ҵǰ�����鱨�桷��</p>
			<br/>
			<h1 style="color:#369;">��Ҫ���֣�</h1>
			<p class="textstyle"><strong>����һ��52%����ҵֻ��רҵ��������18%����ҵ�����α�ʾ����</strong></p>
			<p class="textstyle">����������ʾ�����ڡ�����һ��������ְ����52%����ҵ��ʾ�������һ��ѧ���й۸��ϵı仯�������ص��Ǹ���������18%����ҵ��ʾ������Ϊ���Ĵ�ѧ�����������ֹۣ�10%����ҵ��ʾ�����ر�ҵ����ѧУ��ѧ����</p>
			<p class="textstyle" style="text-align:center; margin-top:2rem;"><img src="http://img01.51jobcdn.com/im/mk/artimages/170174.png" style="width:45%;"/></p>
			<br/>
			<p class="textstyle"><strong>���ֶ�����������������������ҵ ����Ҫר��</strong></p>
			<p class="textstyle">������ҵ�Ա�ҵ��ѧ���������У�������ʾ������Ҫר�Ƶ�ǰ�����ҵΪ������/�������������졢���ۡ�������/���̡����ز���</p>
			<p class="textstyle" style="text-align:center; margin-top:2rem;"><img src="https://img01.51jobcdn.com/im/mk/artimages/170175.png" style="width:45%;"/></p>
			<br/>
			<p class="textstyle"><strong>������������һ�����ҵ �����2023���ҵ������</strong></p>
			<p class="textstyle">���2022�죬����һ�����ҵ����ٶ�2023�����Ƹ�����п����˾��࣬ռ�ȴ�61%������ǹ�����ҵ��59%������Ӫ��ҵ��56%���������ӵı������ԣ�������ҵ��࣬ռ��Ϊ23%���������Ӫ��ҵ��18%���������˾��6%����</p>
			<p class="textstyle" style="text-align:center; margin-top:2rem;"><img src="https://img01.51jobcdn.com/im/mk/artimages/170176.png" style="width:45%;"/></p>
			<br/>
			<p class="textstyle"><strong>���෢��</strong></p>
			<p class="textstyle">��ҵ���ڱ�ҵ����ѧ��Ҫ����Σ�<br/>��Щ��ҵ����Ҫ��������<br/>��Щ��ҵ����Ҫ�о�����<br/>���2022�죬��ͬ��ҵ2023�����Ƹ������ʲô�仯��<br/>��ԡ�����һ��������ְ����HR����ô˵��<br/>......</p>


			<p class="textstyle" style="text-align:center; font:-size:1rem; margin-top:2rem; color: #ccc; font-weight:bold;">
			ɨ��ظ�������һ��������ȡ��������<br/>
			<img src="./image/51HR.jpg" style="width:20%;"/></p>
			
		</td>
		<td width="200" align="left" valign="top" style="padding-left:3rem; padding-top:2rem;">
		
		<p class="textstyle" style="text-align:center; font:-size:1rem;"><img src="./image/51hrpai.jpg" style="width:100%;"/>��ע51HR�ɻ������Ѷ</p>
		<p class="textstyle" style="text-align:center; font:-size:1rem;"><img src="./image/51HR.jpg" style="width:100%;"/>ɨ����ȡ��������</p>

		</td>
	</tr>
	
</table>



<div style="margin:5rem 0;">&emsp;</div>


<!------------------------------------------- �ײ� --------------------------------------->
<?php include_once("./bottom01_test.php"); ?>
<script src="//js.51jobcdn.com/in/js/market/jianli/js/bootstrap.min.js?20180319"></script>
</body>
</html>