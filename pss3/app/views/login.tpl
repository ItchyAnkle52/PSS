{extends file="main.tpl"}

{block name=top}

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Log in</h1>
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
        <form action="{$conf->action_root}login" method="post">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Provide credentials</h2>
            <div class="p-3 p-lg-5 border bg-white">
              <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">E-mail <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="email" placeholder="">
                  </div>
              </div> 
              <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_address" name="password" placeholder="">
                  </div>
              </div>
              <br>
              <div class="form-group">
                  <button class="btn btn-black btn-lg py-3 btn-block" type="submit">Log in</button>
              </div>
            </div>
          </form>
          </div>
        
        {include file="messages.tpl"}
    </div>
  </div>
</div>

{/block}