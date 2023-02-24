<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <center>
            <h3 id="server_computer">
                <a href="https://www.matthewgreen.gg/server_computer.php">Server Computer</a>
            </h3>
            <br>
            <div class="container">
                <figure id="preview">
                    <img src="server_computer/server_computer.jpg" alt="Server Computer Preview"
                        style="width:300px;height:400px;">
                </figure>
            </div>

        </center>

        <br>

        <div>
            <h3 id="content">
                Content <a href="#content">#</a>
            </h3>
            <ul>
                <li><a href="#summary">Summary</a></li>
                <li><a href="#website">Website</a></li>
                <li><a href="#git_website">Git Website</a></li>
                <li><a href="#wildcard_ssl_cert">Wildcard SSL Certificate</a></li>
                <li><a href="#dynamic_dns">Dynamic DNS (DDNS)</a></li>
                <li><a href="#vpn">VPN</a></li>
                <li><a href="#game_servers">Game Servers</a></li>
                <li><a href="#other_services">Other Services</a></li>
                <li><a href="#future_work">Future Work</a></li>
            </ul>
        </div>

        <div>
            <h3 id="summary">Summary <a href="#summary">#</a></h3>
            <p>
                A hobby of mine as of lately is working on an old server computer that I bought. At first, I just wanted
                a dedicated computer for hosting video game servers. Next thing I know I am buying a server rack for it,
                trying different operating systems for my use case, and seeing infinite possibilities of self-hosting
                with Docker containers. I can say that I am now a huge fan of self-hosting and Docker containers. I am
                even hosting this website off it and many other services. As well as setting up security with SSL
                certificates and solving the issue of having a dynamic public IP address for these services.
            </p>
            <p>
                In total I am self-hosting with Docker containers a portfolio website, git website, cloud storage, media
                streaming service, JupyterLabs service, and various game server whenever they're needed. All accessible
                by me or anyone else in the world, whose been giving access, using my domain name with its respective
                subdomain and an associated wildcard SSL certificate to ensure privacy of my data. I am sure this list
                will grow over time as I find new services that I need in my life.
            </p>
        </div>

        <div>
            <h3 id="website">Website <a href="#website">#</a></h3>
            <p>
                A portfolio website, that you are looking at right now, that shows off my projects, skills, work
                experience, education, and tells you more about myself.
            </p>
            <p>
                I started with a little knowledge about HTML and not much else about hosting a website. I started with
                style templates. After finding one I liked, I got to work writing HTML and adding organization and
                content. I found static webpages workflow was working against me and the workflow I was so use to in
                programming. So I tried to change everything to dynamic webpages, but ran into some issues trying to do
                that with just HTML. I then switched to using PHP to better suit my needs. While I nearly use no PHP the
                biggest thing was the ability to break the website down into different modules. Now I had a 'header.php'
                and a 'footer.php' files and so on. Then I could include these inside other PHP files to remove code
                duplication, just like I would in a program. Thus, making it much easier to update common elements of
                different webpages. I also used Git to backup my work and you can see the source code on my personal Git
                website <a href="https://git.matthewgreen.gg/matthewgreen/matthewgreen.gg">here</a> or on GitHub <a
                    href="https://github.com/greenmatthew/matthewgreen.gg">here</a>.

            </p>
        </div>

        <div>
            <h3 id="git_website">Git Website <a href="#git_website">#</a></h3>
            <p>
                I have setup my own personal Git website where I store all my projects. It acts as redundancy to GitHub,
                but also allows me to circumvent GitHub restrictions on file sizes, push sizes, and Git LFS storage
                costs. Also, because it is local and only serving me, I can more quickly clone, push, and pull than
                GitHub would allow.
            </p>
            <p>
                At first, I was having many issues with repositories becoming corrupted or just being missing, but after
                switching from a SQLite3 database to a MySQL database everything worked great. Now I can use Git just
                like I would with GitHub, and it has been extremely nice to have.
            </p>
            <p>
                You can see this website and all my public repositories
                <a href="https://git.matthewgreen.gg/matthewgreen">here</a>.
            </p>
        </div>

        <div>
            <h3 id="wildcard_ssl_cert">Wildcard SSL Certificate <a href="#wildcard_ssl_cert">#</a></h3>
            <p>
                I have setup a wildcard SSL certificate so all my different subdomains are secure and also to make it
                easier to add a new and secure subdomains in the future. You can even see this certificate in action.
                Depending on your browser, you can most likely see a little lock to the left of your address bar at the
                top. That means that you have a secure connection to the server.
            </p>
        </div>

        <div>
            <h3 id="dynamic_dns">Dynamic DNS (DDNS) <a href="#dynamic_dns">#</a></h3>
            <p>
                One issue that I was always worried about when hosting different things such as my Git website is if my
                public IP address would change while I was away from home and needed to access one of my services. Well
                I found a fix, I learned about DDNS services. All you have to do is run an app provided by the DDNS
                service, but in my case, a Docker container and my public IP address will automatically update if it
                changes. Then change the DNS records for my subdomains to redirect not to a hardcoded IP address but to
                my new subdomain from the DDNS service. Now I no longer must worry about my services going offline
                anymore.
            </p>
        </div>

        <div>
            <h3 id="vpn">VPN <a href="#vpn">#</a></h3>
            <p>
                When I am away from home and I want to update my website, access the web GUI for my server computer, or
                do not trust the Wi-Fi network I am on I connect to my own self-hosted VPN. Its built right into the
                operating system, Unraid, that I use for my server computer.
            </p>
        </div>

        <div>
            <h3 id="game_servers">Game Servers <a href="#game_servers">#</a></h3>
            <p>
                Every once and a while, me and some friends will want to play a multiplayer game and we will want to
                host our own server. I always volunteer to host because it can be fun to set them up and I have lots of
                prior experience doing them. Ever sense I got my server computer it has been a whole lot easier, because
                I can set up a dedicated server that never goes down so anyone can play at any time. It got even easier
                since I switched to the operating system, Unraid. I just search for a Docker container for the game I
                want to host, maybe fiddle with a few settings and port forwarding and its already up and running. I can
                even add a subdomain for the game server and won't need to worry about my public IP changing or having
                to constantly give out an IP to friends.
            </p>
        </div>

        <div>
            <h3 id="other_services">Other Services <a href="#other_services">#</a></h3>
            <p>
                As for what else I host, I have my own personal cloud storage with NextCloud. It is basically Google
                Drive but without a storage cap. It even has its own plugins for online document viewing and editing
                just like Google Docs and all sorts of other useful plugins. The German government apparently uses
                NextCloud for documents because it allows them to securely host their own cloud storage. If its good
                enough for them its good enough for me.
            </p>
            <p>
                I have also a JupyterLabs service for having a handy python interpreter anywhere in the world and for
                notes using Jupyter notebooks.
            </p>
            <p>
                Finally, I have a media streaming service with Plex. I use this for streaming and backing up all my
                personal media, whether it is videos, audio, or photos.
            </p>
        </div>

        <div>
            <h3 id="future_work">Future Work <a href="#future_work">#</a></h3>
            <p>
                I have many things that I would like to do in the future with my server computer and the server rack it
                is on.
            </p>
            <ul>
                <li>
                    Add my desktop computer to the server rack with a FTTD or fiber to the desk solution. This will be
                    especially useful once I get my own home, I can run the cable through the walls so there is no
                    computer dumping massive amounts of heat in my office during the Texas summer. All the peripherals
                    will just plug into a small box with IO on it that is connected with fiber optic cable to my server
                    rack mounted desktop chassis.
                </li>

                <li>
                    Build a brand-new custom server computer from scratch. My current server computer is an old Dell
                    PowerEdge R710, which came out all the way back in 2009. I was only 7 or 8 at the time of its
                    release.
                    Virtually everything on it could be many times better. While, it still works incredibly well for me
                    even
                    with all the services I am running on it. I want something better. What I would like in it.
                    <ul>
                        <li>
                            Discrete GPU for on-the-fly transcoding and hosting game servers.
                        </li>

                        <li>
                            Better bandwidth Ethernet port, such as 2.5 Gbps or ever 10 Gbps ports, for quicker local
                            file transfers.
                        </li>

                        <li>
                            Better CPU with faster clock speeds and a newer architecture and plenty of cores for all my
                            Docker containers. My current system has a 2.67 GHz max clock speed per core. Which is not
                            enough for some game servers or high player counts.
                        </li>

                        <li>
                            Better and quieter fans and possibly liquid cooling. The server computer I have is quite
                            noticably loud.
                        </li>

                        <li>
                            3.5” and 2.5” drive bays, my current server computer only has 2.5” which are not really
                            used for hard drives any more which seems to be the best storage for my needs, because I
                            need lots of storage not necessarily the fastest with a 2.5” SSD.
                        </li>

                        <li>
                            A cache SSD drive, for caching frequently requested files and file transfers.
                        </li>

                        <li>
                            More and newer architecture memory. My current system has only 32 GB of DDR3 memory.
                        </li>
                    </ul>
                </li>

                <li>
                    Maybe getting a JBOD or Just A Bunch of Disks, which is a very basic server rack mountable chassis
                    that has several drive bays. Expanding the storage on the server computer without having to upgrade
                    the drives themselves, but just adding more to the storage pool. Then switching to a ZFS file system
                    for redundancy rather than using RAID with a RAID controller.
                </li>

                <li>
                    Getting a UPS or uninterruptible power supply so that my server computer can never suddenly shutdown
                    from power loss. This would prevent file corruption. Also if my server has access to my main
                    internet connection from my ISP, my hosted services could in theory stay online even if my house is
                    without power.
                </li>

                <li>
                    Upgrading my internet plan to have higher upload speeds. Also possibly upgrading to an internet
                    business plan and getting a separate and static public IP from my home's public IP address. For
                    better security and removing the need for a DDNS.
                </li>

                <li>
                    Add an actual server rack mountable switch and router. Currently I have a switch but its not
                    mountable even though I have a rack mounted patch panel.
                </li>

                <li>
                    Learning how to make my own custom Docker containers. So, I can really configure a Docker container
                    when needed.
                </li>

                <li>
                    Setup my own custom email using my domain name as a professional email.
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