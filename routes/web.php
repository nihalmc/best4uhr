<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerAuthController;
use App\Http\Controllers\CandidateAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\CandidateDetailsController;
use App\Http\Controllers\CandidateJobController;
use App\Http\Controllers\JobApplicationController;

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




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/home-cv-drop', [HomeController::class, 'store'])->name('home.upload');
Route::get('/enquriform', [HomeController::class, 'enquriform'])->name('enquriform');
Route::post('/enquriformupload', [HomeController::class, 'enquriformupload'])->name('enquriformupload');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/homejobs', [HomeController::class, 'indexd'])->name('home.jobs');
Route::get('/Postjobs', [HomeController::class, 'postjobs'])->name('post.jobs');
Route::get('/home/{jobId}/job-detail', [HomeController::class, 'show'])->name('Home.job-detail');

Route::resource('free-jobs', HomeController::class); 
Route::get('/career', [HomeController::class, 'career'])->name('home.career');
Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
Route::get('/recruitments', [HomeController::class, 'recruitments'])->name('home.recruitments');
Route::get('/specialization', [HomeController::class, 'specialization'])->name('home.specialization');

Route::get('/Contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/Contact', [HomeController::class, 'submitContactForm'])->name('sendemail.contact');

Route::get('jobs/{jobId}/applyok', [HomeController::class, 'created'])->name('job.apply.formd');
Route::post('jobs/{jobId}/applyok', [HomeController::class, 'stored'])->name('job.apply.stored');



// Admin login routes


