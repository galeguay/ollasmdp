<nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
    <div class="container-xl">
        <a class="navbar-brand fw-bold">
        MENU ADMINISTRADOR
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAdmin"
            aria-controls="navbarNavAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-items-end" id="navbarNavAdmin">
            <ul class="navbar-nav align-items-end">
                <li class="nav-item">
                    <a class="nav-link fw-bold" 
                    {if $page == 'addLine'}
                        aria-current="page"
                    {/if}
                    href="addLine" role="button">Agregar Linea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" 
                    {if $page == 'addProduct'}
                        aria-current="page"
                    {/if}
                    href="addProduct" role="button">Agregar producto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>