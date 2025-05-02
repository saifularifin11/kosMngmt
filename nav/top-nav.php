<!-- Top Navigation -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <button
      class="btn btn-outline-light me-3"
      type="button"
      id="toggleSidebarBtn"
      aria-controls="sidebar"
      aria-expanded="true"
      aria-label="Toggle navigation"
    >
      <i class="bi bi-list"></i> <!-- Bootstrap icon for the menu -->
    </button>
    <a class="navbar-brand fw-bold" href="#">HOME STAY MANAGEMANT</a>
  </div>
</nav>
<style>
    #sidebar {
  background-color: #343a40;
  color: white;
  min-height: 100vh;
  transition: all 0.3s ease; /* Smooth transition for sidebar */
}

#main-content {
  transition: all 0.3s ease; /* Smooth transition for main content */
}

.sidebar-hidden {
  display: none !important;
}

/* Optional: smooth transitions for icon change */
#toggleSidebarBtn i {
  transition: transform 0.3s ease;
}

.sidebar-hidden ~ #main-content {
  /* When the sidebar is hidden, make the content full width */
  width: 100%;
}
</style>

