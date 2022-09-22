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
            {data: 'kode_mesin', name:'kode_mesin'},
            {data: 'nama', name:'nama'},
            {data: 'action', name:'action'},
        ],
        order: [[0, 'asc']]
    });
    $('body').on('click','.view',function(){
        var data_id = $(this).data('id');
        console.log(data_id, 'test')
        window.location.href='/mesin/'+data_id
    });
});
