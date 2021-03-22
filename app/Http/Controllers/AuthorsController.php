<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class AuthorsController extends Controller
{
    /** ****************************************************************************************************************
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function index()
    {

        $data['authors'] = Author::all();
        return view('authors.index', $data);
    }

    /** ****************************************************************************************************************
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function create()
    {
        return view('authors.create');
    }

    /** ****************************************************************************************************************
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('authors.create')))->withInput();
        } else {
            $newAuthors = [
                'name' => $input['name'],
            ];

            $result = Author::create($newAuthors);
            return redirect(route('authors.index'));
        } // else if ($validator->fails())

    }

    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function edit(Request $request, $id)
    {
        $authors = Author::find($id);
        if (is_null($authors)) {
            return redirect(route('authors.index'));
        } else {
            $data['authors'] = $authors;
            return view('authors.edit', $data);
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
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('authors.edit', ['id' => $input['id']])))->withInput();
        } else {
            $authors = Author::find($input['id']);
            $authors->fill($input)->save();
            return redirect(route('authors.index'));
        } // else  if ($validator->fails())
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * ****************************************************************************************************************/
    public function destroy(Request $request, $id)
    {
        $author = Author::find($id);
        $result = News::where('author_id', $author->id)->delete();
        $author->delete();
        return redirect(route('authors.index'))->with('success', 'Новость удалена!');
    }


    /** ****************************************************************************************************************
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ****************************************************************************************************************/
    public function show(Request $request, $id)
    {
        $author_id = $id;
        $data['author'] = Author::find($author_id);
        return view('authors.show', $data);
    }
}

