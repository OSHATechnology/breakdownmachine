$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: 'detailmesin',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_nama', name:'id_nama'},
            {data: 'id_jenis', name:'id_jenis'},
            {data: 'type', name:'type'},
            {data: 'latest_maintenance', name:'latest_maintenance'},
            {data: 'next_maintenance', name:'next_maintenance'},
            {data: 'condition', name:'condition'},
            {data: 'breakdown_possibility', name:'breakdown_possibility'},
            {data: 'kode_mesin', name:'kode_mesin'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
