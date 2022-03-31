{include file="header.tpl" title='Inicio'}
    <link rel="stylesheet" href="css/nav.css">
    </head>
<body>
    {include file="nav.tpl" isNavbarHome="false"}
    {include file="navAdmin.tpl" page="addProduct"}
    <section class="container">
        <form id="formProduct" enctype="multipart/form-data" class="my-4">
            <h1 class="mb-4 text-center">Agregar producto en base de datos</h1>
            <div id="responseDiv" class="d-flex justify-content-center my-3 text-light py-2">
            </div>
            <div class="form-group row">
                <div class="col-lg col-md col-sm-12 mb-3">
                    <label for="nameInput" class="form-label">Nombre</label>
                    <input id="nameInput" name="nameInput" class="form-control" required>
                </div>
                <div class="col-lg col-md col-sm-12 mb-3">
                    <label for="idInput" class="form-label">ID producto (Código ESSEN)</label>
                    <input id="idInput" name="idInput" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg col-md col-sm-12 mb-3">
                    <label for="productLineSelect" class="form-label">Línea de producto</label>
                    <select id="productLineSelect" name="productLineSelect" class="form-select" required>
                        <option disabled selected>Seleccionar</option>                            
                        {foreach $lines as $line}
                            <option value="{$line->id}">{$line->name}</option>                            
                        {/foreach}
                    </select>
                </div>
                <div class="col-lg col-md col-sm-12 mb-3">
                    <label for="imageInput" class="form-label">Seleccionar imágen</label>
                    <input id="imageInput" name="imageInput" class="form-control" type="file">
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="descriptionInput">Descripción básica (500 caracteres)</label>
                <textarea id="descriptionInput" name="descriptionInput" class="form-control" rows="3" maxlength="500"></textarea>
                <label for="detailInput">Descripción detallada</label>
                <textarea id="detailInput" name="detailInput" class="form-control" rows="5"></textarea>
            </div>
            <div id="submit-section" class="d-grid gap-2 col-6 mx-auto">
                <button id="submit-btn" type="submit" class="btn btn-primary btn-lg">Cargar</button>
            </div>
        </form>
    <script src="js/formProduct.js" ></script>
    </section>
{include file="footerBasic.tpl"}