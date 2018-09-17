<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use\App\User;
use\App\City;
use\App\Country;
use\App\State;
 use \Validator;
 use\App\Loking;
class ManageProfileController extends Controller
{
	public function __construct()
{
    $this->middleware('Login' , ['except' => [
                'dologin']]);
}
public function manage_profile()
	{
		$user_id=Session::get('user_id');
		$result=User::where('id',$user_id)->join('countries','countries.country_id','users.country_id')->join('states','states.state_id','users.state_id')->join('cities','cities.city_id','users.city_id')->first();



		$data['native']=User::where('id',$user_id)->join('countries','countries.country_id','users.native_country_id')->join('states','states.state_id','users.native_state_id')->join('cities','cities.city_id','users.native_city_id')->first();

		 $data['country']=Country::all();
		 $data['title']='Manage Profile';

		 $data['state']=State::where('country_id',$result->country_id)->get();

		 $data['cities']=City::where('state_id',$result->state_id)->get();

		 if($result->present_country_id)
		 {
		$data['present']=Country::where('country_id',$result->present_country_id)->first();
		
         }
         
         if($result->native_country_id)
         {
         	$data['native_state']=State::where('country_id',$result->native_country_id)->get();
         }
         if($result->native_state_id)
         {
         	$data['native_cities']=City::where('state_id',$result->native_state_id)->get();
         }
         $data['hobbies']=Loking::where('user_id',$user_id)->where('loking_type','hobbies')->get();

          $data['loking_eating']=Loking::where(['user_id'=>$user_id,'loking_type'=>'eating type'])->get();
           $data['other_language']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Other language'])->get();
          $data['loking_other_language']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Partner other language'])->get();
          $data['observes_hijab']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Observes Hija'])->get();


           $data['religious_history']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Religious History'])->get();
			       $data['residency_status']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Residency Status'])->get();
			        $data['loking_body_type']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Body Type'])->get();
			         $data['sects']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Sects'])->get();
			     $data['living_with']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Living with'])->get();
			      $data['pray']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Pray'])->get();
			      $data['has_children']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Has Children'])->get();

			       $data['africa']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Africa'])->get();
           $data['antarctica']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Antarctica'])->get();

            $data['asia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Asia'])->get();

             $data['europe']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Europe'])->get();
              $data['north_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'North America'])->get();

              $data['australasia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'North Australasia'])->get();

              $data['south_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'South America'])->get();
		$data['user_data']=$result;  
		return view('user/manage-profile',$data);
	}


	

	public function profession_form(Request $request)
	{
		$user=User::find(Session::get('user_id'));
	
		$user->employed_in=$request->employed_in;
		 $user->loking_education=$request->loking_education;
		 $user->loking_job=$request->loking_job;
		 $user->loking_a_income=$request->loking_a_income;
		
		$user->save();
		return back();
	}

	public function contact_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->present_country_id=$request->present_country_id;
		$user->native_country_id=$request->native_country_id;
		$user->native_state_id=$request->native_state_id;
		$user->native_city_id=$request->native_city_id;
		$user->convenient_time=$request->convenient_time;
		$user->save();
		return back();
	}
	public function family_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->father_detail=$request->father_detail;
		$user->finacial_status=$request->finacial_status;
		$user->family_type=$request->family_type;
		$user->assets=$request->assets;
		$user->mother_detail=$request->mother_detail;
		$user->father_occupation=$request->father_occupation;
		$user->mother_occupation=$request->mother_occupation;
		$user->brother_married=$request->brother_married;
		$user->brother_unmarried=$request->brother_unmarried;
		$user->sister_unmarried=$request->sister_unmarried;
		$user->sister_married=$request->sister_married;
		$user->elder_brother=$request->elder_brother;
		$user->younger_brother=$request->younger_brother;
		$user->elder_sister=$request->elder_sister;
		$user->younger_sister=$request->younger_sister;
		$user->save();
		return back();
		
	}
	public function about_me(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->profile_created=$request->profile_created;
		$user->gardian_name=$request->gardian_name;
        $user->gardian_number=$request->gardian_number;
        $user->language=$request->language;
        $user->cast=$request->cast;
       
		$user->clan=$request->clan;
		$user->martial_status=$request->martial_status;
		$user->save();


		$hobbies_type=$request->hobbies_type;
		Loking::where('user_id',$user->id)->where('loking_type','Hobbies')->delete();
    
     if($hobbies_type)
     {
     	
        foreach ($hobbies_type as $value)
		   {
		  	$hobbies_type=new Loking();
            $hobbies_type->loking_type=$request->hobbies;
		  	$hobbies_type->loking_value=$value;
		  	$hobbies_type->user_id=$user->id;
		  	$hobbies_type->save();
		   }
		}


		$add_other_language=$request->add_other_language;
		Loking::where('user_id',$user->id)->where('loking_type','Other language')->delete();
    
     if($add_other_language)
     {
     	
        foreach ($add_other_language as $value)
		   {
		  	$add_other_language=new Loking();
            $add_other_language->loking_type=$request->other_language;
		  	$add_other_language->loking_value=$value;
		  	$add_other_language->user_id=$user->id;
		  	$add_other_language->save();
		   }
		}
		return back();
	}

