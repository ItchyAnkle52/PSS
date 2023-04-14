{extends file="main.tpl"}

{block name=top}

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
{*                    <div class="custom-navbar" id="navbarsFurni">*}
{*                        <ul class="custom-navbar-nav">*}
{*                            <li><a class="nav-link" href="{$conf->action_root}shop_chairs">Chairs</a></li>*}
{*                            <li><a class="nav-link" href="{$conf->action_root}shop_fancy_chairs">Fancy Chairs</a></li>*}
{*                            <li><a class="nav-link" href="{$conf->action_root}shop_even_fancier_chairs">Even Fancier Chairs</a></li>*}
{*                        </ul>*}
{*                    </div>*}
                </div>
            </div>
            <form action="{$conf->action_url}shop_filtered_chairs">
                <fieldset>
                    <input type="text"  name="item_name" value="{$form->item_name}" />
                    <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Filter</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
          <div class="row">
            {foreach $products as $product}
                {strip}
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    {if count($conf->roles)>0}
                    <a class="product-item" href="{$conf->action_root}add_to_cart/{$product['id_product']}">
                    {else} 
                    <a class="product-item" href="{$conf->action_root}loginShow">    
                    {/if}
                        <img src="{$conf->app_url}/{$product['product_image_path']}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{$product["product_name"]}</h3>
                        <strong class="product-price">{$product["product_price"]}$</strong>
                        <span class="icon-cross">
                            <img src="{$conf->app_url}/images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div> 
                {/strip} 
            {/foreach}
            {if (empty($products))}
                <h3 class="product-title">No such products.</h3>
            {/if}
          </div>
        <div class="row">
            <div class="align-content-center">
                {if $page > 0}
                    <a class="btn btn-black btn-lg py-3 btn-block" href="{$conf->action_url}shop_filtered_chairs/{$page-1}/{$form->item_name}"><<</a>
                {/if}
            <h7 class="btn btn-black btn-lg py-3 btn-block" >{$page+1}</h7>
                {if $limit*($page+1) < $sum}
                    <a class="btn btn-black btn-lg py-3 btn-block" href="{$conf->action_url}shop_filtered_chairs/{$page+1}/{$form->item_name}">>></a>
                {/if}
            </div>
        </div>
    </div>
</div>

{/block}