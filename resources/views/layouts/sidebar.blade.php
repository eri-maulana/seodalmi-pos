 <!-- Main Sidebar Container -->
 <aside class="main-sidebar elevation-4 sidebar-light-navy">
     <!-- Brand Logo -->
     <a href="/" class="brand-link bg-light ">
         <img src="{{ asset('img/sdm.jpg') }}" alt="Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('img/sdm.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ auth()->user()->name }}</a>
             </div>
         </div>



         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="{{ route('dashboard') }}" class="nav-link active">
                         <i class="fas fa-tachometer-alt mr-2"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">MASTER</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-cube mr-2"></i>
                         <p>
                             Kategori
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-cubes mr-2"></i>
                         <p>
                             Produk
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-id-card mr-2"></i>
                         <p>
                             Member
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-truck mr-2"></i>
                         <p>
                             Supplier
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">TRANSAKSI</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-money-check-alt mr-2"></i>
                         <p>
                             Pengeluaran
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-download mr-2"></i>
                         <p>
                             Pembelian
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-upload mr-2"></i>
                         <p>
                             Penjualan
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-cart-arrow-down mr-2"></i>
                         <p>
                             Transaksi Lama
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-cart-plus mr-2"></i>
                         <p>
                             Transaksi Baru
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">REPORT</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-file-pdf mr-2"></i>
                         <p>
                             Laporan
                         </p>
                     </a>
                 </li>
                 <li class="nav-header">SISTEM</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-users mr-2"></i>
                         <p>
                             User
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-cogs mr-2"></i>
                         <p>
                             Pengaturan
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
