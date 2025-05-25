<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Hash;

class AdminLoginController extends Controller
{
    public function loginPage(){
        return view('admin/login');
    }

    public function loginStore(Request $request ){
        dd($request);
        $validator =  $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        dd($validator);
    }


    public function dashboardPage(){

        return view('admin/dashboard');
    }

    public function insert(){
        return view('admin/addUser');
    }
    
    
    public function account(){
        return view('admin/account');
    }

    public function user(){
        return view('admin/user_id');
    }

    public function admin_user_create(){
        return view('admin/admin-user-create');
    }

    public function amount(){
        return view('admin/amount');
    }

    public function buyer_id(){
        return view('admin/buyer_id');
    }

    public function buyer_type(){
        return view('admin/buyer_type');
    }

    public function users_profile(){
        return view('admin/users-profile');
    }

    public function contact_number(){
        return view('admin/contact_number');
    }

    public function daily_monthly_report(){
        return view('admin/daily_monthly_report');
    }
    
    public function email(){
        return view('admin/email');
    }

    public function email1(){
        return view('admin/email1');
    }

    public function export_data(){
        return view('admin/export_data');
    }

    public function full_name(){
        return view('admin/full-name');
    }

    public function index(){
        return view('admin/index');
    }

    public function item_services_purchased(){
        return view('admin/item_services_purchased');
    }
    
    public function user_id(){
        return view('admin/user_id');
    }

    public function location_areas(){
        return view('admin/location_areas');
    }
    public function joining_date(){
        return view('admin/joining_date');
    }
    public function name_studio(){
        return view('admin/name_studio');
    }
    public function pages_blank(){
        return view('admin/pages-blank');
    }
    public function pages_contact(){
        return view('admin/pages-contact');
    }
    public function pages_error(){
        return view('admin/pages-error-404');
    }
    public function pages_faq(){
        return view('admin/pages-faq');
    }
    public function pages_login(){
        return view('admin/pages-login');
    }
    public function pages_register(){
        return view('admin/pages-register');
    }
    public function payment_method(){
        return view('admin/payment_method');
    }
    public function phone_number(){
        return view('admin/phone_number');
    }
    public function portfolio_url(){
        return view('admin/portfolio_url');
    }
    public function profile_picture(){
        return view('admin/profile_picture');
    }
    public function purchase_date(){
        return view('admin/purchase_date');
    }
    public function purchase_history(){
        return view('admin/purchase_history');
    }
    public function purchase_id(){
        return view('admin/purchase_id');
    }
    public function quick_access_button(){
        return view('admin/quick_access_button');
    }
    public function ratings_review(){
        return view('admin/ratings_review');
    }
    public function recent_activities(){
        return view('admin/recent_activities');
    }
    public function revenue_reports(){
        return view('admin/revenue_reports');
    }
    public function revenue_summary(){
        return view('admin/revenue_summary');
    }
    public function services_offered(){
        return view('admin/services_offered');
    }
    public function top_purchasing_users(){
        return view('admin/top_purchasing_users');
    }
    public function total_photographers(){
        return view('admin/total_photographers');
    }
    public function total_purchases(){
        return view('admin/total_purchases');
    }
    public function total_users(){
        return view('admin/total_users');
    }
}

