<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
View::share('admin_assets' , asset('public/admin_assets'));
View::share('user_assets' , asset('public/user_assets'));
Route::get('/', function ()
 {
 	
 	$data['advert']=\App\Advert::first();
    return view('user/index')->with($data);
});

Route::get("test","User_controller@test");

Route::post("update-answer","User_controller@update_answer");
Route::post("send-answer","User_controller@send_answer");
Route::post("add-answer","User_controller@add_answer");
Route::post("chat","User_controller@chat");
Route::get("inbox","User_controller@inbox");
Route::post("send_message","User_controller@send_message_user");
Route::post("read-message","User_controller@read_message");
Route::post("check_unseen","User_controller@check_unseen");
Route::get("payment","User_controller@payment");
Route::get("testimonials","User_controller@testimonials");
Route::get("our-partnar","User_controller@our_partnar");
Route::get("sitemap","User_controller@sitemap");
Route::get("view-verify","User_controller@view_verify");
Route::get("more-alike/{id}","User_controller@more_alike");
Route::get("assisted-service","User_controller@assisted_service");
Route::get("help-center","User_controller@help_center");
Route::post("save-request","User_controller@save_request");
Route::post("add-assisted","User_controller@add_assisted");
Route::post("update-num","User_controller@update_num");
Route::get("resend","User_controller@resend");
Route::get("resone","User_controller@resone");
Route::post("close","User_controller@close");
Route::post("num-verified","User_controller@num_verified");
Route::get("email-verify","User_controller@email_verify");
Route::get("email-verified","User_controller@email_verified");
Route::post("passport-verify","User_controller@passport_verify");
Route::get("widow","User_controller@widow");
Route::get("single","User_controller@single");
Route::get("divorcee","User_controller@divorcee");
Route::get("annulled","User_controller@annulled");
Route::get("separated","User_controller@separated");
Route::get("polygamy","User_controller@polygamy");
Route::post("customer-query","User_controller@customer_query");
Route::get("services","User_controller@services");
Route::get("manage-profiles/{user}/{field}/{field2}","User_controller@manage_profiles");
Route::get("policy-privacy","User_controller@policy_privacy");
Route::get("term-condation","User_controller@term_condation");
Route::get("contact-us","User_controller@contact_us");
Route::get("faqs","User_controller@faqs");
Route::get("about-us","User_controller@about_us");
Route::post("like","User_controller@like");
Route::get("add-friend/{friend_user_id}","User_controller@add_friend");
Route::get("remove-user/{user_id}/{url}","User_controller@remove_user");

Route::get("delete-request/{friend_user_id}","User_controller@delete_request");
Route::get("friend-list","User_controller@friend_list");
Route::post("get-friend","User_controller@get_friend");
Route::post("friend-count","User_controller@friend_count");

Route::get("view-send-request","User_controller@view_send_request");
Route::get("favourite-user/{favourite_user_id}","User_controller@favourite_user");
Route::get("delete-favourite-user/{favourite_user_id}","User_controller@delete_favourite_user");


Route::get("favourite-list","User_controller@favourite_list");
Route::get("friend-delete-list","User_controller@friend_delete_list");
Route::get("confirm-friend/{friend_id}","User_controller@confirm_friend");
Route::get("friend-chat/{friend_id}","User_controller@friend_chat");


Route::get("active-user/{block_user_id}","User_controller@active_user");
Route::get("block-user/{block_user_id}","User_controller@block_user");
Route::get("hide-profile/{hide_user_id}","User_controller@hide_profile");
Route::get("show-profile/{show_user_id}","User_controller@show_profile");
Route::get("hide-profile-list","User_controller@hide_profile_list");
Route::post("update-password","User_controller@update_password");
Route::post("close-my-account","User_controller@close_my_account");
Route::get("deactive-user/{user_id}","User_controller@deactive_user");

