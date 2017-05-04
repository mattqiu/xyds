<?php
$this->title = "首页";
?>

<link rel="stylesheet" type="text/css" href="css/css/common.css">
<link rel="stylesheet" type="text/css" href="css/css/index.css">
<script type="text/javascript">
var indexUrl = "<?=yii::$app->urlManager->createUrl('article/index-article')?>";
var findUrl = "<?=yii::$app->urlManager->createUrl('ectrain/ectrain-index')?>";
var VideoUrl = "<?=yii::$app->urlManager->createUrl('video/video-index')?>";
var infoUrl = "<?=yii::$app->urlManager->createUrl('public-info/info-one')?>";
var infoDetail = "<?=yii::$app->urlManager->createUrl('front/info-detail')?>";
var infoAllUrl = "<?=yii::$app->urlManager->createUrl('public-info/index-info')?>";
var companyUrl = "<?=yii::$app->urlManager->createUrl('company/company-index')?>";
var companyDetailUrl = "<?=yii::$app->urlManager->createUrl('front/enterprise-detail')?>";
var stateUrl = "<?=yii::$app->urlManager->createUrl('public-info/state')?>";
var ecInfoDetailUrl = "<?=yii::$app->urlManager->createUrl('front/ec-info-detail')?>";
var trainDetailUrl = "<?=yii::$app->urlManager->createUrl('front/train-detail')?>";
var ecCategoryUrl = "<?=yii::$app->urlManager->createUrl('ectrain/ec-category')?>";
var serviceSiteUrl = "<?=Yii::$app->urlManager->createUrl('service-site/service-site')?>";
var trainUrl = "<?=Yii::$app->urlManager->createUrl('front/train-notice')?>";
</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=4cXNyMR23iSxTmEEzcyNcjdd6GuBvaef"></script>
<script type="text/javascript" src="js/front/index.js"></script>
<script type="text/javascript" src="js/front/service_site.js"></script>

<!-- 轮播部分 -->
<div id="slidershow1" class="carousel slide hidden-xs" data-ride="carousel" data-wrap="true" data-pause="hover" data-interval="5000"  >
	<ol class="carousel-indicators">
		<li class="active" data-target="#slidershow1" data-slide-to="0"></li>
		<li data-target="#slidershow1" data-slide-to="1"></li>
		<li data-target="#slidershow1" data-slide-to="2"></li>
		<li data-target="#slidershow1" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<a href="<?=Yii::$app->urlManager->createUrl('front/ec-info')?>"><img class="center-block" alt="轮播图" src="images/images_index/banner1.jpg" /></a>
		</div>
		<div class="item">
			<a href="<?=Yii::$app->urlManager->createUrl('front/ec-info')?>"><img class="center-block" alt="轮播图" src="images/images_index/banner2.jpg" /></a>
		</div>
		<div class="item">
			<a href="<?=Yii::$app->urlManager->createUrl('front/ec-info')?>"><img class="center-block" alt="轮播图" src="images/images_index/banner3.jpg" /></a>
		</div>
		<div class="item">
			<a href="<?=Yii::$app->urlManager->createUrl('front/ec-info')?>"><img class="center-block" alt="轮播图" src="images/images_index/banner4.jpg" /></a>
		</div>
	</div>
</div>
<!-- 正文部分 -->
<!-- 电商资讯 -->
<div class="zixun">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 column column_mt">
				<div class="redbar">
				</div>
				<span class="f_clearCss">电商资讯</span>
				<a class="btn btn-default col-xs-12 col-sm-2 col-md-1 tabH tab_btn1 hover" role="button">
					政策指引
				</a>
				<a class="btn btn-default col-xs-12 col-sm-2 col-md-1 tabH tab_btn2" role="button">
					行业资讯
				</a>
				<a class="btn btn-default col-xs-12 col-sm-2 col-md-1 tabH tab_btn3" role="button">
					企业资讯
				</a>
				<a class="btn btn-default col-xs-12 col-sm-2 col-md-1 tabH tab_btn4" role="button">
					供求信息
				</a>
				
			</div>
		</div>
	</div>



<hr />
<div class="container tab">
	<!-- 电商资讯接口 -->

	<!--END 电商资讯接口 -->
</div>
</div>
<!-- 电商培训 -->
<div class="zixun">
<hr />
<div class="container">
	<div class="row">
		<div class="col-xs-12 column column_train">
			<div class="redbar">
			</div>
			<span class="f_clearCss"><a  href="<?=Yii::$app->urlManager->createUrl('front/ectrain')?>">电商培训</a></span>
		</div>
	</div>
