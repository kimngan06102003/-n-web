<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>Đăng nhập</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">   
        <!-- Custom styles for this template -->
        <link href="../assets/signin.css" rel="stylesheet">
    </head>
     
    <body class="text-center">
           
        <main class="form-signin w-100 m-auto">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

        <form method="POST" action="{{ route('xu-ly-dang-nhap') }}">
            
        @csrf

            <img class="mb-4" src="../assets/anh/tải xuống.png" alt="" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">ĐĂNG NHẬP</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="ten_dang_nhap" placeholder="name@example.com" >
                @if($errors->has('ten_dang_nhap'))
                    <span class="error-message">* {{$errors->first('ten_dang_nhap')}}</span>
                @endif
                <label for="floatingInput">Tên đăng nhập</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="mat_khau" placeholder="Password" >
                @if($errors->has('mat_khau'))
                    <span class="error-message">* {{$errors->first('mat_khau')}}</span>
                @endif
                <label for="floatingPassword">Mật khẩu</label>
            </div>

            <div class="checkbox mb-3"></div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng nhập</button>
        </form>


        </main>
        
  </body>
</html>
