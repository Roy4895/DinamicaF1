<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Modal -->

    <!-- Fonts // Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/005a9e0f80.js" crossorigin="anonymous"></script>
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    {!! htmlScriptTagJsApi() !!} 
</head>
<body>

    {{ $slot }}

      <!-- Modal Info -->
      <div class="modal fade" id="modalCliente" tabindex="-1" aria-labelledby="modalCliente" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número de Soy Cliente GNP</h5>
              <button type="button" class="close" data-dismiss='modal' aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close cerrar"></i></span>
              </button>
            </div>
            <div class="modal-body text-align-center">
                <img class="mb-3" src="./assets/images/werace.png" style="width: 90%;">
                <h5 class="title-modal">¡INGRESA TU NÚMERO DE CLIENTE!</h5>
                <p class="txt-modal">
                  1. Ingresa al sitio oficial de gnp.com.mx
                  <br>
                  <br>
                  2. Inicia sesión en la plataforma.
                  <br>
                  <br>
                  3. Una ves dentro, ve al aprtado de "Mi Perfil".
                  <br>
                  <br>
                  4. Debajo del número de póliza encontraras tu número de de cliente.
                  <br>
                  <br>
                  5. Copia y pega en el campo indicado de la Dinámica F1.
                  <br>
                  <br>
                  <br>
                  *Aplica en la contratación de la temporalidad de la dinámica.
                </p>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal Trivia -->
      <div class="modal fade" id="modalTrivia" tabindex="-1" aria-labelledby="modalTrivia" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¡Dinámica F1!</h5>
              <button type="button" class="close" data-dismiss='modal' aria-label="Close">
                <span aria-hidden="true"><i class="fa fa-close cerrar"></i></span>
              </button>
            </div>
            <div class="modal-body text-align-center">
                <h5 class="title-pregunta">PREGUNTA 1</h5>
                <p class="txt-modal-trivia">¿Cual es el nombre del ganador del Gran Premio de Mónaco 2022?</p>
            </div>

            <div class="preguntas">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label sub-txt" for="flexRadioDefault1">
                  Checo Pérez 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label sub-txt" for="flexRadioDefault2">
                  Max Verstappen
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label sub-txt" for="flexRadioDefault2">
                  Carlos Sainz
                </label>
              </div>
            </div>
            
            
            <div class="modal-footer justify-content-center mt5">
              <button type="button" class="btn btn-trivia-modal">SIGUIENTE<i class="fa fa-arrow-right ml10"></i></button>
            </div>
          </div>
        </div>
      </div>


      <!-- Bandera Inferior -->
      <div class="container-fluid overflow-hidden pd0">
          <div class="row">
              <div class="col-12">
                  <img class="bandera-i" src="./assets/images/bandera_inferior.png">
              </div>
          </div>
      </div>


      <!-- Footer -->
      <footer class="footer bg-dark text-white shape-parent overflow-hidden text-center">
        <div class="container pt-4">
           <div class="footer-copyright mb-3">© 2022 - GNP Todos los derechos reservados</div>
        </div>
      </footer>


    <!-- Script Bootstrap -->
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/ bootstrap.bundle.min"></script>

    <!-- Modal -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <!-- Tooltip -->
    <script>
      const tooltips = document.querySelectorAll('.tt')
      tooltips.forEach(t => {
        new bootstrap.Tooltip(t)
      })
    </script>
</body>
</html>