<?php

use PharIo\Manifest\Url;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return 'Welcome Page';
});


// Route::get('user/{name}/{age}', function($name,$age){
//     return 'Your name is '.$name .' Your age is'.$age;
// })->whereAlpha('name')->whereNumber('age');


// Route::get('news/{news?}',function($news = null){
//    return "News ".$news;
// });


// Route::get('/user/posts/{postId}/comments/{commentId}/show',function($postId , $commentId){
//     return 'Post Number '.$postId . ' Comment Number '. $commentId;
// })->name('userInfo');



// Route::get('url',function(){
//       $postId = 205;
//       $commentId = 827;
//       $url = route('userInfo',[$postId,$commentId]);

//     return 'Your Url Is  :   '.$url;
// });





// Route::get('/newRout',[SiteController::class,'index']);



// 10 admin 
// 5 customer
// 5 user