<?
$this->title = '信息公开';
?>
<link rel="stylesheet" type="text/css" href="css/css/details_common.css">
<link rel="stylesheet" type="text/css" href="css/css/info.css">
<script type="text/javascript">
    var dictUrl = "<?=yii::$app->urlManager->createUrl('dict/info')?>";
    var infoUrl = "<?=yii::$app->urlManager->createUrl('public-info/info')?>";
    var infoOneUrl = "<?=yii::$app->urlManager->createUrl('public-info/info-one')?>"
    var infoDetail = "<?=yii::$app->urlManager->createUrl('front/info-detail')?>";
    var stateUrl = "<?=yii::$app->urlManager->createUrl('public-info/state')?>";
</script>
<script src="js/front/info.js"></script>
<script src="js/front/info_page.js"></script>
<img src="images/info/banner_xxgk.jpg" class="img-responsive"/>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 content_box">
            <div class="content_header">&nbsp;信息公开</div>
        </div>
    </div>
</div>
<div class="line"></div>
    <!-- 主要内容 -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">  
                <ul class="list-group content_left public_shadow" id="content_left">

                </ul>
            </div>
    <!-- 文章 -->
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 content_right public_shadow" id="content_right">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                    <img class="img-responsive icon2" src="images/info/icon2.png" alt="图标">
                    <h3>&nbsp;相关公告公示</h3>
                     <ul class="con_ul col-xs-12 col-sm-12 col-md-12 col-lg-12 publicity">

                    </ul>
                    <nav aria-label="Page navigation" class="content_page col-md-12 col-sm-12 col-xs-12">
                        <ul class="pagination pagination-sm cont_circle ui-page" id="ui-page">

                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <img class="img-responsive icon2" src="images/info/icon3.png">
                        <h3>&nbsp;招标最新进展</h3>
                        <div class="carousel-inner zixun_banner " >

                        </div>  
                          <div class="col-xs-12 col-sm-12 col-md-12 row_public">
                            <div class="row">
                                <div class="col-xs-12 tender_title">
                                    <img class="" src="images/images_index/xinxi_icon1.png" alt="">
                                    <span>招标最新进展</span>
                                </div>
                            </div>
                        </div>
                </div>     
        </div>
        </div>
    </div>
