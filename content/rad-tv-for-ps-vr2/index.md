---
title: "Rad TV for PS VR2"
id: "rad-tv-for-ps-vr2"
priority: 0  # Controls order in listings (lower numbers appear first)
type: "project"
draft: false  # Set to true to hide this project from production

summary: "Developed and maintained the PlayStation VR2 version of Rad TV for PS5, a hybrid media streaming application—the first and, to date, only application of its kind on the PS5 platform."
previewImage:
    src: "media/preview.png"
    alt: "Rad TV for PS VR2 Preview"
    attribution: "Image Content - © Little Star Media, Inc. All rights reserved."
---

{{< terminal-css/alert type="error" >}}
    Disclaimer: As I am no longer employed by this company, I cannot guarantee that the current application or its associated documentation will remain unchanged or continue to reflect the quality of work I delivered.
{{< /terminal-css/alert >}}

{{< heading-link type="h2" >}} Links {{< /heading-link >}}
- Rad TV Website: [radtv.com](https://radtv.com/)
- Documentation: 
  - Main Documentation: [docs.rad.live](https://docs.rad.live/rad)
  - PS5/PSVR2 Documentation: [docs.rad.live](https://docs.rad.live/rad/getting-started-subscribers-viewers/rad-tv-for-ps5-ps-vr2)

{{< heading-link type="h2" >}} Content {{< /heading-link >}}
- [Image Gallery](#image-gallery)
- [Summary](#summary)
- [The Journey](#the-journey)
- [Documentation](#documentation)

{{< heading-link type="h2" >}} Image Gallery {{< /heading-link >}}
{{< media/gallery >}}
    {{< media/gallery-row >}}
        {{< media/image
            src="media/preview.png"
            alt="Rad TV for PS VR2 Home Menu"
            caption="Home Menu"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}

        {{< media/image
            src="media/library_menu.png"
            alt="Rad TV for PS VR2 Library Menu"
            caption="Library Menu"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}
    {{< /media/gallery-row >}}

    {{< media/gallery-row >}}
        {{< media/image
            src="media/dlna-upnp_menu.png"
            alt="Rad TV for PS VR2 DLNA/UPnP Menu"
            caption="DLNA/UPnP Menu"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}

        {{< media/image
            src="media/rss_feeds_menu.png"
            alt="Rad TV for PS VR2 RSS Feeds Menu"
            caption="RSS Feeds Menu"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}
    {{< /media/gallery-row >}}

    {{< media/gallery-row >}}
        {{< media/image
            src="media/video_player.png"
            alt="Rad TV for PS VR2 Video Player"
            caption="Video Player"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}

        {{< media/image
            src="media/letterboxing_support.png"
            alt="Rad TV for PS VR2 Letterboxing Support"
            caption="Letterboxing Support"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}
    {{< /media/gallery-row >}}

    {{< media/gallery-row >}}
        {{< media/image
            src="media/stereoscopic-3d-_video_support.png"
            alt="Rad TV for PS VR2 Stereoscopic (3D) Video Support"
            caption="Stereoscopic (3D) Video Support"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}
        
        {{< media/image
            src="media/spherical_180-360_degree_video_support.png"
            alt="Rad TV for PS VR2 Spherical 180/360 Video Support"
            caption="Spherical 180°/360° Video Support"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}
    {{< /media/gallery-row >}}
{{< /media/gallery >}}

{{< heading-link type="h2" >}} Summary {{< /heading-link >}}
At Rad TV, I spearheaded the development of their PlayStation VR2 (PS VR2) application for PS5—the first and only hybrid media streaming application approved for the platform. I inherited an incomplete PS4/PS VR codebase and transformed it into a fully functional PS VR2 release, implementing significant architectural improvements and cleaning up the work of my predecessors. Navigating Sony's stringent QA process required solving complex technical challenges, like performance improvements and implementing the PS5 media remote for Unity. Post-launch, I addressed user feedback while implementing major feature updates such as DLNA/UPnP streaming capabilities, redesigned menu systems, and comprehensive settings options. Throughout the project, I managed the entire development lifecycle—from building and configuring the application to uploading, processing, and scheduling both initial releases and patches through Sony's PlayStation Partners ecosystem.

My role demanded versatility across numerous technologies and disciplines. I wrote extensive C# code and implemented networking protocols like DLNA/UPnP and RSS for media streaming, worked with GraphQL for content delivery, and managed data in various formats including XML and JSON. The position required expertise in UI programming, Unity development, video encoding/decoding techniques, and VR-specific optimization. I conducted thorough debugging sessions and implemented performance improvements using Unity Profiler and Memory Profiler, while also setting up proper exception/error/crash reporting systems. I developed platform-specific code for PlayStation, created C++ to C# wrapper libraries to access Sony's native functionality, and organized the codebase with Assembly Definitions and custom Unity packages. Additionally, I became proficient with PlayStation's documentation, development tools, hardware specifications, support systems, and publisher portals—essential skills for successfully deploying on this tightly controlled console platform.

{{< heading-link type="h2" >}} The Journey {{< /heading-link >}}
I inherited a codebase for porting Rad TV from PS4/PS VR to the newer PS5/PS VR2 platform. After extensive discussions with Sony, we were required to split the application into what they call a "hybrid application" - two separate components. The standard version needed to be a web application, while the VR version could remain in Unity. This architectural constraint meant I became solely responsible for the VR version, working independently while my manager and a senior engineer developed the new web application for the standard version.

By the time the application was officially divided, I had already mastered PlayStation development in Unity, including all necessary software tools and build processes for PS4 and PS5. This involved learning Sony-specific library dependencies such as their input and video player systems, which function as extensions to Unity's native packages. My initial focus was bringing the port to a functional state by fixing bugs from previous developers. I thoroughly cleaned the codebase, removing numerous unused libraries and redundant code—the original project had been designed for multiple VR platforms, not just PS4/PSVR. Additionally, I implemented several missing features with entirely original code to enhance functionality.

A significant architectural improvement I implemented was introducing Assembly Definitions to the project, replacing the previous engineers' approach of compiling everything to a single shared library. This practice, combined with the pervasive tight coupling throughout the codebase, was particularly suboptimal for large-scale projects—especially when targeting multiple platforms as we intended. The existing architecture meant any change to one component would trigger full recompilation of all unrelated systems, drastically extending the already lengthy PS5 compilation times. Due to the extensive coupling, this refactoring required careful planning. I adopted an incremental approach: structuring new code to adhere to proper modular architecture when feasible while gradually migrating and de-coupling existing components. By the end of my tenure, significant progress had been made toward a properly organized, decoupled, and platform-independent codebase, though I estimate complete migration would have required another 6-12 months of iteration.

After several months of intensive learning and development, both components of our hybrid application reached viable states—the standard web version had achieved a basic MVP, while my VR version port had become fully usable. I personally was not too happy with the current state of either component, as I have high standards and there was still much to polish, add, and fix. But we all recognized that the application's release had been delayed well beyond the original timeline—even before I joined the company. For context, I started in February 2024, over three years after the PS5's November 2020 launch, and Sony had not provided early console access to expedite development. Given the significant delays already experienced before I arrived, we made the strategic decision to release the application despite opportunities for additional polish.

The next step took a lot longer than you would think. We needed to build the actual hybrid application. The documentation for this was scattered or just non-existent so I had to thoroughly read what documentation there was and piece together how to make one. No Sony did not provide us with an example project, for all I know, no one in the world had ever even made one before. So thankfully I was able to figure it out after a lot of trial and error--if you got a single step wrong in the build process it would just not run and give an error code that you had to try and make sense of. Also, worth noting that Unity does not support hybrid applications. I would have to build to essentially a PS5 project and then configure it and then compile it to an actual binary application that runs on a PS5. There was also many problems with the Unity build process, like ignoring configuration files, overriding values, which did not help. But I got it done.

The next phase—building the actual hybrid application—proved unexpectedly challenging. Until this point, I had been working with development builds while the standard version was being developed as a standalone application. Sony's documentation for hybrid applications was fragmented and incomplete, requiring me to analyze available resources and piece together a working process. No example projects were provided—likely because ours would become the first hybrid application ever released for the platform. Through persistent trial and error, I eventually established a functioning build pipeline—a particularly difficult task since even minor configuration errors would result in cryptic error codes with minimal debugging information. Further complicating matters, Unity has no native support for hybrid applications, requiring manual intervention at multiple stages. The process required building to a PS5 project instead of directly to a binary application, then carefully configuring it, and finally compiling to an executable binary. Additional hurdles included Unity ignoring configuration files, overriding config values, and refusing to update selected configuration files. Despite these technical obstacles, I successfully delivered a functional hybrid application.

In the meanwhile, my manager was learning about how to configure the application to be released. He was the one who setup all the publishing settings. I had to figure out how to build the application, after I got that done, I had to learn how to actually upload and process and schedule the first build as well as how to do patches to said build. We eventually got that done, after a whole lot of support tickets with Sony.

In parallel with my build process efforts, my manager was learning the requirements for publishing on Sony's platform. While he handled the publishing settings configuration, I took on the responsibility of learning how to upload, process, and schedule both the initial build and subsequent patches. Both processes proved to be challenging, requiring numerous support tickets with Sony. Despite these obstacles, we successfully prepared the application for release.

Our next challenge was navigating Sony's rigorous QA process. The initial submission returned numerous "Must Fix" issues for both application versions. This process became unexpectedly lengthy as we encountered shifting requirements—each time we addressed all known issues, we either discovered our fixes were insufficient or received new previously unreported requirements. Sony was particularly stringent about performance, necessitating significant refactoring of UI code originally written by previous developers. 

Perhaps the most surprising requirement came during our fourth submission cycle, when Sony suddenly mandated support for the PS5 media remote for our media application—a feature never previously mentioned as required for our VR version. Since Unity's PS5 input package lacked this functionality, I implemented it myself though a quite annoying pattern: creating a C++ wrapper library to interface with Sony's native input API, then building a C# wrapper to call the functions in the C++ wrapper to integrate with Unity. This was actually quite fun to do, however, I was certainly annoyed when some buttons did not work, only to discover that quick development builds did not get access to some buttons. I had to spend a whole bunch of extra time doing the hybrid build process described earlier. No--the documentation for Sony's input API does not mention this.

After six submission cycles, we finally received QA approval. Following some coordination challenges with Sony regarding release scheduling, the application was published. However, we soon discovered an issue with the 3D effect for stereoscopic videos—a critical feature for a VR video player. Despite my earlier testing, I had been uncertain about the proper implementation as the effect can be subtle in some content. I immediately addressed this in our first patch, which also included a comprehensive overhaul of the sideloading functionality I had been developing concurrently while waiting for Sony's QA feedback.

After these initial challenges, the project entered a more productive phase. I focused on addressing user-reported bugs—which were numerous given our accelerated release timeline—while simultaneously enhancing the application with new features. Significant improvements included implementing DLNA/UPnP support to enable streaming from media servers like Plex, completely redesigning all menu systems for better usability, adding user-selectable skyboxes for customization, and creating a comprehensive settings menu that had been absent from the initial release. By the time of my departure, the application had transformed dramatically, with all major bugs fixed and critical features implemented, leaving the product in a stable and feature-rich state.

{{< heading-link type="h2" >}} Documentation {{< /heading-link >}}
{{< media/gallery >}}
    {{< media/gallery-row >}}
        {{< media/image
            src="media/documentation_user_guides.png"
            alt="Rad TV for PS5 / PS VR2 Documentation"
            caption="User Guides"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}

        {{< media/image
            src="media/documentation_changelog.png"
            alt="Rad TV for PS5 / PS VR2 Documentation"
            caption="Changelogs"
            attribution="Image Content - © Little Star Media, Inc. All rights reserved."
            size="auto"
        >}}
    {{< /media/gallery-row >}}
{{< /media/gallery>}}
I refined every piece of documentation within the ['Getting Started - Subscribers, Viewers'](https://docs.rad.live/rad/getting-started-subscribers-viewers) section. I also crafted the ['Rad TV for PS5 / PS VR2'](https://docs.rad.live/rad/getting-started-subscribers-viewers/rad-tv-for-ps5-ps-vr2) subsection entirely from scratch. Note that this documentation covers two different applications combined into one; at the time of writing, only the PS VR2 version—which I worked on—has dedicated documentation, while the PS5 standard version does not. I was meticulous in creating and maintaining this documentation so that users could easily find detailed, useful information to make their experience with the PS VR2 app as seamless as possible. Additionally, I updated the changelog page with every public release—often including screenshots of new features—to ensure that users were well informed about the updates and how to access them.