@extends('adminlte::page')

@section('title', 'List company')

@section('content_header')
    <h1>List company</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.companies.create')}}">Add</a>
        </div>

        <div class="car-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-xs" href="{{ route('admin.companies.edit', $company)}}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.companies.destroy', $company)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
