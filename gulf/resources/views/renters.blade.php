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
    <link rel="stylesheet" href="css/renter.css">
    <link rel="shortcut icon" href="images/favicon/logo.png">
    <title>Renters</title>
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
                            <li class="active"><a href="renters" style="color: #2ED47A"><i style="color: #2ED47A"  class="fa fa-users fa-lg" aria-hidden="true"></i>المستاجرين</a></li>
                            <li><a href="agri"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>الاراضي الزارعيه</a></li>
                            <li><a href="contract"><i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>العقود</a></li>
                            <li><a href="benfits.hl"><i class="fa fa-money fa-lg" aria-hidden="true"></i>الالحسابات الماليه</a></li>
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
                            <!-- buttons -->
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-xs-12">
                                    <button class="btn btn-info">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                   <a id="rent" href="#renter" style="text-decoration: none;color:#fff;"> إضافة مستأجر جديد</a>

                                    </button>
                                </div>
                                <div class="col-lg-6 col-md-8 col-xs-12">

                                </div>

                            </div>
                            <!-- end buttons -->
                            <!-- start cards -->
                            <?php
                             $rent=Session::get('get_renter');
                        // dd( $rent);
                             $n=sizeof($rent)/3;
                             $n=$n+(sizeof($rent)%3);
                             $n=(int)$n;
                          //   dd($n);
                          $size=0;
                             for($i=0;$i<$n;$i++)
                             {
                            echo '<div class="row">';
                            for($j=0+$size;$j<3+$size;$j++)
                            {
                                if($j>=sizeof($rent))break;
                               echo '<div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="card">
                                        <div class="line">
                                            <label>
                                                        الاسم:
                                                    <span>'.$rent[$j]->name.' </span>
                                                </label>
                                        </div>
                                        <div class="line">
                                            <label>
                                                            المشروع قائم ب:
                                                        <span>'.$rent[$j]->proj_place.' </span>
                                                    </label>
                                        </div>
                                        <div class="line">
                                            <label>
                                                            التليفون:
                                                        <span>'.$rent[$j]->phone.'</span>
                                                    </label>
                                        </div>
                                        <div class="line">
                                            <label>
                                                            الرقم القومي:
                                                        <span>'.$rent[$j]->id_nation.'</span>
                                                    </label>
                                        </div>
                                        <div class="line">
                                            <label>
                                                            محل الاقامة:
                                                        <span>'.$rent[$j]->place.'</span>
                                                    </label>
                                        </div>
                                        <div class="line">
                                            <label>
                                                            المحافظة:
                                                        <span>'.$rent[$j]->center.'</span>
                                                    </label>
                                        </div>
                                        <div class="line">
                                            <label>
                                                            االتاريخ:
                                                        <span>'.$rent[$j]->date.'</span>
                                                    </label>
                                        </div>

                                        <div class="butons text-center">
                                            <a href="#data'.$rent[$j]->id.'" style="text-decoration: none;color:#2ED47A;">
                                                <button name="btn'.$rent[$j]->id.'" class="btn btn-outline-info">
                                                             عرض بيانات المستأجر
                                                </button>
                                            </a>
                                        </div>

                                        <div class="butons text-center">
                                            <a href="#modify'.$rent[$j]->id.'" style="text-decoration:none;color:#FFB946; ">
                                                ';echo'
                                            <button name="btn'.$rent[$j]->id.'"class="btn btn-outline-warning">تعديل بيانات المستأجر</button>
                                            </a>
                                        </div>
                                        <a href="#delete'.$rent[$j]->id.'" class="link text-center">حذق بيانات المستخدم</a>
                                    </div>
                                </div>';}
                                $size+=3;


                       echo' </div>'; }
                        ?>
                    </section>
                </div>

            </div>
        </div>
    </section>
    <?php
        $rent=Session::get('get_renter');
         $n=sizeof($rent);

            for($i=0;$i<$n;$i++)
                        {
                             echo'
    <div id="delete'.$rent[$i]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="'.route('delete_renter').'">
                            '.csrf_field().'
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <p>هل تريد حذق بيانات المستاجر بالكامل؟</p>
            <hr/>
            <div class="bt">
                <button name="btn'.$rent[$i]->id.'"style="color: #2ED47A;">
                             نعم
                         </button>
                <button name="btnn'.$rent[$i]->id.'"style="color: #F76858;">
                                لا
                        </button>
            </div>
            </form>
        </div>
    </div>';}
    ?>

    <?php
                             $rent=Session::get('get_renter');

                             $n=sizeof($rent);

            for($i=0;$i<$n;$i++)
                        {
                             echo'
    <div id="modify'.$rent[$i]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="'.route('update_renter').'">
                            '.csrf_field().'
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>الاسم</label>
                        <input name="name" value="'.$rent[$i]->name.'" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label>محل الاقامه</label>
                        <input type="text" name="place" value="'.$rent[$i]->place.'" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>المشروع قائم ب</label>
                        <input type="text" name="proj_place" value="'.$rent[$i]->proj_place.'" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label>المحافظه</label>
                        <input type="text" name="center" value="'.$rent[$i]->center.'" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>التليفون </label>
                        <input type="text" name="phone" value="'.$rent[$i]->phone.'" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label> التاريخ</label>
                        <input type="date" name="date" value="'.$rent[$i]->date.'" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>الرقم القومي</label>
                        <input type="text" name="id_nation" value="'.$rent[$i]->id_nation.'" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>نظام الدفع</h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="نقدا" name="type_pay" type="radio"  checked="">     نقدا</span>
                    <span class="choose"><input value="قسطا" name="type_pay" type="radio"  checked="">     قسطا </span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>وقت المشروع </h5>
                    </div>
                    <div class="col-12">

                    <span class="choose"><input value="شهور" name="proj_time" type="radio"  checked="">     شهور</span>
                    <span class="choose"><input value="سنوات" name="proj_time" type="radio"  checked="">     سنوات </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>نظام الزراعه </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="استشاري" name="type_zr3" type="radio"  checked="">     استشاري</span>
                    <span class="choose"><input value="تقليدي" name="type_zr3" type="radio"  checked="">     تقليدي </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>موقع المشروع </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="الفيوم" name="proj_place1" type="radio"  checked="">     الفيوم</span>
                    <span class="choose"><input value="المنيا" name="proj_place1" type="radio"  checked="">     المنيا </span>
                    <span class="choose"><input value="الوادي" name="proj_place1" type="radio"  checked="">     الوادي </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>المنزل </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value=" عباره عن قطعة ارض " name="home" type="radio"  checked="">     عباره عن قطعة ارض </span>
                    <span class="choose"><input value=" منزل مجهز" name="home" type="radio"  checked="">      منزل مجهز </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>الحاله الاجتماعيه </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="اعزب" name="state" type="radio"  checked="">     اعزب </span>
                    <span class="choose"><input value="متزوج" name="state" type="radio"  checked="">      متزوج </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>سبق استصلاح ارض صحراويه فيما سبق </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="نعم" name="last_land" type="radio"  checked="">      نعم </span>
                    <span class="choose"><input value="لا" name="last_land" type="radio"  checked="">      لا </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>سبق التقدم لمشوعات سابقه </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="نعم" name="last_proj" type="radio"  checked="">      نعم </span>
                    <span class="choose"><input value="لا" name="last_proj" type="radio"  checked="">      لا </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> موقع المشروع القادم الي تقدمت اليه ؟ </h5>
                    </div>

                    <div class="form-group col-md-6 col-xs-12">

                        <input type="text" name="new_pos"  value="'.$rent[$i]->new_pos.'" class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> رسالتك </h5>
                    </div>

                    <div class="form-group col-12">

                        <textarea class="form-control" name="message"   rows="4">'.$rent[$i]->message.'</textarea>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-12 text-center">
                        <button name="btn'.$i.'" type="submit" class="btn btn-info">حفظ</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div> ';

    }
    ?>


    <?php
                             $rent=Session::get('get_renter');
                        // dd( $rent);
                             $n=sizeof($rent);

            for($i=0;$i<$n;$i++)
                        {  echo'
    <div id="data'.$rent[$i]->id.'" class="overlay">
        <a href="#" class="cancel"></a>
        <div class="modals">
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label> '.$rent[$i]->name.':الاسم</label>

                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label>محل الاقامه: '.$rent[$i]->place.' </label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>المشروع قائم ب: '.$rent[$i]->proj_place.'</label>
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label> '.$rent[$i]->center.': المحافظه</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>التليفون :  '.$rent[$i]->phone.'</label>
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label> '.$rent[$i]->date.'  : التاريخ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>الرقم القومي :   '.$rent[$i]->id_nation.'</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>  '.$rent[$i]->type_pay.'  :نظام الدفع</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>وقت المشروع :   '.$rent[$i]->proj_time.'</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> '.$rent[$i]->type_zr3.':نظام الزراعه </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>موقع المشروع : '.$rent[$i]->proj_place1.'</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>المنزل : '.$rent[$i]->home.'</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>الحاله الاجتماعيه : '.$rent[$i]->state.'</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>سبق استصلاح ارض صحراويه فيما سبق : '.$rent[$i]->last_land.' </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>سبق التقدم لمشوعات سابقه : '.$rent[$i]->last_proj.' </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> موقع المشروع القادم الي تقدمت اليه : '.$rent[$i]->new_pos.'</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> '.$rent[$i]->message.': رسالتك </h5>
                    </div>

                </div>
            </div>
        </div>
    </div>';
                            }

    ?>

    <div id="renter" class="overlay">

        <a href="#" class="cancel"></a>
        <div class="modals">
        <form class="form" method="post" action="{{route('renters')}}">
                            {{csrf_field()}}
            <a href="#" class="close">الغاء<i class="fa fa-times"></i></a>
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>الاسم</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label>محل الاقامه</label>
                        <input type="text" name="place" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>المشروع قائم ب</label>
                        <input type="text" name="proj_place" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label>المحافظه</label>
                        <input type="text" name="center" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>التليفون </label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <label> التاريخ</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col-xs-12">
                        <label>الرقم القومي</label>
                        <input type="text" name="id_nation" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>نظام الدفع</h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="نقدا" name="type_pay" type="radio"  checked="">     نقدا</span>
                    <span class="choose"><input value="قسطا" name="type_pay" type="radio"  checked="">     قسطا </span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>وقت المشروع </h5>
                    </div>
                    <div class="col-12">

                    <span class="choose"><input value="شهور" name="proj_time" type="radio"  checked="">     شهور</span>
                    <span class="choose"><input value="سنوات" name="proj_time" type="radio"  checked="">     سنوات </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>نظام الزراعه </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="استشاري" name="type_zr3" type="radio"  checked="">     استشاري</span>
                    <span class="choose"><input value="تقليدي" name="type_zr3" type="radio"  checked="">     تقليدي </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>موقع المشروع </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="الفيوم" name="proj_place1" type="radio"  checked="">     الفيوم</span>
                    <span class="choose"><input value="المنيا" name="proj_place1" type="radio"  checked="">     المنيا </span>
                    <span class="choose"><input value="الوادي" name="proj_place1" type="radio"  checked="">     الوادي </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>المنزل </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value=" عباره عن قطعة ارض " name="home" type="radio"  checked="">     عباره عن قطعة ارض </span>
                    <span class="choose"><input value=" منزل مجهز" name="home" type="radio"  checked="">      منزل مجهز </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>الحاله الاجتماعيه </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="اعزب" name="state" type="radio"  checked="">     اعزب </span>
                    <span class="choose"><input value="متزوج" name="state" type="radio"  checked="">      متزوج </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>سبق استصلاح ارض صحراويه فيما سبق </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="نعم" name="last_land" type="radio"  checked="">      نعم </span>
                    <span class="choose"><input value="لا" name="last_land" type="radio"  checked="">      لا </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>سبق التقدم لمشوعات سابقه </h5>
                    </div>
                    <div class="col-12">
                    <span class="choose"><input value="نعم" name="last_proj" type="radio"  checked="">      نعم </span>
                    <span class="choose"><input value="لا" name="last_proj" type="radio"  checked="">      لا </span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> موقع المشروع القادم الي تقدمت اليه ؟ </h5>
                    </div>

                    <div class="form-group col-md-6 col-xs-12">

                        <input type="text" name="new_pos" class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h5> رسالتك </h5>
                    </div>

                    <div class="form-group col-12">

                        <textarea class="form-control" name="message" rows="4"></textarea>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-12 text-center">
                        <button type="submit" class="btn btn-info">حفظ</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>

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
