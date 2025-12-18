<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="../index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="{{ asset('../assets/img/billing.png')}}"
          alt="School-app Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Gestion_Produit</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >

         <!--Fonctionnalité tableau de bord-->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" 
                class="nav-link">
              <i class="fa-solid fa-gauge" style="color: #bdd1f4;"></i>
              <p>Tableau de bord</p>
            </a>
          </li>
           <!--Fonctionnalité gestion des clients-->
          <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link">
                <i class="fa-solid fa-people-line" style="color: #bfd4f7;"></i>
                <p>Gestion des produits</p>
            </a>
          </li>
             <!--Fonctionnalité des produits et services-->
          
           
  

          



    <!--end::Sidebar Wrapper-->
  </aside>