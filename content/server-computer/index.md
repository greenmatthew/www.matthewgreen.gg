---
title: "Server Computer"
id: "server-computer"
priority: 600  # Controls order in listings (lower numbers appear first)
type: "project"
draft: false  # Set to true to hide this project from production

summary: "A hobby of mine is building and working on an old server computer. I use it for various things such as hosting this website, a personal Git website, a Minecraft game server, and much more."
# Preview image for listings
previewImage:
    src: "preview.jpg"
    alt: "Server Computer Preview"
    class: "auto-fit"
---
{{< custom-header type="h2" id="content" text="Content" >}}
- [Summary](#summary)
- [Website](#website)
- [Git Website](#git-website)
- [Wildcard SSL/TLS Certificate](#wildcard-tls-cert)
- [Dynamic DNS (DDNS)](#dynamic-dns)
- [Virtual Private Network (VPN)](#vpn)
- [Game Servers](#game-servers)
- [Other Services](#other-services)
- [Future Work](#future-work)

{{< custom-header type="h2" id="summary" text="Summary" >}}
A hobby of mine as of lately is working on an old server computer that I bought. At first, I just wanted a dedicated computer for hosting video game servers for me and my friends. Next thing I know I am buying a server rack for it, trying different operating systems for my use case, and seeing the infinite possibilities of self-hosting with Docker containers. I can say that I am now a huge fan of self-hosting and Docker containers. I am even hosting this website off it and several other services. As well as upgrading security with SSL certificates and solving the issue of having a dynamic public IP address for these services.

In total I am self-hosting with Docker containers a portfolio website, git website, cloud storage, media streaming service, JupyterLabs service, and a game server or two occasionally. All accessible by me or anyone else in the world, whose been giving access, using my domain name with the service's respective subdomain and an associated wildcard SSL certificate to ensure privacy of data. I am sure this list will grow over time as I find new services that I need in my life.

{{< custom-header type="h2" id="website" text="Website" >}}
A portfolio website, that you are looking at right now, that shows off my projects, skills, work experience, education, and tells you more about myself.

I started with a little knowledge about HTML, CSS, and hosting a website. I started with searching for a
style template that I resonated with me. I landed on a style that looked like a terminal of course. I
then got to work writing HTML adding content.

After a while I found, a static webpage workflow was frustrating to handle with more than one webpage with common elements, so I tried to change everything to dynamic webpages. I ran into some issues trying to do that with just HTML, however, I switched to using a mixture of HTML and PHP to better suit my needs. While I do not use much PHP, it helped to break down the website into different modules and I reuse said modules, to prevent code duplication.

I used Git, like I do for any project, for safely storing and doing version control of the source code on my personal Git website [here](https://git.matthewgreen.gg/mgreen/matthewgreen.gg) or on GitHub [here](https://github.com/greenmatthew/matthewgreen.gg).


{{< custom-header type="h2" id="git-website" text="Git Website" >}}
I have setup my own personal Git website where I store all my projects. It acts as redundancy to GitHub,
but also allows me to circumvent GitHub restrictions on file sizes, push sizes, and Git LFS storage
costs. Also, because it is local and only serving me, I can more quickly clone, push, and pull than
GitHub would allow.

At first, I was having many issues with repositories becoming corrupted or just being missing, but after
switching from a SQLite3 database to a MySQL database everything worked great. Now I can use Git just
like I would with GitHub, and it has been pleasant to have.
    
You can see this website and all my public repositories [here](https://git.matthewgreen.gg/mgreen).

{{< custom-header type="h2" id="wildcard-tls-cert" text="Wildcard SSL/TLS Certificate" >}}
I have setup a wildcard SSL/TLS certificate, so all my different subdomains are secure with a single certificate. It also is incredibly easy to secure new subdomains in the future. You can even see this certificate in action. Depending on your browser, you can most likely see a little lock to the left of your address bar at the top. That means that you have a secure connection to the server.

{{< custom-header type="h2" id="dynamic-dns" text="Dynamic DNS (DDNS)" >}}
One issue that I was always worried about when hosting different things such as my Git website is if my public IP address would change while I was away from home and needed to access one of my services. Well I found a fix, I learned about DDNS services. All you have to do is run an app provided by the DDNS service, in my case a Docker container, and the public IP address my domain name resolves to will automatically update if it changes. Now I no longer must worry about my services going offline anymore.

{{< custom-header type="h2" id="vpn" text="Virtual Private Network (VPN)" >}}
When I am away from home and I want to update my website, access the web GUI for my server computer, or do not trust the Wi-Fi network I am on I connect to my own self-hosted VPN. Its built right into the operating system, Unraid, that I use for my server computer.

{{< custom-header type="h2" id="game-servers" text="Game Servers" >}}
Every once and a while, me and some friends will want to play a multiplayer game and host our own server. I always volunteer to host because it can be fun to set them up and I have lots of prior experience doing them. Ever since I got my server computer it has been a whole lot easier, because I can set up a dedicated server that never goes down so anyone can play at any time. It got even easier since I switched to the operating system, Unraid. I just search for a Docker container for the game I want to host, maybe fiddle with a few settings and port forwarding and its already up and running. I can even add a subdomain for the game server and won't need to worry about my public IP address changing or having to constantly give out an IP address to friends.

{{< custom-header type="h2" id="other-services" text="Other Services" >}}
As for what else I host, I have my own personal cloud storage with NextCloud. It is my own personal Google Drive without a storage cap and third-party plugins to customize it to my needs. It even has its own plugins for online document viewing and editing just like Google Docs and all sorts of other useful plugins. The German government uses NextCloud for documents because it allows them to securely host their own cloud storage. If it's good enough for them its good enough for me.

I have also a JupyterLabs service for having a handy python interpreter anywhere in the world and for notes using Jupyter notebooks.

Finally, I have a media streaming service with Plex. I use this for streaming and backing up all my personal media, whether it is videos, audio, or photos.

{{< custom-header type="h2" id="future-work" text="Future Work" >}}
I have many things that I would like to do in the future with my server computer and the server rack it is on.

- Add my desktop computer to the server rack with a FTTD or fiber to the desk solution. This will be especially useful once I get my own home, I can run the cable through the walls so there is no computer dumping massive amounts of heat in my office during the Texas summer. All the peripherals will just plug into a small box with IO on it that is connected with fiber optic cable to my server rack mounted desktop chassis.

- Build a brand-new custom server computer from scratch. My current server computer is an old Dell PowerEdge R710, which came out all the way back in 2009. I was only 7 or 8 at the time of its release. Everything on it could be many times better. While, it still works incredibly well for most of my use cases, it is slowly running out of memory from all the docker containers. Also, some game servers require better hardware than what I have. So, I want something better. What I would like to see in it.

    - Discrete GPU for on-the-fly video transcoding and hosting game servers.

    - Better bandwidth Ethernet port, such as 2.5 Gbps or ever 10 Gbps ports, for quicker local file transfers.

    - Better CPU with faster clock speeds and a newer architecture and plenty of cores for all my Docker containers. My current system has a 2.67 GHz max clock speed per core. Which is not enough for some game servers or high player counts.

    - Better and quieter fans and liquid cooling. The server computer I have is quite noticeably loud.

    - 3.5” and 2.5” drive bays, my current server computer only has 2.5” which are not really used for hard drives anymore which seems to be the best storage for my needs, because I need lots of storage not necessarily the fastest with a 2.5” SSD.

    - A cache SSD drive, for caching frequently requested files and file transfers.

    - More and newer architecture memory. My current system has only 32 GB of DDR3 memory.

- Maybe getting a rack mountable JBOD or Just A Bunch of Disks, which is just a chassis that has several drive bays. Allowing the expansion of storage on the server computer without having to upgrade the drives themselves. Then switching to a ZFS file system for redundancy rather than using RAID with a RAID controller.

- Getting a UPS or uninterruptible power supply so that my server computer can never suddenly shutdown from power loss. This would prevent file corruption and service disruptions. Also, if my server has access to my main internet connection from my ISP, my services could in theory stay online even if my house is without power.

- Upgrading my internet plan to have higher upload speeds. Also possibly upgrading to an internet business plan and getting a separate and static public IP from my home's public IP address. For better security and removing the need for a DDNS.

- Add an actual server rack mountable switch and router. Currently I have a switch, but it is not rack mountable even though I have a rack mounted patch panel.

- Learning how to make my own custom Docker containers. So, when the need arises I can configure a container to my specific needs.

- Setup my own custom email using my domain name as a professional email.