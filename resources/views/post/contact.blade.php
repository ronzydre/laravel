@extends('layout.master')
 @section('title', 'Contact Us| Bloombaz')

 @section('description', 'Contact Us Page | Bloombaz')
@section('content')
                        <div class="col-md-8 ">
                            <div class="contact-page">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="comment-form">
                                            <h4 class="simple-heading">LEAVE A COMMENT</h4>
                                            <div id="message"></div>
                                            <form method="post" action="" name="contactform" id="contactform">
                                            {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Name *</label><input id="name" name="name" type="text" placeholder="Enter Your Name *" />
                                                        </div><!-- Field -->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Email *</label><input id="email" name="email" type="email" placeholder="Enter Your Email *" />
                                                        </div><!-- Field -->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Comment *</label><textarea id="comments" name="comments" placeholder="Enter Your Message"></textarea>
                                                        </div><!-- Field -->
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
                                                    </div>
                                                    <div class="col-md-12"><button id="submit" class="submit" type="submit">Send</button><img src="images/ajax-loader.gif" class="loader" /></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>					
                        </div>
                  



@endsection