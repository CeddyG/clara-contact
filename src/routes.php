<?php

//Contact
Route::get('contactez-nous', 'CeddyG\ClaraContact\Http\Controllers\ContactController@index')->name('contact.index')
    ->middleware(config('clara.contact.route.web.middleware'));
Route::post('contactez-nous', 'CeddyG\ClaraContact\Http\Controllers\ContactController@store')->name('contact.store')
    ->middleware(config('clara.contact.route.web.middleware'));

Route::group(['prefix' => config('clara.contact.route.web-admin.prefix'), 'middleware' => config('clara.contact.route.web-admin.middleware')], function()
{
    Route::resource('contact', 'CeddyG\ClaraContact\Http\Controllers\Admin\ContactController', ['names' => 'admin.contact']);
});

Route::group(['prefix' => config('clara.contact.route.api.prefix'), 'middleware' => config('clara.contact.route.api.middleware')], function()
{
    Route::get('contact/index', 'CeddyG\ClaraContact\Http\Controllers\Admin\ContactController@indexAjax')->name('api.admin.contact.index');
	Route::get('contact/select', 'CeddyG\ClaraContact\Http\Controllers\Admin\ContactController@selectAjax')->name('api.admin.contact.select');
});

//Category
Route::group(['prefix' => config('clara.contact-category.route.web.prefix'), 'middleware' => config('clara.contact-category.route.web.middleware')], function()
{
    Route::resource('contact-category', 'CeddyG\ClaraContact\Http\Controllers\Admin\ContactCategoryController', ['names' => 'admin.contact-category']);
});

Route::group(['prefix' => config('clara.contact-category.route.api.prefix'), 'middleware' => config('clara.contact-category.route.api.middleware')], function()
{
    Route::get('contact-category/index', 'CeddyG\ClaraContact\Http\Controllers\Admin\ContactCategoryController@indexAjax')->name('api.admin.contact-category.index');
	Route::get('contact-category/select', 'CeddyG\ClaraContact\Http\Controllers\Admin\ContactCategoryController@selectAjax')->name('api.admin.contact-category.select');
});