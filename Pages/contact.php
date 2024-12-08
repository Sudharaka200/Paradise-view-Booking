<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradise view | Contact Us</title>
</head>
<body>

    <!-- Head file -->
    <?php include '../library/head.php'; ?>
    <!-- Head file -->

    <!-- area 1 -->
        <div>
            <div class="contact-area1-img-container" >
                <img src="../images/hero2.png" class="contact-area1-img1" alt="">
                <h2 class="h1-1-area2-home contact-area1-h2-overlay-text ">Contact Us</h2>
                <p class="p1-area2-home font-second-p contact-area1-p-overlay-text">The elegant luxury bedrooms in this gallery showcase custom interior designs & decorating ideas. View pictures and find your perfect luxury bedroom design.</p>
            </div>
        </div>
    <!-- area 1 -->
    <!-- area 2 -->
        <div>
            <form class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" id="fullname" name="fullname" placeholder="e.g. John Becker">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="johnbecker@gmail.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </form>
        </div>
    <!-- area 2 -->

    <!-- footer -->
        <div class="explore-footer-margin">
            <?php include '../library/footer.php'; ?>
        </div>
    <!-- footer -->
</body>
</html>