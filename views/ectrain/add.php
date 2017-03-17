<?php
$this->title = '添加培训信息';
?>

<script type="text/javascript">
    var listallUrl = "<?=yii::$app->urlManager->createUrl('ectrain/find-by-attri')?>";
    var insertUrl = "<?=yii::$app->urlManager->createUrl('ectrain/add-one')?>";
</script>
<script type="text/javascript" src="js/admin/ectrain/add.js"></script>

<div class="pad-lr-10">
    <form name="myform" action="" method="post" id="myform" target="iframeId">
        <div class="pad_10">
            <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
                <table width="100%" cellspacing="0" class="table_form contentWrap">
                    <tr>
                        <th >培训名：</th>
                        <td><input type="text" style="width:250px;" name="name" id="name"  class="input-text"/></td>
                    </tr>
                    <tr>
                        <th>培训类别：</th>
                        <td><select type="text" style="width:250px;height: 30px;" name="category" id="category"  class="input-text"/></td>
                    </tr>
                    <tr>
                        <th>内容：</th>
                        <td><textarea style="width:500px;height:100px;" name="content" id="content" ></textarea></td>
                    </tr>
                    <tr>
                        <th>天数：</th>
                        <td><input type="text" style="width:250px;" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" name="dayNum" id="dayNum"  class="input-text"/></td>
                    </tr>
                    <tr>
                        <th>期数：</th>
                        <td><select type="text" style="width:250px;height: 30px;" name="period" id="period" class="input-text"></td>
                    </tr>
                    <tr>
                        <th>人数：</th>
                        <td><input type="text" style="width:250px;" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"  name="peopleNum" id="peopleNum" class="input-text"></td>
                    </tr>
                    <tr>
                        <th>针对人群：</th>
                        <td><input type="text" style="width:250px;"  name="target" id="target" class="input-text"></td>
                    </tr>
                    <tr>
                        <th>发布人：</th>
                        <td><input type="text" style="width:250px;"  name="publisher" id="publisher" class="input-text"></td>
                    </tr>
                    <tr>
                        <th>产品缩略图：</th>
                        <td>
                            <input type="text" style="display:none;" name="picUrl" id="picUrl" class="input-text"/>
                            <iframe frameborder=0 width="100%" height=20px scrolling=no src="<?=yii::$app->urlManager->createUrl('ectrain/upload')?>"></iframe>
                        </td>
                    </tr>
                    <tr>
                        <th>产品大图：</th>
                        <td>
                            <input type="text" style="display:none;" name="thumbnailUrl" id="thumbnailUrl" class="input-text"/>
                            <iframe frameborder=0 width="100%" height=20px scrolling=no src="<?=yii::$app->urlManager->createUrl(['ectrain/upload','detail'=>'detail'])?>"></iframe>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="bk10"></div>
        </div>
    </form>
    <div class="table-list">
        <div class="rightbtn">
            <input type="button" class="buttonsave" value="增加" name="dosubmit" onclick="add()" />
            <input type="button" class="buttonclose" value="关闭" name="dosubmit"  onclick="window.top.$.dialog.get('ectrain_add').close();"/>
        </div>
    </div>
</div>

