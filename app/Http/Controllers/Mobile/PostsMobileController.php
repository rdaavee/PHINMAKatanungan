<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
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
            'first_name' => $request->first_name,
            'title' => $request->title,
            'content'=> $request->content,
            'privacy'=> $request->privacy,
        ];

        $posts = Post::with('user:user_id,first_name')->get();

        try {
            $user = Post::create($requestData);
            Log::info('Post Created Successfully');
            return response()->json(['message' => 'Post successfully created.', 'posts' => $posts], 200);
        } catch (\Exception $e) {
            Log::error('Error creating post record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    
    public function getPosts()
    {
        $posts = Post::with('user:user_id,first_name,middle_name,last_name,course_id')->get();

        return response()->json(['posts' => $posts], 200);
    }
    public function getAnnouncements()
    {
        $announcement = Announcement::get();

        return response()->json(['announcements' => $announcement], 200);
    }
}