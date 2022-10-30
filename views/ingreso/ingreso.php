<div class="container-fluid" style="background: linear-gradient(to right, rgba(246,211,101,0.5), rgba(253,160,133,0.5))">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class="card border-Warning" style="max-width: 30rem;">
            <div class="card-header fw-bold">LOGIN</div>
            <div class="card-body">
                <br>
                <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtCorreo_Usuario">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtContraseña_Usuario">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token"/>
                    <button type="subtmit" class="btn btn-success" style="width: 10rem;">Login</button>
                </form>
                <br>
                <spam>¿No tienes una cuenta? Click aqui para crear una</spam>
            </div>
        </div>
    </div>
</div>