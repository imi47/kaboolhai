<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\City;
use Requests;
use DB;
use \App\customer_query;
use \App\Loking;
use \App\LatestUpdate;
use \App\Advert;
use \App\Assisted;
use\App\SaveRequest;
use\App\CloseAccount;
use\App\FeedBack;

use Session;
class admin_controller extends Controller
{
  public function __construct()
{
  $this->middleware('adminlogin' , ['except' => [
                'forgot',
                'login','logout','index',
                 'update_password','reset_password']]);
}
    public function index()
    {
        
    	  return view("admin/login");
    }
    public function forgot(Request $request)
    {
      $email=$request->email;
      $result= User::where(array('is_admin'=>1,'email'=>$email))->first();
      $data['email'] = $email;
          if($result)
          {
            \Mail::send('emails.general' , $data , function($message) use ($data){
              $message->to($data['email'])->from('haider@gmail.com' , 'Haider')->subject('Forgot Password');
            });
             // Session::put('admin_id',$result->id);
             // Session::put('admin_username',$result->username);
            return redirect('admin/dashboard');
          }
          else
          {
           Session::flash('error1', 'invalid email try later!'); 
           return back();
          }
    }
    public function login(Request $request)
    {
    	 
          $email=$request->email;
          $password=$request->password;
    	 
    $result= User::where(array('password'=>sha1($password),'is_admin'=>1,'email'=>$email))->first();
    	   
          if($result)
          {
            // echo $result->;die();
             Session::put('admin_id',$result->id);
             Session::put('admin_username',$result->firstname);
            return redirect('admin/dashboard');
          }
          else
          {
           Session::flash('error', 'invalid email or password please try again!'); 
           return back();
          }
    }

    public function dashboard()
    {
      
          
        $data['title'] = 'Dashboard';
        return view('admin/index')->with($data);
    }
    public function logout()
    {
           Session::forget('admin_id');
           Session::forget('admin_username');
          return view("admin/login");
    }
    // public function property()
    // {
        
    //      $data['title'] = 'property';
    //      return view('admin/add_property')->with($data);
    // }
    public function add_user()
    {
      $data['country'] = DB::table('countries')->get();
  
      $data['title'] = 'Add User';
      return view('admin/add_user')->with($data); 
    }
    public function view_user($user_id)
    {
       $data['title'] = 'View user';
       $data['view_user'] = DB::table('users')->join('countries', 'users.country_id', '=', 'countries.country_id')
       ->join('cities', 'users.city_id', '=', 'cities.city_id')->join('states', 'users.state_id', '=', 'states.state_id')->where('is_admin',0)->where('id',$user_id)->first();
       // dd($data);
       if($data['view_user']->present_country_id)
       {
       $data['present']=DB::table('countries')->where('country_id',$data['view_user']->present_country_id)->first();
        }
        if($data['view_user']->native_country_id)
        {
       $data['native']=DB::table('countries')->where('country_id',$data['view_user']->native_country_id)->first();
        }
        if($data['view_user']->native_state_id)
        {
        $data['native_state']=DB::table('states')->where('state_id',$data['view_user']->native_state_id)->first();
         }
         if($data['view_user']->native_city_id)
         {
         $data['native_city']=DB::table('cities')->where('city_id',$data['view_user']->native_city_id)->first();
         }

         if($data['view_user']->living_country_id)
         {
        $data['living']=DB::table('countries')->where('country_id',$data['view_user']->living_country_id)->first();
          }
       //  if($data['view_user']->living_state_id)
       //  {
       // $data['living_state']=DB::table('states')->where('state_id',$data['view_user']->living_state_id)->first();
       //    }
       //    if($data['view_user']->living_city_id)
       //    {
       //  $data['living_city']=DB::table('cities')->where('city_id',$data['view_user']->living_city_id)->first();
       //    }
         $data['loking_marital']=Loking::where(['user_id'=>$user_id,'loking_type'=>'martial_status'])->get();

        $data['loking_eating']=Loking::where(['user_id'=>$user_id,'loking_type'=>'eating type'])->get();

         $data['africa']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Africa'])->get();
        $data['antarctica']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Antarctica'])->get();


         $data['north_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'North America'])->get();
        $data['australasia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Australasia'])->get();
         $data['asia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Asia'])->get();
        $data['europe']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Europe'])->get();



