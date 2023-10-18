<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container container-fluid">
        <a class="navbar-brand" href="<?php echo Routes::getViewsRoutes()['home'] ?>">
            <img src="/public/img/logoHeader.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Gerenciador de Tarefas
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Routes::getViewsRoutes()['home'] ?>">Pendências</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Routes::getViewsRoutes()['allTasks'] ?>">Todas as Pendências</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Routes::getViewsRoutes()['accessControl'] ?>">Gerenciar Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Routes::getViewsRoutes()['login'] ?>">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>