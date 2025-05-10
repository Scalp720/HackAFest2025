<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="global.css">
    <title>Landing Page</title>
</head>
<body>
   
    <?php include 'header.php'; ?>

    <!-- Welcome Hacker Animation -->
    <main class="index-main">
        <div class="animation-container">
            <div class="typing-effect">Welcome Hacker</div>
            <div class="glitch">Welcome Hacker</div>
        </div>
    </main>

    <script>
        const typingEffect = document.querySelector('.typing-effect');
        const glitchEffect = document.querySelector('.glitch');

        function toggleAnimations() {
            typingEffect.style.display = 'block';
            glitchEffect.style.display = 'none';

            // Reset typing animation
            typingEffect.style.animation = 'none';
            requestAnimationFrame(() => {
                typingEffect.style.animation = 'typing 2s steps(20, end), blink 0.5s step-end infinite alternate';
            });

            // Show glitch after typing completes
            setTimeout(() => {
                typingEffect.style.display = 'none';
                glitchEffect.style.display = 'block';
            }, 2000); // Typing animation duration
        }

        // Repeat every 4 seconds
        setInterval(toggleAnimations, 4000);

        // Start the first cycle
        toggleAnimations();
    </script>
</body>
</html>
