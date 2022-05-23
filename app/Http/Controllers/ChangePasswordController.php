<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Protype;
use Illuminate\Support\Facades\Auth;
  
class ChangePasswordController extends Controller
{
   
    public function showChangePasswordGet() {
        //get all protype
        $protype = Protype::all();

        return view(
            'change-password-profile',
            [
                'getProtypes' => $protype,
            ]
        );
    }

    public function changePasswordPost(Request $request) {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your old password does not matches with the password.");
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New password cannot be same as your current password.");
        }

        if (strlen($request->input('new_password')) < 8) {
            return redirect()->back()->with("error","New password at least 8 characters");
        }
        //Change Password
        User::where('id', Auth::user()->id)->update(['password'=>Hash::make($request->input('new_password'))]);
        return redirect()->back()->with("success","Password successfully changed!");
    }
}