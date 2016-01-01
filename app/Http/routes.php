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
	
		
		$user_id = \DB::table('users')->where('username',$username)->pluck('id');
		$db_key = \DB::table('users')->where('username',$username)->pluck('verify_key');
		if($db_key == $key){
			$user = User::find($user_id);
			$user->verified = 1;
			$user->save();
			return Redirect::to('users/'.$username.'/compatability')->with("is_verified",1);
		}
		else{
			return Redirect::to('users/'.$username.'/verify');
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


Route::resource('users','UsersController');
Route::resource('users/{username}/about_your_date','AboutYourDateController');

Route::controller('deploy','ServerController');

Route::controller('users/{username}/compatability','CompatabilityController');
Route::controller('users/{username}/verify','VerifyController');
Route::group(array('before' => 'admin'), function() {
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























Route::filter('admin', function()
{
  if (Auth::user())
        {
			$user = Auth::user();
			if (!$user->hasRole('Admin'))
			{
				return 'You donot have enough rights !!';
			}
           
        }
	else{
		return \Redirect::guest('login');
	}	
});