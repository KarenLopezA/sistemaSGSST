<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $aliado->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de identificación tributaria') }}
            {{ Form::text('nit', $aliado->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Certificado ARL en pdf') }}
            <br /><input type="file" name="certificate_pdf" required accept="application/pdf">
            {!! $errors->first('certificate_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Documento seguridad social en pdf') }}
            <br /><input type="file" name="social_security_pdf" required>
            {!! $errors->first('social_security_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ficha de seguridad pdf') }}
            <br /><input type="file" name="security_file_pdf" required>
            {!! $errors->first('security_file_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
