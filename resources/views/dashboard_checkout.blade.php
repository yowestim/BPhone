@include('header_dashboard')
<section id="checkout">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="checkout-area">
            <form action="">
                <div class="row">
                <div class="col-md-8">
                    <div class="checkout-left">
                    <div class="panel-group" id="accordion">
                        <!-- Shipping Address -->
                        <div class="panel panel-default aa-checkout-billaddress">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Shippping Address
                            </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="First Name*">
                                </div>                             
                                </div>
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="Last Name*">
                                </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="Company name">
                                </div>                             
                                </div>                            
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="email" placeholder="Email Address*">
                                </div>                             
                                </div>
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="tel" placeholder="Phone*">
                                </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                    <textarea cols="8" rows="3">Address*</textarea>
                                </div>                             
                                </div>                            
                            </div>   
                            <div class="row">
                                <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                    <select>
                                    <option value="0">Select Your Country</option>
                                    <option value="1">Australia</option>
                                    <option value="2">Afganistan</option>
                                    <option value="3">Bangladesh</option>
                                    <option value="4">Belgium</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">Canada</option>
                                    <option value="7">China</option>
                                    <option value="8">Denmark</option>
                                    <option value="9">Egypt</option>
                                    <option value="10">India</option>
                                    <option value="11">Iran</option>
                                    <option value="12">Israel</option>
                                    <option value="13">Mexico</option>
                                    <option value="14">UAE</option>
                                    <option value="15">UK</option>
                                    <option value="16">USA</option>
                                    </select>
                                </div>                             
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="Appartment, Suite etc.">
                                </div>                             
                                </div>
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="City / Town*">
                                </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="District*">
                                </div>                             
                                </div>
                                <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                    <input type="text" placeholder="Postcode / ZIP*">
                                </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                    <textarea cols="8" rows="3">Special Notes</textarea>
                                </div>                             
                                </div>                            
                            </div>              
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkout-right">
                    <h4>Order Summary</h4>
                    <div class="aa-order-summary-area">
                        <table class="table table-responsive">
                        <thead>
                            <tr>
                            <th>Product</th>
                            <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>T-Shirt <strong> x  1</strong></td>
                            <td>$150</td>
                            </tr>
                            <tr>
                            <td>Polo T-Shirt <strong> x  1</strong></td>
                            <td>$250</td>
                            </tr>
                            <tr>
                            <td>Shoes <strong> x  1</strong></td>
                            <td>$350</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Subtotal</th>
                            <td>$750</td>
                            </tr>
                            <tr>
                            <th>Tax</th>
                            <td>$35</td>
                            </tr>
                            <tr>
                            <th>Total</th>
                            <td>$785</td>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                    <h4>Payment Method</h4>
                    <div class="aa-payment-method">                    
                        <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                        <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                        <input type="submit" value="Place Order" class="aa-browse-btn">                
                    </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</section>
@include('footer_dashboard')