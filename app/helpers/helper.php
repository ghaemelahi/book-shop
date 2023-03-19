<?php

use Illuminate\Http\Request;
use App\Models\Books;
use Hekmatinasser\Verta\Verta;
use App\Models\User;
use App\Models\PostLike;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function convertToEnglish($string)
{
	$persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
	$arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];

	$num = range(0, 9);
	$convertedPersianNums = str_replace($persian, $num, $string);
	$englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);

	return $englishNumbersOnly;
}

function convertToPersian($string)
{
	$persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
	$arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];

	$num = range(0, 9);
	$convertedPersianNums = str_replace($num, $persian, $string);
	$englishNumbersOnly = str_replace($num, $arabic, $convertedPersianNums);

	return $englishNumbersOnly;
}
// function shamsi_to_miladi($date){
//     $date = explode('/',$date);
//     $jdate = Verta::getGregorian($date[0],$date[1],$date[2]);
//     $jdate =  $jdate[0].'/'.$jdate[1].'/'.$jdate[2];
//     return $jdate;
// }
function replace_number($number)
{
	$price = str_replace(".", "", $number);
	return $price;
}
function change_date($date)
{
	$date = explode("/", $date);
	$y = $date[0];
	$m = $date[1];
	$d = $date[2];
	return jalali_to_gregorian($y, $m, $d, '-');
}
function change_date_to_jalali($date)
{
	$date = explode("-", $date);
	$y = (int) $date[0];
	$m = (int) $date[1];
	$d = (int) $date[2];
	return gregorian_to_jalali($y, $m, $d, '/');
}

function get_user_name($id)
{
	$user = User::find($id);
	$gender = $user->gender == 'male' ? 'آقای' : 'خانم';
	return $gender . ' ' . $user->first_name . ' ' . $user->last_name;
}

function get_user_type($id)
{
	$user = User::find($id);
	$type = "";
	if ($user->type == 'admin') {
		$type = 'مدیر';
	} elseif ($user->type == 'tourleader') {
		$type = 'راهنما تور';
	} elseif ($user->type == 'user') {
		$type = 'کاربر';
	}
	return $type;
}

function get_name_user(Request $request){
	$users = DB::table('users')
	->select('name')
	->where('api_token', '=', $request->api_token);
	return $users;


}

function get_status_pay_book($id)
{
	$pay = Books::find($id);
	$status = '';
	if ($pay->status == 'pay_and_trust') {
		$status = 'پرداخت و امانت';
	} elseif ($pay->status == 'pay') {
		$status = 'پرداخت';
	} elseif ($pay->status == 'trust') {
		$status = 'امانت گرفتن';
	}
	return $status;
}
function get_type_role_users($id)
{
	// $roles = $users = DB::table('users')
	// ->select('roles')
	// ->where('api_token', '=', $request->api_token);
	// return $users;
	$roles = User::find($id);
	$role = '';
	if ($roles == 'user') {
		$role = ' (کاربر) ';
	} elseif ($roles == 'admin') {
		$role = ' (مدیر) ';
	}
	return $role;
}
function get_role_users($id)
{
	$roles = Auth::user()->id;
	$role = '';
	if ($roles->roles == 'user') {
		$role = ' (کاربر) ';
	} elseif ($roles->roles == 'admin') {
		$role = ' (مدیر) ';
	}
	return $role;
}

function get_info_with_api_token($api_token){
	if($api_token){
		$users = User::where('api_token',$api_token)->get();
		return $users;
	}
}

function get_api_token($api_token){
	if($api_token){
		auth()->user()->api_token = null;
	}
}

function get_vehicle_name($name)
{
	$result = "";
	switch ($name) {
		case 'bus':
			$result = 'اتوبوس';
			break;
		case 'train':
			$result = 'قطار';
			break;
		case 'ship':
			$result = 'کشتی';
			break;
		case 'airplane':
			$result = 'هواپیما';
			break;
		case 'car':
			$result = 'خودرو';
			break;
	}
	return $result;
}

function get_tour_name($id)
{
	return $id;
}

function get_post_likes($id)
{
	// $likes = PostLike::where('post_id', $id)->where('status', 1)->count();
	// return $likes;
}
