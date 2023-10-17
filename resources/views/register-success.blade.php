<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration success!</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
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
    @livewireStyles
</head>
<body class="d-flex justify-content-center p-4 pt-4">
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


          <form wire:submit.prevent="register">
            <div id="step-1" class="clientFrom step p-0" data-id='1'>
              	<div class="text-center pt-5">
                	<img src="images/register-assets/mocal-logo.svg" />
              	</div>
              	<div class="modal-px-60 pt-5">
                	<table class="table">
                		<tr>
                			<td>Email</td>
                			<td>{{ request()->email }}</td>
                		</tr>
                		<tr>
                			<td>Country</td>
                			<td>{{ request()->country }}</td>
                		</tr>
                		<tr>
                			<td>Phone</td>
                			<td>{{ request()->phone }}</td>
                		</tr>
                		<tr>
                			<td>Company Detail</td>
                			<td>{{ request()->detail }}</td>
                		</tr>
                    <tr>
                      <td>CV</td>
                      <td>{{ request()->cv }}</td>
                    </tr>
                	</table>
	           	</div>
	           	<div class="text-center mb-5">
                    <button type="submit" class="btn btn-purple-fill nextScreen next">
                      Submit
                    </button>
                  </div> 
	        </div>
           
        </div>

        <div class="signin-circle-animation">
          <img src="images/register-assets/clock-animation.gif" />
          <h3>We'll help you find the perfect time with your clients. Please enter your details to start with and we'll fit you right in.</h3>
        </div>
      </div>
    </section>

    <script>
  tinymce.init({
      selector: '#editor',
  });
</script>
    @livewireScripts
</body>
</html>