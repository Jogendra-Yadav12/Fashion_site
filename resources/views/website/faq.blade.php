@extends('layouts.app')

@section('content')

<!-- Faq Section Start -->
<section class="faq-box-contain section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="faq-contain">
                    <h2>Frequently Asked Questions</h2>
                    <p>We are answering most frequent questions. No worries if you not find exact one. You can find
                        out more by searching or continuing clicking button below or directly <a
                            href="{{url('contactus')}}" class="theme-color text-decoration-underline">contact our
                            support.</a></p>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="faq-accordion">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    How do I determine my size for IDA Fashion shirts?
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>IDA Fashion provides a comprehensive sizing guide to help you find your perfect
                                        fit. Simply refer to our size chart available on the product page for accurate
                                        measurements and guidance on selecting the right size.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Can I return or exchange a product if it doesn't fit or if I change my mind? 
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we offer a hassle-free return and exchange policy. Please review our Returns
                                        & Exchanges page for detailed information on the process and any conditions that
                                        may apply.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    What payment methods do you accept? <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We accept a variety of payment methods, including major credit cards, debit
                                        cards, and other secure online payment options. Feel free to check our Payment
                                        Options page for the full list of accepted payment methods.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    How do I track my order? <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Once your order is shipped, you will receive a confirmation email with a tracking
                                        number. You can use this number to track your order in real-time. Alternatively,
                                        you can log in to your IDA Fashion account to view the status of your order.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Are your shirts suitable for both formal and casual occasions? 
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! IDA Fashion prides itself on offering versatile styles suitable for
                                        various occasions. Our collection includes both formal and casual shirts,
                                        ensuring you find the perfect shirt for any event.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    Do you ship internationally? <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we offer international shipping. You can select your country during the
                                        checkout process, and shipping costs and delivery times will be calculated
                                        accordingly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven">
                                    How can I contact IDA Fashion's customer support? 
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our customer support team is ready to assist you. You can reach out to us through
                                        the Contact Us page on our website, where you'll find a contact form.
                                        Alternatively, you can email us at info@idafashion.com.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight">
                                    Are your products ethically produced and environmentally friendly?
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>IDA Fashion is committed to ethical and sustainable practices. We strive to
                                        minimize our environmental impact and prioritize responsible production. For
                                        more information, please visit our Sustainability page.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine">
                                    Can I purchase IDA Fashion shirts in physical stores?
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Currently, IDA Fashion operates exclusively online. You can explore and purchase
                                        our collection directly from our website, where we offer a seamless and secure
                                        shopping experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingtenth">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine">
                                    How can I stay updated on new arrivals and promotions?
                                    <i class="bi bi-arrow-down-short"></i>
                                </button>
                            </h2>
                            <div id="collapsetenth" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>To stay in the loop on the latest arrivals, promotions, and exclusive offers,
                                        subscribe to our newsletter. You can find the subscription option at the bottom
                                        of our website's homepage. Additionally, follow us on social media for real-time
                                        updates and fashion inspiration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section End -->

@endsection