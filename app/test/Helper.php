<?php 
function count_notification()
 {
  $notification= DB::table('notification')->where('receiver_id',Session::get('user_id'))->where('status',0)->count();
  return $notification;
 }
 function get_profile()
 {
 	$profile = DB::table('profiles')->where('fk_user_id',Session::get('user_id'))->first();
 	return $profile;
 }
 function country()
 {
 	$country_test = DB::table('countries')->get();
 	return $country_test;
 }
 ?>