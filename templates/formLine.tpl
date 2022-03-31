{include file="header.tpl" title='Inicio'}
    <link rel="stylesheet" href="css/nav.css">
    </head>
<body>
    {include file="nav.tpl" isNavbarHome="false"}
    {include file="navAdmin.tpl" page="addLine"}
    <section class="container">
        <form id="formLine">
            <h1 class="mb-4 text-center">Agregar linea de productos en base de datos</h1>
            <div class="form-group row">
                <div class="col-lg col-md col-sm-12 mb-3">
                    <label for="nameInput" class="form-label" aria-required="true">Nombre</label>
                    <input id="nameInput" name="nameInput" class="form-control">
                </div>
                <div class="col-lg col-md col-sm-12 mb-3">
                    <label for="colorInput" class="form-label">Color</label>
                    <input id="colorInput" name="colorInput" class="form-control">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary btn-lg">Cargar</button>
            </div>
        </form>
    <script src="js/formLine.js" ></script>
    </section>
{include file="footerBasic.tpl"}