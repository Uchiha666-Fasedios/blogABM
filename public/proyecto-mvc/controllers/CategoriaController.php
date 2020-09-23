<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';



class CategoriaController
{

  public function index(){
    Utils::isAdmin();
    $categoria = new Categoria();
    $categorias = $categoria->getAll();

    require_once 'views/categoria/index.php';
  }

  public function ver(){
    if(isset($_GET['id'])){
      $id = $_GET['id'];

      // Conseguir categoria
      $categoria = new Categoria();
      $categoria->setId($id);//stea el id q llego por get
      $categoria = $categoria->getOne();//retorna todo de categorias q tenga q ver con ese id seteado

      // Conseguir productos;
      $producto = new Producto();
      $producto->setCategoria_id($id);//stea el id q llego por get
      $productos = $producto->getAllCategory();//este metodo me trae todos los productos de la categoria con ese id seteado
    }

    require_once 'views/categoria/ver.php';
  }



  public function crear(){
    Utils::isAdmin();
    require_once 'views/categoria/crear.php';
  }

  public function editar(){
    Utils::isAdmin();
    require_once 'views/categoria/editar.php';
  }

  public function save(){
    Utils::isAdmin();
      if(isset($_POST) && isset($_POST['nombre'])){
      // Guardar la categoria en bd
      $categoria = new Categoria();
      $categoria->setNombre($_POST['nombre']);
      $save = $categoria->save();
    }
    header("Location:".base_url."categoria/index");
  }


}
