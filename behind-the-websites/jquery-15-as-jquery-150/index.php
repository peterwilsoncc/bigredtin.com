<?php
$year = '2010',3],['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script> <link rel="alternate" type="application/rss+xml" title="Big Red Tin &raquo; jQuery 1.5 as jQuery 1.5.0 Comments Feed" href="/behind-the-websites/jquery-15-as-jquery-150/feed/" /><link rel='stylesheet' id='soup-allmedia-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-min.css?ver=20110210.02' type='text/css' media='all' /> <!--[if IE 6]><link rel='stylesheet' id='soup-allmedia-ie6-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie6-min.css?ver=20110210.02' type='text/css' media='all' /> <![endif]--> <!--[if IE 7]><link rel='stylesheet' id='soup-allmedia-ie7-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie7-min.css?ver=20110210.02' type='text/css' media='all' /> <![endif]--><link rel='stylesheet' id='contact-form-7-css'  href='/wp-content/plugins/contact-form-7/styles.css?ver=2.4.2' type='text/css' media='all' /> <script type='text/javascript' src='/wp-includes/js/comment-reply.js?ver=20090102'></script> <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" /><link rel='index' title='Big Red Tin' href='/' /><link rel='start' title='Don&#8217;t start with a reset.css' href='/behind-the-websites/dont-start-with-a-resetcss/' /><link rel='prev' title='HTML5 for Web Designers' href='/behind-the-websites/html5-for-web-designers-9/' /><link rel='next' title='Networking is the New Networking' href='/business/networking-is-the-new-networking/' /><link rel='shortlink' href='/?p=802' /><meta name="description" content="When jQuery 1.4 was released, the Google URL publicised by the jQuery team was http://.../1.4/jquery.min.js - I had problems with this seemingly minor difference" /><meta name="keywords" content="caching,google,javascript,jquery" /><link rel="canonical" href="/behind-the-websites/jquery-15-as-jquery-150/" />  <script type="text/javascript">var _wpcf7={cached:1};</script> <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><link rel="icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body id="brt" class="nojs nojswin bxSngl bxAllBlog bxPost bxP-jquery-15-as-jquery-150 bxP-id802 bxPC-behind-the-websites bxPTag-caching bxPTag-google bxPTag-javascript bxPTag-jquery bxPA-peter"><div id="pageWrap" class="brt"><div id="header"><div id="siteDetails"><p id="siteName"><a href="http://bigredtin.com"><img src="/wp-content/themes/bigredtin/assets/child/i/logo-white-24.png" class="screen" width="323" height="90" alt="Big Red Tin  | Thoughts about the web and business from the large pantry" title="Big Red Tin | Thoughts about the web and business from the large pantry" /><img src="/wp-content/themes/bigredtin/assets/child/i/logo-colour-24.png" class="print" width="323" height="90" alt="" title="" /></a></p></div><div id="headerWidgets"></div></div><div id="container"><div id="navWrap" class="navWrap"></div><div id="content"><div id="contentHeadA" class="hentry p1 post publish post-jquery-15-as-jquery-150 author-peter-wilson cat-behind-the-websites tagged tag-caching tag-google tag-javascript tag-jquery"><div id="contentHead"><h1 class="entry-title" id="pageName"> <a href="/behind-the-websites/jquery-15-as-jquery-150/" title="jQuery 1.5 as jQuery 1.5.0" rel="bookmark"> jQuery 1.5 as jQuery 1.5.0 </a></h1><p class="entry-date"><span class="published" title="2010-09-07T12:53:48+00:00">7 Sep '10</span></p></div><div id="contentA"><div class="entry-meta"><p class="details"> <span class="author vcard">By <a class="url fn n" href="/author/peter/" title="View all posts by Peter Wilson">Peter Wilson</a></span> <span class="cat-links"> in <a href="/behind-the-websites/" title="View all posts in Behind the Websites" rel="category tag">Behind the Websites</a></span></p><p class="comments-link"> <a href="/behind-the-websites/jquery-15-as-jquery-150/#comments">No responses</a></p></div><div class="entry-content"><p>In early 2009, I wrote a post on <a title="browser caching times" href="/behind-the-websites/caching-on-the-google-ajax-libraries-api/" >browser caching times</a> for the Google AJAX Libraries API.</p><p>The cheat notes are that three different URLs point to the current edition of jQuery and each URL is cached in the browser for a different length of time:</p><ul><li><a title="Latest in the version 1 tree" href="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js']);">Latest in the version 1 tree</a>: 1 hour</li><li><a title="Latest in the version 1.4 tree" href="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js']);">Latest in the version 1.4 tree</a>: 1 hour</li><li><a title="Version 1.4.2 exactly" href="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js']);">Version 1.4.2 exactly</a>: <strong>1 year</strong></li></ul><p>The point of my post was that, when using Google&#8217;s AJAX Library to host jQuery, or any of the other libraries, it is best to specify the exact version to receive the full benefit of hosting on the same server as gazillions of other web sites, that being, your <a title="visitors don't need to download the library for every site they visit" href="http://encosia.com/2008/12/10/3-reasons-why-you-should-let-google-host-jquery-for-you/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','encosia.com/2008/12/10/3-reasons-why-you-should-let-google-host-jquery-for-you/']);">visitors don&#8217;t need to download the library for every site they visit</a>. I was reminded of this when Dave Ward appeared on <a title="episode 32 of the official jQuery podcast" href="http://podcast.jquery.com/2010/08/27/episode-32-dave-ward/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','podcast.jquery.com/2010/08/27/episode-32-dave-ward/']);">episode 32 of the official jQuery podcast</a>.</p><p><a title="When jQuery 1.4 was released" href="http://jquery14.com/day-01/jquery-14" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','jquery14.com/day-01/jquery-14']);">When jQuery 1.4 was released</a>, the Google URL being publicised by the jQuery team was <a href="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js']);">http://&#8230;/jquery/1.4/jquery.min.js</a> &#8211; while Google had set it up as <a href="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js']);">http://&#8230;/jquery/1.4.0/jquery.min.js</a>. I had two problems with this:</p><ul><li>The publicised URL, coming from the official jQuery team, was only cached for 1 hour;</li><li>Anyone using the publicised URL would automatically be upgraded to jQuery 1.4.1 upon its release, regardless of their expectations.</li></ul><p><strong>My request to John Resig and the jQuery team is to avoid confusion by officially numbering the next version as jQuery 1.5.0 and publicising the URL that contains the full version number.</strong></p><p>That means that for most people the default version of jQuery they download will be updated least often. It means that the people building the websites have more control over which version of jQuery their end users download and when.</p><p>It may seem trivial now but if your visitors leave your site while they&#8217;re waiting for jQuery to download, you&#8217;ll think it less so.</p><p>I&#8217;d love to hear your thoughts in the comments below or via <a title="@bigredtin" href="http://twitter.com/?status=@bigredtin" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/?status=@bigredtin']);">@bigredtin</a> on Twitter. If you agree, why not let the jQuery team know <a title="via Twitter" href="http://twitter.com/?status=@jquery" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/?status=@jquery']);">via Twitter</a>.</p><p><strong>Update:</strong> In the blog post announcing version 1.5, the jQuery team did publicise the 1.5.0 URL on the Google CDN.</p></div><p class="tag-links entry-meta">Tagged: <a href="/tag/caching/" rel="tag">caching</a> &bull; <a href="/tag/google/" rel="tag">google</a> &bull; <a href="/tag/javascript/" rel="tag">JavaScript</a> &bull; <a href="/tag/jquery/" rel="tag">jQuery</a></p><div id="authorDescription" class="author-description vcard"> <img alt='' src='http://1.gravatar.com/avatar/d6fa5fdcd09cd9484ebca5c0844cc13b?s=96&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-96 photo' height='96' width='96' /><h2>About<cite class="fn"> Peter Wilson</cite></h2><p>Peter Wilson is a Web Developer based in Melbourne, Australia. He co-founded Web Production firm <a href="http://soupgiant.com/" title="Soupgiant">Soupgiant</a> with Josh Kinal in October 2009.</p></div><div id="page-nav" class="page-nav nav"><div class="page-nav-older"><span class="direction">Previous post: </span><a href="/behind-the-websites/html5-for-web-designers-9/" rel="prev">HTML5 for Web Designers</a></div><div class="page-nav-newer"><span class="direction">Next post: </span><a href="/business/networking-is-the-new-networking/" rel="next">Networking is the New Networking</a></div></div><div id="comments"><div id="respond"><h2>Leave a Reply</h2><div id="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="/behind-the-websites/jquery-15-as-jquery-150/#respond" style="display:none;">Click here to cancel reply.</a></div><div class="formContainer"><form id="commentForm" action="/wp-comments-post.php" method="post"><p id="commentNotes">Your email is <em>never</em> shared.</p><div id="namePair" class="inputPair"> <label for="author">Name <span class="required">(required)</span></label> <input id="author" name="author" class="inputText inputReqd inputTextReqd" type="text" value="" size="30" maxlength="50" tabindex="3" /></div><div id="emailPair" class="inputPair"> <label for="email">Email <span class="required">(required)</span></label> <input id="email" name="email" class="inputText inputEmail inputReqd inputTextreqd inputEmailreqd" type="email" value="" size="30" maxlength="50" tabindex="4" /></div><div id="urlPair" class="inputPair"> <label for="url">Website</label> <input id="url" name="url" class="inputText" type="url" value="" size="30" maxlength="50" tabindex="5" /></div><div id="commentPair" class="inputPair"> <label for="comment">Comment <span class="required">(required)</span></label><textarea id="comment" name="comment" class="inputText inputReqd inputTextReqd" cols="45" rows="8" tabindex="6"></textarea></div><div class="submit"> <input id="submit" name="submit" class="button" type="submit" value="Post Your Comment" tabindex="7" /></div><div class="form-option"><input type='hidden' name='comment_post_ID' value='802' id='comment_post_ID' /> <input type='hidden' name='comment_parent' id='comment_parent' value='0' /></div></form></div></div></div></div></div></div><div id="contentC" class="sidebar"><div id="search-3" class="widget widget_search"><form method="get" action="http://bigredtin.com" class="search-form"><div> <label for="s-105934" class="search-label">Search this Site</label> <input type="text" name="s" id="s-105934" class="searchInput inputText" /> <input type="submit" value="Search" class="searchSubmit inputSubmit" /></div></form></div><div id="twitter-tools" class="widget aktt_widget"><h5 class="widget-title">Tasty Tweets</h5><div class="aktt_tweets"><ul><li>RT @<a href="http://twitter.com/Microsoft" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/Microsoft']);" class="aktt_username">Microsoft</a>: It&#039;s not often that we encourage u to stop using one of our products, but 4 #<a href="http://search.twitter.com/search?q=%23IE6" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','search.twitter.com/search?q=%23IE6']);" class="aktt_hashtag">IE6</a> we&#039;ll make exception: <a href="http://bit.ly/g0wt4m" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','bit.ly/g0wt4m']);" rel="nofollow">http://bit.ly/g0wt4m</a> <a href="http://twitter.com/bigredtin/statuses/43830419589828608" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/43830419589828608']);" class="aktt_tweet_time">1 hr ago</a></li><li>RT @<a href="http://twitter.com/brucel" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/brucel']);" class="aktt_username">brucel</a>: <a href="http://www.ie6countdown.com" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.ie6countdown.com']);" rel="nofollow">http://www.ie6countdown.com</a> if opera can make a browser supporting modern standards that works on [win2k], surely [MS] can backport ie9 <a href="http://twitter.com/bigredtin/statuses/43823981454835712" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/43823981454835712']);" class="aktt_tweet_time">2 hrs ago</a></li><li>Interesting post by @<a href="http://twitter.com/andybudd" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/andybudd']);" class="aktt_username">andybudd</a> on lies, damned list &amp; KPIs <a href="http://redt.in/evcB3l" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','redt.in/evcB3l']);" rel="nofollow">http://redt.in/evcB3l</a> ^pw <a href="http://twitter.com/bigredtin/statuses/43533495636729856" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/43533495636729856']);" class="aktt_tweet_time">21 hrs ago</a></li><li class="aktt_more_updates"><a href="http://twitter.com/bigredtin">More updates...</a></li></ul></div></div><div id="text-4" class="widget widget_text"><h5 class="widget-title">B.R.T. by Soupgiant</h5><div class="textwidget"><p>Big Red Tin is presented by <a href="http://soupgiant.com" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com']);"><strong>Soupgiant</strong></a>.</p><p>The philosophy is simple: <strong>Good content presented in the most efficient, user-friendly and accessible way possible</strong>.</p></div></div></div></div><div id="footer"><div id="footWidgets"><div id="recent-posts-3" class="foot-widget widget widget_recent_entries"><h5 class="widget-title">Recent Posts</h5><ul><li><a href="/quick-notes/guest-post-on-digwp/" title="Guest Post on Digging into WordPress">Guest Post on Digging into WordPress</a></li><li><a href="/design/details-prevent-user-paralysis/" title="Details Prevent User Paralysis">Details Prevent User Paralysis</a></li><li><a href="/quick-notes/caching-google-webfont-loader/" title="Caching Google&#8217;s WebFont Loader">Caching Google&#8217;s WebFont Loader</a></li><li><a href="/quick-notes/soupgiant-wordpress-themes-github/" title="Soupgiant WordPress themes on Github">Soupgiant WordPress themes on Github</a></li><li><a href="/behind-the-websites/html5-couldnt-do-it/" title="HTML5: I couldn&#8217;t (quite) do it">HTML5: I couldn&#8217;t (quite) do it</a></li></ul></div><div id="categories-3" class="foot-widget widget widget_categories"><h5 class="widget-title">Categories</h5><ul><li class="cat-item cat-item-557"><a href="/behind-the-websites/" title="Everything to do with website coding that we can think of. Front-end, back-end, upside and down, you&#039;ll find it here. It also contains our thoughts about Content Management Systems (CMS) and all the other little and technical things.">Behind the Websites</a></li><li class="cat-item cat-item-31"><a href="/business/" title="Producing websites is, in itself a business, but it often relates to the business of our clients. We&#039;ll try to put all of those thoughts and processes in here.">Business</a></li><li class="cat-item cat-item-540"><a href="/content-strategy/" title="Content whosawhatnow? When producing websites it&#039;s really important to think about what information you&#039;re going to provide, how it&#039;s going to be displayed and how is it going to affect your audience. That&#039;s content strategy in a nutshell. This is where we crack that nut.">Content Strategy</a></li><li class="cat-item cat-item-54"><a href="/design/" title="Design is so much more than just the graphics. A lot of thought goes in to how something looks, where elements are placed, what does and doesn&#039;t appear and when. You&#039;ll find that information here.">Design</a></li><li class="cat-item cat-item-4574"><a href="/quick-notes/" title="Just like it sounds. This is where we post clippings of interesting things we&#039;ve found (code, opinions, writings, pictures) that deal with all aspects of making the web. We found them interesting. You don&#039;t have to.">Quick Notes</a></li></ul></div><div id="linkcat-530" class="foot-widget widget widget_links"><h5 class="widget-title">Handy Links</h5><ul class='xoxo blogroll'><li><a href="/about/" rel="me" title="About Big Red Tin">About Big Red Tin</a></li><li><a href="http://twitter.com/bigredtin" rel="me" title="Follow Big Red Tin on Twitter" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://twitter.com/bigredtin']);">Follow us on Twitter</a></li><li><a href="/contact" rel="me" title="Get in Contact">Get in Contact</a></li><li><a href="http://feeds.soupgiant.com/bigredtin" rel="me" title="Subscribe to Big Red Tin in your feed reader" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://feeds.soupgiant.com/bigredtin']);">Subscribe by RSS</a></li><li><a href="/plugins-themes/" rel="me">WordPress Plugins &amp; Themes</a></li></ul></div><div id="text-3" class="foot-widget widget widget_text"><h5 class="widget-title">Side Credits</h5><div class="textwidget"><ul><li class="copyright">Copyright &copy; 2009 - 2010 <a href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li class="credits credits-dev">Developed by <a href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li class="credits credits-design">Design by <a href="http://zepol.com.au/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','zepol.com.au/']);">Zepol</a></li><li class="powered">Inevitably powered by <a href="http://wordpress.org" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','wordpress.org']);">WordPress</a></li></ul></div></div></div></div></div>  <script type='text/javascript'>try{jQuery.noConflict();}catch(e){};</script> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/sg-base-min.js?ver=1.1.0'></script> <script type='text/javascript' src='/wp-content/themes/bigredtin/assets/child/j/custom-min.js?ver=1.0.0'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/jquery.form.js?ver=2.47'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/scripts.js?ver=2.4.2'></script> <script src="https://stats.wordpress.com/e-201109.js" type="text/javascript"></script> <script type="text/javascript">st_go({blog:'13871010',v:'ext',post:'802'});var load_cmc=function(){linktracker_init(13871010,802,2);};if(typeof addLoadEvent!='undefined')addLoadEvent(load_cmc);else load_cmc();</script> <!--[if IE 6]> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/ddbelatedpng-min.js'></script> <script type="text/javascript">if(typeof jQuery=="function"){jQuery(window).ready(function(){DD_belatedPNG.fix('img');});}else{DD_belatedPNG.fix('img');}</script> <![endif]--></body></html>  <!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/    Minified using disk  Page Caching using disk (enhanced)  Content Delivery Network via assets.sgiant.com/pressgiant    Served from: bigredtin.com @ 2011-03-05 02:13:01 -->