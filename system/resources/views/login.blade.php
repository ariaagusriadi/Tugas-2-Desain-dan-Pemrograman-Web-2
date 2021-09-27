
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset ('/public/login/style.css') }}">
  </head>
  <body>

    <div class="login-page">
      <div class="form">
        
        <form class="login-form">
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button><a href="{{url('/home')}}">Login</a></button>
          <p class="message">Not registered? <a href="">Create an account</a></p>
        </form>
      </div>
    </div>
  
    
    <script src="{{asset ('/public/login/scrip.js') }}"></script>
  </body>
  </html>