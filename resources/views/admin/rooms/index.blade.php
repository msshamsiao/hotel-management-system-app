@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
       Manage Room
    </div>

    <div class="card-body">
        <table class="table table-hover ajaxTable datatable datatable-Service">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Room
                    </th>
                    <th>
                        Room Name
                    </th>
                    <th>
                       Price Per Day
                    </th>
                    <th>
                        Capacity
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
        </table>


    </div>
</div>
@can('service_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-info" href="{{ route("admin.rooms.create") }}">
               Add Room
            </a>
        </div>
    </div>
@endcan
@endsection
@section('scripts')
@parent
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    
        @can('service_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.services.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
                        return entry.id
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                                .done(function () { location.reload() 
                        })
                    }
                }
            }
            dtButtons.push(deleteButton)
        @endcan

    let dtOverrideGlobals = {
        buttons: dtButtons,
        processing: true,
        serverSide: true,
        retrieve: true,
        aaSorting: [],
        ajax: "{{ route('admin.rooms.index') }}",
        columns: [
            { data: 'placeholder', name: 'placeholder' },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'price', name: 'price' },
            { data: 'name', name: 'name' },
            { data: 'price', name: 'price' },
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