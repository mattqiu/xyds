
//打开添加页面
function openadd(){
	$.dialog({id:'shoplink_add'}).close();
	$.dialog.open(addUrl, {
		title: '添加网店链接',
		width: 700,
		height:550,
		lock: true,
		border: false,
		id: 'shoplink_add',
		drag:true
	});
}

//查询功能
function search(){
	if(str_is_null($('#shopName').val())) {
        $('.checkTip').html('至少有一个查询条件不为空');
		return ;
	}
	var paraStr = "&shopName="+$('#shopName').val();
	$('#iframeId').attr('src',listallUrl+paraStr);
}
