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
<<<<<<< HEAD
              <p class="mb-4">Total Components</p>
=======
              <p>Click Here</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total Komponen Mesin</p>
              <p class="fs-30 mb-2">{{$cmesin->count();}}</p>
              <p>10.00% (30 days)</p>
            </div>
          </div>
        </div>
>>>>>>> parent of bd712f6 (fix)
        <div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Machine Details</p>
              <p class="fs-30 mb-2">{{$dmesin->count();}}</p>
<<<<<<< HEAD
              {{-- <p>Click Here</p> --}}
            </div>
          </div>
=======
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
>>>>>>> parent of bd712f6 (fix)
          <div class="card card-light-danger">
              <p class="fs-30 mb-2">{{$format_Date;}}</p>
<<<<<<< HEAD
              {{-- <p>Click Here</p> --}}
=======
              <p>Click Here</p>
>>>>>>> parent of bd712f6 (fix)
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                                                  </div>
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

  {{-- @include('components.modal') --}}

  @section('javascript')
        <script type="text/javascript" src="{{asset('external_js/dashboard.js')}}"></script>
    @endsection
</div>
@endsection