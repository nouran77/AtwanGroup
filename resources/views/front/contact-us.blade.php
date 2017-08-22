@extends('layouts.app')
@section('content')
    <!-- Start Body Content -->
    <div class="main" role="main">
        <div id="content" class="content full">
            <div class="container">
                <div class="listing-header margin-40">
                    <h2>{{ trans('contact.contact') }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <i class="fa fa-home"></i></span> <b>Atwan Group</b><br>
                        {{ trans('contact.address1') }}<br><br>
                        <i class="fa fa-phone"></i> <b>{{ trans('contact.phone1') }}</b><br><br>
                        <i class="fa fa-envelope"></i> <a href="www.atwangroup.com">{{ trans('contact.website1') }}</a><br><br>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="mail/contact.php">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="text" id="fname" name="First Name"  class="form-control input-lg" placeholder="First name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="lname" name="Last Name"  class="form-control input-lg" placeholder="Last name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->
    @endsection