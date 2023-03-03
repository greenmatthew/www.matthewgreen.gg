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
        <br>
        <figure id="preview">
            <img src="project_calamity/webp/environment_0.webp" alt="Trapstronauts Title Screen" style="width:100%;">
        </figure>

        <br>

        <div>
            <h3 id="links">
                Links <a href="https://www.matthewgreen.gg/project_calamity.php#links">#</a>
            </h3>
            <ul>
                <li><a href="https://blog.uta.edu/cseseniordesign/2022/10/21/project-calamity/">UTA
                        Senior Designs Blog</a></li>
                <li><a href="https://git.matthewgreen.gg/Euporie-Studios/SeniorDesignProject">Personal Git Repo</a></li>
                <li><a href="https://github.com/greenmatthew/SeniorDesignProject">Github Repo</a></li>
                <li>
                    <a href="https://github.com/greenmatthew/ProjectCalamity/blob/master/_Resources/Notes/Ideas.pdf">
                        My Initial Ideas Document
                    </a>
                </li>
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
                <li><a href="#inventory_system">Inventory System</a></li>
                <li><a href="#health_system">Health System</a></li>
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
                This is a sci-fi horror tactical FPS role playing game where you take control of a bounty hunter who has
                crash landed on a mining colony planet, filled with horrific and violent alien creatures and people
                trying to kill you. Collect and craft items to help you survive and finish quests as you undercover the
                story of this planet and its humanoid inhabitants and their secret plans.
            </p>
            <p>
                Highly inspired by other games of the same genres, most notably the Dead Space franchise and others like
                it such as the Resident Evil franchise and The Callisto Protocol for the setting, horror atmosphere, and
                some parts of the gameplay. Then the gameplay being further enhanced with small parts borrowed from
                other games: Dark Souls franchise, Subnautica, Chernobylite, Escape From Tarkov, and SWAT4.
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
                You take control of a bounty hunter who just got his biggest contract. Unfortunately, after a failed
                attempt to eliminate the target he crash landed on a prison mining colony. You need to gather the
                resources and items needed to repair his ship to finish his contract and get revenge for getting shot
                down.
            </p>
            <p>
                The mining colony is home to alien creatures, robots, and humanoid lowlifes, prisoners, and employees
                for the evil corporation in charge of the colony. As you explore more and finish more quests for people
                around the planet as well as missions for the corporation itself, you begin to learn more about the
                corporation's sinister plans for the mining on this planet. Will you try and stop them, or do you want
                to join them for your own selfish benefit?
            </p>
        </div>

        <div>
            <h3 id="setting">Setting <a href="#setting">#</a></h3>
            <p>
                The planet's surface is mainly dirt and rock, but there are small amounts of resource rich flora across
                the surface. With many dangerous creatures and robots roaming the surface and caves also worth searching
                for resources. There are caves littered all around the surface, all plentifully filled with raw ores
                waiting to be mined; copper, titanium, iron, gold, silver, and more, however, the corporation does not
                seem to be mining these particularly common but useful ores.
            </p>
            <p>
                There is a massive compound on the equator of the planet, owned by the corporation. Inside there is many
                different buildings and areas. Living quarters for prisoners, guards, engineers, and all sorts of other
                workers. Office spaces. Laboratories. Vehicle bays for spaceships and land vehicles. One gigantically
                tall building, where the top executives running the planet live and manage the planet. Then finally one
                massive quarry in the center of the compound, so far down you can't see anything at the bottom with
                large elevators that take people such as prisoners and guards down to the bottom to mine.
            </p>
            <p>
                The bounty hunter's spaceship crash lands on the outskirts of the compound. In a hot spot of caves and
                plenty and flora and fauna to fulfill upgrading your gear and start repairs on your ship, if you're
                willing to do a little exploring around.
            </p>
        </div>

        <div>
            <h3 id="pms">Player Management Station (PMS) <a href="#pms">#</a></h3>
            <p>
                The Player Management Station (PMS) devices are a critical part of the gameplay loop and found all over
                the map. There are two different types of PMS: Alpha and Beta. They both have modules in them allowing
                the player to do certain things to help them survive. Beta PMS have less modules and reduced
                capabilities of said modules, whereas Alpha PMS have full the same exact modules with full capabilities
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
                    All the same modules from the Beta PMS, but these modules can push and pull items into or from the
                    Stash Module.
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
                    Upon using this type of PMS all the enemies will respawn on the map, however you will also heal, and
                    your shield will fully charge if you have one equipped.
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
                    <img src="project_calamity/webp/pms.webp" alt="Project Calamity Alpha & Beta PMS">
                </figure>
                <figure>
                    <img src="project_calamity/webp/alpha_pms_open.webp" alt="Project Calamity Alpha PMS">
                </figure>
                <figure>
                    <img src="project_calamity/webp/alpha_pms_stash_module.webp"
                        alt="Project Calamity Alpha PMS Stash Module">
                </figure>
                <br>
            </div>
        </div>

        <div>
            <h3 id="inventory_system">Inventory System <a href="#inventory">#</a></h3>
            <p>
                The player's inventory contains multiple different slots for equipment.
            </p>
            <ul>
                Primary Weapon Slot - Can be used to equip long guns only.
            </ul>
            <ul>
                Secondary Weapon Slot - Can be used to equip long guns or pistols.
            </ul>
            <ul>
                Shield Slot - When equipped provides a pool of health that soaks all damage till the pool hits zero.
                Then all damage will be applied to the player's health instead.
            </ul>
            <ul>
                Armor Slot - When equipped provides damage reduction from enemies' attacks.
            </ul>
            <ul>
                Vest Slot - When equipped it has limited space with a restriction of only magazines, ammunition,
                grenades, and medical supplies items being allowed inside. There are different types of vests that can
                be equipped in this slot with pros and cons to each of them.
            </ul>
            <ul>
                Backpack Slot - When equipped it has limited space but with no restrictions on what can be contained
                inside. There are different types of backpacks that can be equipped in this slot with pros and cons to
                each of them.
            </ul>
            <ul>
                Credit Wallet - That displays how many credits you have.
            </ul>
            <p>
                Both the vests and backpacks have internal storage inside them, where you can move and rotate items to
                fit and organize items in the contents of these storage items.
            </p>
            <p>
                <b>
                    <i>
                        *** Notice: All the slots are in the game, except for the vest and backpack slots, however,
                        there are no items other than a rifle and some example items and there is a fixed size storage
                        container just called backpack. So, the whole inventory system provides nothing to the final
                        build of the game. The only interaction with it is you immediately equip your rifle from an
                        Alpha PMS's stash module. ***
                    </i>
                </b>
            </p>

            <div id="inventory_screenshots">
                <figure>
                    <img src="project_calamity/webp/inventory.webp" alt="Project Calamity Inventory">
                </figure>
                <figure>
                    <img src="project_calamity/webp/inventory_sorted.webp" alt="Project Calamity Inventory Sorted">
                </figure>
                <br>
            </div>
        </div>

        <div>
            <h3 id="health_system">Health System <a href="#inventory">#</a></h3>
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
                and scale of my ideas. With all the assets I had already all we had to do was the UI, programming, and
                map design. While none of us have really done map design before, I had done UI before, and programming
                was all our specialty so it should all be doable. That is what I was and everyone else was thinking. We
                were certainly being overzealous with the total scope of the project, far too many ideas to be all
                implemented even semi-functional.
            </p>
            <p>
                The aforementioned issues lead to the final build of the game being a shell of what it was supposed to
                be. It was missing many of the planned features and the that were implemented were only partially
                functional. Which personally upset me. It was nowhere near the way I had envisioned it or anyone else
                for that matter. I really wanted the game to be something truly fun to play.
            </p>
            <p>
                We certainly learned the importance of keeping a project scope small and incrementally adding to the
                scope as features are finished, not before. As well as the importance of being truthful to ourselves on
                our skills and amount of work we can complete. In fact, this is the whole point of Senior Design; to
                learn about project pitfalls before enter industry.
            </p>
        </div>

        <div>
            <h3 id="future_work">Future Work <a href="#future_work">#</a></h3>
            <p>

            </p>
        </div>
    </div>
</body>

<footer>
    <?php require 'modules/footer.php'; ?>
</footer>

<?php require 'modules/scripts.php'; ?>

</html>