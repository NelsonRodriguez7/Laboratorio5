<div class="container-fluid" style="background: linear-gradient(to right, rgba(246,211,101,0.5), rgba(253,160,133,0.5))">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class="card border-Warning" style="max-width: 30rem;">
                <?php ?>
            <div class="card-header fw-bold">LOGIN</div>
            <div class="card-body">
                <br>
                <?php if($msg != "") {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg ?>
                </div>
                <?php }?>
                <form action="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("validar") ?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtCorreo_Usuario">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtContraseña_Usuario">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="ckrecordar" type="checkbox" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Recordar Datos
                    </label>
                </div>
                <br>
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token"/>
                <button type="subtmit" class="btn btn-success" style="width: 10rem;">Login</button>
                </form>
                <br>
                <spam>Click Aqui Para Desplegar los usuarios</spam>
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Desplegar
                    </a>
                </p>
                    <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <p>Correo: usuario1@hotmail.com</p>
                        <p>Correo: usuario2@hotmail.com</p>
                        <p>Correo: usuario3@hotmail.com</p>
                        <p>Password para todos los usuarios: 12345</p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>