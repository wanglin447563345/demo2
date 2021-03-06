<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="/demo2/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/demo2/Public/css/css.css">
	<script src="/demo2/Public/js/angular.min.js"></script>
	<script src="/demo2/Public/js/app.js"></script>
</head>
<body ng-app="myApp">
<div class="container" ng-controller="loginCtrl" style="margin-top: 80px;">
<h1 class="text-center" style="margin-bottom: 60px;">用户登录</h1>
     <form class="form-horizontal" name="myForm" novalidate>
	     <div class="form-group">
	     	<label class="col-sm-4 control-label">用户名：</label>
	     	<div class="col-sm-4">
	     		<input type="text" class="form-control" name="name" ng-model="user.name" 
	     		placeholder="请输入您的用户名"
	     		ng-change="selectName()"
                required
	     		>
	     		<span class="text-danger" ng-show="!user.show&&myForm.name.$dirty&&user.name!=null">用户名不存在,请注册</span>
	     	</div>
	     </div>
	     <div class="form-group">
	     	<label class="col-sm-4 control-label">密码：</label>
	     	<div class="col-sm-4">
	     		<input type="password" class="form-control" name="pwd" 
	     		ng-model="user.pwd" 
	     		placeholder="请输入您的密码"
	     		required
	     		>
	     		<span class="text-danger" ng-show="user.required">请输入密码</span>
	     		<span class="text-danger" ng-show="myForm.pwd.$dirty&&user.pshow||user.pwd==''&&myForm.pwd.$dirty">输入密码有误</span>
	     	</div>	
	     </div>

	     <div class="form-group">
	     	<div class="col-sm-4 col-sm-offset-4">
	     	   <a href="home/index/signup" class="btn btn-default">注册</a>
	     		<button type="submit" class="btn btn-success" 
	     		 ng-click="selectPwd()"
	     		 ng-disabled="myForm.$invalid"
	     		>登录</button>
	     	</div>
	     </div>
     </form>	
</div>
</body>
</html>