	public function general_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->blood_group=$request->blood_group;
		$user->diet=$request->diet;
		$user->smoking=$request->smoking;
		$user->thelisimia=$request->thelisimia;
		$user->body_type=$request->body_type;
		$user->save();
		return back();
	}

	public function education_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->qualification=$request->qualification;
		$user->edu_detail=$request->edu_detail;
		 $user->job=$request->job;	
	
		$user->occupation_detail=$request->occupation_detail;
		$user->a_income=$request->a_income;
		$user->save();
		return back();
	}

	public function apperance_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->bread=$request->bread;
		$user->height=$request->height;
		$user->weight=$request->weight;
		$user->physical_status=$request->physical_status;
		$user->skin_color=$request->skin_color;
		$user->save();
		return back();
	}

	public function religes_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->sect_are=$request->sect_are;
		
		$user->religiousness=$request->religiousness;
		$user->pray=$request->pray;
		$user->read_quran=$request->read_quran;
		$user->attend_religious_service=$request->attend_religious_service;
		$user->ethnic_type=$request->ethnic_type;
		$user->save();
		return back();
	}

	public function basic_info(Request $request)
	{
		$user_name=$request->user_name;
		// dd($user_name);

		$messages = array(
       
          'firstname.required' => 'You must enter your first name',
          'lastname.required' => 'You must enter your surname',
          'user_name.required' => 'You must enter your username', 
           'email.required' => 'You must enter your email',
           'gender.required' => 'You must state if you are male or female',
           'country_id.required' =>'You must enter your country name',
            'state_id.required' => 'You must enter your province name',
            'city_id.required' => 'You must enter your city name',
           
            
             'mobile.required' => 'You must enter your mobile number',
             'day.required' => 'You must enter your date of birth',
             'month.required' => 'You must enter your date of birth',
            'year.required' => 'You must enter your date of birth',
         );
         $rules = array(
      'user_name' =>'required|max:8|min:3',
         'email' => 'required',
         'firstname' => 'required',
         'lastname' => 'required',
         'gender' => 'required',
         'country_id' => 'required',
         'state_id' => 'required',
         'city_id' => 'required',
         
         'mobile' => 'required',
         'day' => 'required',
         'month' => 'required',
         'year' => 'required',
        

         );
         	
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
              return redirect()->back()->withErrors($validator->errors());
          }
          else
          {
		    $user_id=Session::get('user_id');
			$user=User::find($user_id);
			
			$user->firstname=$request->firstname;
			$user->lastname=$request->lastname;
			$user->user_name=$request->user_name;
			$user->email=$request->email;
			$user->gender=$request->gender;
			$user->country_id=$request->country_id;
			$user->state_id=$request->state_id;
			$user->city_id=$request->city_id;
			 // $code=$request->code2;
			 // $change_code=str_replace('+', '', $code);
		  //    $phone_code=$request->phone_code;
		  //    $phone_code = strval(intval($phone_code));
		  //    $phone=$request->phone;
		   
		  //    $change_phone=$change_code.$phone_code.$phone;
		     $user->mobile=$request->mobile;
			// $user->code=$request->code2;
			// $user->phone_code=$request->phone_code;
			// $user->phone=$request->phone;
		// 	$dob=$request->year.'-'.$request->month.'-'.$request->day;
		// if(!empty($dob))
		// {
		// $user->age=\Carbon\Carbon::parse($dob)->diff(\Carbon\Carbon::now())->format('%y');
  //        }
			$user->day=$request->day;
			$user->month=$request->month;
			$user->year=$request->year;
			$user->save();
			return back();
		}
	}

