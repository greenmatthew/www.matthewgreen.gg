---
type: project
layout: project

priority: 200
title: "Velecs Engine & Harvest Havoc"
summary: "Velecs Engine is a game engine developed entirely from scratch, harnessing the power of C++ alongside Vulkan for its high-performance graphics rendering capabilities. Currently, I am creating Harvest Havoc, a game that presently serves as a technical demonstration of the engine’s capabilities. Both are in active and parallel development."
previewImage:
    src: "velecs-and-harvest-havoc/preview.png"
---

{{< custom-header type="h2" id="notice" text="Notice" >}}
The content of this page may be outdated. Velecs Engine and Harvest Havoc are actively being worked on, making it hard to keep this webpage perfectly up-to-date. If you want to see the most up-to-date information about these projects, please check to see if there is anything new by checking the latest commits on the repositories below.

{{< custom-header type="h2" id="links" text="Links" >}}
- [Harvest Havoc's Latest Releases on Personal Git Website Repository](https://git.matthewgreen.gg/mgreen/HarvestHavoc/releases)
- [Harvest Havoc's Latest Releases on Github Repository](https://github.com/greenmatthew/HarvestHavoc/releases)
- [Harvest Havoc on Personal Git Website Repository](https://git.matthewgreen.gg/mgreen/HarvestHavoc.git)
- [Harvest Havoc on Github Repository](https://github.com/greenmatthew/HarvestHavoc.git)

**Note: Velecs Engine can be found inside the Harvest Havoc repository as a submodule at libs/velecs/**

- [Velecs Engine on Personal Git Website Repository](https://github.com/greenmatthew/VelecsEngineCPP.git)
- [Velecs Engine on Github Repository](https://github.com/greenmatthew/VelecsEngineCPP.git)

{{< custom-header type="h2" id="content" text="Content" >}}
- [Purpose](#purpose)
- [Velecs Engine](#velecs)
    - [Name](#velecs-name)
    - [Summary](#velecs-summary)
    - [Revised Focus and Future Direction](#velecs-revised-focus-and-future-direction)
    - [Features](#velecs-features)
    - [Technology Stack](#velecs-technology-stack)
    - [Conclusion](#velecs-conclusion)
    - [Future Work](#velecs-future-work)
- [Harvest Havoc](#harvest-havoc)
    - [Summary](#harvest-havoc-summary)
    - [Conclusion](#harvest-havoc-conclusion)
    - [Future Work](#harvest-havoc-future-work)
- [Learning](#learning)
- [Conclusion](#conclusion)

{{< custom-header type="h2" id="purpose" text="Purpose" >}}
I initiated this project with two main objectives in mind: to refine my C++ programming skills and to venture into the realm of graphics programming. My choice of C++ was heavily guided by its prevalent demand in the game development sector, reflecting what employers typically look for. In fact, every aspect of this project was tailored to align with potential employer expectations, a strategy that influenced not only the version of C++ I used but also the overall approach to building the project. While these choices were made with industry standards in mind, they diverge from what I might have selected for a purely personal project.

{{< custom-header type="h2" id="velecs" text="Velecs Engine" >}}

{{< custom-header type="h3" id="velecs-name" text="Name" >}}
The journey to the name 'Velecs' (pronounced 'vel-leks' (/vɛl-lɛks/)) began with the initial concept of 'VelocityECS Engine', symbolizing a high-performance engine capable of handling numerous ECS processes efficiently. This name evolved through stages: from 'VelocityECS' to 'VelECS', and finally to 'Velecs'. The name 'Velecs' not only retains the essence of its origins – signifying speed and efficiency – but also stands out as a unique and stylish moniker, capturing the innovative spirit of the engine.

{{< custom-header type="h3" id="velecs-summary" text="Summary" >}}
Velecs represents my first venture into game engine development. Harnessing Vulkan for rendering, it was envisioned as a highly configurable engine tailored to the diverse requirements of different gaming projects. Its design philosophy hinges on flexibility, allowing developers the choice between using pre-built solutions akin to Unity's project templates or devising bespoke implementations.

{{< custom-header type="h3" id="velecs-revised-focus-and-future-direction" text="Revised Focus and Future Direction" >}}

- Shift in Development Focus

    Initially aimed at extensive configurability, Velecs has recently pivoted towards the development of a functional tech demo. This strategic shift is driven by a dual desire: to quickly produce a demonstrable product and to explore the potential of recreating the engine in a language more attuned to my personal coding preferences. Consequently, the aspect of easy configurability in the current C++ version of Velecs has been indefinitely sidelined.

- Considering a Transition to Rust

    My preference for safe coding practices leans towards using patterns that minimize errors. However, in many languages, this often results in verbose code. Rust offers an appealing alternative. Its design aids in writing concise, safe code, addressing issues like runtime null exceptions during compilation—a feat that many languages struggle with. This aspect of Rust, alongside features like its ownership model and compile-time error checking, makes it a compelling choice for my game engine development. It aligns with my goal to create robust software while simplifying the process of ensuring code safety.

- The Path Forward

    Transitioning to Rust is not just about realizing a dream game project; it also opens doors for more personal projects and possibly wider adoption. The immediate goal, however, is to complete a compelling tech demo with the current version of velecs. This will lay the groundwork for future development, potentially in Rust, and will serve as a stepping stone towards achieving my broader objectives in game development.


{{< custom-header type="h3" id="velecs-features" text="Features of Velecs Engine" >}}

- 3D and 2D Compatibility

    Velecs Engine is designed for 3D rendering, utilizing Vulkan's native coordinate system. For 2D game development, the z-axis can simply be ignored, showcasing the engine's adaptability for different game formats.

- Camera as an Entity

    The engine treats the camera as an actual entity within the game world, allowing it to be moved and rotated like any other object. This offers developers enhanced control and flexibility in camera handling.

- Scene-Graph Approach:

    A scene-graph approach is employed for managing transforms. Positions, rotations, and scales of entities are relative to their parent entity, if one exists, providing a structured and intuitive way to handle object transformations.

{{< image src="velecs-and-harvest-havoc/scene-graph-code-example.png" alt="Velecs Scene Graph Code Example" class="centered" caption="Showing the code used for the scene graph video below." >}}

{{< video-gif src="velecs-and-harvest-havoc/scene-graph-example.mp4" width="500px" alt="Velecs Scene Graph Example" class="centered" caption="This video demonstrates the use of scene graphs in the Velecs engine. Scene graphs are a hierarchical structure where the position, rotation, and scale of each entity are relative to their parent, if any. In the video, multiple entities are featured, including one labeled 'Player'. The camera is attached to the 'Player' entity, which rotates at a constant rate of 45 degrees per second. As the camera is attached to the player, it rotates with it, keeping the triangle consistently in view. This setup gives the appearance of other entities rotating around the player. Notably, backface culling is disabled, allowing the backs of the 2D meshes to be visible, further showcasing the engine's capabilities with scene graphs." >}}

- Simple Input Polling

    Inspired by a technique I discovered in an Overwatch Seminar at GDC 2017, Velecs uses a singleton entity approach for input polling. This method, while simpler than my original complex input system, proved to be highly effective, easy to implement, and seamlessly integrated with Flecs. The singleton entity serves as a unique entity with a specific component for input, streamlining the process and reducing data-system coupling issues.

{{< youtube-extended id="W3aieHjyNvw" startAt="741" title="Overwatch Seminar at GDC 2017" width="360" centered="true" caption="This segment from the Overwatch Seminar at GDC 2017 inspired the singleton entity approach for the input system in Velecs, showcasing an efficient and convenient method for handling game inputs." >}}

{{< image src="velecs-and-harvest-havoc/input-code-example.png" alt="Velecs Input System Code Example" class="centered" caption="Code snippet demonstrating the use of the input singleton component for player movement in Velecs." >}}

- Easy and Quick Window Resizing
    
    Velecs offers robust window management capabilities, including:
    - Responsive window resizing.
    - Minimization and maximization functionality.
    - Fullscreen mode, easily toggled with the F11 key.

- Versatile Model Importing

    The engine leverages ASSIMP (Open Asset Import Library) to support importing a wide range of common model file formats, enhancing its flexibility in handling different types of game assets.

- Immediate GUI System
    
    An immediate mode GUI system is already implemented in Velecs. Dear ImGui, a powerful and efficient library for creating graphical user interfaces, has been integrated to provide intuitive and customizable UI elements.

{{< custom-header type="h3" id="velecs-technology-stack" text="Technology Stack" >}}
- #### C++
  My decision to use C++ for this project was influenced by its prevalent demand in the game development industry, particularly with the rising popularity of Unreal Engine, especially since the release of UE5. Many proprietary game engines also favor C++, cementing its status as a go-to language for game development. As for the version, I opted for C++17. While C++20 offers appealing features like modules that could reduce code duplication, I chose C++17 due to its widespread adoption and support, including its status as Unreal Engine's minimum supported version. This made C++17 a more pragmatic choice, ensuring compatibility and relevance within the current game development landscape.

- #### CMake
    The project began with Visual Studio but transitioned to CMake for greater control over the build process. This shift was challenging but ultimately beneficial, leveraging CMake's versatility.

- #### Vulkan
    Vulkan was selected for its efficiency and hardware scalability. This choice is in line with my goal to maximize performance for a highly demanding game I've envisioned.

- #### Visual Studio
    While I initially relied on Visual Studio for the entire build process, I eventually transitioned to using CMake as the primary build system. I now use CMake to generate a Visual Studio Solution, which allows me to leverage Visual Studio’s excellent building, debugging, and profiling capabilities. Interestingly, despite this, my coding is done exclusively in VS Code, utilizing it for its streamlined editing environment.

- #### SDL2
    SDL2 was chosen for its integrated sound playback, a feature lacking in GLFW. Future plans might include switching to a more specialized audio library like Steam Audio, but SDL2 currently serves well.

- #### [Dear ImGui](https://github.com/ocornut/imgui)
    My interest in Dear ImGui was first sparked by a strong recommendation from a friend. This piqued my curiosity, leading me to explore further. I also found invaluable insights from [The Cherno](https://www.youtube.com/@thecherno), a credible ex-EA developer renowned for his expertise in game engines and C++. His numerous videos discussing C++ GUI and his advocacy for immediate GUIs solidified my decision to integrate Dear ImGui. It now serves as the primary and exclusive GUI system for both the engine and the game, offering an efficient and straightforward user interface experience.

- #### [ASSIMP](https://github.com/assimp/assimp)
    Initially, I considered using [tinyobjloader](https://github.com/tinyobjloader/tinyobjloader) for its simplicity. However, the versatility of ASSIMP in handling a wide range of mesh formats with minimal additional effort made it an irresistible choice. Its widespread use in the industry further affirmed my decision, offering a robust solution for complex model imports.

- #### [Fast Lightweight Entity Component System (Flecs)](https://github.com/SanderMertens/flecs)
    My initial plan was to develop my own ECS, but I soon realized the benefits of using an established and efficient system like Flecs. In my search for an ECS system, I was torn between [EnTT](https://github.com/skypjack/entt) and Flecs. While EnTT’s use in Minecraft Bedrock Edition was appealing, Flecs won me over with its superior handling of large numbers of entities – a critical feature for the ambitious scale of my game.

- #### [Vulkan Memory Manager (VMA)](https://github.com/GPUOpen-LibrariesAndSDKs/VulkanMemoryAllocator)
    VMA is used to streamline the setup of the engine, accelerating development.

- #### [vk-bootstrap](https://github.com/charles-lunarg/vk-bootstrap)
    vk-bootstrap aids in quickly setting up Vulkan, enhancing development efficiency.

- #### [ImGuizmo](https://github.com/CedricGuillemet/ImGuizmo)
    ImGuizmo is integrated and ready for use, particularly if I venture into creating a game editor in the future.

{{< custom-header type="h3" id="velecs-conclusion" text="Conclusion" >}}

The development of the Velecs Engine has been an enlightening journey, marked by significant challenges and substantial growth. Since its inception, the engine has evolved considerably, with major strides in integrating advanced features like Flecs and continuously adapting to new learning. Each phase of development has necessitated thoughtful reorganizations and enhancements of the codebase.

Currently in its early stages, Velecs has reached a critical juncture. It is equipped with the essential features needed for developing games, though it still awaits the completion of some functionalities. The engine is tantalizingly close to fully supporting the creation of a comprehensive gaming experience.

At this key point enters Harvest Havoc. Initially envisioned as a game, Harvest Havoc has evolved into a pivotal technical demonstration for Velecs Engine. Its development is a practical application of the engine, serving as an essential test of its capabilities in a real-world context. Harvest Havoc will not only demonstrate the current potential of Velecs Engine but also act as a catalyst for its ongoing refinement and a beacon for its future trajectory.

{{< custom-header type="h3" id="velecs-future-work" text="Future Work" >}}
- #### Fix Z-Depth Buffers and Manage Z-Fighting
    Currently, the z-depth does not affect which mesh is rendered on top. Additionally, there is no mechanism to decide which mesh is rendered on top when multiple meshes have the same z-value.

- #### Implementing Audio
    Audio playback with SDL2 has not yet been explored. Implementing sound is, of course, a crucial requirement for developing a complete game.

- #### Integrating Advanced Audio Libraries
    In the future, I might consider integrating an advanced audio library to enhance the project's audio capabilities. So far, my exposure to such libraries is limited, with Steam Audio and Oculus Audio being the only ones I've encountered in discussions. Among these, Steam Audio stands out as the more frequently mentioned option in my experience. However, this consideration isn't set in stone, as I haven’t yet delved deeply into researching this aspect. My final decision will be based on a thorough evaluation of various options to determine which library aligns best with the project's specific needs.

- #### Exploring Rust and Engine Development
    My interest in Rust has grown significantly, attracted by its robust features and capabilities. I aim to eventually rebuild the engine in Rust to facilitate the development of a game that requires advanced rendering optimizations – a level of performance I feel is not fully achievable with engines like Unity. Initially, I contemplated using Rust in conjunction with the Bevy Engine. However, as I delved deeper into render pipelines, I realized Bevy might face similar limitations to those I wish to overcome. This realization steered me towards the idea of crafting my own engine in Rust, potentially employing the Flecs Rust port or Bevy’s ECS. This approach not only allows me to work in a language I prefer but also offers freedom from royalties and greater control over optimization specifics, aligning perfectly with my project goals.

---

{{< custom-header type="h2" id="harvest-havoc" text="Harvest Havoc" >}}

{{< custom-header type="h3" id="harvest-havoc-summary" text="Summary" >}}
Harvest Havoc is a game I am developing, primarily serving as a tech demo for the Velecs Engine. It's inspired by the factory building or resource management automation genre, known for titles like Factorio and Satisfactory. However, my recent encounter with Vectorio, a simpler game in the same genre, was particularly inspiring. Its straightforward graphics, consisting of basic shapes and vector images, highlighted an approach that aligns perfectly with my strengths and interests. As a software engineer more attuned to programming and game design, the idea of creating a game without the need for complex art was appealing. It seemed like a fun and suitable challenge, allowing me to focus on the aspects I enjoy most: developing game mechanics and honing my C++ skills, while not being bogged down by the intricacies of art creation.

In this vein, Harvest Havoc is crafted with simplicity in mind, utilizing basic 2D meshes and vertex colors for its visual elements. This approach sidesteps the need for elaborate art and lets me concentrate on creating clear and engaging gameplay. To aid in-game clarity, I plan to make extensive use of nametags, further supported by the distinct colors, shapes, and sizes of models, ensuring each element is easily distinguishable and adds to the overall player experience.

The game's central theme revolves around survival in a hostile environment, echoing the gritty, military-industrial atmosphere of Factorio and Vectorio. In Harvest Havoc, building and managing an industrial base is intertwined with an ongoing arms race for survival. Players are constantly challenged to advance their technology and expand their defenses to prevent being overrun by alien threats. This “build to survive” ethos is a driving force in the game, compelling players to strategically balance industrial growth with robust defensive measures against the ever-present danger posed by enemy "nests."

{{< custom-header type="h3" id="harvest-havoc-conclusion" text="Conclusion" >}}
Developing the Velecs Engine to be functional and user-friendly has been a substantial undertaking. As a result, progress on Harvest Havoc has been slow, but it has at least begun. Currently, the game features nametags, several primitive 2D shaped meshes, and the initial stages of resource harvesting, starting with Iron Ore. I am also in the early phases of implementing an inventory system. As this is an ongoing project, the information here may become outdated; there might be more gameplay features added since this writing.

{{< youtube-playlist
    id="PLpi46z0QnwL1tIE-JxsjaGmEKhV100oyS"
    autoplay="false"
    title="Harvest Havoc Latest Demo Video"
    caption="The current latest build of Harvest Havoc. The game is still in active development, I will try and keep updating this playlist with newer videos as I add more features and content."
>}}

{{< custom-header type="h3" id="harvest-havoc-future-work" text="Future Work" >}}

- #### Machines
    Currently, the game only allows manual mining of iron ore. Future developments will introduce machinery for automation. This includes miners to harvest ore, smelters to process iron ore into iron bars, and crafters for constructing various items, adding depth and complexity to resource management.

- #### Conveyor Belts
    To fully automate the process, conveyor belts are essential for moving materials between machines. Implementing conveyor belts, along with splitters for dividing their flow, will be a key feature to streamline production lines.

- #### Inventory System
    The current version has a basic on-screen counter for iron ore. A comprehensive inventory system is planned to enhance gameplay with inventory management challenges and enable more interactive mechanisms with machines like miners and crafters.

- #### Crafting System
    A core element of any factory building game is crafting. The development of a robust crafting system is in the pipeline, facilitating both machine-based and manual crafting options within the player's inventory menu.

- #### Procedural Generation
    - **Ore Nodes**: Transitioning from hardcoded ore nodes to procedurally generated ones will add variety and unpredictability to resource gathering.

    - **Background Biomes**: Introducing diverse biomes will enrich the game's environment, making exploration and resource gathering more dynamic.

- #### More Resources to Harvest
    Plans include introducing a range of resources beyond the typical offerings in similar games, such as copper, coal (for power generation and steel smelting), sand (for glass and semiconductors), gold, silver, and many more. The aim is to adopt a more scientific and realistic approach to resource management, setting Harvest Havoc apart from its peers.

- #### Enemies
    In Harvest Havoc, players will face the challenge of defending their base against alien threats from expanding "nests." This feature creates a dynamic environment where strategic planning and military capabilities are crucial for survival. The game emphasizes an arms race against encroaching enemies, requiring players to develop effective defenses and offensive strategies.

- #### Turrets, Walls, and Weapons
    To safeguard your factory against alien invasions, defensive structures like turrets and walls will be indispensable. For those preferring a more proactive approach, a range of handheld weapons and vehicles will be available, enabling players to aggressively clear out nests or bolster their base's defenses.

- #### Player Modifications
    Enhance your player's capabilities with permanent modifications. These upgrades can range from increased movement speed and boosted health to other unique enhancements, adding a new layer of strategy and personalization to the gameplay experience.

- #### Research System
    Progress in Harvest Havoc will be gated behind a research system. Crafting recipes, new machines, and advanced defense and offense capabilities will all be unlockable through reaching specific research milestones. This system will require a strategic allocation of resources and time, adding depth to the game's progression.

- #### Save & Loading System
    Of course, you'll want your meticulously built factory to persist between gaming sessions. A robust save and loading system will ensure your progress is always safely stored - because, let's face it, in the very, **VERY** rare event of a bug in my perfectly coded game, you wouldn’t want your hard work to vanish into thin air.

{{< custom-header type="h3" id="harvest-havoc-future-work" text="Future Work" >}}
- #### Machines
    Right now all you can do is manually mine iron ore. There is nothing to automate this. There is not even anything to do with the iron ore yet. There is no smelters to process it into iron bars, and no crafter to construct it into something.
- #### Conveyor Belts
    Even if there was machines, there would be no way to automate their inputs and outputs. So we need converyor belts. Also most likely some splitters to split the converyor belt into two.
- #### Inventory System
    Right now there is just a always on screen counter of iron ore. An full inventory system would add another gameplay element of inventory management, and also make it easier to interact with machines like miners and crafters.
- #### Crafting System
    No factory building game is complete without being able to craft stuff. I need a crafting system that works with machines or manually crafting in your inventory menu.
- #### Procedural Generation
    - Ore Nodes
        Right now ore nodes are just hardcoded to be in a specific spot and size.
    - Background Biomes
- #### More Resources to Harvest
    - Copper
    - Coal
        For power generation and smelting steel.
    - Sand
        For making glass and semi-conductors.
    - Gold
    - Silver
    - And much more, I want the game to use many more resources than games like Factorio and Satisfactory. I like a more scientific and realistic approach.

---

{{< custom-header type="h2" id="learning" text="Learning" >}}
Working on the Velecs Engine project has been a deeply satisfying experience. There's something uniquely rewarding about designing system architectures from scratch and then seeing them come to life through incremental development. Along the way, I've encountered numerous what I'd call 'Oh, that's why that's like that' moments, which have been both enlightening and gratifying.

A prime example of this was while implementing the render pipeline and shaders. It was during this process that I truly grasped why game engines like Unity offer multiple render pipelines, such as the Universal and High Definition Render Pipelines. The choice of pipeline and its implications on materials suddenly made perfect sense.

Another one of these moments came when revisiting my past work with voxel meshes in Unity. Previously, I had used the CPU and compute shaders on the GPU without fully understanding the underlying limitations, like why a single voxel required 24 vertices instead of 8. Now, equipped with a deeper knowledge of graphics programming, I realize that optimizing such processes would require writing custom shaders or even an entire render pipeline.

Here's a summary of the key areas where I've expanded my knowledge, exploring realms I hadn't ventured into before:

- #### Visual Studio Project Management
    This project deepened my understanding of Visual Studio's capabilities beyond basic usage. I learned to manage complex project structures, handle custom build processes, and efficiently integrate third-party dependencies.

- #### CMake
    My university education didn't include CMake, so diving into it was a new venture. The learning curve was steep, but immensely rewarding. I've come to understand why CMake is the de facto standard for building C++ projects. Its flexibility and power in handling complex build processes have been eye-opening.

- #### Vulkan
    Before this project, I had no experience with graphics APIs. Working with Vulkan was a leap into the deep end, offering a profound insight into how game engines operate at a granular level. It's been a transformative journey, substantially enhancing my understanding of graphics programming.

- #### SDL2
    Working with SDL2 was an introduction to C++ GUI applications beyond my brief experience with GTK+.

- #### 3rd Party Lib Management
    Having previously managed libraries in Python and Rust, I found C++ to present a unique challenge due to the lack of a universal package manager. My initial attempts with various C++ package managers led to some roadblocks. Eventually, I adopted a system inspired by the C++ Boost library, using the Vulkan SDK for some libraries and git submodules like the Boost library for everything else not included by the SDK. This approach, while increasing the project's size, offers an effective balance of ease of update and management. Not too mention the benefit of having the entire libraries repositories, meant that I have lots of example code I can look at easily all without having to leave the editor.

- #### [Fast Lightweight Entity Component System (Flecs)](https://github.com/SanderMertens/flecs)
    My experience with Flecs marked my first deep dive into a strict ECS framework. Unlike Unity's ECS, where component and system boundaries are somewhat blurred, Flecs enforces a more disciplined structure. While I haven’t worked with Unity DOTS, which is more akin to Flecs, this was a new terrain for me, especially in terms of component-based querying and maintaining a clear separation between components and behavior. The transition involved a steep learning curve, particularly when I had to replace a complex input system I initially developed (similar to Unity's new input system) with one compatible with Flecs. Although it was challenging to let go of my initial system, integrating Flecs proved to be a valuable evolution for the engine, enhancing both rendering and input functionalities.

- #### [ASSIMP](https://github.com/assimp/assimp)
    Venturing into using a mesh importer library like ASSIMP was a new experience for me. However, my background in creating meshes from scratch in Unity, along with my familiarity with Autodesk 3DS Max and Blender, facilitated a smooth learning curve. I found ASSIMP user-friendly and intuitive, which made integrating it into my project straightforward and effective.

- #### [Dear ImGui](https://github.com/ocornut/imgui)
    Setting up and using an immediate GUI with Dear ImGui was a new experience. I learned how to integrate it into a rendering system, appreciating the simplicity and effectiveness of immediate mode GUIs in project development.
