<?php

use Illuminate\Support\Facades\Route;


Route::get('/signUp','signUpController@showSignUpPage')->name('signUp.bank');//get->signup

Route::post('post/login/','loginController@login')->name('login.login');

Route::post('post/signUp/','signUpController@postSignUp')->name('postSignUp.bank');//post->signup


Route::get('/','loginController@loginPage')->name('/');

Route::get('/logout','logOutController@logout')->name('logout.session');


Route::group(['middleware'=>['sess']], function(){




Route::get('/login/index','loginController@index')->name('admin.adminIndex');//main home index





//admin 

Route::get('/adminInfo','adminController@viewAdminInfo')->name('view.adminInfo');
////not solved
Route::get('/getEditProfile','adminController@getEditProfile')->name('getEditProfile');

Route::post('/postEditProfile','adminController@postEditProfile')->name('post.edit.admin');
Route::get('/getChangePassword','adminController@getChangePassword')->name('getChangePassword');

Route::post('/postEditPassword','adminController@postPassword')->name('post.changePassword');
////////////<-


//logout controller


//employee

Route::get('/addEmployee','employeeController@addEmployee')->name('add.employee');

Route::post('post/addEmployee','employeeController@postAddEmployee')->name('post.add.employee');

Route::get('/employee/list','employeeController@employeeList')->name('employee.list');

Route::get('/edit/employee/{uid}','employeeController@getUpdate');


Route::post('/post/edit/employee/{uid}','employeeController@postUpdate');

Route::get('/view/employee/{uid}','employeeController@view');


Route::get('/delete/employee/{uid}','employeeController@deleteEmployee');


//agent 
Route::get('/addAgent','agentController@addAgent')->name('add.agent');

Route::post('post/addAgent','agentController@postAddAgent')->name('post.add.agent');

Route::get('/agent/list','agentController@agentList')->name('agent.list');


Route::get('/edit/agent/{uid}','agentController@getUpdate');


Route::post('/post/edit/agent/{uid}','agentController@postUpdate');

Route::get('/view/agent/{uid}','agentController@view');


Route::get('/delete/agent/{uid}','agentController@deleteAgent');


//transaction 

Route::get('/allTransaction/list','transactionController@allTransactionList')->name('all.transaction.list');


Route::get('/bankTransaction/list','transactionController@bankTransactionList')->name('bank.transaction.list');

Route::get('/taxTransaction/list','transactionController@taxTransactionList')->name('tax.transaction.list');
Route::get('/agentTransaction/list','transactionController@agentTransactionList')->name('agent.transaction.list');

Route::get('/employeeTransaction/list','transactionController@employeeTransactionList')->name('employee.transaction.list');

Route::get('/customerTransaction/list','transactionController@customerTransactionList')->name('customer.transaction.list');

Route::get('/topUpTransaction/','transactionController@getTopUp')->name('topUp.transaction');

Route::post('/postTopUpTransaction','transactionController@postTopUp')->name('post.topUp.transaction');
Route::get('/notice/','otherController@getNotice')->name('get.notice');
Route::post('/notice/post/','otherController@postNotice')->name('post.notice');
Route::get('/notice/list','otherController@noticeList')->name('list.notice');

Route::get('/offer/','otherController@getOffer')->name('get.offer');
Route::post('/offer/post','otherController@postOffer')->name('post.offer');


Route::get('/reports/','otherController@getReports')->name('get.reports');
//search
Route::get('/searchEmployee','searchController@searchEmployee');

});








