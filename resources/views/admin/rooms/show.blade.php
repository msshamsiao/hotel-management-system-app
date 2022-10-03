@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Available Room
    </div>

    <div class="card-body">
        <table class="table table-hover datatable datatable-rooms">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Room</th>
                    <th>Room Name</th>
                    <th>Price Per Day</th>
                    <th>Capacity</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($availables = App\Service::where('room_status', 'Available')->get() as $available)
                    <td></td>
                    <td><img src="/../public/Image/{{ $available->room_photo }}" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td>{{ $available->name }}</td>
                    <td>{{ $available->price }}</td>
                    <td>{{ $available->capacity }}</td>
                    
                    @if($available->room_status == 'Available')
                        <td><span class="badge badge-success">'{{ $available->room_status }}</span></td>
                    @else
                        <td><span class="badge badge-danger">'{{ $available->room_status }}</span></td>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
