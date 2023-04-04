<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $test = Book::all();
//        return { "name": "山田　太郎", "gender": "男" };
         return response()->json(
           [
             "post" => [
               [
                 "id" => 1,
                 "title" => "タイトルです",
                 "content" => "投稿内容です投稿内容です投稿内容です投稿内容です投稿内容です。"
               ],
               [
	         "id" => 2,
                 "title" => "タイトルです",
                 "content" => "投稿内容です投稿内容です投稿内容です投稿内容です投稿内容です。"
               ],
               [
                 "id" => 3,
                 "title" => "タイトルです",
                 "content" => "投稿内容です投稿内容です投稿内容です投稿内容です投稿内容です。"
               ],
             ]
           ],
         200,[],
       JSON_UNESCAPED_UNICODE //文字化け対策
      );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
