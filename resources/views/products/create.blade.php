@extends('layouts.admin')

@section('title', 'Add Voters Credentials')
@section('content-header', 'Add Voters Credentials')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="firname">First Name</label>
                <input type="text" name="firname" class="form-control @error('firname') is-invalid @enderror" id="firname"
                    placeholder="First Name" value="{{ old('firname') }}">
                @error('firname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="midname">Middle Name</label>
                <input type="text" name="midname" class="form-control @error('midname') is-invalid @enderror" id="midname"
                    placeholder="Middle Name" value="{{ old('midname') }}">
                @error('midname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
         
            <div class="form-group">
                <label for="lasname">Last Name</label>
                <input type="text" name="lasname" class="form-control @error('lasname') is-invalid @enderror" id="lasname"
                    placeholder="Last Name" value="{{ old('lasname') }}">
                @error('lasname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
         
            

            <div class="form-group">
                <label for="birthdate">Birthdate</label>
                <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror"
                    id="birthdate" placeholder="Birthdate" value="{{ old('birthdate') }}">
                @error('birthdate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="street">Purok/Street</label>
                <input type="text" name="street" class="form-control @error('quantity') is-invalid @enderror"
                    id="street" placeholder="Purok/Street" value="{{ old('street') }}">
                @error('street')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="barangay">Barangay</label>
                <input type="text" name="barangay" class="form-control @error('barangay') is-invalid @enderror"
                    id="barangay" placeholder="Barangay" value="{{ old('barangay') }}">
                @error('barangay')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="town">City/Town</label>
                <input type="text" name="town" class="form-control @error('town') is-invalid @enderror"
                    id="town" placeholder="City/Town" value="{{ old('town') }}">
                @error('town')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="fname">Father's Name</label>
                <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror"
                    id="fname" placeholder="Father's Name" value="{{ old('fname') }}">
                @error('fname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="mname">Mother's Name</label>
                <input type="text" name="mname" class="form-control @error('mname') is-invalid @enderror"
                    id="mname" placeholder="Mother's Name" value="{{ old('mname') }}">
                @error('mname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            
            

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status') === 1 ? 'selected' : ''}}>Active</option>
                    <option value="0" {{ old('status') === 0 ? 'selected' : ''}}>Inactive</option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection