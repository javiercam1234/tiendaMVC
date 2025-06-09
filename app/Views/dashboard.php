<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tienda - Dashboard</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

  <div class="d-flex" id="wrapper">
    <div id="sidebar" class="sidebar sidebar-expanded">
      <div class="sidebar-header">
        <h2 class="sidebar-title">TIENDA</h2>
        <button id="toggleSidebar" class="btn-toggle"><i class="fas fa-angle-left"></i></button>
      </div>

      <nav class="menu">
        <?php foreach ($menu as $item): ?>
          <div class="menu-item">
            <a href="<?= $item['url'] ?>" class="menu-link">
              <i class="fas <?= $item['icon'] ?>"></i>
              <span class="menu-text"><?= $item['title'] ?></span>
            </a>
            <?php if (!empty($item['children'])): ?>
              <div class="submenu">
                <?php foreach ($item['children'] as $subitem): ?>
                  <a href="<?= $subitem['url'] ?>" class="submenu-link">
                    <i class="fas <?= $subitem['icon'] ?>"></i>
                    <?= $subitem['title'] ?>
                  </a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </nav>

      <div class="sidebar-footer">
        <i class="fas fa-user"></i>
        <span class="menu-text"><?= session()->get('username') ?></span>
      </div>
    </div>

    <div id="page-content-wrapper">
      <main id="main-content">
        <h2>Bienvenido</h2>
        <p>Selecciona una vista del menú</p>
      </main>

      <footer>
        <span id="clock">00:00:00</span>
      </footer>
    </div>
  </div>

  <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>
