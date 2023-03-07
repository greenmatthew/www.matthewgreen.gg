<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php require 'modules/header.php'; ?>
</head>

<body>
    <div class="container">
        <h3 id="cad_model_viewer">CAD Model Viewer</h3>
        <figure id="preview">
            <img src="cad_model_viewer/preview.png" alt="CAD Model Viewer Preview" style="width:100%">
        </figure>

        <br>

        <div>
            <h3 id="links">
                Links <a href="https://www.matthewgreen.gg/cad_model_viewer.php#links">#</a>
            </h3>
            <ul>
                <li><a href="https://git.matthewgreen.gg/matthewgreen/CADModelViewer.git">Personal Git Repo</a></li>
                <li><a href="https://github.com/greenmatthew/CADModelViewer">GitHub Repo</a></li>
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
                <li><a href="#scene_system">Scene System</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
                <li><a href="#future_work">Future Work</a></li>
            </ul>
        </div>

        <div>
            <h3 id="purpose">Purpose <a href="#purpose">#</a></h3>
            <p>
                This is a prototype application being made for the Mechanical and Aerospace Engineering department's
                Introduction to Engineering Design courses at the University of Texas at Arlington.
            </p>
        </div>

        <div>
            <h3 id="summary">Summary <a href="#summary">#</a></h3>
            <p>
                It is a learning application, made in Unity, intended to be a companion application to the current
                curriculum of Introduction to Engineering Design's current curriculum. The benefits of this application
                and the fact that it is VR, is that it is more interactive, immersive, and easier to have complete focus
                on learning as you are completely isolated from the real world distractions when inside a VR headset, as
                opposed to a textbook or a 2D application.
            </p>
            <p>
                It is planned to work for the SteamVR and Oculus (Meta) platforms on Windows, MacOS, and Linux for PC VR
                headsets, the Oculus platform again on Android for the Quest and Quest 2 standalone VR headsets, then
                finally the Google Cardboard platform on Android and iOS for phone VR headsets. So, students do not even
                need a dedicated VR headset, they can just use their phone with an inexpensive cardboard phone headset.
            </p>
            <figure id="demo_video">
                <video src="cad_model_viewer/demo.mp4" type="video/mp4" style="width:100%;" controls>
                    Your browser does not support the video tag.
                </video>
                <figcaption>
                </figcaption>
            </figure>
        </div>

        <div>
            <h3 id="scene_system">Scene System <a href="#scene_system">#</a></h3>
            <p>
                Upon opening the application, you will be greeted with a menu where you can open, download, or delete
                scenes. These scenes are a model or a few models, accompanied by a video. A scene is a lesson for a
                student. For example, if the lesson is about threaded holes, you may have a model with a threaded hole,
                then another model that is a cross section of the first model, with a video talking about the topic. You
                can pause and play the video at will. You can translate, rotate, and scale the models. You can hide one
                or both models. We are working to get more advanced scenes working, such as model's with animations, so
                maybe in the future you could see a screw torquing into the threaded hole.
            </p>
            <p>
                New scenes can easily be made available to student's because they can just download new ones straight
                through the application. They do not need to update their application just to get new scenes. The scenes
                could also in the future include meta data about the course and instructor so the scenes available to
                the student are only applicable to them.
            </p>
            <figure>
                <img src="cad_model_viewer/webp/scene_downloading.webp" alt="CAD Model Viewer Downloading Scene"
                    style="width:100%;">
            </figure>
            <figure>
                <img src="cad_model_viewer/webp/scene_opening.webp" alt="CAD Model Viewer Opening Scene"
                    style="width:100%;">
            </figure>
            <figure>
                <img src="cad_model_viewer/webp/scene_opened.webp" alt="CAD Model Viewer Opened Scene"
                    style="width:100%;">
            </figure>
            <figure>
                <img src="cad_model_viewer/webp/scene_playing.webp" alt="CAD Model Viewer Playing Scene"
                    style="width:100%;">
            </figure>
        </div>

        <div>
            <h3 id="conclusion">Conclusion <a href="#conclusion">#</a></h3>
            <p>
                While this project is still ongoing, I will talk about the current build of the application. It is a
                well-polished and fluid experience. It is working for all the platforms we planned to support, however,
                exact devices and operating systems have still yet to be built for and tested. We could potentially
                start using the application for a limited number of devices at first to start getting user feedback and
                testing its purpose as a learning companion application.
            </p>
        </div>

        <div>
            <h3 id="future_work">Future Work <a href="#future_work">#</a></h3>
            <p></p>
            <ul>
                <li>
                    Start making real scenes for the application, so that students can start using it.
                </li>
                <li>
                    Import whole SolidWorks assemblies to Unity, that is importing model or models, with working
                    textures and animations.
                </li>
                <li>
                    Get all platforms with all operating systems.
                </li>
                <li>
                    Add Oculus (Meta) Quest hand tracking as an alternative to using controllers.
                </li>
                <li>
                    Switch from XML to SQL databases for storing scene meta data. SQL will make things a whole lot
                    more dependable and implementation less esoteric. Anyone who knows SQL could easily modify or add
                    new meta data to scenes. As well as make it easier to scale to more than a single instructor or
                    class for the application.
                </li>
                <li>
                    Possibly make a custom background or backgrounds. Currently the application still uses the Google
                    Cardboard Sample scene's background. While it looks great it may be nice to have something else
                    available to choose from.
                </li>
                <li>
                    Add accessibility and quality or life settings.
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