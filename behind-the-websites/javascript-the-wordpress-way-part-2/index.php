<?php
$year = '2010',3],['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script> <link rel="alternate" type="application/rss+xml" title="Big Red Tin &raquo; JavaScript the WordPress Way / Part 2 Comments Feed" href="/behind-the-websites/javascript-the-wordpress-way-part-2/feed/" /><link rel='stylesheet' id='soup-allmedia-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-min.css?ver=20110210.02' type='text/css' media='all' /> <!--[if IE 6]><link rel='stylesheet' id='soup-allmedia-ie6-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie6-min.css?ver=20110210.02' type='text/css' media='all' /> <![endif]--> <!--[if IE 7]><link rel='stylesheet' id='soup-allmedia-ie7-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie7-min.css?ver=20110210.02' type='text/css' media='all' /> <![endif]--><link rel='stylesheet' id='contact-form-7-css'  href='/wp-content/plugins/contact-form-7/styles.css?ver=2.4.2' type='text/css' media='all' /> <script type='text/javascript' src='/wp-includes/js/comment-reply.js?ver=20090102'></script> <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" /><link rel='index' title='Big Red Tin' href='/' /><link rel='start' title='Don&#8217;t start with a reset.css' href='/behind-the-websites/dont-start-with-a-resetcss/' /><link rel='prev' title='JavaScript the WordPress Way / Part 1' href='/behind-the-websites/javascript-the-wordpress-way-part-1/' /><link rel='next' title='Understand What You&#8217;re Saying' href='/content-strategy/understand-what-youre-saying/' /><link rel='shortlink' href='/?p=499' /><meta name="description" content="In Part 1 we introduced the wp_register_script and wp_enqueue_script functions to avoid JavaScript conflicts. Here we’ll deal with a more complex example." /><meta name="keywords" content="coding,css,javascript,plugin,theme,wordpress,wp_enqueue_script,wp_enqueue_style,wp_register_script,wp_register_style" /><link rel="canonical" href="/behind-the-websites/javascript-the-wordpress-way-part-2/" />  <script type="text/javascript">var _wpcf7={cached:1};</script> <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><link rel="icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body id="brt" class="nojs nojswin bxSngl bxAllBlog bxPost bxP-javascript-the-wordpress-way-part-2 bxP-id499 bxPC-behind-the-websites bxPTag-coding bxPTag-css bxPTag-javascript bxPTag-plugin bxPTag-theme bxPTag-wordpress bxPTag-wp_enqueue_script bxPTag-wp_enqueue_style bxPTag-wp_register_script bxPTag-wp_register_style bxPA-peter"><div id="pageWrap" class="brt"><div id="header"><div id="siteDetails"><p id="siteName"><a href="http://bigredtin.com"><img src="/wp-content/themes/bigredtin/assets/child/i/logo-white-24.png" class="screen" width="323" height="90" alt="Big Red Tin  | Thoughts about the web and business from the large pantry" title="Big Red Tin | Thoughts about the web and business from the large pantry" /><img src="/wp-content/themes/bigredtin/assets/child/i/logo-colour-24.png" class="print" width="323" height="90" alt="" title="" /></a></p></div><div id="headerWidgets"></div></div><div id="container"><div id="navWrap" class="navWrap"></div><div id="content"><div id="contentHeadA" class="hentry p1 post publish post-javascript-the-wordpress-way-part-2 author-peter-wilson cat-behind-the-websites tagged tag-coding tag-css tag-javascript tag-plugin tag-theme tag-wordpress tag-wp_enqueue_script tag-wp_enqueue_style tag-wp_register_script tag-wp_register_style"><div id="contentHead"><h1 class="entry-title" id="pageName"> <a href="/behind-the-websites/javascript-the-wordpress-way-part-2/" title="JavaScript the WordPress Way / Part 2" rel="bookmark"> JavaScript the WordPress Way / Part 2 </a></h1><p class="entry-date"><span class="published" title="2010-06-04T10:00:20+00:00">4 Jun '10</span></p></div><div id="contentA"><div class="entry-meta"><p class="details"> <span class="author vcard">By <a class="url fn n" href="/author/peter/" title="View all posts by Peter Wilson">Peter Wilson</a></span> <span class="cat-links"> in <a href="/behind-the-websites/" title="View all posts in Behind the Websites" rel="category tag">Behind the Websites</a></span></p><p class="comments-link"> <a href="/behind-the-websites/javascript-the-wordpress-way-part-2/#comments">No responses</a></p></div><div class="entry-content"><p>In <a title="Part 1" href="/behind-the-websites/javascript-the-wordpress-way-part-1/" >Part 1</a> we discussed the conflicts that can occur on a WordPress site if themes and plugins add JavaScript using &lt;script&gt; tags. We introduced the <code>wp_register_script</code> and <code>wp_enqueue_script</code> functions developed to avoid these conflicts.</p><p>In this section we&#8217;ll deal with a <a title="more complicated example" href="/behind-the-websites/javascript-the-wordpress-way-part-2/#jswp2complicated" >more complicated example</a> and <a title="use Google's AJAX libraries API" href="/behind-the-websites/javascript-the-wordpress-way-part-2/#jswp2googleapi" >use Google&#8217;s AJAX libraries API</a> to lower your bandwidth costs. We&#8217;ll also take what we&#8217;ve learnt about including JavaScript and <a title="apply it to our CSS" href="/behind-the-websites/javascript-the-wordpress-way-part-2/#jswpcss" >apply it to our CSS</a>.<span id="more-499"></span></p><h4 id="jswp2complicated">A more complicated example</h4><p>The <a title="sample code yesterday" href="/behind-the-websites/javascript-the-wordpress-way-part-1/#jswpregister" >sample code yesterday</a> included a simple example of using the same JavaScript file throughout your site. Let&#8217;s spice things up slightly by introducing the following circumstance. Consider that you have three JavaScript files:</p><ul><li><strong>base.js</strong> is the base JavaScript file to be used throughout the site. It uses the jQuery library and must load in the HTML &lt;head&gt;;</li><li><strong>posts.js</strong> loads on pages and posts and only calls functions from the base JavaScript file but doesn&#8217;t use the jQuery library directly. It can load in the HTML footer.</li><li><strong>archives.js</strong> loads on all other pages throughout your site (except admin). It calls functions from your base JavaScript file and makes direct use of the jQuery library. It can load in the HTML footer.</li></ul><p>In this situation, you could change your base.js to use another library – say, Prototype – and it would have no effect on the posts.js. So, posts.js can be said not to depend on jQuery directly.</p><p>Changing libraries would require edits to the third file, in which case archives.js does depend on jQuery directly.</p><h5>Registering the Files</h5><p>The code to register those JavaScript files and conditions with WordPress is:</p><pre><code>wp_register_script (   'mytheme-base', /* handle */   get_bloginfo('template_url') . '/base.js', /* source */   array('jquery'), /* requires jQuery */   1.0 /* version 1.0 */ );  wp_register_script (   'mytheme-posts', /* handle */   get_bloginfo('template_url') . '/posts.js', /* source */   array('mytheme-base'), /* requires base.js */   1.0, /* version 1.0 */   true /* load in footer */ );  wp_register_script (   'mytheme-archives', /* handle */   get_bloginfo('template_url') . '/archives.js', /* source */   array('jquery', 'mytheme-base'), /* requires jQuery &amp; base.js */   1.0, /* version 1.0 */   true /* load in footer */ );</code></pre><p>This code says to WordPress:</p><ul><li> If loading posts.js, also load base.js;</li><li> If loading archives.js, also load jQuery and base.js;</li><li> If loading base.js, also load jQuery;</li></ul><p>Each of these are separate checks (if) rather than a series of options (if, else if).</p><h5>Enqueueing the files</h5><p>All the hard work has been done registering the files, WordPress knows what each file requires to work and where in the HTML (&lt;head&gt; or footer) the &lt;script&gt; tags should be inserted.</p><p>Now it&#8217;s a simple process of checking if the visitor is loading a post or page and requesting the appropriate file.</p><p>We need to delay the check slightly, otherwise WordPress won&#8217;t know if the user is on a page, post or elsewhere. The first step is to enclose the check in a function.</p><pre><code>function que_scripts(){   if (!is_admin()) { //visitors only     if (is_singular()) { // pages &amp; posts       wp_enqueue_script('mytheme-posts');     }     else {       wp_enqueue_script('mytheme-archives');     }   } }</code></pre><p>Then tell WordPress when to execute the function. For this we use the <a title="action" href="http://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters']);">action</a> wp_print_scripts. This runs the code above before WordPress attempts to output the <code>&lt;script&gt;</code> tags to your HTML.</p><pre><code>add_action('wp_print_scripts', 'que_scripts')</code></pre><p>There is no need to enqueue jQuery or base.js directly. WordPress knows to add those to the HTML based on the dependancies listed when registering the files.</p><h4 id="jswp2googleapi">Using the Google AJAX Libraries API</h4><p>Loading all these libraries from your own server may seem like a waste of your bandwidth considering you could be loading the libraries directly from Google&#8217;s servers.</p><p>With a bit of luck, your visitor will have Google&#8217;s version of the libraries in their browser&#8217;s cache already and <a title="your site will load a little quicker" href="/behind-the-scenes/caching-on-the-google-ajax-libraries-api/" >your site will load a little quicker</a>.</p><p>It&#8217;s a bit messy to do this yourself, especially since jQuery needs to be kept in noConflict mode. Fortunately <a title="Jason Penny" href="http://jasonpenney.net/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','jasonpenney.net/']);">Jason Penny</a> has developed a plugin, called “<a title="Use Google Libraries" href="http://wordpress.org/extend/plugins/use-google-libraries/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','wordpress.org/extend/plugins/use-google-libraries/']);">Use Google Libraries</a>”, to do the hard work for you.</p><p>“Use Google Libraries” is the first plugin I add when setting up sites for me and my clients.</p><h4 id="jswp2superfab">Making our super-broken example super-fabulous</h4><p>If, when developing their theme and plugin, George and Richard <a title="from our example in Part 1" href="/behind-the-websites/javascript-the-wordpress-way-part-1/#jswpproblem" >from our  example in Part 1</a>, had used the <code>wp_register_script</code> and <code>wp_enqueue_script</code> WordPress functions to load their JavaScript, WordPress would know that only one version of jQuery needs to be loaded for both the theme and the plugin to work.</p><p>As WordPress releases come in fits and bursts, sometimes the version of the JS libraries included with WordPress fall behind the current version of the library available otherwise.</p><p>This is a small price to pay for the knowledge that our sites will remain super-fabulous rather than super-broken, at least when it comes to the JavaScript.</p><h4 id="jswpcss">A bonus for CSS</h4><p>By now the reasons for using <code>wp_register_script</code> and <code>wp_enqueue_script</code> should be clear. If you want to go that one step further, you can use the equivalent functions for your CSS.</p><p>As CSS should always be loaded in the HTML &lt;head&gt;, there is no option to load the CSS files in the footer of the HTML. Otherwise the CSS functions take the same arguments as their JavaScript equivalents. The CSS functions are:</p><ul><li>wp_register_style</li><li>wp_enqueue_style</li></ul><p>The four parameters they take are:</p><dl><dt>$handle</dt><dd>(required for both functions) Name of the style sheet</dd><dt>$source</dt><dd>(required for <code>wp_register_style</code>) – URL of the script. Also required by <code>wp_enqueue_style</code> if the style is unregistered.</dd><dt>$dependancies</dt><dd>(optional) – an array of handles the style sheet depends on</dd><dt>$version</dt><dd>(optional) – version number</dd></dl><p>WordPress doesn&#8217;t include any style sheets bases, such as YUI CSS, in the default distribution, so the main purpose of the CSS functions is to allow you to keep track of your version numbers and to call in style sheets only as they&#8217;re needed.</p><h4>Conditional comments</h4><p>Unfortunately the WordPress functions for JavaScript do not allow for conditional comments, so scripts targeting older versions of IE (okay, I&#8217;m referring to PNG fixers for IE6) need to be coded directly into your theme&#8217;s header.php or footer.php.</p><p>On the other hand, the CSS functions do allow for conditional comments, in a round-about fashion. Let&#8217;s register a CSS file we&#8217;ll be targeting at IE6.</p><pre><code>wp_register_style (   'mytheme-ie6', /* handle */   get_bloginfo('template_url') . '/ie6.css', /* source */   array('mytheme-css'), /* requires mytheme-css (not shown) */   1.0 /* version 1.0 */ );</code></pre><p>Behind the scenes WordPress is adding the stylesheet to the object $wp_styles. To add the conditional comments you need to access the object more directly. To target the above to IE6, the command is:</p><pre><code>$wp_styles-&gt;registered['mytheme-ie6']-&gt;extra['conditional'] = 'IE 6';</code></pre><p>If, as in the complicated example above, you need to check where a user is before enqueueing your stylesheet, again you need to enclose the enqueueing command in a function and run it on an action, in this case the action <code>wp_print_styles</code>.</p><p>For example, to output the IE6 stylesheet above on pages and posts only, the full code would be:</p><pre><code>function que_styles(){   if (!is_admin()) { //visitors only     if (is_singluar() {       wp_enqueue_style('mytheme-ie6');     }   } }  add_action('wp_print_styles', 'que_styles')</code></pre><h4>Conclusion</h4><p>The methods described in this tutorial may appear to complicate matters for little pay off, especially if you&#8217;re developing a theme or plugin for your own site.</p><p>Replacing your &lt;script&gt; tags with the code above, it is true, will have almost no effect on the HTML or JavaScript output by WordPress. What&#8217;s worse, if you use the $ alias for jQuery in your JavaScript, you&#8217;ll need to edit both the theme&#8217;s php and JavaScript files.</p><p>These functions, <code>wp_register_script</code> and <code>wp_enqueue_script</code>, aren&#8217;t about now, however, they&#8217;re about “then”.</p><ul><li>Then&#8230; I activated this plugin and my JavaScript stopped working.</li><li>Then&#8230; I changed the theme and my favourite plugin stopped working</li><li>Then&#8230; I looked at the source code, and two copies of jQuery were being sent to every visitor</li></ul><p>The WordPress developers have seen the problems JavaScript conflicts can cause, and developed these functions to make your theme or plugin more robust. It&#8217;s the added robustness, for such little effort, that make these functions worth using.</p></div><p class="tag-links entry-meta">Tagged: <a href="/tag/coding/" rel="tag">coding</a> &bull; <a href="/tag/css/" rel="tag">CSS</a> &bull; <a href="/tag/javascript/" rel="tag">JavaScript</a> &bull; <a href="/tag/plugin/" rel="tag">plugin</a> &bull; <a href="/tag/theme/" rel="tag">theme</a> &bull; <a href="/tag/wordpress/" rel="tag">WordPress</a> &bull; <a href="/tag/wp_enqueue_script/" rel="tag">wp_enqueue_script</a> &bull; <a href="/tag/wp_enqueue_style/" rel="tag">wp_enqueue_style</a> &bull; <a href="/tag/wp_register_script/" rel="tag">wp_register_script</a> &bull; <a href="/tag/wp_register_style/" rel="tag">wp_register_style</a></p><div id="authorDescription" class="author-description vcard"> <img alt='' src='http://1.gravatar.com/avatar/d6fa5fdcd09cd9484ebca5c0844cc13b?s=96&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-96 photo' height='96' width='96' /><h2>About<cite class="fn"> Peter Wilson</cite></h2><p>Peter Wilson is a Web Developer based in Melbourne, Australia. He co-founded Web Production firm <a href="http://soupgiant.com/" title="Soupgiant">Soupgiant</a> with Josh Kinal in October 2009.</p></div><div id="page-nav" class="page-nav nav"><div class="page-nav-older"><span class="direction">Previous post: </span><a href="/behind-the-websites/javascript-the-wordpress-way-part-1/" rel="prev">JavaScript the WordPress Way / Part 1</a></div><div class="page-nav-newer"><span class="direction">Next post: </span><a href="/content-strategy/understand-what-youre-saying/" rel="next">Understand What You&#8217;re Saying</a></div></div><div id="comments"><div id="respond"><h2>Leave a Reply</h2><div id="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="/behind-the-websites/javascript-the-wordpress-way-part-2/#respond" style="display:none;">Click here to cancel reply.</a></div><div class="formContainer"><form id="commentForm" action="/wp-comments-post.php" method="post"><p id="commentNotes">Your email is <em>never</em> shared.</p><div id="namePair" class="inputPair"> <label for="author">Name <span class="required">(required)</span></label> <input id="author" name="author" class="inputText inputReqd inputTextReqd" type="text" value="" size="30" maxlength="50" tabindex="3" /></div><div id="emailPair" class="inputPair"> <label for="email">Email <span class="required">(required)</span></label> <input id="email" name="email" class="inputText inputEmail inputReqd inputTextreqd inputEmailreqd" type="email" value="" size="30" maxlength="50" tabindex="4" /></div><div id="urlPair" class="inputPair"> <label for="url">Website</label> <input id="url" name="url" class="inputText" type="url" value="" size="30" maxlength="50" tabindex="5" /></div><div id="commentPair" class="inputPair"> <label for="comment">Comment <span class="required">(required)</span></label><textarea id="comment" name="comment" class="inputText inputReqd inputTextReqd" cols="45" rows="8" tabindex="6"></textarea></div><div class="submit"> <input id="submit" name="submit" class="button" type="submit" value="Post Your Comment" tabindex="7" /></div><div class="form-option"><input type='hidden' name='comment_post_ID' value='499' id='comment_post_ID' /> <input type='hidden' name='comment_parent' id='comment_parent' value='0' /></div></form></div></div></div></div></div></div><div id="contentC" class="sidebar"><div id="search-3" class="widget widget_search"><form method="get" action="http://bigredtin.com" class="search-form"><div> <label for="s-125064" class="search-label">Search this Site</label> <input type="text" name="s" id="s-125064" class="searchInput inputText" /> <input type="submit" value="Search" class="searchSubmit inputSubmit" /></div></form></div><div id="twitter-tools" class="widget aktt_widget"><h5 class="widget-title">Tasty Tweets</h5><div class="aktt_tweets"><ul><li>Looking @ <a href="http://ie6countdown.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','ie6countdown.com/']);" rel="nofollow">http://ie6countdown.com/</a> in IE6, @<a href="http://twitter.com/Microsoft" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/Microsoft']);" class="aktt_username">Microsoft</a>&#039;s point would be better made with degraded CSS3, etc ^pw <a href="http://twitter.com/bigredtin/statuses/44542947458416640" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/44542947458416640']);" class="aktt_tweet_time">4 days ago</a></li><li>RT @<a href="http://twitter.com/Microsoft" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/Microsoft']);" class="aktt_username">Microsoft</a>: It&#039;s not often that we encourage u to stop using one of our products, but 4 #<a href="http://search.twitter.com/search?q=%23IE6" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','search.twitter.com/search?q=%23IE6']);" class="aktt_hashtag">IE6</a> we&#039;ll make exception: <a href="http://bit.ly/g0wt4m" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','bit.ly/g0wt4m']);" rel="nofollow">http://bit.ly/g0wt4m</a> <a href="http://twitter.com/bigredtin/statuses/43830419589828608" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/43830419589828608']);" class="aktt_tweet_time">6 days ago</a></li><li>RT @<a href="http://twitter.com/brucel" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/brucel']);" class="aktt_username">brucel</a>: <a href="http://www.ie6countdown.com" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.ie6countdown.com']);" rel="nofollow">http://www.ie6countdown.com</a> if opera can make a browser supporting modern standards that works on [win2k], surely [MS] can backport ie9 <a href="http://twitter.com/bigredtin/statuses/43823981454835712" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/43823981454835712']);" class="aktt_tweet_time">6 days ago</a></li><li class="aktt_more_updates"><a href="http://twitter.com/bigredtin">More updates...</a></li></ul></div></div><div id="text-4" class="widget widget_text"><h5 class="widget-title">B.R.T. by Soupgiant</h5><div class="textwidget"><p>Big Red Tin is presented by <a href="http://soupgiant.com" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com']);"><strong>Soupgiant</strong></a>.</p><p>The philosophy is simple: <strong>Good content presented in the most efficient, user-friendly and accessible way possible</strong>.</p></div></div></div></div><div id="footer"><div id="footWidgets"><div id="recent-posts-3" class="foot-widget widget widget_recent_entries"><h5 class="widget-title">Recent Posts</h5><ul><li><a href="/quick-notes/guest-post-on-digwp/" title="Guest Post on Digging into WordPress">Guest Post on Digging into WordPress</a></li><li><a href="/design/details-prevent-user-paralysis/" title="Details Prevent User Paralysis">Details Prevent User Paralysis</a></li><li><a href="/quick-notes/caching-google-webfont-loader/" title="Caching Google&#8217;s WebFont Loader">Caching Google&#8217;s WebFont Loader</a></li><li><a href="/quick-notes/soupgiant-wordpress-themes-github/" title="Soupgiant WordPress themes on Github">Soupgiant WordPress themes on Github</a></li><li><a href="/behind-the-websites/html5-couldnt-do-it/" title="HTML5: I couldn&#8217;t (quite) do it">HTML5: I couldn&#8217;t (quite) do it</a></li></ul></div><div id="categories-3" class="foot-widget widget widget_categories"><h5 class="widget-title">Categories</h5><ul><li class="cat-item cat-item-557"><a href="/behind-the-websites/" title="Everything to do with website coding that we can think of. Front-end, back-end, upside and down, you&#039;ll find it here. It also contains our thoughts about Content Management Systems (CMS) and all the other little and technical things.">Behind the Websites</a></li><li class="cat-item cat-item-31"><a href="/business/" title="Producing websites is, in itself a business, but it often relates to the business of our clients. We&#039;ll try to put all of those thoughts and processes in here.">Business</a></li><li class="cat-item cat-item-540"><a href="/content-strategy/" title="Content whosawhatnow? When producing websites it&#039;s really important to think about what information you&#039;re going to provide, how it&#039;s going to be displayed and how is it going to affect your audience. That&#039;s content strategy in a nutshell. This is where we crack that nut.">Content Strategy</a></li><li class="cat-item cat-item-54"><a href="/design/" title="Design is so much more than just the graphics. A lot of thought goes in to how something looks, where elements are placed, what does and doesn&#039;t appear and when. You&#039;ll find that information here.">Design</a></li><li class="cat-item cat-item-4574"><a href="/quick-notes/" title="Just like it sounds. This is where we post clippings of interesting things we&#039;ve found (code, opinions, writings, pictures) that deal with all aspects of making the web. We found them interesting. You don&#039;t have to.">Quick Notes</a></li></ul></div><div id="linkcat-530" class="foot-widget widget widget_links"><h5 class="widget-title">Handy Links</h5><ul class='xoxo blogroll'><li><a href="/about/" rel="me" title="About Big Red Tin">About Big Red Tin</a></li><li><a href="http://twitter.com/bigredtin" rel="me" title="Follow Big Red Tin on Twitter" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://twitter.com/bigredtin']);">Follow us on Twitter</a></li><li><a href="/contact" rel="me" title="Get in Contact">Get in Contact</a></li><li><a href="http://feeds.soupgiant.com/bigredtin" rel="me" title="Subscribe to Big Red Tin in your feed reader" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://feeds.soupgiant.com/bigredtin']);">Subscribe by RSS</a></li><li><a href="/plugins-themes/" rel="me">WordPress Plugins &amp; Themes</a></li></ul></div><div id="text-3" class="foot-widget widget widget_text"><h5 class="widget-title">Side Credits</h5><div class="textwidget"><ul><li class="copyright">Copyright &copy; 2009 - 2010 <a href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li class="credits credits-dev">Developed by <a href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li class="credits credits-design">Design by <a href="http://zepol.com.au/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','zepol.com.au/']);">Zepol</a></li><li class="powered">Inevitably powered by <a href="http://wordpress.org" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','wordpress.org']);">WordPress</a></li></ul></div></div></div></div></div>  <script type='text/javascript'>try{jQuery.noConflict();}catch(e){};</script> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/sg-base-min.js?ver=1.1.0'></script> <script type='text/javascript' src='/wp-content/themes/bigredtin/assets/child/j/custom-min.js?ver=1.0.0'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/jquery.form.js?ver=2.47'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/scripts.js?ver=2.4.2'></script> <script src="https://stats.wordpress.com/e-201110.js" type="text/javascript"></script> <script type="text/javascript">st_go({blog:'13871010',v:'ext',post:'499'});var load_cmc=function(){linktracker_init(13871010,499,2);};if(typeof addLoadEvent!='undefined')addLoadEvent(load_cmc);else load_cmc();</script> <!--[if IE 6]> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/ddbelatedpng-min.js'></script> <script type="text/javascript">if(typeof jQuery=="function"){jQuery(window).ready(function(){DD_belatedPNG.fix('img');});}else{DD_belatedPNG.fix('img');}</script> <![endif]--></body></html>  <!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/    Minified using disk  Page Caching using disk (enhanced)  Content Delivery Network via assets.sgiant.com/pressgiant    Served from: bigredtin.com @ 2011-03-11 18:06:44 -->