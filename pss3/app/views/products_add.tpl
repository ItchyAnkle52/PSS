{extends file="main.tpl"}

{block name=top}

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Add Product</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section">
<div class="container">
  <div class="row">
    <div class="col-md-6 mb-5 mb-md-0">
      <h2 class="h3 mb-3 text-black">Fill in the fields</h2>
      <div class="p-3 p-lg-5 border bg-white">
      <form action="{$conf->action_root}products_add" method="post">
        <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname" class="text-black">Product Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_fname" name="name" value="{$form->name}">
            </div>
            <div class="col-md-6">
              <label for="c_lname" class="text-black">Product Price <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_lname" name="price" value="{$form->price}">
            </div>
            <div class="col-md-6">
              <label for="c_address" class="text-black">Product Type ID <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="type" placeholder="" value="{$form->type}" >
            </div>
            <div class="col-md-6">
              <label for="c_address" class="text-black">Product Image Path <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="image" placeholder="" value="{$form->image}" >
            </div>
            
        </div>
      </div>
      <br /><br />
        <div class="form-group">
            <button type="submit"  class="btn btn-black btn-lg py-3 btn-block">Add Product to Shop</button>
        </div>
      </form>

    </div>
    {include file="messages.tpl"}
  </div>

</div>
</div>

{/block}