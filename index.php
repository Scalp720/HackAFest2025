<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
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

    <section class="index-section">
    <h1>What is Hack4Gov CTF?</h1>
    <p>Hack4Gov CTF (Capture the Flag) is an exciting cybersecurity competition organized by DICT. It has achieved back-to-back championships and proudly represented Western Visayas on a national level.</p>
    <p>Do you want to be part of it and capture the flag of being a Grand Slam Champion while representing ISAT-U? Join us and showcase your skills!</p>
    <p class="hideme">All journeys begin somewhere—try opening index.php<p>
        <!-- Sometimes, the answer is hidden in plain sight—but encoded for safekeeping.
        Start by following the drive to your destination.
        What you find there might look like nonsense, but with the right lens, it paints a picture.
        Decode the message and see what’s revealed. -->
        <!-- https://drive.google.com/file/d/1rTy0Zs-HSd7WO_Q69RlFMlRYD0mzbDux/view?usp=sharing -->
    <div class="image-gallery">
      <h2 class="image-gallery-title">Highlights</h2>
      <div class="image-gallery-row">
        <img src="./assets/img/img1.jpg" alt="Team Championship">
        <img src="./assets/img/img5.jpg" alt="Hack4Gov Logo">
        <img src="./assets/img/img4.jpg" alt="Western Visayas Representation">
        <img src="./assets/img/img6.jpg" alt="Team Championship">
        <img src="./assets/img/img7.jpg" alt="Hack4Gov Logo">
      </div>
    </div>
  </section>
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