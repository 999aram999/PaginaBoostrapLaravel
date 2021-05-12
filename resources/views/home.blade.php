@extends('app')
@section('content')
    <!-- MAIN -->
    <main id="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/imgV1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/imgV2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/imgV3.webp" class="d-block w-100" alt="...">
                </div>

                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 offset-md-6 text-md-center text-center">
                                <h1>Video Game</h1>
                                <p class="d-none d-md-block">Un lugar donde podrás encontrar toda diversion al alcance de unos cuantos clic,
                                    podras obtener los juegos adecuados para tu PC y si le tienes fe a tu RAM, podras probar los juegos más
                                    actuales.
                                </p>
                                <!-- <a href="#" class="btn btn-outline-light">Quiero ser alumno</a>
                                <button class="btn btn-tecnoeduca">Mas información</button> -->
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-tecnoeduca" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Quiero ser gamer
  </button>
  <div class="collapse" id="collapseExample">
    <div class="card card-body" style="background: chartreuse;">
      Hechale ganas
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¡Lo entiendo campeon!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Hay que practicar duro :3
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
  
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
          </div>
    </main>
    <!-- END MAIN -->
    <!-- Videos -->
    <div class="row">
        <div class="ratio ratio-16x9 pt-4 pl-4">
            <iframe src="https://www.youtube.com/embed/aR-KAldshAE" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="ratio ratio-16x9 pt-4 pl-2">
            <iframe src="https://www.youtube.com/embed/Jmliox1trPQ" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="ratio ratio-16x9 pt-4 pl-2">
            <iframe src="https://www.youtube.com/embed/V1TeLxpEZNk" title="YouTube video" allowfullscreen></iframe>
        </div>
        <div class="ratio ratio-16x9 pt-4 pl-2">
            <iframe src="https://www.youtube.com/embed/TXl9GI1p_Os" title="YouTube video" allowfullscreen></iframe>
        </div>
    </div>
    <!-- End Videos -->
    <div class="row pt-4 pl-4">
        <span class="border-0"><img src="imagenes/spam1.jpg" alt="" style="width: 230px; height: 150px;"></span>
        <span class="border-0 pl-4"><img src="imagenes/spam2.jpg" alt="" style="width: 230px; height: 150px;"></span>
        <span class="border-0 pl-4"><img src="imagenes/spam3.png" alt="" style="width: 230px; height: 150px;"></span>
        <span class="border-0 pl-4"><img src="imagenes/spam4.jpg" alt="" style="width: 230px; height: 150px;"></span>
        <span class="border-0 pl-4"><img src="imagenes/spam5.jpg" alt="" style="width: 225px; height: 150px;"></span>
    </div>
    
    <!-- CLASE ONLINE -->
    <br>
    <section id="clase-online">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0 pr-0">
                    <img src="imagenes/imgV3.webp" alt="">
                </div>
                
                <div class="col-lg-6 pt-4 pb-4" style="align-items: center;">
                    <h2 style="text-align: center;">TORNEO DE LOL</h2>
                    <p style="text-align: center;">
                        Informate sobre el torneo de LOL, donde podras ver la transmición completamente en vivo
                        y apoyando a tu clan preferido.
                        <br><H1 style="text-align: center;">!NO PIERDAS LA OPORTUNIDAD Y MANTENTE AL TANDO¡</H1>

                    </p>
                    <button type="button" class="btn btn-tecnoeduca" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        INFORMATE
                      </button>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body" style="background: chartreuse;">
                          Torneo de LOL el proximo 30 de mayo del 2021
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- END CLASE ONLINE -->
@endsection