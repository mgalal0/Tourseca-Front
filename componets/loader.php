  <style>
        /* Loader container */
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #2F7371 0%, #1a4140 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }

        .loader-container.fade-out {
            opacity: 0;
            pointer-events: none;
        }

        /* Main content wrapper */
        .loader-content {
            text-align: center;
            position: relative;
        }

        /* Logo and brand */
        .brand {
            margin-bottom: 30px;
            position: relative;
        }

        .brand-logo {
            width: 200px;
            height: 60px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .brand-text {
            color: #fff;
            font-size: 42px;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            letter-spacing: 2px;
            position: relative;
            display: inline-block;
        }

        /* Animated elements */
        .pyramid-scene {
            width: 200px;
            height: 200px;
            margin: 20px auto;
            position: relative;
            perspective: 1000px;
        }

        .pyramid {
            width: 100px;
            height: 100px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-style: preserve-3d;
            animation: pyramidSpin 4s infinite linear;
        }

        .pyramid-side {
            position: absolute;
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 86.6px solid rgba(255, 255, 255, 0.2);
        }

        .pyramid-side:nth-child(1) { transform: rotateY(0deg) translateZ(28.87px); }
        .pyramid-side:nth-child(2) { transform: rotateY(120deg) translateZ(28.87px); }
        .pyramid-side:nth-child(3) { transform: rotateY(240deg) translateZ(28.87px); }
        .pyramid-side:nth-child(4) {
            transform: rotateX(90deg) translateY(-28.87px);
            border-bottom: 100px solid rgba(255, 255, 255, 0.3);
        }

        /* Floating elements */
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .element {
            position: absolute;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        /* Progress bar */
        .progress-bar {
            width: 200px;
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
        }

        .progress {
            width: 0%;
            height: 100%;
            background: #fff;
            position: absolute;
            animation: loading 2s ease-in-out infinite;
        }

        /* Loading text */
        .loading-text {
            color: #fff;
            font-size: 18px;
            margin-top: 20px;
            font-family: Arial, sans-serif;
            opacity: 0.9;
        }

        .loading-text span {
            display: inline-block;
            animation: bounce 1.5s infinite;
        }

        /* Animations */
        @keyframes pyramidSpin {
            0% { transform: translate(-50%, -50%) rotateY(0deg); }
            100% { transform: translate(-50%, -50%) rotateY(360deg); }
        }

        @keyframes loading {
            0% { width: 0%; }
            50% { width: 100%; }
            100% { width: 0%; }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* Add dot animation */
        .loading-dots:after {
            content: '.';
            animation: dots 2s infinite;
        }

        @keyframes dots {
            0%, 20% { content: '.'; }
            40% { content: '..'; }
            60% { content: '...'; }
            80%, 100% { content: ''; }
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .brand-text {
                font-size: 32px;
            }

            .pyramid-scene {
                width: 150px;
                height: 150px;
            }

            .progress-bar {
                width: 150px;
            }
        }
    </style>
    <!-- Loader Container -->
    <div class="loader-container">
        <div class="loader-content">
            <!-- Brand -->
            <div class="brand">
                <div class="brand-text">Touresca</div>
            </div>

            <!-- Pyramid Animation -->
            <div class="pyramid-scene">
                <div class="pyramid">
                    <div class="pyramid-side"></div>
                    <div class="pyramid-side"></div>
                    <div class="pyramid-side"></div>
                    <div class="pyramid-side"></div>
                </div>
            </div>

            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress"></div>
            </div>

            <!-- Loading Text -->
            <div class="loading-text">
                Preparing your adventure<span class="loading-dots"></span>
            </div>
        </div>
    </div>

    <!-- Your website content goes here -->
    <div class="main-content">
        <!-- Your website content -->
    </div>

    <script>
        // Create floating elements dynamically
        function createFloatingElements() {
            const floatingContainer = document.createElement('div');
            floatingContainer.className = 'floating-elements';
            
            // Create multiple floating elements
            for (let i = 0; i < 10; i++) {
                const element = document.createElement('div');
                element.className = 'element';
                
                // Random size between 5 and 15 pixels
                const size = Math.random() * 10 + 5;
                element.style.width = `${size}px`;
                element.style.height = `${size}px`;
                
                // Random position
                element.style.left = `${Math.random() * 100}%`;
                element.style.top = `${Math.random() * 100}%`;
                
                // Random animation duration between 3 and 6 seconds
                const duration = Math.random() * 3 + 3;
                element.style.animation = `float ${duration}s infinite ease-in-out`;
                
                // Random animation delay
                element.style.animationDelay = `${Math.random() * 2}s`;
                
                floatingContainer.appendChild(element);
            }
            
            document.querySelector('.loader-content').appendChild(floatingContainer);
        }

        // Initialize floating elements
        createFloatingElements();

        // Handle loader hiding
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.querySelector('.loader-container');
            
            // Function to hide loader
            function hideLoader() {
                loader.classList.add('fade-out');
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }

            // Hide loader when page is fully loaded
            window.addEventListener('load', hideLoader);

            // Fallback: Hide loader after 5 seconds if page load takes too long
            setTimeout(() => {
                if (!loader.classList.contains('fade-out')) {
                    hideLoader();
                }
            }, 5000);

            // Add animation delays to loading text
            const text = "LOADING";
            const loadingText = document.querySelector('.loading-text');
            loadingText.innerHTML = text.split('').map((char, i) => 
                `<span style="animation-delay: ${i * 0.1}s">${char}</span>`
            ).join('');
        });
    </script>
