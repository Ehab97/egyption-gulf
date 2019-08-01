<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;
use App\Renter1;
use App\Agri;
use App\Contract;
use DB;
use Session;
class PostControler extends Controller
{

    function index()
    {
     return view('upload');
    }

    public function del_cont()
    {
        $pos=-1;
        $poss=-1;
        for($i=0;$i<1000;$i++) { 
            $b='btn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $pos=$i;
            
            }
        }
       

        for($i=0;$i<1000;$i++) { 
            $b='btnn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $poss=$i;
            
            }
        }
       
        if($pos!=-1)
        DB::delete('delete from gulf.contracts where id = ?',[$pos]);
        $this->get_cont(); 
        return redirect()->route('contract');
    }

    public function update_cont(Request $req)
    {
        
        $pos=-1;
        $poss=-1;
        for($i=0;$i<1000;$i++) { 
            $b='btn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $pos=$i;
            
            }
        }
        $image = $req->file('upfile');   
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        DB::update('update contracts set image=?,start_date=?,end_date=? where id =?',
        [$new_name,$req->start_date,$req->end_date,$pos]);
        $this->get_cont();
        return redirect()->route('contract');

    }

    public function get_cont()
    {
        $agri=DB::select('select * from gulf.contracts');
       // dd( $agri);
        \Session::put('contrat', $agri);
    }
    public function  add_contr(Request $req)
    { 
        $this->validate($req, [
            'upfile'  => 'required|image|mimes:jpg,png,gif|max:2048'
           ]);
          
           $image = $req->file('upfile');   
           $new_name = rand() . '.' . $image->getClientOriginalExtension();
           $image->move(public_path('images'), $new_name);
           //dd( $new_name);
           $user = new Contract();
           $user->start_date = $req->start_date;
           $user->end_date = $req->end_date;
           $user->image=$new_name;
           $user->save();
   
           $this->get_cont();
           return redirect()->route('contract');
         
       
    }
    public function delete_agri(Request $req)
    {
        $pos=-1;
        $poss=-1;
        for($i=0;$i<1000;$i++) { 
            $b='btn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $pos=$i;
            
            }
        }
        $pos;

        for($i=0;$i<1000;$i++) { 
            $b='btnn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $poss=$i;
            
            }
        }
        $poss;
        if($pos!=-1)
        DB::delete('delete from gulf.agris where id = ?',[$pos]);
        $this->get_agri(); 
        return redirect()->route('agri');

    }
    public function update_agri(Request $req)
    {
        
        $pos=-1;
        $poss=-1;
        for($i=0;$i<1000;$i++) { 
            $b='btn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $pos=$i;
            
            }
        }
        


        $req->place;
        $req->size;
        DB::update('update agris set place=?,size=? where id =?',
        [$req->place,$req->size,$pos]);
        $this->get_agri();
        return redirect()->route('agri');

    }


    public function add_agri(Request $req)
    {
        $user = new Agri();
        $user->place = $req->place;
        $user->size = $req->size;
        $user->save();

        $this->get_agri();
        return redirect()->route('agri');

    }

 public function get_agri()
    {
        $agri=DB::select('select * from gulf.agris');
        \Session::put('agri', $agri);
    }
    public function get_renters()
    {
        $rent=DB::select('select * from gulf.renter1s');
        \Session::put('get_renter', $rent);
    }
    public function delete_renter ()
    {
        $pos=-1;
        $poss=-1;
        for($i=0;$i<1000;$i++) { 
            $b='btn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $pos=$i;
            
            }
        }
        $pos;

        for($i=0;$i<1000;$i++) { 
            $b='btnn';
            $ii=(string)$i;
            $b=$b.$ii;
        if (isset($_POST[$b])){
             $poss=$i;
            
            }
        }
        $poss;
        if($pos!=-1)
        DB::delete('delete from gulf.renter1s where id = ?',[$pos]);
        $this->get_renters(); 
        return redirect()->route('renters');

    }
    public function update_renter(Request $req)
    {
        $arr = array();
            $arr[0]=$req->name;     
            $arr[1]=$req->place;
            $arr[2]=$req->proj_place;
            $arr[3]=$req->center;
            $arr[4]=$req->phone;
            $arr[5]= $req->date;
            $arr[6]= $req->id_nation;
            $arr[7]= $req->type_pay;
            $arr[8]= $req->proj_time;
            $arr[9]=$req->type_zr3;
            $arr[10]= $req->proj_place1;
            $arr[11]= $req->home;
            $arr[12]= $req->state;
            $arr[13]=$req->last_land;
            $arr[14]=$req->last_proj;
            $arr[15]=$req->new_pos;
            $arr[16]=$req->message;
            $pos=-1;
            for($i=0;$i<100;$i++) { 
                $b='btn';
                $ii=(string)$i;
                $b=$b.$ii;
            if (isset($_POST[$b])){
                 $pos=$i;
                
                }
            }
            $pos++;
            for($i=0;$i<17;$i++)
            if($arr[$i]==NULL)
            echo '<script>
                  alert("املا جميع الحقول");
                  window.location= "renters"
                  </script>'; 

            DB::update('update renter1s set name=?,place=?,proj_place=?,center=?,phone=?,date=?,id_nation=?,type_pay=?
            ,proj_time=?,type_zr3=?,proj_place1=?,home=?,state=?,last_land=?,last_proj=?,new_pos=?,message=? where id =?',
            [$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10],$arr[11],
            $arr[12],$arr[13],$arr[14],$arr[15],$arr[16],$pos]);

            return redirect()->route('renters');
    }

    public function renters(Request $req)
    {

            $arr = array();
            $arr[0]=$req->name;     
            $arr[1]=$req->place;
            $arr[2]=$req->proj_place;
            $arr[3]=$req->center;
            $arr[4]=$req->phone;
            $arr[5]= $req->date;
            $arr[6]= $req->id_nation;
            $arr[7]= $req->type_pay;
            $arr[8]= $req->proj_time;
            $arr[9]=$req->type_zr3;
            $arr[10]= $req->proj_place1;
            $arr[11]= $req->home;
            $arr[12]= $req->state;
            $arr[13]=$req->last_land;
            $arr[14]=$req->last_proj;
            $arr[15]=$req->new_pos;
            $arr[16]=$req->message;
            for($i=0;$i<17;$i++)
            if($arr[$i]==NULL)
            echo '<script>
                  alert("املا جميع الحقول");
                  window.location= "renters"
                  </script>'; 

            $user = new Renter1();
            $user->name=$req->name;     
            $user->place=$req->place;
            $user->proj_place=$req->proj_place;
            $user->center=$req->center;
            $user->phone=$req->phone;
            $user->date= $req->date;
            $user->id_nation= $req->id_nation;
            $user->type_pay= $req->type_pay;
            $user->proj_time= $req->proj_time;
            $user->type_zr3=$req->type_zr3;
            $user->proj_place1= $req->proj_place1;
            $user->home= $req->home;
            $user->state=$req->state;
            $user->last_land=$req->last_land;
            $user->last_proj=$req->last_proj;
            $user->new_pos=$req->new_pos;
            $user->message=$req->message;
            $user->save();
            $this->get_renters();   
            return redirect()->route('renters');

    }
      public function signup(Request $req)
    {
        
        $email=$req->email;
        $name=$req->name;
        $phone=$req->phone;
        $password=$req->password;
        $repassword=$req->repassword;

        //dd($name);
        if ($name==null) {
            
            echo '<script>
                  alert("name must contain more than 8 letters");
                  window.location= "rsignup"
                  </script>';     
        } 
        $ckemail = DB::select('select * from gulf.employes where email = ?', [$email]);
      
         if($ckemail!=null){
           
            echo '<script>
            alert("this email is alreaady used");
            window.location= "rsignup"
            </script>';   

         }
        else  if(strlen($password)<3){
            echo '<script>
                  alert("password must contain more than 8 letters/numbers");
                  window.location= "rsignup"
                  </script>'; 
        }
        else if($password!=$repassword){
            echo '<script>
                  alert("password and  repassword must be same");
                  window.location= "rsignup"
                  </script>'; 
        }

        else 
        {
        $user = new Employe();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->phone = $phone;
        $user->save();
        $this->get_renters();
        $this->get_cont();
        echo '<script>
        alert("DONE");
        window.location= "home"
        </script>';
        }

        
    }
    public function login(Request $req)
    {
           
         
            $user = DB::select('select * from gulf.employes where email = ?', [$req->email]);
            $user1= DB::select('select * from gulf.employes where phone = ?', [$req->email]);
       
    if($user==NULL&&$user1==NULL)
     {
          
        echo '<script>
        alert("أملأ الحقول");
        window.location= "rlogin"
        </script>'; 
         
     }
    
     else if($user!=NULL)
     {
        if($user[0]->email==$req->email and $user[0]->password == $req->password)
        {
               $x[0]=$user[0]->id;
                $x[1]=$user[0]->name;
               \Session::put('user', $x);     
               $this->get_renters();   
               $this->get_cont();    
               return redirect()->route('home');
        }
        else            
                echo '<script>
                alert("تأكد من ادخال البيانات صحيحه");
                window.location= "rlogin"
                </script>'; 
                   
               
    }
    else if($user1!=NULL)
     {
        if($user1[0]->phone==$req->email and $user1[0]->password == $req->password)
        {
               $x[0]=$user1[0]->id;
                $x[1]=$user1[0]->name;
               \Session::put('user', $x);         
               $this->get_renters();  
               $this->get_cont(); 
               return redirect()->route('home');
        }
        else            
                echo '<script>
                alert("تأكد من ادخال البيانات صحيحه");
                window.location= "rlogin"
                </script>'; 
                   
               
    }
    

           //nonusable if you delete it
    
    }
}
