<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>baijiacms开源版-多商户管理平台</title>
<link href="<?php echo RESOURCE_ROOT;?>/install/install.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo RESOURCE_ROOT;?>/addons/common/js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div id="container">

<!-- Header -->
<div id="header" class="clearfix">
	<div id="PrestaShopLogo"></div>
</div>


<!-- List of steps -->
<div id="leftpannel"><h1>安装向导</h1>
	<ol id="tabs">
			<li ></li>
					<li 	<?php if( $op=="display"){?>class="selected"	<?php }?> <?php if( $op=="setp2"||$op=="setp3"||$op=="setp4"||$op=="setp5"){?>class="finished"<?php }?>><?php if( $op=="setp2"||$op=="setp3"||$op=="setp4"||$op=="setp5"){?><a href="install.php?mod=mobile&name=common&do=install" ><?php }?>许可协议<?php if( $op=="setp2"||$op=="setp3"||$op=="setp4"||$op=="setp5"){?></a><?php }?></li>
												<li  <?php if( $op=="setp2"){?>class="selected"	<?php }?>  <?php if($op=="setp3"||$op=="setp4"||$op=="setp5"){?>class="finished"<?php }?>> <?php if($op=="setp3"||$op=="setp4"||$op=="setp5"){?><a href="install.php?mod=mobile&name=common&op=setp2&do=install" ><?php }?>系统兼容性<?php if($op=="setp3"||$op=="setp4"||$op=="setp5"){?></a><?php }?></li>
										
												<li <?php if( $op=="setp3"){?>class="selected"	<?php }?>  <?php if($op=="setp4"||$op=="setp5"){?>class="finished"<?php }?>><?php if($op=="setp4"||$op=="setp5"){?><a href="install.php?mod=mobile&name=common&op=setp3&do=install" ><?php }?>微商城配置-1<?php if($op=="setp4"||$op=="setp5"){?></a><?php }?></li>
													<li <?php if( $op=="setp4"){?>class="selected"	<?php }?>  <?php if($op=="setp5"){?>class="finished"<?php }?>><?php if($op=="setp5"){?><a href="install.php?mod=mobile&name=common&op=setp4&do=install" ><?php }?>微商城配置-2<?php if($op=="setp5"){?></a><?php }?></li>
												
												<li <?php if( $op=="setp5"){?>class="selected"	<?php }?>>系统配置</li>
												<li>系统安装</li>
						</ol>
	</div>

