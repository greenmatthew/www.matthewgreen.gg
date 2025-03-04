---
type: project
layout: project
priority: 100
title: "CADModelViewer"
summary: "It is a learning application, made in Unity, intended to be a companion application to the current curriculum of Introduction to Engineering Design courses at the University of Texas at Arlington."
previewImage:
    src: "cad-model-viewer/preview.png"
    attribution: "Image Content - © University of Texas at Arlington. All rights reserved."
---
{{< custom-header type="h2" id="links" text="Links" >}}
- [Personal Git Website Repo](https://git.matthewgreen.gg/mgreen/CADModelViewer.git)
- [GitHub Repo](https://github.com/greenmatthew/CADModelViewer.git)

{{< custom-header type="h2" id="content" text="Content" >}}
- [Purpose](#purpose)
- [Summary](#summary)
  - Demo Video
- [Lesson System](#lesson-system)
  - Lesson System Screenshots
- [Conclusion](#conclusion)
- [Future Work](#future-work)
- [Controls](#controls)
  - [Oculus](#oculus)
  - [SteamVR (or Oculus headsets running SteamVR](#steamvr-or-oculus-headsets-running-steamvr)
    - [Valve Index (Knuckles) Controllers)](#valve-index-knuckles-controllers)
    - [Oculus Touch Controllers](#oculus-touch-controllers)
    - [HTC Vive Controllers](#htc-vive-controllers)
  - [Google Cardboard](#google-cardboard)
- [Developer Tutorials](#developer-tutorials)

{{< custom-header type="h2" id="purpose" text="Purpose" >}}
I was engaged by [Dr. Raul Fernandez](https://www.uta.edu/academics/faculty/profile?username=fernande#About%20Me), from the Mechanical and Aerospace Engineering Department at the University of Texas at Arlington, to independently develop a [VR application](https://www.matthewgreen.gg/cad-model-viewer.php) for his innovative [Mechanical Engineering VR study program](https://mevrstudy.uta.edu). The application is designed to introduce students to Computer Aided Design (CAD) concepts within an immersive 3D virtual environment. The utilization of VR technology facilitates a focused interaction with CAD models, allowing students to engage in real-time exploration while following video lessons.

{{< custom-header type="h2" id="summary" text="Summary" >}}
It is a learning application, made in Unity, intended to be a companion application to the current curriculum of Introduction to Engineering Design courses at the University of Texas at Arlington. The benefits of this application and the fact that it is VR, is that it is more interactive, immersive, and easier to have complete focus on learning as you are completely isolated from the real world distractions when inside a VR headset, as opposed to a textbook or a 2D application.

It has been developed to be compatible with a wide range of devices including Google Cardboard for Android, SteamVR for Windows, and Meta (Oculus) Quest devices. Future updates will extend compatibility to more operating systems within each platform, providing students with an array of choices for accessing the app.

{{< media/youtube/playlist
    id="PLpi46z0QnwL0fFAPJJlend6jgpXqLrw9W"
    title="CADModelViewer Demo Video"
    caption="If you would like to see the Demo v1 video you can just click the forward arrow as this is a playlist or you can click <a href='https://youtu.be/0FrUqwAcmxs'>here</a>."
    attribution="Video Content - © University of Texas at Arlington. All rights reserved."
>}}

{{< custom-header type="h2" id="lesson-system" text="Lesson System" >}}
The cornerstone of the application is a feature we refer to as 'lessons', designed to facilitate student learning. These lessons are created by packaging models and/or a video into a Unity AssetBundle, which enables post-deployment downloading—eliminating the need for app updates to access new lessons. Upon launching the application, users encounter a menu where they can open, download, or delete lessons.

Take, for instance, a lesson focused on threaded holes: it might comprise a model displaying a threaded hole, another model presenting a cross-section of the first model, and a video explaining the concept of threaded holes. Students have the flexibility to pause and play the video, as well as translate, rotate, and scale the models, or even hide either or both models as needed.

Looking ahead, the plan is to extend support for animations, with the aspiration of enabling direct imports from SolidWorks, a CAD modeling software, to enrich the learning experience.

{{< media/gallery >}}
    {{< media/gallery-row >}}
        {{< media/image
            src="cad-model-viewer/scene-downloading.png"
            alt="CAD Model Viewer Downloading Scene"
            caption="Downloading a Lesson."
            attribution="Image Content - © University of Texas at Arlington. All rights reserved."
        >}}

        {{< media/image
            src="cad-model-viewer/scene-opening.png"
            alt="CAD Model Viewer Opening Scene"
            caption="Opening a Lesson."
            attribution="Image Content - © University of Texas at Arlington. All rights reserved."
        >}}
    {{< /media/gallery-row >}}

    {{< media/gallery-row >}}
        {{< media/image
            src="cad-model-viewer/scene-opened.png"
            alt="CAD Model Viewer Opened Scene."
            caption="Opened Lesson."
            attribution="Image Content - © University of Texas at Arlington. All rights reserved."
        >}}

        {{< media/image
            src="cad-model-viewer/scene-playing.png"
            alt="CAD Model Viewer Playing Scene"
            caption="Interacting with Lesson."
            attribution="Image Content - © University of Texas at Arlington. All rights reserved."
        >}}
    {{< /media/gallery-row >}}
{{< /media/gallery >}}


{{< custom-header type="h2" id="conclusion" text="Conclusion" >}}
After nearly two years of dedicated work on this app, it's in the most refined state to date.

The application has been crafted to ensure compatibility across a diverse range of VR systems. Although comprehensive testing on various controllers has not been conducted, the app is designed to function seamlessly with any VR headset that supports SteamVR. Additionally, it's built to work with Google Cardboard on Android and Meta (formerly Oculus) Quest standalone VR headsets, even supporting hand tracking functionality.

Creating lessons is now a more streamlined process, and while uploading them to a repository has been simplified, the absence of automatic lesson uploading still leaves room to further streamline the process. Presently, the app stands free of any major or noteworthy minor bugs, reflecting a high degree of polish and a slew of quality-of-life features that contribute to a robust and user-friendly experience.

Now, the app has reached a milestone where it mirrors the initial vision that was set for it. Fundamentally, it's complete; what remains is the addition of quality-of-life features and more content such as animations and extra backgrounds, which were not part of the original goal, to enhance the user experience further.

{{< custom-header type="h2" id="future-work" text="Future Work" >}}
- **Lesson Creation:** It's crucial for Dr. Fernandez to begin crafting real lessons for the application to enable student utilization.

- **SolidWorks Assembly Import:** Enhance the capability to import entire SolidWorks assemblies into Unity, ensuring the proper rendering of textures and animations.

- **Platform Expansion:** Aim to support Google Cardboard on iOS, and potentially extend support to SteamVR on Linux (noting that MacOS remains unsupported).

- **Database Transition:** Transition from the existing lesson discovery mechanism, which relies on downloading an XML file from each remote lesson repository to gather lesson metadata, to a remote SQL database. This change aims to streamline lesson discovery and enable centralized querying across all lesson repositories while continuing to cache metadata in a local SQLite3 database.

- **Automated Lesson Upload:** Develop a feature within the Lesson Creator tool to facilitate the automatic uploading of lessons to an HTTP server, alongside the associated metadata to the remote SQL database. This would simplify the process of adding new lessons to the platform, ensuring that the lesson repositories are consistently updated with new content.

- **Background Customization:** Explore the option of allowing users to change the app's background or room setting. This feature could leverage Unity's AssetBundles for downloading and utilizing different backgrounds as needed. Consider capturing 360-degree photos of the UTA campus for a more personalized background option.

- **Settings Page Implementation:** Introduce a comprehensive settings page to accommodate various configurable options. A dedicated menu could facilitate adjustments such as selecting the dominant hand, toggling the laser pointer, modifying the menu height, and other preferences.

{{< custom-header type="h2" id="controls" text="Controls" >}}
- ### Oculus
  - 'Trigger' - Interact with UI (or swapping between left and right controller for UI interaction)
  - 'B' - Reset Camera
- ### SteamVR (or Oculus headsets running SteamVR)
  - #### Valve Index (Knuckles) Controllers
    - 'Trigger' - Interact with UI (or swapping between left and right controller for UI interaction)
    - 'B' - Reset Camera
  - #### Oculus Touch Controllers
    - 'Trigger' - Interact with UI (or swapping between left and right controller for UI interaction)
    - 'B' or 'Y' - Reset Camera
  - #### HTC Vive Controllers
    - 'Trigger' - Interact with UI (or swapping between left and right controller for UI interaction)
    - 'Menu' - Reset Camera
- ### Google Cardboard
    - 'Trigger' or 'Screen Press' - Interact with UI

{{< custom-header type="h2" id="developer-tutorials" text="Developer Tutorials" >}}

{{< media/youtube/playlist
    id="PL6PRkJTMYWn2NLR9_9sObfgX2RnSE-tWZ"
    title="CADModelViewer Developer Tutorials"
    caption="A YouTube playlist of all the Developer tutorials."
    attribution="Image Content - © University of Texas at Arlington. All rights reserved."
>}}

- [YouTube Channel](https://www.youtube.com/@MatthewGreenUTA)
- [Developer Tutorials Playlist](https://youtube.com/playlist?list=PL6PRkJTMYWn2NLR9_9sObfgX2RnSE-tWZ&si=NCy5MkIZpJGuzwwt)
- [How to install Unity and Open CADModelViewer with GitHub repo](https://youtu.be/SWgSGMGT6zE)
- [How to create a lesson for CADModelViewer](https://youtu.be/DU2TdbVnWuE)
- [How to build CADModelViewer in Unity](https://youtu.be/5mVli2j72rQ)
- [How to import files, make materials, and bringing those together to create a lesson in Unity](https://youtu.be/7WIeX7rQ0aA)
- [How to use SteamVR Input in Unity](https://youtu.be/o8Gso-tdGws)