</div>
<hr />
<div class="container">
	<div class="row ">
		<div class="col-xs-12 col-sm-12 col-md-4 distance_b">
			<div id="slidershow3" class="carousel slide " data-ride="carousel" data-wrap="true" data-pause="hover" data-interval="5000"  >
				<ol class="carousel-indicators point point_train">
					<li class="active" data-target="#slidershow3" data-slide-to="0"></li>
					<li data-target="#slidershow3" data-slide-to="1"></li>
					<li data-target="#slidershow3" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner zixun_banner row_train" >
					<!-- 电商培训接口 -->

					<!-- END 电商培训接口 -->
				</div>
			</div>
		</div>
		<ul class="col-xs-2 col-sm-2 col-md-2 train_img hidden-xs hidden-sm">
			<!-- <li class="artist_hover"><a href="">美工培训</a></li>
			<li class="service_hover"><a href="">前端培训</a></li>
			<li class="sales_hover"><a href="">文案培训</a></li>
			<li class="more_hover"><a href="">运营培训</a></li> -->
			<!-- <a class="trainde" href="<?=Yii::$app->urlManager->createUrl('front/train-notice')?>"><img src="images/images_index/artist.png" alt="美工培训" class="img-responsive center-block artist_hover"></a>
			<a href="<?=Yii::$app->urlManager->createUrl('front/train-notice')?>"><img src="images/images_index/service.png" alt="销售培训" class="img-responsive center-block service_hover"></a>
			<a href="<?=Yii::$app->urlManager->createUrl('front/train-notice')?>"><img src="images/images_index/sales.png" alt="客服培训" class="img-responsive center-block sales_hover"></a>
			<a href="<?=Yii::$app->urlManager->createUrl('front/train-notice')?>"><img src="images/images_index/more.png" alt="其它培训" class="img-responsive center-block more_hover"></a> -->
		</ul>
		<div class="col-xs-10 col-sm-10 col-md-6 ">
			<div class="train_media">
				<!-- 视频接口 -->

				<!-- END视频接口 -->
			</div>
		</div>
	</div>
</div>
</div>
<!-- 信息公开 -->
<div class="zixun">
<hr />
<div class="container">
	<div class="row">
		<div class="col-xs-12 column column_train">
			<div class="redbar">
			</div>
			<span class="f_clearCss"><a  href="<?=yii::$app->urlManager->createUrl('front/public-info')?>">信息公开</a></span>
		</div>
	</div>
</div>
<hr />
<div class="container">
	<div class="row ">
		<div class="col-xs-12 col-sm-12 col-md-4 distance_b">
			<div class="carousel-inner zixun_banner row_newsOpen" >
				<!-- 信息公开接口 -->

				<!-- END信息公开接口 -->
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="row">
				<div class="col-xs-12 tender_title">
					<img class="" src="images/images_index/xinxi_icon1.png" alt="">
					<span>招标最新进展</span>
				</div>
			</div>
			<div class="row_public">

			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="tender_title publicity">
				<img class="" src="images/images_index/xinxi_icon1.png" alt="">
				<span>相关公告公示</span>
			</div>

			<div class="zixun_camera row_open">
			<!-- 信息公开接口 -->

				<!-- 	END信息公开接口	 -->
			</div>

		</div>
	</div>
</div>
</div>
<!-- 企业展示 -->
<div class="zixun">
<hr />
<div class="container">
	<div class="row">
		<div class="col-xs-12 column column_train">
			<div class="redbar">
			</div>
			<span class="f_clearCss"><a  href="<?=Yii::$app->urlManager->createUrl('front/enterprise-display')?>">企业展示</a></span>
		</div>
	</div>
</div>

<div class="header_c borderbottom">
	<div class="container">
		<div class="row row1">
			<!-- 企业展示接口 -->

			<!-- END企业展示接口 -->
		</div>
	</div>
</div>
</div>
<!-- 数据统计 -->
<div class="zixun">
<div class="container">
	<div class="row">
		<div class="col-xs-12 column column_train">
			<div class="redbar">
			</div>
			<span class="f_clearCss"><a  href="<?=Yii::$app->urlManager->createUrl('front/service-site')?>">服务站点</a></span>
		</div>
	</div>
</div>
<div class="header_c borderbottom">
	<div class="container">
		<div class="row" style="margin-left: 0px; margin-right: 0px;">
			<div id="allmap" style="width:100%;height:500px;border: #ccc 1px solid;overflow: hidden;"></div>
		</div>
	</div>
</div>
</div>

<!-- 返回顶部 -->

	<div class="return hidden-xs">
	</div>

<!-- END返回顶部 -->
