<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function indexBannedUsers()
    {
        $bannedUsers = User::where('account_status', 'Banned')
                        ->paginate(4);


        if (request()->expectsJson()) {
            return response()->json(['bannedUsers' => $bannedUsers]);
        }

        return view('banned-users', compact('bannedUsers'));

    }

    public function ban($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['account_status' => 'Banned']);
        
        return response()->json([
            'message' => 'Account banned successfully.'
        ], Response::HTTP_OK);
    }

    public function unban($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
            $user->update(['account_status' => 'Active']);
            
            return response()->json([
                'message' => 'Account unbanned successfully.'
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error unbanning account.'
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    
}
