<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use\App\User;
 use \Validator;
// use\App\states;
use DB;

class User_Controller extends Controller
{
	public function login()
	{
		if(Session::get('user_id'))
		{
			// dd(Session::get('user_id'));
			return redirect('main-profile');

			
		}

		$data['login']='login';

		return view('user/login',$data);
	}
	public function logout()
	{
		  Session::forget('user_id');
           Session::forget('user_username');
           Session::forget('email');
            // dd(Session::get('user_id'));
          return redirect('login');
	}
	public function reset_password($email)
	{
		if(Session::get('user_id'))
		{
			return redirect('main-profile');
			
		}
		$data['email']=decrypt($email);
		$data['login']='login';

		return view('user/reset_password',$data);
	}
	public function close_account()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/close_account',$data);
	}
	public function close_my_account(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		   $email=$request->email;
		   $user_account=DB::table('users')->where('email',$email)
		                                  ->join('countries' , 'users.country' , '=' , 'countries.country_id')
		                                  ->join('cities' , 'users.city' , '=' , 'cities.city_id')
		                                   ->first();
		    if($user_account)
		    {

		
		//    if($result)
		//    {
		   echo 'success'; 
		    // return back();
		   }
		// }
		   else
		   {
		   	echo 'false'; 
		    // return back();
		   }
	}
	public function feedback(Request $request)
	{
		if(!Session::get('user_id'))
		{
			return redirect('login');
			
		}	
		$user_account = DB::table('users')->where('id',Session::get('user_id'))
		->join('countries' , 'users.country' , '=' , 'countries.country_id')
		                                  ->join('cities' , 'users.city' , '=' , 'cities.city_id')->first();
		   $data['feedback']=$request->feedback;
		   $data['user_id']=$user_account->id;
		   $data['email']=$user_account->email;
		   $data['firstname']=$user_account->firstname;
		   $data['lastname']=$user_account->lastname;
		   $data['phone']=$user_account->phone;
		   $data['country']=$user_account->country_name;
		   $data['city']=$user_account->city_name;
		   $data['gender']=$user_account->gender;
		   $result=DB::table('user_feedback')->insert($data);
		   if($result)
		   {
		   	Session::flash('success', 'Your feedback has been submited successfully'); 
            return back();
		   }
		   else
		   {
		   	Session::flash('error', 'invalid input'); 
            return back();
		   }
	}
	public function update_password(Request $request)
	{
		if(Session::get('user_id'))
		{
			return redirect('main-profile');
			
		}
		$email=$request->email;
		$password=$request->new_password;
		$data['password']=sha1($password);
		// $data['password']=$request->password;
		$result=DB::table('users')->where('email',$email)->update($data);
		if($result)
		{
			Session::flash('success', 'Your password has been updated successfully'); 
            return redirect('login');
		}
		
	}
	public function forgot_password(Request $request)
	{
		$email=$request->email;
		// dd($email);
		// $email->email;
		$data['email']=DB::table('users')->where('email',$email)->first();
		 $dbemail=$data['email']->email;
		 $data1['enc_email']=encrypt($dbemail);
		 
		$result=\Mail::send('emails.general', $data1 , function($message) use ($data)
	  		  {
                $message->to($data['email']->email)->from('admin@kaboolhai.com' , 'Haider Ali')->subject('please click here for reset password');
              });
			
			
			echo "success";
		 
		  
      
		// dd($result);
	}
	public function tell_about(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$user_id=$request->user_id;
		$data['email']=$request->email;
		$result=DB::table('users')->where('id',$user_id)->first();
		$data['name']=$result->firstname.' '.$result->lastname;
		$data['phone']=$result->phone;
		$data['from']=$result->email;

		$result1=\Mail::send('emails.tell_friend' , $data , function($message) use ($data)
	  		  {
                $message->to($data['email'])->from($data['from'] , $data['name'])->subject('please test it');
              });
		// if($result1)
  //       {
          Session::flash('success', 'Your message has been submited successfully !'); 
           return back();
        // }
        // else
        // {
        //   Session::flash('error', 'invalid!'); 
        //    return back();
        // }
		// dd($data);	
		
	}
	public function change_password(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		

		$password=$request->password;
		$data['password']=sha1($password);
		$user_id=$request->user_id;	

		$result=DB::table('users')->where('id',$user_id)->update($data);
        if($result)
        {
          Session::flash('success', 'Your password has been changed successfully !'); 
           return redirect('settings');
        }
        else
        {
          Session::flash('error', 'invalid!'); 
           return redirect('settings');
        }
		
	}
	public function save_my_account(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		

		$data['firstname']=$request->fname;
		$data['lastname']=$request->lname;
		// dd($data['firstname']);
		$data['email']=$request->email;
		$data1['country_id']=$request->country;
		$data1['age']=$request->age;
		$user_id=$request->user_id;
	    $result=DB::table('profile')->where('fk_user_id',$user_id)->update($data1);
		$result1=DB::table('users')->where('id',$user_id)->update($data);
        if($result1 OR $result)
        {
          Session::flash('success', 'Your profile has been updated successfully !'); 
           return back();
        }
        else
        {
          Session::flash('success', 'updated'); 
           return back();
        }
	}
	public function settings()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['users']=DB::table('users')->where('id',$data['get_profile']->fk_user_id)->first();
		$data['user_country'] = DB::table('countries')->where('country_id',$data['get_profile']->country_id)->first();
		
		$data['country'] = DB::table('countries')->get();
		
		return view('user/setting',$data);
	}
	public function notification()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/notifcication',$data);		
	}
	
	public function who_see()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/statistics',$data);
	}
	public function statistics()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/statistics',$data);		
	}
	public function dologin(Request $request)
	{
		
		 $email=$request->email;
          $password=$request->password;
    	 
    $result=User::where(array('password'=>sha1($password),'is_admin'=>0,'email'=>$email))->first();
    	   
          if($result)
          {
             Session::put('user_id',$result->id);
             Session::put('user_username',$result->firstname);
              Session::put('user_lastname',$result->lastname);
               Session::put('email',$result->email);
             // echo "string";
               $profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
                $loking_for=DB::table('loking_for')->where('fk_user_id',Session::get('user_id'))->first();
                $affidavit=DB::table('affidavit')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	         }
	         elseif(empty($loking_for))
	         {
	         	return redirect('loking-for');	
	         }
	         elseif(empty($affidavit))
	         {
	         	return redirect('affidavit');
	         }
	         else
	         {
              return redirect('main-profile');
             }
          }
          else
          {
           Session::flash('error', 'invalid email or password please try again!'); 
           return back();
          }
	}

	public function photo_permission()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/photo-permission',$data);	
	}
	public function profile_writing_tips()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/profile-writing-tips',$data);	
	}
	public function question()	
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		return view('user/question',$data);
	}
	public function my_profile()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		return view('user/my-profile');
	}
	public function user_detail($user_id)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		// dd($user_id);
		 $view=DB::table('number_of_views')->where('viewer_id',Session::get('user_id'))
		                                   ->where('viewed_profile_id',$user_id)->first();
		   if(empty($view))
		   {
		$data1['viewer_id']=Session::get('user_id');
		$data1['viewed_profile_id']=$user_id;
		$result=DB::table('number_of_views')->insert($data1);
        	}
		 $profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }

	          $data['user']=DB::table('users')->where('id',$user_id)->first();
	                                  
	           $data['loking_for'] = DB::table('loking_for')->where('fk_user_id' ,$user_id)->first();                           
	        $data['get_profile'] = DB::table('profile')->where('fk_user_id' ,$user_id)->first();                              
	     $data['country'] = DB::table('countries')->get();
		 
		   
		 $data['user_country'] = DB::table('countries')->where('country_id' , $data['get_profile']->country_id)->first();
		 $data['state'] = DB::table('states')->where('state_id' , $data['get_profile']->state_id)->first();
		 $data['city'] = DB::table('cities')->where('city_id' , $data['get_profile']->city_id)->first();
		 
		
		 $data['profession'] = DB::table('profession')->where('profession_id',$data['get_profile']->profession_id)->first();
		 $data['qualification'] = DB::table('qualification')->where('qualification_id',$data['get_profile']->qualification_id)->first();
		
		
		 $data['ethnic_origin'] = DB::table('ethnic_origin')->where('ethnic_id',$data['get_profile']->ethnic_type_id)->first();
		 $data['language'] = DB::table('language')->where('language_id',$data['get_profile']->language_id)->first();
		
		 $data['assets'] = DB::table('assets')->where('profile_id' , $data['get_profile']->profile_id)->get();
		
	    	return view('user/user_detail',$data);
	           
	         
		
	}
	public function user_profile()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		 $profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		
		   
		 $data['user_country'] = DB::table('countries')->where('country_id' , $data['get_profile']->country_id)->first();
		 $data['state'] = DB::table('states')->where('state_id' , $data['get_profile']->state_id)->first();
		 $data['city'] = DB::table('cities')->where('city_id' , $data['get_profile']->city_id)->first();
		
		
		 $data['profession'] = DB::table('profession')->where('profession_id',$data['get_profile']->profession_id)->first();
		 $data['qualification'] = DB::table('qualification')->where('qualification_id',$data['get_profile']->qualification_id)->first();
		
		 $data['ethnic_origin'] = DB::table('ethnic_origin')->where('ethnic_id',$data['get_profile']->ethnic_type_id)->first();
		 $data['language'] = DB::table('language')->where('language_id',$data['get_profile']->language_id)->first();
		
		 $data['assets'] = DB::table('assets')->where('profile_id' , $data['get_profile']->profile_id)->get();
		
	    	return view('user/user_profile',$data);
	}
	public function user_search(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		

		$max_age=$request->max_age;
		$min_age=$request->min_age;
		$country=$request->country;
		// dd($country);
		$gender_test = DB::table('users')->where('id',Session::get('user_id'))->first();
		$gender=$gender_test->gender;
		if($gender=='male')
		{
		$data['user_search'] = DB::table('loking_for')->where('loking_for.country_id',$country)
													  ->where('loking_for.fk_user_id','<>',Session::get('user_id'))
													  ->join('users' , 'loking_for.fk_user_id' , '=' , 'users.id')
													  ->join('profile' , 'loking_for.fk_user_id' , '=' , 'profile.fk_user_id','left')
													  ->join('cities' , 'loking_for.city_id' , '=' , 'cities.city_id','left')
												      ->where('max_age','<=',$max_age)
												      ->where('min_age','>=',$min_age)
												      ->where('gender','female')                                    
		 										      ->get();
		 										    
		 										foreach ($data['user_search'] as $row)
		 										 {
		 										
		             $age= DB::table('profile')->where('fk_user_id',$row->fk_user_id)->first(); 
		             $data['user_age']=$age->age;
		 										    }    


		     
	}
	else
	{
		$data['user_search'] = DB::table('loking_for')->where('loking_for.country_id',$country)
													  ->where('loking_for.fk_user_id','<>',Session::get('user_id'))
													  ->join('users' , 'loking_for.fk_user_id' , '=' , 'users.id')
													  ->join('profile' , 'loking_for.fk_user_id' , '=' , 'profile.fk_user_id','left')
													  ->join('cities' , 'loking_for.city_id' , '=' , 'cities.city_id','left')
												      ->where('max_age','<=',$max_age)
												      ->where('min_age','>=',$min_age)
												      ->where('gender','male')                                    
		 										      ->get();
		 										     foreach ($data['user_search'] as $row)
		 										 {
		 										
		                     $age= DB::table('profile')->where('fk_user_id',$row->fk_user_id)->first(); 
		                     $data['user_age']=$age->age;
		 										    }  
		 										      	
		 										    // dd($data['user_age']);

		  
	
	}
		 		 return view('user/user-search',$data);							   

	}
	public function main_profile()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		// dd($profile);
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
	    $loking_for = DB::table('loking_for')->where('fk_user_id',Session::get('user_id'))->first();
		 if(empty($loking_for))
		 {
		 	return redirect('loking-for');
		 }
		  $affidavit = DB::table('affidavit')->where('fk_user_id',Session::get('user_id'))->first();
		 if(empty($affidavit))
		 {
		 	return redirect('affidavit');
		 }
		$data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		$data['country'] = DB::table('countries')->get();
		// $data['age'] = DB::table('age')->get();
		return view('user/main-profile',$data);	
	}
	 public function update_profile(Request $request)
	 {
	 	if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}

		    $profile_id=$request->profile_id;
			$data2['country']=$request->country;
			$data2['state']=$request->state;
			$data2['city']=$request->city;
			DB::table('users')->where('id',Session::get('user_id'))->update($data2);
			 // dd($profile_id);
			$data['description']=$request->description;
			$data['des_1']=$request->des_1;
			$data['des_2']=$request->des_2;
			$data['des_3']=$request->des_3;
			$data['availability']=$request->availability;
			$data['country_id']=$request->country;
			$data['state_id']=$request->state;
			$data['city_id']=$request->city;
			$data['age']=$request->age;
			$data['hair_colour']=$request->color;


			$data['language_id']=$request->language;
			$data['profile_created_by']=$request->profile_created;
			$data['residency_status']=$request->residency_status;
			$data['ethnic_type_id']=$request->ethnic_type;
			$data['religious_type']=$request->religious_type;
			$data['pray']=$request->pray;
			$data['sect_are']=$request->sect_are;
			$data['marige_type']=$request->marige_type;
			$data['child_count']=$request->child_count;
			$data['like_chiled']=$request->like_chiled;
			$data['body_type']=$request->body_type;
			$data['beard']=$request->beard;
			$data['height']=$request->height;
			$data['profession_id']=$request->profession;
			$data['qualification_id']=$request->qualification;
			$data['m_income']=$request->m_income;
			$data['a_income']=$request->a_income;
			$data['job']=$request->job;
			$data['job_contact']=$request->job_contact;
			$data['job_address']=$request->job_address;
			$data['disability']=$request->disability;
			$data['siblings']=$request->siblings;
			$data['brothers']=$request->brothers;
			$data['sisters']=$request->sisters;
			$data['married']=$request->married;
			$data['unmarried']=$request->unmarried;
			$data['financel_status']=$request->financel;
			if($request->assets)
			{
			$assete_delete=DB::table('assets')->where('profile_id',$profile_id)->delete();
				// if($assete_delete)
				// {
				$assets=$request->assets;
				// $assets=$request->asset_id;
				foreach ($assets as $row)
				 {
				    $data1['profile_id']=$profile_id;
				    $data1['assets_type']=$row;
				    // dd($row);
					DB::table('assets')->insert($data1);
				 }
			}
			$result=DB::table('profile')->where('profile_id',$profile_id)->update($data);
        if($result)
        {
          Session::flash('success', 'Your profile has been updated successfully !'); 
           return back();
        }
        else
        {
          Session::flash('success', 'update'); 
           return back();
        }
			// $result=DB::table('profile')->insert($data);
	 }
	public function add_profile(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
	
			// echo $data['beard']=$request->beard;die();
			$data['fk_user_id']=Session::get('user_id');
			$data['description']=$request->description;
			$data['des_1']=$request->des_1;
			$data['des_2']=$request->des_2;
			$data['des_3']=$request->des_3;
			$data['availability']=$request->availability;
			$data['country_id']=$request->country;
			$data['state_id']=$request->state;
			$data['city_id']=$request->city;
			$data['language_id']=$request->language;
			$data['profile_created_by']=$request->profile_created;
			$data['residency_status']=$request->residency_status;
			$data['ethnic_type_id']=$request->ethnic_type;
			$data['religious_type']=$request->religious_type;
			$data['pray']=$request->pray;
			$data['sect_are']=$request->sect_are;
			$data['marige_type']=$request->marige_type;
			$data['child_count']=$request->child_count;
			$data['like_chiled']=$request->like_chiled;
			$data['body_type']=$request->body_type;
			$data['beard']=$request->beard;
			$data['height']=$request->height;
			$data['profession_id']=$request->profession;
			$data['qualification_id']=$request->qualification;
			$data['m_income']=$request->m_income;
			$data['a_income']=$request->a_income;
			$data['job']=$request->job;
			$data['age']=$request->age;
			$data['hair_colour']=$request->color;
			$data['job_contact']=$request->job_contact;
			$data['job_address']=$request->job_address;
			$data['disability']=$request->disability;



			$data['siblings']=$request->siblings;
			$data['brothers']=$request->brothers;
			$data['sisters']=$request->sisters;
			$data['married']=$request->married;
			$data['unmarried']=$request->unmarried;
			$data['financel_status']=$request->financel;
			// dd($data);
			$profile_id=DB::table('profile')->insertGetId($data);
			if($profile_id)
			{
				$assets=$request->assets;
				foreach ($assets as $row)
				 {
				    $data1['profile_id']=$profile_id;
				    $data1['assets_type']=$row;
					$result=DB::table('assets')->insert($data1);
				}
			}
	  	if($result)
	  	{
	  	   Session::flash('success', 'Your profile has been added successfully!'); 
      //      return back();
	  		return redirect('loking-for');
	  	}
	  	else
	  	{
	  	   Session::flash('error', 'invalid error!'); 
           return back();
        } 
			
		}
		public function get_user_profile($user_id)
		{
			if(!Session::has('user_id'))
			{
				return redirect('login');
				
			}
			 $profile=DB::table('profile')->where('fk_user_id',$user_id)->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		 $data['assets'] = DB::table('assets')->where('profile_id' , $data['get_profile']->profile_id)->get();
		 // dd($data['assets']);
		 $data['state'] = DB::table('states')->where('country_id' , $data['get_profile']->country_id)->get();
		 $data['city'] = DB::table('cities')->where('state_id' , $data['get_profile']->state_id)->get();
		
		 $data['profession'] = DB::table('profession')->get();
		 $data['qualification'] = DB::table('qualification')->get();
		
		 $data['ethnic_origin'] = DB::table('ethnic_origin')->get();
		 $data['language'] = DB::table('language')->get();
		
		 return view('user/edit-profile',$data);


		}
	public function profile()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$profile= DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(!empty($profile))
			 {
		         // return redirect('main-profile');
			 	return redirect('loking-for');
	          }
		$data['country'] = DB::table('countries')->get();

		$data['login']='login';
		 $data['profession'] = DB::table('profession')->get();
		 $data['qualification'] = DB::table('qualification')->get();
		 $data['ethnic_origin'] = DB::table('ethnic_origin')->get();
		 $data['language'] = DB::table('language')->get();
		
		 return view('user/profile',$data);

	}
	

	public function find_exact_match()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		 $loking = DB::table('loking_for')->where('fk_user_id',Session::get('user_id'))->get();
		 foreach ($loking as $row)
		  {
		 	
		 
		 $gender_test = DB::table('users')->where('id',Session::get('user_id'))->first();
		$gender=$gender_test->gender;
		if($gender=='male')
		{
		$data['user_search'] = DB::table('loking_for')->where('loking_for.country_id',$row->country_id)
				->where('loking_for.religious',$row->religious)
				->where('loking_for.min_age',$row->min_age)
				->where('loking_for.max_age',$row->max_age)
				->where('loking_for.fk_user_id','<>',Session::get('user_id'))
				->join('users' , 'users.id' , '=' ,'loking_for.fk_user_id' )
				
				->join('profile' , 'profile.fk_user_id' , '=' , 'loking_for.fk_user_id')
		       ->join('cities' , 'cities.city_id' , '=' ,'loking_for.city_id')
		       ->where('gender','female')->get();
		 										        
		 										   
	
		 										      foreach ($data['user_search'] as $row)
		 										 {
		 										
		             $age= DB::table('profile')->where('fk_user_id',$row->fk_user_id)->first(); 
		             $data['user_age']=$age->age;
		 										    }   
		 										     
		 										     


	

}
else
{
	{
		      $data['user_search'] = DB::table('loking_for')->where('loking_for.country_id',$row->country_id)
				->where('loking_for.religious',$row->religious)
				->where('loking_for.min_age',$row->min_age)
				->where('loking_for.max_age',$row->max_age)
				->where('loking_for.fk_user_id','<>',Session::get('user_id'))
				->join('users' , 'users.id' , '=' ,'loking_for.fk_user_id' )
				->join('profile' , 'profile.fk_user_id' , '=' , 'loking_for.fk_user_id')
		       ->join('cities' , 'cities.city_id' , '=' ,'loking_for.city_id')
		       ->where('gender','male')->get();
		 										        
		 										   
	
		 										     foreach ($data['user_search'] as $row)
		 										 {
		 										
		             $age= DB::table('profile')->where('fk_user_id',$row->fk_user_id)->first(); 
		             $data['user_age']=$age->age;
		 										    }   
		 										     
		 										     


	

}
}

		 
	}
	// dd($data['user_search']);
		 return view('user/user-search',$data);
	}
	public function invite_friend()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		 
		 return view('user/invite-friend',$data);
	}
	public function email_prefrences()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		 
		 return view('user/email-prefrences',$data);
	}
	public function tell_friend()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		 return view('user/tell-friend',$data);	
	}
	public function active_user($block_user_id)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$active_user=DB::table('block_user')->where('block_user_id',$block_user_id)->where('user_id',Session::get('user_id'))->delete();
		if($active_user)
		{
			Session::flash('success', 'This Your user has been activeted successfully !'); 
           	    
		          return back();
		  
		}
		else
		{
			Session::flash('error', 'invalid input !'); 
           	    
		          return back();
		}

	}
	public function block_user(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$data['block_user_id']=$request->id;
		$data['user_id'] =Session::get('user_id');
		$active_user=DB::table('block_user')->where('block_user_id',$data['block_user_id'])->where('user_id',Session::get('user_id'))->first();
		if(empty($active_user))
		{


		$block=DB::table('block_user')->insert($data);
		if($block)
		{
			echo "success";
		}
	}
		else
		{
			echo "false";
		}


	}
	public function blocked_list()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		 $data['block_user']=DB::table('block_user')->where('user_id',Session::get('user_id'))
		                                            ->join('users','users.id','=','block_user.block_user_id')->get();
		 // dd($data['block_user']);
		 return view('user/blocked-list',$data);
	}
	public function sent_items()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		  $data['sent_items'] = DB::table('inbox')->where('sender_id',Session::get('user_id'))
		 									  ->join('users','inbox.sender_id','=','users.id')
		 									  ->get();
		 									  // dd($data['sent_items']);
		 return view('user/sent-items',$data);
	}
	public function add_photo(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		
		

		 if($request->hasFile('image_name'))
		 {
		 	 $image = $request->file('image_name');
            $destinationPath = public_path(). '/user_assets/my_photo/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);
            if(!empty($img))
            {
            	$data1['image']=$locationimage;
            	$data1['fk_user_id']=Session::get('user_id');
            	// dd($data1['image']);
           	    $result=DB::table('my_photo')->insert($data1);
           	    if(!empty($result))
           	    {
           	     Session::flash('success', 'Your photo uploded successfully'); 
           	    
		        return back();
		        }
		        else
		        {
		        	Session::flash('error', 'invalid input!'); 
           	    
		          return back();
		        }
		    }
		    else
		    {
		    	Session::flash('error', 'path not exist!'); 
           	    
		          return back();
		    }
		 }
		  

		 // return view('user/my-photo',$data);
	}
	public function my_photo()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		 $data['photo'] = DB::table('my_photo')->where('fk_user_id',Session::get('user_id'))->get();
		 return view('user/my-photo',$data);	
	}
	public function send_message(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		 $data['sender_id']=$request->sender_id;
		 $data['receiver_id']=$request->receiver_id;
		 $data['message']=$request->send_message;
		  // dd($data);
		$result=DB::table('inbox')->insert($data);
		 if($result)
		 {
		 	 echo $data['receiver_id'];
		 }
		 else
		 {
		 	echo 'false';
		 }
	}
	public function messages()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$profile=DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
			 if(empty($profile))
			 {
		         return redirect('profile');
	          }
		 $data['get_profile'] = DB::table('profile')->where('fk_user_id',Session::get('user_id'))->first();
		 $data['country'] = DB::table('countries')->get();
		
		 $data['message'] = DB::table('inbox')->where('sender_id','<>',Session::get('user_id'))
		 									  ->join('users','inbox.sender_id','=','users.id')
		 									  ->get();
		 // dd($data['message']);
		 return view('user/messages',$data);
	}

		public function add_loking_for(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
	
		    $data['fk_user_id']=Session::get('user_id');
			$data['description']=$request->description;
			$data['country_id']=$request->country;
			$data['state_id']=$request->state;
			$data['city_id']=$request->city;
			$data['min_age']=$request->min_age_id;
			$data['max_age']=$request->max_age_id;
			
			$data['ethnic_id']=$request->ethnic_id;
			$data['religious']=$request->religious;
			
			$data['sect_for']=$request->sect_for;
			
			$data['has_child']=$request->has_child_id;
			$data['like_chiled']=$request->like_chiled;
			// $data['body_type_id']=$request->body_type_id;
			$data['bread']=$request->bread;
			
			$data['min_height']=$request->min_height;
			$data['max_height']=$request->max_height;
			
			$data['qualification_id']=$request->qualification_id;
			 // dd($data);

			$fk_loking_id=DB::table('loking_for')->insertGetId($data);

			if($fk_loking_id)
			{
			$data1['fk_loking_id']=$fk_loking_id;
			$language_id=$request->language_id;
			foreach ($language_id as $row)
			 {
				$data1['fk_language_id']=$row;	
			    $languages_inserted=DB::table('loking_languages')->insert($data1);
			}
		}
		if($languages_inserted)
		{

			$data2['fk_loking_id']=$fk_loking_id;
			$body_type=$request->body_type_id;
			foreach ($body_type as $row)
			 {
				$data2['body_type']=$row;	
			    $body_type=DB::table('loking_body_type')->insert($data2);
			}	
			// dd($result);
		}

		if($body_type)
		{
			$data3['fk_loking_id']=$fk_loking_id;
			
			$pray_id=$request->pray_id;
			foreach ($pray_id as $row)
			 {
				$data3['pray']=$row;	
			    $loking_pray=DB::table('loking_pray')->insert($data3);
			}	
			// dd($result);
		}

		if($loking_pray)
		{

			$data4['fk_loking_id']=$fk_loking_id;
			
			$residency=$request->residency_id;
			// dd($residency);	
			foreach ($residency as $row)
			 {
				$data4['residency']=$row;

			    $residency_status=DB::table('loking_residency_status')->insert($data4);
			}	
			// dd($result);
		}


		if($residency_status)
		{
// $data['marige_id']=
			$data5['fk_loking_id']=$fk_loking_id;
			
			$residency=$request->marige_id;
			foreach ($residency as $row)
			 {
				$data5['marige']=$row;	
			    $martial_status=DB::table('loking_martial_status')->insert($data5);
			}	
			// dd($result);
		}

		if($martial_status)
		{

			$data6['fk_loking_id']=$fk_loking_id;
			
			$profession_id=$request->profession_id;
			foreach ($profession_id as $row)
			 {
				$data6['profession_id']=$row;	
			    $loking_profission=DB::table('loking_profission')->insert($data6);
			}	
			// dd($result);
		}
		
			if($loking_profission)
			{

			$data7['fk_loking_id']=$fk_loking_id;
			
			$hijab=$request->hijab;
			foreach ($hijab as $row)
			 {
				$data7['hijab']=$row;	
			    $result=DB::table('loking_hijab')->insert($data7);
			}	
			// dd($result);
		}

	  	if($result)
	  	{
	  	   Session::flash('success', 'Your profile has been added successfully!'); 
            return redirect('affidavit');
	  		// return redirect('loking-for');
	  	}
	  	else
	  	{
	  	   Session::flash('error', 'invalid error!'); 
           return back();
        } 
			
		}
