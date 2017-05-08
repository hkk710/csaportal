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
<link rel="stylesheet" href="/css/filter.css">
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/filter.js"></script>
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
            <li class="current_page_item"><a href="/teacher/mark" title="">Mark List</a></li>
            <li><a href="/teacher/mark/create" title="">Enter Mark</a></li>
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
    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom: 20px;">
        <div class="col-sm-12">
            <form method="post">
                {{ csrf_field() }}
                <div class="col-sm-4">
					Branch
                    <select class="form-control" name="branch" id="branch">
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </div>
                <div class="col-sm-4">
					Semester
                    <select class="form-control" name="semester" id="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">2</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-sm-4">
					<input type="submit" value="Show" class="btn btn-info btn-block" style="margin-top: 20px;">
                </div>
            </form>
        </div>
		@isset($marks)
			<div class="col-sm-12" style="margin-top: 30px;">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Branch</th>
							<th>Semester</th>
							<th>Grade</th>
							<th>Student Name</th>
							<th>Student RollNumber</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($marks as $mark)
							<tr>
								<td>{{ $mark->branch }}</td>
								<td>{{ $mark->semester }}</td>
								<td>{{ $mark->grade }}</td>
								@php
									$student = App\User::find($mark->student_id);
								@endphp
								<td>{{ $student->fname }} {{ $student->lname }}</td>
								<td>{{ $student->rollnumber }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<script type="text/javascript">
				$('table').dataTable();
			</script>
		@endisset
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
