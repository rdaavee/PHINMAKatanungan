<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PostsMobileController extends Controller
{
    public function storePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|max:255|string|unique:users,user_id',
            'title' => 'required|max:255|string',
            'content' => 'required|max:255|string',
            'privacy' => 'required|max:255|string',
        ], [

        ]);

        $requestData = [
            'user_id'=> $request->user_id,
            'title' => $request->title,
            'content'=> $request->content,
            'privacy'=> $request->privacy,
        ];


        try {
            $user = Post::create($requestData);
            Log::info('Post Created Successfully');
            return response()->json(['message' => 'Post successfully created.'], 200);
        } catch (\Exception $e) {
            Log::error('Error creating post record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}