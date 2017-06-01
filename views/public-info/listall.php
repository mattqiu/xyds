<?php
$this->title = '新闻列表';
?>
<script type="text/javascript">
    var pageUrl = "<?=yii::$app->urlManager->createUrl('public-info/find-by-attri')?>";
    var editUrl = "<?=yii::$app->urlManager->createUrl('public-info/update')?>";
    var deleteUrl = "<?=yii::$app->urlManager->createUrl('public-info/delete-one')?>"
    var deleteallUrl = "<?=yii::$app->urlManager->createUrl('public-info/delete-more')?>"
    var detailUrl = "<?=yii::$app->urlManager->createUrl('public-info/find-one')?>"
</script>
<script language="javascript" type="text/javascript" src="js/admin/public-info/listall.js" charset="utf-8"></script>

<div class="pad-lr-10">
    <div class="table-list">
        <table width="100%" cellspacing="0" id="user_list">
            <thead id="dict_list_head">
            <tr align="left">
                <th width="50px" align="left"><input type="checkbox" id='check_box' onclick="selectall('id')"/>全选/取消</th>
                <th width="30px" align="left">序号</th>
                <th width="200px" align="left">标题</th>
                <th width="80px" align="left">作者</th>
                <th width="100px" align="left">发布时间</th>
                <th width="80px" align="left">信息类别</th>
                <th width="100px" align="center">操作</th>
            </tr>
            </thead>
            <tbody id="user_list_body">
            <?if(!is_null($publicInfo)){?>
            <?php foreach ($publicInfo as $index => $val){?>
                <tr align="left">
                    <td align="left"><input type="checkbox" id="id" name="id" value="<?=$val->id?>"/></td>
                    <td align="left"><?=$index+$pages->page*$pages->pageSize+1?></td>
                    <td align="left"><a href="javascript:detail('<?=$val->id?>','<?=$val->title?>')"><?php if(strlen($val->title)>45) {
                                echo mb_substr($val->title, 0, 15,"utf-8") . '...';
                            }else{
                                echo $val->title;
                            }?></a></td>
                    <td align="left"><?=$val->author?></td>
                    <td align="left"><?=substr($val->published,0,10)?></td>
                    <td align="left"><?=$val->category?></td>
                    <td align="center">
                        <a href="javascript:openedit('<?=$val->id?>','<?=$val->title?>')">修改</a>&nbsp;&nbsp;
                        |&nbsp;&nbsp;<a href="javascript:deletePublicInfo('<?=$val->id?>')">删除</a>
                    </td>
               </tr>
                <?}?>
                <?}?>
            </tbody>
        </table>
        <div class="btn">
            <label for="check_box"><input type="checkbox" id='check_box' onclick="selectall('id')"/>全选/取消</label>
            <input type="button" class="buttondel" name="dosubmit" value="删除" onclick="if (confirm('您确定要删除吗？')) delopt();"/>
        </div>
        <div id="pages">
            <a><?=$pages->totalCount?>条/<?=$pages->pageCount?>页</a>
            <input type="hidden" value="<?=$pages->page?>" id="curPage"/><!--当前页-->
            <input type="hidden" value="<?=$pages->pageCount?>" id="pageCount"/><!--总页数-->
            <input type="hidden" value="<?=$pages->pageSize?>" id="pageSize"/><!--每页显示数-->
            <?if($pages->page>0){?>
                <!-- 判断是否不是第一页 -->
                <a id="firstPageid" href="javascript:page('1')">首页</a>
                <a id="supPageId" href="javascript:page('2')">上一页</a>
            <?}?>
            <?=$pages->page+1?>
            <?if($pages->page<$pages->pageCount-1){?>
                <!-- 判断如果不是最后一页 -->
                <a id="nextPageid" href="javascript:page('3')">下一页</a>
                <a id="lastPageid" href="javascript:page('4')" class="a1">尾页</a>
            <?}?>
            <input type="text" size="2" class="input-text" value="<?=$pages->page+1?>" id="goPage"/><a href="javascript:page('0')">GO</a>
        </div>
    </div>
</div>

<form action="<?=yii::$app->urlManager->createUrl('public-info/find-by-attri')?>" method="get" id="pageForm">
    <input type="hidden" id="page" name="page" value="<?=$pages->page?>"/>
    <input type="hidden"  name="r" value="public-info/find-by-attri"/>
    <input type="hidden" id="pre-page" name="pre-page" value="<?=$pages->pageSize?>"/>
    <input type="hidden" id="title" name="title" value="<?=$para['title']?>"/>
</form>
