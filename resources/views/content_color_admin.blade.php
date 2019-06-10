@include('header')
<div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">ADD Smarthphone</h3>
        </div>
        <div class="panel-body">
            <div class="input-group">
                <input class="form-control" type="text">
                <span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-btn">
    <button class="btn btn-primary" type="button">Go!</button>
</span>
                <input class="form-control" type="text">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" placeholder="Username" type="text">
            </div>
            <br>
            <div class="input-group">
                <input class="form-control" placeholder="Username" type="text">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input class="form-control" type="text">
                <span class="input-group-addon">.00</span>
            </div>
        </div>
    </div>
    @include('footer')