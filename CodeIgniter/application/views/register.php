<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<body>
<?php $this->load->helper(array('url','form')); ?>
<?php echo validation_errors(); ?>
<?php echo form_open('form1/index'); ?>
<strong>姓名:</strong><input type="text" name="userName" value="<?php echo set_value('userName') ?>"/><br/>
<strong>年龄:</strong><input type="text" name="age" value="<?php echo set_value('age') ?>"/><br/>
<strong>密码:</strong><input type="text" name="pwd" /><br/>
<strong>确认密码:</strong><input type="text" name="pwd_conf" /><br/>
<strong>Email:</strong><input type="text" name="email" value="<?php echo set_value('email') ?>"/><br/>
'                           '<input type="submit" value="提交"/><br/>
</form>
</body>
</html>