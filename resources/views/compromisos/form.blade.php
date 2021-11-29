<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $compromiso->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo que ocupa') }}
            {{ Form::text('position_held', $compromiso->position_held, ['class' => 'form-control' . ($errors->has('position_held') ? ' is-invalid' : ''), 'placeholder' => 'position_held']) }}
            {!! $errors->first('position_held', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('añadir formato de un compromiso ->->') }}
            <br /><input type="file" name="signature_pdf" required>
            {!! $errors->first('signature_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Subir formato</button>
    </div>
</div>