Route::get('/admin',[AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login',[AuthController::class, 'adminLogin'])->name('admin.loginsubmit');


Route::group(['middleware' => 'auth:user'], function () {
    Route::get('/admin/dashboard', [AuthController::class, 'index'])->name('admin.index');
Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');

Route::prefix('admin')->group(function () {
    Route::get('/jobs', [AdminJobController::class, 'index'])->name('admin.jobListings');
    Route::put('jobs/{job}/update-status/{status}', [AdminJobController::class, 'updateStatus'])->name('jobs.update-status');
    Route::get('/candidate/applied-jobs', [AdminJobController::class, 'appliedJobs'])->name('job.applications.index');
    Route::put('/applied-jobs/{application}/update-status/{status}', [AdminJobController::class, 'Status'])
    ->name('applied-jobs.update-status');
    Route::put('/job-applications/{application}/update-status/{status}', [AdminJobController::class, 'lastStatus'])
    ->name('admin.job-applications.update-status');
    Route::put('/applied-jobs/{application}/update-lstatus', [AdminJobController::class, 'updateLStatus'])
    ->name('applied-jobs.update-lstatus');
     Route::get('/candidate/Cvenquiry', [AdminJobController::class, 'display'])->name('admin.display');
     Route::get('/generate-pdf',[AdminJobController::class, 'generatePdf'])->name('generatePdf');
Route::delete('/Cvenquiry/delete/{id}', [AdminJobController::class, 'cvenquiry'])->name('cvenquiry.destroy');
Route::get('admin/jobsdetails', [AdminJobController::class, 'show'])->name('admin.jobsdetails');
 Route::get('admin/jobs/create',[AdminJobController::class ,'create'] )->name('admin.jobs.create');
Route::post('admin/jobs/store', [AdminJobController::class ,'store'])->name('admin.jobs.store');
 Route::get('admin/jobs/show{id}',[AdminJobController::class ,'showjob'] )->name('admin.jobs.show');
// routes/web.php



Route::get('admin/jobs/edit/{id}', [AdminJobController::class, 'edit'])->name('admin.jobs.edit');

Route::put('admin/jobs/update/{id}', [AdminJobController::class, 'update'])->name('admin.jobs.update');

Route::delete('admin/jobs/destroy/{id}', [AdminJobController::class, 'destroy'])->name('admin.jobs.destroy');

Route::get('/admin/jobs/download-open-pdf', [AdminJobController::class,'downloadAllFiles'])->name('admin.jobs.downloadOpenPDF');
// File: routes/web.php

Route::post('/jobs/close', [AdminJobController::class, 'closeJobs'])->name('jobs.close');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password.form');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password');



Route::resource('employers', EmployerController::class);
Route::get('employers/download/all', [EmployerController::class,'downloadAllFiles'])->name('employers.downloadAllFiles');

Route::resource('candidates', CandidateController::class);


Route::get('jobseeker/download/all', [CandidateController::class,'downloadAllFiles'])->name('jobseekers.downloadAllFiles');
});
});


Route::put('/candidates/{candidate}/update-status/{status}', [CandidateController::class, 'updateStatus'])
    ->name('candidates.updateStatus');

// Employer Login Routes
Route::post('/employer/register', [EmployerAuthController::class, 'register'])->name('employer.register.submit');
Route::get('/employer/login', [EmployerAuthController::class, 'showLoginForm'])->name('employer.login');
Route::post('/employer/login', [EmployerAuthController::class, 'login'])->name('employer.loginsubmit');
Route::middleware(['employer.auth'])->group(function () {
    Route::get('/employer/dashboard', [EmployerAuthController::class, 'login'])->name('employer.dashboard');
    Route::get('/employer', [EmployerAuthController::class, 'index'])->name('employer.index');

Route::get('/employer/change-password', [EmployerAuthController::class, 'showChangePasswordForm'])->name('employer.change.password.form');

// Handle the change password form submission
Route::post('/employer/change-password', [EmployerAuthController::class, 'changePassword'])->name('employer.change.password');


Route::get('/employer/logout', [EmployerAuthController::class, 'logout'])->name('employer.logout');
Route::get('/employer/register', [EmployerAuthController::class, 'showRegistrationForm'])->name('employer.register');
// Handle employer registration form submission


Route::resource('jobs', JobController::class);
// Show the change password form
Route::get('/employer/change-password', [EmployerAuthController::class, 'showChangePasswordForm'])->name('employer.change.password.form');

// Handle the change password form submission
Route::post('/employer/change-password', [EmployerAuthController::class, 'changePassword'])->name('employer.change.password');
Route::get('/employer/applied-jobs', [JobController::class, 'appliedJobs'])->name('applied-jobs.index');
});





Route::put('/job-applications/{application}/update-last-status', [JobController::class, 'lastStatus'])
    ->name('job-applications.update-last-status');




Route::get('/jobseeker/login', [CandidateAuthController::class, 'showLoginForm'])->name('candidate.login');
Route::post('/jobseeker/login', [CandidateAuthController::class, 'login'])->name('candidate.loginsubmit');
Route::post('/jobseeker/register', [CandidateAuthController::class, 'register'])->name('candidate.register.submit');

Route::middleware(['candidate.auth'])->group(function () {
    Route::get('/jobseeker/dashboard',[CandidateAuthController::class, 'login'])->name('candidate.dashboard');
    Route::get('/jobseeker', [CandidateAuthController::class, 'index'])->name('candidate.index');


Route::get('/jobseeker/logout', [CandidateAuthController::class, 'logout'])->name('candidate.logout');

Route::get('/jobseeker/register', [CandidateAuthController::class, 'showRegistrationForm'])->name('candidate.register');
// Handle employer registration form submission


// Show the change password form
Route::get('/jobseeker/change-password', [CandidateAuthController::class, 'showChangePasswordForm'])->name('candidate.change.password.form');

// Handle the change password form submission
Route::post('/jobseeker/change-password', [CandidateAuthController::class, 'changePassword'])->name('candidate.change.password');
Route::resource('candidate-details', CandidateDetailsController::class);

// Show the form for editing candidate details
Route::get('/jobseeker/details/edit', [CandidateDetailsController::class, 'edit'])->name('candidate.details.edit');

// Update candidate details
Route::put('/jobseeker/details/update', [CandidateDetailsController::class, 'update'])->name('candidate.details.update');

// Show candidate details
Route::get('/jobseeker/details', [CandidateDetailsController::class, 'showCandidateDetails'])->name('candidate.details.show');


Route::get('/jobseeker/jobs', [JobApplicationController::class, 'index'])->name('candidate.jobs.index');
Route::get('/jobseeker/{jobId}/job-detail', [JobApplicationController::class, 'show'])->name('candidate.job-detail');

Route::get('jobs/{jobId}/apply', [JobApplicationController::class, 'create'])->name('job.apply.form');
Route::post('jobs/{jobId}/apply', [JobApplicationController::class, 'store'])->name('job.apply.store');

Route::get('/jobseeker/applied-jobs', [JobApplicationController::class, 'appliedJobs'])->name('candidate.applied-jobs');
    // Add other protected routes for candidates here
});













