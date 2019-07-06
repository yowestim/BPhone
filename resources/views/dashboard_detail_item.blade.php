@include('header_dashboard')
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="aa-product-view-slider">
        <div class="simpleLens-gallery-container" id="demo-1">
            <div class="simpleLens-container">
                <div class="simpleLens-big-image-container">
                    <a class="simpleLens-lens-image" data-lens-image="/Item/{{$data->item_image}}">
                        <img src="/Item/{{$data->item_image}}" class="simpleLens-big-image">
                    </a>
                </div>
            </div>
            <div class="simpleLens-thumbnails-container">
                <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="/Item/{{$data->item_image}}" data-big-image="/Item/{{$data->item_image}}">
                    <img src="/Item/{{$data->item_image}}">
                </a>
                <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="/Item/{{$data->item_image}}" data-big-image="/Item/{{$data->item_image}}">
                    <img src="/Item/{{$data->item_image}}">
                </a>

                <a href="#" class="simpleLens-thumbnail-wrapper"  data-lens-image="/Item/{{$data->item_image}}" data-big-image="/Item/{{$data->item_image}}">
                    <img src="/Item/{{$data->item_image}}">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Modal view content -->
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="aa-product-view-content">
        <h1 style="margin-top: 5%; font-weight: bold; color: #ff6666">{{$data->item_name}}</h1>
        <hr style="border-width: 5px; ">
        <div class="aa-price-block">
        <span class="aa-product-view-price" style="font-size: 22px;">Rp.{{number_format($data->item_price)}}</span>
            <p class="aa-product-avilability" style="font-size: 15px;">Status: <span>{{$data->item_status}}</span></p>
        </div>
        <br>
    <p >{{$data->item_description}}</p>
    <br>
        <h4>{{$datacolor->color_name}}</h4>
        <h4>{{$datamerk->merk_name}}</h4>
        <br>
        <br>
        
        <div class="aa-prod-quantity">
            <form action="">
            </form>
            <p class="aa-prod-category">
                Category: <a href="#">{{$data->name_item}}</a>
            </p>
        </div>
        <div class="aa-prod-view-bottom">
            <a href="#" class="aa-add-to-cart-btn" style="padding: 20px; color: #ff6666"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
            <a href="#" class="aa-add-to-cart-btn" style="padding: 20px; margin-left: 10px;">Purchase</a>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- /.modal-dialog -->
</div>
<!-- / quick view modal -->
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- / Products section -->
<!-- banner section -->
<!-- Support section -->
<!-- / Support section -->
<!-- Testimonial -->

<!-- / Testimonial -->

<!-- footer -->
<footer id="aa-footer">
@include('footer_dashboard')