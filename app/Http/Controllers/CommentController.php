<?php
 
namespace App\Http\Controllers;
 
use App\Comment;
use App\Timeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Notifications\CommentNotification;
use Notification;
use App\User;
 
class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
 
    public function store(CommentRequest $request)
    {
        $post = Timeline::findOrFail($request->post_id);

        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);

        $yangkomentar = User::find($request->user_id);
        $sayamau = $request->id_user;
        $saya = User::find($sayamau);

        Notification::send($saya, new CommentNotification($yangkomentar));
        return redirect()->route('posts.show', $post->id);
    }
}
