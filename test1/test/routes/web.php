<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\seatController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\contactsController;
use App\Models\Setting;
use App\Models\Teacher;
use App\Models\Gallery;
use App\Models\Book;
use App\Models\Room;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Comment;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::get('/', [Homecontroller::class,'index']);
Route::get('/about', function () {
    $settings= Setting:: all();
    $teachers= Teacher:: all();
    $galleries= Gallery:: all();
    return view('about',['settings'=>$settings,'teachers'=>$teachers,'galleries'=>$galleries]);
  
});
Route::get('/blogs', function () {
    $settings= Setting:: all();
    $blogs= Blog::all();
    return view('blog',['settings'=>$settings , 'blogs'=>$blogs]);
});
Route::get('/class', function () {
    $settings= Setting:: all();
    $books= Book::all();
    $rooms=Room::all();
    return view('class',['settings'=>$settings,'books'=>$books, 'rooms'=>$rooms]);
});
Route::get('/contacts', function () {
    $settings= Setting:: all();
    $contacts= Contact:: all();
    return view('contact',['settings'=>$settings, 'contacts'=>$contacts]);
});
Route::get('/galleries', function () {
    $settings= Setting:: all();
    $galleries= Gallery:: all();
    return view('gallery',['settings'=>$settings,'galleries'=>$galleries]);
});
Route::get('/team', function () {

 $settings= Setting:: all();
 $teachers= Teacher:: all();
    return view('team',['settings'=>$settings,'teachers'=>$teachers]);
});
Route::get('/single', function () {

 $settings= Setting:: all();
 $comments= Comment:: all();
 $blogs= Blog:: all();
 $numOfComment = Comment::count();
    return view('single',['settings'=>$settings,'comments'=>$comments,'blogs'=>$blogs,'numOfComment'=>$numOfComment]);
});
Route::post('/seat',[seatcontroller::class,'store'])->name('seat');
Route::post('/news',[newscontroller::class,'store'])->name('news');
Route::post('/comments',[commentscontroller::class,'store'])->name('comments');
Route::post('/contacts',[contactscontroller::class,'store'])->name('contacts');



Route::middleware('auth')->group(function () {
        Route::resource('/dashboard',AdminController::class);
        Route::resource('/gallery',GalleryController::class);
        Route::resource('/teacher',TeacherController::class);
        Route::resource('/blog',BlogController::class);
        Route::resource('/book',BookController::class);
        Route::resource('/comment',CommentController::class);
        Route::resource('/contact',ContactController::class);
        Route::resource('/father',FatherController::class);
        Route::resource('/kid',KidController::class);
        Route::resource('/newsletter',NewsletterController::class);
        Route::resource('/setting',SettingController::class);
        Route::resource('/room',RoomController::class);
        Route::resource('/father',FatherController::class);
        Route::resource('/subject',SubjectController::class);
        Route::resource('/review',ReviewController::class);
});

require __DIR__.'/auth.php';
