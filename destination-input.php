<form action="">
	<div class="destination">
		<label for="destination">Where To?</label>
		<input id="destination" name="destination" type="text" placeholder="Enter Destination">
	</div>

	<div class="checkin-out-people">
		<div class="check-in">
			<label for="check-in">Check-In</label>
			<input id="check-in" name="check-in" type="date">
		</div>

		<div class="check-out">
			<label for="check-out">Check-Out</label>
			<input id="check-out" name="check-out" type="date">
		</div>

		<div class="guest-amt">
			<label for="guest-amt"># Travelers:</label>

			<select name="guest-amt" id="guest-amt">
				<option value=" ">Guest</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			</select>
		</div>
	</div>
	<input type="submit" value="Search">
</form>