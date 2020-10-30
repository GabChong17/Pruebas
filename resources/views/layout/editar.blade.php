<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <head>
      <title>EDITAR</title>
      <link>
   </head>

   <body bgcolor= "">
   <body>
    
                    <div class="col-sm-8"><h2><b>EDITAR</b></h2></div>
                  
                        <a href="index.html" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <form method="post">
                <div class="col-md-10">
                    <label>Producto:</label>
                    <input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-6">
                    <label>Marca:</label>
                    <input type="text" name="marca" id="marca" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-12">
                    <label>Descripcion:</label>
                    <textarea  name="descripcion" id="descripcion" class='form-control' maxlength="255" required></textarea>
                </div>
                <div class="col-md-6">
                    <label>Precio:</label>
                    <input type="int" name="precio" id="precio" class='form-control' maxlength="15" required >
                </div>
                
                
                <div class="col-md-12 pull-right">
                <hr>
                    <button type="submit" class="btn btn-success">Guardar datos</button>
                </div>
                </form>
            </div>
        </div>
    </div>     
</body>
</html>
