@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome </h3>
          <h6 class="font-weight-normal mb-0">Cylinder Block A,B </h6>
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
    <div class="col-md-12 grid-margin stretch-card">
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
  {{-- <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Cylinder Head Metal</h4>
          <div class="row m-2">
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body">
                    <p class="fs-30 ta-c">8C</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">7C</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">6C</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">5C</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row m-2">
            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">11C</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">10C</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">9C</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row m-2">
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">4D</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">3D</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">2D</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">1D</p>
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
        <div class="card-body">
          <h4 class="card-title">Cylinder Block Metal</h4>
          <div class="row m-2">
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">2B</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">10B</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">13B</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">1B</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row m-2">
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">6A</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">5A</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">4A</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">3A</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row m-2">
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">7A</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">9A</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">12A</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-green">
                <div class="card-body">
                  <p class="fs-30 ta-c">11A</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  @include('components.modal')
</div>
@endsection