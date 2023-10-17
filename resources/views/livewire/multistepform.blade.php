 <section class="signin-bg">
      <div class="d-flex align-items-center justify-content-between h-100 flex-wrap">
        <div class="mocal-animation">
          <h1 class="TextWhite">
            <span class="OpacityFifty">Kickstart Your</span><br />
            Time Management Regime With <span class="TextYellow">MoCal</span>
          </h1>
          <h6 class="TextWhite">
            Risk-Free 30-Day Trial <br />
            <span class="OpacityFifty">No Credit Card Details Required</span>
          </h6>
            <dotlottie-player src="https://lottie.host/881e64b8-e799-49f1-a3be-6d247d51fbbd/goJ2dFDvzS.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>

        <div class="signin-card">


          <form method="post" wire:submit.prevent="register">
            @if ($currentStep == 1)
            <div id="step-1" class="clientFrom step p-0" data-id='1'>
              <div class="text-center pt-5">
                <img src="images/register-assets/mocal-logo.svg" />
              </div>
              <div class="modal-px-60 pt-5">
                <input type="email" wire:model="email" placeholder="Enter Email Address" class="input-style input-font-bold" />
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
    
                <div class="d-flex mt-4">
                  <select class="form-control" wire:model="country">
                       <option value="" selected>Select country</option>
                       <option value="United States">United States</option>
                       <option value="India">India</option>
                       <option value="Rwanda">Rwanda</option>
                       <option value="Nigeria">Nigeria</option>
                       <option value="Phillipines">Phillipines</option>
                       <option value="Canada">Canada</option>
                       <option value="Bangladesh">Bangladesh</option>
                   </select>
                  <div class="ui fluid search selection dropdown input-font-bold d-none" id="country">
                    <input type="hidden" wire:model="country" />
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Country</div>
                    <div class="menu">
                      <div class="item" data-value="af">
                        <i class="af flag"></i>India
                      </div>
                      <div class="item" data-value="ax">
                        <i class="ax flag"></i>USA
                      </div>
                      <div class="item" data-value="al">
                        <i class="al flag"></i>Albania
                      </div>
                      <div class="item" data-value="dz">
                        <i class="dz flag"></i>Algeria
                      </div>
                      <div class="item" data-value="as">
                        <i class="as flag"></i>American Samoa
                      </div>
                      
                    </div>
                  </div>
    
                  <input type="tel" maxlength="10" placeholder="Enter Phone Number" class="input-style input-font-bold ps-3" wire:model="phone"  />
                  
                </div>
                <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
    
                <div class="text-center">

                  <button type="button" wire:click="increaseStep()" class="btn-purple-fill btn-width-sm mt-5 nextScreen next" >Next</button>

                  <div class="or"></div>

                  <p class="mt-4 mb-5">
                    Already have an account?
                    <a href="signin.html" class="anchor-blue text-decoration"
                      >Log in</a
                    >
                  </p>
                </div>
              </div>
            </div>
            @endif

            @if ($currentStep == 2)

            <div id="step-2" class="clientFrom step p-0 Hideborder" data-id='2'>
              <div class="modal-content radius24">
                <div class="pt-5">
                  <div class="text-center border-btm">
                    <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
                  </div>

                  <div class="modal-body pt-4 modal-px-60">
                    <div class="mb-4">
                      <div class="row">
                        <div class="col-lg-12">
  
                          <div class="form-check d-inline-block me-3 ps-0 ms-0">                           
                            <label for="individual">Company Details</label>
                          </div>                         
                        </div>
                      </div>
                    </div>

                    <div class="mb-5" wire:ignore>
                      <textarea rows="4" wire:model="detail" class="form-control" > </textarea>
                      
                    </div>
                    <span class="text-danger detail">@error('detail'){{ $message }}@enderror</span>                                       
                  </div>

                  <div class="text-center mt-5 pt-5 mb-5">
                    <button type="button" wire:click="decreaseStep()" class="btn btn-white-fill prevScreen prev">< Back</button>
                    <button type="button" wire:click="increaseStep()" class="btn btn-purple-fill nextScreen next second"> Next </button>
                  </div>
                </div>
              </div>
            </div>

            @endif

            @if ($currentStep == 3)

            <div id="step-3" class="clientFrom step p-0 Hideborder" data-id='3'>
              <div class="modal-content radius24">
                <div class="pt-5">

                  <div class="text-center border-btm">
                    <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
                  </div>

                  <div class="modal-body pt-5 modal-px-60">
                    <div class="mb-4">
                      <div class="row">
                        <div class="col-lg-12">                          
                          <!-- mainsite/assets/images/signed-offer-letter-assets/upload-img-2.png -->                          
                          <div class="inputfiles">
                            <div class="fileUploadWrap">
                                <div>
                                    <img src="images/register-assets/upload-files.png"
                                        alt="" class="DropIcon" />
                                    <input type="file" wire:model="cv" name="import_file">

                                </div>

                                <div class="parawrap">
                                    <p class="fileNames">File Chosen : No File Chosen </p>
                                    <p class="fileName">Profile Picture </p>                                    
                                </div>
                            </div>
                          </div>
                          <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="text-center mb-5">
                    <button type="button" wire:click="decreaseStep()" class="btn btn-white-fill prevScreen prev">< Back</button>
                    <button type="submit" class="btn btn-purple-fill nextScreen next">
                      Review Details
                    </button>
                  </div>  
                </div>
              </div>
            </div>

            @endif

          </form>
        </div>

        <div class="signin-circle-animation">
          <img src="images/register-assets/clock-animation.gif" />
          <h3>We'll help you find the perfect time with your clients. Please enter your details to start with and we'll fit you right in.</h3>
        </div>
      </div>
    </section>

