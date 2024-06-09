@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Companies')
@section('content_header_title', 'Companies')
@section('content_header_subtitle', 'Create a new company')

{{-- Content body: main page content --}}
@section('content_body')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Create Company') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.companies.index') }}" class="btn btn-dark btn-sm">{{ __('Back') }}</a>
                        </div>
                    </div>
                    {!! Form::open(['route' => 'admin.companies.store']) !!}
                        <div class="card-body">
                            <div class="row">
                                @include('admin.companies.partials.form')
                            </div>
                        </div>
                        <div class="card-footer">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary float-right']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Push extra scripts --}}
@push('js')
    <script src="{{ asset('vendor/jquery-plugin-stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endpush
