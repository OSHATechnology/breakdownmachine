
{{-- <button type="button" class="btn btn-inverse-warning btn-rounded btn-icon" data-toggle="modal" data-target="#modalMachine">8C</button> --}}

<div class="modal fade" id="modalMachine" tabindex="-1" role="dialog" aria-labelledby="modalMachineTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalMachineTitle">Machine Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="card text-center">
                <div class="card-header">
                  <img src="{{asset('assets')}}/images/cylinder.png" style="height: auto; width: 60%;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">LEB87162 Machine</h5>
                    <div class="table-responsive">
                        <table class="table">
                          {{-- <thead>
                            <tr>
                              <th>Machine ID</th>
                              <th></th>
                            </tr>
                          </thead> --}}
                          <tbody>
                            <tr>
                              <th>Machine ID</th>
                              <td>61726LQYSK819JSH</td>
                            </tr>
                            <tr>
                              <th>Type</th>
                              <td>XJKH</td>
                            </tr>
                            <tr>
                              <th>Latest Maintenance</th>
                              <td>17 Januari 2022</td>
                            </tr>
                            <tr>
                              <th>Condition</th>
                              <td> <label class="badge badge-primary">Good</label></td>
                            </tr>
                            <tr>
                              <th>Breakdown Possibility</th>
                              <td>
                                <label class="badge badge-primary">87%</label>
                                </td>
                            </tr>
                            <tr>
                                <th>Next Maintenance</th>
                                <td>16 Januari 2023</td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                  {{-- 
                  <p class="card-text">Machine ID</p>
                  <p class="card-text">Type</p>
                  <p class="card-text">Latest Maintenance</p>
                  <p class="card-text">Condition</p>
                  <p class="card-text">Breakdown Possibility</p>
                  <p class="card-text">Next Maintenance</p> --}}
                </div>
            </div>
        </div>
        </div>
    </div>
</div>