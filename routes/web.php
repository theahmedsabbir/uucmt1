<?php

use Illuminate\Support\Facades\Route;
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


// frontend
Route::get('/', 'Frontend\FrontendController@index')->name('root');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// admin route group
Route::group( ['prefix'=>'/admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){

	// dashboard
	Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

	// profile
	Route::get('/profile', 'DashboardController@profile')->name('admin.profile');

	// admins
	Route::get('/admins/all', 'AdminController@index')->name('admin.admins.all');
	Route::get('/admins/add', 'AdminController@create')->name('admin.admins.create');
	Route::post('/admins/add', 'AdminController@store')->name('admin.admins.store');
	Route::get('/admins/edit/{id}', 'AdminController@edit')->name('admin.admins.edit');
	Route::post('/admins/update/{adminId}', 'AdminController@update')->name('admin.admins.update');
	Route::post('/admins/delete/{id}', 'AdminController@delete')->name('admin.admins.delete');

	// teachers
	Route::get('/teachers/all', 'TeacherController@index')->name('admin.teachers.all');
	Route::get('/teachers/add', 'TeacherController@create')->name('admin.teachers.create');
	Route::post('/teachers/add', 'TeacherController@store')->name('admin.teachers.store');
	Route::get('/teachers/show/{id}', 'TeacherController@show')->name('admin.teachers.show');
	Route::get('/teachers/edit/{id}', 'TeacherController@edit')->name('admin.teachers.edit');
	Route::post('/teachers/update/{teacherId}', 'TeacherController@update')->name('admin.teachers.update');
	Route::post('/teachers/delete/{id}', 'TeacherController@delete')->name('admin.teachers.delete');

	// stuffs
	Route::get('/stuffs/all', 'StuffController@index')->name('admin.stuffs.all');
	Route::get('/stuffs/add', 'StuffController@create')->name('admin.stuffs.create');
	Route::post('/stuffs/add', 'StuffController@store')->name('admin.stuffs.store');
	Route::get('/stuffs/show/{id}', 'StuffController@show')->name('admin.stuffs.show');
	Route::get('/stuffs/edit/{id}', 'StuffController@edit')->name('admin.stuffs.edit');
	Route::post('/stuffs/update/{id}', 'StuffController@update')->name('admin.stuffs.update');
	Route::post('/stuffs/delete/{id}', 'StuffController@delete')->name('admin.stuffs.delete');

	// students
	Route::get('/students/all', 'StudentController@index')->name('admin.students.all');
	Route::get('/students/add', 'StudentController@create')->name('admin.students.create');
	Route::post('/students/add', 'StudentController@store')->name('admin.students.store');
	Route::get('/students/show/{id}', 'StudentController@show')->name('admin.students.show');
	Route::get('/students/edit/{id}', 'StudentController@edit')->name('admin.students.edit');
	Route::post('/students/update/{studentId}', 'StudentController@update')->name('admin.students.update');
	Route::post('/students/delete/{id}', 'StudentController@delete')->name('admin.students.delete');

	// batch
	Route::get('/batch/all', 'BatchController@index')->name('admin.batch.all');
	Route::get('/batch/add', 'BatchController@create')->name('admin.batch.create');
	Route::post('/batch/add', 'BatchController@store')->name('admin.batch.store');
	Route::get('/batch/show/{id}', 'BatchController@show')->name('admin.batch.show');
	Route::get('/batch/edit/{id}', 'BatchController@edit')->name('admin.batch.edit');
	Route::post('/batch/update/{id}', 'BatchController@update')->name('admin.batch.update');
	Route::post('/batch/delete/{id}', 'BatchController@delete')->name('admin.batch.delete');

	// semesters
	Route::get('/semester/all', 'SemesterController@index')->name('admin.semesters.all');
	Route::get('/semester/add', 'SemesterController@create')->name('admin.semesters.create');
	Route::post('/semester/add', 'SemesterController@store')->name('admin.semesters.store');
	Route::get('/semester/show/{id}', 'SemesterController@show')->name('admin.semesters.show');
	Route::get('/semester/edit/{id}', 'SemesterController@edit')->name('admin.semesters.edit');
	Route::post('/semester/update/{id}', 'SemesterController@update')->name('admin.semesters.update');
	Route::post('/semester/delete/{id}', 'SemesterController@delete')->name('admin.semesters.delete');

	// courses
	Route::get('/course/all', 'CourseController@index')->name('admin.courses.all');
	Route::get('/course/add', 'CourseController@create')->name('admin.courses.create');
	Route::post('/course/add', 'CourseController@store')->name('admin.courses.store');
	Route::get('/course/show/{id}', 'CourseController@show')->name('admin.courses.show');
	Route::get('/course/edit/{id}', 'CourseController@edit')->name('admin.courses.edit');
	Route::post('/course/update/{id}', 'CourseController@update')->name('admin.courses.update');
	Route::post('/course/delete/{id}', 'CourseController@delete')->name('admin.courses.delete');

	// coursePosts
	Route::post('/coursePost/add', 'CoursePostController@store')->name('admin.coursePosts.store');
	Route::get('/coursePost/edit/{id}', 'CoursePostController@edit')->name('admin.coursePosts.edit');
	Route::post('/coursePost/update/{id}', 'CoursePostController@update')->name('admin.coursePosts.update');
	Route::post('/coursePost/delete/{id}', 'CoursePostController@delete')->name('admin.coursePosts.delete');

	// PostComment
	Route::post('/coursePost/comments/add', 'CoursePostController@commentStore')->name('admin.coursePosts.commentStore');
	Route::post('/coursePost/comments/delete/{id}', 'CoursePostController@commentDelete')->name('admin.coursePosts.commentDelete');


	// exams
	Route::get('/course/exams/add', 'ExamController@create')->name('admin.exams.create');
	Route::post('/course/exams/add', 'ExamController@store')->name('admin.exams.store');
	Route::get('/course/exams/showQuestionMaker/{id}', 'ExamController@showQuestionMaker')->name('admin.exams.showQuestionMaker');
	Route::get('/course/exams/edit/{id}', 'ExamController@edit')->name('admin.exams.edit');
	Route::post('/course/exams/update/{id}', 'ExamController@update')->name('admin.exams.update');
	Route::post('/course/exams/delete/{id}', 'ExamController@delete')->name('admin.exams.delete');

	//examQuestion
	Route::post('/course/exams/questionStore', 'ExamController@questionStore')->name('admin.exams.questionStore');

	// answer
	Route::get('/course/exams/answer/{id}', 'ExamController@showAnswerSheet')->name('admin.exams.showAnswerSheet');
	Route::post('/course/exams/answerStore', 'ExamController@answerStore')->name('admin.exams.answerStore');
	Route::post('/course/exams/answerMark/', 'ExamController@answerMark')->name('admin.exams.answerMark');
	Route::post('/course/exams/markStore/{resultId}', 'ExamController@markStore')->name('admin.exams.markStore');


	// results
	Route::get('/result/all', 'ResultController@index')->name('admin.results.all');

	// payments
	Route::get('/payments/all', 'PaymentController@index')->name('admin.payments.all');
	Route::get('/payments/add', 'PaymentController@create')->name('admin.payments.create');
	Route::post('/payments/add', 'PaymentController@store')->name('admin.payments.store');
	Route::get('/payments/myPayment/', 'PaymentController@myPayment')->name('admin.payments.myPayment');
	Route::get('/payments/edit/{id}', 'PaymentController@edit')->name('admin.payments.edit');
	Route::post('/payments/update/{id}', 'PaymentController@update')->name('admin.payments.update');
	Route::post('/payments/delete/{id}', 'PaymentController@delete')->name('admin.payments.delete');

	// notices
	Route::get('/notices/all', 'NoticeController@index')->name('admin.notices.all');
	Route::get('/notices/add', 'NoticeController@create')->name('admin.notices.create');
	Route::post('/notices/add', 'NoticeController@store')->name('admin.notices.store');
	Route::get('/notices/show/{id}', 'NoticeController@show')->name('admin.notices.show');
	Route::get('/notices/edit/{id}', 'NoticeController@edit')->name('admin.notices.edit');
	Route::post('/notices/update/{id}', 'NoticeController@update')->name('admin.notices.update');
	Route::post('/notices/delete/{id}', 'NoticeController@delete')->name('admin.notices.delete');

	// libraries
	Route::get('/libraries/all', 'LibraryController@index')->name('admin.libraries.all');
	Route::get('/libraries/add', 'LibraryController@create')->name('admin.libraries.create');
	Route::post('/libraries/add', 'LibraryController@store')->name('admin.libraries.store');
	Route::get('/libraries/show/{id}', 'LibraryController@show')->name('admin.libraries.show');
	Route::get('/libraries/edit/{id}', 'LibraryController@edit')->name('admin.libraries.edit');
	Route::post('/libraries/update/{id}', 'LibraryController@update')->name('admin.libraries.update');
	Route::post('/libraries/delete/{id}', 'LibraryController@delete')->name('admin.libraries.delete');
	Route::post('/libraries/borrow/', 'LibraryController@borrow')->name('admin.libraries.borrow');
	Route::post('/libraries/borrowDelete/', 'LibraryController@borrowDelete')->name('admin.libraries.borrowDelete');
	Route::get('/libraries/myBooks', 'LibraryController@myBooks')->name('admin.libraries.myBooks');

	// busServices
	Route::get('/busServices/all', 'BusController@index')->name('admin.busServices.all');
	Route::get('/busServices/add', 'BusController@create')->name('admin.busServices.create');
	Route::post('/busServices/add', 'BusController@store')->name('admin.busServices.store');
	Route::get('/busServices/show/{id}', 'BusController@show')->name('admin.busServices.show');
	Route::get('/busServices/edit/{id}', 'BusController@edit')->name('admin.busServices.edit');
	Route::post('/busServices/update/{id}', 'BusController@update')->name('admin.busServices.update');
	Route::post('/busServices/delete/{id}', 'BusController@delete')->name('admin.busServices.delete');

	// complains
	Route::get('/complains/all', 'ComplainController@index')->name('admin.complains.all');
	Route::get('/complains/add', 'ComplainController@create')->name('admin.complains.create');
	Route::post('/complains/add', 'ComplainController@store')->name('admin.complains.store');
	Route::post('/complains/delete/{id}', 'ComplainController@delete')->name('admin.complains.delete');

	// routines
	Route::get('/routines/all', 'RoutineController@index')->name('admin.routines.all');
	Route::get('/routines/add', 'RoutineController@create')->name('admin.routines.create');
	Route::post('/routines/add', 'RoutineController@store')->name('admin.routines.store');
	Route::get('/routines/show/{id}', 'RoutineController@show')->name('admin.routines.show');
	Route::get('/routines/edit/{id}', 'RoutineController@edit')->name('admin.routines.edit');
	Route::post('/routines/update/{id}', 'RoutineController@update')->name('admin.routines.update');
	Route::post('/routines/delete/{id}', 'RoutineController@delete')->name('admin.routines.delete');

	// clubs
	Route::get('/clubs/all', 'ClubController@index')->name('admin.clubs.all');
	Route::get('/clubs/add', 'ClubController@create')->name('admin.clubs.create');
	Route::post('/clubs/add', 'ClubController@store')->name('admin.clubs.store');
	Route::get('/clubs/show/{id}', 'ClubController@show')->name('admin.clubs.show');
	Route::get('/clubs/edit/{id}', 'ClubController@edit')->name('admin.clubs.edit');
	Route::post('/clubs/update/{id}', 'ClubController@update')->name('admin.clubs.update');
	Route::post('/clubs/delete/{id}', 'ClubController@delete')->name('admin.clubs.delete');

	// bloodDonations
	Route::get('/bloodDonations/all', 'BloodDonationController@index')->name('admin.bloodDonations.all');
	Route::get('/bloodDonations/add', 'BloodDonationController@create')->name('admin.bloodDonations.create');
	Route::post('/bloodDonations/add', 'BloodDonationController@store')->name('admin.bloodDonations.store');
	Route::get('/bloodDonations/myDonation', 'BloodDonationController@myDonation')->name('admin.bloodDonations.myDonation');
	Route::get('/bloodDonations/edit/{id}', 'BloodDonationController@edit')->name('admin.bloodDonations.edit');
	Route::post('/bloodDonations/update/{id}', 'BloodDonationController@update')->name('admin.bloodDonations.update');
	Route::post('/bloodDonations/delete/{id}', 'BloodDonationController@delete')->name('admin.bloodDonations.delete');
});

