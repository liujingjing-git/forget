<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>*眔負禺笕*</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
    .fakeimg {
        height: 200px;
         background: #aaa;
    }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>分享你的故事</h1>
  <p>*****</p> 
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li >
            <a href="{{'QianRen'}}">回到主页</a>
        </li>
        <li class="active">
            <a href="#">正在分享</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img src="/a.png" class="img-circle" style="width:260px">
      <p>以前心中有人 在黑暗也觉得光明</p>
      <ul class="nav nav-pills nav-stacked"></ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
        <h3>丢了你</h3>
        <!-- <video src="/diuleni.mp4" controls="controls" width="190px"></video>---- -->
        <video src="/老年人的爱情.mp4" controls="controls" width="240px"></video>
    </div>
</div>
<center><h3>分享</h3></center>
<form class="form-horizontal" role="form" method="post" action="{{url('FenXiangDo')}}">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">名字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="user_name" placeholder="请输入名字">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">年龄</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="user_age" placeholder="请输入年龄">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">文案</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="user_wenan" placeholder="请输入个人文案">
        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">故事</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="firstname" name="user_desc" placeholder="你们的感情故事"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="分享" class="btn btn-default">
        </div>
    </div>
</form>
​
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>!一厢情愿的飞蛾扑火!</p>
</div>
</body>
</html>