---
title: "Custom Game Engine & Tech Demo"
id: "game-engine-tech-demo"
priority: 200  # Controls order in listings (lower numbers appear first)
type: "project"
draft: false  # Set to true to hide this project from production

summary: "Created a custom game engine from scratch using C++ and Vulkan for graphics rendering. The project evolved into a technical demonstration showcasing various engine capabilities. Initially began development on a game alongside the engine, but both projects ultimately served as technology demonstrations rather than completed products."
# Preview image for listings
previewImage:
    src: "media/preview.png"
    alt: "Custom Game Engine & Tech Demo Preview"
---
{{< heading-link type="h2" >}} Links {{< /heading-link >}}

- Tech Demo Binary Releases: [git.matthewgreen.gg](https://git.matthewgreen.gg/mgreen/HarvestHavoc/releases) | [github.com](https://github.com/greenmatthew/HarvestHavoc/releases)
- Tech Demo Repository: [git.matthewgreen.gg](https://git.matthewgreen.gg/mgreen/HarvestHavoc.git) | [github.com](https://github.com/greenmatthew/HarvestHavoc.git)
- Game Engine Library Repository: [git.matthewgreen.gg](https://git.matthewgreen.gg/mgreen/Velecs.git) | [github.com](https://github.com/greenmatthew/VelecsEngineCPP.git)
  - **Note:** The game engine can also be found within the Tech Demo repository as a submodule at `libs/velecs/`

{{< heading-link type="h2" >}} Content {{< /heading-link >}}
<!-- markdownlint-disable MD051 -->
- [Purpose](#purpose)
- [Custom Game Engine](#engine)
  - [Name](#engine-name)
  - [Summary](#engine-summary)
  - [Features](#engine-features)
  - [Technology Stack](#engine-tech-stack)
  - [Conclusion](#engine-conclusion)
  - [Future Work](#engine-future)
- [Tech Demo](#demo)
  - [Summary](#demo-summary)
  - [Conclusion](#demo-conclusion)
  - [Future Work](#demo-future)
- [Learning](#learning)
- [Project Conclusion](#conclusion)
<!-- markdownlint-enable MD051 -->

{{< heading-link type="h2" >}} Purpose {{< /heading-link >}}
I initiated this project with two main objectives in mind: to refine my C++ programming skills and to venture into the realm of graphics programming. My choice of C++ was heavily guided by its prevalent demand in the game development sector, reflecting what employers typically look for. In fact, every aspect of this project was tailored to align with potential employer expectations, a strategy that influenced not only the version of C++ I used but also the overall approach to building the project. While these choices were made with industry standards in mind, they diverge from what I might have selected for a purely personal project.

{{< heading-link type="h2" id="engine" >}} Custom Game Engine {{< /heading-link >}}

{{< heading-link type="h3" id="engine-name" >}} Name {{< /heading-link >}}
The custom game engine is named 'Velecs' (pronounced 'vel-leks' (/vɛl-lɛks/)). This name evolved through a thoughtful development process, beginning with the initial concept of 'VelocityECS Engine', which symbolized a high-performance engine capable of handling numerous Entity Component System (ECS) processes efficiently. The name gradually transformed from 'VelocityECS' to 'VelECS', and finally to 'Velecs'. This final form not only retains the essence of its origins – signifying speed and efficiency – but also stands as a unique and distinctive identifier that captures the innovative spirit of the engine.

{{< heading-link type="h3" id="engine-summary" >}} Summary {{< /heading-link >}}
Velecs represents my first venture into game engine development. Harnessing Vulkan for rendering, it was envisioned as a highly configurable engine tailored to the diverse requirements of different gaming projects. Its design philosophy hinges on flexibility, allowing developers the choice between using pre-built solutions akin to Unity's project templates or devising bespoke implementations.

{{< heading-link type="h3" id="features" >}} Features {{< /heading-link >}}

- 3D and 2D Compatibility

    Velecs Engine is designed for 3D rendering, utilizing Vulkan's native coordinate system. For 2D game development, the z-axis can simply be ignored, showcasing the engine's adaptability for different game formats.

- Camera as an Entity

    The engine treats the camera as an actual entity within the game world, allowing it to be moved and rotated like any other object. This offers developers enhanced control and flexibility in camera handling.

- Scene-Graph Approach:

    A scene-graph approach is employed for managing transforms. Positions, rotations, and scales of entities are relative to their parent entity, if one exists, providing a structured and intuitive way to handle object transformations.

{{< media/image
    src="media/scene-graph-code-example.png"
    alt="Velecs Scene Graph Code Example"
    class="centered"
    caption="Showing the code used for the scene graph video below."
>}}

{{< media/video-gif src="media/scene-graph-example.mp4" width="500px" alt="Velecs Scene Graph Example" class="centered" caption="This video demonstrates the use of scene graphs in the Velecs engine. Scene graphs are a hierarchical structure where the position, rotation, and scale of each entity are relative to their parent, if any. In the video, multiple entities are featured, including one labeled 'Player'. The camera is attached to the 'Player' entity, which rotates at a constant rate of 45 degrees per second. As the camera is attached to the player, it rotates with it, keeping the triangle consistently in view. This setup gives the appearance of other entities rotating around the player. Notably, backface culling is disabled, allowing the backs of the 2D meshes to be visible, further showcasing the engine's capabilities with scene graphs." >}}

- Simple Input Polling

    Inspired by a technique I discovered in an Overwatch Seminar at GDC 2017, Velecs uses a singleton entity approach for input polling. This method, while simpler than my original complex input system, proved to be highly effective, easy to implement, and seamlessly integrated with Flecs. The singleton entity serves as a unique entity with a specific component for input, streamlining the process and reducing data-system coupling issues.

{{< media/youtube/video id="W3aieHjyNvw" startAt="741" title="Overwatch Seminar at GDC 2017" width="360" centered="true" caption="This segment from the Overwatch Seminar at GDC 2017 inspired the singleton entity approach for the input system in Velecs, showcasing an efficient and convenient method for handling game inputs." >}}

{{< media/image
    src="media/input-code-example.png"
    alt="Velecs Input System Code Example"
    class="centered"
    caption="Code snippet demonstrating the use of the input singleton component for player movement in Velecs."
>}}

- Easy and Quick Window Resizing
  Velecs offers robust window management capabilities, including:
  - Responsive window resizing.
  - Minimization and maximization functionality.
  - Fullscreen mode, easily toggled with the F11 key.

- Versatile Model Importing

    The engine leverages ASSIMP (Open Asset Import Library) to support importing a wide range of common model file formats, enhancing its flexibility in handling different types of game assets.

- Immediate GUI System
    An immediate mode GUI system is already implemented in Velecs. Dear ImGui, a powerful and efficient library for creating graphical user interfaces, has been integrated to provide intuitive and customizable UI elements.

{{< heading-link type="h3" id="engine-tech-stack" >}} Technology Stack {{< /heading-link >}}

- **C++**

    My decision to use C++ for this project was influenced by its prevalent demand in the game development industry, particularly with the rising popularity of Unreal Engine, especially since the release of UE5. Many proprietary game engines also favor C++, cementing its status as a go-to language for game development. As for the version, I opted for C++17. While C++20 offers appealing features like modules that could reduce code duplication, I chose C++17 due to its widespread adoption and support, including its status as Unreal Engine's minimum supported version. This made C++17 a more pragmatic choice, ensuring compatibility and relevance within the current game development landscape.

- **CMake**

    The project began with Visual Studio but transitioned to CMake for greater control over the build process. This shift was challenging but ultimately beneficial, leveraging CMake's versatility.

- **Vulkan**

    Vulkan was selected for its efficiency and hardware scalability. This choice is in line with my goal to maximize performance for a highly demanding game I've envisioned.

- **Visual Studio**

    While I initially relied on Visual Studio for the entire build process, I eventually transitioned to using CMake as the primary build system. I now use CMake to generate a Visual Studio Solution, which allows me to leverage Visual Studio’s excellent building, debugging, and profiling capabilities. Interestingly, despite this, my coding is done exclusively in VS Code, utilizing it for its streamlined editing environment.

- **SDL2**

    It was chosen for its integrated sound playback, a feature lacking in GLFW. Future plans might include switching to a more specialized audio library like Steam Audio, but SDL2 currently serves well.

- **[Dear ImGui](https://github.com/ocornut/imgui)**

    My interest in Dear ImGui was first sparked by a strong recommendation from a friend. This piqued my curiosity, leading me to explore further. I also found invaluable insights from [The Cherno](https://www.youtube.com/@thecherno), a credible ex-EA developer renowned for his expertise in game engines and C++. His numerous videos discussing C++ GUI and his advocacy for immediate GUIs solidified my decision to integrate Dear ImGui. It now serves as the primary and exclusive GUI system for both the engine and the game, offering an efficient and straightforward user interface experience.

- **[ASSIMP](https://github.com/assimp/assimp)**

    Initially, I considered using [tinyobjloader](https://github.com/tinyobjloader/tinyobjloader) for its simplicity. However, the versatility of ASSIMP in handling a wide range of mesh formats with minimal additional effort made it an irresistible choice. Its widespread use in the industry further affirmed my decision, offering a robust solution for complex model imports.

- **[Fast Lightweight Entity Component System (Flecs)](https://github.com/SanderMertens/flecs)**

    My initial plan was to develop my own ECS, but I soon realized the benefits of using an established and efficient system like Flecs. In my search for an ECS system, I was torn between [EnTT](https://github.com/skypjack/entt) and Flecs. While EnTT’s use in Minecraft Bedrock Edition was appealing, Flecs won me over with its superior handling of large numbers of entities – a critical feature for the ambitious scale of my game.

{{< heading-link type="h3" id="engine-conclusion" >}} Conclusion {{< /heading-link >}}

The development of the Velecs Engine has been an enlightening journey, marked by significant challenges and substantial growth. Since its inception, the engine has evolved considerably, with major strides in integrating advanced features like Flecs and continuously adapting to new learning. Each phase of development has necessitated thoughtful reorganizations and enhancements of the codebase.

It is definitely still considered incredibly early stages of a game engine. I am no longer currently working on this project as right after writing this project page I got my job at Rad TV and stopped working on it. But one day I may remake it in the Rust programming language.

{{< heading-link type="h3" id="engine-future" >}} Future Work {{< /heading-link >}}

- **Fix Z-Depth Buffers and Manage Z-Fighting**

    Currently, the z-depth does not affect which mesh is rendered on top. Additionally, there is no mechanism to decide which mesh is rendered on top when multiple meshes have the same z-value.

- **Audio Implementation**

    Audio capabilities haven't been implemented yet. While SDL2 provides basic sound playback functionality, I might explore more specialized libraries like Steam Audio for advanced features in the future, though this would require further research to determine the best fit for the project's needs.

- **Exploring Rust for Future Engine Development**

    I'm deeply interested in Rust because its design philosophy and safety features personally resonate with me. The language represents how I would design a programming language myself - catching many issues during compilation and preventing runtime errors that plague other languages like C++. Being open-source, versatile, and growing in popularity, Rust offers exciting possibilities for game development - including even a [library for generating GPU shaders](https://rust-gpu.github.io/). By creating my own engine in Rust rather than using existing solutions like [Bevy](https://bevyengine.org/), I could design systems specifically tailored to my game's needs without being constrained by others' design decisions. Additionally, developing my own engine means complete ownership with no royalty payments to commercial engine providers, though I recognize this approach requires significant investment of time and effort.

---

{{< heading-link type="h2" id="demo" >}} Tech Demo {{< /heading-link >}}

{{< heading-link type="h3" id="demo-summary" >}} Summary {{< /heading-link >}}
This tech demo was initially conceived as a game project, aptly name Harvest Havoc, that would showcase the capabilities of the Velecs Engine. It was inspired by the factory building and resource management automation genre, known for titles like Factorio and Satisfactory. A simpler game in this genre called Vectorio was particularly influential with its straightforward graphics consisting of basic shapes and vector images. This minimalist approach aligned perfectly with my strengths and interests as a software engineer more focused on programming and game design rather than art creation.

The tech demo utilizes basic 2D meshes and vertex colors for its visual elements, sidestepping the need for elaborate art and letting me concentrate on creating clear and engaging gameplay mechanics. To aid clarity, the design incorporates name tags and distinct colors, shapes, and sizes for different elements, ensuring everything is easily distinguishable.

When it was first devised to be a game, it's planned but unrealized central theme revolved around survival in a hostile environment, echoing the gritty, military-industrial atmosphere of Factorio and Vectorio. In Harvest Havoc, building and managing an industrial base is intertwined with an ongoing arms race for survival. Players are constantly challenged to advance their technology and expand their defenses to prevent being overrun by alien threats. This “build to survive” ethos is a driving force in the game, compelling players to strategically balance industrial growth with robust defensive measures against the ever-present danger posed by enemy "nests."

{{< heading-link type="h3" id="demo-conclusion" >}} Conclusion {{< /heading-link >}}
Developing the Velecs Engine to be functional and user-friendly has been a substantial undertaking. As a result, progress on Harvest Havoc has been slow, but it has at least begun. Currently, the game features name tags, several primitive 2D shaped meshes, and the initial stages of resource harvesting, starting with Iron Ore. I am also in the early phases of implementing an inventory system. As this is an ongoing project, the information here may become outdated; there might be more gameplay features added since this writing.

{{< media/youtube/playlist
    id="PLpi46z0QnwL1tIE-JxsjaGmEKhV100oyS"
    autoplay="false"
    title="Harvest Havoc Latest Demo Video"
    caption="The current latest build of Harvest Havoc. The game is still in active development, I will try and keep updating this playlist with newer videos as I add more features and content."
>}}

{{< heading-link type="h3" id="demo-future" >}} Future Work {{< /heading-link >}}

- **Machines**

    Currently, the game only allows manual mining of iron ore. Future developments will introduce machinery for automation. This includes miners to harvest ore, smelters to process iron ore into iron bars, and crafters for constructing various items, adding depth and complexity to resource management.

- **Conveyor Belts**

    To fully automate the process, conveyor belts are essential for moving materials between machines. Implementing conveyor belts, along with splitters for dividing their flow, will be a key feature to streamline production lines.

- **Inventory System**

    The current version has a basic on-screen counter for iron ore. A comprehensive inventory system is planned to enhance gameplay with inventory management challenges and enable more interactive mechanisms with machines like miners and crafters.

- **Crafting System**

    A core element of any factory building game is crafting. The development of a robust crafting system is in the pipeline, facilitating both machine-based and manual crafting options within the player's inventory menu.

- **Procedural Generation**

  - **Ore Nodes**: Transitioning from hardcoded ore nodes to procedurally generated ones will add variety and unpredictability to resource gathering.

  - **Background Biomes**: Introducing diverse biomes will enrich the game's environment, making exploration and resource gathering more dynamic.

- **More Resources to Harvest**

    Plans include introducing a range of resources beyond the typical offerings in similar games, such as copper, coal (for power generation and steel smelting), sand (for glass and semiconductors), gold, silver, and many more. The aim is to adopt a more scientific and realistic approach to resource management, setting Harvest Havoc apart from its peers.

- **Enemies**

    In Harvest Havoc, players will face the challenge of defending their base against alien threats from expanding "nests." This feature creates a dynamic environment where strategic planning and military capabilities are crucial for survival. The game emphasizes an arms race against encroaching enemies, requiring players to develop effective defenses and offensive strategies.

- **Turrets, Walls, and Weapons**

    To safeguard your factory against alien invasions, defensive structures like turrets and walls will be indispensable. For those preferring a more proactive approach, a range of handheld weapons and vehicles will be available, enabling players to aggressively clear out nests or bolster their base's defenses.

- **Player Modifications**

    Enhance your player's capabilities with permanent modifications. These upgrades can range from increased movement speed and boosted health to other unique enhancements, adding a new layer of strategy and personalization to the gameplay experience.

- **Research System**

    Progress in Harvest Havoc will be gated behind a research system. Crafting recipes, new machines, and advanced defense and offense capabilities will all be unlockable through reaching specific research milestones. This system will require a strategic allocation of resources and time, adding depth to the game's progression.

- **Save & Loading System**

    Of course, you'll want your meticulously built factory to persist between gaming sessions. A robust save and loading system will ensure your progress is always safely stored - because, let's face it, in the very, **VERY** rare event of a bug in my perfectly coded game, you wouldn’t want your hard work to vanish into thin air.

{{< heading-link type="h2" >}} Learning {{< /heading-link >}}
Working on the Velecs Engine project has been a deeply satisfying experience. There's something uniquely rewarding about designing system architectures from scratch and then seeing them come to life through incremental development. Along the way, I've encountered numerous what I'd call 'Oh, that's why that's like that' moments, which have been both enlightening and gratifying.

A prime example of this was while implementing the render pipeline and shaders. It was during this process that I truly grasped why game engines like Unity offer multiple render pipelines, such as the Universal and High Definition Render Pipelines. The choice of pipeline and its implications on materials suddenly made perfect sense.

Another one of these moments came when revisiting my past work with voxel meshes in Unity. Previously, I had used the CPU and compute shaders on the GPU without fully understanding the underlying limitations, like why a single voxel required 24 vertices instead of 8. Now, equipped with a deeper knowledge of graphics programming, I realize that optimizing such processes would require writing custom shaders or even an entire render pipeline.

Here's a summary of the key areas where I've expanded my knowledge, exploring realms I hadn't ventured into before:

- **Visual Studio Project Management**

    This project deepened my understanding of Visual Studio's capabilities beyond basic usage. I learned to manage complex project structures, handle custom build processes, and efficiently integrate third-party dependencies.

- **CMake**

    My university education didn't include CMake, so diving into it was a new venture. The learning curve was steep, but immensely rewarding. I've come to understand why CMake is the de facto standard for building C++ projects. Its flexibility and power in handling complex build processes have been eye-opening.

- **Vulkan**

    Before this project, I had no experience with graphics APIs. Working with Vulkan was a leap into the deep end, offering a profound insight into how game engines operate at a granular level. It's been a transformative journey, substantially enhancing my understanding of graphics programming.

- **SDL2**

    Working with SDL2 was an introduction to C++ GUI applications beyond my brief experience with GTK+.

- **3rd Party Lib Management**

    Having previously managed libraries in Python and Rust, I found C++ to present a unique challenge due to the lack of a universal package manager. My initial attempts with various C++ package managers led to some roadblocks. Eventually, I adopted a system inspired by the C++ Boost library, using the Vulkan SDK for some libraries and git submodules like the Boost library for everything else not included by the SDK. This approach, while increasing the project's size, offers an effective balance of ease of update and management. Not too mention the benefit of having the entire libraries repositories, meant that I have lots of example code I can look at easily all without having to leave the editor.

- **[Fast Lightweight Entity Component System (Flecs)](https://github.com/SanderMertens/flecs)**

    My experience with Flecs marked my first deep dive into a strict ECS framework. Unlike Unity's ECS, where component and system boundaries are somewhat blurred, Flecs enforces a more disciplined structure. While I haven’t worked with Unity DOTS, which is more akin to Flecs, this was a new terrain for me, especially in terms of component-based querying and maintaining a clear separation between components and behavior. The transition involved a steep learning curve, particularly when I had to replace a complex input system I initially developed (similar to Unity's new input system) with one compatible with Flecs. Although it was challenging to let go of my initial system, integrating Flecs proved to be a valuable evolution for the engine, enhancing both rendering and input functionalities.

- **[ASSIMP](https://github.com/assimp/assimp)**

    Venturing into using a mesh importer library like ASSIMP was a new experience for me. However, my background in creating meshes from scratch in Unity, along with my familiarity with Autodesk 3DS Max and Blender, facilitated a smooth learning curve. I found ASSIMP user-friendly and intuitive, which made integrating it into my project straightforward and effective.

- **[Dear ImGui](https://github.com/ocornut/imgui)**

  Setting up and using an immediate GUI with Dear ImGui was a new experience. I learned how to integrate it into a rendering system, appreciating the simplicity and effectiveness of immediate mode GUIs in project development.

{{< heading-link type="h2" id="conclusion" >}} Project Conclusion {{< /heading-link >}}
Shortly after completing this portfolio page, I began my position at [Rad TV](/rad-tv-for-ps-vr2/) and officially closed this project. The custom game engine and tech demo served their purpose as vehicles to sharpen my C++ skills while exploring my interests in game engine architecture and computer graphics. Though this chapter has ended, I hope to one day revisit these concepts and rebuild the engine in Rust, taking advantage of that language's safety features and modern design philosophy.
