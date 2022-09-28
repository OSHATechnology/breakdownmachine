@extends('layouts.index')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Block Cylinder and Head Cylinder</h4>
          <div class="row m-2">
            
            @foreach ($dmesin as $item)
              @if ($item->id_mesin==1)
                  
              <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card {{($item->breakdown_possibility >70) ? 'card-light-green' : 'card-light-danger'}}">
                  <a href="" data-toggle="modal" data-target="#modalMachine{{$item->id}}">  
                    <div class="card-body p-2">
                      <p class="fs-20 ta-c">{{$item->nama}}</p>
                    </div>
                  </a>
                </div>
              </div>

              @include('components.modal.detail')
              
              @endif
            @endforeach
            
          </div>
          <div class="row m-2">
            <div class="col-md-9 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-orange">
                <a href="" data-toggle="modal" data-target="#modalMachine">  
                  <div class="card-body p-2">
                    <p class="fs-20 ta-c">Cylinder Head Metal, Cylinder Block Metal</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row m-2">
            
            @foreach ($dmesin as $item)
              @if ($item->id_mesin==3)
                  
              <div class="col-md-1 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card {{($item->breakdown_possibility >70) ? 'card-light-green' : 'card-light-danger'}}">
                  <a href="" data-toggle="modal" data-target="#modalMachine{{$item->id}}">  
                    <div class="card-body p-2">
                      <p class="fs-20 ta-c">{{$item->nama}}</p>
                    </div>
                  </a>
                </div>
              </div>
              
              @include('components.modal.detail')
              
              @endif
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- @section('javascript')
    <script type="text/javascript" src="{{asset('external_js/dashboard.js')}}"></script>
  @endsection --}}
</div>
@endsection