    <?php 

    $item  = null;
    $valor = null;

    $ventas= controladorVentas::ctrSumatotalVentas();

    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
    $totalCategorias = count($categorias);

    $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
    $totalClientes = count($clientes);

    $productos = ControladorProductos::ctrMostrarProductos($item, $valor);
    $totalProducto = count($productos);
    ?>


   
    
    <div class=" col-sm-6 col-xs-12 ">

      <div class="info-box">

        <span class="info-box-icon bg-red"><i class="fa fa-th"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Categorías</span>

          <span class="info-box-number"><?php echo number_format($totalCategorias); ?></span>

        </div>
        
      </div>
      
    </div>
    
    <div class="clearfix visible-sm-block"></div>

    <div class="c col-sm-6 col-xs-12">

      <div class="info-box">

        <span class="info-box-icon bg-green"><i class="fa fa-product-hunt"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Productos</span>

          <span class="info-box-number"><?php echo number_format($totalProducto); ?></span>

        </div>
       
      </div>
     
    </div>
    
    <div class=" col-sm-6 col-xs-12">

      <div class="info-box">

        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Clientes</span>

          <span class="info-box-number"><?php echo number_format($totalClientes); ?></span>

        </div>
        
      </div>
      
    </div>

     <div class=" col-sm-6 col-xs-12">

      <div class="info-box">

        <span class="info-box-icon bg-blue"><i class="fa fa-usd"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Ventas</span>

          <span class="info-box-number">BS <?php echo number_format($ventas["total"],2); ?></span>

        </div>
        
      </div>
      
    </div>