<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class MyController extends Controller
{
    public function index()
    {
        $data['news'] = News::all();
        return view('news.index', $data);
    }

    public function create()
    {
        return view('news.create');
    }

    public function edit(Request $request, $id)
    {
        $news = News::find($id);
        if (is_null($news)) {
            return redirect(route('news.index'));
        } else {
            $data['news'] = $news;
            return view('news.edit', $data);
           //return view('news.edit', compact($data));
        }
    }

    public function store(Request $request)
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
            return redirect((route('news.create')))->withInput();
        } else {
            dump($input);
            $newNews = [
                'subject' => $input['subject'],
                'message' => $input['message'],
                'name' => $input['name'],
                'email' => $input['email'],
            ];

            $result = News::create($newNews);

            $result->message .= '!!!';
            $result->save();
            return redirect('/news')->with('success','Новость Изменена!');
        }

    }

    public function update(Request $request, $id)
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
            return redirect((route('news.create')))->withInput();
        } else {
            dump($input);
            $newNews = [
                'subject' => $input['subject'],
                'message' => $input['message'],
                'name' => $input['name'],
                'email' => $input['email'],
            ];
        }
    }

    public function destroy(Request $request, $id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/news')->with('success','Новость удалена!');
    }

//    public function show(News $news)
//    {
//        return view('news.show', $news);
//    }
}
