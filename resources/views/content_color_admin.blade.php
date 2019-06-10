@include('header')
<div class="panel">
        <button type="button" class="btn btn-warning" style="float:right; margin-top:1.5%; position:relative; margin-right:2.5%; z-index:90;"><i class="fa fa-trash"></i>&nbsp&nbspAdd&nbsp</button>
        <div class="panel-heading">
            <h3 class="panel-title">ADD Color</h3>
        </div>
        <div class="panel-body">
                <input class="form-control" type="text" placeholder="Color">
                <br>
                <button type="button" class="btn btn-success"><i class="fa fa-save"></i>&nbsp&nbspSave&nbsp</button>
        </div>
    </div>
    @include('footer')