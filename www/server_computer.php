<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <center>
            <h1 id="server_computer">
                <a href="https://www.matthewgreen.gg/server_computer.php">Server Computer</a>
            </h1>
            <br>
            <div class="container">
                <figure id="preview">
                    <img src="server_computer/server_computer.jpg" alt="Server Computer Preview"
                        style="width:480px;height:640px;">
                </figure>
            </div>

        </center>

        <br>

        <div>
            <h2 id="links">
                Links <a href="#links">#</a>
            </h2>
            <ul>
                <li><a href="https://git.matthewgreen.gg/matthewgreen/Trapstronauts.git">Personal Git Repo</a></li>
                <li><a href="https://github.com/greenmatthew/Trapstronauts">Github Repo</a></li>
            </ul>
        </div>

        <div>
            <h2 id="content">
                Content <a href="#content">#</a>
            </h2>
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
            <h2 id="summary">Summary <a href="#summary">#</a></h2>
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
            <h2 id="website">Website <a href="#website">#</a></h2>
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
            <h2 id="git_website">Git Website <a href="#git_website">#</a></h2>
            <p>
            </p>
        </div>

        <div>
            <h2 id="wildcard_ssl_cert">Wildcard SSL Certificate <a href="#wildcard_ssl_cert">#</a></h2>
            <p>
            </p>
        </div>

        <div>
            <h2 id="dynamic_dns">Dynamic DNS (DDNS) <a href="#dynamic_dns">#</a></h2>
            <p>
            </p>
        </div>

        <div>
            <h2 id="vpn">VPN <a href="#vpn">#</a></h2>
            <p>
            </p>
        </div>

        <div>
            <h2 id="game_servers">Game Servers <a href="#game_servers">#</a></h2>
            <p>
            </p>
        </div>

        <div>
            <h2 id="other_services">Other Services <a href="#other_services">#</a></h2>
            <p>
            </p>
        </div>

        <div>
            <h2 id="future_work">Future Work <a href="#future_work">#</a></h2>
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