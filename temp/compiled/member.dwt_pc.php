<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="APPNAME VERSION" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['_SC']['site_name']; ?></title>
<link href="<?php echo $this->_var['template_path']; ?>/css/common.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->_var['template_path']; ?>/css/table.css" rel="stylesheet" type="text/css">
<script src="<?php echo $this->_var['template_path']; ?>/script/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo $this->_var['template_path']; ?>/script/utils.min.js"></script>
</head>
<body>

<?php echo $this->fetch('lib/page_header.lbi'); ?>




<div class="container-wrapper">
	<div class="container" id="main">
		<div class="containerBox">
			<div class="boxHeader">
				<h2>客服管理</h2>
			</div>
			<div class="content">
				<div class="newTips"> <a href=""> <span id="newMsgNum">0</span>条新消息，点击查看 </a> </div>
				<div class="cLine">
					<h3 class="left" id="msg_title"> 客服可以用个人微信来回复问题 </h3>
					<div class="searchbar right">
						<select id="search_field" class="txt left" style="height:29px;">
                        <option value="m.fullname">客服名</option>
						</select>
						<input type="text" id="msgSearchInput" class="txt left" value="" placeholder="输入内容搜索">
						<button id="msgSearchBtn" href="javascript:;" class="btnGrayS left" title="搜索" type="button">搜索</button>
					</div>
					<div class="clr"></div>
				</div>
				<div class="cLine">
					<div class="pageNavigator right"> <span> <a class="prePage" href="javascript:;"> 上一页 </a> </span> <span class="pageNum"></span> <span> <a class="nextPage" href="javascript:;"> 下一页 </a> </span> </div>
				</div>
				

			    <div class="msgWrap">
                </div>



				<input id="list_page" value="0" type="hidden" />
				<input id="list_pagenum" value="0" type="hidden" />
				<div class="cLine">
					<div class="pageNavigator right"> <span> <a class="prePage" href="javascript:;"> 上一页 </a> </span> <span class="pageNum"></span> <span> <a class="nextPage" href="javascript:;"> 下一页 </a> </span> </div>
				</div>



								
			</div>
			<div class="sideBar">
				<div class="catalogList">
					<ul class="shaixuan">
						<li class="selected"> <a href="member.php">客服管理</a> </li>
						<li class=""> <a href="member.php?ac=add">添加客服</a> </li>
						<!--
						<li class=" subCatalogList "> <a href="">今天</a> </li>
						<li class="  "> <a href="">星标咨询</a> </li>
					    -->
					</ul>
					
				</div>
			</div>
			<div class="clr"></div>
		</div>
	</div>
	 
</div>







				 <script>
				 $(function(){
                     list();
					 					 
					 $('#msgSearchBtn').click(function(){
                               $('#list_page').val(1);
							   list();
                     });

                     $('.prePage').click(function(){
                               if(parseInt($('#list_page').val())>1){
                                    $('#list_page').val(parseInt($('#list_page').val())-1);
	                                list();
                               }
                     });

                     $('.nextPage').click(function(){
                              if(parseInt($('#list_page').val())<parseInt($('#list_pagenum').val())){
                                    $('#list_page').val(parseInt($('#list_page').val())+1);
	                                list();
                              }
                     });
					 
					 
				 });
				 
	function list(){
		var data= new Object;
		data.ac='member_list';
		data.page=$('#list_page').val();
		data.search_field=$('#search_field').val();	
		data.search_keyword=$('#msgSearchInput').val();
	 $.ajax({
         type:'POST',
	     dataType:'json',
         url: 'member.php',
         data:data,
         async: true,
         success:function(json){
              var str='';
			  str+=''+
			  '<table width="100%" cellspacing="0" cellpadding="0" border="0" class="ListProduct">'+
              '<thead>'+
              '  <tr>'+
              '    <th>客服名字</th>'+
			  '    <th>手机号</th>'+
			  '    <th>微信绑定码</th>'+
			  '    <th>微信绑定状态</th>'+
              '    <th>操作</th>'+
              '  </tr>'+
              '</thead>'+
              '<tbody>'+
                '<tr></tr>';

	          if(json.total>0){
	              $(json.member_list).each(function(i,n){
					  
					  str+='<tr>'+
					  '<td>'+n.fullname+'</td>'+
					  '<td>'+n.mobile+'</td>'+
					  '<td>'+n.weixin_code+'</td>';
					  if(n.weixin_state==1){
					    str+='<td>已绑定</td>';
					  }else{
					    str+='<td>未绑定</td>';
					  }
                 str+='<td class="norightborder">&#12288;<a  class="btnGreen" href="member.php?ac=edit&uid='+n.uid+'">编辑</a>&#12288;</td>'
					  '</tr>';

		         });
			 str+=''+
              '</tbody>'+
              '</table>';
				 	
		        $('.msgWrap').html(str);
				$('#list_page').val(json.page);
				$('#list_pagenum').val(json.pagenum);
				$('.pageNum').html('&nbsp;&nbsp;'+json.page+'&nbsp;/&nbsp;'+json.pagenum+'&nbsp;&nbsp;');
	         }else{
		        $('.msgWrap').html('还没有添加任何客服');
				$('#list_page').val(json.page);
				$('#list_pagenum').val(json.pagenum);
				$('.pageNum').html('&nbsp;&nbsp;'+json.page+'&nbsp;/&nbsp;'+json.pagenum+'&nbsp;&nbsp;');
			 }
         }});
	  }//end function	
	  
   function convertArray(o) { 
         var v = {};
         for (var i in o) {
         if (typeof (v[o[i].name]) == 'undefined') v[o[i].name] = o[i].value;
         else v[o[i].name] += "," + o[i].value;
         }
         return v;
   } 	  			 
				 </script>	



<div style="height:50px"></div>
 

<?php echo $this->fetch('lib/page_footer.lbi'); ?>

</body></html>