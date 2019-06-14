@include('header')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">ADD Smarthphone</h3>
    </div>
    <div class="panel-body">
        <form  method="POST" action="ColorAdd" >
            {{ csrf_field() }}
            <input class="form-control" style="margin-bottom:5px" name="color" type="text" placeholder="Color">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
        </form>
            <table class="table"  style="margin-top:50px">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Color Name</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataColor as $color)     
                        <tr>
                            <td>{{$color->id_color}}</td>
                            <td>{{$color->color_name}}</td>
                            <td><button class="btn btn-danger col-sm-1"><i style="padding-right:-10px" class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@include('footer')