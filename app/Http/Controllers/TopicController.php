<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\News;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class TopicController extends Controller
{
    /** ****************************************************************************************************************
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function index()
    {

        $data['topics'] = Topic::all();
        return view('topics.index', $data);
    }

    /** ****************************************************************************************************************
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function create()
    {
        return view('topics.create');
    }

    /** ****************************************************************************************************************
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required'
        ]);
        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('topics.create')))->withInput();
        } else {
            $newTopics = [
                'title' => $input['title'],
            ];

            Topic::create($newTopics);
            return redirect(route('topics.index'));
        } // else if ($validator->fails())

    }

    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function edit(Request $request, $id)
    {
        $topics = Topic::find($id);
        if (is_null($topics)) {
            return redirect(route('topics.index'));
        } else {
            $data['topics'] = $topics;
            return view('topics.edit', $data);
        } // else if (is_null($news))
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('topics.edit', ['id' => $input['id']])))->withInput();
        } else {
            $topics = Topic::find($input['id']);
            $topics->fill($input)->save();
            return redirect(route('topics.index'));
        } // else  if ($validator->fails())
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function destroy(Request $request, $id)
    {
        $topic = Topic::find($id);
        $result = News::where('topic_id', $topic->id)->delete();
        $topic->delete();
        return redirect(route('topics.index'))->with('success', 'Топик удале!');
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function show(Request $request, $id)
    {
        $topic_id = $id;
        $data['topics'] = Topic::find($topic_id);
        return view('topics.show', $data);
    }
}

