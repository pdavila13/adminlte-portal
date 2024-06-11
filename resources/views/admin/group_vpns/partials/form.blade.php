<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-object-group"></i></span>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of the group vpn', 'required']) !!}
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('company_id', 'Company') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-object-group"></i></span>
            </div>
            {!! Form::select('company_id', ['' => __('Select a company')] + $companies->pluck('name', 'id')->toArray(), old('company_id'), ['class' => 'form-control select2 select2-bootstrap4', 'required' => 'required']) !!}
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('network', 'Network') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-network-wired"></i></span>
            </div>
            {!! Form::text('network', null, ['class' => 'form-control', 'placeholder' => 'Enter the network', 'required']) !!}
        </div>
        @error('network')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug of netowrk', 'required']) !!}
        @error('slug')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-12">
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lg fa-file-alt"></i></span>
            </div>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter the description of the group vpn', 'required', 'rows' => 3]) !!}
        </div>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
