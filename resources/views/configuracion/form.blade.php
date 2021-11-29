<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $configuracion->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nit') }}
            {{ Form::text('nit', $configuracion->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Georeferenciación') }}
            <br /><input type="file" name="georeferencing" required accept="application/img">
            {!! $errors->first('georeferencing', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actividad económica') }}
            {{ Form::text('economic_activity', $configuracion->economic_activity, ['class' => 'form-control' . ($errors->has('economic_activity') ? ' is-invalid' : ''), 'placeholder' => 'Economic Activity']) }}
            {!! $errors->first('economic_activity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel de riesgo') }}
            {{ Form::text('risk_level', $configuracion->risk_level, ['class' => 'form-control' . ($errors->has('risk_level') ? ' is-invalid' : ''), 'placeholder' => 'Risk Level']) }}
            {!! $errors->first('risk_level', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad de trabajadores') }}
            {{ Form::text('number_of_workers', $configuracion->number_of_workers, ['class' => 'form-control' . ($errors->has('number_of_workers') ? ' is-invalid' : ''), 'placeholder' => 'Number Of Workers']) }}
            {!! $errors->first('number_of_workers', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Naturaleza jurídica de la empresa') }}
            {{ Form::text('legal_nature', $configuracion->legal_nature, ['class' => 'form-control' . ($errors->has('legal_nature') ? ' is-invalid' : ''), 'placeholder' => 'Legal Nature']) }}
            {!! $errors->first('legal_nature', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teléfonos de contacto') }}
            {{ Form::text('telephone_contacts', $configuracion->telephone_contacts, ['class' => 'form-control' . ($errors->has('telephone_contacts') ? ' is-invalid' : ''), 'placeholder' => 'Telephone Contacts']) }}
            {!! $errors->first('telephone_contacts', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo electrónico') }}
            {{ Form::text('email', $configuracion->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo de empresa') }}
            {{ Form::text('type_of_company', $configuracion->type_of_company, ['class' => 'form-control' . ($errors->has('type_of_company') ? ' is-invalid' : ''), 'placeholder' => 'Type Of Company']) }}
            {!! $errors->first('type_of_company', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
