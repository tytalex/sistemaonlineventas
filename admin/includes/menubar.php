<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
        
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
     <!-- MENU PRINCIPAL -->
    <li class="header">PRINCIPAL</li>
      <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Escritorio</span></a></li>
      <li class="treeview">
      <li class="header">INFORMES</li>    
      <li class="treeview">
        <a href="#">       
      <i class="fa fa-money"></i>
          <span>Consultar ventas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
      <li><a href="sales.php"><i class="fa fa-circle-o"></i> <span>Ventas</span></a></li>
      </ul>
      <!-- separar -->
      <li class="treeview">
        <a href="#">       
      <i class="fa fa-universal-access"></i>
          <span>Consultar Compras</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        
        <ul class="treeview-menu">
      <li><a href="sales.php"><i class="fa fa-circle-o"></i> <span>Compras por fechas</span></a></li>
      </ul>
      <!-- separar -->
      
      <li class="header">GESTIONAR</li>
      <li class="treeview">
        <a href="#">       
      <i class="fa fa-universal-access"></i>
          <span>Acceso</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
      <li><a href="users.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
      </ul>
      <!-- separar -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i>
          <span>Almacen</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="products.php"><i class="fa fa-circle-o"></i> Productos</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Categoría</a></li>
        </ul>
         <!-- separar -->
        <li class="treeview">
        <a href="#">       
      <i class="fa fa-shopping-cart"></i>
          <span>Compras</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Ingresos</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Proveedores</a></li>
      </ul>
      <li class="treeview">
        <a href="#">       
      <i class="fa fa-shopping-bag"></i>
          <span>Ventas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> <span>Ventas</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> <span>Clientes</span></a></li>
      </ul>

      <li class="header">SOLICITAR</li>
      <li class="treeview.menu">
      <a href="https://www.facebook.com/profile.php?id=100010116841282"><i class="fa fa-question-circle"></i> <span>Ayuda</span><small class="label pull-right bg-yellow">PDF</small></a>  
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>