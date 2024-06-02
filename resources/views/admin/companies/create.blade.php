<form class="needs-validation" novalidate action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <x-adminlte-modal id="modalCompanyCreate" title="Create new company" theme="primary"
        icon="fas fa-plus" v-centered static-backdrop scrollable>
        <div class="row">
            <x-adminlte-input name="iName" label="Company name" placeholder="" label-class="text-lightblue"
            value="{{ old('iName') }}" fgroup-class="col-md-6" error-key>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-building text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            @error('iName')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <x-adminlte-input name="iCIF" label="Tax identification code" placeholder="" label-class="text-lightblue"
            value="{{ old('iCIF') }}" fgroup-class="col-md-6" error-key>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-address-card text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            @error('iCIF')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-lightblue"
                igroup-size="sm" placeholder="Insert description..." fgroup-class="col-md-12" error-key>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                    </div>
                </x-slot>
                {{ old('taDesc') }}
            </x-adminlte-textarea>
        </div>
        <x-slot name="footerSlot">
            <x-adminlte-button type="botton" theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="primary" label="Save"/>
        </x-slot>
    </x-adminlte-modal>
</form>