// teacher route groups
Route::group( ['prefix'=>'/teacher','namespace'=>'Teacher','middleware'=>['auth','teacher']], function(){

	Route::get('/dashboard', 'DashboardController@index')->name('teacher.dashboard');

	// profile
	Route::get('/profile', 'DashboardController@profile')->name('teacher.profile');

	// courses
	Route::get('/course/all', 'CourseController@index')->name('teacher.courses.all');
	Route::get('/course/show/{id}', 'CourseController@show')->name('teacher.courses.show');
	Route::get('/course/edit/{id}', 'CourseController@edit')->name('teacher.courses.edit');
	Route::post('/course/update/{id}', 'CourseController@update')->name('teacher.courses.update');

	// coursePosts
	Route::post('/coursePost/add', 'CoursePostController@store')->name('teacher.coursePosts.store');
	Route::get('/coursePost/edit/{id}', 'CoursePostController@edit')->name('teacher.coursePosts.edit');
	Route::post('/coursePost/update/{id}', 'CoursePostController@update')->name('teacher.coursePosts.update');
	Route::post('/coursePost/delete/{id}', 'CoursePostController@delete')->name('teacher.coursePosts.delete');

	// PostComment
	Route::post('/coursePost/comments/add', 'CoursePostController@commentStore')->name('teacher.coursePosts.commentStore');
	Route::post('/coursePost/comments/delete/{id}', 'CoursePostController@commentDelete')->name('teacher.coursePosts.commentDelete');


	// exams
	Route::get('/course/exams/add', 'ExamController@create')->name('teacher.exams.create');
	Route::post('/course/exams/add', 'ExamController@store')->name('teacher.exams.store');
	Route::get('/course/exams/showQuestionMaker/{id}', 'ExamController@showQuestionMaker')->name('teacher.exams.showQuestionMaker');
	Route::get('/course/exams/edit/{id}', 'ExamController@edit')->name('teacher.exams.edit');
	Route::post('/course/exams/update/{id}', 'ExamController@update')->name('teacher.exams.update');
	Route::post('/course/exams/delete/{id}', 'ExamController@delete')->name('teacher.exams.delete');

	//examQuestion
	Route::post('/course/exams/questionStore', 'ExamController@questionStore')->name('teacher.exams.questionStore');

	// answer
	Route::get('/course/exams/answer/{id}', 'ExamController@showAnswerSheet')->name('teacher.exams.showAnswerSheet');
	Route::post('/course/exams/answerStore', 'ExamController@answerStore')->name('teacher.exams.answerStore');
	Route::post('/course/exams/answerMark/', 'ExamController@answerMark')->name('teacher.exams.answerMark');
	Route::post('/course/exams/markStore/{resultId}', 'ExamController@markStore')->name('teacher.exams.markStore');

	// payments
	Route::get('/payments/all', 'PaymentController@index')->name('teacher.payments.all');

	// notices
	Route::get('/notices/all', 'NoticeController@index')->name('teacher.notices.all');

	// busServices
	Route::get('/busServices/all', 'BusController@index')->name('teacher.busServices.all');

	// complains
	Route::get('/complains/all', 'ComplainController@index')->name('teacher.complains.all');
	Route::get('/complains/add', 'ComplainController@create')->name('teacher.complains.create');
	Route::post('/complains/add', 'ComplainController@store')->name('teacher.complains.store');
	Route::post('/complains/delete/{id}', 'ComplainController@delete')->name('teacher.complains.delete');

	// routines
	Route::get('/routines/all', 'RoutineController@index')->name('teacher.routines.all');


});

