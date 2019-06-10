@include('header')

<div class="panel">
        <a href="{{URL('/Admin/Item/Add')}}"><button type="button" class="btn btn-warning" style="float:right; margin-top:1.5%; position:relative; margin-right:2.5%; z-index:90;"><i class="fa fa-plus"></i>&nbsp&nbspAdd&nbsp</button></a>
        <div class="panel-heading" style="z-index:1;">
            <h3 class="panel-title">Smarthphone</h3>
        </div>
          <div class="panel-body">
              <table class="table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Steve</td>
                          <td>Jobs</td>
                          <td>@steve</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Simon</td>
                          <td>Philips</td>
                          <td>@simon</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Jane</td>
                          <td>Doe</td>
                          <td>@jane</td>
                      </tr>
                  </tbody>
              </table>
          </div>
    </div>
    @include('footer')