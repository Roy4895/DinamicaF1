<x-app-layout>

   <!-- Banner -->
   <main role="main">
        <div class="container-fluid pd0">
          <img class="logo" src="./assets/images/gnp.png" alt="GNP Seguros">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/images/banner_f1.jpg" class="d-block w-100" id="banner_desktop" alt="Dinámica F1">
                    <img src="./assets/images/banner_f1_mobile.jpg" class="img-mobile" id="banner_movil" alt="Dinámica F1">
                    <div class="carousel-caption">
                        <h2 class="title-f1">UNA EXPERIENCIA INMERSIVA<br>EN EL CORAZÓN DE LA F1</h2>
                        <p class="txt-f1">Cada Gran Premio tiene su propio carácter único. Y cada Grand Prix<br>también tiene sus propias experiencias únicas esperando solo para ti.</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </main>


    <!-- Título -->
    <div class="container-fluid text-align-center mt5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-12 position-relative">
                
                <h5 class="title">¡Participa!</h5>
                <p class="text">Regístrate y no dejes pasar está gran<br>oportunidad que GNP y Fórmula 1 tienen para ti</p>
                <img class="bandera-s" src="./assets/images/bandera_superior.png" alt="Bandera F1">
            </div>
        </div>
    </div>


    <!-- Formulario -->
    <div class="container-fluid back-login top-login">
        <div class="row justify-content-center pb-3">
          <div class="col-lg-7 box">
                <div class="row justify-content-center">
                    <div class="mb-3 text-align-center">
                      <img class="wlogo" src="./assets/images/logo_f1.png">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label title-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label title-label">Apellidos</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label title-label">Correo electrónico registrado en póliza</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                      </div>

                      <label class="mb-label title-label">Número de Soy Cliente GNP</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control">
                        <!-- Tooltip -->
                        <span class="input-group-text">
                          <span class="tt">
                            <a href="#" class="icon-i"><i class="fa fa-info" data-toggle='modal' data-target="#modalCliente" aria-hidden="true"></i></a>
                          </span>
                        </span>
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label title-label">Número de póliza vigente</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>

                      <div class="mb20">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault"><a href="#" class="link txt-terminos">Términos y Condiciones</a></label>
                          </label>
                        </div>
                      </div>

                      <div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault"><a href="#" class="link txt-aviso">Aviso de Privacidad</a></label>
                          </label>
                        </div>
                      </div>
                      
                    
                    <!--recaptch -->
                    <div class="col-md-12 col-12 mt20">
                        {!! htmlFormSnippet() !!}
                    </div>
                    <!--end recaptch -->
                     
                    <div class="col-12 col-md-12 mt-5">
                        <a href="#" class="link"><button class="btn btn-block btn-trivia" data-toggle='modal' data-target="#modalTrivia" aria-hidden="true">COMENZAR TRIVIA<i class="fa fa-arrow-right ml10"></i></button></a>
                    </div>
                </div>
          </div>
        </div>
      </div>
</x-app-layout>
