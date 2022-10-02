@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Available Room
    </div>

    <div class="card-body">
        <table class="table table-hover ajaxTable datatable datatable-Service">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Room</th>
                    <th>Room Name</th>
                    <th> Price Per Day</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script>
    $(function () {
        let dtOverrideGlobals = {
            buttons: dtButtons,
            processing: true,
            serverSide: true,
            retrieve: true,
            aaSorting: [],
            ajax: "{{ route('admin.rooms.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'room_photo', name: 'room_photo'},
                { data: 'room_name', name: 'room_name' },
                { data: 'price', name: 'price' },
                { data: 'capacity', name: 'capacity' },
                { data: 'actions', name: '{{ trans('global.actions') }}' }
            ],
            order: [[ 1, 'desc' ]],
            pageLength: 100,
        };

        $('.datatable-Service').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        });
</script>
@endsection