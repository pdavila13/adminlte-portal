{!! Form::open(['route' => ['admin.companies.store'], 'method' => 'POST']) !!}
    <x-adminlte-modal id="modalCompanyCreate" title="{{ __('Create new company') }}" theme="primary" v-centered static-backdrop scrollable>
        <div class="row">
            @include('admin.companies.partials.form')
        </div>
        <x-slot name="footerSlot">
            <button type="submit" id="submit" class="btn btn-primary float-right">{{ __('Save') }}</button>
        </x-slot>
    </x-adminlte-modal>
{!! Form::close() !!}
