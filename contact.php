<?php
$pageTitle = "Sweet Bliss - Home";
ob_start();
?>
<!-- ================= PAGE HEADER ================= -->
<section class="contact-header">
    <h1>Contact Us</h1>
    <p>
        We'd love to hear from you. Let's make your day sweeter!
    </p>
</section>
<!-- ================= CONTACT SECTION ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <!-- ================= CONTACT INFO ================= -->
            <div class="col-lg-5">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>
                        Have a question, suggestion or need help with
                        your order? Feel free to contact us.
                        We are always happy to help!
                    </p>
                    <!-- Phone -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p>+91 98765 43210</p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p>sweetbliss@gmail.com</p>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h5>Address</h5>
                            <p>Rajkot, Gujarat, India</p>
                        </div>
                    </div>
                    <!-- Timing -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h5>Opening Hours</h5>
                            <p>Monday - Sunday : 9:00 AM - 9:00 PM</p>
                        </div>
                    </div>
                    <!-- Social Media -->
                    <div class="social-links">
                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ================= CONTACT FORM ================= -->
            <div class="col-lg-7">
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <p>
                        Fill in the form below and we'll get back to you soon.
                    </p>
                    <form action="#" method="post">
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Full Name
                                </label>
                                <input type="text"
                                    class="form-control"
                                    placeholder="Enter your name"
                                    data-validation="required alpha" name="fullname">
                                <span class="error text-danger" id="fullnameError"></span>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Email Address
                                </label>
                                <input type="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    data-validation="required email" name="email">
                                <span class="error text-danger" id="emailError"></span>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Mobile Number
                                </label>
                                <input type="tel"
                                    class="form-control"
                                    placeholder="Enter mobile number"
                                    data-validation="required numeric min max"
                                    data-min="10" data-max="10" name="mobile">
                                <span class="error text-danger" id="mobileError"></span>
                            </div>

                            <!-- Subject -->
                            <div class="col-md-6">
                                <label class="form-label">
                                    Subject
                                </label>
                                <input type="text"
                                    class="form-control"
                                    placeholder="Enter subject"
                                    data-validation="required"
                                    name="address">
                                <span class="error text-danger" id="addressError"></span>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label class="form-label">
                                    Your Message
                                </label>
                                <textarea class="form-control"
                                    rows="5"
                                    placeholder="Write your message..."
                                    data-validation="required" name="address"></textarea>
                                <span class="error text-danger" id="addressError"></span>
                            </div>

                            <!-- Button -->
                            <div class="col-12">
                                <button type="submit" class="send-btn" name="regbtn">
                                    <i class="fa-solid fa-paper-plane me-2"></i>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= FAQ ================= -->
<section class="faq-section">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>
                Some common questions from our sweet lovers
            </p>
        </div>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">
                        Do you provide home delivery?
                    </button>
                </h2>
                <div id="faq1"
                    class="accordion-collapse collapse "
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, Sweet Bliss provides convenient
                        home delivery for your sweet orders.
                    </div>
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">
                        How can I place an order?
                    </button>
                </h2>
                <div id="faq2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Browse our products, select your favourite
                        sweets and place your order after logging in.
                    </div>
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3">
                        What types of sweets are available?
                    </button>
                </h2>
                <div id="faq3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer Indian sweets, Bengali sweets,
                        Rajasthani sweets and delicious desserts.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>