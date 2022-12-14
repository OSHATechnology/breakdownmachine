$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // $('#myTableDetail').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     responsive: true,
    //     ajax: {
    //         url: 'detailmesin',
    //         type: 'GET'
    //     },
    //     columns: [
    //         {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    //         {data: 'id_mesin', name:'id_mesin'},
    //         {data: 'nama', name:'nama'},
    //         {data: 'type', name:'type'},
    //         {data: 'latest_maintenance', name:'latest_maintenance'},
    //         {data: 'next_maintenance', name:'next_maintenance'},
    //         {data: 'condition', name:'condition'},
    //         {data: 'breakdown_possibility', name:'breakdown_possibility'},
    //         {data: 'kode_mesin', name:'kode_mesin'},
    //         {data: 'action', name:'action'},
    //     ],
    //     order: [[0, 'asc']]
    // });
    var path = window.location.pathname.split('/');
    
    // console.log( '{{URL::to('search')}}')
    $('#myTableDetail').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: "/mesin/"+path[2],
            type: 'GET'
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_mesin', name:'id_mesin'},
            {data: 'nama', name:'nama'},
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
// });
    $('body').on('click', '.view', function () {
        var data_id = $(this).data('id');
        $.get('detailmesin/' + data_id, function (data) {
            $('#modalMachineTitle').html("Component Machine");
            // $('#tombol-simpan').val("edit");
            $('#modalMachine').modal('show');
            $('.btn-close').click(function(){
                $('#modalMachine').modal('hide');
            })

            $('#id_mesin').html(data[0].id_mesin);
            $('#nama').html(data[0].nama);
            $('#type').html(data[0].type);
            $('#latest_maintenance').html(data[0].latest_maintenance);
            $('#next_maintenance').html(data[0].next_maintenance);
            $('#condition').html(data[0].condition);
            $('#breakdown_possibility').html(data[0].breakdown_possibility);
            $('#kode_mesin').html(data[0].kode_mesin);
        })
    });
});
