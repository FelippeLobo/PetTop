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

//Venda
$roteador->get('PetTop/Vendas','Venda@listaVenda');
$roteador->get('PetTop/apagarVenda','Venda@apagarVenda');
$roteador->get('PetTop/editarVenda','Venda@editarVendaView');
$roteador->post('PetTop/editarVenda/editando','Venda@editarVenda');
$roteador->get('PetTop/criarVenda','Venda@adicionarVendaView');
$roteador->post('PetTop/criarVenda/adicionando','Venda@adicionarVenda');
$roteador->view('PetTop/Vendas','app/Views/crudVenda/list-venda.php');
$roteador->view('PetTop/editarVenda','app/Views/crudVenda/edit-venda.php');
$roteador->view('PetTop/criarVenda','app/Views/crudVenda/add-venda.php');

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

//Cargo
$roteador->get('PetTop/Cargos','Cargo@listaCargo');
$roteador->get('PetTop/apagarCargo','Cargo@apagarCargo');
$roteador->get('PetTop/editarCargo','Cargo@editarCargoView');
$roteador->post('PetTop/editarCargo/editando','Cargo@editarCargo');
$roteador->get('PetTop/criarCargo','Cargo@adicionarCargoView');
$roteador->post('PetTop/criarCargo/adicionando','Cargo@adicionarCargo');
$roteador->view('PetTop/Cargos','app/Views/crudCargo/list-cargo.php');
$roteador->view('PetTop/editarCargo','app/Views/crudCargo/edit-cargo.php');
$roteador->view('PetTop/criarCargo','app/Views/crudCargo/add-cargo.php');

//Login
$roteador->get('PetTop/Login', 'Login@loginView');
$roteador->post('PetTop/Login/login' , 'Login@login');
$roteador->get('PetTop/logout' , 'Login@logout');


//DashBoard
$roteador->get('PetTop/dashBoard' , 'Login@dashBoard');
$roteador->view('PetTop/dashBoard' , 'app/Views/dashboard/index.php');

//Usuario
$roteador->get('PetTop/Usuarios','Usuario@listaUsuario');
$roteador->get('PetTop/apagarUsuario','Usuario@apagarUsuario');
$roteador->get('PetTop/editarUsuario','Usuario@editarUsuarioView');
$roteador->post('PetTop/editarUsuario/editando','Usuario@editarUsuario');
$roteador->get('PetTop/criarUsuario','Usuario@adicionarUsuarioView');
$roteador->post('PetTop/criarUsuario/adicionando','Usuario@adicionarUsuario');
$roteador->view('PetTop/Usuario','app/Views/crudUsuarios/crudUsuarios.php');
$roteador->view('PetTop/editarUsuario','app/Views/crudUsuarios/editarPUsuario.php');
$roteador->view('PetTop/criarUsuario','app/Views/crudUsuarios/adicionarUsuario.php');

?>