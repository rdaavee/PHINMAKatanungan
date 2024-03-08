<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class PostsMobileController extends Controller
{
    public function storePost(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|string',
            'content' => 'required|max:255|string',
            'privacy' => 'required|max:255|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Authenticate user based on auth token
        $user = User::where('api_token', $request->header('Authorization'))->first();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        try {
            // Create the post associated with the authenticated user
            $post = $user->posts()->create([
                'title' => $request->title,
                'content' => $request->content,
                'privacy' => $request->privacy,
            ]);

            Log::info('Post Created Successfully');
            return response()->json(['message' => 'Post successfully created.', 'post' => $post], 201);
        } catch (\Exception $e) {
            Log::error('Error creating post record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    

    
    public function getPosts()
    {
        $posts = Post::with('user:user_id,account_status,user_role,first_name,middle_name,last_name,course_id,department_id')->get();

        return response()->json(['posts' => $posts], 200);
    }
    public function getAnnouncements()
    {
        $announcement = Announcement::get();

        return response()->json(['announcements' => $announcement], 200);
    }
}