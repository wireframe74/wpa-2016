<div class="row">



	<div class="col-sm-6">
	
	<h2>Payment Options</h2>

	<ul class="payment-options">

		<li>
		<input type="radio" name="payment-plan" value="full" id="full">
		<label for="full" id="full-label" style="font-weight: normal;">Pay in Full<span id="full-savings" style="">—<span class="highlight" id="full-savings-amount">Save $300</span></span>
		</label>
		</li>


		<li>
		<input type="radio" name="payment-plan" value="zero-apr" id="zero-apr">
		<label for="zero-apr" id="zero-apr-label" style="font-weight: normal;">0% APR Monthly Plan<span id="zero-apr-savings" style="">—<span class="highlight" id="zero-apr-savings-amount">Save $100</span></span></label>
		</li>


		<li>
		<input type="radio" name="payment-plan" value="part" id="academy-load">
		<label for="academy-load" id="academy-load-label">Academy Loan Plan<span id="part-savings" style="display: none;">—<span class="highlight" id="part-savings-amount"></span></span></label>
		</li>

	</ul><!-- payment-options -->

	<div class="payment-schedule row">
		<div class="col-xs-12 col-sm-8">
			<p>
			<label for="schedule">I would like to make payments</label>
			<select id="-select-schedule" name="schedule-loan">
			<option value="monthly">Once per Month</option>
			<option value="bi-weekly">Every Two Weeks</option>
			<option value="weekly">Once per Week</option>
			</select>
			</p>

			<p>
			<label for="schedule">I would like to make payments</label>
			<select id="-select-schedule" name="schedule-">
			<option value="monthly=4mths">Once per Month (4 months)</option>
			<option value="monthly-10mths">Once per Month (10 months)</option>
			</select>
			</p>




			<p id="schedule-day-of-month-wrap">
			<label for="schedule-day-of-month">Processed on</label>
			<select id="schedule-day-of-month" class="form-control" name="schedule-day-of-month">
			<option value="1">The 1st of each month</option>
			<option value="2">The 2nd of each month</option>
			<option value="3">The 3rd of each month</option>
			<option value="4">The 4th of each month</option>
			<option value="5">The 5th of each month</option>
			<option value="6">The 6th of each month</option>
			<option value="7">The 7th of each month</option>
			<option value="8">The 8th of each month</option>
			<option value="9">The 9th of each month</option>
			<option value="10">The 10th of each month</option>
			<option value="11">The 11th of each month</option>
			<option value="12">The 12th of each month</option>
			<option value="13">The 13th of each month</option>
			<option value="14">The 14th of each month</option>
			<option value="15">The 15th of each month</option>
			<option value="16">The 16th of each month</option>
			<option value="17">The 17th of each month</option>
			<option value="18">The 18th of each month</option>
			<option value="19">The 19th of each month</option>
			<option value="20">The 20th of each month</option>
			<option value="21">The 21st of each month</option>
			<option value="22">The 22nd of each month</option>
			<option value="23">The 23rd of each month</option>
			<option value="24">The 24th of each month</option>
			<option value="25">The 25th of each month</option>
			<option value="26">The 26th of each month</option>
			<option value="27">The 27th of each month</option>
			<option value="28">The 28th of each month</option>
			<option value="29">The 29th of each month</option>
			<option selected="selected" value="30">The 30th of each month</option>
			<option value="31">The 31st of each month</option>
			</select>
			</p>

			<p id="schedule-day-of-week-wrap">
			<label for="schedule-day-of-week">Starting on</label>
			<select class="form-control" id="schedule-day-of-week" name="schedule-day-of-week">
			<option>Monday, May 9</option>
			<option>Tuesday, May 10</option>
			<option>Wednesday, May 11</option>
			<option>Thursday, May 12</option>
			<option>Friday, May 13</option>
			</select>
			</p>

			<p id="schedule-day-of-bi-week-wrap">
			<label for="schedule-day-of-bi-week">Starting on</label>
			<select class="form-control" id="schedule-day-of-bi-week" name="schedule-day-of-bi-week">
			<option>Monday, May 16</option>
			<option>Tuesday, May 17</option>
			<option>Wednesday, May 18</option>
			<option>Thursday, May 19</option>
			<option>Friday, May 20</option>
			<option>Monday, May 23</option>
			<option>Tuesday, May 24</option>
			<option>Wednesday, May 25</option>
			<option>Thursday, May 26</option>
			<option>Friday, May 27</option>
			</select>
			</p>

		</div><!-- col-sm-6 -->
	</div><!--row -->
	</div><!-- span -->


	<!-- Payment Summary Right Hand Side -->
