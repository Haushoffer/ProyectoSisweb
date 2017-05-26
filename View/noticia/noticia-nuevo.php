<center>
<h1 class="page-header">
    Nuevo Registro
</h1>
</center>
<div class="ui segment">
<form id="frm-noticia" class="ui form" action="?c=noticia&a=Guardar" method="post" enctype="multipart/form-data">
  <h4 class="ui dividing header">Datos Noticia</h4>
  <div class="field">
    <label>Id</label>
      <div class="field">
        <input type="text" name="id" value="<?php echo $pvd->id; ?>" class="form-control" placeholder="Ingrese Id" data-validacion-tipo="requerido|min:1" />
  	  </div>
   </div>
  <div class="field">
    <label>Title</label>
      <div class="field">
        <input type="text" name="title" value="<?php echo $pvd->title; ?>" class="form-control" placeholder="Ingrese Titulo" data-validacion-tipo="requerido|min:100" />
  	  </div>
   </div>
  <div class="field">
    <label>Contenido</label>
    <div class="field">
        <textarea rows="10" cols="200" name="content" value="<?php echo $pvd->content; ?>" class="form-control" placeholder="Ingrese Contenido" data-validacion-tipo="requerido|min:100" /></textarea>
    </div>
  </div>
  <h4 class="ui dividing header">Datos Autor</h4>
  <div class="field">
      <label>Nombre</label>
      <input type="text" name="autor" value="<?php echo $pvd->autor; ?>" class="form-control" placeholder="Ingrese Autor" data-validacion-tipo="requerido|min:10" />
  </div>
  <center>
  <div class="text-right">
        <button class="ui green button">Guardar</button>
  </div>
  </center>
</form>
</div>
<script>
    $(document).ready(function(){
        $("#frm-noticia").submit(function(){
            return $(this).validate();
        });
    })
</script>
