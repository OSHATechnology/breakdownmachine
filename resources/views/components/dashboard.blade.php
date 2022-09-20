@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome </h3>
          <h6 class="font-weight-normal mb-0">Breakdown Machine </h6>
        </div>
        {{-- <div class="col-12 col-xl-4">
          <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
              <a class="dropdown-item" href="#">January - March</a>
              <a class="dropdown-item" href="#">March - June</a>
              <a class="dropdown-item" href="#">June - August</a>
              <a class="dropdown-item" href="#">August - November</a>
            </div>
          </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12 grid-margin transparent">
      <div class="row">
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total Machine</p>
              <p class="fs-30 mb-2">{{$mesin->count();}}</p>
              <p>Click Here</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total Machine Components</p>
              <p class="fs-30 mb-2">{{$jmesin->count();}}</p>
              <p>Click Here</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Machine Details</p>
              <p class="fs-30 mb-2">{{$dmesin->count();}}</p>
              <p>Click Here</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Lowest Breakdown Possibility</p>
              <p class="fs-30 mb-2">{{$dmesin->min('breakdown_possibility');}}%</p>
              <p>Click Here</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Nearest Maintenance</p>
              <p class="fs-30 mb-2">{{$format_Date;}}</p>
              <p>Click Here</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
     <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
               <div class="card position-relative">
                    <div class="card-body">
                         <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                              <div class="row">
                                   <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                        <div class="ml-xl-4 mt-3">
                                             <p class="card-title">Detailed Data</p>
                                             <h1 class="text-primary">{{$data_maintenance->count()}}</h1>
                                             <h3 class="font-weight-500 mb-xl-4 text-primary">Maintenance Date</h3>
                                             <p class="mb-2 mb-xl-0"></p>
                                        </div>  
                                   </div>
                                   <div class="col-md-12 col-xl-9">
                                        <div class="row">
                                             <div class="col-md-6 border-right">
                                                  <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                       <table class="table table-borderless report-table">
                                                            @for($i = 0; $i < $data_maintenance->count(); $i++)
                                                                 @if($i < 7)
                                                                      <?php 
                                                                           $date = new Date();
                                                                           $newDate = date("Y-m-d");
                                                                           $newDate = date_create($newDate);
                                                                           $tmpDateMaintenance = date_create($data_maintenance[$i]->next_maintenance);
                                                                           $dateMaintenance = date_format($tmpDateMaintenance, 'd M Y');
                                                                           $date_diff = date_diff($newDate, $tmpDateMaintenance);
                                                                           $progress = 100 - $date_diff->days;
                                                                      ?>
                                                                      <tr>
                                                                           <td class="text-muted">{{$dateMaintenance}} ({{$data_maintenance[$i]->total}} Unit)</td>
                                                                           <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                     @if($newDate > $tmpDateMaintenance)
                                                                                          <?php 

                                                                                          ?>
                                                                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                     @else
                                                                                          <div class="progress-bar bg-primary" role="progressbar" style="width: {{$progress}}%" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                     @endif
                                                                                </div>
                                                                           </td>
                                                                           <td class="text-muted">
                                                                                @if($newDate > $tmpDateMaintenance)
                                                                                     <p class="mb-2 mb-xl-0">Late {{$date_diff->days}} days</p>
                                                                                @else
                                                                                     <p class="mb-2 mb-xl-0">{{$date_diff->days}} days left</p>
                                                                                @endif
                                                                           </td>
                                                                      </tr>
                                                                 @endif
                                                            @endfor
                                                       </table>
                                                  </div>
                                             </div>
                                             <div class="col-md-6 mt-3">
                                                  <canvas id="north-america-chart"></canvas>
                                                  <div id="north-america-legend"></div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
  
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">        
        <div class="input-group">
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row no-result">
  <div class="col-md-12 grid-margin">
							<div class="card d-flex align-items-center">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										
										<div class="ms-3">
											<h6 class="card-title">No Result Here</h6>
											<p class="mt-2 text-muted card-text"></p>
										</div>
									</div>
								</div>
							</div>
						</div>
  </div>
  <div class="row component-detail" style="display:none">
    <div class="col-md-12 grid-margin stretch-card" >
      <div class="card">
        <div class="card-body">
          <p class="card-title">Data Component Detail</p>
          <div class="card-body">
									<h4 class="card-title"></h4>
									<ul class="bullet-line-list ul-detail">
										
									</ul>
								</div>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
         <div class="d-flex justify-content-between">
          <p class="card-title">Sales Report</p>
          <a href="#" class="text-info">View all</a>
         </div>
          <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
          <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
          <canvas id="sales-chart"></canvas>
        </div>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card" style="display:none">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Maintenance Monitoring</h4>
          <div class="row m-2">
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
            </div>
          </div>
          <div class="row m-2">
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-10 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-orange">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">Cylinder Block A, B</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row m-2">
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-danger">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-danger">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('components.modal')

  @section('javascript')
        <script type="text/javascript" src="{{asset('external_js/dashboard.js')}}"></script>
    @endsection
</div>
@endsection