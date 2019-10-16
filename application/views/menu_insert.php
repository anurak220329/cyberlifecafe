<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
<?php echo form_open('menu/insert_menu');?>
ไอดีเมนู<input type="text" name="menu_id" value=""><br>
ชื่อเมนู<input type="text" name="menu_name" value=""><br>
ประเภทเมนู<section name="mcategory_id"> 
 
<option value=""></option>
</section>
ไอดีร้าน<input type="text" name="mshop_id" value=""><br>
<?php echo form_close();?>
</body>
</html>