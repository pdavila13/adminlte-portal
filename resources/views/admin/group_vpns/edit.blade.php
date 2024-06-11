@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Groups VPN')
@section('content_header_title', 'Groups VPN')
@section('content_header_subtitle', 'Edit group VPN')

{{-- Content body: main page content --}}
@section('content_body')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Edit Group VPN') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.group_vpns.index') }}" class="btn btn-dark btn-sm">{{ __('Back') }}</a>
                        </div>
                    </div>
                    {!! Form::model($group_vpn, ['route' => ['admin.group_vpns.update', $group_vpn], 'method' => 'PUT']) !!}
                        <div class="card-body">
                            <div class="row">
                                @include('admin.group_vpns.partials.form')
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

            $('.select2').select2({
                theme: 'bootstrap4'
            });
        });
    </script>
@endpush
