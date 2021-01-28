<div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>
<div class="sidebar">
    <div class="sidebar-menu">
        <a href="<?= $this->Url->build(['controller' => 'dashboards',  "action" => "index"], ['fullBase' => true]); ?>" class="sidebar-link sidebar-link-with-icon">
            <span class="sidebar-icon bg-transparent justify-content-start mr-0">
                <i class="fa fa-tachometer-alt" aria-hidden="true"></i>
            </span>
            Dashboard
        </a>
        <a href="<?= $this->Url->build(['controller' => 'users',  "action" => "index"], ['fullBase' => true]); ?>" class="sidebar-link sidebar-link-with-icon">
            <span class="sidebar-icon bg-transparent justify-content-start mr-0">
                <i class="fa fa-user" aria-hidden="true"></i>
            </span>
            Usuários
        </a>
        <a href="<?= $this->Url->build(['controller' => 'users',  "action" => "logout"], ['fullBase' => true]); ?>" class="sidebar-link sidebar-link-with-icon">
            <span class="sidebar-icon bg-transparent justify-content-start mr-0">
                <i class="fa fa-power-off" aria-hidden="true"></i>
            </span>
            Sair
        </a>
    </div>
</div>