<!-- Page content -->
<form id="mainForm" action="" method="post">


	
	<?php if( $op=="display"){?>
	<div id="sheets" class="sheet shown">
	<div class="sheet shown clearfix">
<!-- License agreement -->
<h2 id="licenses-agreement">许可协议</h2>
<p><strong>请阅读下面的许可条款。</strong></p>
<div style="height:200px; border:1px solid #ccc; margin-bottom:8px; padding:5px; background:#fff; overflow: auto; overflow-x:hidden; overflow-y:scroll;">
	
<p>版权所有 (c)2016，baijiacms团队保留所有权利。</p>
	<p>为了使你正确并合法的使用本软件，请你在使用前务必阅读清楚下面的协议条款。</p>
	<h3>协议规定的约束和限制</h3>
	<p>1、未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目的或实现盈利的网站）。</p>
	<p>2、未经官方许可，不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。</p>
<p>3、未经官方许可，禁止在程序整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</p>
<p>4． 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</p>
<h3>有限担保和免责声明：</h3>
<p>1、本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</p>
<p>2、用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</p>
<p>3、电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装本程序，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>
<p>4、如果本软件带有其它软件的整合API示范例子包，这些文件版权不属于本软件官方，并且这些文件是没经过授权发布的，请参考相关软件的使用许可合法的使用。</p>
</div>

<div>
	<input type="checkbox" id="set_license" class="required" name="licence_agrement" value="1" style="vertical-align: middle;float:left"  />
	<div style="float:left;width:600px;margin-left:8px"><label for="set_license"><strong>我同意上述条款和条件。</strong></label></div>
</div>

	</div><!-- div id="sheet_step" -->
</div><!-- div id="sheets" -->

<div id="buttons">
						<input id="btNext" class="button little" type="button" onClick="location.href='install.php?mod=mobile&name=common&op=setp2&do=install';" name="submitNext" value="下一步" style="float: left" />
			
	</div>


<script>
	$(document).ready(function()
{
	// Desactivate next button if licence checkbox is not checked
	if (!$('#set_license').prop('checked'))
	{
		$('#btNext').addClass('disabled').attr('disabled', true);
	}
	
	// Activate / desactivate next button when licence checkbox is clicked
	$('#set_license').click(function()
	{
		if ($(this).prop('checked'))
			$('#btNext').removeClass('disabled').attr('disabled', false);
		else
			$('#btNext').addClass('disabled').attr('disabled', true);
	});
	
	if ($('#set_license').prop('checked'))
		$('#btNext').removeClass('disabled').attr('disabled', false);
	else
		$('#btNext').addClass('disabled').attr('disabled', true);
});
	</script>
	
<?php }?>
<?php if( $op=="setp2"){?>
<div id="sheets" class="sheet shown">
	<div class="sheet shown clearfix">
		
<h2>程序依赖环境检查</h2>
<div class="field clearfix">
		<label  class="aligned">PHP版本(最低PHP 5.3)： </label>
		<div class="contentinput">
		<?php echo (version_compare(PHP_VERSION,'5.3.0','ge'))?'<font color=green>检查通过</font>':'<font color=red>PHP '.PHP_VERSION.'不通过</font>'; ?>
		</div>
			</div>

<div class="field clearfix">
		<label  class="aligned">config文件夹读写： </label>
		<div class="contentinput">
		<?php echo $resultfolderarray['config']; ?></div>
			</div>
		
		<div class="field clearfix">
		<label  class="aligned">attachment文件夹读写： </label>
		<div class="contentinput">
		<?php echo $resultfolderarray['attachment']; ?></div>
			</div>
			
			<div class="field clearfix">
		<label  class="aligned">pdo_mysql： </label>
		<div class="contentinput">
		<?php echo $resultarray['pdo_mysql']; ?></div>
			</div>
			
					<div class="field clearfix">
		<label  class="aligned">pdo_mysql： </label>
		<div class="contentinput">
		<?php echo $resultarray['pdo_mysql']; ?></div>
			</div>
			
				<div class="field clearfix">
		<label  class="aligned">allow_url_fopen： </label>
		<div class="contentinput">
		<?php echo $resultarray['allow_url_fopen']; ?></div>
			</div>
			
					<div class="field clearfix">
		<label  class="aligned">file_get_contents： </label>
		<div class="contentinput">
		<?php echo $resultarray['file_get_contents']; ?></div>
			</div>
			
				<div class="field clearfix">
		<label  class="aligned">xml_parser_create： </label>
		<div class="contentinput">
		<?php echo $resultarray['xml_parser_create']; ?></div>
			</div>
			
				<div class="field clearfix">
		<label  class="aligned">curl_init： </label>
		<div class="contentinput">
		<?php echo $resultarray['curl_init']; ?></div>
			</div>
    	

	</div><!-- div id="sheet_step" -->
</div><!-- div id="sheets" -->

<div id="buttons">
						
	<?php if( $allcheck){?>

	<input name="op" type="hidden"  value="setp3"  />
						<input id="btNext" class="button little" type="submit" name="submitNext" value="下一步" style="float: left"  />
						
<?php }else{?>
<strong style="color:red">请解决环境问题后，刷新此页面，进行下一步操作。</strong>
<?php }?>
	</div>









<?php }?>

	<?php if( $op=="setp3"){?>
	<div id="sheets" class="sheet shown">
	<div class="sheet shown clearfix">
		
		<div id="dbPart">
	<h2>微商城配置</h2>	<div id="formCheckSQL">
				<p class="first" >
			<label for="adminname">baijiacms微商城根目录 </label>
			<input name="weifooter" type="text" class="text" id="weifooter"  value="" />
				<span class="userInfos aligned" style="margin-top:5px;font-size:12px">微商城需WEB可以访问(无需安装),且与多商户管理平台属同一服务器下。如/htdocs/baijiacms</span>
		</p>
			</div>
</div>
		
		
		</div><!-- div id="sheet_step" -->
</div><!-- div id="sheets" -->

<div id="buttons">
						<input name="op" type="hidden"  value="setp4"  />
						<input id="btNext" class="button little" type="submit" name="submitNext" value="下一步" style="float: left"  />
	</div>

<?php }?>
	<?php if( $op=="setp4"){?>
	

<div id="sheets" class="sheet shown">
	<div class="sheet shown clearfix">
		
<h2>baijiacms微商城环境检查</h2>
<div class="field clearfix">
		<label  class="aligned">微商目录：</label>
		<div >
<?php echo $weifooter;?>
		</div>
			</div>

<div class="field clearfix">
		<label  class="aligned">微商城状态：</label>
		<div class="contentinput">
	<font color=green>检查通过</font>
		</div>
			</div>

<div class="field clearfix">
		<label  class="aligned">config文件夹读写： </label>
		<div class="contentinput">
		<?php echo $resultfolderarray['config']; ?></div>
			</div>
				<div class="field clearfix">
		<label  class="aligned">themes文件夹读写： </label>
		<div class="contentinput">
		<?php echo $resultfolderarray['themes']; ?></div>
			</div>
					<div class="field clearfix">
		<label  class="aligned">cache文件夹读写： </label>
		<div class="contentinput">
		<?php echo $resultfolderarray['cache']; ?></div>
			</div>
		<div class="field clearfix">
		<label  class="aligned">attachment文件夹读写： </label>
		<div class="contentinput">
		<?php echo $resultfolderarray['attachment']; ?></div>
			</div>
			
	

	</div><!-- div id="sheet_step" -->
</div><!-- div id="sheets" -->

<div id="buttons">
				<input id="btBack" class="button little" type="button" onClick="history.back()" name="submitNext" value="上一步" style="float:right"  />
		
	<?php if( $allcheck){?>
	<input name="op" type="hidden"  value="setp5"  />
		<input name="weifooter" type="hidden"  value="<?php echo $weifooter;?>"  />
						<input id="btNext" class="button little" type="submit" name="submitNext" value="下一步" style="float: left"  />
						
<?php }else{?>
<strong style="color:red">请返回上一步解决环境问题后，进行下一步操作。</strong>
<?php }?>
	</div>





	
	
<?php }?>
	<?php if( $op=="setp5"){?>
	<div id="sheets" class="sheet shown">
	<div class="sheet shown clearfix">


<!-- Database configuration -->
<div id="dbPart">
	<h2>管理员配置</h2>	<div id="formCheckSQL">
				<input name="weifooter" type="hidden"  value="<?php echo $weifooter;?>"  />
		<p class="first" >
			<label for="adminname">管理员登录账户 </label>
			<input name="adminname" type="text" class="text" id="adminname"  value="" />
		</p>
			<p class="first" >
			<label for="adminpwd">登录密码 </label>
			<input name="adminpwd" type="text" class="text" id="adminpwd"  value="" />
		</p>
	<h2>数据库配置</h2>
		<p class="first" >
			<label for="dbhost">数据库服务器地址 </label>
			<input name="dbhost" type="text" class="text" id="dbhost"  value="" />
		</p>
				<p class="first">
			<label for="dbport">数据库服务器端口 </label>
		<input size="10" class="text" type="text" id="dbport" name="dbport" value="3306" />
			<span class="userInfos aligned">默认端口为3306。</span>
		</p>
		<p>
			<label for="dbName">数据库名称 </label>
			<input size="10" class="text" type="text" id="dbname" name="dbname" value="baijiacms" />
		</p>
		<p>
			<label for="dbuser">数据库登录名 </label>
			<input class="text" size="10" type="text" id="dbuser" name="dbuser" value="root" />
		</p>
		<p>
			<label for="dbpwd">数据库密码 </label>
			<input class="text" size="10" type="text" id="dbpwd" name="dbpwd" value="" />
		</p>
					<p id="dbResultCheck" style="display: none;"></p>
			</div>
</div>

	</div><!-- div id="sheet_step" -->
</div><!-- div id="sheets" -->

<div id="buttons">  	<input name="op" type="hidden"  value="setp5"  />	<input name="doact" type="hidden"  value="install"  />
						<input id="btNext" class="button little" type="submit" name="submitNext" value="下一步" style="float: left"  />
			
	</div>


	<?php }?>
	

</form>	
<ul id="footer">
<li>&copy; 福州baijiacms信息技术有限责任公司</li>
</ul>	</div>	
	

</body>
</html>