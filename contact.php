<?php include 'header.php'; ?>

<h2 class="text-center text-primary" style="margin-top: 0; margin-bottom: 0;">Contact Us</h2>


    <div class="row">
        <!-- Left Column: Contact Form -->
        <div class="col-md-6" style="border: 2px solid #007bff; padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
            <h4 class="text-center text-info mb-4">Contact Form</h4>
            <form method="POST" action="sendmail.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Right Column: Bishop House Google Map and Address -->
        <div class="col-md-6" style="border: 2px solid #007bff; padding: 20px; border-radius: 8px; background-color: #f9f9f9;">
            <h4 class="text-center text-info mb-4">Kuzhithurai Diocese Bishop House</h4>

            <!-- Google Map Embed -->
            <div class="embed-responsive embed-responsive-16by9 mb-4">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15791.896171828306!2d77.23587!3d8.305378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b045563b8e51039%3A0xdae29cfae189d180!2sBishop&#39;s%20House%20-%20Roman%20Catholic%20Diocese%20of%20Kuzhithurai!5e0!3m2!1sen!2sin!4v1732641793681!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
            </div>
<br>
<center>
            <!-- Bishop House Address -->
            <div class="address">
                <p><strong>Address:</strong></p>
                <p>Catholic Sangam<br>
                   Bishop’s House,<br>
                   P.B. No.1<br>
                   Unnamalaikadai – 629179<br>
                   K.K.Dist, Tamil Nadu
                </p>

                <p><strong>Phone:</strong><br>
                   04651-272077
                </p>
                <p><strong>Email:</strong><br>
                   <a href="mailto:catholicsangam@gmail.com">catholicsangam@gmail.com</a>
                </p>
</center>

<?php include 'footer.php'; ?>
