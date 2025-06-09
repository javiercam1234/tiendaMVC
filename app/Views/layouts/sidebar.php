<div id="sidebar" class="bg-dark text-white">
    <div class="sidebar-header">
        <h3>Tienda</h3>
        <span class="fecha" id="fecha"></span>
        <span class="usuario">Usuario: <?= session()->get('nombre') ?></span>
    </div>
    <nav class="menu">
        <?php foreach ($menu as $titulo => $datos): ?>
            <div class="menu-section">
                <span class="section-title">
                    <i class="fas <?= $datos['icono'] ?>"></i>
                    <span class="menu-text"><?= $titulo ?></span>
                </span>
                <?php foreach ($datos['submenus'] as $submenu): ?>
                    <a href="<?= base_url($submenu['url']) ?>">
                        <i class="fas <?= $submenu['icono'] ?>"></i>
                        <span class="menu-text"><?= $submenu['nombre'] ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </nav>
</div>
