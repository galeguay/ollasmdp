<div class="col">
  <div class="card h-80" style="width: 18rem;">
    <img src="
    {if $product->image == ''}
      images/noProductImage.png
    {else}
      {$product->image}  
    {/if}
    " class="card-img-top" alt="imagen de producto">
    <div class="card-body">
      <h5 class="card-title">{$product->name}</h5>
      <div class="d-flex flex-row">
        <h5 class="fw-bold">$ 
        {if $product->price == ''}
          Consultar
        {else}
          {$product->price}
        {/if}
        </h5>
      </div>
      <p class="card-text">{$product->description}</p>
      <a class="btn btn-success btn-sm">Añadir al carrito de consulta</a>
    </div>
  </div>
</div>