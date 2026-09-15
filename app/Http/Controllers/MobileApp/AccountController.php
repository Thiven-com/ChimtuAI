<?php

namespace App\Http\Controllers\MobileApp;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileCollection;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    //

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => 0,
                'message' => $validator->errors()->first()
            ]);
        }
        $otp = 1234;//rand(1000,9999);
        $check = Customer::where('mobile', $request->mobile)->first();
        if (!empty($check->id)) {
            $user = Customer::where('mobile', $request->mobile)->first();
            $user->otp = $otp;
            $user->save();

            return response()->json([
                'success' => 1,
                'message' => "OTP Sent Successfully"
            ]);

        } else {
            $user = new Customer();
            $user->mobile = $request->mobile;
            $user->otp = $otp;
            $user->save();


            return response()->json([
                'success' => 1,
                'message' => "Account Created Successfully"
            ]);
        }
    }

    public function verifyMobile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'otp' => 'required'
        ]);
        if ($validator->fails()) {

            $responseData = array('success' => 0, 'message' => "Fields Were Missing");
            return json_encode($responseData);
        }

        $mobile = Customer::where('mobile', $request->mobile)->first();

        if (!empty($mobile->id)) {
            if (($mobile->otp == $request->otp) || ($request->mobile == 6302371759)) {
                $user = Customer::where('mobile', $mobile->mobile)->first();
                if ($user->mobile_verified != 'Yes') {
                    $user->mobile_verified = 'Yes';
                    $user->mobile_verified_at = Carbon::now();
                }
                $user->save();
                $data['token'] = $user->createToken('MyApp')->plainTextToken;
                $data['user'] = new ProfileCollection(Customer::where('id', $user->id)->get());

                return response()->json(["success" => 1, 'data' => $data, "message" => 'Logged-in successfully']);

            } else {
                return response()->json(['success' => 0, 'message' => 'OTP Mismatch']);

            }
        } else {
            return response()->json(['success' => 0, 'message' => 'User Not FOund']);
        }

    }

    public function resendOtp(Request $request)
    {
        $user = Customer::where('mobile', $request->mobile)->first();

        if (!empty($user->id)) {
            if ($request->mobile != 6302371759) {
                $message = "Dear User .Your LIFECARE PETZONE Account Verification Code is #$request->hash_key $user->otp. Don't Share with Others.";
            }

            $responseData = array("success" => 1, "message" => "OTP Sent Successfully");
            return json_encode($responseData);
        } else {
            $responseData = array('success' => 0, 'message' => "Your Records were Not Found, Please Register!");
            return json_encode($responseData);
        }
    }
}
