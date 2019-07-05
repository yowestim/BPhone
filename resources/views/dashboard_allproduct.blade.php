@include('header_dashboard')

<div class="tab-content">
    <!-- Start men product category -->
    <div class="tab-pane fade in active" id="men">
        <ul class="aa-product-catg">
<li class="active"><a href="#men" data-toggle="tab">Newest Product</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->                            
                                                @foreach ($dataItem as $item)
                                                    <li  style="width:auto;height:auto" >
                                                        <figure>
                                                            <a class="aa-product-img" href="#"><img src="/Item/{{$item->item_image}}" style="width:250px;height:300px" alt="polo shirt img"></a>
                                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        </figure>
                                                        <h4 class="aa-product-title"><a href="#">{{$item->item_name}}</a></h4>
                                                                <span class="aa-product-price">Rp.{{$item->item_price}}</span>
                                                        <div class="aa-product-hvr-content">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                        </div>
                                                        <!-- product badge -->
                                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                                    </li>
                                                @endforeach                                            
                                            <!-- start single product item -->
                                            
                                        </ul>
                                        <br>
                                        <a class="aa-browse-btn" style="margin-top:50px;" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / men product category -->
                                </div>
@include('footer_dashboard')