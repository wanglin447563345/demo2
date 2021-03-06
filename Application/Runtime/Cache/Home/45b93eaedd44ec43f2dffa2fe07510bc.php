<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="/demo2/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/demo2/Public/css/css.css">
	<script src="/demo2/Public/js/angular.min.js"></script>
	<script src="/demo2/Public/js/app.js"></script>
</head>
<body ng-app="myApp">
<div class="container" ng-controller="logupCtrl" style="margin-top: 80px;">
<h1 class="text-center" style="margin-bottom: 60px;">用户注册</h1>
     <form class="form-horizontal" name="myForm" novalidate>
	     <div class="form-group">
	     	<label class="col-sm-4 control-label">用户名：</label>
	     	<div class="col-sm-4">
	     		<input type="text" class="form-control" name="name" 
	     		ng-model="user.name" 
	     		ng-blur="selectName()"
	     		required>
	     		<span class="text-warning" ng-show="myForm.name.$error.required">必填</span>
	     		<span class="text-danger" ng-show="user.show&&myForm.name.$dirty">用户名已存在</span>
	     		<span class="text-success" ng-show="myForm.name.$valid&&!user.show&&myForm.name.$touched">正确</span>
	     	</div>
	     </div>
	     <div class="form-group">
	     	<label class="col-sm-4 control-label">密码：</label>
	     	<div class="col-sm-4">
	     		<input type="password" class="form-control" name="pwd "
	     		ng-model="user.pwd" 
	     		ng-minlength="4"
	     		ng-maxlength="20"
	     		required>
	     		<span class="text-warning" ng-show="myForm.pwd.$error.required">必填</span>
	     		<span class="text-danger" ng-show="myForm.pwd.$error.minlength">密码至少4位</span>
	     		<span class="text-danger" ng-show="myForm.pwd.$error.maxlength">密码最长20位</span>
	     		<span class="text-success" ng-show="myForm.pwd.$valid">正确</span>
	     	</div>	
	     </div>
	     <div class="form-group">
	     	<label class="col-sm-4 control-label">密码确认：</label>
	     	<div class="col-sm-4">
	     		<input type="password" class="form-control" name="repwd"
	     		ng-model="user.pwd2" 
	     		required>
	     		<span class="text-warning" ng-show="myForm.repwd.$error.required">必填</span>
	     		<span class="text-warning" ng-show="myForm.repwd.$valid&&user.pwd2!=user.pwd">两次输入不一致</span>
	     		<span class="text-success" ng-show="myForm.repwd.$valid&&user.pwd2==user.pwd">正确</span>
	     	</div>	
	     </div>
	      <div class="form-group">
	     	<label class="col-sm-4 control-label">手机号：</label>
	     	<div class="col-sm-4">
	     		<input type="text" class="form-control" name="tel"
	     		ng-model="user.tel" 
                ng-pattern="/^1[34578]\d{9}$/"
	     		required>
	     		<span class="text-warning" ng-show="myForm.tel.$error.required">必填</span>
	     		<span class="text-danger" ng-show="myForm.tel.$error.pattern">无效手机号</span>
	     		<span class="text-success" ng-show="myForm.tel.$valid">正确</span>
	     	</div>	
	     </div>
	     <div class="form-group">
	     	<label for="" class="col-sm-4 control-label">邮箱：</label>
	     	<div class="col-sm-4">
	     		<input type="email" class="form-control" name="email" 
	     		ng-model="user.email" 
	     		required>
	     		<span class="text-warning" ng-show="myForm.email.$error.required">必填</span>
	     		<span class="text-danger" ng-show="myForm.email.$error.email">邮箱不合法</span>
	     		<span class="text-success" ng-show="myForm.email.$valid">正确</span>
	     	</div>
	     </div>
	     <div class="form-group">
	     	<div class="col-sm-4 col-sm-offset-4">
	     		<button type="submit" class="btn btn-success" id="sub" 
	     		ng-click="add()" 
	     		ng-disabled="myForm.$invalid||user.pwd2!=user.pwd||user.show||myForm.$pristine">提交</button>
	     	</div>
	     </div>
     </form>
     	<div class="center-block"><p ng-hide="user.success==null" class="success_msg text-center" ng-bind="user.success"></p></div>
</div>
</body>
</html>