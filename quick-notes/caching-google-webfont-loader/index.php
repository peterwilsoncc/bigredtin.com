<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" class="nojs nojswin"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title> Caching Google&#8217;s WebFont Loader  |  Big Red Tin</title><link rel="alternate" type="application/atom+xml" title="Big Red Tin Feed" href="/feed/atom/" /><link rel="alternate" type="application/atom+xml" title="Big Red Tin Comments Feed" href="/comments/feed/atom/" /><link rel="pingback" href="/xmlrpc.php" /> <script type="text/javascript">var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-11132236-2']);_gaq.push(['_setAllowAnchor',true],['_setCustomVar',1,'author','peter-wilson',3],['_setCustomVar',2,'tags','font-face caching fonts google javascript webfont-loader',3],['_setCustomVar',3,'year','2010',3],['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script> <link rel="alternate" type="application/rss+xml" title="Big Red Tin &raquo; Caching Google&#8217;s WebFont Loader Comments Feed" href="/quick-notes/caching-google-webfont-loader/feed/" /><link rel='stylesheet' id='soup-allmedia-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-min.css?ver=20101202.02' type='text/css' media='all' /> <!--[if IE 6]><link rel='stylesheet' id='soup-allmedia-ie6-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie6-min.css?ver=20101202.02' type='text/css' media='all' /> <![endif]--> <!--[if IE 7]><link rel='stylesheet' id='soup-allmedia-ie7-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie7-min.css?ver=20101202.02' type='text/css' media='all' /> <![endif]--><link rel='stylesheet' id='contact-form-7-css'  href='/wp-content/plugins/contact-form-7/styles.css?ver=2.4.2' type='text/css' media='all' /> <script type='text/javascript' src='/wp-includes/js/comment-reply.js?ver=20090102'></script> <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" /><link rel='index' title='Big Red Tin' href='/' /><link rel='start' title='Don&#8217;t start with a reset.css' href='/behind-the-websites/dont-start-with-a-resetcss/' /><link rel='prev' title='Soupgiant WordPress themes on Github' href='/quick-notes/soupgiant-wordpress-themes-github/' /><link rel='shortlink' href='/?p=988' /><meta name="description" content="As with Google's other hosted libraries, providing a more specific version number of webfont.js will improve browser caching." /><meta name="keywords" content="@font-face,caching,fonts,google,javascript,webfont loader" /><link rel="canonical" href="/quick-notes/caching-google-webfont-loader/" />  <script type="text/javascript">var _wpcf7={cached:1};</script> <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><link rel="icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body id="brt" class="nojs nojswin bxSngl bxAllBlog bxPost bxP-caching-google-webfont-loader bxP-id988 bxPC-quick-notes bxPTag-font-face bxPTag-caching bxPTag-fonts bxPTag-google bxPTag-javascript bxPTag-webfont-loader bxPA-peter"><div id="pageWrap" class="brt"><div id="header"><div id="siteDetails"><p id="siteName"><a href="http://bigredtin.com"><img src="/wp-content/themes/bigredtin/assets/child/i/logo-white-24.png" class="screen" width="323" height="90" alt="Big Red Tin  | Thoughts about the web and business from the large pantry" title="Big Red Tin | Thoughts about the web and business from the large pantry" /><img src="/wp-content/themes/bigredtin/assets/child/i/logo-colour-24.png" class="print" width="323" height="90" alt="" title="" /></a></p></div><div id="headerWidgets"></div></div><div id="container"><div id="navWrap" class="navWrap"></div><div id="content"><div id="contentHeadA" class="hentry p1 post publish post-caching-google-webfont-loader author-peter-wilson cat-quick-notes tagged tag-font-face tag-caching tag-fonts tag-google tag-javascript tag-webfont-loader"><div id="contentHead"><h1 class="entry-title" id="pageName"> <a href="/quick-notes/caching-google-webfont-loader/" title="Caching Google&#8217;s WebFont Loader" rel="bookmark"> Caching Google&#8217;s WebFont Loader </a></h1><p class="entry-date"><span class="published" title="2010-12-15T11:39:07+00:00">15 Dec '10</span></p></div><div id="contentA"><div class="entry-meta"><p class="details"> <span class="author vcard">By <a class="url fn n" href="/author/peter/" title="View all posts by Peter Wilson">Peter Wilson</a></span> <span class="cat-links"> in <a href="/quick-notes/" title="View all posts in Quick Notes" rel="category tag">Quick Notes</a></span></p><p class="comments-link"> <a href="/quick-notes/caching-google-webfont-loader/#comments">No responses</a></p></div><div class="entry-content"><p>The <a title="Google WebFont Loader" href="http://code.google.com/apis/webfonts/docs/webfont_loader.html" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','code.google.com/apis/webfonts/docs/webfont_loader.html']);">Google WebFont Loader</a> provides the following sample code:</p><pre><code>WebFontConfig = {   google: { families: [ 'Tangerine', 'Cantarell' ] } }; (function() {   var wf = document.createElement('script');   wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + <strong>      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'; </strong>  wf.type = 'text/javascript';   wf.async = 'true';   var s = document.getElementsByTagName('script')[0];   s.parentNode.insertBefore(wf, s); })();</code></pre><p>The line in bold indicates version one of webfont.js is being loaded. As with Google&#8217;s other hosted libraries providing a more, or less, specific version number will effect both browser <a href="/behind-the-websites/caching-on-the-google-ajax-libraries-api/" >caching and whether the webfont.js is upgraded automatically</a>.</p><table><thead><tr><th scope="col">Version in code</th><th scope="col">Version provided</th><th scope="col">Caching period</th></tr></thead><tbody><tr><td>1</td><td>Latest in Version 1 tree (currently 1.0.17)</td><td>1 hour</td></tr><tr><td>1.0</td><td>Latest in Version 1.0 tree (currently 1.0.17)</td><td>1 hour</td></tr><tr><td>1.0.17</td><td>Version 1.0.17</td><td>1 year</td></tr></tbody></table><p>By using the exact version number in your code, the load time of your site will improve on return visits as webfont.js will already be cached in your visitors browser. It will be cached on your visitors first visit if they&#8217;ve visited another site using the exact version in the last twelve months.</p><p>You can see the latest version available by visiting the <a href="http://code.google.com/apis/libraries/devguide.html#webfont" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','code.google.com/apis/libraries/devguide.html#webfont']);">Google Libraries Developer Guide</a>. You can specify the exact version number in your code by replacing the bold line in the code sample above with:</p><pre><code><strong>'://ajax.googleapis.com/ajax/libs/webfont/1.0.17/webfont.js';</strong></code></pre></div><p class="tag-links entry-meta">Tagged: <a href="/tag/font-face/" rel="tag">@font-face</a> &bull; <a href="/tag/caching/" rel="tag">caching</a> &bull; <a href="/tag/fonts/" rel="tag">fonts</a> &bull; <a href="/tag/google/" rel="tag">google</a> &bull; <a href="/tag/javascript/" rel="tag">JavaScript</a> &bull; <a href="/tag/webfont-loader/" rel="tag">WebFont loader</a></p><div id="authorDescription" class="author-description vcard"> <img alt='' src='http://1.gravatar.com/avatar/d6fa5fdcd09cd9484ebca5c0844cc13b?s=96&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-96 photo' height='96' width='96' /><h2>About<cite class="fn"> Peter Wilson</cite></h2><p>Peter Wilson is a Web Developer based in Melbourne, Australia. He co-founded Web Production firm <a href="http://soupgiant.com/" title="Soupgiant">Soupgiant</a> with Josh Kinal in October 2009.</p></div><div id="page-nav" class="page-nav nav"><div class="page-nav-older"><span class="direction">Previous post: </span><a href="/quick-notes/soupgiant-wordpress-themes-github/" rel="prev">Soupgiant WordPress themes on Github</a></div><div class="page-nav-newer"></div></div><div id="comments"><div id="respond"><h2>Leave a Reply</h2><div id="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="/quick-notes/caching-google-webfont-loader/#respond" style="display:none;">Click here to cancel reply.</a></div><div class="formContainer"><form id="commentForm" action="/wp-comments-post.php" method="post"><p id="commentNotes">Your email is <em>never</em> shared.</p><div id="namePair" class="inputPair"> <label for="author">Name <span class="required">(required)</span></label> <input id="author" name="author" class="inputText inputReqd inputTextReqd" type="text" value="" size="30" maxlength="50" tabindex="3" /></div><div id="emailPair" class="inputPair"> <label for="email">Email <span class="required">(required)</span></label> <input id="email" name="email" class="inputText inputEmail inputReqd inputTextreqd inputEmailreqd" type="email" value="" size="30" maxlength="50" tabindex="4" /></div><div id="urlPair" class="inputPair"> <label for="url">Website</label> <input id="url" name="url" class="inputText" type="url" value="" size="30" maxlength="50" tabindex="5" /></div><div id="commentPair" class="inputPair"> <label for="comment">Comment <span class="required">(required)</span></label><textarea id="comment" name="comment" class="inputText inputReqd inputTextReqd" cols="45" rows="8" tabindex="6"></textarea></div><div class="submit"> <input id="submit" name="submit" class="button" type="submit" value="Post Your Comment" tabindex="7" /></div><div class="form-option"><input type='hidden' name='comment_post_ID' value='988' id='comment_post_ID' /> <input type='hidden' name='comment_parent' id='comment_parent' value='0' /></div></form></div></div></div></div></div></div><div id="contentC" class="sidebar"><div id="search-3" class="widget widget_search"><form method="get" action="http://bigredtin.com" class="search-form"><div> <label for="s-860142" class="search-label">Search this Site</label> <input type="text" name="s" id="s-860142" class="searchInput inputText" /> <input type="submit" value="Search" class="searchSubmit inputSubmit" /></div></form></div><div id="twitter-tools" class="widget aktt_widget"><h5 class="widget-title">Tasty Tweets</h5><div class="aktt_tweets"><ul><li>Quick Note: Caching Google’s WebFont Loader <a href="http://redt.in/eW3D6Z" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','redt.in/eW3D6Z']);" rel="nofollow">http://redt.in/eW3D6Z</a> ^sgiant <a href="http://twitter.com/bigredtin/statuses/14846644705034240" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/14846644705034240']);" class="aktt_tweet_time">2 weeks ago</a></li><li>This has simultaneously impressed me and made me question why. <a href="http://bit.ly/hb0pLy" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','bit.ly/hb0pLy']);" rel="nofollow">http://bit.ly/hb0pLy</a> ^JK <a href="http://twitter.com/bigredtin/statuses/14547346230611968" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/14547346230611968']);" class="aktt_tweet_time">2 weeks ago</a></li><li>Quick Note: Soupgiant WordPress themes on Github <a href="http://redt.in/hC6ABN" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','redt.in/hC6ABN']);" rel="nofollow">http://redt.in/hC6ABN</a> ^sgiant <a href="http://twitter.com/bigredtin/statuses/14467144968314881" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/14467144968314881']);" class="aktt_tweet_time">2 weeks ago</a></li><li class="aktt_more_updates"><a href="http://twitter.com/bigredtin">More updates...</a></li></ul></div></div><div id="tag_cloud-3" class="widget widget_tag_cloud"><h5 class="widget-title">Tags</h5><div><a href='/tag/font-face/' class='tag-link-4575' title='2 topics' style='font-size: 10.7096774194pt;'>@font-face</a> <a href='/tag/accessibility/' class='tag-link-581' title='3 topics' style='font-size: 12.5161290323pt;'>accessibility</a> <a href='/tag/advertising/' class='tag-link-41' title='3 topics' style='font-size: 12.5161290323pt;'>advertising</a> <a href='/tag/blogging/' class='tag-link-558' title='3 topics' style='font-size: 12.5161290323pt;'>blogging</a> <a href='/tag/blogs/' class='tag-link-42' title='3 topics' style='font-size: 12.5161290323pt;'>blogs</a> <a href='/tag/books/' class='tag-link-43' title='3 topics' style='font-size: 12.5161290323pt;'>books</a> <a href='/tag/boxcutters/' class='tag-link-44' title='2 topics' style='font-size: 10.7096774194pt;'>boxcutters</a> <a href='/tag/caching/' class='tag-link-549' title='3 topics' style='font-size: 12.5161290323pt;'>caching</a> <a href='/tag/clients/' class='tag-link-47' title='3 topics' style='font-size: 12.5161290323pt;'>clients</a> <a href='/tag/coding/' class='tag-link-539' title='7 topics' style='font-size: 17.0322580645pt;'>coding</a> <a href='/tag/communication/' class='tag-link-617' title='3 topics' style='font-size: 12.5161290323pt;'>communication</a> <a href='/tag/content/' class='tag-link-559' title='4 topics' style='font-size: 14.0215053763pt;'>content</a> <a href='/tag/content-strategy/' class='tag-link-540' title='2 topics' style='font-size: 10.7096774194pt;'>Content Strategy</a> <a href='/tag/css/' class='tag-link-32' title='13 topics' style='font-size: 20.7956989247pt;'>CSS</a> <a href='/tag/css3/' class='tag-link-534' title='3 topics' style='font-size: 12.5161290323pt;'>CSS3</a> <a href='/tag/design/' class='tag-link-54' title='2 topics' style='font-size: 10.7096774194pt;'>Design</a> <a href='/tag/domains/' class='tag-link-55' title='2 topics' style='font-size: 10.7096774194pt;'>domains</a> <a href='/tag/expectations/' class='tag-link-57' title='2 topics' style='font-size: 10.7096774194pt;'>expectations</a> <a href='/tag/fonts/' class='tag-link-4576' title='2 topics' style='font-size: 10.7096774194pt;'>fonts</a> <a href='/tag/google/' class='tag-link-548' title='3 topics' style='font-size: 12.5161290323pt;'>google</a> <a href='/tag/html/' class='tag-link-551' title='3 topics' style='font-size: 12.5161290323pt;'>html</a> <a href='/tag/html5/' class='tag-link-578' title='4 topics' style='font-size: 14.0215053763pt;'>html5</a> <a href='/tag/internet-explorer/' class='tag-link-544' title='2 topics' style='font-size: 10.7096774194pt;'>internet explorer</a> <a href='/tag/javascript/' class='tag-link-34' title='16 topics' style='font-size: 22pt;'>JavaScript</a> <a href='/tag/jquery/' class='tag-link-65' title='3 topics' style='font-size: 12.5161290323pt;'>jQuery</a> <a href='/tag/layout/' class='tag-link-552' title='1 topic' style='font-size: 8pt;'>layout</a> <a href='/tag/marketing/' class='tag-link-66' title='2 topics' style='font-size: 10.7096774194pt;'>marketing</a> <a href='/tag/phishing/' class='tag-link-91' title='1 topic' style='font-size: 8pt;'>phishing</a> <a href='/tag/planning/' class='tag-link-583' title='3 topics' style='font-size: 12.5161290323pt;'>planning</a> <a href='/tag/plugin/' class='tag-link-575' title='4 topics' style='font-size: 14.0215053763pt;'>plugin</a> <a href='/tag/quadrahosting/' class='tag-link-73' title='2 topics' style='font-size: 10.7096774194pt;'>QuadraHosting</a> <a href='/tag/reset/' class='tag-link-550' title='1 topic' style='font-size: 8pt;'>reset</a> <a href='/tag/security/' class='tag-link-79' title='2 topics' style='font-size: 10.7096774194pt;'>security</a> <a href='/tag/selling/' class='tag-link-596' title='3 topics' style='font-size: 12.5161290323pt;'>selling</a> <a href='/tag/starting-up/' class='tag-link-82' title='3 topics' style='font-size: 12.5161290323pt;'>starting-up</a> <a href='/tag/statistics/' class='tag-link-38' title='2 topics' style='font-size: 10.7096774194pt;'>Statistics</a> <a href='/tag/theme/' class='tag-link-574' title='4 topics' style='font-size: 14.0215053763pt;'>theme</a> <a href='/tag/themes/' class='tag-link-83' title='4 topics' style='font-size: 14.0215053763pt;'>themes</a> <a href='/tag/twitter/' class='tag-link-612' title='2 topics' style='font-size: 10.7096774194pt;'>Twitter</a> <a href='/tag/usability/' class='tag-link-86' title='3 topics' style='font-size: 12.5161290323pt;'>usability</a> <a href='/tag/web-hosting/' class='tag-link-89' title='2 topics' style='font-size: 10.7096774194pt;'>web hosting</a> <a href='/tag/wordpress/' class='tag-link-39' title='11 topics' style='font-size: 19.7419354839pt;'>WordPress</a> <a href='/tag/wp_enqueue_script/' class='tag-link-573' title='3 topics' style='font-size: 12.5161290323pt;'>wp_enqueue_script</a> <a href='/tag/wp_register_script/' class='tag-link-572' title='2 topics' style='font-size: 10.7096774194pt;'>wp_register_script</a> <a href='/tag/xhtml/' class='tag-link-542' title='4 topics' style='font-size: 14.0215053763pt;'>xhtml</a></div></div></div></div><div id="footer"><div id="footWidgets"><div id="recent-posts-3" class="foot-widget widget widget_recent_entries"><h5 class="widget-title">Recent Posts</h5><ul><li><a href="/quick-notes/caching-google-webfont-loader/" title="Caching Google&#8217;s WebFont Loader">Caching Google&#8217;s WebFont Loader</a></li><li><a href="/quick-notes/soupgiant-wordpress-themes-github/" title="Soupgiant WordPress themes on Github">Soupgiant WordPress themes on Github</a></li><li><a href="/behind-the-websites/html5-couldnt-do-it/" title="HTML5: I couldn&#8217;t (quite) do it">HTML5: I couldn&#8217;t (quite) do it</a></li><li><a href="/quick-notes/branding-is-hard/" title="Branding is hard">Branding is hard</a></li><li><a href="/quick-notes/how-font-face-loads-in-different-browsers/" title="How @font-face loads in different browsers">How @font-face loads in different browsers</a></li></ul></div><div id="categories-3" class="foot-widget widget widget_categories"><h5 class="widget-title">Categories</h5><ul><li class="cat-item cat-item-557"><a href="/behind-the-websites/" title="Everything to do with website coding that we can think of. Front-end, back-end, upside and down, you&#039;ll find it here. It also contains our thoughts about Content Management Systems (CMS) and all the other little and technical things.">Behind the Websites</a></li><li class="cat-item cat-item-31"><a href="/business/" title="Producing websites is, in itself a business, but it often relates to the business of our clients. We&#039;ll try to put all of those thoughts and processes in here.">Business</a></li><li class="cat-item cat-item-540"><a href="/content-strategy/" title="Content whosawhatnow? When producing websites it&#039;s really important to think about what information you&#039;re going to provide, how it&#039;s going to be displayed and how is it going to affect your audience. That&#039;s content strategy in a nutshell. This is where we crack that nut.">Content Strategy</a></li><li class="cat-item cat-item-54"><a href="/design/" title="Design is so much more than just the graphics. A lot of thought goes in to how something looks, where elements are placed, what does and doesn&#039;t appear and when. You&#039;ll find that information here.">Design</a></li><li class="cat-item cat-item-4574"><a href="/quick-notes/" title="Just like it sounds. This is where we post clippings of interesting things we&#039;ve found (code, opinions, writings, pictures) that deal with all aspects of making the web. We found them interesting. You don&#039;t have to.">Quick Notes</a></li></ul></div><div id="linkcat-530" class="foot-widget widget widget_links"><h5 class="widget-title">Handy Links</h5><ul class='xoxo blogroll'><li><a href="/about/" rel="me" title="About Big Red Tin">About Big Red Tin</a></li><li><a href="http://twitter.com/bigredtin" rel="me" title="Follow Big Red Tin on Twitter" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://twitter.com/bigredtin']);">Follow us on Twitter</a></li><li><a href="/contact" rel="me" title="Get in Contact">Get in Contact</a></li><li><a href="http://feeds.soupgiant.com/bigredtin" rel="me" title="Subscribe to Big Red Tin in your feed reader" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://feeds.soupgiant.com/bigredtin']);">Subscribe by RSS</a></li><li><a href="/plugins-themes/" rel="me">WordPress Plugins &amp; Themes</a></li></ul></div><div id="text-3" class="foot-widget widget widget_text"><h5 class="widget-title">Side Credits</h5><div class="textwidget"><ul><li class="copyright">Copyright &copy; 2009 - 2010 <a href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li class="credits credits-dev">Developed by <a href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li class="credits credits-design">Design by <a href="http://zepol.com.au/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','zepol.com.au/']);">Zepol</a></li><li class="powered">Inevitably powered by <a href="http://wordpress.org" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','wordpress.org']);">WordPress</a></li></ul></div></div></div></div></div>  <script type='text/javascript'>try{jQuery.noConflict();}catch(e){};</script> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/sg-base-min.js?ver=1.1.0'></script> <script type='text/javascript' src='/wp-content/themes/bigredtin/assets/child/j/custom-min.js?ver=1.0.0'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/jquery.form.js?ver=2.47'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/scripts.js?ver=2.4.2'></script> <script src="https://stats.wordpress.com/e-201152.js" type="text/javascript"></script> <script type="text/javascript">st_go({blog:'13871010',v:'ext',post:'988'});var load_cmc=function(){linktracker_init(13871010,988,2);};if(typeof addLoadEvent!='undefined')addLoadEvent(load_cmc);else load_cmc();</script> <!--[if IE 6]> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/ddbelatedpng-min.js'></script> <script type="text/javascript">if(typeof jQuery=="function"){jQuery(window).ready(function(){DD_belatedPNG.fix('img');});}else{DD_belatedPNG.fix('img');}</script> <![endif]--></body></html>  <!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/    Minified using disk  Page Caching using disk (enhanced)  Database Caching 39/52 queries in 0.008 seconds using apc  Content Delivery Network via sg.assets.sgiant.com/pressgiant    Served from: bigredtin.com @ 2011-01-01 17:27:44 -->