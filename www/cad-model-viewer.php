<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <h3 id="cad-model-viewer">CADModelViewer</h3>
        <figure id="preview">
            <img src="media/cad-model-viewer/webp/preview.webp" alt="CAD Model Viewer Preview" style="width:100%">
        </figure>

        <br>

        <div>
            <h3 id="links">
                Links <a href="https://www.matthewgreen.gg/cad-model-viewer.php#links">#</a>
            </h3>
            <ul>
                <li><a href="https://git.matthewgreen.gg/mgreen/CADModelViewer.git">Personal Git Repo</a>
                    (Currently private)</li>
                <li><a href="https://github.com/greenmatthew/CADModelViewer">GitHub Repo</a> (Currently private)</li>
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
                        <li><a href="#demo-video">Demo Video</a></li>
                    </ul>
                </div>
                <li><a href="#lesson-system">Lesson System</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
                <li><a href="#future-work">Future Work</a></li>
            </ul>
        </div>

        <div>
            <h3 id="purpose">Purpose <a href="#purpose">#</a></h3>
            <p>
                    I was engaged by <a href="https://www.uta.edu/academics/faculty/profile?username=fernande#About%20Me">Dr. Raul Fernandez</a>, from the Mechanical and Aerospace Engineering Department at the University of Texas at Arlington, to independently develop a <a href="https://www.matthewgreen.gg/cad-model-viewer.php">VR application</a> for his innovative <a href="https://mevrstudy.uta.edu">Mechanical Engineering VR study program</a>. The application is designed to introduce students to Computer Aided Design (CAD) concepts within an immersive 3D virtual environment. The utilization of VR technology facilitates a focused interaction with CAD models, allowing students to engage in real-time exploration while following video lessons.
            </p>
        </div>

        <div>
            <h3 id="summary">Summary <a href="#summary">#</a></h3>
            <p>
                It is a learning application, made in Unity, intended to be a companion application to the current curriculum of Introduction to Engineering Design courses at the University of Texas at Arlington. The benefits of this application and the fact that it is VR, is that it is more interactive, immersive, and easier to have complete focus on learning as you are completely isolated from the real world distractions when inside a VR headset, as opposed to a textbook or a 2D application.
            </p>
            <p>
                It has been developed to be compatible with a wide range of devices including Google Cardboard for Android, SteamVR for Windows, and Meta (Oculus) Quest devices. Future updates will extend compatibility to more operating systems within each platform, providing students with an array of choices for accessing the app.
            </p>
            <figure>
                <div style="position: relative; padding-bottom: 56.25%;">
                    <iframe id="demo-video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/0FrUqwAcmxs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <figcaption style="text-align: center;"><a href="https://youtu.be/0FrUqwAcmxs?si=gPnbEYFItA4HMtqW">CADModelViewer Demo:</a> Demo video v1.</figcaption>
            </figure>
            <br>
        </div>

        <div>
            <h3 id="lesson-system">Lesson System <a href="#lesson-system">#</a></h3>
            <p>
                The cornerstone of the application is a feature we refer to as 'lessons,' designed to facilitate student learning. These lessons are created by packaging models and/or a video into a Unity AssetBundle, which enables post-deployment downloading—eliminating the need for app updates to access new lessons. Upon launching the application, users encounter a menu where they can open, download, or delete lessons.
            </p>
            <p>
                Take, for instance, a lesson focused on threaded holes: it might comprise a model displaying a threaded hole, another model presenting a cross-section of the first model, and a video explaining the concept of threaded holes. Students have the flexibility to pause and play the video, as well as translate, rotate, and scale the models, or even hide either or both models as needed.
            </p>
            <p>
                Looking ahead, the plan is to extend support for animations, with the aspiration of enabling direct imports from SolidWorks, a CAD modeling software, to enrich the learning experience.
            </p>
            <figure>
                <img src="media/cad-model-viewer/webp/scene-downloading.webp" alt="CADModelViewer Downloading Scene"
                    style="width:100%;">
            </figure>
            <figure>
                <img src="media/cad-model-viewer/webp/scene-opening.webp" alt="CADModelViewer Opening Scene"
                    style="width:100%;">
            </figure>
            <figure>
                <img src="media/cad-model-viewer/webp/scene-opened.webp" alt="CADModelViewer Opened Scene"
                    style="width:100%;">
            </figure>
            <figure>
                <img src="media/cad-model-viewer/webp/scene-playing.webp" alt="CADModelViewer Playing Scene"
                    style="width:100%;">
            </figure>
        </div>

        <div>
            <h3 id="conclusion">Conclusion <a href="#conclusion">#</a></h3>
            <p>
                After dedicating nearly two years to this app, the time has come to draw my involvement to a close. While there's a possibility of revisiting this project in the future, particularly if a full-time position opens up, I am proud to leave the app in its most refined state to date.
            </p>
            <p>
                The application has been developed to ensure compatibility across a diverse range of VR systems. Although comprehensive testing on various controllers has not been conducted, the app is designed to function seamlessly with any VR headset that supports SteamVR. Additionally, it's built to work with Google Cardboard on Android and Meta (formerly Oculus) Quest standalone VR headsets, even supporting hand tracking functionality.
            </p>
            <p>
                Creating lessons has never been easier, and while uploading them to a repository has been simplified, the absence of automatic lesson uploading still leaves room to further streamline the process. Presently, the app stands free of any major or noteworthy minor bugs, reflecting a high degree of polish and a slew of quality-of-life features that contribute to a robust and user-friendly experience.
            </p>
            <p>
                Now, the app has reached a milestone where it mirrors the initial vision we had for it. Fundamentally, it's complete; what remains is the addition of quality-of-life features and more content such as animations and extra backgrounds, which were not part of the original goal, to enhance the user experience further.
            </p>
        </div>

        <div>
            <h3 id="future-work">Future Work <a href="#future-work">#</a></h3>
            <p></p>
            <ul>
                <li>
                    <b>Lesson Creation:</b> It's crucial for Dr. Fernandez to begin crafting real lessons for the application to enable student utilization.
                </li>
                <br>
                <li>
                    <b>SolidWorks Assembly Import:</b> Enhance the capability to import entire SolidWorks assemblies into Unity, ensuring the proper rendering of textures and animations.
                </li>
                <br>
                <li>
                    <b>Platform Expansion:</b> Aim to support Google Cardboard on iOS, and potentially extend support to SteamVR on Linux, while acknowledging that SteamVR does not support MacOS.
                </li>
                <br>
                <li>
                    <b>Database Transition:</b> Transition from the existing lesson discovery mechanism, which relies on downloading an XML file from each remote lesson repository to gather lesson metadata, to a remote SQL database. This change aims to streamline lesson discovery and enable centralized querying across all lesson repositories while continuing to cache metadata in a local SQLite3 database.
                </li>
                <br>
                <li>
                    <b>Automated Lesson Upload:</b> Develop a feature within the Lesson Creator tool to facilitate the automatic uploading of lessons to an HTTP server, alongside the associated metadata to the remote SQL database. This would simplify the process of adding new lessons to the platform, ensuring that the lesson repositories are consistently updated with new content.
                </li>
                <br>
                <li>
                    <b>Background Customization:</b> Explore the option of allowing users to change the app's background or room setting. This feature could leverage Unity's AssetBundles for downloading and utilizing different backgrounds as needed. Consider capturing 360-degree photos of the UTA campus for a more personalized background option.
                </li>
                <br>
                <li>
                    <b>Settings Page Implementation:</b> Introduce a comprehensive settings page to accommodate various configurable options. A dedicated menu could facilitate adjustments such as selecting the dominant hand, toggling the laser pointer, modifying the menu height, and other preferences.
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