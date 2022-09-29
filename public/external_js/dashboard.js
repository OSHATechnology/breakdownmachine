$(document).ready(function() {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
     var dataRandom = [];
     $.ajax({
          url:'/getDataMesin',
          type:'GET',
          dataType:'JSON',
          async: false,
          success: function(result) {
               var problem = 0;

               for(let o =0; o<result.length; o++) {
                    if(result[o].breakdown_possibility < 70) problem = problem + 1;
               }

               $('.problem').html(problem)
          },
          error: function(err) {
               console.log(err)
          }
     })

     $.ajax({
          url:'/finish',
          type:'GET',
          dataType:'JSON',
          async: false,
          success: function(result) {
               

               $('.finish').html(result)
          },
          error: function(err) {
               console.log(err)
          }
     })
     $('#start-simulation').on('click', function() {
          $.ajax({
               url:'/getDataMesin',
               type:'GET',
               dataType:'JSON',
               async: false,
               success: function(result) {
                    dataRandom = result;
               },
               error: function(err) {
                    console.log(err)
               }
          })
          const lengthData = dataRandom.length
          const randoom1 = Math.floor(Math.random() * lengthData) + 1
          const randoom2 = Math.floor(Math.random() * lengthData) + 1
          const randoom3 = Math.floor(Math.random() * lengthData) + 1

          const randomPossibility = Math.floor(Math.random() * 50) + 20
          const randomPossibility2 = Math.floor(Math.random() * 50) + 20
          const randomPossibility3 = Math.floor(Math.random() * 50) + 20
          
          const dataUpdatePossibility = {
               data1: {
                    id: randoom1,
                    possibility: randomPossibility
               },
               data2: {
                    id: randoom2,
                    possibility: randomPossibility2
               },
               data3: {
                    id: randoom3,
                    possibility: randomPossibility3
               },
          }
          $.ajax({
               url:'/updatePossibility',
               data: dataUpdatePossibility,
               type:'POST',
               dataType: 'JSON',
               success: function(results) {
                    location.reload()
               },
               error: function(err) {
                    console.log(err)
               }
          })
     })

     $('.repair-now').on('click', function() {
          var data_id = $(this).data('id')
          console.log(data_id)
          $.ajax({
               url: '/repair-update',
               data: {id:data_id, breakdown_possibility: 90},
               type: 'POST',
               dataType: 'JSON',
               success: function(result){
                    $('.finish').html(result)
                    console.log(result)
                    location.reload()
               }, 
               error: function(err) {
                    console.log(err)
               }
          })
     })
    var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    $('#search').on('click', function() {
        let search = $('#navbar-search-input').val();

        $.ajax({
            url: `/search/${search}`,
            type: 'GET',
            dataType: 'JSON',
            success: function(result) {
                $('.no-result').hide()
                $('.component-detail').show()

                var condition = result.condition.toUpperCase();
                var possibility = result.breakdown_possibility;
                var vCondition = ''
                var vPossibility = ''

                if(condition === 'GOOD') 
                    vCondition = `<label class="badge badge-success">${condition}</label>`;
                else if(condition === 'VERY GOOD')
                    vCondition = `<label class="badge badge-primary">${condition}</label>`;
                else
                    vCondition = `<label class="badge badge-danger">${condition}</label>`;


                if(possibility >= 80 && possibility < 100) 
                    vPossibility = `<label class="badge badge-success">${possibility}%</label>`;
                else if(possibility >= 60 && possibility < 80) 
                    vPossibility = `<label class="badge badge-warning">${possibility}%</label>`;
                else if(possibility < 60) 
                    vPossibility = `<label class="badge badge-danger">${possibility}%</label>`;

                var latest_maintenance_date = new Date(result.latest_maintenance);
                var next_maintenance_date = new Date(result.next_maintenance);
                var li = '<li>'+
                            '<h4>Machine Code</h4>'+
                            '<p>'+result.kode_mesin+'</p>'+
                            '<p class="text-muted mb-4">'+
                            '</p>' +
                        '</li>'+
                        '<li>'+
                            '<h4>Type</h4>'+
                            '<p>'+result.type.toUpperCase()+'</p>'+
                            '<p class="text-muted mb-4">'+
                            '</p>' +
                        '</li>'+
                        '<li>'+
                            '<h4>Latest Maintenance</h4>'+
                            '<p>'+latest_maintenance_date.getDate() +' ' + month[latest_maintenance_date.getMonth()] + ' ' + latest_maintenance_date.getFullYear()+'</p>'+
                            '<p class="text-muted mb-4">'+
                            '</p>' +
                        '</li>'+
                        '<li>'+
                            '<h4>Condition</h4>'+
                            '<p>'+vCondition+'</p>'+
                            '<p class="text-muted mb-4">'+
                            '</p>' +
                        '</li>'+
                        '<li>'+
                            '<h4>Breakdown Possibility</h4>'+
                            '<p>'+vPossibility+'</p>'+
                            '<p class="text-muted mb-4">'+
                            '</p>' +
                        '</li>'+
                        '<li>'+
                            '<h4>Next Maintenance</h4>'+
                            '<p> <label class="badge badge-primary">'+next_maintenance_date.getDate() +' ' + month[next_maintenance_date.getMonth()] + ' ' + next_maintenance_date.getFullYear()+'</label></p>'+
                            '<p class="text-muted mb-4">'+
                            '</p>' +
                        '</li>';

            
                $('.ul-detail').html(li);
                console.log(result);
            },
            error: function(err) {
                console.log(err)
            }
        })
        // console.log(search);
    })

    $.ajax({
          url: `/chartDonutPossibility`,
          type: 'GET',
          dataType: 'JSON',
          success: function(result) {

               var areaData = {
                    labels: [result[0].breakdown_possibility+'%', result[1].breakdown_possibility+'%', result[2].breakdown_possibility+'%'],
                    datasets: [{
                         data: [result[0].total, result[1].total, result[2].total],
                         backgroundColor: [
                         "#4B49AC","#FFC100", "#248AFD",
                         ],
                         borderColor: "rgba(0,0,0,0)"
                    }
                    ]
               };
               var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    segmentShowStroke: false,
                    cutoutPercentage: 78,
                    elements: {
                    arc: {
                         borderWidth: 4
                    }
                    },      
                    legend: {
                    display: false
                    },
                    tooltips: {
                    enabled: true
                    },
                    legendCallback: function(chart) { 
                    var text = [];
                    text.push('<div class="report-chart">');
                         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Breakdown Possibility '+chart.data.labels[0] +'</p></div>');
                         text.push('<p class="mb-0">'+chart.data.datasets[0].data[0]+' Unit</p>');
                         text.push('</div>');
                         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Breakdown Possibility '+chart.data.labels[1] +'</p></div>');
                         text.push('<p class="mb-0">'+chart.data.datasets[0].data[1]+' Unit</p>');
                         text.push('</div>');
                         text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Breakdown Possibility '+chart.data.labels[2] +'</p></div>');
                         text.push('<p class="mb-0">'+chart.data.datasets[0].data[2]+' Unit</p>');
                         text.push('</div>');
                    text.push('</div>');
                    return text.join("");
                    },
               }
               var northAmericaChartPlugins = {
                    beforeDraw: function(chart) {
                    var width = chart.chart.width,
                         height = chart.chart.height,
                         ctx = chart.chart.ctx;
               
                    ctx.restore();
                    var fontSize = 3.125;
                    ctx.font = "500 " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    ctx.fillStyle = "#13381B";
               
                    var text = "90",
                         textX = Math.round((width - ctx.measureText(text).width) / 2),
                         textY = height / 2;
               
                    ctx.fillText(text, textX, textY);
                    ctx.save();
                    }
               }
               var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
               var northAmericaChart = new Chart(northAmericaChartCanvas, {
                    type: 'doughnut',
                    data: areaData,
                    options: areaOptions,
                    plugins: northAmericaChartPlugins
               });
               document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
               }
          
    })
    

});