// stuff route groups
Route::group( ['prefix'=>'/stuff','namespace'=>'Stuff','middleware'=>['auth','stuff']], function(){

	Route::get('/dashboard', 'DashboardController@index')->name('stuff.dashboard');

	// profile
	Route::get('/profile', 'DashboardController@profile')->name('stuff.profile');

	// payments
	Route::get('/payments/all', 'PaymentController@index')->name('stuff.payments.all');
	Route::get('/payments/add', 'PaymentController@create')->name('stuff.payments.create');
	Route::post('/payments/add', 'PaymentController@store')->name('stuff.payments.store');
	Route::get('/payments/myPayment/', 'PaymentController@myPayment')->name('stuff.payments.myPayment');
	Route::get('/payments/edit/{id}', 'PaymentController@edit')->name('stuff.payments.edit');
	Route::post('/payments/update/{id}', 'PaymentController@update')->name('stuff.payments.update');
	Route::post('/payments/delete/{id}', 'PaymentController@delete')->name('stuff.payments.delete');

	// notices
	Route::get('/notices/all', 'NoticeController@index')->name('stuff.notices.all');
	Route::get('/notices/add', 'NoticeController@create')->name('stuff.notices.create');
	Route::post('/notices/add', 'NoticeController@store')->name('stuff.notices.store');
	Route::get('/notices/show/{id}', 'NoticeController@show')->name('stuff.notices.show');
	Route::get('/notices/edit/{id}', 'NoticeController@edit')->name('stuff.notices.edit');
	Route::post('/notices/update/{id}', 'NoticeController@update')->name('stuff.notices.update');
	Route::post('/notices/delete/{id}', 'NoticeController@delete')->name('stuff.notices.delete');

	// libraries
	Route::get('/libraries/all', 'LibraryController@index')->name('stuff.libraries.all');
	Route::get('/libraries/add', 'LibraryController@create')->name('stuff.libraries.create');
	Route::post('/libraries/add', 'LibraryController@store')->name('stuff.libraries.store');
	Route::get('/libraries/show/{id}', 'LibraryController@show')->name('stuff.libraries.show');
	Route::get('/libraries/edit/{id}', 'LibraryController@edit')->name('stuff.libraries.edit');
	Route::post('/libraries/update/{id}', 'LibraryController@update')->name('stuff.libraries.update');
	Route::post('/libraries/delete/{id}', 'LibraryController@delete')->name('stuff.libraries.delete');
	Route::post('/libraries/borrow/', 'LibraryController@borrow')->name('stuff.libraries.borrow');
	Route::post('/libraries/borrowDelete/', 'LibraryController@borrowDelete')->name('stuff.libraries.borrowDelete');
	Route::get('/libraries/myBooks', 'LibraryController@myBooks')->name('stuff.libraries.myBooks');

	// busServices
	Route::get('/busServices/all', 'BusController@index')->name('stuff.busServices.all');
	Route::get('/busServices/add', 'BusController@create')->name('stuff.busServices.create');
	Route::post('/busServices/add', 'BusController@store')->name('stuff.busServices.store');
	Route::get('/busServices/show/{id}', 'BusController@show')->name('stuff.busServices.show');
	Route::get('/busServices/edit/{id}', 'BusController@edit')->name('stuff.busServices.edit');
	Route::post('/busServices/update/{id}', 'BusController@update')->name('stuff.busServices.update');
	Route::post('/busServices/delete/{id}', 'BusController@delete')->name('stuff.busServices.delete');

	// complains
	Route::get('/complains/all', 'ComplainController@index')->name('stuff.complains.all');
	Route::post('/complains/delete/{id}', 'ComplainController@delete')->name('stuff.complains.delete');

	// routines
	Route::get('/routines/all', 'RoutineController@index')->name('stuff.routines.all');
	Route::get('/routines/add', 'RoutineController@create')->name('stuff.routines.create');
	Route::post('/routines/add', 'RoutineController@store')->name('stuff.routines.store');
	Route::get('/routines/show/{id}', 'RoutineController@show')->name('stuff.routines.show');
	Route::get('/routines/edit/{id}', 'RoutineController@edit')->name('stuff.routines.edit');
	Route::post('/routines/update/{id}', 'RoutineController@update')->name('stuff.routines.update');
	Route::post('/routines/delete/{id}', 'RoutineController@delete')->name('stuff.routines.delete');

	// clubs
	Route::get('/clubs/all', 'ClubController@index')->name('stuff.clubs.all');
	Route::get('/clubs/add', 'ClubController@create')->name('stuff.clubs.create');
	Route::post('/clubs/add', 'ClubController@store')->name('stuff.clubs.store');
	Route::get('/clubs/show/{id}', 'ClubController@show')->name('stuff.clubs.show');
	Route::get('/clubs/edit/{id}', 'ClubController@edit')->name('stuff.clubs.edit');
	Route::post('/clubs/update/{id}', 'ClubController@update')->name('stuff.clubs.update');
	Route::post('/clubs/delete/{id}', 'ClubController@delete')->name('stuff.clubs.delete');

	// bloodDonations
	Route::get('/bloodDonations/all', 'BloodDonationController@index')->name('stuff.bloodDonations.all');
	Route::get('/bloodDonations/add', 'BloodDonationController@create')->name('stuff.bloodDonations.create');
	Route::post('/bloodDonations/add', 'BloodDonationController@store')->name('stuff.bloodDonations.store');
	Route::get('/bloodDonations/edit/{id}', 'BloodDonationController@edit')->name('stuff.bloodDonations.edit');
	Route::post('/bloodDonations/update/{id}', 'BloodDonationController@update')->name('stuff.bloodDonations.update');
	Route::post('/bloodDonations/delete/{id}', 'BloodDonationController@delete')->name('stuff.bloodDonations.delete');


});

