<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <h3 id="trapstronauts">Trapstronauts</h3>
        <br>
        <figure id="preview">
            <img src="trapstronauts/webp/preview.webp" alt="Trapstronauts Preview" style="width:100%;">
        </figure>

        <br>

        <div>
            <h3 id="links">
                Links <a href="#links">#</a>
            </h3>
            <ul>
                <li><a href="https://git.matthewgreen.gg/matthewgreen/Trapstronauts.git">Personal Git Repo</a></li>
                <li><a href="https://github.com/greenmatthew/Trapstronauts">GitHub Repo</a></li>
            </ul>
        </div>

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
                <li><a href="#conclusion">Conclusion</a></li>
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
                It is a local multiplayer party game, made in Godot Engine 3, which draws heavy inspirations from
                another video game called Ultimate Chicken Horse. We borrow the game loop from that title and fit it
                around a new sci-fi theme. First, 2-4 players vote on a map. Then a proportional voting system chooses
                at random evenly between each players' vote and then the players then proceed to play multiple rounds on
                it. The players all have the same goal of getting to the finish line as soon as possible. However, there
                is a catch, at the beginning of each round the players all choose and place a single item from a random
                assortment of items. Depending on what they choose it can either make it easier or harder to get to the
                finish line. The traps as well as environmental hazards on the map can kill players and stop them from
                making it to the finish. At the end of a round, players are awarded points for what they did that round.
                Once a player earns a certain number of points they win, and the rest of the players lose.
            </p>
            <p>
                A motif of the game is that the players are always able to compete and harass other players through
                different game functionalities, even before they are racing for points. Which makes it the perfect game
                to play with a group of friends to laugh over.
            </p>

            <figure id="demo_video">
                <video src="trapstronauts/demo.mp4" type="video/mp4" style="width:100%;" controls>
                    Your browser does not support the video tag.
                </video>
                <figcaption>
                    Trapstronauts Demo Video: Due to the way the demo was recorded the audio cuts out frequently
                    in the recording.
                </figcaption>
            </figure>
        </div>

        <div>
            <h3 id="points">Points <a href="#points">#</a></h3>
            <p>There are many ways to get points, some events give you more points than others:</p>
            <ul>
                <li>Getting to the finish line, as long as one person perished before making it to the finish line.</li>
                <li>Being the only person to finish.</li>
                <li>Being the first person to finish, if not the only person to finish.</li>
                <li>Kills from traps you have placed.</li>
                <li>Post-mortem arrival to the finish line.</li>
            </ul>
            <figure>
                <img src="trapstronauts/webp/points_system.webp" alt="Trapstronauts Points System">
            </figure>
            <br>
        </div>

        <div>
            <h3 id="maps">Maps <a href="#maps">#</a></h3>
            <ul>
                <figure id="map_hub">
                    <img src="trapstronauts/webp/map_hub_labelled.webp" alt="Trapstronauts Spaceship (Hub) Map"
                        style="width:100%;">
                    <figcaption>
                        This is where the players start when they load up the game. The players spawn in separate
                        bedrooms. Here they can vote on a map then go to the portal room and start the game once enough
                        players are in there.
                    </figcaption>
                </figure>
                <br>

                <figure id="map_sawmill">
                    <img src="trapstronauts/webp/map_sawmill_labelled.webp" alt="Trapstronauts Sawmill Planet Map"
                        style="width:100%;">
                    <figcaption>
                        This is a simple but fun map, where there is a sawmill in the center. You can choose the safer
                        option to go over it if it is not blocked or covered in traps from players' item placements. You
                        can also go through the sawmill which has two floors in it. Both floors have two saws with a
                        button in the middle. If a player stands on the button in the middle, the saws speed up making
                        it harder to get through the sawmill.
                    </figcaption>
                </figure>
                <br>

                <figure id="map_valley">
                    <img src="trapstronauts/webp/map_valley_labelled.webp" alt="Trapstronauts Valley Planet Map"
                        style="width:100%;">
                    <figcaption>
                        The players start on the left bank of a steep valley with the finish line up above on the right
                        bank. If they fall into the pit between the two banks they perish. At first this is unavoidable,
                        so they must build their way up using platforms and traps.
                    </figcaption>
                </figure>
                <br>

                <figure id="map_cliffs">
                    <img src="trapstronauts/webp/map_cliffs_labelled.webp" alt="Trapstronauts Cliffs Planet Map"
                        style="width:100%;">
                    <figcaption>
                        This is very similar to valley, but a lot smaller. It is the best map for a quick game.
                    </figcaption>
                </figure>
                <br>

                <figure id="map_canyon">
                    <img src="trapstronauts/webp/map_canyon_labelled.webp" alt="Trapstronauts Canyon Planet Map"
                        style="width:100%;">
                    <figcaption>
                        The players start on the left bank of a canyon and the finish is in the bottom right cave inside
                        the canyon. There are two hidden paths on the outskirts of the map that players can discover and
                        use to get around traps and platforms in the way.
                    </figcaption>
                </figure>
                <br>
            </ul>
        </div>

        <div>
            <h3 id="voting_system">Voting System <a href="#voting_system">#</a></h3>
            <p id="voting_system_screenshot">
                The players vote on which map they want, however, instead of a majority vote winning, it is
                proportionally selected at random. Meaning each vote has an equal chance of being randomly selected. For
                example, if two players voted on Sawmill and one voted on Valley, then it would be a two-thirds chance
                of being Sawmill and one-thirds chance of being Valley, once the players start the game at the portal
                room.
            </p>
            <figure>
                <img src="trapstronauts/webp/voting_system.webp" alt="Trapstronauts Voting System" style="width:100%;">
            </figure>
            <br>
        </div>

        <div>
            <h3 id="placement_system">Placement System <a href="#placement_system">#</a></h3>
            <p id="placement_system_screenshots">
                At the start of every round, the players get a random assortment of items, which can be platforms,
                traps, and bombs, but they must choose quickly and wisely. Once an item has been selected you are locked
                in and no one else can choose that item. After all the players have chosen an item, then they all at
                once try and place their items where they'd like to. Then after all items are placed they race to the
                finish.
            </p>
            <p>
                The platforms are for making or blocking paths to the finish line. Then for the traps they can kill
                players making it harder to get to the finish but can also sometimes be used as a platform. Finally,
                there is the bombs, which blow up a small areas of placed items, which is useful for if the map is
                impossible or if a player wants to remove a group of items. Most players usually have their own path to
                get to the finish through the map and they place items to make their path easier or to make others'
                paths harder to navigate without dying.
            </p>
            <figure>
                <img src="trapstronauts/webp/placement_system_0.webp" alt="Trapstronauts Placement System"
                    style="width:100%;">
            </figure>
            <br>
            <figure>
                <img src="trapstronauts/webp/placement_system_1.webp" alt="Trapstronauts Placement System"
                    style="width:100%;">
            </figure>
            <br>
            <figure>
                <img src="trapstronauts/webp/placement_system_2.webp" alt="Trapstronauts Placement System"
                    style="width:100%;">
            </figure>
            <br>
        </div>

        <div>
            <h3 id="conclusion">Conclusion <a href="#conclusion">#</a></h3>
            <p>
                The final demo build was genuinely fun to play with some friends. Although it did have more bugs in it
                then we would like to admit. Overall, it was a remarkable success. If it had more content it really be a
                contender for publishing on Steam or other digital game vendors.
            </p>
        </div>

        <div>
            <h3 id="future_work">Future Work <a href="#future_work">#</a></h3>
            <p>If we were to keep working on the game there is many things we would have liked to add.</p>
            <ul>
                <li>
                    Finish the hub map. It was missing many features from the original vision of the game.
                    <ul>
                        <li>A storage bay - containing a mini-game to play while waiting for other players.</li>
                        <li>An engine room - where the host player can tweak settings about the game.</li>
                        <li>Better bedrooms - they were supposed to have beds in them, and wardrobes used to customize
                            and choose characters. Also motion sensing doors, that only open to the owner's motion. You
                            could lock a player in your bedroom if you wanted.</li>
                    </ul>
                </li>
                <li>
                    More maps of course.
                    <ul>
                        <li>
                            Sun - where solar flares shoot out and cook anyone hit by one as a unique environmental
                            hazard.
                        </li>
                        <li>
                            Mini Moons - where multiple miniature moons are present and have a gravitational pull on the
                            players as they get near, making it difficult to get past them to the finish.
                        </li>
                        <li>
                            Mountainous or City Skyline Planet - where the players are occasionally hit by gusts of
                            wind, which happen at random times with random force and duration.
                        </li>
                        <li>
                            Caverns Planet - where the players are underground in a cavern and there is platforms that
                            crumble a second after they are touched, sending any player or players on top to fall to
                            their deaths. Any crumbled platforms would reappear the following round.
                        </li>
                        <li>
                            Ice Planet - where all the starting surfaces start with ice, causing the players to slide
                            when moving on to it. Occasionally a blizzard will come through making it hard to see. There
                            is a small warning before the blizzard so you at least have a little time to hunker down.
                            During a blizzard there is a chance for the surfaces of player placed items, if not already,
                            to become covered in ice.
                        </li>
                        <li>
                            Stormy Planet - the overall visibility of the map is limited because from an intense
                            thunderstorm occurring. At occasional, random intervals lightning strikes greatly increasing
                            visibility for a short period before fading back to darkness. An additional idea would be
                            where there is a small change that the lightning could strike a player if they do not have a
                            structure above them. Also if the lighting strikes metal, then it will kill any players
                            touching the metal.
                        </li>
                    </ul>
                </li>
                <li>
                    More items to place.
                    <ul>
                        <li>
                            An alternative bigger bomb, with a larger radius of item removal.
                        </li>
                        <li>
                            Rotator - creates a physical rotation system, which rotates any cardinally adjacent placed
                            items.
                        </li>
                        <li>
                            Alien Goo - a sticky substance that attaches items together into one whole physical
                            structure. It also slows down a player if they are touching it. This can be used to attach
                            more items to a rotator's rotation system.
                        </li>
                        <li>
                            Electrifier - when placed next to metal items, it kills anything touching them, upon a
                            fixed timer going off. The electrical system can be extended by placing metal items adjacent
                            to other metal items.
                        </li>
                        <li>And much more, but these are the most notable.</li>
                    </ul>
                </li>
                <li>
                    Laser Reflections - so when a rotator is in place, and the laser is activated, the laser would
                    rotate
                    accordingly.
                </li>
                <li>
                    Unique characters to choose from and customize like talked about with the hub’s bedroom wardrobes.
                </li>
                <li>
                    Alternate start and finishes to maps, maybe the player goes from the start to the finish and back
                    to the start. Or maybe the start and finish moved round by round.
                </li>
                <li>
                    And so much more.
                </li>
            </ul>
        </div>
    </div>
</body>

<footer>
    <?php require 'modules/footer.php'; ?>
</footer>

<?php require 'modules/scripts.php'; ?>

</html>