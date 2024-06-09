{!! Form::open(['route' => ['admin.companies.update', $company], 'method' => 'PUT']) !!}
    {!! Form::hidden('id', $company) !!}
    <x-adminlte-modal id="modalCompanyEdit{{$company}}" title="Edit company" theme="info"
        icon="fas fa-plus" v-centered static-backdrop scrollable>
        <div class="row">
            @include('admin.companies.partials.form')
        </div>

        <x-slot name="footerSlot">
            <x-adminlte-button theme="secondary" label="Cancel" data-dismiss="modal"/>
            <x-adminlte-button type="submit" theme="info" label="Save changes"/>
        </x-slot>
    </x-adminlte-modal>
{!! Form::close() !!}
