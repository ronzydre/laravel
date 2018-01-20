@extends ('layout.x_master') @section('content')

                <div class="col-md-8 column">
                    <div class="contact-page">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="comment-form">
                                    <h4 class="simple-heading">Register</h4>

                                    <form method="post" action="/register" name="" id="">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="field">
                                                    <label>Name *</label><input id="name" name="name" type="text" placeholder="Name*"
                                                    />
                                                </div>
                                                <!-- Field -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field">
                                                    <label>Email *</label><input id="email" name="email" type="email" placeholder="Email*"
                                                    />
                                                </div>
                                                <!-- Field -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field">
                                                    <label>Password *</label><input id="password" name="password" type="password" placeholder="*******"
                                                    />
                                                </div>
                                                <!-- Field -->
                                            </div>
                                             <div class="col-md-12">
                                                <div class="field">
                                                    <label>Password Confirmation *</label><input id="password_confirmation" name="password_confirmation" type="password" placeholder="*******"
                                                    />
                                                </div>
                                                <!-- Field -->
                                            </div>

                                            <!-- Field -->
                                        </div>

                                        <div class="col-md-12"><button id="submit" class="submit" type="submit">Register</button><img src="images/ajax-loader.gif"
                                                class="loader" /></div>
                                </div>
                                </form>
                            </div>
                            <div class="container form-group">
                            <div class="col-md-8">
                            @include('layout.error')
                            </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="map">
                                <div id="map-canvas"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection