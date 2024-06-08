<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of the company', 'required']) !!}
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug of company', 'readonly']) !!}
        @error('slug')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('cif', 'CIF') !!}
        {!! Form::text('cif', null, ['class' => 'form-control', 'placeholder' => 'Enter the CIF of the company', 'required']) !!}
        @error('cif')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-6">
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', ['1' => 'Active', '2' => 'Inactive'], null, ['class' => 'form-control']) !!}
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="col-lg-12">
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter the description of the company', 'required']) !!}
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
