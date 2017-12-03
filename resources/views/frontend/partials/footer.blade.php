<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer__wrapper">
                    <div class="footer__title">
                        <h3 class="footer__titleText">about us</h3>
                    </div>
                    <div class="footer__body">
                        <p class="footer__bodyText">
                            {{substr($about->description,0,552)}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__wrapper">
                    <div class="footer__title">
                        <h3 class="footer__titleText">Newsletter</h3>
                    </div>
                    <div class="footer__body">
                        <p class="footer__bodyText">
                            Subscribe to our newsletter for news, updates, exclusive discounts and offers.
                        </p>
                        <form class="signup" action="index.html" method="post">
                            <div class="form-group">
                                <input type="submit" class="btn-def btn-def-gre"  value="Subscribe">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer__title">
                    <h3 class="footer__titleText">Contact Details</h3>
                </div>
                <div class="footer__listBody">
                    <div class="col-md-12">
                        <ul class="footer__listSection location-icon">
                            <li class="footer__listRow">{{$contact->address}}</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="footer__listSection phone-icon">
                            <li class="footer__listRow">{{$contact->phone}}</li>
                            <li class="footer__listRow">Mon - Fri, 9.00am until 6.30pm</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="footer__listSection mail-icon">
                            <li class="footer__listRow">{{$contact->email}}</li>
                            <li class="footer__listRow">We reply within 24 hrs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
