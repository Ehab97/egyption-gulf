<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/favicon/logo.png">
    <title>signup</title>
</head>

<body>
    <!-- start section -->
    <section class="signup-content">
        <div class="container">
            <div class="row">
                <div class="col-12 m-auto text-center">
                    <img src="imgaes/favicon/logo.png" alt="Logo">
                </div>
                <div class="col-12 m-auto">
                    <form  action="{{route('signup')}}" method="post">
                    {{csrf_field()}}
                        <div class="container">
                            <h3 class="text-center">تسجيل حساب جديد</h3>
                            <div class="form-group">
                                <label>الاسم </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>البريد الاكتروني </label>
                                <input type="email"  name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> رقم الهاتف</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>كلمة المرور</label>
                                <input type="password"  name ="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> تاكيد كلمة المرور</label>
                                <input type="password" name="repassword" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="تسجيل حساب جديد">
                            </div>
                            <div class="text">
                                <p>تملك حساب بالفعل ؟ <a href="rlogin"> قم بالتسجيل</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

</html>