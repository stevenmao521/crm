<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>crm客户关系管理系统</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/crm/Public/easyui/themes/bootstrap/easyui.css" />
        <link rel="stylesheet" type="text/css" href="/crm/Public/easyui/themes/icon.css" />
        <link rel="stylesheet" type="text/css" href="/crm/Public/css/index.css" />
    </head>
    <body class='easyui-layout'>
        
        <!--layout 布局-->
		
        <div class="layout-north" data-options="region:'north',splite:true,border:false">
			<div class='logo'>
				<img src='/crm/Public/img/logo.png' alt='crm客户管理系统'/>
			</div>	
			<div class='info'>
				退出
			</div>
		</div>

       
		
		<div class="layout-west" data-options="region:'west',splite:true,title:'导航',iconCls:'icon-world'">左部</div>

        
		
		<div class="layout-center" data-options="region:'center'">
			<div id="tabs">
				<div title="起始页" iconCls="icon-house">
					<p>欢迎来到crm客户管理系统</p>
				</div>
			</div>
		</div>
        
		
		<div class="layout-south" data-options="region:'south',splite:true">
			©2009-2016 瓢城Web 俱乐部. Powered by ThinkPHP and EasyUI.
		</div>
       	<script type="text/javascript" src="/crm/Public/easyui/jquery.min.js"></script>
        <script type="text/javascript" src="/crm/Public/easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="/crm/Public/easyui/locale/easyui-lang-zh_CN.js"></script>
        <script type="text/javascript" src="/crm/Public/js/index.js"></script>
     </body>
</html>