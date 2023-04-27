<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pageacc )) echo('collapsed') ?>" href="../index.php">
        <i class="bi bi-house-door"></i>
          <span>Tableau de bord</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pagef )) echo('collapsed') ?>" href="{{route('fournisseurs.index')}}">
        <i class="bi bi-person"></i><span>Fournisseurs</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pageCl )) echo('collapsed') ?>" href="../client/list-client.php">
        <i class="bi bi-person"></i><span>Clients</span>
        </a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pagecat )) echo('collapsed') ?>" href="../categorie/list-category.php">
        <i class="bi bi-grid"></i>
          <span>Catégories</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pageprod )) echo('collapsed') ?>" href="../produit/list-produit.php">
        <i class="bi bi-eyeglasses"></i><span>Produits</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pagereve )) echo('collapsed') ?>" href="../revenu/list-revenu.php">
        <i class="bi bi-cart"></i><span>Achats | Rég.</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if(empty($pagedep )) echo('collapsed') ?>" href="../depence/list-depence.php">
        <i class="bi bi-cart"></i><span>Ventes | Rég.</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link <?php if(empty($pagefac )) echo('collapsed') ?>" href="../list-facture/factures.php">
        <i class="bi bi-newspaper"></i>
          <span>Factures</span>
        </a>
      </li>
      


    </ul>

  </aside><!-- End Sidebar-->