public function update_loking_for(Request $request)
{
	if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		    // $data['fk_user_id']=Session::get('user_id');
		    $data['loking_id']=$request->loking_id;
			$data['description']=$request->description;
			$data['country_id']=$request->country;
			$data['state_id']=$request->state;
			$data['city_id']=$request->city;
			$data['min_age']=$request->min_age_id;
			$data['max_age']=$request->max_age_id;
			
			$data['ethnic_id']=$request->ethnic_id;
			$data['religious']=$request->religious;
			
			$data['sect_for']=$request->sect_for;
			
			$data['has_child']=$request->has_child;
			$data['like_chiled']=$request->like_chiled;
			
			$data['bread']=$request->bread;
			
			$data['min_height']=$request->min_height;
			$data['max_height']=$request->max_height;
			
			$data['qualification_id']=$request->qualification_id;
			  // dd($data);



			$fk_loking_id=DB::table('loking_for')->where('loking_id',$data['loking_id'])->update($data);
			// dd($fk_loking_id);
			$language_id=$request->language_id;
			if($language_id)
			{
				$loking_languages=DB::table('loking_languages')->where('fk_loking_id',$data['loking_id'])->delete();
			// $data1['fk_loking_id']=$fk_loking_id;
			$language_id=$request->language_id;
			foreach ($language_id as $row)
			 {
				$data1['fk_language_id']=$row;
				$data1['fk_loking_id']=$data['loking_id'];	
			    $languages_inserted=DB::table('loking_languages')->insert($data1);
			}
			// dd($data1);
		}
		$body_type=$request->body_type_id;
		if($body_type)
		{
			$loking_languages=DB::table('loking_body_type')->where('fk_loking_id',$data['loking_id'])->delete();
			
			$body_type=$request->body_type_id;
			foreach ($body_type as $row)
			 {
			 	$data2['fk_loking_id']=$data['loking_id'];
				$data2['body_type']=$row;	
			    $body_type=DB::table('loking_body_type')->insert($data2);
			}	
			// dd($result);
		}
		$pray_id=$request->pray_id;
		if($pray_id)
		{
			$loking_pray=DB::table('loking_pray')->where('fk_loking_id',$data['loking_id'])->delete();

			
			$pray_id=$request->pray_id;
			foreach ($pray_id as $row)
			 {
			     $data3['fk_loking_id']=$data['loking_id'];
				$data3['pray']=$row;	
			    $loking_pray=DB::table('loking_pray')->insert($data3);
			}	
			// dd($result);
		}
		$residency=$request->residency_id;
		if($residency)
		{
			$loking_residency_status=DB::table('loking_residency_status')->where('fk_loking_id',$data['loking_id'])->delete();
			
			
			$residency=$request->residency_id;
			// dd($residency);	
			foreach ($residency as $row)
			 {
			 	$data4['fk_loking_id']=$data['loking_id'];
				$data4['residency']=$row;

			    $residency_status=DB::table('loking_residency_status')->insert($data4);
			}	
			// dd($result);
		}

          $marige_id=$request->marige_id;
		if($marige_id)
		{
// $data['marige_id']=
			$loking_martial_status=DB::table('loking_martial_status')->where('fk_loking_id',$data['loking_id'])->delete();
			
			$marige_id=$request->marige_id;
			foreach ($marige_id as $row)
			 {
			    $data5['fk_loking_id']=$data['loking_id'];
				$data5['marige']=$row;	
			    $martial_status=DB::table('loking_martial_status')->insert($data5);
			}	
			// dd($result);
		}
         $profession_id=$request->profession_id;
		if($profession_id)
		{
			$loking_profission=DB::table('loking_profission')->where('fk_loking_id',$data['loking_id'])->delete();
			
			$profession_id=$request->profession_id;
			foreach ($profession_id as $row)
			 {
			   $data6['fk_loking_id']=$data['loking_id'];
				$data6['profession_id']=$row;	
			    $loking_profission=DB::table('loking_profission')->insert($data6);
			}	
			// dd($result);
		}
		$hijab=$request->hijab;
			if($hijab)
			{
				$loking_hijab=DB::table('loking_hijab')->where('fk_loking_id',$data['loking_id'])->delete();
			
			$hijab=$request->hijab;
			foreach ($hijab as $row)
			 {
			    $data7['fk_loking_id']=$data['loking_id'];
				$data7['hijab']=$row;	
			    $result=DB::table('loking_hijab')->insert($data7);
			}	
			// dd($result);
		}

	  	if($result)
	  	{
	  	   Session::flash('success', 'Your loking profile has been updated successfully!'); 
            return back();
	  		// return redirect('loking-for');
	  	}
	  	else
	  	{
	  	   Session::flash('error', 'invalid error!'); 
           return back();
        } 
}
	public function get_user_loking($user_id)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}
		 $loking_for = DB::table('loking_for')->where('fk_user_id',$user_id)->first();
		 if($loking_for)
		 {
		 $data['get_profile'] = DB::table('loking_for')->where('fk_user_id' , $user_id)->first();
		 $data['country'] = DB::table('countries')->get();
		
		  $data['loking_languages'] = DB::table('loking_languages')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->join('language','language.language_id','=','loking_languages.fk_language_id')->get();

		 $data['loking_residency'] = DB::table('loking_residency_status')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->get();

     $data['loking_pray'] = DB::table('loking_pray')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->get();

		  $data['loking_martial_status'] = DB::table('loking_martial_status')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->get();

		   $data['loking_body_type'] = DB::table('loking_body_type')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->get();
		    $data['loking_hijab'] = DB::table('loking_hijab')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->get();

		     $data['loking_profission'] = DB::table('loking_profission')->where('fk_loking_id' ,  $data['get_profile']->loking_id)->join('profession','profession.profession_id','=','loking_profission.profession_id')->get();
		     // dd($data['loking_profission']);
		 $data['state'] = DB::table('states')->where('country_id' , $data['get_profile']->country_id)->get();
		 $data['city'] = DB::table('cities')->where('state_id' , $data['get_profile']->state_id)->get();
		
		 $data['profession'] = DB::table('profession')->get();
		 $data['qualification'] = DB::table('qualification')->get();
		
		 $data['ethnic_origin'] = DB::table('ethnic_origin')->get();
		 $data['language'] = DB::table('language')->get();
		
		 return view('user/edit-loking-for',$data);
		}


	}
	public function loking_for()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			
		}

		 $loking_for = DB::table('loking_for')->where('fk_user_id',Session::get('user_id'))->first();
		 if(!empty($loking_for))
		 {
		 	return redirect('affidavit');
		 }
		 $data['login']='login';
		 $data['country'] = DB::table('countries')->get();
		 // $data['user_country'] = DB::table('countries')->get();
		 $data['profession'] = DB::table('profession')->get();
		 $data['qualification'] = DB::table('qualification')->get();
		 $data['ethnic_origin'] = DB::table('ethnic_origin')->get();
		 $data['language'] = DB::table('language')->get();
		 return view('user/loking_for',$data);

	}
	function affidavit()
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		 $affidavit = DB::table('affidavit')->where('fk_user_id',Session::get('user_id'))->first();
		 if(!empty($affidavit))
		 {
		 	return redirect('main-profile');
		 }
		$data['login']='login';
		return view('user/biyan_halfi',$data);	
	}
	public function add_affidivat(Request $request)
	{
		if(!Session::has('user_id'))
		{
			return redirect('login');
			// return 
		}
		$data['fk_user_id']=Session::get('user_id');
		$data['ayat']=$request->ayat;
		$affidavit_id=DB::table('affidavit')->insertGetId($data);
		if($affidavit_id)
		{
			return redirect('main-profile');
		}
	}
   // return view('User/index');
	public function register()
	{
		$data['login']='login';
		$data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');	
		$data['country'] = DB::table('countries')->get();
		
				// echo "<pre>";
				  // print_r($data['fname']);die();
		return view('user/register',$data);
		// echo "string";
	}
	public function get_email(Request $request)
	{
		$email=$request->email;
		$result= DB::table('users')
                    ->where('email',$email)
                    // ->where('is_admin','0')
                    ->first();
                    if($result)
                    {
                    	echo "true";
                    }
                    else
                    {
                    echo "false";
                     }
			
	}
	public function signup(Request $request)
	{
		$data['fname']=$request->fname;
		Session::put('fname',$data['fname']);
		$data['lname']=$request->lname;
		Session::put('lname',$data['lname']);
		$data['email']=$request->email;
		Session::put('email',$data['email']);
		$data['gender']=$request->gender;
		Session::put('gender',$data['gender']);

		return redirect('register');
	}
	public function get_state(Request $request)
	{
		// echo "string";
		$obj = new User_controller();
		$country_id=$request->country_id;
		$code_flage=DB::table('countries')->where('country_id',$country_id)->first();
		// dd($country_code);
		// $data['code_flage'] = array($data['code_flage']);
		 // $obj =$data['code_flage'];

		$data['state']= DB::table('states')
		                    ->where('country_id',$country_id)
		                    ->get();
		$states = '';
        foreach ($data['state'] as $key => $value) 
        {
        	$states .= '<option value="'. $value->state_id . '">' . $value->state_name . '</option>';
        }
        $obj->states = $states;
        $obj->code = '+'.$code_flage->phonecode;
        $obj->flag = strtolower($code_flage->sortname . '.png');

		
		echo json_encode($obj);




		// $phone = $request->code . $request->phone;


	}
	public function get_city(Request $request)
	{
		$state_id=$request->state_id;
		$city= DB::table('cities')
                    ->where('state_id',$state_id)
                    ->get();
        foreach ($city as $key => $value) 
        {
        	?>
        		<option value="<?= $value->city_id ?>"><?= $value->city_name ?></option>
        	<?php
        }

	}
	public function verify(Request $request)
	{
		$code=$request->code;
		$result= DB::table('users')
                    ->where('verifycode', $code)
                    // ->where('is_admin','0')
                    ->first();
                    // echo $result;
                    if($result)
                    {
                    	echo 'true';
                    	// return redirect('profile');
                    }
                    else
                    {

                          echo "error";
                     }
		
	}
	public function register_user(Request $request)
	{
		
		$data['firstname']=$request->fname;
		$data['lastname']=$request->lname;
		$data['email']=$request->email;
		$password=$request->password;

		$con_password=$request->con_password;
		
		if($password==$con_password)
		{
			$data['password']=sha1($password);
			
			$data['gender']=$request->gender;
			$data['zipcode']=$request->zipcode;
			$data['country']=$request->country;
			$data['state']=$request->state;
			$data['city']=$request->city;
			$data['phone']=$request->phone;
			$data['residency_status']=$request->residency;
			$data['how_did']=$request->how_did;
			$data['dob']=$request->dob;

			$verify_code = rand();

			$data['verifycode']=$verify_code;
			
	  	
	  	$result=DB::table('users')->insertGetId($data);
	  	if($result)
	  	{

	  		$result1=\Mail::send('emails.verify', $data , function($message) use ($data)
	  		  {
                $message->to($data['email'])->from('admin@kaboolhai.com' , 'Haider Ali')->subject('Verify code');
              });

	  		  
	  		 
                 Session::put('user_username',$data['firstname']);
                 // Session::put('lastname',$data['lastname']);
                 Session::put('email',$data['email']);
                 Session::put('user_id',$result);
	  		
	  	        echo 'success'; 
          
	  
	  }
}
	  	else
	  	{
	  	   echo 'error'; 
           
        } 
        
       
	}
}
