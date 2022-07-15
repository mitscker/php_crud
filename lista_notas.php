<?php include "includes/header.php" ?>


              <div class="card-header">               
                <div class="row">
                  <div class="col-md-9">
                    <h3 class="card-title">Lista de notas</h3>
                  </div>
                  <div class="col-md-3">
                    <a href="crear_nota.php" type="button" class="btn btn-primary btn-xl pull-right w-100">
                      <i class="fa fa-plus"></i> Ingresar nueva nota
                    </a>
                 </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblRegistros" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descripción</th>               
                    <th>Fecha creación</th>  
                    <th></th>                
                  </tr>
                  </thead>
                  <tbody>
                 
                      <tr>
                          <td>1</td>
                          <td>Test</td>
                          <td>test descripcion</td>
                          <td>2021-06-15</td> 
                          <td>
                                <a href="editar_nota.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> <i class="fas fa-edit"></i> Editar</a>
                                &nbsp;
                                <a href="borrar_nota.php" class="btn btn-danger"><i class="bi bi-pencil-fill"></i> <i class="fas fa-trash-alt"></i> Borrar</a>                                               
                            </td>                       
                      </tr>
                
                  </tbody>                  
                </table>
              </div>
              <!-- /.card-body -->


<?php include "includes/footer.php" ?>

<!-- page script -->
<script>
  $(function () {   
    $('#tblRegistros').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    }); 
  });
</script>
