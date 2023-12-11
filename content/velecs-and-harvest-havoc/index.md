---
type: project
layout: project
priority: 5
title: "Velecs Engine & Harvest Havoc"
summary: "Velecs Engine is a game engine developed entirely from scratch, harnessing the power of C++ alongside Vulkan for its high-performance graphics rendering capabilities. Currently, I am creating Harvest Havoc, a game that presently serves as a technical demonstration of the engine’s capabilities. Both are in active and parallel development."
---

{{< custom-header type="h2" id="content" text="Content" >}}
- [Purpose](#purpose)
- [Summary](#summary)
- [Technology Stack](#technology-stack)
- [Learning](#learning)
- [Conclusion](#conclusion)
- [Future Work](#future-work)

{{< custom-header type="h2" id="purpose" text="Purpose" >}}
I initiated this project with two main objectives in mind: to refine my C++ programming skills and to venture into the realm of graphics programming. My choice of C++ was heavily guided by its prevalent demand in the game development sector, reflecting what employers typically look for. In fact, every aspect of this project was tailored to align with potential employer expectations, a strategy that influenced not only the version of C++ I used but also the overall approach to building the project. While these choices were made with industry standards in mind, they diverge from what I might have selected for a purely personal project.

{{< custom-header type="h2" id="summary" text="Summary" >}}


{{< custom-header type="h2" id="technology-stack" text="Technology Stack" >}}
- #### C++
    I am using C++ as discussed in the purpose of the project as that is what it seems like everyone want's these days.

- #### CMake
    I originally started with Visual Studio, but after learning some more about how people actually make these things. I decided to do the arduous migration to using CMake instead. Which I believe was a great idea, although it did take quite a while to get everything I had back in working order.

- #### Vulkan
    For the graphics API, I decided upon using Vulkan, as I have heard it is a great choice, it is efficient and scales with hardware amazingly. And I would like the experience, for a game I have wanted to make for a long time, because I will need ever last bit of performance I can get for it.

{{< custom-header type="h2" id="learning" text="Learning" >}}
Working on the Velecs Engine project has been a deeply satisfying experience. There's something uniquely rewarding about designing system architectures from scratch and then seeing them come to life through incremental development. Along the way, I've encountered numerous what I'd call 'Oh, that's why that's like that' moments, which have been both enlightening and gratifying.

A prime example of this was while implementing the render pipeline and shaders. It was during this process that I truly grasped why game engines like Unity offer multiple render pipelines, such as the Universal and High Definition Render Pipelines. The choice of pipeline and its implications on materials suddenly made perfect sense.

Another one of these moments came when revisiting my past work with voxel meshes in Unity. Previously, I had used the CPU and compute shaders on the GPU without fully understanding the underlying limitations, like why a single voxel required 24 vertices instead of 8. Now, equipped with a deeper knowledge of graphics programming, I realize that optimizing such processes would require writing custom shaders or even an entire render pipeline.

Here's a summary of the key areas where I've expanded my knowledge, exploring realms I hadn't ventured into before:

- #### Visual Studio Project Management
    My previous experience with Visual Studio was relatively basic. This project pushed me to explore deeper functionalities like custom build targets, multiple project management, and integrating third-party dependencies.

- #### CMake
    My university education didn't include CMake, so diving into it was a new venture. The learning curve was steep, but immensely rewarding. I've come to understand why CMake is the de facto standard for building C++ projects. Its flexibility and power in handling complex build processes have been eye-opening.

- #### Vulkan
    Before this project, I had no experience with graphics APIs. Working with Vulkan was a leap into the deep end, offering a profound insight into how game engines operate at a granular level. It's been a transformative journey, substantially enhancing my understanding of graphics programming.

- #### SDL2
    Apart from a minor project using GTK+, my experience with C++ GUI applications was limited. Choosing SDL2 was driven by its integrated sound playback capabilities, a feature missing in GLFW. In the future, I'm considering specialized audio libraries like Steam Audio for higher quality sound, but for now, SDL2 fits the bill perfectly.

- #### 3rd Party Lib Management
    Having previously managed libraries in Python and Rust, I found C++ to present a unique challenge due to the lack of a universal package manager. My initial attempts with various C++ package managers led to some roadblocks. Eventually, I adopted a system inspired by the C++ Boost library, using the Vulkan SDK for some libraries and git submodules for others. This approach, while increasing the project's size, offers an effective balance of ease of update and management.

- #### [Fast Lightweight Entity Component System (Flecs)](https://github.com/SanderMertens/flecs)
    My initial plan was to develop my own ECS, but I soon realized the benefits of using an established and efficient system like Flecs. In my search for a strict ECS system, I was torn between [EnTT](https://github.com/skypjack/entt) and Flecs. While EnTT’s use in Minecraft Bedrock Edition was appealing, Flecs won me over with its superior handling of large numbers of entities – a critical feature for the ambitious scale of my game.

- #### [ASSIMP](https://github.com/assimp/assimp)
    Initially, I considered using [tinyobjloader](https://github.com/tinyobjloader/tinyobjloader) for its simplicity. However, the versatility of ASSIMP in handling a wide range of mesh formats with minimal additional effort made it an irresistible choice. Its widespread use in the industry further affirmed my decision, offering a robust solution for complex model imports.

- #### [Dear ImGui](https://github.com/ocornut/imgui)
    My interest in Dear ImGui was first sparked by a strong recommendation from a friend. This piqued my curiosity, leading me to explore further. I also found invaluable insights from [The Cherno](https://www.youtube.com/@thecherno), a credible ex-EA developer renowned for his expertise in game engines and C++. His numerous videos discussing C++ GUI and his advocacy for immediate GUIs solidified my decision to integrate Dear ImGui. It now serves as the primary and exclusive GUI system for both the engine and the game, offering an efficient and straightforward user interface experience.

{{< custom-header type="h2" id="conclusion" text="Conclusion" >}}


{{< custom-header type="h2" id="future-work" text="Future Work" >}}
