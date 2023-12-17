 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion " id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
         <div class="sidebar-brand-icon ">
             <p class="fs-5"><span class="text-success">One</span>-Helth</p>
         </div>

     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link " href="{{ url('/') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span class="text-success">Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>
     {{-- admin dashboard --}}

     <li class="nav-item">
         <a class="nav-link" href="{{route('product.index')}}">
             <i class="fa-solid fa-pen-nib" style="color: #a82497;"></i>
             <span class="text-success">Product</span></a>
     </li>

        
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->


 </ul>
 <!-- End of Sidebar -->
