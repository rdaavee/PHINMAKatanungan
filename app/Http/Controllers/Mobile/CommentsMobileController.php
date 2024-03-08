<?php

namespace App\Http\Controllers\Mobile;


use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class CommentsMobileController extends Controller
{
    public function getComments($post_id)
    {
        $comments = Comment::where('post_id', $post_id)->with('user:user_id,account_status,user_role,department_id,course_id,first_name,middle_name,last_name')->get();

        return response()->json(['comments' => $comments], 200);
    }
    public function storeComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|max:255|string|',
            'content' => 'required|string',
            'post_id' => 'required|max:255|string|',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $requestData = [
            'user_id' => $request->user_id,
            'content' => $request->content,
            'post_id'=> $request->post_id,

        ];

        try {
            $comment = Comment::create($requestData);
            Log::info('Comment Created Successfully');

            $post = Post::find($request->post_id);
            $post->comments_count++;
            $post->save();
            return response()->json(['message' => 'Comment successfully created.'], 200);
        } catch (\Exception $e) {
            Log::error('Error creating comment record: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}