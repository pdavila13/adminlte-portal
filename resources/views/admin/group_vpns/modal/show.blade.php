<x-adminlte-modal id="modalGroupVpnShow{{$group_vpn->id}}" title="Show Group VPN" theme="success"
icon="fas fa-bell" v-centered static-backdrop scrollable>
    <div>{{$group_vpn->name}}</div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="secondary" label="Cancel" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>
