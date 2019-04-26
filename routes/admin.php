<?php

/**
 * Super-admin authentication routes
 *
 */
$this->get('/login', 'AdminLoginController@showLoginForm');
$this->post('/login', 'AdminLoginController@login');
$this->post('/logout', 'AdminLoginController@logout');

$this->get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm');
$this->post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail');
$this->get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm');
$this->post('/password/reset', 'AdminResetPasswordController@reset');

/**
 * Category routes for superadmin operations
 *
 */
Route::resource('/categories', 'CategoryController');

/**
 * User routes for superadmin operations
 *
 */
Route::resource('/users', 'UserController');

/**
 * Stories routes for superadmin operations
 *
 */
Route::resource('/stories', 'StoryController');
