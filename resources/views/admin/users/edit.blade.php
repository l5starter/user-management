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
            <h1 class="box-title">{{ trans('l5starter::user.edit_form') }}</h1>
        </div>
        <div class="box-body">
            {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch']) !!}
                @include('l5starter::admin.users.fields')
            {!! Form::close() !!}
        </div>
    </div>

@endsection

