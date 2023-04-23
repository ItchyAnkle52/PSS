{extends file="main.tpl"}

{block name=top}

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Cart</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
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
              <th class="product-thumbnail">Image</th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
              <th class="product-total">Total</th>
              <th class="product-remove">Remove</th>
            </tr>
          </thead>
          <tbody>
            {foreach $products as $product}
              {strip}
              <tr>
                <td class="product-thumbnail">
                  <img src="{$product['product_image_path']}" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">{$product['product_name']}</h2>
                </td>
                <td>{$product['product_price']} $</td>
                <td>{$product['quantity']}</td>
                <td>{{$product['product_price']}*{$product['quantity']}} $</td>
                <td><a href="{$conf->action_url}delete_from_cart/{$product['id_product']}" class="btn btn-black btn-sm">X</a></td>
              </tr>
              {/strip} 
            {/foreach}  
          </tbody>
        </table>
      </div>
    </form>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="row">
     
      </div>
    </div>
    <div class="col-md-6 pl-5">
      <div class="row justify-content-end">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12 text-right border-bottom mb-5">
              <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6">
              <span class="text-black">Total</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black">{$smarty.session.sum} $</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='{$conf->action_root}checkout'">Place order</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


{/block}