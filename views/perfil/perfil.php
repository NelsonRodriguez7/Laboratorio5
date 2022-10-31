<div class="container-fluid" style="background: linear-gradient(to right, rgba(246,211,101,0.5), rgba(253,160,133,0.5))">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="https://thumbnails-photos.amazon.com/v1/thumbnail/Cc0wxhUBQKKyUSCJeyclEg?ownerId=A30WQR61R8JNL9&viewBox=675&groupShareToken=ssKGmg-xQ26rJVsdfOW33w.gYXNSr6d3jZfYY9khRyI8M" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <br>
                    <h5 class="card-title"><?php echo seg::decodificar($_SESSION["nombre"]) ?></h5>
                    <p class="card-text">Con Correo:  <?php echo seg::decodificar($_SESSION["correo"])?></p>
                    <p class="card-text"><small class="text-muted">Cockies: Duracion de 1 minuto</small></p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>