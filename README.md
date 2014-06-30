Fox Structures
==============

## Getting Started

To view this site locally, run like this:

```
jekyll serve -w --baseurl ""
```

To deploy to the test server subdirectory, run like this:

```
jekyll serve
```

And then copy the contents of the `_site` folder to the server.

## Site Organization

### Categories

The main categories and sub-categories of site content are:

* Project
  * Agricultural
  * Commercial
  * Equestrian
  * Residential
  * Storage
  * Featured
* Testimonial

### Category Pages

To create a category page, follow this template in the page's YAML front matter:

```
layout: category
category: agricultural
```

The category page template will then automatically generate thumbnails of posts that share the page's category.

### Portfolio Page

Any post with `category: project` in its front matter will be included on the portfolio page.

### Featured Projects

To feature a project on the home page, add `featured: true` to the post's YAML front matter.

## Components

### Thumbnails

The thumbnails are consistent throughout the site, so the thumbnail markup has been separated into its own include at `_includes/thumbnail.html`.

The thumbnail image is taken from the `image:` in each post's front matter.

### Icons

There are three sets of icons available to the site. The main category icons (agricultural, commercial, equestrian, residential and storage) included using [Icomoon](http://icomoon.io). The social media icons are included using the [Font Awesome](http://fortawesome.github.io/Font-Awesome/icons/) icons. The defualt Bootstrap icons are also available. All of the associated style and font files are in the `css` and `font` folders.