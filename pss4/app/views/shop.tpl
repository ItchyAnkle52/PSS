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
            <form id="search-form" onsubmit="ajaxPostForm('search-form','{$conf->action_url}chair_list_ajax','table'); return false;">
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
          <div class="row" id="table">
            {include file="shop_filter.tpl"}
          </div>
    </div>
</div>

{/block}