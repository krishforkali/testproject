<!-- filepath: /c:/Users/KRISH/Desktop/SMAPLE TESST2/form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="social-media">
            <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
            <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
            <a href="#"><img src="images/discord.png" alt="Discord"></a>
            <a href="#"><img src="images/pinterest-logo.png" alt="pinterest"></a>
        </div>
        <div class="contact-details">
            <p>Customer Care 24/7/365: +55 413 526 5261 | support@domainname.com</p>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="main-nav">
        <div class="logo">
            <img src="images/logo .png" alt="Company Logo">
        </div>
        <ul class="nav-menu">
            <li><a href="index3.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="form.php">Form</a></li>
        </ul>
    </nav>

    <!-- Contact Form -->
    <section class="contact-form">
        <h2>Contact Us</h2>
        <form method="POST" action="https://formsubmit.co/krishmotghare668@gmail.com" id="contact-form">
            <input type="hidden" name="_subject" value="New Contact Form Submission">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_cc" value="fore.meenakshik@gmail.com,fore.furquan@gmail.com">
            <input type="hidden" id="age-input" name="age">
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            <input type="text" name="first-name" placeholder="First Name" required>
            <input type="text" name="last-name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <div>
                <select name="country-code" required>
                    <option value="+1">+1 (USA)</option>
                    <option value="+91">+91 (India)</option>
                    <!-- Add more country codes as needed -->
                </select>
                <input type="tel" name="mobile" placeholder="Your Mobile Number" pattern="[0-9]{10}" required>
            </div>
            <div>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" onchange="calculateAge()" required>
                <span id="age"></span>
            </div>
            <select name="country" required>
                <option value="USA">USA</option>
                <option value="India">India</option>
                <!-- Add more countries as needed -->
            </select>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Company Name. All rights reserved.</p>
        <div class="social-links">
            <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
            <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/youtube.png" alt="YouTube"></a>
            <a href="#"><img src="images/discord.png" alt="Discord"></a>
            <a href="#"><img src="images/pinterest-logo.png" alt="pinterest"></a>
        </div>
    </footer>

    <script>
        function calculateAge() {
            const dob = document.getElementById('dob').value;
            const dobDate = new Date(dob);
            const ageDifMs = Date.now() - dobDate.getTime();
            const ageDate = new Date(ageDifMs);
            const age = Math.abs(ageDate.getUTCFullYear() - 1970);
            document.getElementById('age').innerText = `Age: ${age}`;
            document.getElementById('age-input').value = age;
        }
    </script>

</body>
</html>