Route::post("add-feedback","User_controller@add_feedback");
Route::get("feedback","User_controller@feedback");
Route::get("close-account","User_controller@close_account");
Route::get("reset-password/{email}","User_controller@reset_password");
Route::get("forgot","User_controller@forgot");
Route::post("forgot-password","User_controller@forgot_password");
Route::post("send-message","User_controller@send_message");
Route::get("distinctive","User_controller@distinctive");
Route::post("save-my-account","User_controller@save_my_account");
Route::get("advance-search","User_controller@advance_search");
Route::post("save-search","User_controller@save_search");
Route::post("save-my-notes","User_controller@save_my_notes");
Route::get("my-notes","User_controller@my_notes");
Route::get("delete-search/{id}","User_controller@delete_search");
Route::get("delete-notes/{id}","User_controller@delete_notes");
Route::post("edit-notes","User_controller@edit_notes");
Route::get("show-search","User_controller@show_search");
Route::post("tell-about-kaboolhai","User_controller@tell_about");
Route::post("photo-change","User_controller@photo_change");
Route::post("general-setting","User_controller@general_setting");
Route::post("change-password","User_controller@change_password");
Route::get("settings","User_controller@settings");
Route::get("who-am-i-looking","User_controller@who_am_i_looking");
Route::get("who-looking-for-me","User_controller@who_looking_for_me");
Route::get("statistics","User_controller@statistics");
Route::post("verify","User_controller@verifies");

Route::get('myprofileview-list','User_controller@myprofileview_list');
Route::get("iprofileview-list","User_controller@iprofileview_list");
Route::post("add-oth","User_controller@add_oth");
Route::get("oth","User_controller@oth");
Route::post("verify-code","User_controller@verify");
Route::post("get-email","User_controller@get_email");
Route::get("photo-permission/{permission_id}","User_controller@photo_permission");
Route::get("reject-photo-request/{permission_id}","User_controller@reject_photo_request");

Route::get("accept-photo-request/{permission_id}","User_controller@accept_photo_request");
Route::get("photo-permission-list","User_controller@photo_permission_list");
Route::get("invite-view-profile/{invite_id}","User_controller@invite_view_profile");

Route::get("invite-view-profile-list","User_controller@invite_view_profile_list");


Route::get("notification","User_controller@notification");
Route::post("read-notification","User_controller@read_notification");
Route::post("get-notification","User_controller@get_notification");
Route::post("unsean-notification","User_controller@unsean_notification");
Route::get("addquestionlist/{user_id}","User_controller@addquestionlist");
Route::get("question","User_controller@question");
Route::get("add-question/{question_id}","User_controller@add_question");
Route::get("remove-question/{question_id}","User_controller@remove_question");
Route::post("question-category","User_controller@question_category");
Route::get("profile-writing-tips","User_controller@profile_writing_tips");
Route::get("membership","User_controller@membership");
Route::get("trust-badges","User_controller@trust_badges");
Route::post("subscribe","User_controller@subscribe");
Route::get("user-search","User_controller@user_search");
Route::get("United-Kingdom","User_controller@United_Kingdom");
Route::get("pakistani","User_controller@pakistani");
Route::get("UAE","User_controller@UAE");
Route::get("USA","User_controller@USA");
Route::get("canada","User_controller@canada");

Route::get("main-profile","User_controller@main_profile");
Route::get("messages","User_controller@messages");

Route::post("email-setting","User_controller@email_setting");
Route::get("email-prefrences","User_controller@email_prefrences");
Route::get("logout","User_controller@logout");
Route::get("dashboard","User_controller@dashboard");


Route::get("blocked-list","User_controller@blocked_list");
Route::get("sent-items","User_controller@sent_items");
Route::get("tell-friend","User_controller@tell_friend");
Route::get("activity-log/{log_user_id}","User_controller@activity_log");
Route::get("invite-friend","User_controller@invite_friend");
Route::get("find-exact-match","User_controller@find_exact_match");
Route::get("pure-matches","User_controller@pure_matches");

Route::get("public-profile/{user_id?}","User_controller@public_profile");



Route::get("prev-user-step-2","User_controller@prev_register_step_2");

