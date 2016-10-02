##Requirements


Installing Jekyll is easy and straight-forward, but there are a few requirements you’ll need to make sure your system has before you start.

    Ruby (including development headers, v1.9.3 or above for Jekyll 2 and v2 or above for Jekyll 3)
    RubyGems
    Linux, Unix, or Mac OS X
    NodeJS, or another JavaScript runtime (Jekyll 2 and earlier, for CoffeeScript support).
    Python 2.7 (for Jekyll 2 and earlier)
![Jekyllrb.com](https://jekyllrb.com/docs/installation/)

## Usage

**Important:** The latest version of brume uses `site.baseurl` for links, therefore, if you want to put your site in a subdirectory, update the *_config.yml* file!

- Download the ZIP file and extract it's contents.
- Open *_config.yml* file and enter your site's URL and add additional configuration or update the existing one if needed.
- Open *_data/abdullah.yml* file and fill in values for site name (site title), author (your name) and description (blog description). This file contains all the custom information about your page. You can access it using `site.data.abdullah` object.
- Open *about/index.md* file and add information about you or your site. You can delete this file and directory if not needed.
- Open *_data/links.yml* and add additional links or update the existing ones that you want to be displayed in the navigation menu.
- If you don't want to use CC BY-NC 4.0 licence for the content, then you should change the footer text, which is located in *_layouts/default.html*.
- Generate your site and be happy!

Abdullah Velioglu-2016


