{!! Form::open(['route' => ['admin.companies.destroy', $company->id], 'method' => 'delete']) !!}
    <x-adminlte-modal id="modalCompanyDelete{{$company->id}}" title="Disable company" theme="danger"
    icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div>You sure you want to disable the company {{$company->name}}?</div>
        <x-slot name="footerSlot">
            <x-adminlte-button theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="danger" label="Disable"/>
        </x-slot>
    </x-adminlte-modal>
{!! Form::close() !!}
