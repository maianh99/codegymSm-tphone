<form id="main" method="post" action="{{ route('students.store') }}" enctype="multipart/form-data"> @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="messages alert-danger">{{ $errors->first('name')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="fullname" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="messages alert-danger">{{ $errors->first('fullname')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="messages alert-danger">{{ $errors->first('fullname')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="messages alert-danger">{{ $errors->first('email')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    @if($errors->has('password'))
                        <span class="messages alert-danger">{{ $errors->first('password')}}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group row">
                <label class="col-sm-12 col-form-label">Status</label>
                <div class="col-sm-12">
                    <select name="status" class="form-control" >
                        <option value="1" selected>Active</option>
                        <option value="0">Disable</option>
                    </select>
                    <span class="messages"></span>
                </div>
            </div><div class="form-group row">
                <label class="col-sm-12 col-form-label">Image</label>
                <div class="col-sm-12">
                    <input type="file" class="form-control">
                    <span class="messages"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary m-b-0">{{__('Submit')}}</button>
        </div>
    </div>
</form>