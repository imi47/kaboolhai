<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use\App\User;
use\App\City;
use\App\Country;
use\App\State;
 use \Validator;
use\App\customer_query;
use\App\Oth;
use DB;
use PDF;
use\App\chats;
use\App\Loking;
use\App\BlockUser;
use\App\FavouriteUser;
use\App\UserRequest;
use\App\PhotoPermission;
use\App\InviteViewProfile;
use\App\MyProfileViewed;
use\App\ActivityLog;
use\App\MyPhoto;
use\App\DeleteRequest;
use\App\ConfirmFriend;
use\App\Question;
use\App\AddQuestion;
use\App\Notification;
use\App\EmailPerferance;
use\App\Subscribe;
use\App\Answer;
use\App\HidePrifile;
use\App\SaveSearch;
use\App\TellFriend;
use\App\MyNotes;
use\App\LatestUpdate;
use\App\Assisted;
use\App\SaveRequest;
use\App\CloseAccount;
use\App\FeedBack;

 use Illuminate\Foundation\Validation\ValidatesRequests;

class User_Controller extends Controller
{
	public function __construct()
{
	$this->middleware('Login', ['except' => [
                'dologin','profile','about_us','add_oth','resend','update_num','contact_us','advance_search','faqs','assisted_service','our_police','policy_privacy','services','oth','term_condation','single','widow','divorcee','user_register_step_1',
                'login','reset_password','forgot','forgot_password',
                 'update_password','annulled','separated','polygamy','register','register_step_2','register_step_3','blog','our_partnar','get_email','get_state','get_living_state','get_living_city'
                 ,'get_city','signup','user_search','testimonials','register_user','verify','prev_register_step_2','user_register_step_2','verifies','sitemap','pakistani','UAE','United_Kingdom','USA','canada','public_profile','test','view_verify','subscribe','add_assisted','payment','help_center','save_request']]);

}
public function chat(Request $request)
{
	$obj = new chats();
	$id=$request->to_user;
	// echo $id;
 $data['all_chats']= chats::distinct()->where([['from_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get(['to_user']);
 if($id!=null)
 {
  // $data['current_chat']= chats::with('from_user','to_user')->where('from_user',Session::get('user_id')],['to_user','=',$id]])->orWhere([['from_user','=',$id],['to_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get();
      $data['to_user']=$id;

      $data['current_chat']=chats::with('from_users','to_users')
	  ->where(function($q) use ($id){
	  	$q->where('from_user',Session::get('user_id'))->where('to_user',$id);
	  })
	  ->orwhere(function($q) use ($id){
	  		$q->whereToUser(Session::get('user_id'));
	  		$q->whereFromUser($id);
	  		
	  })->orderBy('created_at','asc')->get();
      if(!empty($data['current_chat']));
      { 
      	$sender='';
      
        foreach ($data['current_chat'] as $value) 
       {

     //  			<li>
					// 	<div class="right-chat">
					// 		<img src="image/1499345471_boy.png">
					// 		<p>Lorem ipsum dolor sit ameeserunt.</p>
					// 		<span>2 min</span>
					// 	</div>
					// </li>

        	if($value->to_user==Session::get('user_id'))
        		{

        			$user=chats::with('from_users')->where('from_user',Session::get('user_id'))->first();
       
        	 $user_name=$user->to_users->user_name;

        		if($value->message AND $value->attached)
        		{

        	   $sender.='<li><div class="left-chat"><p>'.$value->message.'</p></div></li>';
        		}	
        		elseif($value->message)
        		 {
        			$sender.='<li><div class="left-chat"><p>'.$value->message.'</p></div></li>';
        		}
        		elseif($value->attached)
        		{
                    $file_parts = pathinfo($value->attached);

                   $file_parts['extension'];
                   $cool_extensions = Array('jpg','png','gif','jpeg');

             if (in_array($file_parts['extension'], $cool_extensions)){
          $sender.='<li><div class="left-chat"><p><a href="'.url('public/user_assets/attached/'.$value->attached).'" target="_blank"><img width="10%" src="'.url("public/user_assets/attached/".$value->attached).'"></a></p></div></li>';
} else {
   $sender.='<li><div class="left-chat"><p><a href="'.url('public/user_assets/attached/'.$value->attached).'" target="_blank">'.$value->attached.'</a></p></div></li>';
}
        			// $sender.='<li><div class="left-chat"><p><a href="'.url('public/user_assets/attached/'.$value->attached).'" target="_blank"><img width="10%" src="'.url("public/user_assets/attached/".$value->attached).'"></a></p></div></li>';	
        		}
        		}
        		else
        		{



        			  $user=chats::with('to_users')->where('to_user',Session::get('user_id'))->first();

        			  $user_name=$user->from_users->user_name;
        			if($value->message AND $value->attached)
        		{

        	   $sender.='<li><div class="right-chat"><p>'.$value->message.'</p></div></li>';
        		}	
        		elseif($value->message)
        		 {
        			$sender.='<li><div class="right-chat"><p>'.$value->message.'</p></div></li>';
        		}
        		elseif($value->attached)
        		{
        			$file_parts = pathinfo($value->attached);

                   $file_parts['extension'];
                   $cool_extensions = Array('jpg','png','gif','jpeg');

             if (in_array($file_parts['extension'], $cool_extensions)){
          $sender.='<li><div class="right-chat"><p><a href="'.url('public/user_assets/attached/'.$value->attached).'" target="_blank"><img width="10%" src="'.url("public/user_assets/attached/".$value->attached).'"></a></p></div></li>';
} else {
   $sender.='<li><div class="right-chat"><p><a href="'.url('public/user_assets/attached/'.$value->attached).'" target="_blank">'.$value->attached.'</a></p></div></li>';
}	
        		}

        			// $receiver.='<li><div class="right-chat"><p>'.$value->message.'</p></div></li>';
        		}
       
        
        }

        $obj->sender=$sender;
        $obj->user_name=$user_name;
        echo json_encode($obj);
       
      }
 }
 // return view('user/chat',$data);
}
public function check_unseen(Request $request)
{
	
 $chat = chats::select('message','attached','to_user')->where([['from_user','=',$request->to_user],['to_user','=',Session::get('user_id')],['sending_bit','=','0']])->orderBy('created_at','asc')->get();
   chats::select('message','attached')->where([['from_user','=',$request->to_user],['to_user','=',Session::get('user_id')],['sending_bit','=','0']])->orderBy('created_at','asc')->update(['sending_bit'=>1]);
  if(!empty($chat))
  {
    return $chat;
  }
  else
  {
   return 0;
  }
}
Public function read_message(Request $request)
{
  $user_id=$request->user_id;

    $read=chats::where('to_user',$user_id)->update(['status' => 1]);
    if($read)
    {
      echo "true";
    }
    else
    {
      echo "false";
    }
}
public function send_message_user(Request $request)
 {
   $new_message=new chats();
   $new_message->message=$request->send_messgae;
   $new_message->from_user=Session::get('user_id');
   $new_message->to_user=$request->to_user;
    $image = $request->file('file');	
    if($image)
          {
            $destinationPath = public_path(). '/user_assets/attached/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);

            if(!empty($img))
            {
            	
            	$new_message->attached=$locationimage;
            }
        }
            	
   $new_message->save();
   return $new_message;
 } 
	public function login()
	{
		if(Session::get('user_id'))
		{
	      return redirect('dashboard');	
		}

		

		return view('user/login');
	}
	
	public function logout()
	{
			$user_id=Session::get('user_id');
			$result=User::find($user_id);
			$result->login_status=0;
			$result->save();
		       Session::forget('user_id');
           Session::forget('firstname');
           Session::forget('lastname');
           Session::forget('email');
          if($result)
          {

          return redirect('/');
          } 
          else
          {
            return back();
          }
	}
	
	public function testimonials()
	{

			$data['title']='Testimonials';
	    	return view('user/testimonials',$data);
	           
	}
public function polygamy()
	{
		 $data=User::where('martial_status','Married')->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->paginate('12');
            $search='polygamy';
         $d['user_data']=$data;
         $d['search']=$search;
         $d['save_search']=url()->current();
    $d['title']='polygamy User Listing';
	$d['country']=DB::table('countries')->get();
	    	 return view('user/user-search',$d);
	           
	}
public function separated()
	{
		 $data=User::where('martial_status','separated')->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->paginate('12');
         $search='separated';
         $d['user_data']=$data;
         $d['search']=$search;
         $d['save_search']=url()->current();
         $d['title']='Separated User Listing';
	$d['country']=DB::table('countries')->get();
	    	 return view('user/user-search',$d);
	           
	}
public function annulled()
	{
		 $data=User::where('martial_status','Annulled')->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->paginate('12');
         $search='annulled';
         $d['user_data']=$data;
         $d['search']=$search;
         $d['save_search']=url()->current();
         $d['title']='Annulled User Listing';
	$d['country']=DB::table('countries')->get();
	    	 return view('user/user-search',$d);
	           
	}
public function divorcee()
	{
		 $data=User::where('martial_status','Divorcee')->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->paginate('12');
          $search='divorcee';
         $d['user_data']=$data;
         $d['search']=$search;
         $d['save_search']=url()->current();
         $d['title']='Divorcee User Listing';
	$d['country']=DB::table('countries')->get();
	    	 return view('user/user-search',$d);
	           
	}
	public function single()
	{
		 $data=User::where('martial_status','unmarried')->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('id','desc')->paginate('12');
         $search='single';
          $d['save_search']=url()->current();
         $d['user_data']=$data;
         $d['search']=$search;
		 // dd($d['user_data']);
		 $d['title']='Single User Listing';
	$d['country']=DB::table('countries')->get();
	    	 return view('user/user-search',$d);
	           
	}

	public function widow()
	{
		 $data=User::where('martial_status','Widow Widower')->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->paginate('12');
          $search='widow';
         $d['user_data']=$data;
         $d['search']=$search;
         $d['save_search']=url()->current();
         $d['title']='Widow User Listing';
		$d['country']=DB::table('countries')->get();
	    	 return view('user/user-search',$d);
	           
	}
  
  Public function edit_notes(Request $request)
  {
    $notes_id=$request->notes_id;
    $notes=MyNotes::find($notes_id);
    $notes->notes_title=$request->notes_title;
    $notes->detail=$request->detail;
    $notes->save();
    if($notes)
    {
       Session::flash('success', 'edit record!'); 
       return back(); 
    }
    else
    {
      Session::flash('error', 'invalid!'); 
       return back(); 
    }
  }
  Public function save_my_notes(Request $request)
  {
    $notes=new MyNotes();
    $notes->notes_title=$request->notes_title;
    $notes->detail=$request->detail;
    $notes->user_id=Session::get('user_id');
    $notes->save();
    if($notes)
    {
       Session::flash('success', 'save record!'); 
       return back(); 
    }
    else
    {
      Session::flash('error', 'invalid!'); 
       return back(); 
    }
  }
  Public function more_alike($like_id)
  {
       $data['more_alike']=User::where('id',$like_id)->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->first();
       $data['photo']=MyPhoto::where('user_id',$like_id)->where('dp_status',1)->first();
       $data['userphoto']=MyPhoto::where('user_id',Session::get('user_id'))->where('dp_status',1)->first();
       $data['user_data']=User::where('id',Session::get('user_id'))->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->first();
      
       $data['title']='More Alike';
       return view('user/more_alike',$data);
  }
  Public function my_notes()
  {
    $data['show_notes']=MyNotes::where('user_id',Session::get('user_id'))->orderBy('notes_id','desc')->paginate('10');
      
       $data['title']='My Notes';
       return view('user/my_notes',$data);
  }
  Public function delete_notes($id)
  {
    $delete=MyNotes::where('notes_id',$id)->delete();
    if($delete)
    {
      Session::flash('success', 'Delete record!'); 
     return back(); 
    }
    else
    {
      Session::flash('error', 'Invalid input!'); 
     return back();
    }
  }
  Public function delete_search($id)
  {
    $delete=SaveSearch::where('save_id',$id)->delete();
    if($delete)
    {
      Session::flash('success', 'Delete record!'); 
     return back(); 
    }
    else
    {
      Session::flash('error', 'Invalid input!'); 
     return back();
    }

  }
  Public function save_search(Request $result)
  {
    $search=new SaveSearch();
    $search->link=$result->link;
    // dd($result->link);
    // $search->search_comment=$result->search_comment;
    $search->user_id=Session::get('user_id');
    $check=SaveSearch::where('user_id',Session::get('user_id'))->first();
    if(!empty($check))
    {
      
      $check->link=$result->link;
      $check->save();
     Session::flash('success', 'update Save Search'); 
     return back(); 
    }
    else
    {
    $search->save();
    if($search)
    {
    Session::flash('success', 'Save Search'); 
    return back();
    }
    else
    {
     Session::flash('error', 'invalid input!'); 
    return back(); 
    }
    }
  }
	Public function latest_updates()
  {
      $data['update']=LatestUpdate::orderBy('update_id','desc')->paginate('12');
      $data['title']='Latest updates';
       return view('user/latest-updates',$data);
  }
  Public function show_search()
  {   
        $data['show_search']=SaveSearch::where('user_id',Session::get('user_id'))->orderBy('save_id','desc')->paginate('10');
      
       $data['title']='Show Save Search';
       return view('user/save-search',$data);
  }
	public function user_search(Request $request)
	{
		$data1='user-search';
		$user_name =   $request->user_name;
		$loking_for =   $request->loking_for;
        $country_id = $request->country_id;
        $state_id = $request->state_id;
        $city_id = $request->city_id;
        $age_from =   $request->age_from;
        $age_to =   $request->age_to;
        $martial_status =  $request->martial_status;
        $height_from =  $request->height_from;
        $height_to  =    $request->height_to;
        $language  =    $request->language;
        $religiousness  =    $request->religiousness;
        $caste  =    $request->caste;
        $financial_status  =    $request->financial_status;
        $qualification  =    $request->qualification;
         $job  =    $request->job;
         $smoking  =    $request->smoking;
        
       	$is_admin=0;
       	$user_id=Session::get('user_id');
       	if(!empty($user_id))
       	{

       		$data = User::where('is_admin',$is_admin)->where('id','<>',$user_id)->where('profile_status',1);

       	}
       	else
       	{

        $data = User::where('is_admin',$is_admin);
       	}
        $search  =    $request->search;
        if($search=='single')
        {
         $data1='single';
         $data=User::where('martial_status','unmarried');
          
        }

        if($search=='widow')
        {
         $data1='widow';
         $data=User::where('martial_status','Widow Widower');
        }
         if($search=='divorcee')
        {
         $data1='divorcee';
         $data=User::where('martial_status','Divorcee');
        }
        if($search=='annulled')
        {
        	$data1='annulled';
         $data=User::where('martial_status','Annulled');
        }
        if($search=='polygamy')
        {
        	$data1='polygamy';
         $data=User::where('martial_status','Married');
        }
         if($search=='separated')
        {
         $data1='separated';
         $data=User::where('martial_status','separated');
        }
        if(!empty($user_name))
        {
        	 
        	 $data = $data->where('user_name','like', '%'. $user_name.'%');

         // where('user_name',$user_name);
        }

        if(!empty($smoking))
        {
        	
          $data = $data->where('smoking',$smoking);
        }
         if(!empty($job))
        {
        	
          $data = $data->where('job',$job);
        }
        if(!empty($qualification))
        {
        	
          $data = $data->where('qualification',$qualification);
        }
         if(!empty($financial_status))
        {
        	
          $data = $data->where('finacial_status',$financial_status);
        }

         if(!empty($caste))
        {
        	
          $data = $data->where('cast',$caste);
        }
        if(!empty($country_id))
        {
        	
          $data = $data->where('users.country_id',$country_id);
        }

        if(!empty($state_id))
        {
        	
          $data = $data->where('users.state_id',$state_id);
        }
        
        if(!empty($city_id))
        {
        	
          $data = $data->where('users.city_id',$city_id);
        }
         if(!empty($loking_for))
        {
        	
          $data = $data->where('gender',$loking_for);
        }

        if(!empty($age_from && $age_to))
        {
        	
        	$data = $data->whereBetween('age', [$age_from,$age_to]);
         
        }


        if(!empty($martial_status))
        {
        	
          $data = $data->where('martial_status',$martial_status);
        }


         if(!empty($height_from && $height_to))
        {
        	
          $data = $data->whereBetween('height',[$height_from,$height_to]);
        }

        // if(!empty($height_to))
        // {
        	
        //   $data = $data->where('loking_height_to',$height_to);
        // }
         if(!empty($language))
        {
        	
          $data = $data->where('language',$language);
        }

        if(!empty($religiousness))
        {
        	
          $data = $data->where('religiousness',$religiousness);
        }

         $data=$data->join('cities','cities.city_id','=','users.city_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('my_photos','my_photos.user_id','=','users.id','left')->orderBy('id','desc')->paginate('12');
         $d['user_data']=$data;
         $d['save_search']=$request->fullUrl();
         $d['country']=DB::table('countries')->get();
         $d['search']=$data1;

         $d['title']='User Listing';
         // @foreach ($d['user_data'] as $value)
         //  {
         // 	$d['city']=DB::table('cities')->where('city_id',$value->city_id)->get();
         // }
        // dd($data);
		 		 return view('user/user-search',$d);							   

	}
	public function sitemap()
	{
		$d['title']='Sitemap';
		return view('user/sitemap',$d);
	}
	public function our_police()
	{
		$d['title']='our police';
	return view('user/our-police',$d);
	}
	public function about_us()
	{
		$d['title']='about us';
		return view('user/about_us',$d);
	}
	
	public function contact_us()
	{
		$d['title']='contact us';
		return view('user/contact_us',$d);
	}
	public function faqs()
	{
		$d['title']='Faqs';
		return view('user/faqs',$d);
	}
	public function term_condation()
	{
		$d['title']='term and condation';
		return view('user/terms-and-conditions',$d);
	}
	public function policy_privacy()
	{
		$d['title']='policy privacy';

		return view('user/policy_privacy',$d);
	}
	public function services()
	{
		$d['title']='Services';

		return view('user/services',$d);
	}

	public function customer_query(Request $request)
	 {
	// 	$data['name']=$request->name;
	// 	$data['email']=$request->email;
	// 	$data['phone']=$request->phone;
	// 	$data['message']=$request->message;
		$data = new customer_query;

        $data['fname']=$request->fname;
        $data['lname']=$request->lname;
		$data['email']=$request->email;
		$data['phone']=$request->phone;
		$data['message']=$request->message;
        $data->save();
        	Session::flash('success', 'Your message has been submited successfully'); 
            return back();
       
	}
	public function get_friend(Request $request)
	{
		$user_id=$request->user_id;

		// $friend=UserRequest::with('user','photo')->where('requested_user_id',Session::get('user_id')->)->get();
		$friend=UserRequest::with('user','photo')->where('requested_user_id',Session::get('user_id'))->where('friend_status','<>',1)->get();
		
		$request = '';
        foreach ($friend as $value) 
        {
        	
        	echo '<li  style="margin-left:20px;"><a href="'.url("public-profile/$value->user_id").'"><img class="img-circle" style="margin:20px;" width="10%" src="'.url("public/user_assets/my_photo/".$value->photo->image).'">'.$value->user->user_name.' send friend request</a><a href="'.url("delete-request/$value->user_id").'" class="btn pull-right">Delete</a> <a href="'.url("confirm-friend/$value->user_id").'" class="btn pull-right">Confirm</a></li><hr>';
        }
       
		
		
	}
	public function friend_count(Request $request)
	{
		$user_id=$request->user_id;

		$friend=UserRequest::where('requested_user_id',$user_id)->where('friend_status',0)->update(['friend_status' => 2]);
		if($friend)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}

	}


public function confirm_friend($friend_id)
	{
    // dd($friend_id);
		
		$friend=UserRequest::where('user_id',$friend_id)->where('requested_user_id',Session::get('user_id'))->first();

		if(!empty($friend))
		{
		
		  $friend->friend_status=1;
		  $friend->save();
      Session::flash('success', 'Confirm Friend'); 
            return back();
    
    
  }
		Session::flash('error', 'invalid'); 
            return back();
		
	}
	
	public function delete_request($friend_id)
	{
		
	
		$friend=UserRequest::where('requested_user_id',$friend_id)->where('user_id',Session::get('user_id'))->first();

		        
		if(!empty($friend))
		{
		$friend=UserRequest::where('requested_user_id',$friend_id)->where('user_id',Session::get('user_id'))->delete();
		
		$Userdelete=new DeleteRequest();
		$Userdelete->delete_user_id=$friend_id;
		$Userdelete->user_id=Session::get('user_id');
		
		$Userdelete->save();
		if($Userdelete)
		{
			Session::flash('success', 'Your request has been deleted successfully'); 
            return back();
		}
	}
		else
		{
			Session::flash('error', 'invalid'); 
            return back();
		}
	}

    Public function hide_profile($hide_user_id)
    {
        $hideuser=new HidePrifile();
        $hideuser->hide_user_id=$hide_user_id;
        $hideuser->user_id=Session::get('user_id');
        $hideuser->save();
        $user=User::find($hide_user_id);
        $user->profile_status=0;
        $user->save();
        Session::flash('success', 'Hide user!'); 
            return back();

    }

    Public function show_profile($show_user_id)
    {

        $HidePrifile=HidePrifile::where('user_id',Session::get('user_id'))->where('hide_user_id',$show_user_id)->delete();
        $user=User::find($show_user_id);
        $user->profile_status=1;
        $user->save();
        Session::flash('success', 'Show user!'); 
            return back();

    }



    public function hide_profile_list()
    {
        
        $user_id=Session::get('user_id');
         $data['user_data']=HidePrifile::where('user_id',$user_id)->join('users','users.id','=','hide_profiles.hide_user_id')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
           $data['country']=DB::table('countries')->get();
           $data['search'] = 'user-search';
           $data['save_search']=url()->current();
           $data['title']='Hide user list';
          return view('user/user_listing',$data);    
    }
	public function add_friend($friend_id)
	{
		
		
		$friend=UserRequest::where('requested_user_id',$friend_id)->where('user_id',Session::get('user_id'))->first();

		    $ActivityLog=new ActivityLog();
				$ActivityLog->user_id=Session::get('user_id');
				$ActivityLog->activity_user_id=$friend_id;
				$ActivityLog->activity='Send friend request';
				$ActivityLog->save();
		if(empty($friend))
		{
		$active_user=BlockUser::where('block_user_id',$friend_id)->where('user_id',Session::get('user_id'))->first();
		if($active_user)
		{
			Session::flash('error', 'Kindly unblock this user before add friend list !'); 

			return back();
		}
		$UserRequest=new UserRequest();
		$UserRequest->requested_user_id=$friend_id;
		$UserRequest->user_id=Session::get('user_id');
		$UserRequest->friend_status=0;
		$UserRequest->save();
		if($UserRequest)
		{
			Session::flash('success', 'Your request has been submited successfully'); 
            return back();
		}
	}
		else
		{
			Session::flash('error', 'invalid'); 
            return back();
		}
	}
	public function like(Request $request)
	{
		$data['like_user_id']=$request->id;
		$data['user_id'] =Session::get('user_id');
		$likes=DB::table('likes')->where('like_user_id',$data['like_user_id'])->where('user_id',Session::get('user_id'))->first();
		if(empty($likes))
		{


		$likes=DB::table('likes')->insert($data);
		if($likes)
		{
			echo "success";
		}
	}
		else
		{
			echo "false";
		}
	}
	public function close_account()
	{
		$user_id=Session::get('user_id');
		$result=User::where('id',$user_id)->join('profile-image','users.profile_image','=','profile-image.image_id','left')->first();
		$data['user_data']=$result; 
		$data['title']='Close account';   
	    return view('user/close_account',$data);
	}

	public function deactive_user($deactive)
	{
		$user_id=Session::get('user_id');
		$result=User::where('id',$user_id)->join('profile-image','users.profile_image','=','profile-image.image_id','left')->first();
		$data['user_data']=$result;
		$data['deactive']=$deactive;
		$data['title']='Deactive Account';   
	    return view('user/close_account',$data);
	}

	
	public function close_my_account(Request $request)
	{
		$password=$request->password;
    	 
         $result=User::where('password',sha1($password))->where('is_admin',0)->where('id',Session::get('user_id'))->first();
		
		
		    if($result)
		    {

		
		 	    return redirect('resone');
		   
		   }
		
		   else
		   {
		   	Session::flash('error', 'Please enter valid password'); 
            return back(); 
		   
		   }
	}
  Public function resone()
  {
    $data['title']='resone';
    return view('user/resone',$data);
  }
   function close(Request $request)
   {
      $messages = array(
       
            'close_reason.required' => 'You must check any reason',
           
         );
         $rules = array(
         
         
          'close_reason' => 'required',
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
              $validator->errors()->getMessages();
             return redirect()->back()->withErrors($validator->errors());
            
          }
      $close=new CloseAccount();
      $close->bad_service=$request->bad_service;
      $close->user_id=Session::get('user_id');
      $close->close_reason=$request->close_reason;
      $close->other_reason=$request->other_reason;
      $close->save();
      return redirect('logout');
   }
   Public function feedback()
   {
    $data['title']='User feedback';
    return view('user/feedback',$data);
   }
	public function add_feedback(Request $request)
	{
		    $feedback=new FeedBack();
		   $feedback->user_feedback=$request->user_feedback;
		   $feedback->user_id=Session::get('user_id');
       $feedback->save();

		   
		   if($feedback)
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
	public function forgot()
	{
    if(Session::get('user_id'))
    {
      
      return redirect('dashboard');


      
    }
		$data['title']='Forgot password';
		return view('user/forgot',$data);
		
		}
	public function update_password(Request $request)
	{
		
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
		$data['email']=DB::table('users')->where('email',$email)->first();
		if($data['email'])
		{

		 $dbemail=$data['email']->email;
		
		 $data1['enc_email']=encrypt($dbemail);
		 
		$result=\Mail::send('emails.general', $data1 , function($message) use ($data)
	  		  {
                $message->to($data['email']->email)->from('info@kaboolhai.com' , 'Kabool Hai')->subject('please click here for reset password');
              });
    

		    echo "true";
    
			}
			
			else
			{
				echo "false";
			}
			// echo "success";
		 
		  
      
		// dd($result);
	}
	public function reset_password($email)
	{
		if(Session::get('user_id'))
		{
			$data['title']='Dashboard';
		  
	    return view('user/main-profile',$data);
			
		}
		$data['email']=decrypt($email);
		
		$data['title']='Reset Password';
		return view('user/reset_password',$data);
	}
  public function tell_friend()
  {
      $user_id=Session::get('user_id');
    $data['friend']=TellFriend::where('user_id',$user_id)->get();
    $data['title']='Tell friend';
    
     return view('user/tell-friend',$data); 
  }
	public function tell_about(Request $request)
	{

		
		$user_id=Session::get('user_id');
		$name=$request->firend_name;
    $email=$request->firend_email;
    foreach ($email as $key => $value)
   {
      $data['name']=$name[$key];
      $data['email']=$value;
      $result1=\Mail::send('emails.tell_friend' , $data , function($message) use ($data)
         {
                $message->to($data['email'])->from('contact@kaboolhai.com', $data['name'])->subject('please test it');
              });


      $tell_friend=new TellFriend();
      $tell_friend->user_id=$user_id;
      $tell_friend->email=$value;
      $tell_friend->name=$name[$key];
      $tell_friend->save();
    }
    Session::flash('success', 'Your message has been submited successfully !'); 
           return back();

		// $result=DB::table('users')->where('id',$user_id)->first();
		// $data['name']=$result->firstname.' '.$result->lastname;
		// $data['phone']=$result->phone;
		// $data['from']=$result->email;

		// $result1=\Mail::send('emails.tell_friend' , $data , function($message) use ($data)
	 //  		  {
  //               $message->to($data['email'])->from($data['from'] , $data['name'])->subject('please test it');
  //             });
		// // if($result1)
  // //       {
  //         Session::flash('success', 'Your message has been submited successfully !'); 
  //          return back();
  //       // }
  //       // else
  //       // {
  //       //   Session::flash('error', 'invalid!'); 
  //       //    return back();
  //       // }
		// // dd($data);	
		
	}
	public function change_password(Request $request)
	{
		$messages = array(
       
          	'old_password.required' => 'You must enter your old password',
           'password.required' => 'You must enter your password',
            'password_confirmation.required' => 'You must enter your confirm password',
         );
         $rules = array(
         
         
          'password' => 'bail|required|confirmed|min:3',
          'password_confirmation' => 'bail|required|min:3',
          'old_password' => 'required',

         );
         	
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
              $validator->errors()->getMessages();
             return redirect()->back()->withErrors($validator->errors());
            
          }
          else
          {

          	$old_password=$request->old_password;
          	$result=User::where('password',sha1($old_password))->first();
          	if(!empty($result))
          	{
          		$passwords=sha1($request->password);
          		$pass_change=User::where('password',sha1($old_password))->update(['password' => $passwords]);
          		Session::flash('success', 'Your password has been changed!'); 
                  return back();
          	}
          	else
          	{

          		Session::flash('error', 'Your old password is not match please try again!'); 
                  return back();
          	}
		}
		
	}
	public function photo_change(Request $request)
	{
    $messages = array(
       
          'image_name.required' => 'Please select image',
         
         );
         $rules = array(
        'image_name' => 'required|max:10000|mimes:jpeg,jpg,gif,png,bmp',
        
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
            
              return redirect()->back()->withErrors($validator->errors());
          }
			$user_id=Session::get('user_id');
			$old_image=MyPhoto::where('user_id',$user_id)->where('dp_status',1)->first();
			if($old_image)
			{
				$pho=MyPhoto::where('user_id',$user_id)->where('dp_status',1)->delete();
		     unlink('public/user_assets/my_photo/'.$old_image->image);

		     $image = $request->file('image_name');
		 	 if($image){
            $destinationPath = public_path(). '/user_assets/my_photo/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);

            if(!empty($img))
            {
            	$user=new MyPhoto();
            	$user->image=$locationimage;
            	$user->user_id=Session::get('user_id');
                 $user->dp_status=1;
            	$user->save();
           	    
           	    if(!empty($user))
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
			}
			else
			{
			
		 	 $image = $request->file('image_name');
		 	 if($image){
            $destinationPath = public_path(). '/user_assets/my_photo/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);

            if(!empty($img))
            {
            	$user=new MyPhoto();
            	$user->image=$locationimage;
            	$user->user_id=Session::get('user_id');
                $user->dp_status=1;
            	$user->save();
           	    
           	    if(!empty($user))
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
		  else
		    {
		    	Session::flash('error', 'Please select the image!'); 
           	    
		          return back();
		    }
		}
		
		    
	}
	public function general_setting(Request $request)
	{
		$messages = array(
       
          'firstname.required' => 'You must enter your first name',
          'lastname.required' => 'You must enter your surname',
          'user_name.required' => 'You must enter your username', 
          
           'gender.required' => 'You must state if you are male or female',
           
         );
         $rules = array(
        'user_name' =>'required|max:8|min:3',
        
         'firstname' => 'required',
         'lastname' => 'required',
         'gender' => 'required',
         
        

         );
         	
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
              return redirect()->back()->withErrors($validator->errors());
          }
          else
          {
		    
			$user=User::find(Session::get('user_id'));
			
			$user->firstname=$request->firstname;
			$user->lastname=$request->lastname;
			$user->user_name=$request->user_name;
			$user->gender=$request->gender;
			$user->save();
			if(!empty($user))
			{
				Session::flash('success', 'Your settings has been saved!'); 
                  return back();
			}
			else
			{
				Session::flash('error', 'invalid input!'); 
                  return back();
			}
		}
		
	}
	
	public function settings()
	{
		$user_id=Session::get('user_id');
		$data['users']=User::where('id',$user_id)->join('profile-image','users.profile_image','=','profile-image.image_id','left')->first();
		$data['photo']=MyPhoto::where('user_id',$user_id)->where('dp_status',1)->first();
		

		//favourite list
		 $data['favourite']=FavouriteUser::where('user_id',$user_id)->join('users','users.id','=','favouriteusers.favourite_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		 // Block List;
		 $data['block_user']=BlockUser::where('user_id',$user_id)->join('users','users.id','=','blockusers.block_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		 //photo permission list

		 $data['photo_permission']=PhotoPermission::where('permission_user_id',$user_id)->join('users','users.id','=','phptopermissions.user_id')->join('countries','countries.country_id','=','users.country_id')->join('states','states.state_id','users.state_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');


		  $data['friend']=UserRequest::where('requested_user_id',$user_id)->where('friend_status',1)->join('users','users.id','=','usersrequets.user_id')->join('countries','countries.country_id','=','users.country_id')->join('states','states.state_id','users.state_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
        $data['title']='Settings';
		 return view('user/settings',$data);
	}
	

public function reject_photo_request($request_id)
{
	$photo_permission=PhotoPermission::where('user_id',$request_id)->delete();
	$email_setting=EmailPerferance::where('user_id',$request_id)->first();
	if($email_setting->responce_photo_request_status==1)
		{
		$data['user_date']=User::find($request_id);
		$data['sender_user']=User::find(Session::get('user_id'));
		 $result=\Mail::send('emails.reject_photo_permission', $data , function($message) use ($data)
	  		  {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Reject your Photo Permission Request');
              });
		}
	if($photo_permission)
	{

	Session::flash('success', 'Reject photo permission request!'); 
    return back();
	}
	else
	{
		Session::flash('error', 'invalid input !'); 
        return back();
	}

}

public function accept_photo_request($request_id)
{
	$photo_permission=PhotoPermission::where('user_id',$request_id)->update(['status' => 1]);
	$email_setting=EmailPerferance::where('user_id',$request_id)->first();
  if($email_setting)
  {
	if($email_setting->responce_photo_request_status==1)
		{
		$data['user_date']=User::find($request_id);
		$data['sender_user']=User::find(Session::get('user_id'));
		 $result=\Mail::send('emails.accept_photo_permission', $data , function($message) use ($data)
	  		  {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Accept your Photo Permission Request');
              });
    }
		}
	if($photo_permission)
	{

	Session::flash('success', 'Accept photo permission request!'); 
    return back();
	}
	else
	{
		Session::flash('error', 'invalid input !'); 
        return back();
	}

}


	public function get_notification(Request $request)
	{
		$user_id=$request->user_id;

		$notification=Notification::with('user','photo')->where('receiver_id',$user_id)->limit('20')->orderBy('notification_id','desc')->get();


		// $request = '';
        foreach ($notification as $value) 
        {
        	// print_r();
        	if(!empty($value->photo->image))
        	{

        	echo '<li class="msgNoti get_notifi notify_section" id="get_noti" style="margin-left:10px;"><a class="left-first-section" style="color: #666666 !important;"  href="'.url("public-profile/$value->sender_id").'"><img style="width: 45px; height: 45px; border-radius:100px; " src="'.url("public/user_assets/my_photo/".$value->photo->image).'">'.'  '.$value->user->user_name.' '.$value->notification_type.'</a></li><hr>';
        	}
        	else if($value->user->image_name)
        	{
        		echo '<li class="msgNoti get_notifi notify_section" id="get_noti" style="margin-left:10px;"> <a class="left-first-section" style="color: #666666 !important;" href="'.url("public-profile/$value->sender_id").'"><img style="width: 45px; height: 45px; border-radius:100px; " alt="" src="'.url("public/user_assets/profile_image/".$value->image_name).'">'.'  '.$value->user->user_name.' '.$value->notification_type.'</a></li><hr>';
        	}
          else
          {
            echo '<li class="msgNoti get_notifi notify_section" id="get_noti" style="margin-left:10px;"><a class="left-first-section" style="color: #666666 !important;" href="'.url("public-profile/$value->sender_id").'"><img style="width: 45px; height: 45px; border-radius:100px; " alt="" src="'.url("http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Image +Not+Found").'">'.'  '.$value->user->user_name.' '.$value->notification_type.'</a></li><hr>';
          }
        }
	}
	public function read_notification(Request $request)
	{
		$user_id=$request->user_id;

		$notification=Notification::where('receiver_id',$user_id)->update(['status' => 1]);
		if($notification)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
	public function notification()
	{
		$user_id=Session::get('user_id');
		
		$data['notification']=Notification::with('user','photo')->where('receiver_id',$user_id)->orderBy('notification_id','desc')->get();
	$data['title']='Notification';
		 return view('user/notifcication',$data);		
	}


	
	public function who_am_i_looking()
	{
		
		$user_id=Session::get('user_id');
		$user=User::find($user_id);

		if($user->gender=='Female')
		{
		 $data['user_data']=User::where('id','<>',$user_id)->whereBetween('age', [$user->loking_age_from,$user->loking_age_to])->where('gender','Male')->where('loking_language',$user->loking_language)->where('loking_education',$user->loking_education)->where('loking_job',$user->loking_job)->where('loking_skin_color',$user->loking_skin_color)
		    ->where('martial_status',$user->martial_status)->where('users.country_id',$user->country_id)->where('users.city_id',$user->city_id)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');

		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
		
		 }
		else
		{
			 $data['user_data']=User::where('id','<>',$user_id)->whereBetween('age', [$user->loking_age_from,$user->loking_age_to])->where('gender','Female')->where('loking_language',$user->loking_language)->where('loking_education',$user->loking_education)->where('loking_job',$user->loking_job)->where('loking_skin_color',$user->loking_skin_color)
		    ->where('martial_status',$user->martial_status)->where('users.country_id',$user->country_id)->where('users.city_id',$user->city_id)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');

		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
		}
    $data['save_search']=url()->current();
		 $data['search']='who';
		 $data['title']='Who am i looking listing';
		 return view('user/user-search',$data); 
	
	
		
		
		
	}


	public function who_looking_for_me()
	{
		
		$user_id=Session::get('user_id');
		$user=User::find($user_id);
		if($user->gender=='Female')
		{
		 $data['user_data']=User::where('id','<>',$user_id)->where('year', $user->year)->where('gender','Male')->where('language',$user->language)->where('sect_are',$user->sect_are)->where('pray',$user->pray)->where('skin_color',$user->skin_color)
		    ->where('martial_status',$user->martial_status)->where('users.country_id',$user->country_id)->where('users.city_id',$user->city_id)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');

		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
		
		 }
		else
		{
			 $data['user_data']=User::where('id','<>',$user_id)->where('year', $user->year)->where('gender','Female')->where('language',$user->language)->where('sect_are',$user->sect_are)->where('pray',$user->pray)->where('skin_color',$user->skin_color)
		    ->where('martial_status',$user->martial_status)->where('users.country_id',$user->country_id)->where('users.city_id',$user->city_id)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');

		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
		}
		  $data['search']='who';
		  $data['title']='Who looking for me listing';
      $data['save_search']=url()->current();
		return view('user/user-search',$data); 

	}

  Public function help_center()
  {

   $data['title']='Help Center';
    return view('user/help-center',$data);
  }
  Public function save_request(Request $request)
  {
    $messages = array(
          'email.required' => 'You must enter email',
           'phone.required' => 'You must enter mobile no',
         
            'account_detail.required' => 'You must enter account detail',
            'request_type.required' => 'You must enter request type',
            'description.required' => 'You must enter description',
         );
         $rules = array(
         
         
          'email' => 'required',
          'phone' => 'required',
          'account_detail' => 'required',
          'request_type' => 'required',
          'description' => 'required',

         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
              $validator->errors()->getMessages();
             return redirect()->back()->withErrors($validator->errors());
            
          }
    $saverequest=new SaveRequest();
    $saverequest->email=$request->email;
    $saverequest->phone=$request->phone;
    $saverequest->account_detail=$request->account_detail;
    $saverequest->request_type=$request->request_type;
    $saverequest->description=$request->description;
    $saverequest->save();
    if($saverequest)
    {
      Session::flash('success', 'Your request has been send!'); 
                  return back();
             }
               
             
               else
             {
               Session::flash('error', 'Invalid input !'); 
                  return back();
             }
    
  }
	public function statistics()
	{
		
		$user_id=Session::get('user_id');
		
		$current = \Carbon\Carbon::now();
		$from = \Carbon\Carbon::yesterday();
		
	   $data['new_delete']=DeleteRequest::with('user','photo')->where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

       
       
	   // dd($data['sent_items']);

	   $data['delete']=DeleteRequest::with('user','photo')->where('user_id',$user_id)->get();

	   $data['new_request']=UserRequest::with('user','photo')->where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();
	  

	   $data['request']=UserRequest::with('user','photo')->where('user_id',$user_id)->get();

       $data['new_sent_items']=chats::with('to_users','to_photo')->where('from_user',$user_id)->whereBetween('created_at',[$from,$current])->orderBy('chats.id','desc')->get();

       $data['sent_items']=chats::with('to_users','to_photo')->where('from_user',$user_id)->orderBy('chats.id','desc')->get();


	   $data['new_photo_reci']=PhotoPermission::with('user','photo')->where('permission_user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

	  $data['photo_permission_reci']=PhotoPermission::with('user','photo')->where('permission_user_id',$user_id)->get();

	   $data['favourit']=FavouriteUser::with('user','photo')->where('user_id',$user_id)->get();
	   $data['new_favourite']=FavouriteUser::where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

	    $data['photo_permission']=PhotoPermission::with('users','photos')->where('user_id',$user_id)->get();
	    $data['new_photo']=PhotoPermission::with('users','photos')->where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();
	    $data['iprofileview']=MyProfileViewed::with('user','users','photo')->where('user_id',$user_id)->get();
	    // dd($data['iprofileview']);

	    $data['new_i_vew']=MyProfileViewed::with('user','photo')->where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

	    $data['myprofileview']=MyProfileViewed::where('myprofile_user_id',$user_id)->get();

	    $data['new-my-vew']=MyProfileViewed::where('myprofile_user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

	    $data['blockuser']=BlockUser::with('user','photo')->where('user_id',$user_id)->get();


	    $data['new_blockuser']=BlockUser::with('user','photo')->where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

	    $data['invite']=InviteViewProfile::with('user','photo')->where('user_id',$user_id)->get();


      $data['new_hide_profile']=HidePrifile::with('user','photo')->where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

      $data['hide_profile']=HidePrifile::with('user','photo')->where('user_id',$user_id)->get();

	     $data['new_invite']=InviteViewProfile::where('user_id',$user_id)->whereBetween('created_at',[$from,$current])->get();

	      $data['title']='Statistics';
		
		return view('user/statistics',$data);		
	}

	

	public function check_login_status(Request $request)
	{
		$user=User::find($request->user_id);
		$user->login_status=0;
    $user->save();
  

           
	}

	
	public function dologin(Request $request)
	{
		          ob_start();
              system('ipconfig /all');
              $mycom=ob_get_contents();
              ob_clean();
              $findme = "Physical";
              $pmac = strpos($mycom, $findme);
              $mac=substr($mycom,($pmac+36),17);
		 
        $text=$request->email;
		
         $password=$request->password;
    	 
         $result=User::where(array('password'=>sha1($password),'is_admin'=>0,'email'=>$text))->orWhere('user_name',$text)->join('profile-image','users.profile_image','=','profile-image.image_id','left')->first();

          	if($result)
          	{
              
          	if($result->status==1)
          	{
              Session::put('user_id',$result->id);
               Session::put('firstname',$result->firstname);
               Session::put('lastname',$result->lastname);
               Session::put('email',$result->email);
               Session::put('user_name',$result->user_name);
              // if($result->oth_status==1)
              // {

               $courent_time=date('Y-m-d H:i:s');
           	   $result->last_login=$courent_time;
           	   $result->login_status=1;
               
                $coki =\Cookie::get('users_id');
               if(empty($coki))
               {
        
                \Cookie::queue(
    \Cookie::make('users_id', $result->id, 10080)
);
       
              
                $email_setting=EmailPerferance::where('user_id',$result->id)->first();
    if(!empty($email_setting))
    {
    if($email_setting->account_access_status==1)
    {
    $data['user_date']=User::find($result->id);
    // $data['sender_user']=User::find(Session::get('user_id'));
     $result2=\Mail::send('emails.account_access', $data , function($message) use ($data)
          {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Access Your account by new device');
              });
    }
  }
 }

               $result->save();
           	   return redirect('dashboard');
             // }
             // else
             // {
               
             //      return redirect('oth');
             // }
           	 }
           	 else
           	 {
           	 	 Session::flash('error', 'This user has been block by admin!'); 
                  return back();
           	 }
               
               }
               else
           	 {
           	 	 Session::flash('error', 'Invalid Email or Password !'); 
                  return back();
           	 }
          
          if(substr($text , 0 , 1) == '+')
        {
            $text = substr($text, 1);
        }
        elseif(substr($text , 0 , 1) == '0')
        {
            $text = '92'.substr($text, 1);
        }
        elseif(substr($text , 0 , 1) == '3')
        {
            $text = '92'.substr($text, 0);   
        }
        if(substr($text, 0 , 2) == '92')
        {
        
        	$result = User::where(array('password'=>sha1($password),'is_admin'=>0,'mobile'=>$text))->first();
        
            if($result)
            {
            if($result->status==1)
            {
              if($result->oth_status==1)
              {


               Session::put('user_id',$result->id);
               Session::put('firstname',$result->firstname);
               Session::put('lastname',$result->lastname);
               Session::put('email',$result->email);
               Session::put('user_name',$result->user_name);

               $courent_time=date('Y-m-d H:i:s');
               $result->last_login=$courent_time;
               $result->login_status=1;
                if($mac!=$result->mac_address)
               {
                $result->mac_address=$mac;
               
               $email_setting=EmailPerferance::where('user_id',$result->id)->first();
    if(!empty($email_setting))
    {
    if($email_setting->account_access_status==1)
    {
    $data['user_date']=User::find($result->id);
  
     $result2=\Mail::send('emails.account_access', $data , function($message) use ($data)
          {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Access your account');
              });
    }
  }
}
  $result->save();
               return redirect('dashboard');
             }
             else
             {
               
                  return redirect('oth');
             }
             }
            else
            {

            Session::flash('error', 'This user has been block by admin!'); 
           return back();
            }
           
        }
         else
          {
           Session::flash('error', 'invalid Phone or password please try again!'); 
           return back();
          }
    }
	}

	public function dashboard()
	{
		  $data['title']='Dashboard';
	    return view('user/main-profile',$data);
	}
	
	public function activity_log($activity_user_id)
	{
		// dd($activity_user_id);
		$user_id=Session::get('user_id');
		$data['activity_log']=ActivityLog::with('otheruser')->where('user_id',$user_id)->where('activity_user_id',$activity_user_id)->orderBy('activity_id', 'desc')->paginate('15');

		$data['activity']=ActivityLog::with('activeuser')->where('user_id',$activity_user_id)->where('activity_user_id',$user_id)->orderBy('activity_id', 'desc')->paginate('15');
		
		  $data['title']='Activity Log';
	    return view('user/activity-log',$data);
	}
	public function profile_writing_tips()
	{
		$data['title']='Prifile writeing tips';
		
		return view('user/profile-writing-tips',$data);	
	}
	public function trust_badges()	
	{
		
		
		$data['title']='Trust badges';
		return view('user/trust-badges',$data);
	}
	// public function my_profile()
	// {
		
	// 	return view('user/my-profile');
	// }
	
	public function main_profile()
	{
		
	
		
      $result=User::where('id',Session::get('user_id'))->first();
		$data['user_data']=$result;
		$data['title']='Main Profile';
		return view('user/main-profile',$data);	
	}
	 public function update_profile(Request $request)
	 {

	 		$messages = array(
       
          'firstname.required' => 'You must enter your first name',
          'lastname.required' => 'You must enter your surname',
          'user_name.required' => 'You must enter your username', 
           'email.required' => 'You must enter your email',
           'gender.required' => 'You must state if you are male or female',
           'country_id.required' =>'You must enter your country name',
            'state_id.required' => 'You must enter your province name',
            'city_id.required' => 'You must enter your city name',
            'code2.required' => 'You must enter your mobile number',
            'phone.required' => 'You must enter your mobile number',
             'phone_code.required' => 'You must enter your mobile number',
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
         'code2' => 'required',
          'phone_code' => 'required',
         'phone' => 'required',
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
		    $user_id=$request->user_id;
			$user=User::find($user_id);
			
			$user->firstname=$request->firstname;
			$user->lastname=$request->lastname;
			$user->user_name=$request->user_name;
			$user->email=$request->email;
			$user->gender=$request->gender;
			$user->country_id=$request->country_id;
			$user->state_id=$request->state_id;
			$user->city_id=$request->city_id;
			 $code=$request->code2;
			 $change_code=str_replace('+', '', $code);
		     $phone_code=$request->phone_code;
		     $phone_code = strval(intval($phone_code));
		     $phone=$request->phone;
		   
		     $change_phone=$change_code.$phone_code.$phone;
		     $user->mobile=$change_phone;
			$user->code=$request->code2;
			$user->phone_code=$request->phone_code;
			$user->phone=$request->phone;
			$dob=$request->year.'-'.$request->month.'-'.$request->day;
		if(!empty($dob))
		{
		$user->age=\Carbon\Carbon::parse($dob)->diff(\Carbon\Carbon::now())->format('%y');
         }
			$user->day=$request->day;
			$user->month=$request->month;
			$user->year=$request->year;
			$user->save();
		}
			
			
        if($user)
        {
        	return redirect('edit-step-2');
        }
        else
        {
          Session::flash('error', 'Invalid input!'); 
           	    
		          return back();
        }
			// $result=DB::table('profile')->insert($data);
	 }
	 public function edit_step_2()
	 {
			$user_id=Session::get('user_id');	 	
	 	     $user=User::find($user_id);
        	 $data['user_data']=$user;
        	 $data['country']=DB::table('countries')->get();
        	 $data['hobbies']=Loking::where('user_id',$data['user_data']->id)->where('loking_type','hobbies')->get();
        	 $data['other_language']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Other language'])->get();
          	
        	$data['native_state']=DB::table('states')->where('country_id',$data['user_data']->country_id)->get();
        	$data['native_cities']=DB::table('cities')->where('state_id',$data['user_data']->state_id)->get();
        	$data['title']='edit step 2';
        	return view('user/edit_step_2')->with($data);
	 }
	public function public_profile($user_id=0)
	{

		 
		// $all_chats= DB::table('chats')->where('to_user',Session::get('user_id'))->orwhere('from_user',Session::get('user_id'))->orderBy('created_at','asc')->groupBy('to_user')->get();

    $data['block_user']=BlockUser::where('user_id',$user_id)->where('block_user_id',Session::get('user_id'))->first();

     $data['block_users']=BlockUser::where('block_user_id',$user_id)->where('user_id',Session::get('user_id'))->first();
      
    
		// $data['all_chats']= chats::with('from_users')->distinct()->where([['from_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get(['to_user','from_user']);
		

		

	if($user_id == 0)
	{
		return redirect('/');
	}
			// echo $data['beard']=$request->beard;die();
			 // $user_id=Session::get('user_id');
	  if(Session::get('user_id')<>$user_id)
	  	{
	  		if(Session::get('user_id')){
	 		$MyProfile=MyProfileViewed::where('user_id',Session::get('user_id'))->where('myprofile_user_id',$user_id)->first();
	 		if(empty($MyProfile))
	 		{
	  		    $MyProfileViewed=new MyProfileViewed();
	  		    $MyProfileViewed->user_id=Session::get('user_id');
	  		    $MyProfileViewed->myprofile_user_id=$user_id;
	  		    $MyProfileViewed->save();
	 		} 	

	 		    $ActivityLog=new ActivityLog();
				$ActivityLog->user_id=Session::get('user_id');
				$ActivityLog->activity_user_id=$user_id;
				$ActivityLog->activity='viewed profile';
				$ActivityLog->save();

				$notification=new Notification();
				$notification->sender_id=Session::get('user_id');
				$notification->receiver_id=$user_id;
				$notification->notification_type='view your profile';
				$notification->save();
				}	
	  	}


	  	
 if($user_id!=null)
 {
  $data['current_chat']= chats::select('id','message','to_user')->where([['from_user','=',Session::get('user_id')],['to_user','=',$user_id]])->orWhere([['from_user','=',$user_id],['to_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get();
  $data['to_user']=$user_id;
}
	  $data['friend']=UserRequest::with('user','photo')->where('requested_user_id',Session::get('user_id'))->where('friend_status','<>',1)->where('user_id',$user_id)->first();

	  $data['confirm_friend']=UserRequest::with('user','photo')
	  ->where(function($q) use ($user_id){
	  	$q->where('requested_user_id',Session::get('user_id'))->where('user_id',$user_id)->where('friend_status',1);
	  })
	  ->orwhere(function($q) use ($user_id){
	  		$q->whereUserId(Session::get('user_id'));
	  		$q->whereRequestedUserId($user_id);
	  		$q->whereFriendStatus(1);
	  })->first();
	
	  	       	
	 $data['myphoto']=MyPhoto::where('user_id',$user_id)->get();
	 // dd($data['photo']);
	 $data['request']=UserRequest::where('user_id',Session::get('user_id'))->where('requested_user_id',$user_id)->first();

     $data['hideprofile']=HidePrifile::where('user_id',Session::get('user_id'))->where('hide_user_id',$user_id)->first();

	 $data['photo']=PhotoPermission::where('user_id',Session::get('user_id'))->where('permission_user_id',$user_id)->first();
	
	 $data['favourit']=FavouriteUser::where('user_id',Session::get('user_id'))->where('favourite_user_id',$user_id)->first();
	 $data['blockuser']=BlockUser::where('user_id',Session::get('user_id'))->where('block_user_id',$user_id)->first();
	  $data['invite']=InviteViewProfile::where('user_id',Session::get('user_id'))->where('inviteprofile_user_id',$user_id)->first();
			$data['user_data']=User::where('id',$user_id)->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->first();
			

                $gender=User::where('id',Session::get('user_id'))->first();
                if(!empty($gender))
                {


			 $data['recent']=User::where('gender','!=',$gender->gender)->where('id','<>',$user_id)->orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->limit(4)->get();
            // dd($data['recent']);
            $data['simlar']=User::where('gender','!=',$gender->gender)->where('id','<>',$user_id)->where(['country_id'=>$data['user_data']->country_id,'height'=>$data['user_data']->height,'language'=>$data['user_data']->language,'martial_status'=>$data['user_data']->martial_status])->where('id','<>',$user_id)->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->limit(4)->get();
            }

			
				$data['question']=Question::with('answer')->get();
                $data['answer']=Answer::with('question')->where('user_id',$user_id)->get();
              
              
			if($data['user_data']->country_id)
			{
				$data['country']=DB::table('countries')->where('country_id',$data['user_data']->country_id)->first();	
			}

			if($data['user_data']->city_id)
			{
				$data['city']=DB::table('cities')->where('city_id',$data['user_data']->city_id)->first();	
			}

			if($data['user_data']->present_country_id)
			{

			$data['presnt']=DB::table('countries')->where('country_id',$data['user_data']->present_country_id)->first();
			}
			if($data['user_data']->native_country_id)
			{
				$data['native_country']=DB::table('countries')->where('country_id',$data['user_data']->native_country_id)->first();	
			}
			if($data['user_data']->native_state_id)
			{
				$data['native_state']=DB::table('states')->where('state_id',$data['user_data']->native_state_id)->first();	
			}
			if($data['user_data']->native_city_id)
			{
				$data['native_city']=DB::table('cities')->where('city_id',$data['user_data']->native_city_id)->first();	
			}
			if($data['user_data']->living_country_id)
			{
				$data['living_country']=DB::table('countries')->where('country_id',$data['user_data']->living_country_id)->first();
			}
			
			$data['hijab']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Observes Hijab'])->get();

			 $data['hobbies']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Hobbies'])->get();

			  $data['has_children']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Has Children'])->get();
			   $data['pray']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Pray'])->get();
			    $data['sects']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Sects'])->get();
			     $data['living_with']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Living with'])->get();
			      $data['religious_history']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Religious History'])->get();
			       $data['residency_status']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Residency Status'])->get();
			        $data['loking_body_type']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Body Type'])->get();
			        $data['loking_eating']=Loking::where(['user_id'=>$user_id,'loking_type'=>'eating type'])->get();

         $data['ethnic_origin']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Ethnic Origin'])->get();

         $data['loking_martial']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Marital Status'])->get();

          $data['loking_complexion']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Complexion'])->get();

          $data['other_language']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Other language'])->get();
          $data['loking_other_language']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Partner other language'])->get();

          $data['africa']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Africa'])->get();
           $data['antarctica']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Antarctica'])->get();

            $data['asia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Asia'])->get();

             $data['europe']=Loking::where(['user_id'=>$user_id,'loking_type'=>'Europe'])->get();
              $data['north_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'North America'])->get();

              $data['australasia']=Loking::where(['user_id'=>$user_id,'loking_type'=>'North Australasia'])->get();

              $data['south_america']=Loking::where(['user_id'=>$user_id,'loking_type'=>'South America'])->get();

              $data['living_state']=Loking::where(['user_id'=>$user_id,'loking_type'=>'states'])->join('states','states.state_id','lokings.loking_value')->get();
              $data['living_cities']=Loking::where(['user_id'=>$user_id,'loking_type'=>'cities'])->join('cities','cities.city_id','=','lokings.loking_value')->get();
              $data['allcountry']=DB::table('countries')->get();
              $data['title']='Public Profile';
			       return view('user/public-profile',$data);
            
			
			
		}
		public function get_user_profile($user_id)
		{
		
		 $data['country'] = DB::table('countries')->get();
		$data['user_data']=User::find($user_id);
		$data['state'] = DB::table('states')->where('country_id',$data['user_data']->country_id)->get();
       $data['cities'] = DB::table('cities')->where('state_id',$data['user_data']->state_id)->get();
		// dd($data);
		$data['title']='Edit profile';
		 return view('user/edit-profile',$data);


		}
	public function assisted_service()
	{
		$data['title']='assisted Service';
		 return view('user/assisted-service');

	}
  Public function add_assisted(Request $request)
  {
    $messages = array(
       
          'fullname.required' => 'You must enter name!',
          'email.required' => 'You must enter email',
          'phonenumber.required' => 'You must enter phone number', 
           'presentlocation.required' => 'You must enter present location',
            'email.unique' => 'Email address already exist',


          
         );
         $rules = array(
        'email' => 'bail|required|unique:assisteds,email',
         'fullname' => 'bail|required|max:25|min:3',
         'phonenumber' => 'required',
         'presentlocation' => 'required',
        
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
             return redirect()->back()->withInput()->withErrors($validator);
        
          }
    $assisted=new Assisted();
    $assisted->fullname=$request->fullname;
    $assisted->email=$request->email;
    $assisted->phonenumber=$request->phonenumber;
    $assisted->presentlocation=$request->presentlocation;
    $assisted->save();
    if($assisted)
    {
       Session::flash('success', 'Your information has been submit !'); 
      return back();
    }
    else
    {
      Session::flash('error', 'invalid input !'); 
      return back();
    }

  }
	
  public function payment()
  {

     $data['title']='Payment method';
         return view('user/payment',$data);
  }
	public function find_exact_match()
	{
		
		
		// $user_id=Session::get('user_id');
		// $user=User::find($user_id);

		// if($user->gender=='Female')
		// {
		//  $data['user_data']=User::where('id','<>',$user_id)->where('age',$user->age)->where('qualification',$user->qualification)->where('gender','Male')->where('religious_type',$user->religious_type)->where('skin_color',$user->skin_color)->where('loking_language',$user->loking_language)->where('loking_education',$user->loking_education)->where('loking_job',$user->loking_job)->where('loking_skin_color',$user->loking_skin_color)->where('pray',$user->pray)
		//    ->where('martial_status',$user->martial_status)->where('users.country_id',$user->country_id)->where('users.city_id',$user->city_id)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');

		   
		
		//  }
		// else
		// {
		// 	 $data['user_data']=User::where('id','<>',$user_id)->where('age',$user->age)->where('qualification',$user->qualification)->where('gender','Female')->where('religious_type',$user->religious_type)->where('skin_color',$user->skin_color)->where('loking_language',$user->loking_language)->where('loking_education',$user->loking_education)->where('loking_job',$user->loking_job)->where('loking_skin_color',$user->loking_skin_color)->where('pray',$user->pray)
		//      ->where('martial_status',$user->martial_status)->where('users.country_id',$user->country_id)->where('users.city_id',$user->city_id)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');

  //   }



		//    $data['country']=DB::table('countries')->get();
		//    $data['search'] = 'user-search';
		//   $data['search']='who';
  //     $data['save_search']=url()->current();
		//   $data['title']='Find exact match';
		//  return view('user/user-search',$data); 

     $gender=User::where('id',Session::get('user_id'))->first();
        if(!empty($gender))
        {
            $data['recent']=User::where('gender','!=',$gender->gender)->where('id','<>',Session::get('user_id'))->orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->limit(4)->get();
        }
        else
        {
            $data['recent']=User::orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->limit(4)->get();
        }
    $data['country']=DB::table('countries')->get();
     $data['title']='Advance Search'; 
    return view('user/advance-profile',$data);
	
	}

public function make_profile_image($image_id)
{
	 $user_id =Session::get('user_id');
	 $photo=MyPhoto::where('user_id',$user_id)->update(['dp_status'=>0]);
	 $photo=MyPhoto::where('user_id',$user_id)->where('photo_id',$image_id)->update(['dp_status'=>1]);

	 	if($photo)
	 	{
	 		Session::flash('success', 'Your profile image has been change !'); 

			return back();
	 	}
	 	else
	 	{
	 		Session::flash('error', 'invalid input!'); 

		
	       return back();
	 	}
}

	public function delete_favourite_user($favourite_id)
	{
		
	    $user_id =Session::get('user_id');
		$favourite_list=FavouriteUser::where('favourite_user_id',$favourite_id)->where('user_id',$user_id)->delete();
		$ActivityLog=new ActivityLog();
		$ActivityLog->user_id=$user_id;
		$ActivityLog->activity_user_id=$favourite_id;
		$ActivityLog->activity='Delete to favourite list';
		$ActivityLog->save();
		 $notification=new Notification();
				$notification->sender_id=Session::get('user_id');
				$notification->receiver_id=$favourite_id;
				$notification->notification_type='Remove you from favourite list';
				$notification->save();
		if($favourite_list)
		{

			Session::flash('success', 'Remove from Favourite !'); 

			return back();
		}
	 
		else
		{
			Session::flash('error', 'invalid !'); 

			return back();
		}
     	
	}
	public function favourite_user($favourit_id)
	{
		$user_id =Session::get('user_id');
		$favourite_list=FavouriteUser::where('favourite_user_id',$favourit_id)->where('user_id',$user_id)->first();
		if(empty($favourite_list))
		{

			$active_user=BlockUser::where('block_user_id',$favourit_id)->where('user_id',$user_id)->first();
		if($active_user)
		{
			Session::flash('error', 'Kindly unblock this user before add favourite list !'); 

			return back();
		}
		$favourite=new FavouriteUser();
		$favourite->favourite_user_id=$favourit_id;
		$favourite->user_id=$user_id;
		$favourite->save();
		       $notification=new Notification();
				$notification->sender_id=Session::get('user_id');
				$notification->receiver_id=$favourit_id;
				$notification->notification_type='Add you favourite list';
				$notification->save();	
		$ActivityLog=new ActivityLog();
		$ActivityLog->user_id=$user_id;
		$ActivityLog->activity_user_id=$favourit_id;
		$ActivityLog->activity='Add to favourite list';
		$ActivityLog->save();
		if($favourite)
		{

			
			Session::flash('success', 'Add to favourite!'); 

			return back();
		}
	 }
		else
		{
			Session::flash('error', 'invalid !'); 

			return back();
		}
	}
	public function photo_permission($permission_id)
	{
		
		$user_id =Session::get('user_id');
		$permission=PhotoPermission::where('permission_user_id',$permission_id)->where('user_id',$user_id)->first();
		if(empty($permission))
		{

		$active_user=BlockUser::where('block_user_id',$permission_id)->where('user_id',$user_id)->first();
		if($active_user)
		{
			Session::flash('error', 'Kindly unblock this user before send photo permission request !'); 

			return back();
		}

		$PhotoPermission=new PhotoPermission();
		$PhotoPermission->permission_user_id=$permission_id;
		$PhotoPermission->user_id=$user_id;
		$PhotoPermission->status=0;
		$PhotoPermission->save();
		         $notification=new Notification();
				$notification->sender_id=Session::get('user_id');
				$notification->receiver_id=$permission_id;
				$notification->notification_type='Send you photo permission request';
				$notification->save();
		$ActivityLog=new ActivityLog();
		$ActivityLog->user_id=$user_id;
		$ActivityLog->activity_user_id=$permission_id;
		$ActivityLog->activity='send photo permission request';
		$ActivityLog->save();

		$email_setting=EmailPerferance::where('user_id',$permission_id)->first();
		if(!empty($email_setting))
		{
		if($email_setting->photo_request_status==1)
		{
		$data['user_date']=User::find($permission_id);
		$data['sender_user']=User::find(Session::get('user_id'));
		 $result=\Mail::send('emails.photo_permission', $data , function($message) use ($data)
	  		  {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Photo Permission Request');
              });
		}

		if($PhotoPermission)
		{

			
			Session::flash('success', 'Your request has been submited successfully !'); 

			return back();
		}
	 }
		else
		{
			Session::flash('error', 'invalid!'); 

			return back();
		}
			
	}
}
	public function question_category(Request $request)
	{
		$category=$request->category;
    if($category)
    {

		$category_question=Question::where('question_category_id',$category)->get();
    }
    else
    {
     $category_question=Question::all(); 
    }
		foreach ($category_question as $value)
		 {
	  	
	  	
	 echo '<div class="row lin"><div class="col-sm-9" style="padding:10px;">'. $value->question.'</div><div class="col-sm-3"> <p class="q_ges"><a href="'.url("add-question/$value->question_id").'" class="btn pull-right">Add</a></p></div></div>';
		}
	}
	public function remove_question($question_id)
	{
		AddQuestion::where('add_question_id',$question_id)->delete();
		return back();
	}
	public function add_question($question_id)
	{
		$question=new AddQuestion();
		$user_id=Session::get('user_id');
		$question->user_id=$user_id;
		$question->fk_question_id=$question_id;
		$question->save();
		return back();
		
	}
	public function question()
	{
		$user_id=Session::get('user_id');
		$result=User::find($user_id);
		$data['user_data']=$result;
		$data['question']=DB::select('SELECT * FROM questions WHERE NOT EXISTS (SELECT * FROM addquestions WHERE addquestions.`fk_question_id`= questions.`question_id` AND addquestions.`user_id` ='.$user_id.')');
		$data['add_quest']=AddQuestion::with('addquestion')->where('user_id',$user_id)->get();
		// dd($data['add_quest']);
		$data['title']='My question';
		 return view('user/question',$data);
	}
    Public function addquestionlist($user_id)
    {
        $data['id']=$user_id;
        $data['questionlist']=AddQuestion::with('addquestion','addanswer')->where('user_id',$user_id)->get();

        // dd($data['questionlist']);
        // foreach ($data['questionlist'] as $key => $value) {
        //     foreach ($value->addanswer as $key => $row) {
        //         echo $row->answer. '<br>';
        //     }
        // }exit;
         $data['title']='Question list';
         return view('user/questionlist',$data);
  
    }



    Public function test(request $reques) 
    {
      $data['title']='user listing';
       return view('user/test',$data);
    }
    Public function send_answer(Request $request)
    {
       $addanswer=new \App\AddAnswer();
       $addanswer->answer=$request->answer;
       $addanswer->question_id=$request->question_id;
       $addanswer->user_id=$request->user_id;
       $addanswer->ans_user_id=Session::get('user_id');
       $addanswer->save();

    }
    Public function update_answer(Request $request)
    {
        $answer=Answer:: where('question_id',$request->question_id)->where('user_id',Session::get('user_id'))->first();
        $answer->user_answers=$request->user_answers;
        $answer->user_id=Session::get('user_id');
        $answer->question_id=$request->question_id;
        // dd($answer);
        $answer->save();
        return back();
    }
    Public function add_answer(Request $request)
    {
        $answer=new Answer();
        $answer->user_answers=$request->user_answers;
        $answer->user_id=Session::get('user_id');
        $answer->question_id=$request->question_id;
        // dd($answer);
        $answer->save();
        return back();
    }
    
	public function membership()
	{
		$user_id=Session::get('user_id');
		$result=User::find($user_id);
		$data['user_data']=$result;
		$data['title']='Membership';
		return view('user/membership',$data);
	}
	public function invite_friend()
	{
		$user_id=Session::get('user_id');
		$result=User::find($user_id);
		$data['user_data']=$result;
		
		 $data['title']='Invite friend';
		 return view('user/invite-friend',$data);
	}
	public function email_setting(Request $request)
	{
		$user_id=Session::get('user_id');
		$email_setting=EmailPerferance::where('user_id',$user_id)->first();
		$message_status=$request->message_status;
		$read_message_status=$request->read_message_status;

		$photo_request_status=$request->photo_request_status;
		$responce_photo_request_status=$request->responce_photo_request_status;
		$pure_matches_status=$request->pure_matches_status;
		$who_i_am_status=$request->who_i_am_status;
		$who_looking_status=$request->who_looking_status;

		$kaboolhai_notifaction_status=$request->kaboolhai_notifaction_status;

		if(empty($message_status))
		{
		 $email_setting->message_status=0;
		

		}
		else
		{
			$email_setting->message_status=1;
		}

		if(empty($read_message_status))
		{
		 $email_setting->read_message_status=0;
		

		}
		else
		{
			$email_setting->read_message_status=1;
		}

		if(empty($photo_request_status))
		{
		 $email_setting->photo_request_status=0;
		

		}
		else
		{
			$email_setting->photo_request_status=1;
		}
		if(empty($responce_photo_request_status))
		{
		 $email_setting->responce_photo_request_status=0;
		

		}
		else
		{
			$email_setting->responce_photo_request_status=1;
		}


		if(empty($pure_matches_status))
		{
		 $email_setting->pure_matches_status=0;
		

		}
		else
		{
			$email_setting->pure_matches_status=1;
		}

		if(empty($who_i_am_status))
		{
		 $email_setting->who_i_am_status=0;
		

		}
		else
		{
			$email_setting->who_i_am_status=1;
		}


		if(empty($who_looking_status))
		{
		 $email_setting->who_looking_status=0;
		

		}
		else
		{
			$email_setting->who_looking_status=1;
		}


		if(empty($kaboolhai_notifaction_status))
		{
		 $email_setting->kaboolhai_notifaction_status=0;
		

		}
		else
		{
			$email_setting->kaboolhai_notifaction_status=1;
		}

		 $email_setting->save();

		 Session::flash('success', 'Save Your Settings !'); 
           	    
		          return back();
		
	}
	public function email_prefrences()
	{
		
		$user_id=Session::get('user_id');
		$data['email_setting']=EmailPerferance::where('user_id',$user_id)->first();
		
		 $data['title']='Email prefrences';
		 return view('user/email-preferences',$data);
	}
	
	public function active_user($block_user_id)
	{
		
		$active_user=BlockUser::where('block_user_id',$block_user_id)->where('user_id',Session::get('user_id'))->delete();
		$ActivityLog=new ActivityLog();
		$ActivityLog->user_id=Session::get('user_id');
		$ActivityLog->activity_user_id=$block_user_id;
		$ActivityLog->activity='Active user';
		$ActivityLog->save();
		if($active_user)
		{
			Session::flash('success', 'Active this user !'); 
           	    
		          return back();
		  
		}
		else
		{
			Session::flash('error', 'invalid input !'); 
           	    
		          return back();
		}

	}
	

	public function invite_view_profile($inviteprofile_user_id){
		
		$user_id =Session::get('user_id');
		 $InviteViewProfile=new InviteViewProfile();
		$invite_user=InviteViewProfile::where('inviteprofile_user_id',$inviteprofile_user_id)->where('user_id',$user_id)->first();
		if(empty($invite_user))
		{
			$active_user=BlockUser::where('block_user_id',$inviteprofile_user_id)->where('user_id',$user_id)->first();
		if($active_user)
		{
			Session::flash('error', 'Kindly unblock this user before invite view profile !'); 

			return back();
		}
		$InviteViewProfile->inviteprofile_user_id=$inviteprofile_user_id;
		$InviteViewProfile->user_id=$user_id;
		$InviteViewProfile->status=0;
		$InviteViewProfile->save();
		$notification=new Notification();
				$notification->sender_id=Session::get('user_id');
				$notification->receiver_id=$inviteprofile_user_id;
				$notification->notification_type='Send you invite view my profile request';
				$notification->save();
		$ActivityLog=new ActivityLog();
		$ActivityLog->user_id=$user_id;
		$ActivityLog->activity_user_id=$inviteprofile_user_id;
		$ActivityLog->activity='invite view my profile';
		$ActivityLog->save();
		if($InviteViewProfile)
		{
			Session::flash('success', 'Your request invite view my profile !'); 

			return back();
		}
	 }
		else
		{
			Session::flash('error', 'invalid !'); 

			return back();
		}
		}
    Public function UAE()
    {
       $data['user_data']=User::where('users.country_id',229)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
       $data['country']=DB::table('countries')->get();
       $data['search'] = 'user-search';
       $data['save_search']=url()->current();
       $data['title']='UAE Muslim List';
      return view('user/user_listing',$data);  
    }
    Public function pakistani()
    {
      $data['user_data']=User::where('users.country_id',166)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
       $data['country']=DB::table('countries')->get();
       $data['search'] = 'user-search';
       $data['save_search']=url()->current();
       $data['title']='Pakistani Muslim List';
       return view('user/user_listing',$data);  
    }
    Public function United_Kingdom()
    {

      $data['user_data']=User::where('users.country_id',44)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
       $data['country']=DB::table('countries')->get();
       $data['search'] = 'user-search';
       $data['save_search']=url()->current();
       $data['title']='United Kingdom Muslim List';
      return view('user/user_listing',$data);  
    }

    Public function USA()
    {

      $data['user_data']=User::where('users.country_id',1)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
       $data['country']=DB::table('countries')->get();
       $data['search'] = 'user-search';
       $data['save_search']=url()->current();
       $data['title']='USA Muslim List';
       return view('user/user_listing',$data);  
    }
     Public function canada()
    {

      $data['user_data']=User::where('users.country_id',1)->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
       $data['country']=DB::table('countries')->get();
       $data['search'] = 'user-search';
       $data['save_search']=url()->current();
       $data['title']='CANADA Muslim List';
      return view('user/user_listing',$data);  
    }

	public function blocked_list()
	{
		
		$user_id=Session::get('user_id');
		 $data['user_data']=BlockUser::where('user_id',$user_id)->join('users','users.id','=','blockusers.block_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
       $data['save_search']=url()->current();
		   $data['title']='Block user list';
		  return view('user/user_listing',$data);	
	}

  public function invite_view_profile_list()
  {
    
    $user_id=Session::get('user_id');
     $data['user_data']=InviteViewProfile::where('user_id',$user_id)->join('users','users.id','=','inviteviewprofiles.inviteprofile_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
       $data['country']=DB::table('countries')->get();
       $data['search'] = 'user-search';
       $data['save_search']=url()->current();
       $data['title']='Invite view profile user list';
      return view('user/user_listing',$data);   
  }
  Public function recent_join()
  {
    $user_id=Session::get('user_id');
    $data['user_data']=User::join('countries','countries.country_id','=','users.country_id')->join('states','states.state_id','users.state_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
     $data['title']='Recent join';
       return view('user/user_listing',$data);
  }
	public function friend_list()
	{
		$user_id=Session::get('user_id');
	  $data['user_data']=UserRequest::where('requested_user_id',$user_id)->where('friend_status',1)->join('users','users.id','=','usersrequets.user_id')->join('countries','countries.country_id','=','users.country_id')->join('states','states.state_id','users.state_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
	   $data['title']='Friend user list';
		   return view('user/user_listing',$data);  
		
	}
	public function block_user($block_id)
	{
		
		$block=new BlockUser();
		$user_id =Session::get('user_id');
		$active_user=BlockUser::where('block_user_id',$block_id)->where('user_id',$user_id)->first();
		if(empty($active_user))
		{

		$block->block_user_id=$block_id;
		$block->user_id=$user_id;
		$block->save();
		$ActivityLog=new ActivityLog();
		$ActivityLog->user_id=$user_id;
		$ActivityLog->activity_user_id=$block_id;
		$ActivityLog->activity='Block user';
		$ActivityLog->save();
		if($block)
		{
			Session::flash('success', 'Block this user !'); 

			return back();
		}
	 }
		else
		{
			Session::flash('error', 'invalid!'); 

			return back();
		}


	}
	
	

	public function view_send_request()
{
	
		 $user_id=Session::get('user_id');
		 $data['user_data']=UserRequest::where('user_id',$user_id)->join('users','users.id','=','usersrequets.requested_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		 
		   $data['title']='View send request';
		  return view('user/user_listing',$data);	
		    
}

public function photo_permission_list()
{
	$user_id=Session::get('user_id');
    $data['user_data']=PhotoPermission::where('user_id',$user_id)->join('users','users.id','=','phptopermissions.permission_user_id','left')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		     $data['title']='Photo Permission List';
		  return view('user/user_listing',$data);
}
Public function remove_user($user_id,$url)
{
  // echo $url;die();
    if($url=='Friend user list')
    {
      $friend=UserRequest::where('requested_user_id',Session::get('user_id'))->where('user_id',$user_id)->delete();
     
    }
    elseif ($url=='Favourite user list') 
    {
      FavouriteUser::where('favourite_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }
     elseif ($url=='Block user list') 
    {
      BlockUser::where('block_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }
    elseif ($url=='Hide user list') 
    {
      HidePrifile::where('hide_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }
     elseif ($url=='I view profile list') 
    {
      MyProfileViewed::where('myprofile_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }

    elseif ($url=='View send request') 
    {
      UserRequest::where('requested_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }


    elseif ($url=='Invite view profile user list') 
    {
      InviteViewProfile::where('inviteprofile_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }

     elseif ($url=='Photo Permission List') 
    {
      PhotoPermission::where('permission_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }

       elseif ($url=='Friend Request reject list') 
    {
      DeleteRequest::where('delete_user_id',$user_id)->where('user_id',Session::get('user_id'))->delete();
    }
  

    
    
    return back();
}
public function friend_delete_list()
{
	$user_id=Session::get('user_id');
		 $data['user_data']=DeleteRequest::where('user_id',$user_id)->join('users','users.id','=','deleterequests.delete_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
       $data['save_search']=url()->current();
		    $data['title']='Friend Request reject list';
		    return view('user/user_listing',$data);  
}

public function favourite_list()
{
	$user_id=Session::get('user_id');
		 $data['user_data']=FavouriteUser::where('user_id',$user_id)->join('users','users.id','=','favouriteusers.favourite_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
       $data['save_search']=url()->current();
		   $data['title']='Favourite user list';
		     return view('user/user_listing',$data);  
}

public function myprofileview_list()
	{
		
		
		
	      $user_id=Session::get('user_id');
		  $data['user_data']=MyProfileViewed::where('myprofile_user_id',$user_id)->join('users','users.id','=','myprofileviewds.myprofile_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
       $data['save_search']=url()->current();
		   $data['title']='My view profile list';
		     return view('user/user_listing',$data);  
	}

public function iprofileview_list()
	{
		
		

	  $user_id=Session::get('user_id');
		  $data['user_data']=MyProfileViewed::where('user_id',$user_id)->join('users','users.id','=','myprofileviewds.myprofile_user_id')->join('countries','countries.country_id','=','users.country_id')->join('cities','cities.city_id','users.city_id')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->orderBy('users.id','desc')->paginate('12');
		   $data['country']=DB::table('countries')->get();
		   $data['search'] = 'user-search';
       $data['save_search']=url()->current();
		    $data['title']='I view profile list';
		    return view('user/user_listing',$data);  
	}


	public function photo_setting(Request $request)
	{
		$permission=$request->permission;
		if($permission)
		{
			DB::table('phptopermissions')->where('permission_user_id',Session::get('user_id'))->update(['status' => 0]);

		foreach ($permission as $value)
		 {
			$permissions=PhotoPermission::where('user_id',$value)->where('permission_user_id',Session::get('user_id'))->first();
			$permissions->status=1;
			$permissions->save();
			
		}
		if($permissions)
			{
				 Session::flash('success', 'Your photo permission setting complete'); 
		          return back();
			}
			else
				Session::flash('error', 'invalid input'); 
           	    
		          return back();

		 }
		else
		{
			DB::table('phptopermissions')->where('permission_user_id',Session::get('user_id'))->update(['status' => 0]);
			return back();
			
		}
	}
	public function my_photo()
	{
		
		
		$user_id=Session::get('user_id');
		$result=User::find($user_id);
		$pho=MyPhoto::where('user_id',$user_id)->where('dp_status',0)->get();
		$data['permission']=PhotoPermission::with('user')->where('permission_user_id',$user_id)->get();
		
		$data['photo']=$pho;
		$data['user_data']=$result; 
		 $data['title']='My Photo';  
	    return view('user/my-photo',$data);
	}
	public function add_photo(Request $request)
	{
		
		
		
			$count=MyPhoto::where('user_id',Session::get('user_id'))->count();
			if($count <20)
			{

          $messages = array(
       
          'image_name.required' => 'Please select image',
         
         );
         $rules = array(
        'image_name' => 'required|max:10000|mimes:jpeg,jpg,gif,png,bmp',
        
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {

              return redirect()->back()->withErrors($validator->errors());
          }


		 	 $image = $request->file('image_name');
		 	 if($image){
            $destinationPath = public_path(). '/user_assets/my_photo/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);

            if(!empty($img))
            {
            	$user=new MyPhoto();
            	$user->image=$locationimage;
            	$user->user_id=Session::get('user_id');
            	if(!empty($count))
            	{
            		$user->dp_status=0;
              }
              else
              {
                $user->dp_status=1;
            	}
            	$user->save();
           	    
           	    if(!empty($user))
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
		  else
		    {
		    	Session::flash('error', 'Please select the image!'); 
           	    
		          return back();
		    }
		}
		    else
		    {
		    	Session::flash('error', 'Not allowed more then 20 images!'); 
           	    
		          return back();	
		    }

		 // return view('user/my-photo',$data);
	}
	public function delete_photo($image_id)
	{	$delete=MyPhoto::where('photo_id',$image_id)->first();
	if($delete)
	{
		$pho=MyPhoto::where('photo_id',$image_id)->delete();
		unlink('public/user_assets/my_photo/'.$delete->image);
	}
		return back();
	} 
	
	public function sent_items()
	{
		
		
		
		 $user_id=Session::get('user_id');
		
		$data['inbox']=chats::with('to_users','to_photo')->where('from_user',$user_id)->orderBy('chats.id','desc')->get();
		// dd($data['notification']);
		 $data['title']='Send Item'; 
		 return view('user/inbox',$data);
	}
	public function inbox()
	{
		
		
		$user_id=Session::get('user_id');
		
		$data['inbox']=chats::with('from_users','photo')->where('to_user',$user_id)->orderBy('chats.id','desc')->get();
		// dd($data['notification']);
		 $data['title']='Inbox'; 
		 return view('user/inbox',$data);
	}

		public function advance_search()
	{
        $gender=User::where('id',Session::get('user_id'))->first();
        if(!empty($gender))
        {
            $data['recent']=User::where('gender','!=',$gender->gender)->where('id','<>',Session::get('user_id'))->orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->limit(4)->get();
        }
        else
        {
            $data['recent']=User::orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->limit(4)->get();
        }
		$data['country']=DB::table('countries')->get();
		 $data['title']='Advance Search'; 
	  return view('user/advance-profile',$data);
		 
			
		}

	
	
	function distinctive()
	{
		
		 
		
		 $data['title']='Distinctive'; 
		return view('user/distinctive',$data);	
	}
	public function our_partnar()
	{
		$data['title']='Our partnar'; 
		return view('user/our-partnar',$data);
	}

	
  
	public function register()
	{
		if(Session::get('user_id'))
		{
			
			return redirect('dashboard');


			
		}
		
		$data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');	
		$data['country'] = DB::table('countries')->get();
     $data['recent']=User::orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->limit(3)->get();
    // dd($data['recent']);
		$data['title']='Register'; 

		return view('user/register_step_1',$data);
		
	}
	public function get_email(Request $request)
	{
		$email=$request->email;
		$result= DB::table('users')
                    ->where('email',$email)
                     ->where('is_admin','0')
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
		if(Session::get('user_id'))
		{
			return redirect('dashboard');	
		}
		$data['fname']=$request->fname;
		$data['lname']=$request->lname;
		$data['email']=$request->email;
		$data['gender']=$request->gender;
		$data['country'] = DB::table('countries')->get();
		$data['title']='Signup'; 
    $data['recent']=User::orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->limit(4)->get();
		return view('user/register_step_1',$data);
	}
	public function get_state(Request $request)
	{
		
		$obj = new User_controller();
		$country_id=$request->country_id;
		$code_flage=DB::table('countries')->where('country_id',$country_id)->first();
	
		$data['state']= DB::table('states')
		                    ->where('country_id',$country_id)
		                    ->get();
		$states = '';
        foreach ($data['state'] as $key => $value) 
        {
          if($key==0)
          {
            $states .= '<option value=""> Please Select State </option>';  
          }
        	$states .= '<option value="'. $value->state_id . '">' . $value->state_name . '</option>';
        }
        $obj->states = $states;
        $obj->code = '+'.$code_flage->phonecode;
        $obj->flag = strtolower($code_flage->sortname . '.png');

		
		echo json_encode($obj);




		


	}
	public function manage_profiles($user)

	{
		
		$data['state']= DB::table($user)->get();
		
		// $update = [['cnic' => 'null'],['ssn' => 'null']];
		$update=['country_name' => 'null','phonecode' => '0','sortname'=>'ee'];
		
		foreach ($data['state'] as $value)
		 {
		 	
		   
           $data['state']= DB::table($user)->where('country_id',$value->country_id)->update($update);
		 }

	}

	public function get_living_state(Request $request)
	{
		
		$obj = new User_controller();
		$country_id=$request->country_id;
		$data['state']= DB::table('states')
		                    ->where('country_id',$country_id)
		                    ->get();
		                 
		
		?>

        	 <li class="row" class="listtopmarg">

        	 	<?php
        foreach ($data['state'] as $key => $value) 
        {


        	
        	?>
        	 <div class="col-6">
                 <div class="form-group label_style">
                <input type="checkbox" onchange="state_change(this)" name="living_state_id[]" value="<?= $value->state_id ?>" > <?= $value->state_name ?>
            </div>
        </div>
        <?php
        }
        ?>
    </li>
    <?php
	}
	public function get_living_city(Request $request)
	{
		$state_id=$request->state_id;
		$city= DB::table('cities')
                    ->where('state_id',$state_id)
                    ->get();
                   
       ?>

        	 <li class="row" class="listtopmarg">

        	 	<?php
        foreach ($city as $key => $value) 
        {


        	?>
        	 <div class="col-6 elms<?= $state_id ?>">
                 <div class="form-group label_style">
                <input type="checkbox" name="living_city_id[]" value="<?= $value->city_id ?>" > <?= $value->city_name ?>
            </div>
        </div>
        <?php
        }
        ?>
    </li>
    <?php
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
	public function passport_verify(Request $passport)
	{		
			$user=User::find(Session::get('user_id'));
		    $image = $passport->file('image');
		    if(!empty($image))
		    {
            $destinationPath = public_path(). '/user_assets/verify_image/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);
            if(!empty($img))
            {
            	$user->verify_file=$locationimage;
            	
            	
           	    $result=$user->save();
           	    if(!empty($result))
           	    {
           	     Session::flash('success', 'Your are verified!'); 
           	    
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

	}
	public function subscribe(Request $request)
	{
		$subscribe=Subscribe::where('email',$request->email)->first();
		// dd($subscribe);
		if($subscribe)
			{
				 Session::flash('error', 'This Email already subscribe!'); 
		         return back();
				
			}

		$subscribe=new Subscribe();
		$subscribe->user_id=Session::get('user_id');
		$subscribe->email=$request->email;
		$subscribe->save();
		Session::flash('success', 'You are successfully subscribe in Kaboolhai!'); 
		         return back();

	}
	public function email_verify()
	{

		$user_id=Session::get('user_id');
		$user=User::find($user_id);
		$data['user_date']=$user;
		$result=\Mail::send('emails.verify', $data , function($message) use ($data)
	  		  {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Verify code');
              });
		if(empty($result))
		{
			Session::flash('success', 'Verification link send your '. $user->email .' email please click on link');
			return back();
		}
		else
		{
			Session::flash('error', 'invalid input');
			return back();
		}
	}


	public function email_verified()
	{

		$user_id=Session::get('user_id');
		$user=User::find($user_id);
		$user->email_status=1;
		$user->save();
        Session::put('user_id',$user->id);
        Session::put('firstname',$user->firstname);
        Session::put('lastname',$user->lastname);
        Session::put('email',$user->email);
        $data['user_data']=$user;     
       return redirect('dashboard');

	}

	public function verifies(Request $request)
	{

		
		$data['title']='verifies';
		$code=$request->verification_code;
		$result= DB::table('users')
                    ->where('verifycode', $code)
                     ->where('is_admin','0')->join('profile-image','users.profile_image','=','profile-image.image_id','left')
                    ->first();
                    // echo $result;
                    if($result)
                    {
                    	$user_id=$result->id;
                    	$user=User::find($user_id);
                    	$user->email_status=1;
                    	$user->save();
               Session::put('user_id',$result->id);
             Session::put('firstname',$result->firstname);
              Session::put('lastname',$result->lastname);
               Session::put('email',$result->email);
                $data['user_data']=$result;
               
               return redirect('dashboard');
              
                    }
                    else
                    {
                    	Session::flash('error', 'Don,t match verification code please try again'); 
                    	return back();
                    	// echo "false";
                         
                              
                     }
  }
  Public function view_verify()
  {
    if(Session::get('user_id'))
    { 
      return redirect('dashboard');   
    }
    $data['title']='Verification';
    $data['firstname']=Session::get('firstname');
    $data['firstname']=Session::get('firstname');
		return view('user/verify',$data);
  }
	public function verify(Request $request)
	{
		$code=$request->verification_code;

		$result= DB::table('users')
                    ->where('verifycode', $code)
                   
                    ->first();
                   

                    if($result)
                    {
                    	$user_id=$result->id;
                    	$user=User::find($user_id);
                    	$user->mobile_status=1;
                    	$user->save();
            
                    }
                    else
                    {
                    	
                    	echo "false";
                         
                              
                     }
		
	}

	public function update_num(Request $request)
	{
		$user_id=$request->user_id1;
		$num=User::find($user_id);

		$num->code=$request->code1;
		$num->phone_code=$request->phone_code1;
		$num->phone=$request->phone1;
		
	     $phone_code=$request->phone_code1;
	     $phone_code = strval(intval($phone_code));
	     $phone=$request->phone1;
	    
	     $change_phone=$phone_code.$phone;
		$num->mobile=$change_phone;
		$num->save();

		echo json_encode($num);


	}
	public function num_verified(Request $request)
	{
		$text=$request->mobile;
		$user_id=Session::get('user_id');
		$user=User::find($user_id);
		$varifiy=rand(9999,1111);
		
		if(substr($text , 0 , 1) == '+')
        {
            $text = substr($text, 1);
        }
        elseif(substr($text , 0 , 1) == '0')
        {
            $text = '92'.substr($text, 1);
        }
        elseif(substr($text , 0 , 1) == '3')
        {

            $text = '92'.substr($text, 0);   
        }
        if(substr($text, 0 , 2) == '92')
        {
        	$user->verifycode=$varifiy;
		    $user->mobile=$text;
		    $user->save();
        	$user_phone = array();
        	array_push($user_phone, $text);
           send_message('Your Kaboolhai verification 4 digit code:'.$varifiy, $user_phone);
        
            
		       echo 'true';
		   }
		   else
		   {
		   	echo "false";
		   }
		
	}
	public function resend()
	{
		$email=Session::get('email');
		$result=User::where('email',$email)->first();

			if($result)
			{

		    $code=$result->code;
		    $varifiy=$result->verifycode;
		    $phone_code=$result->phone_code;
		     $phone_code = strval(intval($phone_code));
		     $phone=$result->phone;
		     $change_code=str_replace('+', '', $code);
		     $change_phone=$change_code.$phone_code.$phone;
			 $user_phone = array();
           array_push($user_phone, $change_phone);
           send_message('Your Kaboolhai verification 4 digit code:'.$varifiy , $user_phone);
           echo "true";
       }
       else
       {
       	echo "false";
       }

	}
	

	public function user_register_step_1(Request $request)
	{
		if(Session::get('user_id'))
		{
			
			 return redirect('dashboard');


			
		}

		$messages = array(
       
          'firstname.required' => 'You must enter your first name',
          'lastname.required' => 'You must enter your surname',
          'user_name.required' => 'You must enter your username', 
           'password.required' => 'You must enter your password',
            'password_confirmation.required' => 'You must enter your confirm password',
           'email.required' => 'You must enter your email',
           'email.unique' => 'Email address already exist',
           'user_name.unique' => 'User name already exist',
            'password.confirmed' => 'Your passwords dont match please try again!',
           
          

           'gender.required' => 'You must state if you are male or female',
           'country_id.required' =>'You must enter your country name',
            'state_id.required' => 'You must enter your province name',
            'city_id.required' => 'You must enter your city name',
            'code2.required' => 'This Field is Required',
            'phone.required' => 'You must enter your mobile number',
            'phone.unique' => 'Your mobile number already exist',
             'phone_code.required' => 'This Field is Required',
             'day.required' => 'This Field is Required',
             'month.required' => 'This Field is Required',
            'year.required' => 'You must enter your date of birth',
         );
         $rules = array(
         'user_name' =>'bail|required|unique:users,user_name|max:8|min:3',
         'email' => 'bail|required|unique:users,email',
         'firstname' => 'bail|required|max:25|min:3',
         'lastname' => 'bail|required|max:25|min:3',
         
          'password' => 'bail|required|confirmed|min:3',
          'password_confirmation' => 'bail|required|min:3',
         'gender' => 'required',
         'country_id' => 'required',
         'state_id' => 'required',
         'city_id' => 'required',
         'code2' => 'required',
          'phone_code' => 'required',
         'phone' => 'bail|required|unique:users,phone',
         'day' => 'required',
         'month' => 'required',
         'year' => 'required',
        

         );
         	
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {

             $data['errors'] = $validator->errors()->getMessages();
             $data['feedback'] = 'false';
             return json_encode($data);
          }
          else
          {
		$user=new User();
		$user->firstname=$request->firstname;
		$user->lastname=$request->lastname;
		$user->user_name=$request->user_name;
		$user->email=$request->email;
		$passwords=$request->password;
		$enc_password=sha1($passwords);
		
		$user->password=$enc_password;
		$user->gender=$request->gender;
		$user->country_id=$request->country_id;
		$user->state_id=$request->state_id;
		$user->city_id=$request->city_id;
		$user->code=$request->code2;
		$user->phone_code=$request->phone_code;
		$user->phone=$request->phone;
		$user->day=$request->day;
		$user->month=$request->month;
		$user->year=$request->year;
		$dob=$request->year.'-'.$request->month.'-'.$request->day;
		if(!empty($dob))
		{
		$user->age=\Carbon\Carbon::parse($dob)->diff(\Carbon\Carbon::now())->format('%y');
         }
		$varifiy=rand(9999,1111);
		$user->verifycode=$varifiy;
			 $code=$request->code2;
			 $change_code=str_replace('+', '', $code);
		     $phone_code=$request->phone_code;
		     $phone_code = strval(intval($phone_code));
		     $phone=$request->phone;
		   
		     $change_phone=$change_code.$phone_code.$phone;
		     $user->mobile=$change_phone;
		// $data['gender']=$request->gender;
		  $user->save();
		   Session::put('gender',$user->gender);
	    Session::put('email',$user->email);
	    Session::put('firstname',$user->firstname);
	    Session::put('lastname',$user->lastname);
	    Session::put('country',$user->country_id);

		// 	if($request->country_id=='166')
		// 	{
		// 	 $code=$request->code2;
		// 	 // dd($code);
		//      $phone_code=$request->phone_code;
		//      $phone_code = strval(intval($phone_code));
		//      $phone=$request->phone;
		//      $change_code=str_replace('+', '', $code);
		//      $change_phone=$change_code.$phone_code.$phone;
		//      // dd($change_phone);
		// 	 $user_phone = array();
  //          array_push($user_phone, $change_phone);
  //          send_message('Your Kaboolhai verification 4 digit code:'.$varifiy , $user_phone);
  //          }
           	
		
		// else
		// {
			echo json_encode($user);
			// echo "false";
		// }
		}
	}

	public function oth()
	{
    // if(Session::get('user_id'))
    // {
      
    //    return redirect('dashboard'); 
    // }
		
		$data['fname']=Session::get('firstname');
		$data['lname']=Session::get('lastname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');
		$data['country']=Session::get('country');
    // dd($data['country']);
		$data['email']=Session::get('email');
		$data['title']='Oth';
		return view('user/oth',$data);
	}
   public function add_oth(Request $request)
   {
    $messages = array(
       
          'oth_1.required' => 'You must check I hereby testify that I only worship Allah and none other!',
          'oth_2.required' => 'You must check I testify that whatever information I have provided is true to my knowledge & I have truly explained who I am.',
          'oth_3.required' => 'You must check I understand that this website is meant for the serious and sacred relationship of Nikah and I am only seeking the candidates with this intention. ', 
           'oth_agreed.required' => 'You must check agrement',
            'pasport_no.required' => 'You must enter passport or cnic number',

          
         );
         $rules = array(
        'oth_1' =>'required',
         'oth_2' => 'required',
         'oth_3' => 'required',
          'pasport_no' =>'bail|required|min:13',
         'oth_agreed' => 'required',
        
         );
          
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
             return redirect()->back()->withInput()->withErrors($validator);
              // return redirect()->back()->withErrors($validator->errors());
          }

   	$data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');
   	 $data['email']=Session::get('email');
		$User_id=User::where('email',$data['email'])->first();
	    $oth=User::find($User_id->id);
		// $oth->cnic=$request->cnic;
		$oth->pasport_no=$request->pasport_no;

		 $image = $request->file('image');
		 if(!empty($image))
		 {
            $destinationPath = public_path(). '/user_assets/verify_image/';
            $locationimage = time().$image->getClientOriginalName();
            $img=$image->move($destinationPath, $locationimage);
            $oth->verify_file=$locationimage;
            // $oth->oth_status=1;       	    
            // $oth->save();
		       
		    }
		   
        $oth->oth_status=1;
        $oth->save();

		$data['oth']=$oth;
		  
		   $result=\Mail::send('emails.attached', $data , function($message) use ($data)
	  		  {
        			$pdf = PDF::loadView('pdf',$data);
	  		  	   // $pdf = PDF::loadView('layouts.factuur', array('factuur' => $factuur));
                   $message->to($data['email'])->from('Admin@kaboolhai.com' , 'Kaboolhai')->subject('Oth from Kaboolhai');
			       $message->attachData($pdf->output() , 'pdf.pdf');
              });
		 
		
   	         return redirect('register-step-2');
		
		

   }
   public function register_step_2()
   {
   		if(Session::get('user_id'))
		{
			
			return redirect('dashboard');


			
		}
    $data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');
		$data['country'] = DB::table('countries')->get();
		$data['title']='Register Step 2';
    $data['recent']=User::orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->limit(4)->get();
		return view('user/register_step_2',$data);
   }
   public function prev_register_step_2()
	{
		$data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');
		$data['country'] = DB::table('countries')->get();
		$data['mimage'] = DB::table('profile-image')->where('gender_id',1)->get();

		$data['fimage'] = DB::table('profile-image')->where('gender_id',0)->get();
		$data['title']='prev register step 2';
		 return view('user/register_step_2',$data);
	}
public function user_register_step_2(Request $request)
{
	if(Session::get('user_id'))
		{
			
			return redirect('dashboard');

			
		}
	$messages = array(
       
         //  'word_1.required' => 'You must enter first word',
         //  'word_2.required' => 'You must enter second word',
			//  'word_3.required' => 'You must enter third word', 
				'word_1.required' => 'You must enter all three words',			
           'pray.required' => 'You must select your perform namaz',
           'profile_created.required' => 'You must enter profile created for',
           'gardian_name.required' =>'You must enter your guardian name',
            'gardian_number.required' => 'You must enter your guardian number',
            'language.required' => 'You must select your language',
            'martial_status.required' => 'You must enter martial status',
            
             'body_type.required' => 'You must checked your body type',
            //  'height.required' => 'You must select your height',
				//  'weight.required' => 'You must select your weight',
				'height.required' => 'You must select your height and weight',				
            'sect_are.required' => 'You must select your Allegiance to Islamic Origin',
            'ethnic_type.required' => 'You must enter your ethnic origen',
            'qualification.required' => 'You must enter Education',
            'edu_detail.required' => 'You must enter your education detail',
             'job.required' => 'You must enter your occupation',
             'occupation_detail.required' => 'You must enter your occupation detail',
             'present_country_id.required' => 'You must select your present country',
            'a_income.required' => 'You must select your Annual Income',


             'native_country_id.required' => 'You must select your native country',
            'native_state_id.required' => 'You must select Native state',
            'native_city_id.required' => 'You must select Native city',
            'agreed.required' => 'You must check agrement',

            
         );
         $rules = array(
       'word_1' =>'required',
         // 'word_2' => 'required',
         // 'word_3' => 'required',
         'pray' => 'required',
         'profile_created' => 'required',
         'gardian_name' => 'required',
         'gardian_number' => 'required',
         'language' => 'required',
         'martial_status' => 'required',
          
         'body_type' => 'required',
         'height' => 'required',
         // 'weight' => 'required',
         'sect_are' => 'required',
         'ethnic_type' => 'required',
          'qualification' => 'required',
         'edu_detail' => 'required',
         'job' => 'required',
         'occupation_detail' => 'required',
         'a_income' => 'required',
         'present_country_id' => 'required',
         'native_country_id' => 'required',
         'native_state_id' => 'required',
          'native_city_id' => 'required',
          'agreed' => 'required',
          
        

         );
         	
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
            // dd($validator);
             return redirect()->back()->withInput()->withErrors($validator);
            
          }




	    $data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');
		$data['country'] = DB::table('countries')->get();
		 $result=User::where('email',$data['email'])->first();
		 $user=User::find($result->id);
			
		$user->postal_code=$request->postal_code;
		$user->word_1=$request->word_1;
		$user->word_2=$request->word_2;
		$user->word_3=$request->word_3;
		$user->word_3=$request->word_3;
		$user->profile_created=$request->profile_created;
		$user->gardian_name=$request->gardian_name;
        $user->gardian_number=$request->gardian_number;
        $user->language=$request->language;
        $user->cast=$request->cast;
        if($request->other_caste)
        {
        	$user->cast=$request->other_caste;
        }
		$user->clan=$request->clan;
		$user->martial_status=$request->martial_status;
		$user->marige_type=$request->marige_type;
		$user->have_chiled=$request->have_chiled;
		$user->how_many=$request->how_many;
		$user->skin_color=$request->skin_color;
		$user->disabilty=$request->disabilty;
		$user->disabilty_type=$request->disabilty_type;
		$user->physical_status=$request->physical_status;
		if($request->other_physcial_status)
		{
			$user->physical_status=$request->other_physcial_status;
		}
		
		$user->bread=$request->bread;
		$user->body_type=$request->body_type;
		$user->height=$request->height;
		$user->weight=$request->weight;
		$user->sect_are=$request->sect_are;
		$user->religious_type=$request->religious_type;
		$user->religiousness=$request->religiousness;
		$user->pray=$request->pray;
		$user->read_quran=$request->read_quran;
		$user->attend_religious_service=$request->attend_religious_service;
		$user->ethnic_type=$request->ethnic_type;
		$user->qualification=$request->qualification;
		 $user->edu_detail=$request->edu_detail;
		$job_type=$request->job;
		if($job_type)
		{

		 $user->job=$request->job;
		}
		else
		{
			$user->job=$request->user_other_job;	
		}
		$user->occupation_detail=$request->occupation_detail;
		$user->a_income=$request->a_income;
		$user->present_country_id=$request->present_country_id;
	
		$user->native_country_id=$request->native_country_id;
		$user->native_state_id=$request->native_state_id;
		$user->native_city_id=$request->native_city_id;
		$user->convenient_time=$request->convenient_time;
		$user->contact_person=$request->contact_person;
		$user->full_address=$request->full_address;
		$user->blood_group=$request->blood_group;
		$user->diet=$request->diet;
		$user->smoking=$request->smoking;
		$user->thelisimia=$request->thelisimia;
		$user->diseace=$request->diseace;
		$user->diseace_type=$request->diseace_type;
		 $user->how_did=$request->how_did;
		$user->agreed=$request->agreed;
		$user->present_city=$request->present_city;
		$user->save();

		$hobbies_type=$request->hobbies_type;
		Loking::where('user_id',$user->id)->where('loking_type','hobbies')->delete();
     // dd($hobbies_type);
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

		$other_hobbies=$request->other_hobbies_type;
		Loking::where('user_id',$user->id)->where('loking_type','hobbies')->delete();
     if($other_hobbies)
     {
       		
		  	$other_hobbies_type=new Loking();
 

            $other_hobbies_type->loking_type=$request->hobbies;
		  	$other_hobbies_type->loking_value=$other_hobbies;
		  	$other_hobbies_type->user_id=$user->id;
		  	$other_hobbies_type->save();
		}
		$add_other_language=$request->add_other_language;
		Loking::where('user_id',$user->id)->where('loking_type','Other language')->delete();
		 if($add_other_language)
     {
		// dd($add_other_language);
        foreach ($add_other_language as $value)
		   {
		   	
		  	$add_other_language=new Loking();
            $add_other_language->loking_type=$request->other_language;
		  	$add_other_language->loking_value=$value;
		  	$add_other_language->user_id=$user->id;
		  
		  	$add_other_language->save();
		   }
		}
		$mar_type=$request->mar_type;
		Loking::where('user_id',$user->id)->where('loking_type','Marital Status')->delete();
		if($mar_type)
     {
        foreach ($mar_type as $value)
		   {
		   	
		  	$mar_type=new Loking();
            $mar_type->loking_type=$request->mart_status;
		  	$mar_type->loking_value=$value;
		  	$mar_type->user_id=$user->id;
		  	$mar_type->save();
		   }
		}
		$edit_id=$request->edit_id;
		if($edit_id)
		{
			$data['living_state'] = DB::table('states')->where('country_id',$user->living_country_id)->get();

		$data['edit_living_state'] = Loking::where('user_id',$user->id)->where('loking_type','states')->get();

$data['living_cities'] = Loking::where('user_id',$user->id)->where('loking_type','cities')->join('cities','cities.city_id','=','lokings.loking_value')->get();
	
	// 	$data['living_cities']=array();
 // foreach ($data['edit_living_state'] as $value) 
 //  {
 //          $trmp_city = City::where('state_id',$value->loking_value)->get();
 //         array_push($data['living_cities'],$trmp_city) ;
 //  }
 
		
       	

        $data['hobbies']=Loking::where(['user_id'=>$user->id,'loking_type'=>'hobbies'])->get();
         $data['loking_other_language']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Partner other language'])->get();

        $data['loking_marital']=Loking::where(['user_id'=>$user->id,'loking_type'=>'martial_status'])->get();

        $data['loking_eating']=Loking::where(['user_id'=>$user->id,'loking_type'=>'eating type'])->get();

         $data['africa']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Africa'])->get();
        $data['antarctica']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Antarctica'])->get();


         $data['north_america']=Loking::where(['user_id'=>$user->id,'loking_type'=>'North America'])->get();
        $data['australasia']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Australasia'])->get();
         $data['asia']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Asia'])->get();
        $data['europe']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Europe'])->get();



        $data['south_america']=Loking::where(['user_id'=>$user->id,'loking_type'=>'South America'])->get();
        $data['residency_status']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Residency Status'])->get();
         $data['ethnic_origin']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Ethnic Origin'])->get();
        $data['religious_history']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Religious History'])->get();



        $data['living_with']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Living with'])->get();
        $data['sects']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Sects'])->get();
         $data['pray']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Pray'])->get();
        $data['has_children']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Has Children'])->get();



        $data['like_child']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Like to Have'])->get();
        $data['loking_body_type']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Body Type'])->get();
         $data['observes_hijab']=Loking::where(['user_id'=>$user->id,'loking_type'=>'Observes Hijab'])->get();
         $data['edit_user']=$user;
        return view('user/edit_register',$data);
		}
		else{
			return redirect('register-step-3');

	         
		}
	}

	public function register_step_3()
	{
		if(Session::get('user_id'))
		{
			
			return redirect('dashboard');


			
		}
		$data['title']='Register step 3';
		 $data['fname']=Session::get('fname');
		$data['lname']=Session::get('lname');
		$data['email']=Session::get('email');
		$data['gender']=Session::get('gender');
		$data['country'] = DB::table('countries')->get();
		$data['mimage'] = DB::table('profile-image')->where('gender_id',1)->get();

		$data['fimage'] = DB::table('profile-image')->where('gender_id',0)->get();
		 $result=User::where('email',$data['email'])->first();
		 $user=User::find($result->id);
     $data['recent']=User::orderBy('id', 'desc')->join('my_photos','my_photos.user_id','=','users.id','left')->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('countries','countries.country_id','=','users.country_id','left')->join('cities','cities.city_id','users.city_id','left')->limit(4)->get();
		 return view('user/register',$data);
	}
	public function register_user(Request $request)
	{			
		 
		if(Session::get('user_id'))
		{
			
			return redirect('dashboard');


			
		}
		$messages = array(
       
          
          'family_value.required' => 'You must enter family value',
          'family_type.required' => 'You must enter family type', 
           // 'loking_relocate.required' => 'You must select loking relocate',
           'finacial_status.required' => 'You must select finacial status',
           'assets.required' =>'You must select assets',
            
            'loking_age_to.required' => 'You must select loking age to',
            'loking_age_from.required' => 'You must select loking age from',
            'loking_language.required' => 'You must select looking language',
             'relocate.required' => 'You must select relocate',
             
         );
         $rules = array(
         'family_value' =>'required',
         'family_type' => 'required',
         // 'loking_relocate' => 'required',
         'finacial_status' => 'required',
         'assets' => 'required',
         'loking_age_to' => 'required',
         'loking_age_from' => 'required',
          'loking_language' => 'required',
         'relocate' => 'required',
         
         );
         	
         $validator = \Validator::make($request->all(), $rules , $messages);
          if ($validator->fails())
          {
              return redirect()->back()->withInput()->withErrors($validator);
          }



		$test_user_id=$request->test_user_id;
		
		
       $user_test=$request->email;
       $result=User::where('email',$user_test)->join('profile-image','users.profile_image','=','profile-image.image_id','left')->first();
		$user=User::find($result->id);
		$user->profile_image=$request->profile_image;
		$user->description=$request->description;
		$user->family_value=$request->family_value;
		$user->family_type=$request->family_type;
		$user->loking_relocate=$request->loking_relocate;
		$user->finacial_status=$request->finacial_status;
     $user->profile_status=1;
		$assets=$request->assets;
		if($assets)
		{

		$user->assets=$request->assets;
		}
		else
		{
			$user->assets=$request->other_assets;	
		}
		$user->father_detail=$request->father_detail;
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
		$user->relocate=$request->relocate;
		$user->reason_relocate=$request->reason_relocate;
		$user->employed_in=$request->employed_in;
		$user->family_detail=$request->family_detail;
    $user->loking_age_from=$request->loking_age_from;
		$user->loking_age_to=$request->loking_age_to;
	   $user->loking_height_to=$request->loking_height_to;
	    $user->loking_height_from=$request->loking_height_from;
	    $user->loking_language=$request->loking_language;
        $user->loking_weight_to=$request->loking_weight_to;
	    $user->loking_weight_form=$request->loking_weight_form;
	    
	    $user->loking_physcial_status=$request->loking_physcial_status;

       if($request->other_loking_physcial_status)
       {
       	$user->loking_physcial_status=$request->other_loking_physcial_status;
       }
      
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
     
        $user->loking_description=$request->loking_description;

        
          $user->login_status=1;
          ob_start();
          system('ipconfig /all');
          $mycom=ob_get_contents();
          ob_clean();
          $findme = "Physical";
          $pmac = strpos($mycom, $findme);
          $mac=substr($mycom,($pmac+36),17); 
          $user->mac_address=$mac;   
	    // $europe_country=$request->europe_country;
	    // dd($europe_country);
		// $varifiy=rand(9999,1111);
		// $user->verifycode=$varifiy;
		$user->save();
		// echo "Thanks for Register in Kaboolhai";
		// die();

// $user->hobbies=$request->hobbies;
        $living_state_id=$request->living_state_id;

        $living_city_id=$request->living_city_id;
   Loking::where('user_id',$user->id)->where('loking_type','states')->delete();
    if($living_state_id)
     {
        foreach ($living_state_id as $value)
		   {
		  	$living_state_id=new Loking();
            $living_state_id->loking_type='states';
		  	$living_state_id->loking_value=$value;
		  	$living_state_id->user_id=$user->id;
		  	$living_state_id->save();
		   }
		}
Loking::where('user_id',$user->id)->where('loking_type','cities')->delete();
 if($living_city_id)
     {
        foreach ($living_city_id as $value)
		   {
		  	$living_city_id=new Loking();
            $living_city_id->loking_type='cities';
		  	$living_city_id->loking_value=$value;
		  	$living_city_id->user_id=$user->id;
		  	$living_city_id->save();
		   }
		}

   $loking_skin_color=$request->loking_skin_color;
   Loking::where('user_id',$user->id)->where('loking_type','Complexion')->delete();
 if($loking_skin_color)
     {
        foreach ($loking_skin_color as $value)
		   {
		  	$loking_skin_color=new Loking();
            $loking_skin_color->loking_type=$request->complexion;
		  	$loking_skin_color->loking_value=$value;
		  	$loking_skin_color->user_id=$user->id;
		  	$loking_skin_color->save();
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

	$child_like=$request->child_like;
	Loking::where('user_id',$user->id)->where('loking_type','Like to Have')->delete();
     if($child_like)
     {
        foreach ($child_like as $value)
		   {
		  	$child_like=new Loking();
            $child_like->loking_type=$request->like_child;
		  	$child_like->loking_value=$value;
		  	$child_like->user_id=$user->id;
		  	$child_like->save();
		   }
		}		
     

       $loking_martial_status=$request->loking_martial_status;
       Loking::where('user_id',$user->id)->where('loking_type','martial_status')->delete();
       if($loking_martial_status)
       {
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
		   Loking::where('user_id',$user->id)->where('loking_type','eating type')->delete();
		   if($loking_eating_habits)
		   {
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
		    $residency_name=$request->residency_name;
		    Loking::where('user_id',$user->id)->where('loking_type','Residency Status')->delete();
		    if($residency_name)
		    {
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
		    Loking::where('user_id',$user->id)->where('loking_type','Ethnic Origin')->delete();
		    if($origin_name)
		    {
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
		    Loking::where('user_id',$user->id)->where('loking_type','Like to Have')->delete();
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
		   $hijab_time=$request->hijab_time;
		   Loking::where('user_id',$user->id)->where('loking_type','Observes Hijab')->delete();
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

		  
      $edit_id=$request->edit_id;
		if($edit_id)
       {
	         
               
               return redirect('dashboard');
          }
		

	
		if($test_user_id==1)
		{
			 $email=$request->email;
		     $password=$request->password;
			 $code=$request->code;
		     $phone_code=$request->phone_code;
		     $phone_code = strval(intval($phone_code));
		     $phone=$request->phone;
		     $change_code=str_replace('+', '', $code);
		     $change_phone=$change_code.$phone_code.$phone;
			 $user_phone = array();
           array_push($user_phone, $change_phone);
           send_message('Your Kaboolhai account detail Email:'.$email.' password '.$password , $user_phone);
			 Session::flash('success', 'Your user has been registerd successfuly'); 
           return back();
		}
		else
		{

			
			  $code=$request->code;
		     $phone_code=$request->phone_code;
		     $phone_code = strval(intval($phone_code));
		     $phone=$request->phone;
		     $change_code=str_replace('+', '', $code);
		     $change_phone=$change_code.$phone_code.$phone;
			 // $user_phone = array();
    //        array_push($user_phone, $change_phone);
    //        send_message('Your Kaboolhai verification 4 digit code:'.$varifiy , $user_phone);

		   // $data['verifycode']=$varifiy;

			if($result->mobile_status == 0)
			{
				
		   // $data['firstname']=$request->firstname;
		   // $data['lastname']=$request->lastname;
		   // $data['email']=$request->email;
		   // $data['user_id']=$user->id;
		   // $data['phone']=$change_phone;
		   // $data['verifycode']=$user->verifycode;
			$data['user_date']=$user;
			
		   $result=\Mail::send('emails.verify', $data , function($message) use ($data)
	  		  {
                $message->to($data['user_date']->email)->from('admin@kaboolhai.com' , 'Kabolhai')->subject('Verify code');
              });
		  
		    return redirect('view-verify');
		}
		else
		{
			          Session::put('user_id',$user->id);
                Session::put('firstname',$user->firstname);
                Session::put('lastname',$user->lastname);
                Session::put('email',$user->email);
                Session::put('user_name',$user->user_name);

                $EmailPerferance=new EmailPerferance();
                $EmailPerferance->user_id=$user->id;
                $EmailPerferance->message_status=1;
                $EmailPerferance->read_message_status=1;
                $EmailPerferance->photo_request_status=1;
                $EmailPerferance->responce_photo_request_status=1;
                $EmailPerferance->pure_matches_status=1;
                $EmailPerferance->who_i_am_status=1;
                $EmailPerferance->who_looking_status=1;
                $EmailPerferance->kaboolhai_notifaction_status=1;
                $EmailPerferance->save();
                return redirect('dashboard');              
               
  
		}
		
		   

		}
	
	}
}
