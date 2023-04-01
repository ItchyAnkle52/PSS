{extends file="main.tpl"}

{block name=top}

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Registration</h1>
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
      <form action="{$conf->action_root}register" method="post">
        <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_fname" name="f_name" value="{$form->f_name}">
            </div>
            <div class="col-md-6">
              <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_lname" name="l_name" value="{$form->l_name}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">Passowrd <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="c_address" name="password" placeholder="" value="{$form->password}" >
            </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="c_address" class="text-black">Repeat Passowrd <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="c_address" name="r_password" placeholder="" value="{$form->r_password}">
          </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">E-mail <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="email" placeholder="E-mail address" value="{$form->email}">
            </div>
        </div> 

        <div class="form-group row">
          <div class="col-md-12">
            <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="c_address" name="address" placeholder="Street address" value="{$form->address}">
          </div>
        </div>

        <div class="form-group row mb-5">
          <div class="col-md-12">
            <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="c_phone" name="phone" placeholder="Phone Number" value="{$form->phone}">
          </div>
        </div>

        <div class="form-group">
            <button type="submit"  class="btn btn-black btn-lg py-3 btn-block">Register</button>
        </div>
      </form>
      </div>
    </div>
    {include file="messages.tpl"}
  </div>

</div>
</div>

{/block}