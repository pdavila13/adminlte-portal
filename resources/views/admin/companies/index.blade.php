@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Companies')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Companies')

{{-- Content body: main page content --}}

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List companies</h3>
            <div class="card-tools">
                <a href="{{route('admin.companies.create')}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            @include('admin.companies.modal.create')
        </div>
        <div class="card-body">
            <table class="table table-striped" id="companyTable" style="width:100%">
                <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('CIF') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th style="text-align: right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->cif }}</td>
                            <td>{{ $company->description }}</td>
                            <td style="text-align: right">
                                <a href="{{route('admin.companies.edit', $company)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalCompanyDelete{{ $company->id }}">
                                    <i class="fas fa-ban"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ( $companies as $company )
        @include('admin.companies.modal.delete', ['company' => $company])
    @endforeach
@stop

@push('js')
    <script>
        $(document).ready(function() {
            $('#companyTable').DataTable();
        });
    </script>
@endpush
