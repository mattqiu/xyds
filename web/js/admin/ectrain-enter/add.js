// 加载字典信息
$(document).ready(function(){

	generateDict('DICT_SEX','gender','性别');
})
//页面校验
$(function(){
	$.formValidator.initConfig({
		formid:"myform",
		autotip:true,			//是否显示提示信息
		onerror:function(msg,obj){
		window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})
		}});
	// 校验模型名称					
	$("#truename").formValidator({
		onshow:"请输入姓名！",
		onfocus:"请输入姓名！"})
		.inputValidator({               //校验不能为空
			min:1,
			onerror:"请输入姓名！"})
	$("#idCardNo").formValidator({
				onshow:"请输入身份证号！",
				onfocus:"请输入身份证号！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入身份证号！"})
	$("#mobile").formValidator({
				onshow:"请输入手机号！",
				onfocus:"请输入手机号！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入手机号！"})
	$("#address").formValidator({
				onshow:"请输入地址！",
				onfocus:"请输入地址！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入地址！"})
	$("#gender").formValidator({
				onshow:"请输入性别！",
				onfocus:"请输入性别！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入性别！"})
	$("#age").formValidator({
				onshow:"请输入年龄！",
				onfocus:"请输入年龄！"})
			.inputValidator({               //校验不能为空
				min:1,
				onerror:"请输入年龄！"})
})

/**
 * 添加过滤
 * @param path
 * @return
 */
function add(){
	if($.formValidator.pageIsValid()){ // 表单提交进行校验
		var paraStr = "";
		paraStr += "&trainId=" + $("#trainId").val();
		paraStr += "&truename=" + $("#truename").val();
		paraStr += "&mobile=" + $("#mobile").val();
		paraStr += "&idCardNo=" + $("#idCardNo").val();
		paraStr += "&address=" + $("#address").val();
		paraStr += "&gender=" + $("#gender").val();
		paraStr += "&age=" + $("#age").val();

		$.ajax({
			url: insertUrl,
			type: "post",
			dataType: "text",
			data:paraStr ,
			async: "false",
			success: function (data) {
				if(data == "success"){
					window.top.art.dialog({
						content: '添加成功！',
						lock: true,
						width: 250,
						height: 80,
						border: false,
						time: 2
					}, function () {
					});
					window.top.$.dialog.get('enter_add').close();
					art.dialog.parent.document.getElementById("iframeId").src=listallUrl;
				}else{
					window.top.art.dialog({
						content: '添加失败！',
						lock: true,
						width: 250,
						height: 80,
						border: false,
						time: 2
					}, function () {
					});
				}

			},
			error:function(data){
				window.top.art.dialog({
					content: '添加失败！',
					lock: true,
					width: 250,
					height: 80,
					border: false,
					time: 2
				}, function () {
				});
			}
		});

	}
}