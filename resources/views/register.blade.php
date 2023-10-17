<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
<body>


    @livewire('multistepform')
             
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>

    <script src="https://cdn.tiny.cloud/1/777soj19kolru4art71pyoei5biguouavgrcgop6xabu7uog/tinymce/6/tinymce.min.js"></script>

         
    <script>
        $('#country').click(function() {
            $("#country, .dropdownmenu").dropdown();
        })
        $('.second').click(function() {
            var content= tinyMCE.get('editor').getContent();
            $(".tinymce").val(content.replace( /(<([^>]+)>)/ig, '') );
            $(".tinymce").css('visibility', 'hidden');
            $(".tinymce").css('display', 'block');
            if($(".tinymce").val() == '') {
                $('.detail').text('Please input some text');
                return false;
            } else{
                $('.detail').text('');
            }
        });
    </script>
<script>
    $(function () {
        tinymce.init({
            selector: "#editor",
        });
    });
</script>
@livewireScripts
</body>
</html>