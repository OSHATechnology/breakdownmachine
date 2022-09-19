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
            url: 'mesin',
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama_mesin', name:'nama_mesin'},
            {data: 'kode_mesin', name:'kode_mesin'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
});
