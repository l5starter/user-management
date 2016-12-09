@extends('l5starter::admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('l5starter::general.users') }}
    </h1>
@stop

@section('content')

    @include('l5starter::common.errors')

    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">{{ trans('l5starter::user.create_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::open(['route' => 'admin.users.store']) !!}
                <div class="row">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', trans('l5starter::user.fields.name') . ':') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('email', trans('l5starter::user.fields.email') . ':') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('password', trans('l5starter::user.fields.password') . ':') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('password_confirmation', trans('l5starter::user.fields.password_confirmation') . ':') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::submit(trans('l5starter::button.save'), ['class' => 'btn btn-primary btn-flat']) !!}
                        <a href="{!! route('admin.users.index') !!}" class="btn btn-default btn-flat">{{ trans('l5starter::button.cancel') }}</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection