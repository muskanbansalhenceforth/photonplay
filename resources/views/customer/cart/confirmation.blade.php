@include('customer.layouts.header')
    <!-- header-end -->
    <!-- Tabber-start -->
    <section class="stepper-form-tabber pt-3 pb-0 bg-white">
        <div>
            <ul class="d-flex justify-content-center justify-content-md-between tabber-list-container flex-wrap">
                <li>01 SHOPPING BAG <span class="d-block">Manage Your Items List</span></li>
                <li>02 SHIPPING AND CHECKOUT <span class="d-block">Checkout your items list</span></li>
                <li @if(Request::is('confirmation')) class="active" @endif>03 CONFIRMATION<span class="d-block">Review and submit Your order</span></li>
            </ul>
        </div>
    </section>
    <section class="step-form  py-0">
        <div class="container">
            <div class="row justify-content-center mt-5 pt-5">
                <div class="col-lg-9 border-bottom border-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="py-4 border-top border-bottom">
                                <p class="text-center mb-0">Thank you. Your order has been received.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product-delievery  border-bottom border-0">
                                <ul
                                    class="product-delievery__ d-flex flex-wrap justify-content-center align-items-center p-0 m-0">
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">order no</span>
                                        <span class="text-uppercase">PP 2303001</span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">date</span>
                                        <span class="text-uppercase"> March 13, 2023</span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">total</span>
                                        <span class="text-uppercase">$ 6500.00</span>
                                    </li>
                                    <li class="d-flex flex-column align-items-center px-5">
                                        <span class="text-uppercase">payment method</span>
                                        <span class="text-uppercase">check payment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="payment-details bg-white p-3 pb-4 h-100">
                                <h3 class="text-uppercase">our order</h3>
                                <ul class="order-details p-0 mb-5">
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text">Dummy Product Name x 2 </span>
                                        <span class="text-amount">$1855.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize">Dummy Product Name</span>
                                        <span class="text-amount">$555.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize">Cart Subtotal</span>
                                        <span class="text-amount">$2410.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize"> Shipping and Handing</span>
                                        <span class="text-amount">$15.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-3">
                                        <span class="text text-capitalize">Vat</span>
                                        <span class="text-amount">$00.00</span>
                                    </li>

                                    <li class="d-flex justify-content-between py-3 active">
                                        <span class="text text-capitalize fw-bold">Order total</span>
                                        <span class="text-amount">$6500.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-coupon bg-white p-3 pt-4 pb-0 h-100">
                                <h3 class="text-uppercase">billing details</h3>
                                <ul class="order-details p-0 mb-5">
                                    <li class="d-flex justify-content-between border-0 ">
                                        <span class="text-amount text-uppercase">Address : </span>
                                        <span class="text">Customer Address</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">email : </span>
                                        <span class="text">info@companyname.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">phone : </span>
                                        <span class="text">(+000) 00000 00000</span>
                                    </li>
                                </ul>
                                <ul class="order-details p-0 mb-5">
                                    <h3 class="text-uppercase">billing details</h3>
                                    <li class="d-flex justify-content-between border-0 ">
                                        <span class="text-amount text-uppercase">Name : </span>
                                        <span class="text">Customer Address</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">Email : </span>
                                        <span class="text">info@companyname.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-0">
                                        <span class="text-amount text-uppercase">phone : </span>
                                        <span class="text">(+000) 00000 00000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('customer.layouts.footer')
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/slick/slick.min.js"></script>
    <script>
        $('.tabber-list-container li').click(function () {
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        })
    </script>