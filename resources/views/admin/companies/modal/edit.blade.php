<form class="needs-validation" novalidate action="{{ route('admin.companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $company->id }}">
    <x-adminlte-modal id="modalCompanyEdit{{$company->id}}" title="Edit company" theme="info"
        icon="fas fa-plus" v-centered static-backdrop scrollable>
        <div class="row">
            <x-adminlte-input name="name" label="Company name" placeholder="" label-class="text-lightblue"
            value="{{ $company->name }}" fgroup-class="col-md-6" error-key="name" required>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-building text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            {{-- <x-adminlte-input type="hidden" name="slug" placeholder="" value="{{ $company->slug }}" readonly /> --}}

            <x-adminlte-input name="cif" label="Tax identification code" placeholder="" label-class="text-lightblue"
            value="{{ $company->cif }}" fgroup-class="col-md-6" error-key="cif" required>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-address-card text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-lightblue"
                igroup-size="sm" placeholder="Insert description..." fgroup-class="col-md-12" error-key="description" required>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                    </div>
                </x-slot>
                {{ $company->description }}
            </x-adminlte-textarea>
        </div>

        <x-slot name="footerSlot">
            <x-adminlte-button theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="info" label="Save changes"/>
        </x-slot>
    </x-adminlte-modal>
</form>
