@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Add Room
    </div>

    <div class="card-body">
        <form action="{{ route("admin.rooms.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Room: <span class="badge" style="color:red">*</span></label>
                <input type="file" name="file_photo" id="file_photo" class="form-control">
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Room Name: <span class="badge" style="color:red">*</span></label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($service) ? $service->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">Price Per Day: <span class="badge" style="color:red">*</span></label>
                <input type="number" id="price_per_day" name="price_per_day" class="form-control" value="{{ old('price_per_day', isset($service) ? $service->price : '') }}" step="0.01">
                @if($errors->has('price_per_day'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.price_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">Capacity: <span class="badge" style="color:red">*</span></label>
                <input type="number" id="capacity" name="capacity" class="form-control" value="{{ old('capacity', isset($service) ? $service->price : '') }}" step="0.01">
                @if($errors->has('capacity'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.service.fields.price_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Save">
            </div>
        </form>
    </div>
</div>
@endsection