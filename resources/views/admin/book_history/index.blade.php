@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Book History
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Client">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Log Time</th>
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
        ajax: "{{ route('admin.book_history.index') }}",
        columns: [
          { data: 'id', name: 'id' },
          { data: 'name', name: 'name' },
          { data: 'check_in', name: 'check_in' },
          { data: 'check_out', name: 'check_out' },
          { data: 'log_time', name: 'log_time' }
        ],
        order: [[ 1, 'desc' ]],
        pageLength: 100,
      };
      $('.datatable-Client').DataTable(dtOverrideGlobals);
          $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
              $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
          });
      });

</script>
@endsection