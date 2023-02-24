<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <h3 id="cad_model_viewer">
            <a href="https://www.matthewgreen.gg/cad_model_viewer.php">CADModelViewer</a>
        </h3>
        <br>
        <figure id="title_screen">
            <img src="trapstronauts/preview.png" alt="Trapstronauts Title Screen" style="width:100%;">
        </figure>
        <br>

        <div>
            <h3 id="links">
                Links <a href="https://www.matthewgreen.gg/cad_model_viewer.php#links">#</a>
            </h3>
            <ul>
                <li><a href="https://git.matthewgreen.gg/matthewgreen/CADModelViewer">Personal Git Repo</a></li>
                <li><a href="https://github.com/greenmatthew/CADModelViewer">Github Repo</a></li>
            </ul>
        </div>

        <br>

        <div>
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
                <li><a href="#points">Points</a></li>
                <li><a href="#maps">Maps</a></li>
                <div class="container">
                    <ul>
                        <li><a href="#map_hub">Spaceship (Hub) Screenshot</a></li>
                        <li><a href="#map_sawmill">Sawmill Screenshot</a></li>
                        <li><a href="#map_valley">Valley Screenshot</a></li>
                        <li><a href="#map_cliffs">Cliffs Screenshot</a></li>
                        <li><a href="#map_canyon">Canyon Screenshot</a></li>
                    </ul>
                </div>
                <li><a href="#voting_system">Voting System</a></li>
                <div class="container">
                    <ul>
                        <li><a href="#voting_system_screenshot">Voting Screenshot</a></li>
                    </ul>
                </div>
                <li><a href="#placement_system">Placement System</a></li>
                <div class="container">
                    <ul>
                        <li><a href="#placement_system_screenshots">Placement Screenshots</a></li>
                    </ul>
                </div>
                <li><a href="#future_work">Future Work</a></li>
            </ul>
        </div>

        <div>
            <h3 id="purpose">Purpose <a href="#purpose">#</a></h3>
            <p>
                This is a video game project made for the 2022 Fall semester CSE Game Design Special Topics course at
                the University of Texas at Arlington.
            </p>
        </div>

        <div>
            <h3 id="summary">Summary <a href="#summary">#</a></h3>
            <p>
                It is a local multiplayer party game, which draws heavy inspirations from another video game called
                Ultimate Chicken Horse. We borrow the game loop from that title and fit it around a new sci-fi theme.
                That being 2-4 players vote on a map. Then a proportional voting system chooses at random evenly between
                each players' vote and then the players then proceed to play multiple rounds on it. The players all have
                the same goal get to the finish line as soon as possible. However, there is a catch, at the beginning of
                each round the players all place a single item from a small random assortment of items. Some of these
                items being platforms others being traps. Depending on what the players choose and place it can either
                make making it to the finish line easier or harder. These traps as well as environmental hazards on the
                map can kill players and stop them from making it to the finish. At the end of a round, players are
                awarded points for what they did that round. Once a player earns a certain number of points they win,
                and the rest of the players lose.
            </p>
            <p>
                A motif of the game would certainly be that the players are always competing. Even when they are not
                racing to the finish. The players will end up fighting over which map to play on. Starting the game
                before the other players are ready and have voted on a map. Stealing items from other players when
                choosing items at the start of every round. Blocking pathways or destroying blocks to the finish line.
                Making the map harder or easier to navigate against other players' wishes. All these individual design
                features lead to a very fun experience with a couple of friends to laugh over while playing and after
                the game is over.
            </p>

            <div class="container">
                <center>
                    <figure id="demo_video">
                        <video src="trapstronauts/trapstronauts_demo.mp4" type="video/mp4" style="width:100%;" controls>
                            Your browser does not support the video tag.
                        </video>
                        <figcaption>
                            Trapstronauts Demo Video: Due to the way the demo was recorded the audio cuts out frequently
                            in the recording.
                        </figcaption>
                    </figure>
                </center>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require 'modules/footer.php'; ?>
</footer>

<?php require 'modules/scripts.php'; ?>

</html>