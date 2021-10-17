<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $comments = Comment::paginate();
        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CommentRequest $request
     * @return RedirectResponse
     */
    public function store(CommentRequest $request): RedirectResponse
    {
        Comment::create($request->validated());
        return redirect()->route('comments.index')->with('success', 'Данные успешно добавлены');
    }

    /**
     * Display the specified resource.
     *
     * @param Comment $comment
     * @return Application|Factory|View
     */
    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Comment $comment
     * @return Application|Factory|View
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CommentRequest $request
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function update(CommentRequest $request, Comment $comment): RedirectResponse
    {
        $comment->update($request->validated());
        return redirect()->route('comments.index')->with('success', 'Данные успешно обновлены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Данные успешно удалены');
    }
}
