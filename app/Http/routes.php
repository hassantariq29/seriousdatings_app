<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('users/{username}/verify/{key}', function ($username, $key) {
	
  		$username_new = DB::table('users')->where('id',$username)->pluck('username');
		$db_key = \DB::table('users')->where('id',$username)->pluck('verify_key');

		if($db_key == $key){
			DB::table('role_user')
            ->where('user_id', $username)
            ->update(['role_id' => 1]);
          	return Redirect::to('login');
		}
		else{
			echo "Invalid Verification Key";
			return Redirect::to('users/'.$username_new.'/verify');
		}
});

Route::get('/start', function()
{
    $verified = new Role();
    $verified->name = 'Verified';
    $verified->save();

    $admin = new Role();
    $admin->name = 'Admin';
    $admin->save();
	
	$user = new Role();
	$user->name = 'User';
	$user->save();

    $read = new Permission();
    $read->name = 'can_see';
    $read->display_name = 'Can See User Profiles';
    $read->save();

    $edit = new Permission();
    $edit->name = 'can_see_compatability';
    $edit->display_name = 'Can See Compatability';
    $edit->save();
	
	$admin_p = new Permission();
    $admin_p->name = 'admin';
    $admin_p->display_name = 'Can Control Anything';
    $admin_p->save();


    $admin->attachPermission($admin_p);
    
	
    $verified->attachPermission($read);
	$verified->attachPermission($edit);
	

    $user1 = \User::find(1);
    $user2 = \User::find(2);

    $user1->attachRole($admin);
    $user2->attachRole($verified);

    return 'Woohoo!';
});

Route::get('ajax', 'AjaxRequestController@getSearchType');
Route::get('users/ajax/profile', 'AjaxRequestController@profileData');
Route::get('events/category/{category}', 'EventsController@eventCategory');
Route::get('groups', 'MyGroupController@showGroups');
Route::get('profile/groups','MyGroupController@index');
Route::get('groups/{group_id}', 'MyGroupController@show');
Route::get('profile/groups/create', 'MyGroupController@create');
Route::get('groups/{groupID}/addMember', 'MyGroupController@addMemberForm');
Route::get('groups/{groupID}/removeMember', 'MyGroupController@removeMemberForm');
Route::get('forgotPassword', 'ForgotPasswordController@showForgetForm');
Route::get('forgotPassword/{username}/{key}', 'ForgotPasswordController@showForgetFormWithKey');
Route::get('datingPlan/{username}', 'DatingPlanController@subscribe');


Route::post('updatePassword', 'ForgotPasswordController@forgetFormWithKeyPost');
Route::post('forgotPassword', 'ForgotPasswordController@forgetFormPost');
Route::post('groups/ajax/group', 'AjaxRequestController@updateGroupMember');
Route::post('groups', 'MyGroupController@store');
Route::post('groups/{groupID}/addMember', 'MyGroupController@addMemberPost');
Route::post('groups/{groupID}/removeMember', 'MyGroupController@removeMemberPost');
Route::post('events/create', 'EventsController@create');

Route::resource('users','UsersController');
Route::resource('events','EventsController');
Route::resource('users/{username}/about_your_date','AboutYourDateController');

Route::controller('deploy','ServerController');
Route::controller('search', 'SearchController');
//::controller('ajax/{action?}/{type?}', 'AjaxRequestController@getSearchType');
Route::controller('users/{username}/compatability','CompatabilityController');
Route::controller('users/{username}/verify','VerifyController');
Route::controller('users/{username}/photos','UserPublicPhotoController');
Route::controller('users/{username}/videos','UserPublicVideoController');
Route::controller('profile/datingPlan/','DatingPlanController');


Route::group(array('before' => 'profile'), function() {

	Route::get('profile/logout', function(){
		$user_id = Auth::user() -> id;
    	Auth::logout();
    	DB::table('user_online')->where('user_id', '=', $user_id)->delete();
    	\Session::flush();
		return \Redirect::guest('/');

	});
	Route::resource('profile/photo','UserPhotoController');
	Route::resource('profile/music','UserMusicController');
	Route::resource('profile/video','UserVideoController');
	Route::resource('profile/group','UserGroupController');
	Route::controller('profile','ProfileController');


});

Route::group(array('before' => 'admin'), function() {
	Route::get('admin/logout', function(){
		$user_id = Auth::user() -> id;
    	Auth::logout();
    	DB::table('user_online')->where('user_id', '=', $user_id)->delete();
    	\Session::flush();
		return \Redirect::guest('/');
      	
	});
	Route::get('admin/templates/{id}/content', 'TemplateController@showContent');
	Route::get('admin/change_password', 'ChangePasswordController@showForm');
	Route::get('admin/events/addEventType', 'EventManagementController@eventTypeForm');
	Route::post('admin/events/type', 'EventManagementController@eventTypePost');
	Route::post('admin/change_password', 'ChangePasswordController@updatePassword');
	Route::resource('admin/slide','SlideManagementController');
	Route::resource('admin/events','EventManagementController');
	Route::resource('admin/templates','TemplateController');
	Route::resource('admin/gift_cards','GiftCardController');
	Route::resource('admin/users','UserManagementController');
	Route::resource('admin/videos','VideoManagementController');
	Route::resource('admin/banners','BannerManagementController');
	Route::resource('admin/dating_plans','DatingPlanManagementController');
	Route::resource('admin/pages','ContentManagementController');
	Route::controller('admin','AdminDashboardController');
});
Route::controller('/','HomeController');




















Route::filter('profile', function()
{
	if (Auth::user())
	{
		$user = Auth::user();

	}
	else{
		return \Redirect::guest('login');
	}
});


Route::filter('admin', function()
{
  if (Auth::user())
        {
			$user = Auth::user();
			if (!$user->hasRole('Admin'))
			{
				 return redirect(url());
			}
           
        }
	else{
		return \Redirect::guest('login');
	}	
});