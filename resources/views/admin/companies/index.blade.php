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
                <a class="btn btn-primary btn-sm" href="{{ route('admin.companies.create')}}"><i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="card-body">
            <x-adminlte-datatable id="table2" :heads="$heads">
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td class="text-right">
                            <a href="{{ route('admin.companies.edit', $company) }}" class="btn btn-info btn-xs">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.companies.destroy', $company) }}" method="POST" onsubmit="return confirm('{{ __('Are sure want to delete?') }}')" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-xs">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
@endsection

@section('plugins.Datatables', true)
