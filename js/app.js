var app = angular.module('myApp', []);
//解决php接收不到问题，这块要注意，angular的一个小坑
 app.config(function($httpProvider) {
 	$httpProvider.defaults.transformRequest = function(obj) {
 		var str = [];
 		for (var p in obj) {
 			str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
 		}
 		return str.join("&");
 	};
 	$httpProvider.defaults.headers.post = {
 		'Content-Type': 'application/x-www-form-urlencoded'
 	}
 })
 // 表单数据提交给后台
app.controller('logupCtrl', function($scope, $http,$timeout,$location) {
	$scope.user = {
		name: "",
		pwd:"",
		pwd2:"",
		tel:"",
		email:""
	}
	//检测用户名是否存在
	$scope.selectName = function() {
		$http({
			method: "post",
			url: "http://localhost/demo2/index.php/home/user/selectName",
			data: {
				name:$scope.user.name
			}	
		}).then(function(res){
			//后台判断数据库是否存在用户名，存在返回1，不存在返回0
           	$scope.user.show=res.data*1;//将string转换成number类型，不然绑定到ng-show上一直为真，算是一个坑吧
		})
	}
	//向数据库添加注册信息
	$scope.add = function() {
		$http({
			method: "post",
			url: "http://localhost/demo2/index.php/home/user/add",
			data: $scope.user	
		}).then(function(res){
			console.log(res.data)
           $scope.user.success=res.data;//后台输出“注册成功”
           $timeout(function() {
           	window.location.href = "http://localhost/demo2/signin.html";
           }, 3000);
		})
	}

});
app.controller('loginCtrl', function($scope, $http, $timeout, $location) {
	$scope.user = {
			name: "",
			pwd: "",
			pwd2: "",
			tel: "",
			email: ""
		}
		//用户登录密码错误
	$scope.selectPwd = function() {
			$http({
				method: "post",
				url: "http://localhost/demo2/index.php/home/user/selectPwd",
				data: {
					name: $scope.user.name,
					pwd: $scope.user.pwd,
				}
			}).then(function(res) {
				console.log(res.data);
				$scope.user.pshow = res.data * 1;
			})
		}
		//登录到首页
	$scope.login = function() {
		window.location.href = "http://localhost/demo2/index.html"
	}
});