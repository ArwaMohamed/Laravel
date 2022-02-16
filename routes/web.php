<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('posts',PostController::class);

// Route::get('/posts',[PostController::class,'post'])->name('posts');
/*
Route::get('/posts', function () {
    $posts=[
        ["id"=>1,
         "name"=>"Arwa",
         "body"=>"This is post from Arwa",
         "title"=>"Arwa's post"
         ],
         ["id"=>2,
         "name"=>"Ahmed",
         "body"=>"This is post from Ahmed",
         "title"=>"Ahmed's post"
         ],
         ["id"=>3,
         "name"=>"Mohamed",
         "body"=>"This is post from Mohamed",
         "title"=>"Mohamed's post"
         ],
         ["id"=>4,
         "name"=>"Aya",
         "body"=>"This is post from Aya",
         "title"=>"Aya's post"
         ]
        ];
    return view('posts.post',["posts"=>$posts]);
});

Route::get("/show/{id}/{name}/{body}/{title}",function($id,$name,$body,$title){
    $post=["id"=>$id,
    "name"=>$name,
    "body"=>$body,
    "title"=>$title
];
return view("posts.show",$post);
})->where('id','[0-9]+');

Route::get("/edit/{id}/{name}/{body}/{title}",function($id,$name,$body,$title){
    $post=["id"=>$id,
    "name"=>$name,
    "body"=>$body,
    "title"=>$title
];
return view("posts.edit",$post);
});

Route::post("update",function(){
    return "Update";
});
Route::post("store",function(){
    return "New Post has been stored !";
});
Route::get("/create",function(){
    return view("posts.create");
});
Route::post("/store",function(){
    return "New Post has been Added !";
});
*/