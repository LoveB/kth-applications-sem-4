
@extends('layouts.app')

@section('content')
        <!-- Header -->
        <header>
                <img id="front-image" src="https://images.pexels.com/photos/459469/pexels-photo-459469.jpeg" alt="Vegetables, olives and pasta on wooden table">
                <div id="front-text-area" class="text-box">
                  <h1 class="animated jello">Tasty Recipes</h1>
                    <p>Explore our collection of tasty recepies for all occations! Also have a look at our calendar to see what the recipe of the day is. </p>
                    <div class="button_cont"><a class="button" href="calendar.html" target="_blank" rel="nofollow noopener">See calendar</a></div>
                </div>
              </header>
      
      
              <!-- Page Content -->
      
              <!-- Left side-->
              <div class="section group front-content">
                  <div id="fc-left" class="col span_2_of_3">
                      <div class="section group">
                          <div class="col span_1_of_4">
                              <div class="flaticon-carrot"></div>
                          </div>
                          <div class="col span_3_of_4">
                              <div class="text-box">
                                  <H2>All vegetarian</H2>
                                  <p>All our recipes are purely made out of vegetarian ingredients. </p>
                              </div>
                          </div>
                      </div>
      
                      <div class="section group">
                          <div class="col span_1_of_4">
                              <div class="flaticon-money"></div>
                          </div>
                          <div class="col span_3_of_4">
                              <div class="text-box">
                                  <H2>Cheap ingredients</H2>
                                  <p>Food is for everyone, and therefor we try to choose ingredients for our recipes that are affordable.</p>
                              </div>
                          </div>
                      </div>
      
                      <div class="section group">
                          <div class="col span_1_of_4">
                              <div class="flaticon-breakfast"></div>
                          </div>
                          <div class="col span_3_of_4">
                              <div class="text-box">
                                  <H2>Rich in taste</H2>
                                  <p>Taste is our number one priority and we always aim to find new and exciting flavours.
                                      Please comment on our recipes and let us know if we are on the right track!</p>
                              </div>
                          </div>
                      </div>
                  </div>
      
                  <!-- Right side-->
                  <div id="fc-right" class="col span_1_of_3">
                      <div class="text-box contact-box">
                          <H2>Contact us</H2>
                          <p>Tasty Recepies</p>
                          <p>39 Kendell Street</p>
                          <p>SHEFFIELD</p>
                          <p>S1 4AL</p>
                          <div class="phone">
                              <h4>Phone:</h4>
                              <p>202-555-0149</p>
                          </div>
                      </div>
                  </div>
              </div>
@endsection
