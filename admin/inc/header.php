<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
  <h3 class="mb-0 h-font">Mirissa 360</h3>
  <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid flex-lg-column align-items-stretch">
      <h4 class="mt-2 text-light">ADMIN PANEL</h4>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="adminDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php" <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'aria-current="page"' : '' ?>>Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'rooms.php' ? 'active' : '' ?>" href="rooms.php" <?= basename($_SERVER['PHP_SELF']) == 'rooms.php' ? 'aria-current="page"' : '' ?>>Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : '' ?>" href="users.php" <?= basename($_SERVER['PHP_SELF']) == 'users.php' ? 'aria-current="page"' : '' ?>>Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : '' ?>" href="settings.php" <?= basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'aria-current="page"' : '' ?>>Settings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>