<div class="col-xs-12 col-sm-6">

		<div id="full-plan">

		<p><strong>Pay in Full</strong></p>
			<table class="table">
		
				<tbody>
					<tr>
					<td>Course Cost:</td>
					<td id="full-cost">$1298.00</td>
					</tr>

					<tr>
					<td>Full-Payment Discount:</td>
					<td id="full-discount">-$300.00</td>
					</tr>

					<tr class="total-amt">
					<td>Total:</td><td id="full-total">$998.00</td>
					</tr>

				</tbody>
			</table>
		</div><!-- #full-plan -->

		<div id="extended-plan" style="display: none;">
			<p><strong>Extended Installment Plan</strong></p>

			<div id="extended-plan-monthly">
				<table class="table">
				<tbody>
				<tr><td>Initial Deposit:</td><td id="extended-monthly-deposit">$98.00</td></tr>
				<tr><td>Number of Installments:</td><td id="extended-monthly-installments">12</td></tr>
				<tr><td>Monthly Installment:</td><td id="extended-monthly-installment-size">$100.00</td>

				<tr class="total-amt"><td>Total:</td><td id="extended-monthly-total">$1298.00</td></tr>
				</tbody>
				</table>
			</div><!-- #extended-plan-monthly -->


			<div id="extended-plan-weekly">
				<table class="table">
				<tbody>
				<tr><td>Initial Deposit:</td><td id="extended-weekly-deposit" >$98.00</td></tr>
				<tr><td>Number of Installments:</td><td id="extended-weekly-installments" >52</td></tr>
				<tr><td>Weekly Installment:</td><td id="extended-weekly-installment-size" >$23.00</td>
				<tr id="extended-weekly-remainder-tr">
				<td>Final Payment:</td><td id="extended-weekly-remainder" >$4.00</td>
				</tr>
				
				<tr class="total-amt"><td>Total:</td><td id="extended-weekly-total" >$1298.00</td></tr>
				</tbody>
				</table>
			</div><!-- #extended-plan-weekly -->


			<div id="extended-plan-bi-weekly">
				<table class="table">
				<tbody>
				<tr><td>Initial Deposit:</td><td id="extended-bi-weekly-deposit" >$98.00</td></tr>
				<tr><td>Number of Installments:</td><td id="extended-bi-weekly-installments" >26</td></tr>
				<tr><td>Bi-Weekly Installment:</td><td id="extended-bi-weekly-installment-size" >$46.10</td>
				</tr>
				<tr id="extended-bi-weekly-remainder-tr">
				<td>Final Payment:</td><td id="extended-bi-weekly-remainder" >$1.40</td>
				</tr>
				
				<tr class="total-amt"><td>Total:</td><td id="extended-bi-weekly-total" >$1298.00</td></tr>
				</tbody>
				</table>
			</div><!-- #extended-plan-bi-weekly -->
	
		</div><!-- extended-plan -->


		<div id="accelerated-plan" style="display: none;">
			

			<p><strong>Accelerated Installment Plan</strong></p>

			<div id="accelerated-plan-monthly">
			
			<table class="table">
				<tbody>
				<tr><td>Initial Deposit:</td><td id="accelerated-monthly-deposit" >$238.00</td></tr>
				<tr><td>Number of Installments:</td><td id="accelerated-monthly-installments" >4</td></tr>
				<tr><td>Monthly Installment:</td><td id="accelerated-monthly-installment-size" >$240.00</td>
				</tr>
				
				<tr class="total-amt"><td>Total:</td><td id="accelerated-monthly-total" >$1198.00</td></tr>
				</tbody>
			</table>

			</div><!-- #accelerated-plan-monthly -->

			<div id="accelerated-plan-weekly">
				<table class="table">
				<tbody>
				<tr><td>Initial Deposit:</td><td id="accelerated-weekly-deposit" >$238.00</td></tr>
				<tr><td>Number of Installments:</td><td id="accelerated-weekly-installments" >17</td></tr>
				<tr><td>Weekly Installment:</td><td id="accelerated-weekly-installment-size" >$56.40</td></tr>
				<tr id="accelerated-weekly-remainder-tr"><td>Final Payment:</td><td id="accelerated-weekly-remainder" >$1.20</td></tr>
				
				<tr class="total-amt"><td>Total:</td><td id="accelerated-weekly-total" >$1198.00</td></tr>
				</tbody>
				</table>
			</div><!-- #accelerated-plan-weekly-->

			<div id="accelerated-plan-bi-weekly">
				<table class="table">
				<tbody>
				<tr><td>Initial Deposit:</td><td id="accelerated-bi-weekly-deposit" >$238.00</td></tr>
				<tr><td>Number of Installments:</td><td id="accelerated-bi-weekly-installments" >9</td></tr>
				<tr><td>Bi-Weekly Installment:</td><td id="accelerated-bi-weekly-installment-size" >$106.60</td></tr>
				<tr id="accelerated-bi-weekly-remainder-tr"><td>Final Payment:</td><td id="accelerated-bi-weekly-remainder" >$0.60</td></tr>
				
				<tr class="total-amt"><td>Total:</td><td id="accelerated-bi-weekly-total" >$1198.00</td></tr>
				</tbody>
				</table>
			</div><!-- #accelerated-plan-bi-weekly-->
		
		</div><!-- #accelerated-plan -->

		<p>All prices are in GBP.</p>

<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Show details</button> -->

	
</div><!-- col-sm-6	 -->
<div class="col-xs-12"><hr></div>
</div><!-- row -->
