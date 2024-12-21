<style>
	.content {
		overflow: hidden;
		transition: max-height 0.5s ease-in-out;
	}
</style>
<section class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto relative mb-16">
	<h3 class="text-[<?= $_primary ?>] text-[26px] md:text-[36px] font-semibold mb-6">Itinerary</h3>
	<p class="text-gray-500 leading-8 mt-0 mb-6 text-sm md:text-base">
		Discover the wonders of ancient Egypt with this unforgettable adventure in Cairo. Explore the
		bustling capital, a vibrant blend of history and culture. Visit the iconic Pyramids of Giza and
		the timeless Sphinx, marveling at these extraordinary ancient monuments. Discover the treasures
		of the Egyptian Museum, home to Tutankhamun's golden mask and countless artifacts of the
		pharaohs.
	</p>
	<div class="flex justify-between items-start flex-wrap">
		<iframe style="width: 100%; height: 500px;"
			src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3456.118304895875!2d31.206243676150186!3d30.04563502189457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x14584734f24511b3%3A0xa987b2e447882ca1!2sGiza%2C%20Egypt!3m2!1d29.9764804!2d31.131302!4m5!1s0x14583f7dd7c91b7f%3A0x691fc7b52832ed27!2sCairo%20Opera%20House%2C%20doki%2C%20Cairo%20Governorate%2C%20Egypt!3m2!1d30.0424315!2d31.2243288!5e0!3m2!1sen!2seg!4v1697049926767!5m2!1sen!2seg"
			allowfullscreen="" loading="lazy">
		</iframe>

		<div class="mt-12 w-full">
			<div class="relative mb-10">
				<div class="absolute left-0 top-0 h-full border-2 border-dashed border-gray-300"></div>
				<div class="flex items-start ml-4">
					<img loading="lazy" src="images/icons/location.svg" alt="Location icon"
						class="absolute -left-[10px] -top-[28px] w-6 h-6" />
					<div class="rounded-lg p-6 pt-0 w-full">
						<div onclick="toggleContent(this)"
							class="header flex cursor-pointer justify-between items-center bg-[#F4F8F3] px-2 py-3 rounded-lg text-[<?= $_primary ?>] mb-2">
							<h2 class="text-xl  font-semibold ">
								Day 1: Arrival
								and Giza Highlights - 1 Night
							</h2>
							<img loading="lazy" src="images/icons/arrow-top.svg" alt="arrow-top icon" class="arrow-top w-6 h-6" />
						</div>

						<div class="content">
							<img loading="lazy" src="images/destinations/great-pyramids-of-giza.jpg" alt="great-pyramids-of-giza"
								class="w-full h-[150px] md:h-[300px] object-cover rounded-xl">

							<div class="space-y-4 text-gray-700 my-4">
								<ul class="list-disc pl-5 flex flex-col gap-2">
									<li>
										<strong>Arrival in Cairo:</strong> Transfer to your hotel and relax.
									</li>
									<li>
										<strong>Afternoon:</strong> Visit the Pyramids of Giza, the Great
										Sphinx, and explore the panoramic views of the desert.
									</li>
									<li>
										<strong>Evening:</strong> Enjoy the Sound and Light Show at the Giza
										Plateau.
									</li>
									<li>
										<div class=" flex items-center space-x-2">
											<img loading="lazy" src="images/icons/break-fast.svg" alt="break-fast icon" />
											<span><strong>Included meals:</strong> Breakfast</span>
										</div>
									</li>
									<li>
										<div class="flex flex-col">

											<div class="flex items-center space-x-2">
												<img loading="lazy" src="images/icons/bed.svg" alt="bed icon" />
												<span><strong>Accommodation:</strong></span>
											</div>

											<!-- room card -->
											<div
												class="bg-[#F9FBF9] mt-2 rounded-[20px] max-w-[272px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
												<div class="relative">
													<div class="overlay"></div>
													<img loading="lazy" src="images/single-tour/room.jpg" alt="Luxor Temple"
														class="w-full h-[250px] object-cover">
													<!-- Card badges -->
													<div class="absolute top-4 left-4">
														<p class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
															<img loading="lazy" src="images/icons/star.svg" alt="Star icon"
																class="w-[14px] md:w-[18px]" />

															<span class="text-xs">4.8</span>
														</p>

													</div>

													<!-- Image counter -->
													<div class="absolute bottom-4 right-4">
														<div
															class="w-16 md:w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
															<button class="prev hover:-translate-x-1 duration-300">
																<img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
																	class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
															</button>
															<span class="text-[<?= $_primary_two ?>] text-xs md:text-base">1/4</span>
															<button class="next hover:translate-x-1 duration-300">
																<img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
																	class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

															</button>
														</div>
													</div>
												</div>

												<div class="p-6">
													<h3 class="text-xl font-semibold mb-2">Cairo Trips</h3>
													<p class="text-gray-600 text-sm mb-6">A private visit to
														Queen
														Nefertari’s Tomb, known as
														the
														with an expert Egyptologist as the guide.</p>

												</div>
											</div>
										</div>
									</li>
									<!-- Activities : -->
									<li>
										<div class="flex items-center space-x-2">
											<img loading="lazy" src="images/icons/activity.svg" alt="activity icon" />
											<span>Activities :</span>
										</div>
										<div class="mt-2 flex flex-col gap-2">
											<div class="w-full bg-[#F9FBF9] rounded-lg shadow-lg overflow-hidden flex relative">
												<img src="images/single-tour/nile-city.jpg" alt="Nile River Cruise"
													class="w-1/3 h-auto object-cover">


												<div class="p-6 w-2/3">
													<div
														class="absolute top-2 right-2 bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] text-sm px-3 py-1 rounded-xl">
														Included</div>
													<h2 class="text-xl font-semibold mb-2">Nile River Cruise
													</h2>
													<p class="text-gray-600 mb-4">A Nile River cruise is one
														of the most enchanting ways to experience Cairo’s
														beauty.</p>
													<div class="flex justify-start gap-2 items-center text-[<?= $_primary ?>]">
														<img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20" height="20">
														<span class="">Start from:</span>
														<span class="font-semibold">$95/person</span>
													</div>
												</div>
											</div>
											<div class="w-full bg-[#F9FBF9] rounded-lg shadow-lg overflow-hidden flex relative">
												<img src="images/single-tour/nile-city.jpg" alt="Nile River Cruise"
													class="w-1/3 h-auto object-cover">


												<div class="p-6 w-2/3">
													<div
														class="absolute top-2 right-2 bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] text-sm px-3 py-1 rounded-xl">
														Included</div>
													<h2 class="text-xl font-semibold mb-2">Nile River Cruise
													</h2>
													<p class="text-gray-600 mb-4">A Nile River cruise is one
														of the most enchanting ways to experience Cairo’s
														beauty.</p>
													<div class="flex justify-start gap-2 items-center text-[<?= $_primary ?>]">
														<img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20" height="20">
														<span class="">Start from:</span>
														<span class="font-semibold">$95/person</span>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="relative mb-10">
				<div class="absolute left-0 top-0 h-full border-2 border-dashed border-gray-300"></div>
				<div class="flex items-start ml-4">
					<img loading="lazy" src="images/icons/location.svg" alt="Location icon"
						class="absolute -left-[10px] -top-[28px] w-6 h-6" />
					<img loading="lazy" src="images/icons/flag.svg" alt="flag icon"
						class="absolute -left-[10px] -bottom-[28px] w-6 h-6" />
					<div class="rounded-lg p-6 pt-0 w-full">
						<div onclick="toggleContent(this)"
							class="header flex cursor-pointer justify-between items-center bg-[#F4F8F3] px-2 py-3 rounded-lg text-[<?= $_primary ?>] mb-2">
							<h2 class="text-xl  font-semibold ">
								Day 1: Arrival
								and Giza Highlights - 1 Night
							</h2>
							<img loading="lazy" src="images/icons/arrow-top.svg" alt="arrow-top icon" class="arrow-top w-6 h-6" />
						</div>
						<div class="content">
							<img loading="lazy" src="images/destinations/great-pyramids-of-giza.jpg" alt="great-pyramids-of-giza"
								class="w-full h-[150px] md:h-[300px] object-cover rounded-xl">

							<div class="content space-y-4 text-gray-700 my-4">
								<ul class="list-disc pl-5 flex flex-col gap-2">
									<li>
										<strong>Arrival in Cairo:</strong> Transfer to your hotel and relax.
									</li>
									<li>
										<strong>Afternoon:</strong> Visit the Pyramids of Giza, the Great
										Sphinx, and explore the panoramic views of the desert.
									</li>
									<li>
										<strong>Evening:</strong> Enjoy the Sound and Light Show at the Giza
										Plateau.
									</li>
									<li>
										<div class=" flex items-center space-x-2">
											<img loading="lazy" src="images/icons/break-fast.svg" alt="break-fast icon" />
											<span><strong>Included meals:</strong> Breakfast</span>
										</div>
									</li>
									<li>
										<div class="flex flex-col">

											<div class="flex items-center space-x-2">
												<img loading="lazy" src="images/icons/bed.svg" alt="bed icon" />
												<span><strong>Accommodation:</strong></span>
											</div>

											<!-- room card -->
											<div
												class="bg-[#F9FBF9] mt-2 rounded-[20px] max-w-[272px] shadow-[0_2px_8px_rgba(0,0,0,0.08)] overflow-hidden ">
												<div class="relative">
													<div class="overlay"></div>
													<img loading="lazy" src="images/single-tour/room.jpg" alt="Luxor Temple"
														class="w-full h-[250px] object-cover">
													<!-- Card badges -->
													<div class="absolute top-4 left-4">
														<p class="bg-white/80 backdrop-blur-[2px] px-2 py-0.5 rounded-full flex items-center gap-1">
															<img loading="lazy" src="images/icons/star.svg" alt="Star icon"
																class="w-[14px] md:w-[18px]" />

															<span class="text-xs">4.8</span>
														</p>

													</div>

													<!-- Image counter -->
													<div class="absolute bottom-4 right-4">
														<div
															class="w-16 md:w-20 py-1 rounded-xl bg-gray-100 opacity-75 flex items-center justify-around">
															<button class="prev hover:-translate-x-1 duration-300">
																<img loading="lazy" src="images/icons/arrow-left-w.svg" alt="Arrow left icon"
																	class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />
															</button>
															<span class="text-[<?= $_primary_two ?>] text-xs md:text-base">1/4</span>
															<button class="next hover:translate-x-1 duration-300">
																<img loading="lazy" src="images/icons/arrow-right-w.svg" alt="Arrow right icon"
																	class="group-hover:translate-x-1 duration-300 w-[14px] md:w-[18px]" />

															</button>
														</div>
													</div>
												</div>

												<div class="p-6">
													<h3 class="text-xl font-semibold mb-2">Cairo Trips</h3>
													<p class="text-gray-600 text-sm mb-6">A private visit to
														Queen
														Nefertari’s Tomb, known as
														the
														with an expert Egyptologist as the guide.</p>

												</div>
											</div>
										</div>
									</li>
									<!-- Activities : -->
									<li>
										<div class="flex items-center space-x-2">
											<img loading="lazy" src="images/icons/activity.svg" alt="activity icon" />
											<span>Activities :</span>
										</div>
										<div class="mt-2 flex flex-col gap-2">
											<div class="w-full bg-[#F9FBF9] rounded-lg shadow-lg overflow-hidden flex relative">
												<img src="images/single-tour/nile-city.jpg" alt="Nile River Cruise"
													class="w-1/3 h-auto object-cover">


												<div class="p-6 w-2/3">
													<div
														class="absolute top-2 right-2 bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] text-sm px-3 py-1 rounded-xl">
														Included</div>
													<h2 class="text-xl font-semibold mb-2">Nile River Cruise
													</h2>
													<p class="text-gray-600 mb-4">A Nile River cruise is one
														of the most enchanting ways to experience Cairo’s
														beauty.</p>
													<div class="flex justify-start gap-2 items-center text-[<?= $_primary ?>]">
														<img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20" height="20">
														<span class="">Start from:</span>
														<span class="font-semibold">$95/person</span>
													</div>
												</div>
											</div>
											<div class="w-full bg-[#F9FBF9] rounded-lg shadow-lg overflow-hidden flex relative">
												<img src="images/single-tour/nile-city.jpg" alt="Nile River Cruise"
													class="w-1/3 h-auto object-cover">


												<div class="p-6 w-2/3">
													<div
														class="absolute top-2 right-2 bg-[<?= $_yellow ?>] text-[<?= $_primary ?>] text-sm px-3 py-1 rounded-xl">
														Included</div>
													<h2 class="text-xl font-semibold mb-2">Nile River Cruise
													</h2>
													<p class="text-gray-600 mb-4">A Nile River cruise is one
														of the most enchanting ways to experience Cairo’s
														beauty.</p>
													<div class="flex justify-start gap-2 items-center text-[<?= $_primary ?>]">
														<img loading="lazy" src="images/icons/dollar.svg" alt="dollar icon" width="20" height="20">
														<span class="">Start from:</span>
														<span class="font-semibold">$95/person</span>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script>
	function toggleContent(element) {
		const content = element.nextElementSibling;
		const icon = element.querySelector('.arrow-top'); // Find the icon within the header element

		icon.classList.toggle('rotate-180'); // Rotate icon
		if (content.classList.contains("hidden")) {
			content.classList.remove("hidden");
			content.style.maxHeight = content.scrollHeight + "px";
		} else {
			content.style.maxHeight = "0";
			setTimeout(() => content.classList.add("hidden"), 500);
		}
	}
</script>