@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrarse</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="md-form">
                            

                            
                            <!--  <i class="fa fa-user prefix"></i>-->
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                  <label for="name" class="col-md-4 control-label">Nombre de usuario</label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                        <div class="md-form">
                      <!--  <i class="fa fa-envelope prefix"></i>-->
                            <label for="email" class="col-md-4 control-label">Correo electronico</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <label for="email" class="col-md-4 control-label">Correo electronico</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="md-form">
                           <!-- <i class="fa fa-lock prefix"></i>-->
                                <input id="password" type="password" class="form-control" name="password" required>
                                <label for="password" class="col-md-4 control-label">Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="md-form">
                         <!--  <i class="fa fa-lock prefix"></i>-->
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            
                        </div>
                     
                    <div class="md-form">
                   
                 
             <input type="file" id="inputFile4" name="urlimage" multiple="">
            <input type="text" readonly="" class="form-control" placeholder="Esta imagen se vera en su perfil">
             
                    
                      </div>
                      
                        <div class="md-form">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
