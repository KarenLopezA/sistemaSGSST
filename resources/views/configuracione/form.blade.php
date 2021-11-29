<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $configuracione->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nit') }}
            {{ Form::text('nit', $configuracione->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('georeferencing') }}
            {{ Form::text('georeferencing', $configuracione->georeferencing, ['class' => 'form-control' . ($errors->has('georeferencing') ? ' is-invalid' : ''), 'placeholder' => 'Georeferencing']) }}
            {!! $errors->first('georeferencing', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('economic_activity') }}
            {{ Form::text('economic_activity', $configuracione->economic_activity, ['class' => 'form-control' . ($errors->has('economic_activity') ? ' is-invalid' : ''), 'placeholder' => 'Economic Activity']) }}
            {!! $errors->first('economic_activity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('risk_level') }}
            {{ Form::text('risk_level', $configuracione->risk_level, ['class' => 'form-control' . ($errors->has('risk_level') ? ' is-invalid' : ''), 'placeholder' => 'Risk Level']) }}
            {!! $errors->first('risk_level', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_of_workers') }}
            {{ Form::text('number_of_workers', $configuracione->number_of_workers, ['class' => 'form-control' . ($errors->has('number_of_workers') ? ' is-invalid' : ''), 'placeholder' => 'Number Of Workers']) }}
            {!! $errors->first('number_of_workers', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('legal_nature') }}
            {{ Form::text('legal_nature', $configuracione->legal_nature, ['class' => 'form-control' . ($errors->has('legal_nature') ? ' is-invalid' : ''), 'placeholder' => 'Legal Nature']) }}
            {!! $errors->first('legal_nature', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telephone_contacts') }}
            {{ Form::text('telephone_contacts', $configuracione->telephone_contacts, ['class' => 'form-control' . ($errors->has('telephone_contacts') ? ' is-invalid' : ''), 'placeholder' => 'Telephone Contacts']) }}
            {!! $errors->first('telephone_contacts', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $configuracione->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_of_company') }}
            {{ Form::text('type_of_company', $configuracione->type_of_company, ['class' => 'form-control' . ($errors->has('type_of_company') ? ' is-invalid' : ''), 'placeholder' => 'Type Of Company']) }}
            {!! $errors->first('type_of_company', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
