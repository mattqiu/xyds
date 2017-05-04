<?php
$this->title = '职位详情';
?>

<div class="pad-lr-10">
    <form id="myform" action="" method="post">
        <div class="pad_10">
            <div style='overflow-y:auto;overflow-x:hidden' class='scrolltable'>
                <table width="100%" cellspacing="0" class="table_form contentWrap">
                    <tr>
                        <th width="100">职位</th>
                        <td id="position"><?=$companyRecruit->position?></td>
                    </tr>
                    <tr>
                        <th width="100">工作地点</th>
                        <td id="position"><?=$companyRecruit->workPlace?></td>
                    </tr>
                    <tr>
                        <th width="100">学历要求</th>
                        <td id="position"><?=$companyRecruit->record?></td>
                    </tr>
                    <tr>
                        <th width="100">薪资</th>
                        <td id="position"><?=$companyRecruit->salary?></td>
                    </tr>
                    <tr>
                        <th width="100">经验要求</th>
                        <td id="position"><?=$companyRecruit->exp?></td>
                    </tr>
                    <tr>
                        <th width="100">要求</th>
                        <td id="demand"><?=$companyRecruit->demand?></td>
                    </tr>
                    <tr>
                        <th width="100">手机</th>
                        <td id="mobile"><?=$companyRecruit->mobile?></td>
                    </tr>
                    <tr>
                        <th width="100">座机</th>
                        <td id="tel"><?=$companyRecruit->tel?></td>
                    </tr>
                    <tr>
                        <th width="100">邮箱</th>
                        <td id="email"><?=$companyRecruit->email?></td>
                    </tr>
                    <tr>
                        <th width="100">联系人</th>
                        <td id="contacts"><?=$companyRecruit->contacts?></td>
                    </tr>
                    <tr>
                        <th width="100">发布时间</th>
                        <td id="contacts"><?=$companyRecruit->datetime?></td>
                    </tr>
                </table>
            </div>
            <div class="bk10"></div>

            <div class="table-list">

                <div class="rightbtn">
                    <input type="button" class="buttonclose" name="dosubmit" value="关闭" onclick="window.top.$.dialog.get('recruit_detail').close();" />
                </div>
            </div>
    </form>
</div>
