<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::resource('photos', PhotoController::class) -> only(['index', 'show']);

Route::resource('photos', PhotoController::class) -> except(['create', 'store', 'update', 'destroy']);


Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-".$commentId;
});

Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/', [HomeController::class, 'index']);

Route :: get('/world', function () {
    return 'World';
});

Route::get('/hello', [WelcomeController::class, 'hello']);


// Route::get = Mendefinisikan route dengan method GET
// /hello = URL yang akan diakses
// function() = Fungsi yang dijalankan saat URL diakses
// return 'Hello World!' = Mengembalikan teks sebagai respon ke browser
// PHP tidak perlu menuliskan tipe data secara eksplisit
// karena PHP otomatis mengenali bahwa 'Hello World!' adalah string.

// get('/user/{name}'), {name} adalah parameter dinamis yang otomatis terisi dengan nilai yang kita tulis saat mengakses URL. 
// function($name) adalah sebuah fungsi yang menerima parameter $name
// return 'Nama saya '.$name; adalah perintah untuk mengembalikan string 'Nama saya ' diikuti dengan nilai dari parameter $name yang diterima oleh function($name).
// Contohnya, jika aku mengakses /user/nisho , maka parameter {name} akan terisi dengan nilai 'nisho', dan halaman akan menampilkan teks 'Nama saya nisho'.

// Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) adalah sebuah route yang memiliki dua parameter dinamis yaitu {post} dan {comment}.
// function($postId, $commentId) adalah fungsi yang menerima dua parameter yaitu $postId dan $commentId yang akan diisi dengan nilai dari parameter {post} dan {comment} saat URL diakses.
// return 'Pos ke-'.$postId." Komentar ke-".$commentId adalah perintah untuk mengembalikan string yang berisi informasi tentang nomor post dan nomor komentar yang diakses. 
//Contohnya, jika aku mengakses /posts/1/comments/5, maka $postId akan bernilai 1 dan $commentId akan bernilai 5.

// Route::get('/user/{name?}', function ($name=null) adalah sebuah route yang memiliki parameter dinamis {name} yang bersifat opsional, ditandai dengan tanda tanya (?).
// function ($name=null) adalah fungsi yang menerima parameter $name yang memiliki nilai default null jika tidak ada nilai yang diberikan saat mengakses URL.
// return 'Nama saya '.$name; adalah perintah untuk mengembalikan string 'Nama saya ' diikuti dengan nilai dari parameter $name.
// Contohnya, jika aku mengakses /user/John, maka $name akan bernilai 'John' dan halaman akan menampilkan teks 'Nama saya John'.
// Jika aku mengakses /user tanpa memberikan nilai untuk {name}, maka $name akan bernilai null dan halaman akan menampilkan teks 'Nama saya ' tanpa nama.