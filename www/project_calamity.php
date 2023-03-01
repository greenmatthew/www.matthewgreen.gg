<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <h3 id="project_calamity">
            <a href="https://www.matthewgreen.gg/project_calamity.php">Project Calamity</a>
        </h3>

        <div>
            <h3 id="links">
                Links <a href="https://www.matthewgreen.gg/project_calamity.php#links">#</a>
            </h3>
            <ul>
                <li><a href="https://blog.uta.edu/cseseniordesign/2022/10/21/project-calamity/">UTA
                        Senior Designs Blog</a></li>
                <li><a href="https://git.matthewgreen.gg/Euporie-Studios/SeniorDesignProject">Personal Git Repo</a></li>
                <li><a href="https://github.com/greenmatthew/SeniorDesignProject">Github Repo</a></li>
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
                <li><a href="#story">Story</a></li>
                <li><a href="#setting">Setting</a></li>
                <li><a href="#pms">Player Management Station (PMS)</a></li>
                <div class="container">
                    <ul>
                        <li><a href="#pms_screenshots">PMS Screenshots</a></li>
                    </ul>
                </div>
                <li><a href="#inventory">Inventory</a></li>
                <li><a href="#combat">Combat</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
                <li><a href="#future_work">Future Work</a></li>
            </ul>
        </div>

        <div>
            <h3 id="purpose">Purpose <a href="#purpose">#</a></h3>
            <p>
                This is a video game project made for the 2022 Summer & Fall semester <a
                    href="https://blog.uta.edu/cseseniordesign/2022/10/21/project-calamity/">CSE Senior Design</a> I &
                II courses at the University of Texas at Arlington.
            </p>
        </div>

        <div>
            <h3 id="summary">Summary <a href="#summary">#</a></h3>
            <p>
                This is a sci-fi horror FPS role playing game where you take control of a man who has crash landed on a
                mining colony planet, filled with horrific and violent alien creatures and people trying to kill you.
                Collect and craft items to help you survive and finish quests as you undercover the story of this planet
                and its humanoid inhabitants and their secret plans.
            </p>
            <p>
                Highly inspired by other games of the same genres, most notably the Dead Space franchise and others like
                it such as the Resident Evil franchise and The Callisto Protocol. With many other games inspiring small
                parts of the game.
            </p>
            <p>
                ***
                <b>
                    <i>
                        Notice: Many of the originally planned features are missing or incomplete. Which is explained
                        about in the conclusion section near the bottom. However, I will still describe these features
                        below and state their status in the final build of the game.
                    </i>
                </b>
                ***
            </p>

            <figure id="demo_video">
                <video src="project_calamity/demo.mp4" type="video/mp4" style="width:100%;" controls>
                    Your browser does not support the video tag.
                </video>
                <figcaption>
                    Project Calamity Demo Video: Recorded by one of my team members for the project Will Kembel. If the
                    video is not showing try the <a href="https://youtu.be/olbn0plXHug">original YouTube upload</a>.
                </figcaption>
            </figure>
            <br>
        </div>

        <div>
            <h3 id="story">Story <a href="#story">#</a></h3>
            <p>

            </p>
        </div>

        <div>
            <h3 id="setting">Setting <a href="#setting">#</a></h3>
            <p>

            </p>
        </div>

        <div>
            <h3 id="pms">Player Management Station (PMS) <a href="#pms">#</a></h3>
            <p>
                The Player Management Station (PMS) devices are a critical part of the gameplay loop and found all over
                the map. There are two different types of PMS: Alpha and Beta. They both have modules in them allowing
                the player to do certain things to help them survive. Beta PMS have less modules and reduced
                capabilities of said modules, where as Alpha PMS have full the same exact modules with full capabilities
                and even more modules.
            </p>
            <h4 id="beta_pms">Beta PMS</h4>
            <ul>
                <li>
                    Suit Upgrade Module - Allowing upgrading of armor and movement speed.
                </li>
                <li>
                    Weapon Upgrade Module - Allowing upgrading of weapons.
                </li>
                <li>
                    Crafting Module - Allowing the crafting of items from other items obtained.
                </li>
                <li>
                    Quests Module - Where you can accept quests and turn in quest items and collect finished quests'
                    rewards.
                </li>
            </ul>
            <h4 id="alpha_pms">Alpha PMS</h4>
            <ul>
                <li>
                    All the same modules from the Beta PMS, but these modules have the ability to pull
                    and push items from or into the Stash Module.
                </li>
                <li>
                    Stash Module - A place to store items for later use.
                </li>
                <li>
                    Transportation Module - Can be used to transport to any other discovered Alpha PMS.
                </li>
                <li>
                    Market Module - Allows the selling of items for credits and the purchase of item recipes for credits
                    to unlock crafting recipes in the Crafting Module.
                </li>
                <li>
                    Memory Module - Allows the saving and loading of game states. As well as exiting the game
                    gracefully.
                </li>
                <li>
                    Upon using this type of PMS all the enemies will respawn on the map.
                </li>
            </ul>
            <p>
                ***
                <b>
                    <i>
                        Notice: Both are inside the game with a model but completely lack basically all functionality.
                        Only the Stash Module in the Alpha PMS is working.
                    </i>
                </b>
                ***
            </p>
            <p>
                These stations are inspired by the Dark Souls franchise bon fires and the Dead Space upgrade stations.
                They are basically a mix of the two, with the additional crafting module being directly inspired by
                Subnautica.
            </p>
            <div id="pms_screenshots">
                <figure>
                    <img src="project_calamity/webp/pms.webp" alt="Project Calamity Alpha PMS">
                </figure>
                <figure>
                    <img src="project_calamity/webp/alpha_pms_open.webp" alt="Project Calamity Alpha PMS">
                </figure>
                <figure>
                    <img src="project_calamity/webp/alpha_pms_stash_module.webp" alt="Project Calamity Alpha PMS">
                </figure>
                <br>
            </div>
        </div>

        <div>
            <h3 id="inventory">Inventory <a href="#inventory">#</a></h3>
            <p>

            </p>
        </div>

        <div>
            <h3 id="combat">Combat <a href="#combat">#</a></h3>
            <p>

            </p>
        </div>

        <div>
            <h3 id="conclusion">Conclusion <a href="#conclusion">#</a></h3>
            <p>
                While Senior Design is two whole semesters, the first semester is nearly all documentation and planning,
                then the second is actually working on the project but also more documentation. While I understand the
                value of documentation I felt the planning and documentation was awkward and mostly a waste of time,
                because it had general engineering focus. The class did not feel suited for making a video game even
                though it was an allowed option. This cost us a lot of valuable development time.
            </p>
            <p>
                We also ran into issues with the second semester being all our last semester and our schedules were
                packed with other classes and responsibilities. On top of that one person in the group while they help
                with the documentation they never actually contributed to the game. Not a single line of code, not any
                map designing, not any fabrication of 2D or 3D graphical assets, not putting assets together into
                prefabs, not anything.
            </p>
            <p>
                While I had used Unity many times before, my teammates had never used Unity before and not even the
                programming language it uses; C#. While we were grouped together because we all were interested in
                making a video game for Senior Design. They were not ready to make this game and I was probably not
                ready yet either. We should have done another type of project or a simpler 2D game.
            </p>
            <p>
                Finally, there was another issue that I feel is my fault. I came up with many of the ideas for the game
                once we had settled on a horror FPS. They just came to me naturally as we planned, and everyone liked
                them, so we all agreed to add them. I also had loads of professional grade assets to use for the
                project, that I had previously purchased myself at large discounts. Which further increased the amount
                and scale of my ideas. With all the assets I had already all we had to do was the UI, programming and
                map design. While none of us have really done map design before, I had done UI before and programming
                was all our specialty so it should all be doable. That is what I was and everyone else was thinking. We
                were certainly being overzealous with the total scope of the project, far too many ideas to be all
                implemented even semi-functional.
            </p>
            <p>
                The aforementioned issues lead to the final build of the game being a shell of what it was supposed to
                be. It was missing many of the planned features and the that were implemented were only partially
                functional. Which personally upset me greatly. It was nowhere near the way I had envisioned it or anyone
                else for that matter. I really wanted the game to be something truly fun to play.
            </p>
            <p>
                We certainly learned the importance of keeping a project scope small and incrementally adding to the
                scope as features are finished, not before. As well as the importance of being truthful to ourselves on
                our skills and amount of work we can actually complete. In fact, this is the whole point of Senior
                Design; to learn about project pitfalls before enter industry.
            </p>
        </div>
    </div>
</body>

<footer>
    <?php require 'modules/footer.php'; ?>
</footer>

<?php require 'modules/scripts.php'; ?>

</html>