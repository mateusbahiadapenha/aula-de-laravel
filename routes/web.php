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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/criar-produto', function () {
    echo "
    tela para criar o produto
    <a href='/produtos'>voltar para a lista</a>
    ";
});
//Route::get('produtos', function () {
//	$produtos = [
//		['1','Arooz','tio joão','R$ 8,50'],
//		['2','feijão','tio joão','R$ 5,70'],
//		['3','farinha','farinha timbiras','R$ 3,50'],
//	];
//   return view ('produtos.lista-produtos',['produtos' => $produtos]);
//});
Route::get('produto', function () {
  $produtos=[
    ['id'=>1,
    'nome'=> 'Arooz',
    'descricao'=> 'arroz tio joão',
    'preco' => 4,
    'quantidade'=> 5,
    
    
],
['id'=>2,
'nome'=> 'feijão',
'descricao'=> 'feijão tio joão',
'preco' => 1,
'quantidade'=> 3,



],
];
return view ('produtos.lista-produto',[
    'produtos'=>$produtos
]);
});


Route::get('/alunos/{nome}/{sobrenome}/sistemas', function ($nome,$sobrenome){
    echo "$nome $sobrenome";
});