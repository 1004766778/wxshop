<?php

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

route::any('/','IndexController@index');

route::any('allshops/{cate_id?}','AllshopController@allshops');
route::any('allshopsDo','AllshopController@allshopsDo');
route::any('shopcart','ShopcartController@shopcart')->middleware('log');
route::any('shopcartDo','ShopcartController@shopcartDo')->middleware('log');
route::any('shopcartDel','ShopcartController@shopcartDel')->middleware('log');
route::any('shopcartDels','ShopcartController@shopcartDels')->middleware('log');
route::any('payment','ShopcartController@payment')->middleware('log');
route::post('paymentdo','ShopcartController@paymentdo');
route::any('userpage','UserPageController@userpage');
route::any('shopcontent/{id}','AllshopController@shopcontent');
route::any('share','ShareController@share');

route::any('login','LoginController@login');
route::any('loginDo','LoginController@loginDo');
route::any('register','LoginController@register');
route::any('registerDo','LoginController@registerDo');


route::any('verify/create','Captcha\CaptchaController@create');
route::any('sendmobile','LoginController@sendMobile');
route::any('sendcode','LoginController@sendcode');

route::any('address','AddressController@index');
route::any('addressAdd','AddressController@addressAdd');
route::any('addressAddDo','AddressController@addressAddDo');
route::any('addressDel','AddressController@addressDel');
route::any('addressUpd/{id}','AddressController@addressUpd');
route::any('addressUpdDo','AddressController@addressUpdDo');

route::any('mywallet','MywalletController@mywallet');
