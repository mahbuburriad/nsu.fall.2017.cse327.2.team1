<?php
require_once ('header1.php');
?>
<title>Automated Accommodation || Login & Register</title>
<?php
require_once ('header2.php');
?>
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Shop or Office Rent</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                
                <li class="active text-gray-silver">Chose your Compatible Shops or Office</li>
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
						<h3 style="color:#02A94F">Available Shops or Offices</h3>
						<div  style="font-size:16px"><p>Here you can choose your suitable office or shop from the list below.
						You can give your desire price range and location to find a suitable shop or office.</p></div>
						

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
  <button type="submit"  style="color:#02A94F; font-size:15px">Search Now</button>
  
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
						   
                               <td>20,000</td>
							   <td>no riview</td>
						   
                               
							   
						    </tr>
							
                           
                            
                           
                         </tbody>
                      </table>
                    </div>
                  </div>
		
		
		



		</div>
</div>
</section>




<?php
require_once ('footer.php');
?>