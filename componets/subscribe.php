<section class="subscribe-section py-24">
    <!-- Background Planes -->
    <div class="plane-icon plane-left">
        <img src="images/icons/subs.svg" alt="Decorative plane" width="200" height="120">
    </div>
    <div class="plane-icon plane-right">
        <img src="images/icons/subs1.svg" alt="Decorative plane"  width="200" height="120">
    </div>

    <div class="container mx-auto px-4 text-center">
        <h2 class="subscribe-title text-4xl font-semibold mb-4">Subscribe Now</h2>
        <p class="text-white text-lg mb-8">Enter your e-mail to Subscribe and get exclusive deals & offer</p>
        
        <!-- Subscribe Form -->
        <div class="max-w-xl mx-auto subscribe-form">
            <form class="relative flex" action="process_subscription.php" method="POST">
                <div class="input-wrapper">
                    <i class="fas fa-envelope email-icon"></i>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="E-mail" 
                        class="subscribe-input text-gray-700 focus:outline-none"
                        required
                    >
                </div>
                <button 
                    type="submit" 
                    class="absolute right-0 bg-[#C8E677] text-[#06414A] font-medium px-8 py-2 rounded-full hover:bg-[#b3ff1a] transition-colors mr-2 mt-1"
                >
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    
    .subscribe-section {
            background-color: #276C76;
            position: relative;
            overflow: hidden;
        }
        
        .plane-icon {
            opacity: 0.7;
            position: absolute;
        }
        
        .plane-left {
            left: 13%;
            top: 50%;
        }
        
        .plane-right {
            right: 10%;
            top: 10%;
        }
        

        .input-wrapper {
            position: relative;
            width: 100%;
        }
        
        .email-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }
        
        .subscribe-input {
            width: 100%;
            padding: 12px 12px 12px 45px;
            border-radius: 9999px;
        }
        
        @media (max-width: 768px) {
            .subscribe-form {
                width: 90%;
            }
            .plane-left {
            left: 1%;
            top: 70%;
        }
        
        .plane-right {
            right: 1%;
            top: 0%;
        }
        

        }
        .subscribe-title {
            color: #C5FF4A;

            font-family: "Berkshire Swash", serif;
font-size: 48px !important;
font-weight: 400 !important;
line-height: 76.8px !important;
text-align: center !important;
z-index: 2;
        }

.subscribe-section p {
font-size: 24px !important;
font-weight: 400 !important;
line-height: 38.4px !important;
z-index: 3;
}


@media (max-width: 768px) {
    .subscribe-section h2 {
        font-size: 36px !important;
        line-height: 57.6px !important;
    }

    .subscribe-section p {
        font-size: 14px        !important;
        line-height: 22.4p!important;
    }
}
    </style>

<script>
document.querySelector('.subscribe-form form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.email.value;
    
    if (validateEmail(email)) {
        console.log('Email submitted:', email);
        this.reset();
    } else {
        alert('Please enter a valid email address');
    }
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
</script>