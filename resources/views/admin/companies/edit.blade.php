<form class="needs-validation" novalidate action="{{ route('admin.companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $company->id }}">
    <x-adminlte-modal id="modalCompanyEdit{{$company->id}}" title="Edit company" theme="info"
        icon="fas fa-plus" v-centered static-backdrop scrollable>
        <div class="row">
            <div class="col-lg-6">
                <x-adminlte-input name="iName" label="Company name" placeholder="" label-class="text-lightblue" required value="{{ $company->name }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-building text-lightblue"></i>
                        </div>
                    </x-slot>
                    @error('iName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </x-adminlte-input>
            </div>

            <div class="col-lg-6">
                <x-adminlte-input name="iCIF" label="Tax identification code" placeholder="" label-class="text-lightblue" required value="{{ $company->cif }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-address-card text-lightblue"></i>
                        </div>
                    </x-slot>
                    @error('iCIF')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </x-adminlte-input>
            </div>

            <div class="col-lg-12">
                <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-lightblue"
                    igroup-size="sm" placeholder="Insert description...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{ $company->description }}
                </x-adminlte-textarea>
                @error('taDesc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <x-slot name="footerSlot">
            <x-adminlte-button theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="info" label="Save changes"/>
        </x-slot>
    </x-adminlte-modal>
</form>
