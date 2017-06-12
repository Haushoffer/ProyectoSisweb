<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="semantic/dist/components/dropdown.min.css">
	<script src="semantic/dist/semantic.min.js"></script>
  <script src="semantic/dist/components/dropdown.min.js"></script>
  <script src="semantic/examples/assets/library/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js"></script>
  <link rel="stylesheet" href="Semantic/style.css">
<body>
	<div>
		<a class="ui green button" href="?c=noticia&a=Nuevo">
		    <i class="plus icon"></i> Nueva Noticia</a>
	</div>
	<br>
	<div>
		<a class="ui blue button" href="?c=noticia&a=Noticia">
		    <i class="user icon"></i>User view</a>
	</div>

	<div class="ui segment">
	<table class="ui celled padded table">
			  <thead>
			    <th>Id</th>
			    <th>Titulo</th>
			    <th>Contenido</th>
			    <th>Autor</th>
			    <th></th>
			    <th></th>
			  </tr></thead>
			  <tbody>
			   <?php foreach($this->model->Listar() as $r): ?>
			    <tr>
			      <td>
			      <center>
			        <?php echo $r->id; ?>
			        </center>
			      </td>
			      <td class="single line">
			        <h4 class="ui center aligned header"><?php echo $r->title; ?></h4>
			      </td>
			      <td>
			        <?php echo $r->content; ?>
			      </td>
			      <td class="single line">
			        <h4 class="ui center aligned"><?php echo $r->autor; ?></h4>
			      </td>
			      <td>
			      		<h4 class="ui center aligned">
							<a class="ui blue button" href="?c=noticia&a=Crud&id=<?php echo $r->id; ?>">
							    <i class="write icon"></i> Editar</a>
						</h4>
	              </td>
	              <td>
                    <h4 class="ui center aligned">
							<a class="ui red button" href="?c=noticia&a=Eliminar&id=<?php echo $r->id; ?>">
							    <i class="remove icon"></i> Eliminar</a>
					</h4>
            	  </td>
			    </tr>
			    <?php endforeach; ?>
			  </tbody>
			</table>
	</table>
	</div>
</body>