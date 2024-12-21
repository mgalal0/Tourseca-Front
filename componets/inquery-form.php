<div class="w-full mx-auto shadow-lg rounded-lg p-6 bg-[#F9FBF9]">
	<div class="flex justify-between mb-4 bg-white p-3 rounded-lg shadow-md">
		<button class="bg-[<?= $_primary ?>] text-white rounded-lg px-4 py-2 w-1/2">Enquiry</button>
		<button class="text-[<?= $_primary ?>] bg-white rounded-lg px-4 py-2 w-1/2">Booking</button>
	</div>

	<h2 class="text-2xl text-[<?= $_primary ?>] font-bold mb-6 text-center">Inquiry Form</h2>

	<form>
		<div class="mb-4">
			<label class="flex justify-start gap-1 items-center text-sm mb-1" for="name">
				<img loading="lazy" src="images/icons/user.svg" alt="user icon" />
				<span>Your Name</span>
			</label>
			<input type="text" id="name"
				class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
				placeholder="example" required>
		</div>

		<div class="mb-4">
			<label class="flex justify-start gap-1 items-center text-sm mb-1" for="email">
				<img loading="lazy" src="images/icons/email.svg" alt="email icon" />
				<span>Email</span>
			</label>
			<input type="email" id="email"
				class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
				placeholder="example@gmail.com" required>
		</div>

		<div class="mb-4">
			<label class="flex justify-start gap-1 items-center text-sm mb-1" for="country">
				<img loading="lazy" src="images/icons/country.svg" alt="country icon" />
				<span>Country</span>
			</label>
			<select id="country"
				class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
				required>
				<option value="Germany">Germany</option>
				<option value="USA">USA</option>
				<option value="UK">UK</option>
				<option value="France">France</option>
				<!-- Add more countries as needed -->
			</select>
		</div>

		<div class="mb-4">
			<label class="flex justify-start gap-1 items-center text-sm mb-1" for="date">
				<img loading="lazy" src="images/icons/date.svg" alt="date icon" />
				<span>Date</span>
			</label>
			<input type="date" id="date"
				class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
				required>
		</div>

		<div class="mb-4">
			<label class="flex justify-start gap-1 items-center text-sm mb-1" for="phone">
				<img loading="lazy" src="images/icons/phone.svg" alt="phone icon" />
				<span>Phone Number</span>
			</label>
			<input type="tel" id="phone"
				class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
				placeholder="+20 3746739200" required>
		</div>

		<div class="mb-4">
			<label class="block text-sm mb-1" for="children">Number of Children (2 - 11 years)</label>
			<div class="flex items-center">
				<button type="button" class="bg-gray-200 rounded-l-lg px-3" onclick="changeQuantity('children', -1)">-</button>
				<input type="number" id="children"
					class="w-16 text-center border-t border-b rounded-none border border-gray-300" value="0" readonly>
				<button type="button" class="bg-gray-200 rounded-r-lg px-3" onclick="changeQuantity('children', 1)">+</button>
			</div>
		</div>

		<div class="mb-4">
			<label class="block text-sm mb-1" for="adults">Number of Adults</label>
			<div class="flex items-center">
				<button type="button" class="bg-gray-200 rounded-l-lg px-3" onclick="changeQuantity('adults', -1)">-</button>
				<input type="number" id="adults" class="w-16 text-center border-t border-b rounded-none border border-gray-300"
					value="0" readonly>
				<button type="button" class="bg-gray-200 rounded-r-lg px-3" onclick="changeQuantity('adults', 1)">+</button>
			</div>
		</div>

		<div class="mb-4">
			<label class="block text-sm mb-1" for="message">Message</label>
			<textarea id="message"
				class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
				rows="4" placeholder="Tell us about your requirements about the trip"></textarea>
		</div>

		<button type="submit"
			class="w-full bg-blue-600 text-white rounded-lg py-2 hover:bg-blue-700 transition duration-200">Submit
			Inquiry</button>
	</form>
</div>

<script>
	function changeQuantity(type, delta) {
		const input = document.getElementById(type);
		let currentValue = parseInt(input.value);
		currentValue = Math.max(0, currentValue + delta); // Prevent negative values
		input.value = currentValue;
	}
</script>