<?php

namespace App\Http\Controllers\Mobile;


use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CommentsMobileController extends Controller
{
    public function getComments($post_id)
    {
        $comments = Comment::where('post_id', $post_id)->with('user:user_id,account_status,user_role,department_id,course_id,first_name,middle_name,last_name')->get();

        return response()->json(['comments' => $comments], 200);
    }
}