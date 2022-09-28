<div class="modal fade" id="modalMachine{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modalMachineLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Componen Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-center align-items-center">
            <img src="{{asset('assets')}}/images/cylinder.png" style="height: auto; width: 60%;">
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Machine ID
            <span class="">{{$item->id_mesin}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Type
            <span class="">{{$item->type}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Latest Maintenance
            <span class="">{{$item->latest_maintenance}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Condition
            <span class="">{{$item->condition}}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Breakdown Possibility
            <span class="{{($item->breakdown_possibility>70) ? 'badge badge-success' : 'badge badge-danger'}}badge badge-success badge-pill">{{$item->breakdown_possibility}}%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">Next Maintenance
            <span class="">{{$item->next_maintenance}}</span>
          </li>
        </ul>
      </div>
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-warning">Repair now!</a>
      </div>
    </div>
  </div>
</div>