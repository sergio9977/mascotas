<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : ''}}">
    {!! Form::label('Descripcion', 'Descripcion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Id_Usuario') ? 'has-error' : ''}}">
    {!! Form::label('Id_Usuario', 'Id Usuario', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('Id_Usuario', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Id_Usuario', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Direccion') ? 'has-error' : ''}}">
    {!! Form::label('Direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Logo') ? 'has-error' : ''}}">
    {!! Form::label('Logo', 'Logo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Logo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Logo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    {!! Form::label('Telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Telefono', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Id_Estado') ? 'has-error' : ''}}">
    {!! Form::label('Id_Estado', 'Id Estado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('Id_Estado', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Id_Estado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>