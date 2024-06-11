@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Groups VPN')
@section('content_header_title', 'Groups VPN')
@section('content_header_subtitle', 'List of Groups VPN')

{{-- Content body: main page content --}}
@section('content_body')
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('admin.group_vpns.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                </a>
                {{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalGroupVpnCreate">
                    <i class="fas fa-plus"></i>
                </a> --}}
            </div>

            {{-- @include('admin.group_vpns.modal.create') --}}
        </div>
        <div class="card-body">
            <table class="table table-striped" id="group_vpnTable">
                <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Company') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Slug') }}</th>
                        <th>{{ __('Network') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th style="text-align: right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($group_vpns as $group_vpn)
                        <tr>
                            <td>{{ $group_vpn->id }}</td>
                            <td>{{ $group_vpn->company->name }}</td>
                            <td>{{ $group_vpn->name }}</td>
                            <td>{{ $group_vpn->slug }}</td>
                            <td>{{ $group_vpn->network }}</td>
                            <td>{{ $group_vpn->description }}</td>
                            <td style="text-align: right">
                                <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalGroupVpnShow{{ $group_vpn->id }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('admin.group_vpns.edit', $group_vpn)}}" class="btn btn-info btn-xs">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalGroupVpnDelete{{ $group_vpn->id }}">
                                    <i class="fas fa-ban"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @foreach ( $group_vpns as $group_vpn )
        @include('admin.group_vpns.modal.delete', ['group_vpn' => $group_vpn])
        @include('admin.group_vpns.modal.show', ['group_vpn' => $group_vpn])
    @endforeach
@stop

{{-- Push extra scripts --}}
@push('js')
    <script>
        $(document).ready(function() {
            var $configDataTable = {
                "paging": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "autoWidth": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/2.0.8/i18n/es-ES.json"
                }
            };

            $('#group_vpnTable').DataTable($configDataTable);
        });
    </script>
@endpush
