<html>
<?php $this->load->helper(array('url','form','html')); ?>
<?php  $attr=array('name'=>'Login')?>
<head>
    <title>管理员登录</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- <base href="<?php echo base_url(); ?>"/>-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Admin_Style.css"/>

    <script language="javascript">
        function SetFocus()
        {
            if (document.Login.UserName.value=="")
                document.Login.UserName.focus();
            else
                document.Login.UserName.select();
        }

    </script>
</head>
<body onLoad="SetFocus();">
<p>&nbsp;</p>

<h2><?php echo validation_errors() ? validation_errors() : @$login_error; ?></h2>
<?php echo form_open('login_c/chk_login'); ?>
    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" class="border" >
        <tr class="title">
            <td colspan="2" align="center"> <strong>用户登录</strong></td>
        </tr>

        <tr>
            <td height="120" colspan="2" class="tdbg">
                <table width="250" border="0" cellspacing="8" cellpadding="0" align="center">
                    <tr>
                        <td align="right">用户名称：</td>
                        <td><input name="UserName"  type="text"  id="UserName2" size="23" maxlength="20" value="<?php echo set_value('UserName') ?>"></td>
                    </tr>
                    <tr>
                        <td align="right">用户密码：</td>
                        <td><input name="Password"  type="password"  size="23" maxlength="20" value="<?php echo set_value('Password') ?>"></td>
                    </tr>
                 <!--   <tr>
                        <td align="right">验 证 码：</td>
                        <td><input name="CheckCode" size="15" maxlength="6">   <img src="inc/checkcode.asp"></td>
                    </tr>-->
                    <tr>-
                        <td colspan="2"> <div align="center">
                                <input   type="submit" name="Submit" value=" 确认 ">
                                &nbsp;
                                <input name="reset" type="reset"  id="reset" value=" 清除 ">
                                <br>
                            </div></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</form>
</body>
</html>
