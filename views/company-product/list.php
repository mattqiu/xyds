<?php
$this->title = '产品管理';
?>

<script type="text/javascript">
    window.top.$('#display_center_id').css('display','none');
    //iframe自适应高度
    function iFrameHeight() {
        var ifm= document.getElementById("iframeId");
        var subWeb = document.frames ? document.frames["iframeId"].document : ifm.contentDocument;
        if(ifm != null && subWeb != null) {
            ifm.height = subWeb.body.scrollHeight;
        }
    }
    var listdictUrl  = "<?=yii::$app->urlManager->createUrl('dict/findall')?>";
    var addUrl = "<?=yii::$app->urlManager->createUrl('company-product/add')?>";
    var listallUrl  = "<?=yii::$app->urlManager->createUrl('company-product/find-by-attri')?>";
</script>
<script language="javascript" type="text/javascript" src="js/admin/company-product/list.js" charset="utf-8"></script>
<div class="subnav" id="display" >
    <?php if($companyId != 'admin'&&$companyId != 'all'){?>
        <div class="content-menu ib-a blue line-x">
            <a class="add fb" href="javascript:openadd();"><em>添加产品</em></a>
        </div>
    <?}?>
</div>
<div class="pad-lr-10">
    <form name="searchform" id="searchform" action="" method="post" target="iframeId">
        <table width="100%" cellspacing="0" class="search-form">
            <tbody>
            <tr>
                <td>
                    <div class="explain-col">
                        <div>
                            产品名称：
                            <input id="name" name="name" type="text" value="" class="input-text" />
                            状态：
                            <select id="state" style='width:175px' name="state"></select>
                            &nbsp;<input type="button" onclick="search();" name="dosubmit" class="buttonsearch" value="查询"/>
                            <div class = "checkTip" style="float:right;margin-right:40%;color:red;">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <div class="table-list">
        <iframe id="iframeId" name="iframeId" src="<?=yii::$app->urlManager->createUrl('company-product/find-by-attri')?>"  frameBorder=0 scrolling=no width="100%" onLoad="iFrameHeight()"></iframe>
    </div>
</div>
