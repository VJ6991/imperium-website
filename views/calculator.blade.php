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
                             <h2>45 /180 DAY CALCULATOR</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('') }}">Home /</a> 45 / 180 Day Calculator</li>
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
                                <style>
                                  .calculator {
                                    width: 100%;
                                    border: none;
                                    overflow: hidden;
                                  }
                                </style>
                                <object data="../45_180/index.html" height="300" class="calculator">
                                  <embed src="../45_180/index.html" height="300" class="calculator"></embed>Error: Embedded data could not be displayed.
                                </object>
                            </div>
                        </section>	
                    </div>
                </div>
            </div>

          <div class="container">
            <div class="sign-up">
              <div class="col-md-12 col-sm-12 pad-5" id="calculator">
                  <h2 class="text-center">
                    How good is your rental income? FIND OUT NOW!
                    <br>
                    Enter estimated figures to calculate your current return on equity and <div class="gold text-center"gold">get immediate results!</div>
                  </h2>

                  <div id="calculator-inner">
                    <div class="col-md-12">
                      <div class="col-md-7">
                        <form class="form-horizontal" name="calc" id="calculator-form">
                          <div id="claculator">

                            <h4>PROPERTY DATA</h4>
                            <div class="form-group">
                              <label class="col-sm-6">Current Property Value:</label>
                              <div class="col-sm-6">
                                  <input class="form-control numeric" name="currentPropertyValue" id="currentPropertyValue" placeholder="Enter Value" onblur="calculate_expensive();" />
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-6">Gross Rental Income (per month):</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="GrossRentalIncome" id="GrossRentalIncome" placeholder="Enter Value" onblur="calculate_expensive();"/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-6">Current Mortgage Balance:</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="CurrentMortgageBalance" id="CurrentMortgageBalance" placeholder="Enter Value" onblur="calculate_expensive();"/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-6">Interest Rate:</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="InterestRate" id="InterestRate" placeholder="Enter Percentage" onblur="calculate_expensive();"/>
                              </div>
                            </div>

                            <h4>ESTIMATED EXPENSES</h4>

                            <div class="form-group">
                              <label class="col-sm-6">Property Tax (per year):</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="PropertyTax" id="PropertyTax" placeholder="Enter value" />
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-6">Home Insurance Premium (per year):</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="HomeInsurancePremium" id="HomeInsurancePremium" placeholder="Enter value" />
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-6">HOA Fee (per month):</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="HOAFee" id="HOAFee" placeholder="Enter value" value="0" />
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-6">Mortgage Interest (per year):</label>
                              <div class="col-sm-6">
                                <input class="form-control numeric" name="MortgageInterest" id="MortgageInterest" readonly />
                              </div>
                            </div>

                            <a href="javascript:void(0)" class="blue" onclick="show_advance();"> 
                              + show advance settings 
                            </a>

                            <div class="advance">
                              <div class="form-group">
                                <label class="col-sm-6">Vacancy Allowance (per year):</label>
                                <div class="col-sm-6">
                                  <input class="form-control numeric" name="VacancyAllowance" id="VacancyAllowance" placeholder="Enter value"/>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-6">Property Management Fee (per year):</label>
                                <div class="col-sm-6">
                                  <input class="form-control numeric" name="PropertyManagementFee" id="PropertyManagementFee" placeholder="Enter value"/>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-6">Repair & Maintanence Cost (per year):</label>
                                <div class="col-sm-6">
                                  <input class="form-control numeric" name="RepairAndMaintanenceCost" id="RepairAndMaintanenceCost" placeholder="Enter value"/>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-6">Capital Improvement Cost (per year):</label>
                                <div class="col-sm-6">
                                  <input class="form-control numeric" name="CapitalImprovementCost" id="CapitalImprovementCost" placeholder="Enter value"/>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-sm-6">Leasing Commissions (per year):</label>
                                <div class="col-sm-6">
                                  <input class="form-control numeric" name="LeasingCommissions" id="LeasingCommissions" placeholder="Enter value" />
                                </div>
                              </div>
                            </div>

                          </div>
                        </form>

                        <br>

                      </div>

                      <div class="col-md-1">
                        <img src="{{asset('images/light-bulb.png')}}" class="img-responsive tips-img" alt="Tips">
                      </div>

                      <div class="col-md-4">
                          <div class="calculate-text">
                              Investors can defer taxes via 1031 Exchange and potentially earn 5-7% net cash flow from a replacement rental property.
                          </div>

                          <br>
                          <img src="{{asset('images/investments-opp.jpg')}}" class="img-responsive" alt="property">
                      </div>
                      <div class="clear"></div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>

          <section id="property-result">
              <div class="col-md-12">
                        
                <h2 class="text-center">Send a Property Assessment Report to yourself.</h2>

                <br>
                <div class="col-md-6 col-md-offset-3" id="send-result">
                    <form class="form-horizontal" name="calc" id="send-result-form">

                        <div class="form-group">
                          <label class="col-sm-6">Name*:</label>
                          <div class="col-sm-6">
                            <input class="form-control" name="firstName" placeholder="Enter Name" data-force-validation-if-hidden="true" data-validation="required" />
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-6">Phone Number*:</label>
                          <div class="col-sm-6">
                            <input class="form-control phone" name="contactNumber" placeholder="Enter Phone Number" data-force-validation-if-hidden="true" data-validation="custom" data-validation-regexp="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" />
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-6">Property Address:</label>
                          <div class="col-sm-6">
                            <input class="form-control" name="PropertyAddress" placeholder="Enter Property Address" />
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-6">Email Address*:</label>
                          <div class="col-sm-6">
                            <input class="form-control" name="emailId" placeholder="Enter Email Address*" data-force-validation-if-hidden="true" data-validation="email" />
                          </div>
                        </div>

                        <p class="note-required">Fields with * is required</p>
                        <div class="form-group">
                          <div class="col-sm-6">
                            <div class="g-recaptcha" data-sitekey="6LfLnxoUAAAAALS_1xYV3pTUlboM9k--JNkfmzBc"></div>
                            <div class="text-danger" id="captcha-error"></div>
                          </div>

                          <div class="col-sm-6 text-right">
                              <button type="submit" class="btn btn-lg btn-send theme-btn col-sm-6 pull-right"> SEND </button>
                          </div>

                          <div id="loader" class="text-right hidden">
                            <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                            <span class="sr-only">Loading...</span>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </section>
        </div>

@endsection