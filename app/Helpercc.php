<?php 
use\App\UserRequest;
use\App\Notification;
use\App\MyPhoto;
use\App\User;
use\App\chats;

function user_data()
 {
    $user_id=Session::get('user_id');
    $result=User::where('id',$user_id)->join('profile-image','profile-image.image_id','=','users.profile_image','left')->first();
    return $result;

 
 
 }

 function count_unread_msg()
{
     $message= chats::where('read_at',null)->where('to_user',Session::get('user_id'))->count();
    return $message;
  
}
function check_friend_unread_msg($id){
  $chat= chats::where([['read_at',null],['from_user', $id],['to_user',Session::get('user_id')]])->orderBy('created_at', 'desc')->first();
  return $chat;
}



 function count_message()
{
     $message= chats::where('status',0)->where('to_user',Session::get('user_id'))->count();
    return $message;
  
}
function tochat()
{
     $all_chats= chats::with('to_users','from_users','photo')->distinct()->where([['to_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get(['to_user','from_user']);
     return $all_chats;
  
}


function fromchat()
{
//   $all_chats= chats::with('from_users')->distinct()->where([['from_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get(['to_user','from_user']);
//   return $all_chats;
}

function get_friend_dp($friend)
 {
  $photo=MyPhoto::where('user_id',$friend)->where('dp_status',1)->first();
  if(!empty($photo))
  {

  return $photo->image;
  }
  else
  {
    return $photo;
  }
 }


function get_friend_avatar($friend){

  $user=\App\User::where('id', $friend)->first();
  if(!empty($user)){
    $friend_avatar=\App\ProfileImage::where('image_id', $user->profile_image)->first();
    if(!empty($friend_avatar)){
      return $friend_avatar->image_name;
    }
  }
}






function get_photo()
 {
  $photo=MyPhoto::where('user_id',Session::get('user_id'))->where('dp_status',1)->first();
  if(!empty($photo))
  {

  return $photo->image;
  }
  else
  {
    return $photo;
  }
 }

 function get_viewed(){
     $viewed = \App\ViewUser::where('user_id' , Session::get('user_id'))->get();
         $viewed_list = array();
         foreach ($viewed as $key => $row) {
           array_push($viewed_list, $row->viewed_user_id);
         }
         return $viewed_list;
 }

 function get_friend()
 {
 $friend=UserRequest::with('user','photo')->where('requested_user_id',Session::get('user_id'))->where('friend_status',0)->get();

 	return $friend;
 }
 function count_friend()
 {
 $friend=UserRequest::where('requested_user_id',Session::get('user_id'))->where('friend_status',0)->count();
  return $friend;
 }
 function recent_join()
 {
  DB::enableQueryLog();
  $friend_sent=UserRequest::where('user_id',Session::get('user_id'))->get();
  $friend_sent_list = array();
  foreach ($friend_sent as $value) {
    $friend_sent_list[] = $value->requested_user_id;
  }

  $rejected_friend=\App\Reject::where('user_id', Session::get('user_id'))->get();
  $reject_friend_list= array();
  foreach ($rejected_friend as $key => $value1) {
      array_push($reject_friend_list, $value1->reject_user_id);
  }

  // dd($friend_sent_list);
  $current = user_data();

 $friend=User::where([['users.id', '!=',Session::get('user_id')],['gender','!=',$current->gender]])->join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('my_photos','my_photos.user_id','=','users.id','left')
->whereNotIn('users.id', $friend_sent_list)
->whereNotIn('users.id', $reject_friend_list)
 ->orderBy('id','desc')->limit('20')->get();
//dd($friend);
  return $friend;
 }


 function get_notification()
 {
 $friend=Notification::with('user','photo')->where('receiver_id',Session::get('user_id'))->orderBy('notification_id','desc')->limit(20)->get();
  return $friend;
 }
 function count_notification()
 {
 $friend=Notification::where('receiver_id',Session::get('user_id'))->where('status',0)->count();
  return $friend;
 }
 function country()
 {
 	$country_test = DB::table('countries')->get();
 	return $country_test;
 }

 function months()
 {
   return ['Jan' , 'Feb' , 'March' , 'Apr' , 'May' , 'Jun' , 'July' , 'Aug' , 'Sep' , 'Oct' , 'Nov' , 'Dec'];
 }

 function send_message($message , $to)
 {
  $param = array(
         'username' => 'Kabool',
         'password' => '123',
         'sender' => 'Kabool Hai',
         'text' => $message,
         'type' => 'text',
        );
        $post = 'to=' . implode(';', $to);
        foreach ($param as $key => $val) {
            $post .= '&' . $key . '=' . rawurlencode($val);
        }
        $url = "http://sms.4stelecom.net/api/api_http.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Connection: close"));
        $result = curl_exec($ch);
        if(curl_errno($ch)) {
            $result = "cURL ERROR: " . curl_errno($ch) . " " . curl_error($ch);
        } else {
            $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
            switch($returnCode) {
                case 200 :
                    break;
                default :
                    $result = "HTTP ERROR: " . $returnCode;
            }
        }
        curl_close($ch);
        // print $result;
 }