<?php
$this->title =  '上传图片';
?>
<script type="text/javascript">
    var insertUrl = "<?=yii::$app->urlManager->createUrl('user/insert')?>";
    var tag = "<?=$tag?>"

    if(tag == 'success'){

        var picUrl = window.parent.$('#picUrl').val();
        if(picUrl != ''){
            window.parent.$('#picUrl').val("<?=$fileArg['fileSaveUrl']?>");
        }else{
            window.parent.$('#picUrl').val("<?=$fileArg['fileSaveUrl']?>");

        }
    }
</script>
<script type="text/javascript" src="js/admin/company-news/uploads.js"></script>

<form id="uploadForm" name="form1" method="post" action="<?=yii::$app->urlManager->createUrl('company-news/uploads')?>" enctype="multipart/form-data">
    <input type="file" id="fileName" name="file" style="height:18px;border:1px #ff9900;width:250px;"/>
    <input type="button" class="buttonsave" onClick="uploadPic();"  value="上传"/>限制分辨率为250*170（宽*高），大小不超过2M！<div id="productPWDAgainTip"></div>
</form>

