<html>
<head>
    <title>镁渡电子--管理页面</title>
    <style type=text/css>
        body  { background:#39867B; margin:0px; font:9pt 宋体; }
        table  { border:0px; }
        td  { font:normal 12px 宋体; }
        img  { vertical-align:bottom; border:0px; }
        a  { font:normal 12px 宋体; color:#000000; text-decoration:none; }
        a:hover  { color:#cc0000;text-decoration:underline; }
        .sec_menu  { border-left:1px solid white; border-right:1px solid white; border-bottom:1px solid white; overflow:hidden; background:#C6EBDE; }
        .menu_title  { }
        .menu_title span  { position:relative; top:2px; left:8px; color:#39867B; font-weight:bold; }
        .menu_title2  { }
        .menu_title2 span  { position:relative; top:2px; left:8px; color:#cc0000; font-weight:bold; }
    </style>
    <SCRIPT language=javascript1.2>
        function showsubmenu(sid)
        {
            whichEl = eval("submenu" + sid);
            if (whichEl.style.display == "none")
            {
                eval("submenu" + sid + ".style.display=\"\";");
            }
            else
            {
                eval("submenu" + sid + ".style.display=\"none\";");
            }
        }
    </SCRIPT>
</head>
<BODY leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width=100% cellpadding=0 cellspacing=0 border=0 align=left>
    <tr><td valign=top>
            <table width=158 border="0" align=center cellpadding=0 cellspacing=0>
                <tr>
                    <td height=42 valign=bottom>
                        <img src="images/title.gif" width=158 height=38>
                    </td>
                </tr>
            </table>
            <table cellpadding=0 cellspacing=0 width=158 align=center>
                <tr>
                    <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background=images/title_bg_quit.gif id=menuTitle0>
                    <span><a href="Admin_Index_Main.asp" target=main><b>管理首页</b></a> | <a href=Admin_logout.asp target=_top><b>退出</b></a></span>
                    </td>
                </tr>
                <tr>
                    <td style="display:" id='submenu0'>
                        <div class=sec_menu style="width:158">
                            <table cellpadding=0 cellspacing=0 align=center width=130>
                                <tr><td height=20>用户名：<%=session("Admin")%></td></tr>
                                <tr><td height=20>权&nbsp;&nbsp;限：
                                        <%
                                        select case session("purview")
		  	case 1
				response.write "管理员"
			case 2
				response.write "销售"
			case 3
				response.write "采购"
			case 4
				response.write "入库"
			case 5
				response.write "出库"
			case 6
				response.write "财务"


		  end select
		  %><%=session("saleqx")%></td></tr>
                            </table>
                        </div>
                        <div  style="width:158">
                            <table cellpadding=0 cellspacing=0 align=center width=130>
                                <tr><td height=20></td></tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>


            <table cellpadding=0 cellspacing=0 width=158 align=center>
                <tr>
                    <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_2.gif" id=menuTitle2 onClick="showsubmenu(2)" style="cursor:hand;">
                    <span>常规设置</span> </td>
                </tr>
                <tr>
                    <td style="display:" id='submenu2'> <div class=sec_menu style="width:158">
                            <table cellpadding=0 cellspacing=0 align=center width=130>
                                <tr>
                                    <td width="127" height=20><a href=siteconfig/Admin_fabu.asp target=main>发布信息</a>
                                        | <a href=siteconfig/Admin_zhaopin_list.asp target=main>管理</a></td>
                                </tr>
                                <tr>
                                    <td height=25><a href="siteconfig/cx.asp" target="main">查询统计</a></td>
                                </tr><% if session("purview")=1 then%>
                                <tr>
                                    <td height=25><a href="siteconfig/huili.asp" target="main">基本折扣率</a></td>
                                </tr><%else%><%end if%>
                            </table>
                        </div>
                        <div  style="width:158">
                            <table cellpadding=0 cellspacing=0 align=center width=130>
                                <tr>
                                    <td height=20></td>
                                </tr>
                            </table>
                        </div></td>
                </tr>
            </table>
            <%'========新增管理员配置开始===========%>
    <table cellpadding=0 cellspacing=0 width=158 align=center>
 <tr>
        <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_8.gif" id=menuTitle9 onClick="showsubmenu(9)" style="cursor:hand;">
          <span>操作员配置</span> </td>
  </tr>
  <tr>
  <td style="display:" id='submenu9'>
<div class=sec_menu style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr>
                <td height=20><a href=Admin_Admin.asp?Action=Add target=main>操作员添加</a></td>
              </tr>
<tr>
                <td height=20><a href=Admin_Admin.asp target=main>操作员管理</a></td>
              </tr>
</table>
	  </div>

	  <div  style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr><td height=20></td></tr>
</table>
	  </div>
	</td>
  </tr>
</table>
<%'========新增管理员配置结束===========%>


</body>
</html>