Route::get("register-step-2","User_controller@register_step_2");
Route::get("my-photo","User_controller@my_photo");
Route::post("add-photo","User_controller@add_photo");
Route::get("delete-photo/{imgae_id}","User_controller@delete_photo");
Route::post("photo-setting","User_controller@photo_setting");
Route::post("dologin","User_controller@dologin");
Route::get("login","User_controller@login");
Route::post("check-login-status","User_controller@check_login_status");
Route::post("get_city","User_controller@get_city");
Route::post("get_state","User_controller@get_state");
Route::post("get-living-state","User_controller@get_living_state");
Route::post("get-living-city","User_controller@get_living_city");
//Registeration and update Routes
Route::post("register-user","User_controller@register_user");
Route::post("register-user-step-2","User_controller@user_register_step_2");
Route::get("register-step-3","User_controller@register_step_3");
Route::post("signup","User_controller@signup");
Route::get("register","User_controller@register");
Route::post("user-register-step-1","User_controller@user_register_step_1");
Route::post("update-profile","User_controller@update_profile");
Route::get("edit-profile/{user_id}","User_controller@get_user_profile");
Route::get("edit-step-2","User_controller@edit_step_2");
Route::get("make-profile-image/{image_id}","User_controller@make_profile_image");
Route::get("latest-updates","User_controller@latest_updates");
Route::get("recent-join","User_controller@recent_join");

//Manage Profile Routes


Route::get("manage-profile","ManageProfileController@manage_profile");
Route::post("loking-aperance-info","ManageProfileController@loking_aperance_info");
Route::post("basic-info","ManageProfileController@basic_info");
Route::post("profession-form","ManageProfileController@profession_form");
Route::post("family-info","ManageProfileController@family_info");
Route::post("preferences-info","ManageProfileController@preferences_info");
 Route::post("about-me","ManageProfileController@about_me");

Route::post("general-info","ManageProfileController@general_info");

Route::post("education-info","ManageProfileController@education_info");
 Route::post("apperance-info","ManageProfileController@apperance_info");

Route::post("religes-info","ManageProfileController@religes_info");
Route::post("basic-info-loking","ManageProfileController@basic_info_loking");


Route::post("edit-filed","ManageProfileController@edit_filed");
Route::post("edit-multi-filed","ManageProfileController@edit_multi_filed");
//Admain Routes
Route::get("admin","admin_controller@index");
Route::get("admin/dashboard","admin_controller@dashboard");
Route::post("admin/forgot","admin_controller@forgot");
Route::post("admin/login","admin_controller@login");
Route::get("admin/logout","admin_controller@logout");
Route::get("admin/property","admin_controller@property");
Route::get("admin/view-all","admin_controller@view_all");
Route::get("admin/user-archive/{user_id}","admin_controller@user_archive");
Route::get("admin/add-user","admin_controller@add_user");
Route::get("admin/edit_user/{user_id}","admin_controller@edit_user");
Route::get("admin/view_user/{user_id}","admin_controller@view_user");
Route::post("admin/update-user","admin_controller@update_user");

Route::get("admin/user-unarchive/{user_id}","admin_controller@user_unarchive");
Route::get("admin/get-user-archive","admin_controller@get_user_archive");
Route::get("admin/view-query","admin_controller@view_query");
Route::get("admin/delete-query/{query_id}","admin_controller@delete_query");
Route::post("admin/customer-reply","admin_controller@customer_reply");
Route::get("admin/latest-update","admin_controller@latest_update");
Route::get("admin/vew-latest-update","admin_controller@vew_latest_update");
Route::post("admin/add-update","admin_controller@add_update");
Route::get("admin/delete-update/{update_id}","admin_controller@delete_update");
Route::get("admin/advert","admin_controller@advert");
Route::post("admin/add-advert","admin_controller@add_advert");
Route::get("admin/delete-advert/{advert_id}","admin_controller@delete_advert");
Route::get("admin/delete-assisted/{assisted_id}","admin_controller@delete_assisted");
Route::get("admin/view-assisted","admin_controller@view_assisted");
Route::get("admin/delete-help-request/{request_id}","admin_controller@delete_help_request");
Route::get("admin/view-help-request","admin_controller@view_help_request");

Route::get("admin/delete-close-account/{close_id}","admin_controller@delete_close_account");
Route::get("admin/view-close-account","admin_controller@view_close_account");



Route::get("admin/delete-feedback/{feedback_id}","admin_controller@delete_feedback");
Route::get("admin/view-feedback","admin_controller@view_feedback");






