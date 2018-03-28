<?php

use App\Notifications\TaskAccess;
use App\User;
use App\AccountController;
use Carbon\Carbon;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

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
////////////////////////////////////////////// ADMIN AREA ////////////////////////////////////////////////////

Route::get('/', function () {
    return view('welcome');
});

//this is just for an admin authorized
Route::get('/account',['middleware' => 'admin', function (Request $request) {
	
        if($request->get('search') != NULL) {
            $cari = $request->get('search');
            $account = User::orderBy('name', 'ASC')->where('name','LIKE','%'. $cari .'%')->orWhere('username','LIKE','%'. $cari .'%')->orWhere('email','LIKE','%'. $cari .'%')->paginate(90);
            if (Auth()->user()->role != '0' && Auth()->user()->role != '5') {
                 return view('account.index', compact('account', 'cari'));
            }else{
                return redirect()->back()->with('messageerror', 'Anda tidak boleh memasuki area ini selama belum verifikasi!');
            }
        }else{
            $cari = null;
            $account = User::orderBy('name','ASC')->paginate(15);
            if (Auth()->user()->role != '0' && Auth()->user()->role != '5') {
                 return view('account.index', compact('account', 'cari'));
            }else{
                return redirect()->back()->with('messageerror', 'Anda tidak boleh memasuki area ini selama belum verifikasi!');
            }
        }
}])->middleware('auth');

Route::get('/reports', 'ReportsController@viewTask')->name('reports')->middleware('auth', 'admin');
Route::get('/reports/read/{id}', 'ReportsController@read')->middleware('auth', 'admin');

/* on developement...
Route::get('/taskadmin/readAllTask', 'TaskAdminController@readAllTask')->middleware('auth');
*/

//detail notification
Route::get('/admin/notification/{id}', function () {
	if (Auth()->user()->role == '2') {
		$notify = Notifications::find($id);
		return view('account.notify', compact('notify'));
	}else{
		$id = Auth()->user()->id;
		$user = User::find(1);
		$userdata = User::find($id);
		Notification::send($user, new \App\Notifications\TaskAccess($userdata));
		return redirect()->back()->with('message', 'Anda tidak di perkenankan masuk ke area ini!');
	}
})->middleware('auth');

//notify-markAsRead-all
Route::get('markAsRead', function(){
	Auth()->user()->unreadNotifications->markAsRead();
	return redirect()->back();
})->name('notify-read');

//read for one notify only for report admin
Route::get('markAsRead/report/{id}', function($id){
	Auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
	return redirect()->route('reports');
})->name('notify-read-one');

//notify-clearly
Route::get('clearNotify', function(){
	Auth()->user()->notifications()->delete();
	return redirect()->back();
})->name('notify-clearly');

////////////////////////////////////////////// END ADMIN AREA ////////////////////////////////////////////////////

