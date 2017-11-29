@extends('layout')
@section('title', 'Open Floor')
@section('content')

  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Buy favorable open floors </h2>
              <ol class="breadcrumb text-left text-black mt-10">
                
                <li class="active text-gray-silver">Chose your conformable open floor.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


<section>

<div class="container">
        <div class="row">


		                <!-- Tab panes -->
						<h3 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Available Open Floors</h3>
						<div  style="font-size:16px"><p>Here you can choose your advantageous open floors in reasonable price from the list below.
						You can give your desire price range and location to find a proper open floor.</p></div>
						

	<form method=post>					
<div class="row">
                <div class="col-xs-2">
                  
    <input type="text" class="form-control" placeholder="Min Price">
  </div>
  <div class="col-xs-2">
    <input type="text" class="form-control" placeholder="Max Price">
  </div>

<div class="col-xs-2">
    <input type="text" class="form-control" placeholder="Location">
  </div>
  <button type="submit"  class="btn btn-primary text-white">Search Now</button>
  
              </div>
			  </form>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="orders">
                    <div class="table-responsive">
                      <table class="table table-hover">
                         <thead>
                            <tr>
                               <th>ID</th>
                               <th>Location</th>
                               <th>Price</th>
                               <th>Review</th>
                              
                            </tr>
                         </thead>
                         <tbody>
                            <tr> 
                               <td>1</td>
						    
							 
                               <td>Chittagong</td>
						   
                               <td>1,00,00,000</td>
							   <td>no riview</td>
						   
                               
							   
						    </tr>
							
                           
                            
                           
                         </tbody>
                      </table>
                    </div>
                  </div>
		
		
		



		</div>
</div>
</section>
@endsection