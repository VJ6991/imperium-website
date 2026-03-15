@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

        <!-- Inner Page Header serction start here -->
        <div class="inner-page-header">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-title">
                             <h2>RETURN ON INVESTMENT CALCULATOR</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('' )}}">Home /</a> ROI Calculator</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->
        <!-- About Page content area start here -->
        <div class="about-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                       
<section class="home section grey-section section-padding-bottom section-home-padding-top">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						
					</div>
				</div>
			<h3>Profit From Rentals Property Analysis Tool</h3>
			<p style="padding-bottom: 30px;"><span class="bg-danger">Disclaimer:</span> This real estate information has been designed to provide accurate and authoritative information in regard to the subject matter covered. It is provided with the understanding that the publisher is not engaged in rendering legal, accounting, or other professional services. If legal or other expert assistance is required, the services of a competent professional person should be sought. The author specifically disclaims any liability, loss, or risk, personal or otherwise, incurred as a consequence directly or indirectly of the use and application of any techniques or contents in this document.</p>

			<div class="row">
				<div class="col-md-6">
					<h5>Market or Appraised Value</h5>
					<p>Enter market or appraised value of subject property</p>
					 <input type="number" class="form-control" name="market-value" value="195000">
				</div>
				<div class="col-md-6">
					<h5>Purchase Price</h5>
					<p>Enter the purchase price of the subject property</p>
					<input type="number" class="form-control" name="purchase-price" value="175000">
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					<h5>Down Payment</h5>
					<p>Enter the percentage of down payment which is typically 20 to 25% with financing and 0% with cash purchase</p>
					 <input type="number" class="form-control" name="down-payment" value="25">
				</div>
				<div class="col-md-6">
					<h5>Closing Costs & Fees</h5>
					<p>Enter estimated closing costs with traditional tile company which typically range from $3k to $5k</p>
					<input type="number" class="form-control" name="closing-costs" value="4500">
				</div>
			</div>


			<hr>


			<div class="row">
				<div class="col-md-4">
					<h5>Interest Rate (30 yr Fixed)</h5>
					<p>Enter Interest Rate for 30 year fixed mortgage which currently ranges from 4 to 5%</p>
					 <input type="number" class="form-control" name="interest-rate" value="4.25">
				</div>
				<div class="col-md-4">
					<h5>Monthly Rent (GSI)</h5>
					<p>Enter Monthly Rent for subject property</p>
					<input type="number" class="form-control" name="monthly-rent" value="2350">
				</div>
				<div class="col-md-4">
					<h5>Annual Property Tax</h5>
					<p>Enter Annual Property Tax for subject property</p>
					<input type="number" class="form-control" name="annual-property-tax" value="2640">
				</div>
				<div class="col-md-4">
					<h5>Annual Utilities</h5>
					<p>Enter Annual Utilities for subject property</p>
					 <input type="number" class="form-control" name="annual-utilities" value="900">
				</div>
				<div class="col-md-4">
					<h5>Annual Landscaping</h5>
					<p>Enter Annual Landscaping for subject property</p>
					<input type="number" class="form-control" name="annual-landscaping" value="960">
				</div>
				<div class="col-md-4">
					<h5>Annual Insurance Premium</h5>
					<p>Enter Annual Insurance Premium for subject property</p>
					<input type="number" class="form-control" name="annual-insurance" value="1350">
				</div>
				<div class="col-md-4">
					<h5>Vacancy Rate (% of GSI)</h5>
					<p>Enter expected Vacancy Rate which typically ranges from 3 to 10% annually</p>
					 <input type="number" class="form-control" name="vacancy-rate" value="4">
				</div>
				<div class="col-md-4">
					<h5>Maintenance Rate (% of GSI)</h5>
					<p>Enter Maintenance Rate which typically ranges from 3 to 10% annually</p>
					<input type="number" class="form-control" name="maintenance-rate" value="4">
				</div>
				<div class="col-md-4">
					<h5>Property Management Rate (% of GSI)</h5>
					<p>Enter Property Management Rate which typically ranges from 7 to 12% of Monthly Rent</p>
					<input type="number" class="form-control" name="management-rate" value="8">
				</div>
			</div>


			<hr>


			<div class="row results">
				<div class="col-md-3">
					<h5>Initial Equity</h5>
					 <input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Amount Financed</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Down Payment Amount</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>



				<div class="col-md-3">
					<h5>Total Cash Investment</h5>
					 <input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Debt Service (P&I) Monthly</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Debt Service (P&I) Yearly</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Gross Scheduled Income (GSI)</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Less Vacancy Amount</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>



				<div class="col-md-3">
					<h5>Gross Operating Income (GOI)</h5>
					 <input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Property Management</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Annual Property Taxes</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Annual Utilities</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Annual Landscaping</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Annual Insurance Premium</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Repairs & Maintenance</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>



				<div class="col-md-3">
					<h5>Total Operating Expenses</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Net Operating Income</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Less Debt Service</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
				<div class="col-md-3">
					<h5>Before-Tax Cash Flow (BTCF)</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
			</div>


			<hr>


			<div class="row results">
				<div class="col-md-4">
					<h5>Before-Tax Cash Flow (BTCF)</h5>
					<input type="text" class="form-control" name="market-value" disabled>
				</div>
			</div>
		</section>	
        <HR>	
            </div>
        </div>
    </div>
</section> 

@endsection