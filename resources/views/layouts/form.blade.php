<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lapak Tel-U | @yield('title')</title>

    @notifyCss
    @include('includes.style')
    @include('includes.font')
    @include('includes.bootstrap')

  </head>
  <body>
    <div
      class="container-flex justify-content-center align-items-center"
      id="_container"
    >
      @yield('content')
    </div>
    @include('includes.script')
    <x-notify::notify />
    @notifyJs
  </body>

  <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
      (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
      })()
  </script>
</html>
