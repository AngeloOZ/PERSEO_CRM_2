<div class="setup-inner-steps setup-requirements">

    <h5 class="text-info"> Configuración de la base de datos MySQL </h5>
    <form class="form-horizontal form-material" id="setupForm" name="setupForm">
        <div class="form-group m-t-40 row">
            <label for="example-text-input" class="col-4 col-form-label">Servidor de bases de datos</label>
            <div class="col-8">
                <input class="form-control form-control-sm" type="text" value="localhost" id="database_host"
                    name="database_host">
            </div>
        </div>
        <div class="form-group m-t-40 row">
            <label for="example-text-input" class="col-4 col-form-label">Puerto del servidor</label>
            <div class="col-8">
                <input class="form-control form-control-sm" type="text" value="3306" id="database_port"
                    name="database_port">
            </div>
        </div>
        <div class="form-group m-t-40 row">
            <label for="example-text-input" class="col-4 col-form-label">Nombre de la base de datos</label>
            <div class="col-8">
                <input class="form-control form-control-sm" type="text" value="" id="database_name"
                    name="database_name">
            </div>
        </div>
        <div class="form-group m-t-40 row">
            <label for="example-text-input" class="col-4 col-form-label">Nombre de usuario de la base de datos</label>
            <div class="col-8">
                <input class="form-control form-control-sm" type="text" value="" id="database_username"
                    name="database_username">
            </div>
        </div>
        <div class="form-group m-t-40 row">
            <label for="example-text-input" class="col-4 col-form-label">Contraseña de la base de datos</label>
            <div class="col-8">
                <input class="form-control form-control-sm" type="password" value="" id="database_password"
                    name="database_password">
            </div>
        </div>

        <!--continue-->
        <div class="x-button text-right p-t-20">
            <button class="btn waves-effect waves-light btn-info btn-extra-padding"
                data-button-loading-annimation="yes"
                data-button-disable-on-click="yes"
                data-type="form" data-ajax-type="post" data-form-id="setupForm" id="continueButton" type="submit"
                data-url="{{url('setup/database') }}">Continuar</button>
        </div>
    </form>    
</div>