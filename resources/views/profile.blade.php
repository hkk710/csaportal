<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/profile.css">

</head>
<body style="background-color:#000;">
<div id="header" class="container" style="background-color:#000;">
	<div id="logo">
        <figure class="logo animated fadeInDown delay-07s" style="background-color:#000;max-height:67px;border-radius:1px;">
            <a href="#"><img src="img/new.gif" style="max-height:50px; padding-left:30px;" alt=""></a>
        </figure>
		<h1><a href="#">CSA Portal</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="/home" accesskey="1" title="">Homepage</a></li>
			<li class="current_page_item"><a href="#" accesskey="2" title="">Profile</a></li>
			<li><a href="#" accesskey="3" title="">About Us</a></li>
			<li><a href="#" accesskey="4" title="">Careers</a></li>
			<li><a href="{{ url('/logout') }}" accesskey="5" title="">logout</a></li>
		</ul>
	</div>
</div>
<div id="banner" class="container"><a href="#" class="image image-full"><img src="img/pic04.jpg" alt="" /></a></div>
<div id="wrapper">
	<div id="welcome" class="container">
        <div class="container">
	<div class="row">
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Your Profile</h4></div>
   <div class="panel-body">

    <div class="box box-info">

            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="img/hari710.png" id="profile-image1" class="img-circle img-responsive">

                <input id="profile-image-upload" class="hidden" type="file">
                <!--Upload Image Js And Css-->
                     </div>
              <br>
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1; text-align:center">{{Auth::user()->fname}} {{Auth::user()->lname}}</h4></span>
              <span style="text-align:center"><p>{{Auth::user()->email }}</p></span>
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">

<div class="col-sm-5 col-xs-6 tital " >First Name: &nbsp; {{Auth::user()->fname}}</div><div class="col-sm-7 col-xs-6 "></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Last Name:  &nbsp; {{Auth::user()->lname}}</div><div class="col-sm-7"><div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Rollnumber: &nbsp;  {{Auth::user()->rollnumber}}</div><div class="col-sm-7"> </div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Phonenumber:  &nbsp; {{Auth::user()->phonenumber}}</div><div class="col-sm-7"></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Gender: &nbsp; {{Auth::user()->gender}}</div><div class="col-sm-7 col-xs-6 "></div>
<div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Blood Group: &nbsp; {{Auth::user()->bloodgroup}} </div><div class="col-sm-7 col-xs-6 "></div>
<div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Joining: &nbsp; {{Auth::user()->dateofjoining}} </div><div class="col-sm-7"></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Birth: &nbsp; {{Auth::user()->dateofbirth}}</div><div class="col-sm-7"></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Place Of Birth: &nbsp; {{Auth::user()->place}}</div><div class="col-sm-7"></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Nationality: &nbsp; {{Auth::user()->country}}</div><div class="col-sm-7"></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Hostellite:  &nbsp; {{Auth::user()->hostellite}} </div><div class="col-sm-7"></div>



            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


    </div>
    </div>
</div>
    <script>
    $(function() {
    $('#profile-image1').on('click', function() {
    $('#profile-image-upload').click();
    });
});
     </script>
   </div>
</div>
</div>
<div id="copyright" class="container">
	<p>Copyright (c) 2017 csaportal.com. All rights reserved. | Design by <a href="/webteam"></a>trio developerz.</p>
</div>
</body>
</html>
