## North Central Positronics
A **make** your own adventure game.

Set in the not-to-distant future, players can traverse through existing storylines by clicking links, or create their own by typing into command boxes.

[Play NCP here](thesis.calebfergie.com).

### About NCP
This game is *secretly a wiki* based on the software [MediaWiki](https://github.com/wikimedia/mediawiki). It is deployed through [Heroku](https://www.heroku.com/) following [this guide](https://gist.github.com/caseywatts/d04bda6626ef2c6c8f97) by [Casey Watts](https://github.com/caseywatts).

All database information is stored in a [ClearDB MySQL database](https://elements.heroku.com/addons/cleardb) - except for images - which are stored in an [AWS S3 bucket](https://aws.amazon.com/s3/) and configured with the [AWS Extension](https://www.mediawiki.org/wiki/Extension:AWS) by [Edward Chernenko](https://www.mediawiki.org/wiki/User:Edward_Chernenko).

The game largely owes its *look-and-feel* to highly customizable [Tweeki skin](https://github.com/thaider/Tweeki) by [Thadier](https://github.com/thaider).

🙏Other extensions used in this project:
* [WikiEditor](https://www.mediawiki.org/wiki/Extension:WikiEditor) & [TinyMCE](https://www.mediawiki.org/wiki/Extension:TinyMCE) for user-friendly editing
* [InputBox](https://gerrit.wikimedia.org/g/mediawiki/extensions/InputBox) for the core "command line" text box
* [Breadcrumbs](https://www.mediawiki.org/wiki/Extension:BreadCrumbs) & [HistoryLink](https://www.mediawiki.org/wiki/Extension:BrowserHistoryLink) for ease of navigation
* [Preloader](https://www.mediawiki.org/wiki/Extension:Preloader) and [LinkTitles](https://www.mediawiki.org/wiki/Extension:LinkTitles) for a more streamlined user experience.
* [Variables](https://www.mediawiki.org/wiki/Extension:Variables), [ParserFunctions](https://www.mediawiki.org/wiki/Help:Extension:ParserFunctions) and [URLGetParameters](https://www.mediawiki.org/wiki/Extension:UrlGetParameters) for managing in-game variables.
* [EmbedVideo](https://www.mediawiki.org/wiki/Extension:EmbedVideo) in combination with [HTMLTags](https://www.mediawiki.org/wiki/Extension:HTML_Tags) for video embedding.
* [SpamRegex](https://www.mediawiki.org/wiki/Extension:SpamRegex) for security

### Project Context

While we gladly recount "It's not about the destination, its about the journey", the results-based culture we live in often encourages the opposite.

Despite our professed disdain for rigid procedures and bureaucracy, we find ourselves entrenched in economic and social systems that enforce behavioral compliance to protocol.

This project is an online game and network that attempts to reframe and challenge the results-driven behavior imposed by modern constructs of control such as order, classification, and hierarchy.
