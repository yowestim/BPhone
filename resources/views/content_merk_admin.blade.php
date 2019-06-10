@include('header')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">ADD Merk</h3>
    </div>
    <div class="panel-body">
            <input class="form-control" type="text" placeholder="Merk">
            <br>
            <button type="button" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
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