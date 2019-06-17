@include('header')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">ADD Merk</h3>
    </div>
    <div class="panel-body">
    <form action="{{URL('/Admin/MarkAdd')}}" method="POST">
            {{ csrf_field() }}
            <input class="form-control" style="margin-bottom:5px" name="merk" type="text" placeholder="Mark">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
        </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Color Name</th>
                                <th class="col-md-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataMerk as $merk)
                                <tr>
                                    <td>{{$merk->id_merk}}</td>
                                    <td>{{$merk->merk_name}}</td>
                                    <td><button class="btn btn-danger col-sm-1"><i style="padding-right:-10px" class="fa fa-trash"></i></button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
</div>
@include('footer')