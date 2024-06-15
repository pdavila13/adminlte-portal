@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', __('Companies'))
@section('content_header_title', __('Companies'))
@section('content_header_subtitle', __('Company List'))

{{-- Content body: main page content --}}
@section('content_body')
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCompanyCreate">
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            @include('admin.companies.modal.create')
        </div>
        <div class="card-body">
            <table class="table table-striped" id="companyTable">
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
                                <a href="{{route('admin.companies.edit', $company)}}" class="btn btn-info btn-xs">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalCompanyDelete{{ $company->id }}">
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

{{-- Push extra scripts --}}
@push('js')
    <script>
        $(document).ready(function() {
            var $configDataTable = {
                "paging": true,
                "ordering": false,
                "info": true,
                "responsive": true,
                "autoWidth": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/2.0.8/i18n/ca.json"
                }
            };

            $('#companyTable').DataTable($configDataTable);
        });
    </script>
@endpush
