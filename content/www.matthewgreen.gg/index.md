---
title: "www.matthewgreen.gg"
id: "www.matthewgreen.gg"
priority: 500  # Controls order in listings (lower numbers appear first)
type: "project"
draft: false  # Set to true to hide this project from production

summary: "I have created my own portfolio website from scratch and am self-hosting it. The site was built using a static site generator, HUGO. It's site you are looking at right now."
# Preview image for listings
# previewImage:
#     src: "preview.jpg"
#     alt: "www.matthewgreen.gg Preview"
#     class: "auto-fit"
---
{{< heading-link type="h2" >}} Links {{< /heading-link >}}

- Website Repository: [git.matthewgreen.gg](https://git.matthewgreen.gg/mgreen/www.matthewgreen.gg) | [github.com](https://github.com/greenmatthew/www.matthewgreen.gg)

{{< heading-link type="h2" >}} The Journey {{< /heading-link >}}
While I had some basic knowledge of HTML and CSS from a high school course, I assumed website hosting would be easy… little did I know.

I started by searching for a theme and landed on this particular [terminal theme](https://terminalcss.xyz/dark/) that you see now. Once I had that, I knew exactly what HTML tags were available and how they would look. I then started building the index and other pages, but quickly found it frustrating to repeat elements like the header and footer. As someone who values DRY (Don't Repeat Yourself) programming, I realized that writing raw HTML wasn't going to cut it.

My first solution was PHP. It seemed like a simple way to break my site into reusable 'modules' without overcomplicating things. While it worked, it wasn’t perfect. My PHP linter struggled with HTML files, and I ran into issues with JavaScript not executing properly inside these 'modules'—especially when nesting them.

Not knowing much about JavaScript or PHP at the time, I decided to move on. My next and ultimately final solution was using a static site generator—HUGO, the most popular one. While it took some time to wrap my head around, I eventually figured it out. I ported my website's theme to a HUGO theme, updated all the pages to fit its file structure and metadata format, and finally completed the remaining pages. Looking back, I wish I had started with HUGO from the beginning—it would have saved me a lot of time manually maintaining headers, footers, and struggling with PHP-JavaScript issues.

You can see *The Journey* unfold in real time, as I tracked the website’s development from start to finish on [my self-hosted Git website](https://git.matthewgreen.gg/mgreen/www.matthewgreen.gg) or [GitHub](https://github.com/greenmatthew/www.matthewgreen.gg).
