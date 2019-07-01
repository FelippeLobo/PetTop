<?php
//Produto
$roteador->get('PetTop/Produtos','Produto@listaProduto');
$roteador->get('PetTop/apagarProduto','Produto@apagarProduto');
$roteador->get('PetTop/editarProduto','Produto@editarProdutoView');
$roteador->post('PetTop/editarProduto/editando','Produto@editarProduto');
$roteador->get('PetTop/criarProduto','Produto@adicionarProdutoView');
$roteador->post('PetTop/criarProduto/adicionando','Produto@adicionarProduto');
$roteador->view('PetTop/Produtos','app/Views/crudProduto/crudProduto.php');
$roteador->view('PetTop/editarProduto','app/Views/crudProduto/editarProduto.php');
$roteador->view('PetTop/criarProduto','app/Views/crudProduto/adicionarProduto.php');

//Categoria
$roteador->get('PetTop/Categorias','Categoria@listaCategoria');
$roteador->get('PetTop/apagarCategoria','Categoria@apagarCategoria');
$roteador->get('PetTop/editarCategoria','Categoria@editarCategoriaView');
$roteador->post('PetTop/editarCategoria/editando','Categoria@editarCategoria');
$roteador->get('PetTop/criarCategoria','Categoria@adicionarCategoriaView');
$roteador->post('PetTop/criarCategoria/adicionando','Categoria@adicionarCategoria');
$roteador->view('PetTop/Categorias','app/Views/crudCategoria/crudCategoria.php');
$roteador->view('PetTop/editarCategoria','app/Views/crudCategoria/editarCategoria.php');
$roteador->view('PetTop/criarCategoria','app/Views/crudCategoria/adicionarCategoria.php');

//Cliente
$roteador->get('PetTop/Clientes', 'Clientes@listarClientes');
$roteador->get('PetTop/apagaCliente' , 'Clientes@deletarCliente');
$roteador->get('PetTop/editarCliente' , 'Clientes@editarClienteView');
$roteador->post('PetTop/editarCliente/editando' , 'Clientes@editarCliente');
$roteador->get('PetTop/criarCliente' , 'Clientes@addClienteView');
$roteador->post('PetTop/criarCliente/criando' , 'Clientes@addCliente');
$roteador->view('PetTop/Clientes' , 'app/Views/CrudCliente/CrudCliente.view.php');
$roteador->view('PetTop/editarCliente' , 'app/Views/CrudCliente/Update.view.php');
$roteador->view('PetTop/criarCliente' , 'app/Views/CrudCliente/Criar.view.php');

//Setor
$roteador->get('PetTop/Setores', 'Setor@listarSetores');
$roteador->get('PetTop/apagaSetor' , 'Setor@deletarSetor');
$roteador->get('PetTop/editarSetor' , 'Setor@editarSetorView');
$roteador->post('PetTop/editarSetor/editando' , 'Setor@editarSetor');
$roteador->get('PetTop/criarSetor' , 'Setor@addSetorView');
$roteador->post('PetTop/criarSetor/criando' , 'Setor@addSetor');
$roteador->view('PetTop/Setores' , 'app/Views/CrudSetor/crudSetor.view.php');
$roteador->view('PetTop/editarSetor' , 'app/Views/CrudSetor/Update.view.php');
$roteador->view('PetTop/criarSetor' , 'app/Views/CrudSetor/Criar.view.php');

//Login
$roteador->get('PetTop/Login', 'Login@loginView');
$roteador->post('PetTop/Login/logando' , 'Login@login');
$roteador->get('PetTop/logout' , 'Login@logout');

//Venda


//Usuario
?>