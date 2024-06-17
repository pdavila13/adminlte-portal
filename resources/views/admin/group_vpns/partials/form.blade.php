<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('name', __('Name')) !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-object-group"></i></span>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter the name of the group vpn'), 'required']) !!}
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('company_id', __('Company')) !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-object-group"></i></span>
            </div>
            {!! Form::select('company_id', ['' => __('Select')] + $companies->pluck('name', 'id')->toArray(), old('company_id'), ['class' => 'form-control select2 select2-bootstrap4', 'required' => 'required']) !!}
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('network', __('Network')) !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-network-wired"></i></span>
            </div>
            {!! Form::text('network', null, ['class' => 'form-control', 'placeholder' => __('Enter the network'), 'required']) !!}
        </div>
        @error('network')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug', 'hidden']) !!}
        @error('slug')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-12">
    <div class="form-group">
        {!! Form::label('description', __('Description')) !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lg fa-file-alt"></i></span>
            </div>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => __('Enter the description of the group vpn'), 'required', 'rows' => 3]) !!}
        </div>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
