=== SearchEkko ===
Contributors: noah28
Tags: related, related posts, related articles, search, referrer, referer, search engine, bounce, bounce rate
Requires at least: 1.2.1
Tested up to: 2.8.4
Stable tag: 1.0

SearchEkko is a "related posts" widget that uses visitors' search referral terms to find and present your best-matching posts.

== Description ==

[SearchEkko](http://www.searchekko.com) is like a "related articles" widget, but it only displays to visitors who arrive from a search engine.  It then uses their individual search queries to identify and present the best-matching posts on your site.
 
For example, imagine that a user searches "new cars" at Google, and one of your posts shows up as a top hit.  They then click the link and arrive at your site.  The SearchEkko widget notices that the visitor arrived from a search engine, and that their query was "new cars".  It then finds all the best pages on your site for that query, and presents them to the user.

SearchEkko helps minimize your bounce rate by presenting visitors with your best, most relevant content, helping to ensure that they'll find what they're looking for.  It also helps drive page views by finding related posts using each visitor's real-time intent.

Try it out today! :)

== Installation ==

1. Upload `searchekko_wp_plugin.php` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in the WordPress Admin section of your site.

== Frequently Asked Questions ==

= How does SearchEkko work? =

SearchEkko looks at each visitor's [HTTP referer header](http://en.wikipedia.org/wiki/HTTP_REFERER) and identifies visitors coming from Google, Yahoo, or Bing.  It then parses the referer for the search query.  Finally, it uses the Yahoo BOSS index of your site to find other matching pages.

= What happens if there aren't any other matching pages for a search query? =

The SearchEkko widget only displays if there are other top-ranking pages on your site for the query.  It will display up to four other matching results.

= How can I change how the SearchEkko widget looks? =

You can modify the CSS of the widget as described [here](http://www.searchekko.com/download_javascript#modify_css).  This is the first release of the widget, but other options will be added soon.  Stay tuned!

= Why doesn't the widget display on my site? =

Firstly, remember that the widget only displays if you arrive at the site from a search engine *and* there are in-site results for your search query (in addition to the page you arrived at).  Secondly, the widget requires a space at least 480px wide in order to display -- this rules out most sidebars.  (The reason for the width requirement is that it's hard to display the matching results with anything narrower.)  Otherwise, it looks like you've found a bug :).  Please email me about it at noah at anoaharc.com!

== Screenshots ==

1. This is a screenshot of the widget as it might appear on Wikipedia.  For more information see our [demo page](http://www.searchekko.com/demo).