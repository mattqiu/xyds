<?php
$this->title = "修改联系信息";
?>
<script>
    var updateUrl = "<?=yii::$app->urlManager->createUrl('contact/update-one')?>";
</script>
<script language="javascript" type="text/javascript" src="js/admin/contact/edit.js" charset="utf-8"></script>

<div class="pad-lr-10">
<form name="myform" action="" method="post" id="myform" target="center_frame">
    <div class="pad-10">
        <div class="col-tab">
            <ul class="tabBut cu-li">
                <li id="tab_setting_1" class="on" onclick="">修改联系信息</li>
            </ul>
            <div id="div_setting_1" class="contentList pad-10">
                <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
                    <table width="100%" cellspacing="0" class="table_form contentWrap">
                        <tbody>
                        <tr>
                            <th width="50px" align="right"><sub class="redstar">*</sub>姓名:</th>
                            <td><input type="text" id="truename"  class="input-text" style="width:270px;" value="<?=$contact->truename?>"/></td>
                            <input type="hidden" id="id" value="<?=$contact->id?>" />
                            <td class="one"><div id="truenameTip"></div></td>
                        </tr>
                        <tr>
                            <th align="right"><sub class="redstar">*</sub>性别:</th>
                            <td><input type="text" id="gender" class="input-text" style="width:270px;" value="<?=$contact->gender?>" /></td>
                            <td class="one"><div id="genderTip"></div></td>
                        </tr>
                        <tr>
                            <th align="right"><sub class="redstar">*</sub>手机:</th>
                            <td><input type="text" id="mobile" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"   class="input-text" style="width:270px;" value="<?=$contact->mobile?>" /></td>
                            <td class="one"><div id="mobileTip"></div></td>
                        </tr>
                        <tr>
                            <th align="right"><sub class="redstar">*</sub>邮箱:</th>
                            <td><input type="text" id="email"  class="input-text" style="width:270px;" value="<?=$contact->email?>" /></td>
                            <td class="one"><div id="emailTip"></div></td>
                        </tr>
                        <tr>
                            <th align="right">QQ:</th>
                            <td colspan="2"><input type="text" id="QQ" onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');"  class="input-text" style="width:270px;" value="<?=$contact->QQ?>" /></td>
                        </tr>
                        <tr>
                            <th align="right"><sub class="redstar">*</sub>内容:</th>
                            <td colspan="2"><textarea id="content"  style="width:500px;height:100px;" > <?=$contact->content?></textarea></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="bk10"></div>
                <div class="rightbtn">
                    <input type="button" class="buttonconfirm" id="dosubmits" name="dosubmits" value="保存" onclick="edit()"/>
                    &nbsp;&nbsp;<input type="button" class="buttondel" name="dosubmit" value="关闭" onclick="window.top.$.dialog.get('contact_update').close();"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<script type="text/javascript">
    var contentEditor=genEditor('','content','');
</script>