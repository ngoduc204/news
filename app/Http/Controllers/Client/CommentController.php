<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $newsId)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Comment::create([
            'news_id' => $newsId,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Bình luận đã được đăng.');
    }

    public function showComments($newsId)
    {
        $news = News::with('comments.user')->findOrFail($newsId);
        return view('client.news.show', compact('news'));
    }
}
