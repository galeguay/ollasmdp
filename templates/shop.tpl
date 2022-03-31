{include file="header.tpl" title='Tienda'}
  <link rel="stylesheet" href="css/nav.css">
  </head>

<body>

{include file="nav.tpl" isNavbarHome="false"}
  <section class="container-xl py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3  align-items-center g-4">
      {foreach $products as $product}
        {include file="shopProduct.tpl" product=$product}
      {/foreach}
    </div>
  </section>
{include file="footer.tpl"}