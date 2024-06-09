<div class="col-lg-12">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-building"></i></span>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of the company', 'required']) !!}
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('cif', 'CIF') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div>
            {!! Form::text('cif', null, ['class' => 'form-control', 'placeholder' => 'Enter the CIF', 'required']) !!}
        </div>
        @error('cif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-eye"></i></span>
            </div>
            {!! Form::select('status', ['1' => 'Active', '2' => 'Inactive'], null, ['class' => 'form-control']) !!}
        </div>
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug of company', 'hidden']) !!}
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
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter the description of the company', 'required', 'rows' => 3]) !!}
        </div>
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
