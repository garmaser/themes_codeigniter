<?php
//$no_visible_elements = true;
?>

<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Bienvenido al Sistema GARMASER</h2>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
    <div class="well span5 center login-box">
        <div class="alert alert-info">
            Inicia sesión con tu nombre de usuario y contraseña.
        </div>
        <form class="form-horizontal" action="<?php echo site_url('auth/login')?>" method="post">
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="identity" id="identity" type="text" value="" />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember" />Recordarme</label>
                </div>
                <div class="clearfix"></div>

                <p class="center span5">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </p>
            </fieldset>
        </form>
    </div><!--/span-->
</div><!--/row-->