        $data['south_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'South America'])->get();
        $data['residency_status']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Residency Status'])->get();
         $data['ethnic_origin']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Ethnic Origin'])->get();
        $data['religious_history']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Religious History'])->get();



        $data['living_with']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Living with'])->get();
        $data['sects']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Sects'])->get();
         $data['pray']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Pray'])->get();
        $data['has_children']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Has Children'])->get();



        $data['like_child']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Like to Have'])->get();
        $data['loking_body_type']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Body Type'])->get();
         $data['observes_hijab']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Observes Hija'])->get();
        $data['hobbies']=Loking::where(['user_id'=>$user_id,'loking_type'=>'hobbies'])->get();
       // dd($data['antarctica']);
    return view('admin/view_user')->with($data);
     // return view('admin/view_user');
    }
    public function view_all()
    {
        
      
         $data['title'] = 'View all user';
         $data['user_data'] = DB::table('users')
                                ->where('is_admin',0)
                                ->where('status',1)
                               ->join('countries', 'users.country_id', '=', 'countries.country_id','left')
                               ->join('cities', 'users.city_id', '=', 'cities.city_id','left') ->orderBy('users.id','desc') 
                              ->get();
         return view('admin/view_all')->with($data);
    }
    public function get_user_archive()
    {
    
        $data['title'] = 'View-archive-users';
         $data['user_data'] = DB::table('users')
                                ->where('is_admin',0)
                                ->where('status',0)
                               ->join('countries', 'users.country_id', '=', 'countries.country_id')
                               ->join('cities', 'users.city_id', '=', 'cities.city_id') ->orderBy('users.id','desc') 
                              ->get();
         return view('admin/view-user-archive')->with($data); 
    }
    public function edit_user($user_id)
    {
      $data['title'] = 'Edit-users';
      $data['country'] = DB::table('countries')->get();
      // $data['cities'] = DB::table('cities')->get();
      
      // $data['title'] = 'Add User';
      $data['edit_user'] = User::where('is_admin',0)->find($user_id);
      $data['state'] = DB::table('states')->where('country_id',$data['edit_user']->country_id)->get();
       $data['cities'] = DB::table('cities')->where('state_id',$data['edit_user']->state_id)->get();
      $data['native_state'] = DB::table('states')->where('country_id',$data['edit_user']->native_country_id)->get();

       $data['native_cities'] = DB::table('cities')->where('state_id',$data['edit_user']->native_state_id)->get();

       $data['living_state'] = DB::table('states')->where('country_id',$data['edit_user']->living_country_id)->get();

       $data['living_cities'] = DB::table('cities')->where('state_id',$data['edit_user']->living_state_id)->get();


        $data['hobbies']=Loking::where(['user_id'=>$user_id,'loking_type'=>'hobbies'])->get();

        $data['loking_marital']=Loking::where(['user_id'=>$user_id,'loking_type'=>'martial_status'])->get();

        $data['loking_eating']=Loking::where(['user_id'=>$user_id,'loking_type'=>'eating type'])->get();

         $data['africa']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Africa'])->get();
        $data['antarctica']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Antarctica'])->get();


         $data['north_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'North America'])->get();
        $data['australasia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Australasia'])->get();
         $data['asia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Asia'])->get();
        $data['europe']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Europe'])->get();



