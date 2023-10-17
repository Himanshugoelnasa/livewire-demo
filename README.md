# Multi Step Form Using Livewire in Laravel

![Multi Step Form](01.JPG)

Laravel livewire is a user-friendly package for developing full-stack web applications; it lowers the pain of building dynamic user interface components. You are going to understand how to use this package to create a dynamic multi-step form with a laravel form wizard using livewire.
Forms are useful for collecting user information, Sometimes, you need to build advanced forms that need to be categorized in multi-steps. This tutorial will guide you from scratch about how to create a multi-step way not only but also form a wizard with the help of the livewire package in the laravel 8 application.

> ### Routes
```php
Route::view('/register','register')->name('register');
Route::view('/registration-success','registration-success')->name('registration.success');
```
> ### register.blade.php
```php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title ?? 'Multi Step Form'}}</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png" />
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- Fonts -->
    <link href="{{ asset('js/fonts.css')}}" rel="stylesheet" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/pages/register/register.css')}}" />
</head>
<body>
        {{ $slot }}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>

    <script src="https://cdn.tiny.cloud/1/777soj19kolru4art71pyoei5biguouavgrcgop6xabu7uog/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    <script>
      $("#country, .dropdownmenu").dropdown();
      $("#empolsize").dropdown();
      $("#client_list, #social_list").dropdown();


    </script>
    <script>
      tinymce.init({
          selector: '#editor',
      });
    </script>

</body>
</html>
```

> ### multi-step-form.blade.php
This is the content of multi step form livewire blade component.
```php
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


```

> ### MultiStepForm.php
This is the multi step form livewire class
```php
<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $email;
    public $phone;
    public $country;
    public $cv;
    public $detail;

    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'email'=>'required|email',
                'country'=>'required',
                'phone'=>'required|numeric|digits:10',

            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'detail'=>'required',
              ]);
        }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->currentStep == 3){
              $this->validate([
                  'cv'=>'required|mimes:doc,docx,pdf|max:1024',
              ]);
          }

          $cv_name = 'CV_'.time().$this->cv->getClientOriginalName();
          $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

          if($cv_name) {
            $values = array(
                "email"=>$this->email,
                "phone"=>$this->phone,
                "country"=>$this->country,
                "detail"=>$this->detail,
                "cv"=>$cv_name,
            );

            $data = ['email'=>$this->email, 'phone' => $this->phone, "country"=>$this->country,"detail"=>$this->detail, 'cv' => $cv_name];
            return redirect()->route('register.success', $data);
        }
    }
}
```

> ### registration-success.blade.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration success!</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="d-flex justify-content-center p-4 pt-4">
    <div class="card">
        <div class="card-header bg-success text-white">Registration complete</div>
        <div class="card-body">
            hello <b>{{ request()->name }}</b>, thank you for joining us, soon we will approve your registration. </br>
            When your account approved, you will receive your credentials on <b>{{ request()->email }}</b> </br>
            Thank you </br></br>
            <a href="/" class="btn btn-sm btn-primary">Back to home</a>
        </div>
    </div>
</body>
</html>
```
