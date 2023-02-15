<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div w3-include-html="modules/navigation_bar.php"></div>
    <div class="container">
        <h2 id="trapstronauts">
            <a href="https://www.matthewgreen.gg/trapstronauts.php">Trapstronauts</a>
        </h2>

        <h3 id="links">
            Links<a href="#links">#</a>
        </h3>
        <ul>
            <li><a href="https://git.matthewgreen.gg/matthewgreen/Trapstronauts.git">Personal Git Repo</a></li>
            <li><a href="https://github.com/greenmatthew/Trapstronauts">Github Repo</a></li>
        </ul>

        <h3 id="content">
            Content <a href="#content">#</a>
        </h3>
        <ul>
            <li><a href="#purpose">Purpose</a></li>
            <li><a href="#summary">Summary</a></li>
            <div class="container">
                <ul>
                    <li><a href="#demo_video">Demo Video</a></li>
                </ul>
            </div>
        </ul>

        <br>

        <h2 id="purpose">Purpose <a href="#purpose">#</a></h2>
        <p>
        This is a video game project made for the 2022 Fall semester CSE Game Design Special Topics course at the University of Texas at Arlington.
        </p>

        <h2 id="summary">Summary <a href="#summary">#</a></h2>
        <p>
        It is a local multiplayer party game, which draws heavy inspirations from another video game called Ultimate Chicken Horse. We borrow the game loop from that title and fit it around a new sci-fi theme. That being 2-4 players vote on a map. Then a proportional voting system chooses at random evenly between each players' vote and then the players then proceed to play multiple rounds on it. The players all have the same goal get to the finish line as soon as possible. However, there is a catch, at the beginning of each round the players all place a single item from a small random assortment of items. Some of these items being platforms others being traps. Depending on what the players choose and place it can either make making it to the finish line easier or harder. These traps as well as environmental hazards on the map can kill players and stop them from making it to the finish. At the end of a round, players are awarded points for what they did that round. Once a player earns a certain number of points they win, and the rest of the players lose.

        A motif of the game would certainly be that the players are always competing. Even when they are not racing to the finish. The players will end up fighting over which map to play on. Starting the game before the other players are ready and have voted on a map. Stealing items from other player's when choosing items at the start of every round. Blocking pathways or destroying blocks to the finish line. Making the map harder or easier to navigate against other players' wishes. All these individual design features lead to a very fun experience with a couple of friends to laugh over while playing and after the game is over.
        </p>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Cursus vitae congue mauris rhoncus aenean vel elit. Sem nulla pharetra diam
            sit amet nisl suscipit adipiscing bibendum. In hac habitasse platea dictumst vestibulum. Enim nunc
            faucibus a pellentesque sit amet porttitor eget. Amet dictum sit amet justo donec enim. Blandit
            massa enim nec dui nunc. Vitae suscipit tellus mauris a diam maecenas sed enim. Facilisi nullam
            vehicula ipsum a arcu. Faucibus ornare suspendisse sed nisi. Maecenas ultricies mi eget mauris.
            Varius morbi enim nunc faucibus a pellentesque sit amet. Tempor nec feugiat nisl pretium fusce id.
            Cursus vitae congue mauris rhoncus aenean. Sagittis vitae et leo duis ut diam quam nulla porttitor.
            Sagittis vitae et leo duis ut diam quam nulla porttitor.
        </p>
        <div class="container">
            <h3 id="screenshots">
                Screenshots <a href="https://www.matthewgreen.gg/trapstronauts.php#screenshots">#</a>
            </h3>
            <!-- <figure>
                    <img src="project_calamity/project_calamity_gameplay_screenshot_00.png"
                        alt="Project Calamity Image 1">
                    <figcaption>Project Calamity Image 1: Showcasing the terrain and skybox.</figcaption>
                </figure>
                <br> -->
        </div>
        <div class="container">
            <h3 id="demo_video">
                Demo Video <a href="https://www.matthewgreen.gg/trapstronauts.php#demo_video">#</a>
            </h3>
            <center>
                <figure>
                    <video width="640" height="480" controls>
                        <source src="trapstronauts/trapstronauts_demo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <figcaption>Trapstronauts Demo Video: Due to the way the demo was recorded the audio cuts out frequently in the recording.</figcaption>
                </figure>
            </center>
        </div>
    </div>
</body>

<footer>
    <?php require 'modules/footer.php'; ?>
</footer>

<?php require 'modules/scripts.php'; ?>

</html>