{!! Form::open(['route' => ['admin.group_vpns.destroy', $group_vpn->id], 'method' => 'delete']) !!}
    <x-adminlte-modal id="modalGroupVpnDelete{{$group_vpn->id}}" title="{{ __('Disable') }}" theme="danger"
    icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div>{{ __('You sure you want to disable') }}</div>
        <x-slot name="footerSlot">
            <x-adminlte-button theme="secondary" label="{{ __('Cancel') }}" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="danger" label="{{ __('Disable') }}"/>
        </x-slot>
    </x-adminlte-modal>
{!! Form::close() !!}
