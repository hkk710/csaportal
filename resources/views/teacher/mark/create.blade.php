<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link rel="stylesheet" href="/css/font.css">
<link rel="stylesheet" href="/css/default.css">
<link rel="stylesheet" href="/css/profile.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<script type="text/javascript" src="/js/app.js"></script>
</head>
<body style="background-color:#000;">
<div id="header" class="container" style="background-color:#000;">
	<div id="logo">
        <figure class="logo animated fadeInDown delay-07s" style="background-color:#000;max-height:67px;border-radius:1px;">
            <a href="#"><img src="/img/new.gif" style="max-height:50px; padding-left:30px;" alt=""></a>
        </figure>
		<h1><a href="#">CSA Portal</a></h1>
	</div>
	<div id="menu">
		<ul>
            <li><a href="/teacher/mark" title="">Mark List</a></li>
            <li class="current_page_item"><a href="/teacher/mark/create" title="">Enter Mark</a></li>
			<li><a href="/home" accesskey="1" title="">Homepage</a></li>
			<li><a href="/teacher" accesskey="2" title="">Profile</a></li>
			<li><a href="#" accesskey="3" title="">About Us</a></li>
			<li><a href="#" accesskey="4" title="">Careers</a></li>
			<li><a href="#" accesskey="5" title="" onclick="document.getElementById('logout-form').submit();">logout</a></li>
			<form class="hidden" action="{{ url('/logout') }}" method="post" id="logout-form">
				{{ csrf_field() }}
			</form>
		</ul>
	</div>
</div>
<div id="banner" class="container"><a href="#" class="image image-full"><img src="/img/pic04.jpg" alt="" /></a></div>
<div id="wrapper" style="overflow: hidden;">
    <div class="col-sm-8 col-sm-offset-2">
        <form class="form-horizontal" method="post" style="margin-bottom: 20px; overflow: hidden;">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="branch" class="col-sm-2 control-label">Branch:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="branch" id="branch">
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="grade" class="col-sm-2 control-label">Grade:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="grade" id="grade">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="F">F</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="semester" class="col-sm-2 control-label">Semester:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="semester" id="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">2</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="student_id" class="col-sm-2 control-label">Student:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="student_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="submit" value="Enter" class="pull-right btn btn-success">
        </form>
        @if (Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <div>
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
    </div>
</div>
<script type="text/javascript">
    $('#branch').change(function(e) {
        if (e.target.value == "BCA") {
            $('#semester').empty();
            $('#semester').html('<option value="1">1</option><option value="2">2</option><option value="3">2</option><option value="4">4</option><option value="5">5</option><option value="6">6</option>');
        }
        else if (e.target.value == "MCA") {
            $('#semester').empty();
            $('#semester').html('<option value="1">1</option><option value="2">2</option><option value="3">2</option><option value="4">4</option>');
        }
    })
</script>
</body>