// student route groups
Route::group( ['prefix'=>'/student','namespace'=>'Student','middleware'=>['auth','student']], function(){

	Route::get('/dashboard', 'DashboardController@index')->name('student.dashboard');

	// profile
	Route::get('/profile', 'DashboardController@profile')->name('student.profile');

	// courses
	Route::get('/course/all', 'CourseController@index')->name('student.courses.all');
	Route::get('/course/show/{id}', 'CourseController@show')->name('student.courses.show');

	// coursePosts
	Route::post('/coursePost/add', 'CoursePostController@store')->name('student.coursePosts.store');
	Route::get('/coursePost/edit/{id}', 'CoursePostController@edit')->name('student.coursePosts.edit');
	Route::post('/coursePost/update/{id}', 'CoursePostController@update')->name('student.coursePosts.update');
	Route::post('/coursePost/delete/{id}', 'CoursePostController@delete')->name('student.coursePosts.delete');

	// PostComment
	Route::post('/coursePost/comments/add', 'CoursePostController@commentStore')->name('student.coursePosts.commentStore');
	Route::post('/coursePost/comments/delete/{id}', 'CoursePostController@commentDelete')->name('student.coursePosts.commentDelete');


	// answer
	Route::get('/course/exams/answer/{id}', 'ExamController@showAnswerSheet')->name('student.exams.showAnswerSheet');
	Route::post('/course/exams/answerStore', 'ExamController@answerStore')->name('student.exams.answerStore');

	// results
	Route::get('/result/all', 'ResultController@index')->name('student.results.all');

	// routines
	Route::get('/routines/all', 'RoutineController@index')->name('student.routines.all');

	// notices
	Route::get('/notices/all', 'NoticeController@index')->name('student.notices.all');

	// libraries
	Route::get('/libraries/all', 'LibraryController@index')->name('student.libraries.all');
	Route::get('/libraries/myBooks', 'LibraryController@myBooks')->name('student.libraries.myBooks');

	// payments
	Route::get('/payments/myPayment/', 'PaymentController@myPayment')->name('student.payments.myPayment');
	
	// busServices
	Route::get('/busServices/all', 'BusController@index')->name('student.busServices.all');

	// clubs
	Route::get('/clubs/all', 'ClubController@index')->name('student.clubs.all');

	// bloodDonations
	Route::get('/bloodDonations/myDonation', 'BloodDonationController@myDonation')->name('student.bloodDonations.myDonation');

	// complains
	Route::get('/complains/add', 'ComplainController@create')->name('student.complains.create');
	Route::post('/complains/add', 'ComplainController@store')->name('student.complains.store');

});