Route::group(['middleware' => 'revalidate'],function(){
	//siswa
Route::group(['middleware' => 'ban'], function(){

Route::resource('siswa', 'SiswaController')->middleware('auth');
Route::post('/siswa/update/{id}', 'SiswaController@update')->middleware('auth');
Route::post('/siswa/uploadpic/{id}', 'SiswaController@uploadpic')->middleware('auth');
Route::post('/siswa/resetpic/{id}', 'SiswaController@resetpic')->middleware('auth');
Route::get('/siswa/delete/{id}', 'SiswaController@destroy')->middleware('auth');
Route::get('/siswa/deletechecked/{id}', 'SiswaController@destroychecked')->middleware('auth');
Route::get('/siswa/per-kelas', 'SiswaController@cariSiswa')->name('cari.siswa.per-kelas')->middleware('auth');


//rekap nilai
Route::resource('rekap', 'RekapController')->middleware('auth');
Route::post('/rekap/rekapnilai/update/{id}', 'RekapController@update')->middleware('auth');
Route::post('/rekap/rekapnilai/store/{id}', 'RekapController@store')->middleware('auth');
Route::post('/rekap/rekapnilai/delete/{id}', 'RekapController@destroy')->middleware('auth');
Route::get('/rekap/rekapnilai/deletechecked/{id}', 'RekapController@destroychecked')->middleware('auth');

//kelas
Route::resource('kelas', 'KelasController')->middleware('auth');
Route::post('/kelas/add', 'KelasController@store')->middleware('auth');
Route::post('/kelas/update/{id}', 'KelasController@update')->middleware('auth');
Route::get('/kelas/delete/{id}', 'KelasController@destroy')->middleware('auth');
Route::get('/kelas/deletechecked/{id}', 'KelasController@destroychecked')->middleware('auth');

//AccountController
Route::post('/account/add', 'AccountController@store')->middleware('auth');
//import the student's account.
Route::post('/account/import-excel', 'AccountController@importSiswa')->middleware('auth');
//import the teacher's account.
Route::post('/account/import-excel/guru', 'AccountController@importGuru')->middleware('auth');
Route::post('/account/update/{id}', 'AccountController@update')->middleware('auth');
Route::get('/account/delete/{id}', 'AccountController@destroy')->middleware('auth');
Route::post('/account/deletechecked/{id}', 'AccountController@destroychecked')->name('account.destroy')->middleware('auth');


//mapel
Route::resource('mapel', 'MapelController')->middleware('auth');
Route::post('/mapel/add', 'MapelController@store')->middleware('auth');
Route::post('/mapel/update/{id}', 'MapelController@update')->middleware('auth');
Route::get('/mapel/delete/{id}', 'MapelController@destroy')->middleware('auth');
Route::get('/mapel/deletechecked/{id}', 'MapelController@destroychecked')->middleware('auth');

//mapel produktif
Route::get('mapel-produktif', 'MapelController@mapelProduktif')->middleware('auth');


//guru
Route::resource('guru', 'GuruController')->middleware('auth');
Route::post('/guru/add', 'GuruController@store')->middleware('auth');
Route::post('/guru/update/{id}', 'GuruController@update')->middleware('auth');
Route::post('/guru/uploadpic/{id}', 'GuruController@uploadpic')->middleware('auth');
Route::post('/guru/resetpic/{id}', 'GuruController@resetpic')->middleware('auth');
Route::get('/guru/delete/{id}', 'GuruController@destroy')->middleware('auth');
Route::get('/guru/deletechecked/{id}', 'GuruController@destroychecked')->middleware('auth');
Route::post('/guru/input-mata-pelajaran/store/{id}', 'GuruController@mapel')->middleware('auth');


//jurusan
Route::resource('jurusan', 'JurusanController')->middleware('auth');
Route::post('/jurusan/add', 'JurusanController@store')->middleware('auth');
Route::post('/jurusan/update/{id}', 'JurusanController@update')->middleware('auth');
Route::get('/jurusan/delete/{id}', 'JurusanController@destroy')->middleware('auth');
Route::get('/jurusan/deletechecked/{id}', 'JurusanController@destroychecked')->middleware('auth');

//discuss-group
Route::get('home/discuss-group', 'DiscussGroupController@index')->name('home.discuss-group')->middleware('auth');
Route::post('/timeline/add', 'DiscussGroupController@store')->middleware('auth');
Route::post('/timeline/update/{id}', 'DiscussGroupController@update')->middleware('auth');
Route::get('/timeline/delete/{id}', 'DiscussGroupController@destroy')->middleware('auth');
Route::get('/timeline/deletechecked/{id}', 'DiscussGroupController@destroychecked')->middleware('auth');
Route::get('/home/discuss-group/comment/post/{id}', 'DiscussGroupController@show')->name('posts.show')->middleware('auth');
Route::post('/home/comments/store', 'CommentController@store')->name('comment.store')->middleware('auth');
Route::post('/home/comments/store/{id}', 'CommentController@store')->name('comment.store')->middleware('auth');
Route::get('/home/discuss-group/share/{id}', 'DiscussGroupController@share')->name('home.comment.share')->middleware('auth');
Route::post('/home/timeline/share/add', 'TimelineCDiscussGroupControllerontroller@shareStore')->name('timeline.home')->middleware('auth');
Route::get('/home/discuss-group/post/edit/{id}', 'DiscussGroupController@editPost')->middleware('auth');

///timeline
Route::resource('home/timeline', 'TimelineController')->middleware('auth');

//tahun-ajaran

Route::resource('tahun-ajaran', 'TahunController')->middleware('auth');
Route::get('tahun-ajaran/show/{id}', 'TahunController@show')->middleware('auth');
Route::post('tahun-ajaran/add', 'TahunController@store')->middleware('auth');

//rekap nilai
Route::resource('rekapnilai', 'RekapNilaiController')->middleware('auth');
Route::get('rekapnilai/edit/{id}', 'RekapNilaiController@edit')->name('rekapnilai.edit')->middleware('auth');
Route::post('rekapnilai/edit-nilai/{id}', 'RekapNilaiController@update')->name('rekap.update')->middleware('auth');
Route::get('rekapnilai/cetak-nilai/semester-{slug}/{id} ', 'RekapNilaiController@cetak')->middleware('auth');
Route::get('/rekapnilai/hapus/{id}', ['as'=>'rekapnilai.destroy', 'uses'=>'RekapNilaiController@destroy']);

/*
//download nilai
Route::get('/downloadHasilNilai/{type}', 'RekapNilaiController@downloadNilai')->middleware('auth');
*/

//input nilai
Route::get('inputnilai/siswa/{slug}', 'InputNilaiController@show')->name('inputnilai')->middleware('auth');
Route::post('inputnilai/add', 'InputNilaiController@store')->middleware('auth');
Route::post('inputnilai/import-excel', 'InputNilaiController@importNilai')->middleware('auth');
Route::get('/importnilai', 'InputNilaiController@viewImportNilai')->middleware('auth');
Route::post('/imported-file/progress', 'InputNilaiController@storeImportNilai')->middleware('auth');

//lihat nilai saya (siswa section)
Route::get('/lihat-datasaya/lihat-nilai/{name}', 'DayaSayaController@viewOwnGrade')->name('lihat.nilai')->middleware('auth');
Route::get('/nilai/cari/{id}', 'RekapNilaiController@show')->name('lihat.nilai.show')->middleware('auth');

//profile (user)
Route::get('profile/{id}', 'ProfileController@myProfile')->middleware('auth');
Route::post('/profile/uploadpic/{id}', 'ProfileController@uploadPic')->middleware('auth');
Route::post('/profile/resetpic/{id}', 'ProfileController@resetpic')->middleware('auth');
Route::post('/profile/edit-personal', 'ProfileController@update')->middleware('auth');

});

//auth route
Auth::routes();

//verification route

Route::get('/home', 'HomeController@index', function(){
	if (Auth()->user()->role == '0' && Auth()->user()->role == '5') {
		return view('verify');
	}else{
		return view('home');
	}
})->name('home');

Route::get('/verification/user/{slug}', 'VerificationController@index')->name('verification')->middleware('auth');
Route::post('/verification/user/send/{id}', 'VerificationController@update')->name('verify')->middleware('auth');
Route::get('/verification/user/success/{id}', 'VerificationController@success')->name('verification.last.step')->middleware('auth');

//to change password
Route::get('/changepassword', 'HomeController@showchangepassword')->middleware('auth');
Route::post('/changepassword/proses', 'HomeController@changepassword')->name('changepassword')->middleware('auth');

});

