<?php
use yii\helpers\Html;
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?><!--生成一个替换字符，表示css和js的引用代码在这里显示-->

        <!--核心CSS-->
        <link href="css/admin/reset.css" rel="stylesheet" type="text/css">
        <link href="css/admin/system.css" rel="stylesheet" type="text/css">
        <link href="css/admin/public.css" rel="stylesheet" type="text/css">
        <link href="css/admin/table_form.css" rel="stylesheet" type="text/css">
        <!--TAB样式-->
        <link href="css/tabpanel/core.css" rel="stylesheet" type="text/css">
        <link href="css/tabpanel/TabPanel.css" rel="stylesheet" type="text/css">
        <link href="css/tabpanel/Toolbar.css" rel="stylesheet" type="text/css">
        <link href="css/tabpanel/WindowPanel.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <!--弹窗-->
        <script type="text/javascript" src="js/dialog/dialog.js"></script>
        <script type="text/javascript" src="js/admin/styleswitch.js"></script>
        <script type="text/javascript" src="js/admin/hotkeys.js"></script>
        <script type="text/javascript" src="js/admin/jquery.sGallery.js"></script>
        <!--表单验证-->
        <script language="javascript" type="text/javascript" src="js/admin/formvalidatorregex.js" charset="utf-8"></script>
        <script language="javascript" type="text/javascript" src="js/admin/formvalidator.js" charset="utf-8"></script>
        <!--TAB JS-->
        <script type="text/javascript" src="js/tabpanel/Fader.js"></script>
        <script type="text/javascript" src="js/tabpanel/TabPanel.js"></script>
        <script type="text/javascript" src="js/tabpanel/Math.uuid.js"></script>
        <script type="text/javascript" src="js/tabpanel/Toolbar.js"></script>
        <script type="text/javascript" src="js/tabpanel/WindowPanel.js"></script>
        <script type="text/javascript" src="js/tabpanel/Drag.js"></script>
        <!--弹出图片-->
        <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <!--公共函数-->
        <script type="text/javascript" src="js/common.js"></script>
        <script type="text/javascript">
            var listdictUrl = "<?=yii::$app->urlManager->createUrl('dict/findall')?>";
            //var checkusernameUrl = "<?=yii::$app->urlManager->createUrl('user/check-username')?>";
            //var insertUrl = "<?=yii::$app->urlManager->createUrl('user/add-one')?>";
        </script>
        <script type="text/javascript" src="js/admin/user/add.js"></script>
    </head>
    <body>
        <div class="pad-lr-10">
            <form name="myform" action="" method="post" id="myform" target="iframeId">
                <div class="pad_10">
                    <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
                        <table width="100%" cellspacing="0" class="table_form contentWrap">
                            <tr>
                                <th width="100">用&nbsp;户&nbsp;名&nbsp;：</th>
                                <td><input type="text" style="width:250px;" name="username" id="username"  class="input-text"/></td>
                            </tr>
                            <tr>
                                <th>用户姓名：</th>
                                <td><input type="text" style="width:250px;" name="truename" id="truename"  class="input-text"/></td>
                            </tr>
                            <tr>
                                <th width="100">用户密码：</th>
                                <td><input type="password" style="width:250px;" name="password" id="password"  value="888888" class="input-text"/></td>
                            </tr>


                            <tr>
                                <th>联系电话：</th>
                                <td><input type="text" style="width:250px;" name="mobilephone" id="mobilephone" class="input-text"/></td>
                            </tr>

                            <tr>
                                <th>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</th>
                                <td>
                                    <select name="sex" id="sex" style="width:260px;">

                                    </select>
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
                    <input type="button" class="buttonclose" value="关闭" name="dosubmit"  onclick="window.top.$.dialog.get('user_add').close();"/>
                </div>
            </div>
        </div>

    </body>
</html>
<?php $this->endPage() ?>