        $data['south_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'South America'])->get();
        $data['residency_status']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Residency Status'])->get();
         $data['ethnic_origin']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Ethnic Origin'])->get();
        $data['religious_history']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Religious History'])->get();



        $data['living_with']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Living with'])->get();
        $data['sects']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Sects'])->get();
         $data['pray']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Pray'])->get();
        $data['has_children']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Has Children'])->get();



        $data['like_child']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Like to Have'])->get();
        $data['loking_body_type']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Body Type'])->get();
         $data['observes_hijab']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Observes Hija'])->get();


                                // dd($data['cities']);

      return view('admin/edit_user')->with($data); 
      // echo $user_id;
    }
    public function update_user(Request $request)
    {

    $user_id=$request->user_id;
       $user=User::find($user_id);
    $user->firstname=$request->firstname;
    $user->lastname=$request->lastname;
    $user->user_name=$request->user_name;
    
    $user->gender=$request->gender;
    $user->country_id=$request->country_id;
    $user->state_id=$request->state_id;
    $user->city_id=$request->city_id;
    // $code=$request->code;
    // $phone_code=$request->phone_code;
    // $phone=$request->phone;
    $user->code=$request->code;
    $user->phone_code=$request->phone_code;
    $user->phone=$request->phone;
    $user->skin_color=$request->skin_color;
    $user->height=$request->height;
    $user->weight=$request->weight;
    // $day=$request->day;
    // $month=$request->month;
    // $year=$request->year;
    // $user->dob=$day.'-'.$month.'-'.$year;

    $user->day=$request->day;
    $user->month=$request->month;
    $user->year=$request->year;




    $user->physical_status=$request->physical_status;
    $user->profile_created=$request->profile_created;
    $user->language=$request->language;
    $user->religious_type=$request->religious_type;
    $user->sect_are=$request->sect_are;
    $user->religiousness=$request->religiousness;
    $user->pray=$request->pray;
    $user->read_quran=$request->read_quran;
    $user->attend_religious_service=$request->attend_religious_service;
    $user->polygamy=$request->polygamy;
    $user->ethnic_type=$request->ethnic_type;
    $user->qualification=$request->qualification;
    $job_type=$request->job;
    if($job_type)
    {

     $user->job=$request->job;
    }
    else
    {
      $user->job=$request->user_other_job;  
    }

    
    $user->employed_in=$request->employed_in;
    $user->a_income=$request->a_income;
    $user->full_address=$request->full_address;
    $user->present_country_id=$request->present_country_id;
    $user->present_city=$request->present_city;

    $user->diseace=$request->diseace;
    $user->thelisimia=$request->thelisimia;
    $user->native_country_id=$request->native_country_id;
    $user->native_state_id=$request->native_state_id;
    $user->native_city_id=$request->native_city_id;
    $user->convenient_time=$request->convenient_time;
    $user->contact_person=$request->contact_person;
    $user->blood_group=$request->blood_group;
    $user->body_type=$request->body_type;
    $user->diet=$request->diet;
    $user->disabilty=$request->disabilty;
    $user->martial_status=$request->martial_status;
    $user->agreed=$request->agreed;
    $user->description=$request->description;
    $user->family_type=$request->family_type;
    $user->finacial_status=$request->finacial_status;
    $assets=$request->assets;
    if($assets)
    {

    $user->assets=$request->assets;
    }
    else
    {
      $user->assets=$request->other_assets; 
    }
        $user->edu_detail=$request->edu_detail;
       $user->occupation_detail=$request->occupation_detail;
       $user->how_did=$request->how_did;
    $user->bread=$request->bread;
      
    $user->cast=$request->cast;
    $user->clan=$request->clan;
    $user->brother_married=$request->brother_married;
    $user->brother_unmarried=$request->brother_unmarried;
    $user->sister_unmarried=$request->sister_unmarried;
    $user->sister_married=$request->sister_married;
    $user->smoking=$request->smoking;

    $user->father_occupation=$request->father_occupation;
    $user->father_detail=$request->father_detail;
    $user->mother_detail=$request->mother_detail;
    $user->mother_occupation=$request->mother_occupation;
    $user->elder_brother=$request->elder_brother;
    $user->younger_brother=$request->younger_brother;
    $user->elder_sister=$request->elder_sister;
    $user->younger_sister=$request->younger_sister;
    $user->family_detail=$request->family_detail;
    $user->loking_age_from=$request->loking_age_from;

    $user->loking_age_to=$request->loking_age_to;
     $user->loking_height_to=$request->loking_height_to;
      $user->loking_height_from=$request->loking_height_from;
      $user->loking_skin_color=$request->loking_skin_color;
      $user->loking_physcial_status=$request->loking_physcial_status;
      $user->loking_language=$request->loking_language;
      $user->loking_education=$request->loking_education;
      $loking_job_type=$request->loking_job;
      if($loking_job_type)

      {
      $user->loking_job=$request->loking_job;
     }
     else
     {
        $user->loking_job=$request->loking_job_type;
     }
      $user->loking_a_income=$request->loking_a_income;
     
     
      $user->living_country_id=$request->living_country_id;
        // $user->living_state_id=$request->living_state_id;

        // // $user->living_country_id=$request->living_country_id;
        // $user->living_city_id=$request->living_city_id;

        $user->loking_description=$request->loking_description;

         $user->gardian_name=$request->gardian_name;
          $user->gardian_number=$request->gardian_number;
     
      $user->save();
    // echo "Thanks for Register in Kaboolhai";
    // die();
// $user->hobbies=$request->hobbies;

    $child_count=$request->child_count;
     if($child_count)
     {
      $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Has Children' ])->delete();
        foreach ($child_count as $value)
       {
        $child_count=new Loking();
            $child_count->loking_type=$request->has_child;
        $child_count->loking_value=$value;
        $child_count->user_id=$user->id;
        $child_count->save();
       }
    }

  $child_like=$request->child_like;
     if($child_like)
     {
      $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Like to Have' ])->delete();
        foreach ($child_like as $value)
       {
        $child_like=new Loking();
        
            $child_like->loking_type=$request->like_child;
        $child_like->loking_value=$value;
        $child_like->user_id=$user->id;
        $child_like->save();
       }
    }   
     $hobbies_type=$request->hobbies_type;
     if(count($hobbies_type))
     {
      $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'hobbies' ])->delete();
        foreach ($hobbies_type as $value)
       {
     
        $addhobbies=new Loking();
        $addhobbies->loking_type=$request->hobbies;
        $addhobbies->loking_value=$value;
        $addhobbies->user_id=$user->id;
        $addhobbies->save();
       }
    }

       $loking_martial_status=$request->loking_martial_status;
       if($loking_martial_status)
       {
        $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'martial_status' ])->delete();
        foreach ($loking_martial_status as $value)
       {
        $LokingMartialStatus=new Loking();
        
            $LokingMartialStatus->loking_type=$request->martial;
        $LokingMartialStatus->loking_value=$value;
        $LokingMartialStatus->user_id=$user->id;
        $LokingMartialStatus->save();
       }
    }

       $loking_eating_habits=$request->loking_eating_habits;
       if($loking_eating_habits)
       {
        $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'eating type' ])->delete();
         foreach ($loking_eating_habits as $value)
       {
        $eating_type=new Loking();
       
            $eating_type->loking_type=$request->eating_type;
        $eating_type->loking_value=$value;
        $eating_type->user_id=$user->id;
        $eating_type->save();
       }
}
       $africa_country=$request->africa_country;
       if($africa_country)
       {
        $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Africa' ])->delete();
         foreach ($africa_country as $value)
       {
        $africa_country=new Loking();
      
            $africa_country->loking_type=$request->affrica;
        $africa_country->loking_value=$value;
        $africa_country->user_id=$user->id;
        $africa_country->save();
       }
    }

      $antarctica_country=$request->antarctica_country;
      if($antarctica_country)
      {
         $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Antarctica' ])->delete();
         foreach ($antarctica_country as $value)
       {
        $antarctica_country=new Loking();
       
            $antarctica_country->loking_type=$request->antarctica;
        $antarctica_country->loking_value=$value;
        $antarctica_country->user_id=$user->id;
        $antarctica_country->save();
       }

    }
       $asia_country=$request->asia_country;
       if($asia_country)
       {
        $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Asia' ])->delete();
         foreach ($asia_country as $value)
       {
        $asia_country=new Loking();
      
            $asia_country->loking_type=$request->asia;
        $asia_country->loking_value=$value;
        $asia_country->user_id=$user->id;
        $asia_country->save();
       }
}
       $europe_country=$request->europe_country;
       if($europe_country)
       {
         $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Europe' ])->delete();
         foreach ($europe_country as $value)
       {
        $europe_country=new Loking();
        
            $europe_country->loking_type=$request->europe;
        $europe_country->loking_value=$value;
        $europe_country->user_id=$user->id;
        $europe_country->save();
       }
     }
    $north_america_country=$request->north_america_country;
    if($north_america_country)
    {
      $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'North America' ])->delete();
         foreach ($north_america_country as $value)
       {
        $north_america_country=new Loking();
       
            $north_america_country->loking_type=$request->north_america;
        $north_america_country->loking_value=$value;
        $north_america_country->user_id=$user->id;
        $north_america_country->save();
       }
    }
       $australasia_country=$request->australasia_country;
       if($australasia_country)
       {
         $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Australasia' ])->delete();
         foreach ($australasia_country as $value)
       {
        $australasia_country=new Loking();
       
            $australasia_country->loking_type=$request->australasia;
        $australasia_country->loking_value=$value;
        $australasia_country->user_id=$user->id;
        $australasia_country->save();
       }
}
       $south_america_country=$request->south_america_country;
       if ($south_america_country)
        {
        $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'South America' ])->delete();
       
         foreach ($south_america_country as $value)
       {
        $south_america_country=new Loking();
      
            $south_america_country->loking_type=$request->south_america;
        $south_america_country->loking_value=$value;
        $south_america_country->user_id=$user->id;
        $south_america_country->save();
       }
    }
        $residency_name=$request->residency_name;
        if($residency_name)
        {
           $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Residency Status' ])->delete();
         foreach ($residency_name as $value)
       {
        $residency_name=new Loking();
        
            $residency_name->loking_type=$request->loking_residency_status;
        $residency_name->loking_value=$value;
        $residency_name->user_id=$user->id;
        $residency_name->save();
       }

      }
        $origin_name=$request->origin_name;
        if($origin_name)
        {
           $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Ethnic Origin' ])->delete();
         foreach ($origin_name as $value)
       {
        $origin_name=new Loking();
      
            $origin_name->loking_type=$request->loking_ethnic_origin;
        $origin_name->loking_value=$value;
        $origin_name->user_id=$user->id;
        $origin_name->save();
       }
    }
        $rel_history=$request->rel_history;
        if($rel_history)
        {
          $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Religious History' ])->delete();
         foreach ($rel_history as $value)
       {
        $rel_history=new Loking();
        
            $rel_history->loking_type=$request->religious_history;
        $rel_history->loking_value=$value;
        $rel_history->user_id=$user->id;
        $rel_history->save();
       }
    }


       $living_law=$request->living_law;
       if($living_law)
       {
        $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Living with' ])->delete();
         foreach ($living_law as $value)
       {
        $living_law=new Loking();
       
            $living_law->loking_type=$request->living_with;
        $living_law->loking_value=$value;
        $living_law->user_id=$user->id;
        $living_law->save();
       }

    }
        $sects_type=$request->sects_type;
        if($sects_type)
        {
          $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Sects' ])->delete();
         foreach ($sects_type as $value)
       {
        $sects_type=new Loking();
        
            $sects_type->loking_type=$request->loking_sects;
        $sects_type->loking_value=$value;
        $sects_type->user_id=$user->id;
        $sects_type->save();
       }
    }
        $pray_type=$request->pray_type;
        if($pray_type)
        {
          $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'loking_pray' ])->delete();
         foreach ($pray_type as $value)
       {
        $pray_type=new Loking();
       
            $pray_type->loking_type=$request->loking_pray;
        $pray_type->loking_value=$value;
        $pray_type->user_id=$user->id;
        $pray_type->save();
       }

    }

        $loking_body=$request->loking_body;
        if($loking_body)
        {
       $deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Body Type' ])->delete();
         foreach ($loking_body as $value)
       {
        $loking_body=new Loking();

        $loking_body->loking_type=$request->loking_body_type;
        $loking_body->loking_value=$value;
        $loking_body->user_id=$user->id;
        $loking_body->save();
       }

    }
       $hijab_time=$request->hijab_time;
       if($hijab_time)
       {

$deletedRows = Loking::where(['user_id'=>$user_id,'loking_type'=>'Observes Hija' ])->delete();
         foreach ($hijab_time as $value)
       {
        $hijab_time=new Loking();
            $hijab_time->loking_type=$request->observes_hijab;
        $hijab_time->loking_value=$value;
        $hijab_time->user_id=$user->id;
        $hijab_time->save();
       }
    }

    Session::flash('success', 'Your user has been updated successfully !'); 
           return redirect('admin/view-all');

    }
    public function user_archive($user_id)
    {
      
        $result=DB::table('users')->where('id',$user_id)->update(['status' => 0]);
        if($result)
        {
          Session::flash('success', 'Your user has been archived successfully !'); 
           return back();
        }
        else
        {
          Session::flash('error', 'invalid input!'); 
           return back();
        }
    }

    public function user_unarchive($user_id)
    {
      
        $result=DB::table('users')->where('id',$user_id)->update(['status' => 1]);
        if($result)
        {
          Session::flash('success', 'Your user has been un archived successfully !'); 
           return back();
        }
        else
        {
          Session::flash('error', 'invalid input!'); 
           return back();
        }
    }

    public function view_query()
    {
      $data['title'] = 'Customer Query';
      $query = new customer_query;
      $data['query']= $query::all();
      return view('admin/view-query')->with($data);
    }
    public function delete_query($query_id)
    {
      $query =customer_query::find($query_id);
      
        $result=$query->delete();
    
      if($result)
      {
        Session::flash('success', 'Your customer query has been deleted successfully !'); 
           return back();
      }
      else
      {
         Session::flash('error', 'invalid input!'); 
           return back();
      }



    }
    public function customer_reply(Request $request)
    {
      $data['user_email']=$request->email;
      $data['reply_message']=$request->reply_message;
    
     
       $result=\Mail::send('emails.customer-reply', $data , function($message) use ($data)
          {
                $message->to($data['user_email'])->from('admin@kaboolhai.com' , 'Usman Khan')->subject('reply from kaboolhai');
              });
     
        Session::flash('success', 'Your customer reply has been sended successfully !'); 
           return back();
    
    }

    public function latest_update()
    {
      $data['title'] = 'Latest Update';
      // $data['query']= $query::all();
      return view('admin/add-latest-update')->with($data);
    }
    public function add_update(Request $request)
    {
      $update=new LatestUpdate();
      $update->page_name=$request->page_name;
      $update->page_url=$request->page_url;
      $update->description=$request->description;
          $messages = array(
       
          'page_image.required' => 'Please select image',
         
         );
         $rules = array(
        'page_image' => 'required|max:10000|mimes:jpeg,jpg,gif,png,bmp',
        
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {

              return redirect()->back()->withErrors($validator->errors());
          }


           $image = $request->file('page_image');
          $destinationPath = public_path(). '/admin_assets/latest_update_images/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);
              $update->page_image=$locationimage;
              $update->save();
                
                if(!empty($update))
                {
                  Session::flash('success', 'Your update upload successfully'); 
                
                return back();
            }
            else
            {
              Session::flash('error', 'invalid input!'); 
                
              return back();
            }
        
    
    }
    public function vew_latest_update()
    {
      $data['update']=LatestUpdate::orderBy('update_id','desc')->get();
      $data['title']='Latest updates';
      return view('admin/view-latest-update')->with($data);
    }
    public function delete_update($update_id)
    {
      $old_image=LatestUpdate::where('update_id',$update_id)->first();
      $update=LatestUpdate::where('update_id',$update_id)->delete();
         unlink('public/admin_assets/latest_update_images/'.$old_image->page_image);
      if($update)
    {
    Session::flash('success', 'Your update has been deleted successfully'); 
    return back();
    }
    else
    {
     Session::flash('error', 'invalid input!'); 
    return back(); 
    }

    }

    public function advert()
    {
      $data['image']=Advert::first();
      $data['title'] = 'Advert';
      // $data['query']= $query::all();
      return view('admin/add-advert')->with($data);
    }
    public function delete_advert($advert_id)
    {
      $old_image=Advert::where('advert_id',$advert_id)->first();
      $Advert=Advert::where('advert_id',$advert_id)->delete();
         unlink('public/admin_assets/advert_image/'.$old_image->advert_image);
      if($Advert)
    {
    Session::flash('success', 'Your advert has been deleted successfully'); 
    return back();
    }
    else
    {
     Session::flash('error', 'invalid input!'); 
    return back(); 
    }
    }
    public function add_advert(Request $request)
    {
      $adverttest=Advert::first();
      if($adverttest)
      {
        Session::flash('error', 'delete old advert!'); 
                
              return back();
      }
      $advert=new Advert();
      
          $messages = array(
       
          'page_image.required' => 'Please select image',
         
         );
         $rules = array(
        'page_image' => 'required|max:10000|mimes:jpeg,jpg,gif,png,bmp',
        
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {

              return redirect()->back()->withErrors($validator->errors());
          }


           $image = $request->file('page_image');
          $destinationPath = public_path(). '/admin_assets/advert_image/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);
              $advert->advert_image=$locationimage;
              $advert->advert_title=$request->advert_title;
              
              $advert->save();
                
                if(!empty($advert))
                {
                  Session::flash('success', 'Your Advert upload successfully'); 
                
                return back();
            }
            else
            {
              Session::flash('error', 'invalid input!'); 
                
              return back();
            }
    }

    public function view_assisted()
    {
      $data['assisted']=Assisted::orderBy('assisted_id','desc')->get();
      $data['title'] = 'Assisted';
      // $data['query']= $query::all();
      return view('admin/view-assisted')->with($data);
    }

     public function delete_assisted($assisted_id)
    {
      $assisted=Assisted::where('assisted_id',$assisted_id)->delete();
      if(!empty($assisted))
                {
                  Session::flash('success', 'Your assisted user delete'); 
                
                return back();
            }
            else
            {
              Session::flash('error', 'invalid input!'); 
                
              return back();
            }
    }


 public function view_help_request()
    {
      $data['helprequest']=SaveRequest::orderBy('request_id','desc')->get();
      $data['title'] = 'Help Request';
      // $data['query']= $query::all();
      return view('admin/view-help-request')->with($data);
    }

     public function delete_help_request($request_id)
    {
      $request=SaveRequest::where('request_id',$request_id)->delete();
      if(!empty($request))
                {
                  Session::flash('success', 'Your request  delete'); 
                
                return back();
            }
            else
            {
              Session::flash('error', 'invalid input!'); 
                
              return back();
            }
    }


    public function view_close_account()
    {
      $data['closeaccount']=CloseAccount::orderBy('close_id','desc')->join('users','users.id','=','closeaccounts.user_id')->get();
      $data['title'] = 'Close Account';
      // $data['query']= $query::all();
      return view('admin/view-close-account')->with($data);
    }

     public function delete_close_account($close_id)
    {
      $close=CloseAccount::where('close_id',$close_id)->delete();
      if(!empty($close))
                {
                  Session::flash('success', 'Your close account delete'); 
                
                return back();
            }
            else
            {
              Session::flash('error', 'invalid input!'); 
                
              return back();
            }
    }



     public function view_feedback()
    {
      $data['feedback']=FeedBack::orderBy('feedback_id','desc')->join('users','users.id','=','feedbacks.user_id')->get();
      $data['title'] = 'FeedBack';
      
      return view('admin/view-feedback')->with($data);
    }

     public function delete_feedback($feedback_id)
    {
      $feedback=FeedBack::where('feedback_id',$feedback_id)->delete();
      if(!empty($feedback))
                {
                  Session::flash('success', 'Delete Your feedback record!'); 
                
                return back();
            }
            else
            {
              Session::flash('error', 'invalid input!'); 
                
              return back();
            }
    }


}
