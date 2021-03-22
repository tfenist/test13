<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\News;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class MyController extends Controller
{
    /** ****************************************************************************************************************
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function index()
    {
        $data['news'] = News::paginate(`15`);
        return view('news.index', $data);
    }


    /** ****************************************************************************************************************
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function create()
    {
        $data['authors'] = Author::pluck('name', 'id')->toArray();
        return view('news.create',$data);
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function edit(Request $request, $id)
    {
        $news = News::find($id);
        if (is_null($news)) {
            return redirect(route('news.index'));
        } else {
            $data['news'] = $news;
            return view('news.edit', $data);
        } // else if (is_null($news))
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * ****************************************************************************************************************/
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'subject' => 'required',
            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'author_id' => 'required'
        ]);
        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('news.create')))->withInput();
        } else {
            $newNews = [
                'subject' => $input['subject'],
                'message' => $input['message'],
                'name' => $input['name'],
                'email' => $input['email'],
                'author_id' => $input['author_id'],
            ];
            $result = News::create($newNews);
            return redirect(route('news.index'));
        } // else if ($validator->fails())

    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'subject' => 'required',
            'message' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('news.edit', ['id' => $input['id']])))->withInput();
        } else {
            $one_news = News::find($input['id']);
            $one_news->fill($input)->save();
            return redirect(route('news.index'));
        } // else  if ($validator->fails())
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function destroy(Request $request, $id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect(route('news.index'))->with('success', 'Новость удалена!');
    }
}
