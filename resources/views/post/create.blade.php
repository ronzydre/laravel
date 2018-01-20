@extends('layout.x_master')

@section('content')


                        <div class="col-md-8 column">
                            <div class="contact-page">
                                <div class="row">
                                    <div class="col-md-12">
                                              
                                        <div class="comment-form">
                                      
                                            <h4 class="simple-heading">Create Post</h4>
                                           
                                            <form method="post" action="/post" name="" id="" enctype="multipart/form-data">
                                          {{  csrf_field() }}
                                                <div class="row">
                                                <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Image *</label><input id="image" name="image" type="file" required/>
                                                        </div><!-- Field -->
                                                    </div>
                                                  <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Image *</label><input id="image_to" name="image_to" type="file" required/>
                                                        </div><!-- Field -->
                                                    </div>
                                                <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Entertainment </label>
                                                            <input type="radio" name="tags" value="entertainment" id="entertainment" />
                                                        
                                                            <label>Politics </label>
                                                            <input type="radio" name="tags" value="politics" id="politics" />
                                                        
                                                            <label>health and life style </label>
                                                            <input type="radio" name="tags" value="health" id="health" />
                                                      
                                                            <label>Kitchen </label>
                                                            <input type="radio" name="tags" value="kitchen" id="kitchen" />
                                                        </div><!-- Field -->
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="field">
                                                            <label>Title *</label><input id="title" name="title" type="text" maxlength="50" placeholder="Enter Title*" />
                                                        </div><!-- Field -->
                                                    </div>
                                                   <div class="col-md-12">
										<div class="field">
											<label>Body *</label><textarea placeholder="Enter Your Text" name="body" id="body"></textarea>
										</div>
										<!-- Field -->
									</div>
                                                    
                                                    <div class="col-md-12"><button id="submit" class="submit" type="submit">Post</button><img src="images/ajax-loader.gif" class="loader" /></div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                       @include('layout.error')
                                    </div>
                                       <div class="col-md-12"><a href = "/logout"><button id="logout" href="/logout" class="btn align-right black" type="submit"></i>Logout</button></a></div>
                                     
                                </div>
                            </div>					
                        </div>
                  



@endsection