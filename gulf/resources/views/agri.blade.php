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
    <link rel="stylesheet" href="css/agri.css">
    <link rel="shortcut icon" href="images/favicon/logo.png">
    <title>agriculture</title>
</head>

<body>
    <section class="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <aside>
                        <div class="text-center m-auto">
                            <img src="imgaes/favicon/logo.png" alt="logo">
                        </div>
                        <hr/>
                        <ul class="list-unstyled">
                            <li><a href="home"><i class="fa fa-home fa-lg" aria-hidden="true"></i>الصفحه الرئيسيه</a></li>
                            <li><a href="renters"><i class="fa fa-users fa-lg" aria-hidden="true"></i>المستاجرين</a></li>
                            <li class="active"><a href="agri" style="color: #2ED47A"><i style="color: #2ED47A"   class="fa fa-map-marker fa-lg" aria-hidden="true"></i>الاراضي الزارعيه</a></li>
                            <li><a href="contract"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>العقود</a></li>
                            <li><a href=""><i class="fa fa-money fa-lg" aria-hidden="true"></i>الالحسابات الماليه</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-10">
                    <!-- start header     -->
                    <header>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <ul class="nav mr-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="#"><strong>اسم الشخص</strong></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-power-off"></i> تسجيل الخروج
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="head">
                                    <form class="form" method="post" action="{{route('add_agri')}}">
                                             {{csrf_field()}}
                                        <div class="form-group">
                                            <label>موقع الارض / العنوان</label>
                                            <input type="text" name="place" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>حجم الارض</label>
                                            <input type="text" name="size" class="form-control">
                                        </div>

                                        <button class="btn btn-info">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                                إضافة ارض جديد
                                                
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">موقع الارض / العنوان</th>
                                                <th scope="col">موقع الارض / العنوان</th>
                                                <th scope="col">حذف/اضافه</th>
                                            </tr>
                                        </thead>

                                       <?php 
                                        $rent=Session::get('agri');
                                        // dd( $rent);
                                             $n=sizeof($rent);
                                            
                                      for($i=1;$i<=$n;$i++)
                                      echo'
                                        <tbody>
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>'.$rent[$i-1]->place.'</td>
                                                <td>'.$rent[$i-1]->size.'</td>
                                                <td class="text-center">
                                                    <a href="#modify'.$rent[$i-1]->id.'" style="text-decoration:none;color: #2ED47A; ">
                                                        <button class="btn btn-outline-info"><span>تعديل</span></button>
                                                    </a>
                                                    <a href="#delete'.$rent[$i-1]->id.'" style="text-decoration: none;color:#F76858;">
                                                        <button class="btn btn-outline-danger">حذف</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>';
                                        ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </section>

    <?php 
     $rent=Session::get('agri');   
     $n=sizeof($rent);
     for($i=0;$i<$n;$i++)
     echo'
    <div id="delete'.$rent[$i]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="'.route('delete_agri').'">
                            '.csrf_field().'
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <p>هل تريد حذق بيانات الارض بالكامل؟</p>
            <hr/>
            <div class="bt">
                <button name="btn'.$rent[$i]->id.'" style="color: #2ED47A;">
                                 نعم
                             </button>
                <button name"btnn'.$rent[$i]->id.'" style="color: #F76858;">
                                    لا
                            </button>
            </div>
            </form >
        </div>
    </div>';
?>
<?php 
     $rent=Session::get('agri');   
     $n=sizeof($rent);
     for($i=0;$i<$n;$i++)
     echo'
    <div id="modify'.$rent[$i]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="'.route('update_agri').'">
        '.csrf_field().'
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <div class="container">
                <div class="row">
                    <form class="col-12">
                        <div class="form-group">
                            <label for="my-input">موقع الارض /العنوان</label>
                            <input id="my-input" class="form-control" type="text" name="place">
                        </div>
                        <div class="form-group">
                            <label for="my-input">حجم الارض</label>
                            <input id="my-input" class="form-control" type="text" name="size">
                        </div>
                        <div class="form-group text-center">
                            <button name="btn'.$rent[$i]->id.'" type="submit" class="">تعديل</button>
                        </div>
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>';
    ?>


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