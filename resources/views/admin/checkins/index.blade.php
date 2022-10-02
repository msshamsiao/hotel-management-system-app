@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Check-in
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Employee">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Room Name</th>
                    <th>Date Reserved</th>
                    <th>Days</th>
                    <th>Contact No.</th>
                    <th>Total Amount</th>
                    <th>Action</th>
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
      let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
      
      let dtOverrideGlobals = {
        buttons: dtButtons,
        processing: true,
        serverSide: true,
        retrieve: true,
        aaSorting: [],
        ajax: "{{ route('admin.checkins.index') }}",
        columns: [
          { data: 'id', name: 'id' },
          { data: 'name', name: 'name' },
          { data: 'room_name', name: 'room_name' },
          { data: 'date_reserved', name: 'date_reserved' },
          { data: 'days', name: 'days' },
          { data: 'contact_no', name: 'contact_no' },
          { data: 'total_amount', name: 'total_amount' },
          { data: 'action', name: '{{ trans('global.actions') }}' }
        ],
        order: [[ 1, 'desc' ]],
        pageLength: 100,
      };
      $('.datatable-Employee').DataTable(dtOverrideGlobals);
          $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
          });
      });

</script>
@endsection