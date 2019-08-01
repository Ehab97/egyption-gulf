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
    <link rel="stylesheet" href="css/contract.css">
    <link rel="shortcut icon" href="images/favicon/logo.png">
    <title>contract</title>
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
                            <li><a href="agri"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>الاراضي الزارعيه</a></li>
                            <li class="active"><a href="contract.html" style="color: #2ED47A"><i style="color: #2ED47A" class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>العقود</a></li>
                            <li><a href="benfits"><i class="fa fa-money fa-lg" aria-hidden="true"></i>الالحسابات الماليه</a></li>
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
                                <form class="form" method="post" enctype="multipart/form-data" action="{{route('add_contr')}}">
                                {{csrf_field()}}
                                    <div class="head">
                                        <div class="form-group">
                                            <label>رفع صورة للعقد</label>
                                            <input type="file" name="upfile" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ بدأ العقد</label>
                                            <input type="date" name="start_date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ إنتهاء العقد</label>
                                            <input type="date" name="end_date"  class="form-control">
                                        </div>
                                        <button name="btn" class="btn btn-info">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                            إضافة عقد جديدة
                                                        
                                                </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">صورة العقد</th>
                                                <th scope="col">تاريخ بدا العقد</th>
                                                <th scope="col">تاريخ انتهاء العقد</th>
                                                <th scope="col">حذف/اضافه</th>
                                            </tr>
                                        </thead>

                                        <?php 
                                        $rent=Session::get('contrat');
                                        // dd( $rent);
                                             $n=sizeof($rent);
                                            
                                      for($i=1;$i<=$n;$i++)
                                      echo'
                                        <tbody>
                                            <tr>
                                                <th scope="row">'.$i.'</th>
                                                <td>
                                                    <a href="#contract'.$rent[$i-1]->id.'" style="text-decoration: none;color: #2ED47A">
                                                        <button class="btn btn-outline-info l"><span class="d-block">عرض</span> <span class="d-block"> لعقد</span> اصورة </button>
                                                    </a>
                                                </td>
                                                <td>'.$rent[$i-1]->start_date.'</td>
                                                <td>'.$rent[$i-1]->end_date.'</td>
                                                <td class="text-center">
                                                    <a href="#modify'.$rent[$i-1]->id.'" style="text-decoration:none;color: #2ED47A; ">
                                                        <button class="btn btn-outline-info"><span>تعديل</span></button>
                                                    </a>
                                                    <a href="#delete'.$rent[$i-1]->id.'" style="text-decoration: none;color:#F76858;">
                                                        <button class="btn btn-outline-danger">حذف</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>';?>


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
        $rent=Session::get('contrat');
        
         $n=sizeof($rent);
                                            
         for($i=1;$i<=$n;$i++)
         echo'
   <div id="contract'.$rent[$i-1]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <form class="load">
                <label style="cursor: pointer;">تحميل صورة العقد 
                <input class="d-none" type="file" name="" accept="">
            </label>
            </form>
            <div class="text-center mt-3">
                <img src="/images/'.$rent[$i-1]->image.'" alt="image view">
            </div>
        </div>
    </div>';
    ?>
<?php 
     $rent=Session::get('contrat');   
     $n=sizeof($rent);
     for($i=1;$i<=$n;$i++)
     echo'

    <div id="delete'.$rent[$i-1]->id.'" class="overlay">
    
        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="'.route('del_cont').'">
        '.csrf_field().'
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <p>هل تريد حذق بيانات العقد بالكامل؟</p>
            <hr/>
            <div class="bt">
                <button name="btn'.$rent[$i-1]->id.'"style="color: #2ED47A;">
                                     نعم
                                 </button>
                <button name=btnn'.$rent[$i-1]->id.' style="color: #F76858;">
                                        لا
                                </button>
            </div>
            </form>
        </div>
    </div>';
    ?>
<?php 
     $rent=Session::get('contrat');   
     $n=sizeof($rent);
     for($i=1;$i<=$n;$i++)
     echo'

    <div id="modify'.$rent[$i-1]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="'.route('del_cont').'">
        '.csrf_field().'
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <div class="container">
                <div class="row">
                    <form class="col-12">
                        <div class="form-group">
                            <label for="my-input">رفع صورة للعقد</label>
                            <input id="my-input" class="form-control" type="file" name="upfile">
                        </div>
                        <div class="form-group">
                            <label for="my-input">تاريخ بدأ العقد</label>
                            <input id="my-input" class="form-control" type="date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="my-input">تاريخ إنتهاء العقد</label>
                            <input id="my-input" class="form-control" type="date" name="end_date">
                        </div>
                        <div class="form-group text-center">
                            <button name="btn'.$rent[$i-1]->id.'" type="submit" class="">تعديل</button>
                        </div>
                    </form>
                </div>
            </div>
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
