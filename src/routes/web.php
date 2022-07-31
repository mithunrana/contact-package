<?php

Route::group(['namespace'=>'Techhelpinfo\Contact\Http\Controllers'],function(){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send')->name('contact.send');
});

