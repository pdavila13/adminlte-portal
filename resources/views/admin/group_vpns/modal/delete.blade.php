{!! Form::open(['route' => ['admin.group_vpns.destroy', $group_vpn->id], 'method' => 'delete']) !!}
    <x-adminlte-modal id="modalGroupVpnDelete{{$group_vpn->id}}" title="Delete group_vpn" theme="danger"
    icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div>You sure you want to disable the group_vpn {{$group_vpn->name}}?</div>
        <x-slot name="footerSlot">
            <x-adminlte-button theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="danger" label="Disable"/>
        </x-slot>
    </x-adminlte-modal>
{!! Form::close() !!}
