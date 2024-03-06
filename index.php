<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Global Grid Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <?php include 'includes/navbar.php' ?>

    <?php include 'includes/carousel.php' ?>

    <?php include 'includes/facts.php' ?>

    <?php include 'includes/about_us.php' ?>

    <?php include 'includes/process.php' ?>

    <?php include 'includes/case_study.php' ?>

    <?php include 'includes/tools.php' ?>

    <?php include 'includes/faq.php' ?>

    <?php include 'includes/contact.php' ?>

    <?php include 'includes/footer.php' ?>




    <!-- Back to Top -->
    <a href="index.php" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var isDragging = false;
        var startPosition = 0;
        var deltaX = 0;

        $('#draggableContainer').on('mousedown touchstart', function(event) {
            isDragging = true;
            startPosition = event.pageX || event.originalEvent.touches[0].pageX;
        });

        $(document).on('mousemove touchmove', function(event) {
            if (isDragging) {
                var currentPosition = event.pageX || event.originalEvent.touches[0].pageX;
                deltaX = startPosition - currentPosition;
                $('#draggableContainer').css('transform', 'translateX(-' + deltaX + 'px)');
            }
        });

        $(document).on('mouseup touchend', function() {
            if (isDragging) {
                isDragging = false;
                if (Math.abs(deltaX) > 50) {
                    // Simulate inertia effect
                    var sign = deltaX < 0 ? -1 : 1;
                    var inertia = setInterval(function() {
                        deltaX -= sign * 5;
                        $('#draggableContainer').css('transform', 'translateX(-' + deltaX + 'px)');
                        if (Math.abs(deltaX) <= 0) {
                            clearInterval(inertia);
                        }
                    }, 16);
                } else {
                    $('#draggableContainer').css('transform', 'translateX(0)');
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#team-carousel').owlCarousel({
       
            nav: false
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#send-message-btn").click(function() {
            var senderName = $("#sender-name").val();
            var senderEmail = $("#sender-email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();

            var mailtoLink = "https://mail.google.com/mail/?view=cm&fs=1&to=ivy@globalgridsolutions.org" + 
                            "&su=" + encodeURIComponent(subject) +
                            "&body=" + encodeURIComponent("Name: " + senderName + "\n" +           
                                                           "Message: " + message);

            // Open Gmail compose window with pre-filled email
            window.location.href = mailtoLink;
        });
    });
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</html>