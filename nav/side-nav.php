<div id="sidebar" class="collapse show col-md-2 bg-dark text-white min-vh-100">
  <div class="p-3">
    <h4 class="text-white mb-4">Menu</h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?menu=gedung"><i class="bi bi-building-fill"></i> Gedung</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?menu=kamar"><i class="bi bi-door-open"></i> Kamar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?menu=tarif"><i class="bi bi-cash-stack"></i> Tarif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?menu=penghuni"><i class="bi bi-person-circle"></i> Penghuni</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?menu=kontrak"><i class="bi bi-book-half"></i> Kontrak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?menu=bayar"><i class="bi bi-credit-card"></i>  Pembayaran</a>
      </li>
    </ul>
  </div>
</div>

<style>
    #sidebar {
  background-color: #343a40;
  color: white;
  min-height: 100vh;
  box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

#sidebar .nav-link {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  font-size: 1.1rem;
  border-radius: 8px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

#sidebar .nav-link:hover {
  background-color: #495057;
  color: #f8f9fa;
}

#sidebar .nav-link i {
  margin-right: 10px;
  font-size: 1.5rem;
}

#sidebar h4 {
  font-size: 1.25rem;
  font-weight: bold;
  color: #f8f9fa;
}

.nav-item {
  margin-bottom: 10px;
}

#sidebar .nav-link.active {
  background-color: #007bff;
  color: #fff;
}

#sidebar .nav-link.active i {
  color: #fff;
}

@media (max-width: 768px) {
  #sidebar {
    width: 100%;
    position: fixed;
    z-index: 999;
    top: 0;
    left: -250px;
    transition: left 0.3s ease;
  }

  #sidebar.show {
    left: 0;
  }

  .nav-link {
    font-size: 1rem;
  }
}

</style>
