	<div id="contactus" class="page w1000">
		<h1>Your Contributions</h1>
		<div class="content">
			<h3>Please provide the details of your contributions using this form. The below details will be used to generate the 80G certificate for all your donations.</h3>
			<form id="contributionsForm" onsubmit="return false">
				<p class="msg-area"></p>
				<label for="name">Name</label>
				<input type="text" name="name" id="name" required="true" />
				<label for="emailid">Email Address (80G certificate will be sent to this email address)</label>
				<input type="email" name="emailid" id="emailid" required="true" />
				<label for="address">Address (Communication Address)</label>
				<input type="text" name="address" id="address" required="true" />
				<label for="amount">Donation Amount (INR/Rs.)</label>
				<input type="number" name="amount" id="amount" required="true" />
				<label for="transref">Transaction/Reference Number</label>
				<input type="text" name="transref" id="transref" required="true" />
				<label for="cause">Cause</label>
				<select name="cause" id="cause" required="true" >
					<option value="SolarPumpDonation">Solar Pump Donation</option>
				</select>
				<label for="amount">Donation Date (dd-mm-yyyy)</label>
				<input type="date" name="date" id="date" required="true" />
				<label for="paymentMode">Mode of Payment</label>
				<select name="paymentMode" id="paymentMode" required="true" >
					<option value="cash">Cash</option>
					<option value="onlinetransfer">Online Transfer (Net Banking)</option>
				</select>

				<button id="submitDonations" name="submitDonations">Submit</button>
			</form>
		</div>
	</div>
