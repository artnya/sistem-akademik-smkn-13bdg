<?php
 
namespace App\Http\Controllers;
 
use App\Comment;
use App\Timeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Notifications\CommentNotification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
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

        /** Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);
        **/

            $spot = new Comment();
            $spot->body = $request->body;
            $spot->user_id = Auth::id();
            $spot->post_id = $post->id;
            $spot->save();

        if ($post->id_user == Auth::user()->id) {
            return Redirect::to(URL::previous() . "#" . $spot->id);
        }else{

            $last_row = $spot->id;
            $yangkomentar = User::find($request->user_id);
            $isikomentar = $request->body;
            $sayamau = $request->id_user;
            $postmu = $request->post_id;
            $saya = User::find($sayamau);

            Notification::send($saya, new CommentNotification($yangkomentar, $isikomentar, $postmu, $last_row));
            return redirect()->route('posts.show', $post->id);
        }
    }
}
