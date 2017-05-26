<?php
require_once 'model/noticia.php';

class NoticiaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new noticia();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/noticia/noticia.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $pvd = new noticia();

        if(isset($_REQUEST['id'])){
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/noticia/noticia-editar.php';
        require_once 'view/footer.php';
  }

    public function Nuevo(){
        $pvd = new noticia();

        require_once 'view/header.php';
        require_once 'view/noticia/noticia-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $pvd = new noticia();

        $pvd->id = $_REQUEST['id'];
        $pvd->title = $_REQUEST['title'];
        $pvd->content = $_REQUEST['content'];
        $pvd->autor = $_REQUEST['autor'];
        $this->model->Registrar($pvd);

        header('Location: index.php');
    }

    public function Editar(){
        $pvd = new noticia();

        $pvd->id = $_REQUEST['id'];
        $pvd->title = $_REQUEST['title'];
        $pvd->content = $_REQUEST['content'];
        $pvd->autor = $_REQUEST['autor'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
