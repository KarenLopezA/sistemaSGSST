<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $encargadosg->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('lastname', $encargadosg->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Identificación') }}
            {{ Form::text('identification', $encargadosg->identification, ['class' => 'form-control' . ($errors->has('identification') ? ' is-invalid' : ''), 'placeholder' => 'Identification']) }}
            {!! $errors->first('identification', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel de Estudio') }}
            {{ Form::text('study_level', $encargadosg->study_level, ['class' => 'form-control' . ($errors->has('study_level') ? ' is-invalid' : ''), 'placeholder' => 'Study Level']) }}
            {!! $errors->first('study_level', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hoja de Vida (pdf)') }}
            <br /><input type="file" name="curriculum_pdf" required accept="application/pdf">
            {!! $errors->first('curriculum_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diploma (pdf)') }}
            <br /><input type="file" name="diploma_pdf" required>
            {!! $errors->first('diploma_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Curso 50 Horas (pdf)') }}
            <br /><input type="file" name="curse_pdf" required>
            {!! $errors->first('curse_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Seccional de Salud (pdf)') }}
            <br /><input type="file" name="health_pdf" required>
            {!! $errors->first('health_pdf', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>