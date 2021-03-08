<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <div class="formulario">
            <h2>Pagos con Paypal</h2>
              <form action="pago.php" method="post">
                    <div class="campo">
                      <label for="producto">Producto</label>
                      <input id="producto" type="text" name="producto" placeholder="Producto" required>
                    </div>
                      
                    <div class="campo">
                      <label for="precio">Precio</label>
                      <input id="precio" type="number" name="precio" placeholder="Precio" min="5" required >
                    </div>
                    
                    <input type="submit" value="Pagar" name="submit" class="button">
              </form>
        </div>
  </body>
</html>
