<form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" enctype="multipart/form-data">
    @method('DELETE')
    @csrf
    <x-adminlte-modal id="modalCompanyDelete{{$company->id}}" title="Disable company" theme="danger"
    icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div>You sure you want to disable the company {{$company->name}}?</div>
        <x-slot name="footerSlot">
            <x-adminlte-button type="button" theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="danger" label="Disable"/>
        </x-slot>
    </x-adminlte-modal>
</form>
