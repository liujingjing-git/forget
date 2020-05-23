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
  <h1>分享故事</h1>
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
            <a href="#">分享模板</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <img src="/a.png" class="img-circle" style="width:260px">
      <p>爱你的人还在路上 别被路上的野猴子迷了眼睛</p>
      <ul class="nav nav-pills nav-stacked"></ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">
      <h4>一定会有一个人的出现点亮你的世界</h4>
      <video src="/xingfu.mp4" controls="controls" width="240px"></video>
  </div>
</div>
<center><h3>分享内容</h3></center>
    ​<table class="table table-striped">
        <thead>
            <tr>
                <th>名称</th>
                <th>年龄</th>
                <th>个人文案</th>
                <th>感情故事</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{$v->user_name}}</td>
                <td>{{$v->user_age}}</td>
                <td>{{$v->user_wenan}}</td>
                <td>{{$v->user_desc}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
         {{$data->links()}}

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>爱你的人还在路上</p>
</div>
</body>
</html>