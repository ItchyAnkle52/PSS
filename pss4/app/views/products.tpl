{extends file="main.tpl"}

{block name=top}

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Products</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->


<div class="untree_co-section before-footer-section">
<div class="container">
  
  <div class="row mb-5">
    <form class="col-md-12" method="post">
      <div class="site-blocks-table">
        <table class="table">
          <thead>
            <tr>
              <th class="product-thumbnail">ID</th>
              <th class="product-image">Image</th>
              <th class="product-name">Name</th>
              <th class="product-price">Price</th>
              <th class="product-total">type ID</th>
              <th class="product-remove">Remove</th>
            </tr>
          </thead>
          <tbody>
            {foreach $products as $product}
              {strip}
              <tr>
                <td>{$product['id_product']}</td>
                <td class="product-thumbnail">
                  <img src="{$product['product_image_path']}" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">{$product['product_name']}</h2>
                </td>
                <td>{$product['product_price']} $</td>
                <td>{$product['id_product_type']}</td>
                <td><a href="{$conf->action_url}delete_products/{$product['id_product']}" class="btn btn-black btn-sm">X</a></td>
              </tr>
              {/strip} 
            {/foreach}  
          </tbody>
        </table>
      </div>
    </form>
  </div>

</div>



{/block}