<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/estoque', function () {
    return view('estoque');
});

Route::get('/vendas', function () {
    return view('vendas');
});

Route::get('/consultaestoque', function () {
    return view('consultaestoque');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/criarconta', function () {
    return view('criarconta');
});

Route::get('/trocarsenha', function () {
    return view('trocarsenha');
});

Route::get('/exibirestoque', function () {
    return view('exibirestoque');
});

