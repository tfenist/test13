<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class AuthorsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){

        $data['authors'] = Author::all();
        //dd($data);
        return view('authors.index', $data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        return view('authors.create');
    }

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
            //dump($input);
            $newAuthors = [
                'name' => $input['name'],
            ];

            $result = Author::create($newAuthors);

            //$result->message .= '!!!';
            //$result->save();
            return redirect(route('authors.index'));
        } // else if ($validator->fails())

    }

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

    public function destroy(Request $request, $id)
    {
        $authors = Author::find($id);
        $authors->delete();
        return redirect(route('authors.index'))->with('success', 'Новость удалена!');
    }

    public function show(Request $request, $id) {

        $author_id = $id;

        $author = Author::find($author_id);

//        dd($author,$author->allnews);

}
}

