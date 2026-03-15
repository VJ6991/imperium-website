@extends('layouts.app')

@section('meta')
	{!!Helper::setMetaTags($meta)!!}
@stop

@section('content')

        <div class="inner-page-header">
            <div class="container">
                <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-title">
                             <h2>DETERMINE YOUR PROPERTY VESTING</h2>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="header-page-locator">
                             <ul>
                                 <li><a href="{{ url('') }}">Home /</a> Vesting Wizard</li>
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
                       
<section class="section grey-section section-padding-top-bottom" style="text-align: left;">
					<h3>Vesting issues overview</h3>

					<p>When it comes time to determine how you need to take title to your new Replacement Property there are several things to consider.</p>
					<p>First, it is always better to acquire your new property in the same entity as which you sold your old property. This is because you are maintaining the same taxpayer throughout the exchange. However, for several reasons, Exchangers can find that they need to transition their ownership interest into a new entity or structure for their Replacement Property.</p>
					<p>In many cases transitioning into a different entity is not a problem, provided the entity essentially remains as the same taxpayer or as a disregarded entity for the purposes of paying tax. Below are a few examples of transitioning into a different entity which will not jeopardize an exchange.</p>



					<ul class="fa-ul">
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>The Exchanger’s revocable living trust or other grantor trust may acquire Replacement Property in the name of the Exchanger individually, as long as the trust entity is disregarded for Federal tax purposes. Rev. Rul. 2004-86.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>The Exchanger’s estate may complete the exchange after the Exchanger dies following the close of the sale of Relinquished Property. Rev. Rul. 64-161.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>The Exchanger may sell Relinquished Property held individually and acquire Replacement Property titled in a single-member LLC or acquire multiple Replacement Properties in different single-member LLCs as long as the Exchanger is the sole member and the single member LLCs are treated as disregarded entities. PLR 200732012.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>A husband and wife may exchange Relinquished Property held individually as community property for Replacement Property titled in a two-member LLC in which the husband’s and wife’s ownership is community property, but only in community property states and only if they treat the LLC as a disregarded entity. Rev. Proc. 2002-69.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>A corporation that merges out of existence in a tax-free reorganization after the disposition of the Relinquished Property may complete the exchange and acquire the Replacement Property as the new corporate entity. TAM 9252001, PLR 200151017.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>An Illinois land trust is a disregarded entity for IRC §1031 purposes, so an Illinois land trust beneficiary may exchange his beneficial interest in Relinquished Property held by the trust for Replacement Property vested in the beneficiary individually, or in a different Illinois land trust, as long as the Exchanger is the beneficiary. Rev. Rul. 92-105.</li>
					</ul>

					<p style="padding-top: 30px;">However, there are cases where the problems arising from a change in structure are significant because modifications are made to the actual taxpaying entity. Let’s look at a few problematic instances:</p>
					
					<ul class="fa-ul">
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>Whenever exchanging out of a Limited Partnership or multiple member LLC. In these instances it is critical that you have the assistance of competent tax advice.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>Adding a party to vesting, such as Relinquished Property held by husband, with Replacement Property acquired by husband and wife, can result in partial recognition of gain by the Exchanger husband.</li>
						<li><i class="fa-li fa fa-check-square" style="margin-top:5px"></i>Divesting Relinquished Property held in one entity, such as a corporation, partnership, or multi-member LLC and acquiring the Replacement Property in a different corporation, partnership, or multi-member LLC.  These transactions will be disqualified because the exchange is being completed by a different taxpayer than the one starting the exchange.  [The only time such a conversion will work is in the conversion of a general partnership to an LP or an LLC during the Exchange Period will not disqualify the exchange. PLR 99935065.]</li>
					</ul>



					<p style="padding-top: 30px;">To avoid disqualifying the exchange, the Exchanger should not make any changes in the vesting of the Relinquished or Replacement Properties prior to or during the exchange. And, Exchangers are cautioned to consult with their tax or legal advisors regarding how their vesting issues will impact the structure of their exchange before they transfer the Relinquished Property. Remember, proper planning and negotiation can make the difference between a successful exchange and a taxable problem.</p>
					<p>To test your proposed Replacement Property vesting solution, use this 1031 Vesting Wizard to see if your proposed vesting solution is problematic</p>

					<style>
						#vesting-widget-cont {
							margin-top: 80px;
							margin-bottom: 80px;
							max-width: 700px;
							margin-left: auto;
							margin-right: auto;
							overflow: hidden;
						}
						#vesting-widget-cont select {
							width: calc(50% - 10px);
							float: left;
							padding: 10px;
							font-size: 14px;
						}
						.current-vesting { margin-right: 20px }
						#vesting-widget-result {
							background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.10));
							text-align: center;
							width: 100%;
							padding: 20px;
							background-color: #888;
							overflow: hidden;
							margin-top: 20px;
							color: #fff;
							float: left;
							-webkit-border-radius: 4px;
							-moz-border-radius: 4px;
							border-radius: 4px;
						}
						#vesting-widget-result.reaction-1 {
							background-color: #60b135;
						}
						#vesting-widget-result.reaction-2 {
							background-color: #d2911f;
						}
						#vesting-widget-result.reaction-3 {
							background-color: #c14444;
						}
						#vesting-widget-result.reaction-4 {
							background-color: #888;
						}

						#vesting-widget-result.reaction-1:before {
							font-family: fontawesome;
							content: "\f087";
							width: 100%;
							display: block;
							font-size: 40px;
							line-height: 40px;
						}
						#vesting-widget-result.reaction-2:before {
							font-family: fontawesome;
							content: "\f071";
							width: 100%;
							display: block;
							font-size: 40px;
							line-height: 40px;
						}
						#vesting-widget-result.reaction-3:before {
							font-family: fontawesome;
							content: "\f088";
							width: 100%;
							display: block;
							font-size: 40px;
							line-height: 40px;
						}
						#vesting-widget-result.reaction-4:before {
							font-family: fontawesome;
							content: "\f24a";
							width: 100%;
							display: block;
							font-size: 40px;
							line-height: 40px;
						}

						@media screen and (max-width: 480px) {
							#vesting-widget-cont select {
								margin-top: 15px;
								width: 100%;
							}
						}
					</style>



					<script>
						$(function() {



							var predefined_reactions = [
								/* 0 */ ["OK", 1],
								/* 1 */ ["This is usually okay, but always confirm with your tax adviser.", 1],
								/* 2 */ ["Warning! You need to contact your tax adviser to confirm the actual taxpayer before you exchange.", 2],
								/* 3 */ ["Danger! Consult your tax adviser immediately", 3],
								/* 4 */ ["Not Applicable (N/A)", 4],
								/* 5 */ ["Warning! Who is the taxpayer? See your tax adviser.", 2]
								
							];

							var proposed_vesting = [
								/* 0  */ "Tenants in Common (undivided interest)",
								/* 1  */ "Joint Tenants (with Spouse)",
								/* 2  */ "Joint Tenants (without spouse)",
								/* 3  */ "Community Property (with right of survivorship)",
								/* 4  */ "Single Member LLC",
								/* 5  */ "Multiple Member LLC",
								/* 6  */ "S Corporation",
								/* 7  */ "C Corporation",
								/* 8  */ "Revocable Trust",
								/* 9  */ "Partnership Interest",
								/* 10 */ "Limited Partnership",
								/* 11 */ "Family Partnership",
								/* 12 */ "Sole Ownership",

								/* 13 */ "Irrevocable Trust",
								/* 14 */ "Irrevocable Trust (with Successor Trustee)"
							];



							
							// Reaction 1 = OK, 2 = Maybe, 3 = Nope
							var vesting_data = [
								["Tenants in common", [
									[proposed_vesting[0],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[1],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[2],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[3],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[4],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[1][1], predefined_reactions[1][0]]]
								],
								["Joint tenants (with Spouse)", [
									[proposed_vesting[0],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[1],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[4],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[5],  predefined_reactions[2][1], predefined_reactions[2][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["Joint tenants (without Spouse)", [
									[proposed_vesting[0],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[1],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[2],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[0][1], predefined_reactions[0][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["Community property (with right of survivorship)", [
									[proposed_vesting[0],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[1],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[2],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[3],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[4],  predefined_reactions[2][1], predefined_reactions[2][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[4][1], predefined_reactions[4][0]]]
								],
								["Single Member LLC", [
									[proposed_vesting[0],  predefined_reactions[0][1], predefined_reactions[0][0]],
									[proposed_vesting[1],  predefined_reactions[0][1], predefined_reactions[0][0]],
									[proposed_vesting[2],  predefined_reactions[0][1], predefined_reactions[0][0]],
									[proposed_vesting[3],  predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[4],  predefined_reactions[0][1], predefined_reactions[0][0]],
									[proposed_vesting[5],  predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[6],  predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[7],  predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[13], predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[14], predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[8],  predefined_reactions[0][1], predefined_reactions[0][0]],
									[proposed_vesting[9],  predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[10], predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[11], predefined_reactions[5][1], predefined_reactions[5][0]],
									[proposed_vesting[12], predefined_reactions[5][1], predefined_reactions[5][0]]]
								],
								["Multiple Member LLC", [
									[proposed_vesting[0],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[1],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[2][1], predefined_reactions[2][0]],
									[proposed_vesting[5],  predefined_reactions[2][1], predefined_reactions[2][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[13], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["S Corporation", [
									[proposed_vesting[0],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[1],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[13], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["C Corporation", [
									[proposed_vesting[0],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[1],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[13], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["Irrevocable Trust", [
									[proposed_vesting[0],  predefined_reactions[2][1], predefined_reactions[2][0]],
									[proposed_vesting[1],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[13], predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["Limited Partnership", [
									[proposed_vesting[0],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[1],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[5],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[13], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[14], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["Family Partnership", [
									[proposed_vesting[0],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[1],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[2],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[3],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[4],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[5],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[13], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[14], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[12], predefined_reactions[3][1], predefined_reactions[3][0]]]
								],
								["Sole Ownership", [
									[proposed_vesting[0],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[1],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[2],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[3],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[4],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[5],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[6],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[7],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[13], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[8],  predefined_reactions[1][1], predefined_reactions[1][0]],
									[proposed_vesting[9],  predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[10], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[11], predefined_reactions[3][1], predefined_reactions[3][0]],
									[proposed_vesting[12], predefined_reactions[1][1], predefined_reactions[1][0]]]
								],
							];



						
							// Event listeners for the dropdowns
							$(".current-vesting").on("change", function() {
								updateProposedVesting($(this).val());
							})
							$(".proposed-vesting").on("change", function() {
								updateVestingResult($(".current-vesting").val(), $(this).val());
							})
							

							// Start by assigning the first Current Vesting
							for(var i = 0; i < vesting_data.length; i++) {
								$(".current-vesting").append("<option value='" + i + "'>" + vesting_data[i][0] + "</option>")
							}
							updateProposedVesting(0);



							function updateProposedVesting(index) {
								$(".proposed-vesting").empty();
								for(var i = 0; i < vesting_data[index][1].length; i++) {
									$(".proposed-vesting").append("<option value='" + i + "'>" + vesting_data[index][1][i][0] + "</option>")
								}
								updateVestingResult(index, 0);
							}
							
							function updateVestingResult(c_index, p_index) {
								$("#vesting-widget-result").removeClass().addClass("reaction-" + vesting_data[c_index][1][p_index][1]);
								$("#vesting-widget-result").empty().append(vesting_data[c_index][1][p_index][2]);
							}
						});
					</script>



					<div id="vesting-widget-cont">
						<select class="current-vesting"></select>
						<select class="proposed-vesting"></select>
						<div id="vesting-widget-result"></div>
					</div>
				</div>
			</div>
		</section>
		</section>	
        <HR>
            </div>
        </div>
    </div>
</section> 

@endsection