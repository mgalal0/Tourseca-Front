<!-- Scroll to Top Button -->
<button id="scrollToTopBtn"
	class="fixed bottom-5 right-5 w-10 h-10 rounded-full text-white bg-[#095763] hidden shadow-lg transition-opacity duration-300">
	<i class="fas fa-chevron-up"></i>
</button>

<script>
	// Get the button
	const scrollToTopBtn = document.getElementById("scrollToTopBtn");

	// Show the button when the user scrolls down
	window.onscroll = function () {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			scrollToTopBtn.classList.remove("hidden");
		} else {
			scrollToTopBtn.classList.add("hidden");
		}
	};

	// Scroll to top function
	scrollToTopBtn.onclick = function () {
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	};
</script>