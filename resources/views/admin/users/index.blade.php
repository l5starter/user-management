@extends('l5starter::admin.layouts.master')

@section('content-header')
    <h1>
        {{ trans('l5starter::general.users') }}
    </h1>
@stop

@section('content')

    @include('flash::message')

    <div class="box">
        <div class="box-body table-responsive no-padding">
            @include('l5starter::admin.users.table')
            {{ $users->links() }}
        </div>
        <div class="box-footer clearfix">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-flat">{{ trans('l5starter::button.create') }}</a>
        </div>
    </div>

@endsection