    <!DOCTYPE html>
    <html>
    <meta charset="UTF-8">
    <title>Login / Register</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/auth.css">
<body style="background-color:#b489f9;">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <a href="#" data-dismiss="alert" class="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
      <div class="card"></div>
      <div class="card">
        <h1 class="title">Login</h1>
        <form action="/login" method="post">
            {{ csrf_field() }}
          <div class="input-container">
            <input type="#{type}" id="#{label}" name="name">
            <label for="#{label}">Username</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="#{label}" name="password">
            <label for="#{label}">Password</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button><span>Go</span></button>
          </div>
          <div class="footer"><a href="/password/reset">Forgot your password?</a></div>
        </form>
      </div>
      <div class="card alt">
        <div class="toggle"></div>
        <h1 class="title">Register
          <div class="close"></div>
        </h1>
        <form action="/register" method="post">
            {{ csrf_field() }}
            <div class="input-container">
              <input type="#{type}" id="#{label}" name="name">
              <label for="#{label}">Username</label>
              <div class="bar"></div>
            </div>
          <div class="input-container">
            <input type="email" id="#{label}" name="email">
            <label for="#{label}">Email</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="number" id="#{label}" name="phonenumber">
            <label for="#{label}">Phone Number</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="text" id="#{label}" name="rollnumber">
            <label for="#{label}">Roll Number</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="#{label}" name="password">
            <label for="#{label}">Password</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" id="#{label}" name="password_confirmation">
            <label for="#{label}">Repeat Password</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button><span>Next</span></button>
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
        <script src="/js/auth.js"></script>
    </body>
</html>
