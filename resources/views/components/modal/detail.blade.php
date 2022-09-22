<div class="modal fade" id="modalMachine" tabindex="-1" role="dialog" aria-labelledby="modalMachineTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalMachineTitle"></h5>
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
                    <h5 class="card-title" id="kode_mesin"></h5>
                    <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <th>Machine ID</th>
                              <td id="id_mesin"></td>
                            </tr>
                            <tr>
                              <th>Type</th>
                              <td id="type"></td>
                            </tr>
                            <tr>
                              <th>Latest Maintenance</th>
                              <td id="latest_maintenance"></td>
                            </tr>
                            <tr>
                              <th>Condition</th>
                              <td id="condition"><label class="badge badge-primary"></label></td>
                            </tr>
                            <tr>
                              <th>Breakdown Possibility</th>
                              <td id="breakdown_possibility">
                                <label class="badge badge-primary"></label>
                              </td>
                            </tr>
                            <tr>
                                <th>Next Maintenance</th>
                                <td id="next_maintenance"></td>
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