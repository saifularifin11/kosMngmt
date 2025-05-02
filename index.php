<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME STAY MGMT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      overflow-x: hidden;
    }
    #sidebar {
      background-color: #343a40;
      color: white;
      min-height: 100vh;
      transition: all 0.3s ease;
    }
    #sidebar a {
      color: white;
      text-decoration: none;
    }
    #sidebar a:hover {
      background-color: #495057;
      display: block;
    }
    #main-content {
      transition: all 0.3s ease;
    }


  </style>
</head>
<body>

  <!-- Top Navigation with toggle button -->
  <?php include('nav/top-nav.php'); ?>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div id="sidebar" class="col-md-2 p-0">
        <?php include('nav/side-nav.php'); ?>
      </div>

      <!-- Main Content Area -->
      <div id="main-content" class="col-md-10">
        <?php include("content.php"); ?>
      </div>
    </div>
  </div>

  <!-- Toggle Sidebar Button -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const toggleBtn = document.getElementById('toggleSidebarBtn'); // Update this to match button id

    // Toggle sidebar on button click
    toggleBtn.addEventListener('click', () => {
      if (sidebar.classList.contains('sidebar-hidden')) {
        sidebar.classList.remove('sidebar-hidden');
        mainContent.classList.remove('col-md-12');
        mainContent.classList.add('col-md-10');
      } else {
        sidebar.classList.add('sidebar-hidden');
        mainContent.classList.remove('col-md-10');
        mainContent.classList.add('col-md-12');
      }
    });
  </script>

</body>
</html>
