@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
    <h1>Companies</h1>
@stop

@section('content')
    @php
        $heads = [
            ['label' => 'ID', 'width' => 5],
            'Name',
            'CIF',
            'Description',
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];

        $config = [
        'order' => [[1, 'des']],
        'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List companies</h3>
            <div class="card-tools">
                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalCompanyCreate">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        @include('admin.companies.create')
        <div class="card-body">
            <x-adminlte-datatable id="table2" :heads="$heads">
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->cif }}</td>
                        <td>{{ $company->description }}</td>
                        <td class="text-right">
                            <a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalCompanyEdit{{ $company->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalCompanyDelete{{ $company->id }}">
                                <i class="fas fa-ban"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>

    @foreach ($companies as $company)
        @include('admin.companies.edit', ['company' => $company])
        @include('admin.companies.delete')
    @endforeach
@endsection

@section('plugins.Datatables', true)

@section('js')
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
@stop



