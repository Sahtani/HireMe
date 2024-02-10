<?php

use App\Http\Controllers\Company;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jobseeker as ControllersJobseeker;
use App\Http\Controllers\ProfileController;

use App\Models\Jobseeker;
use Illuminate\Support\Facades\Route;
use Khrigo\SkillsList\SkillsList as skills;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route of jobseeker
Route::prefix('home')->name('user.')->group(function(){
    Route::get('/', [Home::class, 'index'])->name('index');
    Route::get('/create', [ControllersJobseeker::class, 'create'])->name('create');
    Route::post('/store', [ControllersJobseeker::class, 'store'])->name("store");
    Route::get('/show',[ControllersJobseeker::class, 'show'])->name('show');
    
   


});
Route::post('home/store', [ExperienceController::class, 'store'])->name("storeexperience");
Route::prefix('company')->name('company.')->group(function(){
    
    Route::get('/', [Home::class, 'index'])->name('index');

    Route::get('/create', [Company::class, 'create'])->name('create');
   
    Route::post('/store', [Company::class, 'store'])->name("store");
    



});

Route::get('/dashboard', function () {
    return view('user/dashbord');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/skills', function()
{
	$skill=new Skills();
  return  $skill->getList('json');
});


require __DIR__.'/auth.php';
