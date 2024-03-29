<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Company;
use App\Http\Controllers\CursusController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Home;
use App\Http\Controllers\JobOffer;
use App\Http\Controllers\Jobseeker as ControllersJobseeker;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
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
    return view('home');
})->name("home")->middleware('guest');




Route::get('/home', [Home::class, 'index'])->name('index')->middleware(['auth', 'verified']);

Route::middleware("auth",'user')->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/create', [ControllersJobseeker::class, 'create'])->name('create');
        Route::post('/store', [ControllersJobseeker::class, 'store'])->name("store");
        Route::get('/show', [ControllersJobseeker::class, 'show'])->name('show');
        // cv
        Route::get('/showcv', [ControllersJobseeker::class, 'showcv'])->name('showcv');
        Route::get('/download', [CvController::class, 'downloadCV'])->name('download');

        // experiencs
        Route::get('/newexperience', [ExperienceController::class, 'create'])->name('createexperience');
        Route::post('/new', [ExperienceController::class, 'store'])->name('storeexperience');

        // cursus
        Route::get('/newcursus', [CursusController::class, 'create'])->name('createcursus');
        Route::post('/storecursus', [CursusController::class, 'store']);
        // skills
        Route::post('/storeskill', [SkillController::class, 'store'])->name('storeskill');
        // Language
        Route::get('/newlangue', [LanguageController::class, 'create'])->name('createlangue');
        Route::post('/storelangue', [LanguageController::class, 'store'])->name('storelangue');
        // mailchimp
        Route::post('/newsletter', [NewsletterController::class, 'Subscribe'])->name('subscribe');
    });

    Route::prefix('company')->middleware('auth','company')->name('company.')->group(function () {
        Route::get('/all', [Company::class, 'index'])->name("all");
        Route::get('/profile', [Company::class, 'show'])->name('profile');

        Route::get('/create', [Company::class, 'create'])->name('create');

        Route::post('/store', [Company::class, 'store'])->name("store");

    });



    // job offer
    Route::prefix('offer')->name('offer.')->group(function () {
        Route::get('/myoffer', [JobOffer::class, 'Myoffer'])->name('myoffer');
        Route::get('/create', [JobOffer::class, 'create'])->name('create');
        Route::post('/store', [JobOffer::class, 'store'])->name('store');
        Route::get('/edit/{id}', [JobOffer::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [JobOffer::class, 'update'])->name('update');

        Route::delete('/detroy/{id}', [JobOffer::class, 'destroy'])->name('destroy');
        Route::get('/show', [JobOffer::class, 'show'])->name('show');
        Route::get('/apply/{id}', [JobOffer::class, 'apply'])->name('apply');
        Route::get('/read/{id}', [JobOffer::class, 'read'])->name('read');
        Route::get('/search', [JobOffer::class, 'search'])->name('search');
    });
    // Route::resource("company", Company::class);
    // Route::get('/dashboard', function () {
    //     return view('user/dashbord');
    // });


    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource("profile", ProfileController::class);
});


// route of admin
Route::prefix('admin')->middleware('auth', 'admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [Admin::class, 'index'])->name('dash');
    Route::get('/company', [Admin::class, 'allCompanies'])->name('company');
    Route::get('/offers', [Admin::class, 'allJoboffers'])->name('offers');
});





require __DIR__ . '/auth.php';
