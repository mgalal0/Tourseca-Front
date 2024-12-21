<?php
// single-tour.php
$_main = "#E0EBDD";

?>

<section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
	<h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Prices</h3>
	<div class="overflow-x-auto">
		<!-- desktop table -->
		<table class="hidden md:block  min-w-full border-collapse border border-[<?= $_main ?>] text-center">
			<thead>
				<tr class="bg-[#F4F8F3] text-gray-500">
					<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">No</th>
					<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Standard
						Accommodations</th>
					<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Deluxe Accommodations
					</th>
					<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Ultra Deluxe
						Accommodations</th>
					<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Luxury Accommodations
					</th>
				</tr>
			</thead>
			<tbody>
				<tr class="hover:bg-[<?= $_main ?>] text-black">
					<td class="border border-[<?= $_main ?>] px-6 py-4">1 Adult</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<strong>$100</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<strong>$100</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<strong>$100</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<strong>$100</strong>
					</td>
				</tr>
				<tr class="hover:bg-[<?= $_main ?>] text-black">
					<td class="border border-[<?= $_main ?>] px-6 py-4">2 Adults</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$200</del>
						<strong>$180</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$200</del>
						<strong>$180</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$200</del>
						<strong>$180</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$200</del>
						<strong>$180</strong>
					</td>
				</tr>
				<tr class="hover:bg-[<?= $_main ?>] text-black">
					<td class="border border-[<?= $_main ?>] px-6 py-4">3 Adults</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$300</del>
						<strong>$280</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$300</del>
						<strong>$280</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$300</del>
						<strong>$280</strong>
					</td>
					<td class="border border-[<?= $_main ?>] px-6 py-4">
						<span>Start from:</span>
						<del class="text-gray-500">$300</del>
						<strong>$280</strong>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- mobile tables -->
		<div class="md:hidden">
			<p class="mb-4">Prices are quoted in US Dollars per person per trip except during Christmas,
				New
				Year & Easter holidays.</p>
			<table class="mb-4 min-w-full border-collapse border border-[<?= $_main ?>] text-center">
				<h3 class="text-[<?= $_primary ?>] mb-2">Deluxe Accommodations</h3>
				<thead>
					<tr class="bg-[#F4F8F3] text-gray-500">
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">No</th>
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Prices</th>
					</tr>
				</thead>
				<tbody>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">1 Adult</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<strong>$100</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">2 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$200</del>
							<strong>$180</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">3 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$300</del>
							<strong>$280</strong>
						</td>
					</tr>
				<tbody>
			</table>
			<table class="mb-4 min-w-full border-collapse border border-[<?= $_main ?>] text-center">
				<h3 class="text-[<?= $_primary ?>] mb-2">Ultra Deluxe Accommodations</h3>
				<thead>
					<tr class="bg-[#F4F8F3] text-gray-500">
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">No</th>
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Prices</th>
					</tr>
				</thead>
				<tbody>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">1 Adult</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<strong>$100</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">2 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$200</del>
							<strong>$180</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">3 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$300</del>
							<strong>$280</strong>
						</td>
					</tr>
				<tbody>
			</table>
			<table class="mb-4 min-w-full border-collapse border border-[<?= $_main ?>] text-center">
				<h3 class="text-[<?= $_primary ?>] mb-2">Luxury Accommodations</h3>
				<thead>
					<tr class="bg-[#F4F8F3] text-gray-500">
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">No</th>
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Prices</th>
					</tr>
				</thead>
				<tbody>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">1 Adult</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<strong>$100</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">2 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$200</del>
							<strong>$180</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">3 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$300</del>
							<strong>$280</strong>
						</td>
					</tr>
				<tbody>
			</table>
			<table class="min-w-full border-collapse border border-[<?= $_main ?>] text-center">
				<h3 class="text-[<?= $_primary ?>] mb-2">Standard Accommodations</h3>
				<thead>
					<tr class="bg-[#F4F8F3] text-gray-500">
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">No</th>
						<th class="border border-[<?= $_main ?>] px-4 py-6 font-weight-300">Prices</th>
					</tr>
				</thead>
				<tbody>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">1 Adult</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<strong>$100</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">2 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$200</del>
							<strong>$180</strong>
						</td>
					</tr>
					<tr class="hover:bg-[<?= $_main ?>] text-black">
						<td class="border border-[<?= $_main ?>] px-6 py-4">3 Adults</td>
						<td class="text-[<?= $_primary ?>] border border-[<?= $_main ?>] px-6 py-4">
							<span>Start from:</span>
							<del class="text-gray-500">$300</del>
							<strong>$280</strong>
						</td>
					</tr>
				<tbody>
			</table>
		</div>
	</div>
	<div>
		<h3 class="text-lg text-gray-700 font-semibold mt-6">Prices:</h3>
		<p class="mb-2">Prices are quoted in US Dollars per person per trip except during Christmas, New
			Year & Easter holidays.</p>

		<h4 class="text-lg text-gray-700 font-semibold mt-4">Standard Accommodations :</h4>
		<ul class="mt-2 mb-4">
			<li>
				Basic, clean, and budget-friendly rooms with essential amenities like a bed, bathroom,
				and
				Wi-Fi.</li>
		</ul>

		<h4 class="text-lg text-gray-700 font-semibold mt-4">Deluxe Accommodations :</h4>
		<ul class="mt-2 mb-4">
			<li>Upgraded rooms with stylish decor, more space, and added comforts such as better
				furnishings
				and on-site facilities.</li>
		</ul>

		<h4 class="text-lg text-gray-700 font-semibold mt-4">Ultra Deluxe Accommodations :</h4>
		<ul class="mt-2 mb-4">
			<li>High-end accommodations featuring premium amenities, exclusive perks, and personalized
				services for a lavish stay.</li>
		</ul>

		<h4 class="text-lg text-gray-700 font-semibold mt-4">Luxury Accommodations :</h4>
		<ul class="mt-2 mb-4">
			<li>The ultimate in opulence, offering world-class services, exquisite designs, and top-tier
				facilities like spas and fine dining.</li>
		</ul>

		<h4 class="text-lg text-gray-700 font-semibold mt-4">Children Policy :</h4>
		<ul class="list-disc list-inside mb-2">
			<li>0 - 01.99 Free of Charge</li>
			<li>2 - 05.99 pay 25% of tour price</li>
			<li>6 - 11.99 pay 50% of tour price</li>
			<li>12+ pay full tour price as per adult person.</li>
		</ul>

		<h4 class="text-lg text-gray-700 font-semibold mt-4">Notes:</h4>
		<p>Child pricing applies to children who share rooms with their parents (Max 2 Children in one
			Room)
		</p>
	</div>
</section>