public function loking_aperance_info(Request $request)
{
	$user=User::find(Session::get('user_id'));
	$user->loking_height_from=$request->loking_height_from;
	$user->loking_height_to=$request->loking_height_to;
	$user->loking_physcial_status=$request->loking_physcial_status;
	$user->save();
	$hijab_time=$request->hijab_time;
		   Loking::where('user_id',$user->id)->where('loking_type','Observes Hija')->delete();
		   if($hijab_time)
		   {
         foreach ($hijab_time as $value)
		   {
		  	$hijab_time=new Loking();
            $hijab_time->loking_type=$request->observes_hijab;
		  	$hijab_time->loking_value=$value;
		  	$hijab_time->user_id=$user->id;
		  	$hijab_time->save();
		   }
		}
		return back();
}
	public function basic_info_loking(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$user->loking_age_from=$request->loking_age_from;
		$user->loking_age_to=$request->loking_age_to;
        $user->loking_language=$request->loking_language;
		$user->save();


		$loking_eating_habits=$request->loking_eating_habits;
		Loking::where('user_id',$user->id)->where('loking_type','eating type')->delete();
    
     if($loking_eating_habits)
     {
     	
        foreach ($loking_eating_habits as $value)
		   {
		  	$loking_eating_habits=new Loking();
            $loking_eating_habits->loking_type=$request->eating_type;
		  	$loking_eating_habits->loking_value=$value;
		  	$loking_eating_habits->user_id=$user->id;
		  	$loking_eating_habits->save();
		   }
		}


		$loking_other_language=$request->loking_other_language;
		Loking::where('user_id',$user->id)->where('loking_type','Partner other language')->delete();
    
     if($loking_other_language)
     {
     	
        foreach ($loking_other_language as $value)
		   {
		  	$loking_other_language=new Loking();
            $loking_other_language->loking_type=$request->loking_other_lang;
		  	$loking_other_language->loking_value=$value;
		  	$loking_other_language->user_id=$user->id;
		  	$loking_other_language->save();
		   }
		}
		return back();
	}

	public function preferences_info(Request $request)
	{
		$user=User::find(Session::get('user_id'));
		$africa_country=$request->africa_country;
		   Loking::where('user_id',$user->id)->where('loking_type','Africa')->delete();
		   if($africa_country)
		   {
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
		  Loking::where('user_id',$user->id)->where('loking_type','Antarctica')->delete();
		  if($antarctica_country)
		  {
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
		   Loking::where('user_id',$user->id)->where('loking_type','Asia')->delete();
		   if($asia_country)
		   {
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
		   Loking::where('user_id',$user->id)->where('loking_type','Europe')->delete();
		   if($europe_country)
		   {
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
		Loking::where('user_id',$user->id)->where('loking_type','North America')->delete();
		if($north_america_country)
		{
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
		   Loking::where('user_id',$user->id)->where('loking_type','Australasia')->delete();
		   if($australasia_country)
		   {
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
		   Loking::where('user_id',$user->id)->where('loking_type','South America')->delete();
		   if ($south_america_country)
		    {
		   
		   
         foreach ($south_america_country as $value)
		   {
		  	$south_america_country=new Loking();
            $south_america_country->loking_type=$request->south_america;
		  	$south_america_country->loking_value=$value;
		  	$south_america_country->user_id=$user->id;
		  	$south_america_country->save();
		   }
		}
		    
		    
		    $rel_history=$request->rel_history;
		    Loking::where('user_id',$user->id)->where('loking_type','Religious History')->delete();
		    if($rel_history)
		    {
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
		   Loking::where('user_id',$user->id)->where('loking_type','Living with')->delete();
		   if($living_law)
		   {
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
		    Loking::where('user_id',$user->id)->where('loking_type','Sects')->delete();
		    if($sects_type)
		    {
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
		    Loking::where('user_id',$user->id)->where('loking_type','Pray')->delete();
		    if($pray_type)
		    {
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
		    Loking::where('user_id',$user->id)->where('loking_type','Body Type')->delete();
		    if($loking_body)
		    {
         foreach ($loking_body as $value)
		   {
		  	$loking_body=new Loking();
            $loking_body->loking_type=$request->loking_body_type;
		  	$loking_body->loking_value=$value;
		  	$loking_body->user_id=$user->id;
		  	$loking_body->save();
		   }

		}
		$child_count=$request->child_count;
		Loking::where('user_id',$user->id)->where('loking_type','Has Children')->delete();

     if($child_count)
     {
        foreach ($child_count as $value)
		   {
		  	$child_count=new Loking();
            $child_count->loking_type=$request->has_child;
		  	$child_count->loking_value=$value;
		  	$child_count->user_id=$user->id;
		  	$child_count->save();
		   }
		}

		return back();
		   
	}
	public function edit_multi_filed(Request $request)
	{
		
		$value=$request->value;
		$field=$request->field;
		Loking::where('user_id',Session::get('user_id'))->where('loking_type',$field)->delete();
    
     if($value)
     {
     	
        foreach ($value as $row)
		   {
		  	$value=new Loking();
            $value->loking_type=$field;
		  	$value->loking_value=$row;
		  	$value->user_id=Session::get('user_id');
		  	$value->save();
		   }
		}
		return back();
	}
	public function edit_filed(Request $request)
	{
		$field=$request->field;
		$value=$request->value;
		$weight=$request->weight;
		$native_state=$request->native_state_id;
		$native_city=$request->native_city_id;
		$loking_age_to=$request->loking_age_to;
		$loking_height_to=$request->loking_height_to;
		$user=User::find(Session::get('user_id'));
		$user->$field=$value;
		if($weight)
		{
			$user->weight=$weight;
		}

		if($native_city)
		{
			$user->native_city_id=$native_city;
		}

		if($native_state)
		{
			$user->native_state_id=$native_state;
		}

		if($loking_age_to)
		{
			$user->loking_age_to=$loking_age_to;
		}
		if($loking_height_to)
		{
			$user->loking_height_to=$loking_height_to;
		}
		

		$user->save();
		return back();	
	}

	
	
}
