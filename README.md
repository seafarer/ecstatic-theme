# Ecstatic Theme
==============

A super basic WordPress starter theme based on _s that adds Bourbon, Neat, Normalize, Modernizr, jQuery and ties it all together. Its set up to use libsass, livereload, autoprefixer and grunt. It incudes the entypo icon set as a font, for icon font type things. A great starting point that just needs your design.

To get started, download the zip file or clone the repo. Then do a global search for "ecstatic" and replace it with the name of your theme. 

Next, run `npm install` in your terminal in the root of the theme folder. This will download all of the dependencies needed to use the Grunt task runner. Then run `grunt` in the terminal to use the grunt task runner to compile your scss, autoprefix your CSS rules and reload your browser. You need the livereload extension installed in your browser of choice to take advantage of that hotness.

This theme, like its parent *Underscores*, is intentionally spare and is intended not as a parent theme, but as a starting place to build what you want. Rather than fight against someone else's preferred method of doing things, or run a bunch of code you will never use, you can build up a lean, clean, and mean theme that's dialed just for your particular project. 

The template files are mostly what comes in Underscores. For documentation on those, refer to that [project](https://github.com/automattic/_s). The Sass structure is set up as: 

* **Base** — foundational styles like type, link colors, type sizes, etc. Mixin and Extend partials are also in here.
* **Components** — partials for slideshows, widgets, forms, or navigation or any other modular component should go in here.
* **Layouts** — the partials for your structure and responsiveness should go here.

There are also folders for Bourbon and Neat, which should be left alone. Bourbon is running version 3.2.x to maintain compatibility with libsass.

For more info in the libraries and tools included with this build:

* [Bourbon](http://bourbon.io) — A bunch of handy mixins
* [Neat](http://neat.bourbon.io) — A super simple grid system that uses Bourbon
* [SCSS version of Normalize](https://github.com/kristerkari/normalize.scss/blob/master/_normalize.scss) based on [Normalize](http://necolas.github.io/normalize.css/) — unifies defaults across browsers. The file included here strips out everything having to do with legacy IE and font sizes.
* [Modernizr](http://modernizr.com) — A stripped down custom build: (backgroundsize, flexbox, opacity, csstransforms, csstransforms3d, csstransitions, inlinesvg, svg, touch, shiv, mq, cssclasses, prefixed, teststyles, testprop, testallprops, prefixes, domprefixes, load)
* [Libsass](http://libsass.org/) — C implentation of Sass. Wicked fast.
* [Livereload](https://github.com/gruntjs/grunt-contrib-watch)
* [Autoprefixer](https://github.com/ai/autoprefixer) — Prefix your css rules.
* [Entypo](http://www.entypo.com/) — Nice set of Icons. 

