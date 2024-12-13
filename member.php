<?php
include 'templates/header.php';
include 'templates/footer.php';

renderHeader('Members Page');
?>
<main>
    <!-- Page Title -->
    <h1>Welcome to Our Members Page</h1>
    <p>We are proud to introduce our valued clients. These members have partnered with us and are an integral part of our community. Here, you can learn more about them and their journeys with our platform.</p>
    
    <!-- Client Profiles -->
    <section>
        <h2>Our Valued Members</h2>
        <div class="member-profile">
            <img src="./images/image_2.png" alt="Photo of Client 1" />
            <h3>Client Name: John Doe</h3>
            <p><strong>Joined:</strong> January 2023</p>
            <p>John is an entrepreneur leveraging our platform to grow his online business. His dedication and creativity have inspired many in our community.</p>
        </div>
        <div class="member-profile">
            <img src="./images/image_3.png" alt="Photo of Client 2" />
            <h3>Client Name: Jane Smith</h3>
            <p><strong>Joined:</strong> March 2023</p>
            <p>Jane is a freelance graphic designer who uses our services to connect with clients worldwide. Her innovative designs are a testament to her skills.</p>
        </div>
        <div class="member-profile">
            <img src="./images/image_4.webp" alt="Photo of Client 3" />
            <h3>Client Name: Carlos Rivera</h3>
            <p><strong>Joined:</strong> June 2023</p>
            <p>Carlos, a software developer, utilizes our tools to enhance his productivity and collaborate with global teams.</p>
        </div>
    </section>

    <!-- Testimonials -->
    <section>
        <h2>What Our Members Say</h2>
        <blockquote>
            <p>"This platform has transformed the way I work. The tools and support are exceptional!"</p>
            <cite>- Jane Smith</cite>
        </blockquote>
        <blockquote>
            <p>"I’ve been able to achieve so much more with the resources provided here. Highly recommended!"</p>
            <cite>- Carlos Rivera</cite>
        </blockquote>
    </section>

    <!-- Call to Action -->
    <section>
        <h2>Become a Member</h2>
        <p>Are you ready to join a thriving community of professionals and entrepreneurs? Sign up today and take the first step toward success!</p>
        <a href="register.php" class="button">Join Us</a>
    </section>
</main>
<?php
renderFooter();
?>
