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
  $all_chats= chats::with('from_users')->distinct()->where([['from_user','=',Session::get('user_id')]])->orderBy('created_at','asc')->get(['to_user','from_user']);
  return $all_chats;
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
 $friend=User::join('profile-image','profile-image.image_id','=','users.profile_image','left')->join('my_photos','my_photos.user_id','=','users.id','left')->orderBy('id','desc')->limit('20')->get();
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