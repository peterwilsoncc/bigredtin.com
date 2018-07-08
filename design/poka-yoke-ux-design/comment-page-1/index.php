<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html
xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" class="nojs nojswin"><head
profile="http://gmpg.org/xfn/11"><meta
http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title> Poka yoke UX design  |  Big Red Tin</title><link
rel="alternate" type="application/atom+xml" title="Big Red Tin Feed" href="/feed/atom/" /><link
rel="alternate" type="application/atom+xml" title="Big Red Tin Comments Feed" href="/comments/feed/atom/" /><link
rel="pingback" href="/xmlrpc.php" /> <script type="text/javascript">var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-11132236-2']);_gaq.push(['_setAllowAnchor',true],['_setCustomVar',1,'author','josh-kinal',3],['_setCustomVar',2,'tags','',3],['_setCustomVar',3,'year','2010',3],['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script> <link
rel="alternate" type="application/rss+xml" title="Big Red Tin &raquo; Poka yoke UX design Comments Feed" href="/design/poka-yoke-ux-design/feed/" /><link
rel='stylesheet' id='soup-allmedia-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-min.css?ver=20100819.01' type='text/css' media='all' /> <!--[if IE 6]><link
rel='stylesheet' id='soup-allmedia-ie6-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie6-min.css?ver=20100819.01' type='text/css' media='all' /> <![endif]--> <!--[if IE 7]><link
rel='stylesheet' id='soup-allmedia-ie7-css'  href='/wp-content/themes/bigredtin/assets/child/c/all-media/all-media-ie7-min.css?ver=20100819.01' type='text/css' media='all' /> <![endif]--><link
rel='stylesheet' id='contact-form-7-css'  href='/wp-content/plugins/contact-form-7/styles.css?ver=2.3.1' type='text/css' media='all' /> <script type='text/javascript' src='/wp-includes/js/comment-reply.js?ver=20090102'></script> <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> <link
rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" /><link
rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" /><link
rel='index' title='Big Red Tin' href='/' /><link
rel='start' title='Don&#8217;t start with a reset.css' href='/behind-the-websites/dont-start-with-a-resetcss/' /><link
rel='prev' title='Selectivizr with CSS on a sub-domain' href='/behind-the-websites/selectivizr-with-css-on-a-cdn/' /><link
rel='shortlink' href='/?p=882' /><meta
name="description" content="The goal in user interface design is to remove all ambiguity so that each part of the website can only be used in one particular way." /><link
rel="canonical" href="/design/poka-yoke-ux-design/" />  <script type="text/javascript">var _wpcf7={cached:1};</script> <link
rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /><link
rel="icon" type="image/x-icon" href="/wp-content/themes/bigredtin/assets/child/i/favicon.ico" /></head><body
id="brt" class="nojs nojswin bxSngl bxAllBlog bxPost bxP-poka-yoke-ux-design bxP-id882 bxPC-design bxPA-josh"><div
id="pageWrap" class="brt"><div
id="header"><div
id="siteDetails"><p
id="siteName"><a
href="http://bigredtin.com"><img
src="/wp-content/themes/bigredtin/assets/child/i/logo-white-24.png" class="screen" width="323" height="90" alt="Big Red Tin  | Thoughts about the web and business from the large pantry" title="Big Red Tin | Thoughts about the web and business from the large pantry" /><img
src="/wp-content/themes/bigredtin/assets/child/i/logo-colour-24.png" class="print" width="323" height="90" alt="" title="" /></a></p></div><div
id="headerWidgets"></div></div><div
id="container"><div
id="navWrap" class="navWrap"></div><div
id="content"><div
id="contentHeadA" class="hentry p1 post publish post-poka-yoke-ux-design author-josh-kinal cat-design untagged"><div
id="contentHead"><h1 class="entry-title" id="pageName"> <a
href="/design/poka-yoke-ux-design/" title="Poka yoke UX design" rel="bookmark"> Poka yoke UX design </a></h1><p
class="entry-date"><span
class="published" title="2010-11-15T14:32:31+00:00">15 Nov '10</span></p></div><div
id="contentA"><div
class="entry-meta"><p
class="details"> <span
class="author vcard">By <a
class="url fn n" href="/author/josh/" title="View all posts by Josh Kinal">Josh Kinal</a></span> <span
class="cat-links"> in <a
href="/design/" title="View all posts in Design" rel="category tag">Design</a></span></p><p
class="comments-link"> <a
href="/design/poka-yoke-ux-design/#comments">3 responses</a></p></div><div
class="entry-content"><p>There&#8217;s a theory of Japanese car construction called <a
href="http://thequalityportal.com/pokayoke.htm" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','thequalityportal.com/pokayoke.htm']);" title="Poka Yoke or Mistake Proofing :: Overview :: The Quality Portal">poka yoke</a>. It was described to me as meaning a form of idiot-proofing but it really means &#8220;mistake proofing&#8221;. Pieces of the car are manufactured in such a way that they can only be used on one particular part of the car.</p><p>Everything that we create when producing websites should exist on this level of poka yoke design. The goal in user interface design is to remove all ambiguity so that each part of the website can only be used in one particular way.</p><p>This is a lot more difficult than it seems. Take, for example, the simple hyperlink. So often, when analysing an existing website I see the words &#8220;click here&#8221; either preceding or following an instruction.</p><p><img
src="/files/2010/11/CD6297F2-3E84-439B-AEF8-3ABD3890AE2A.jpg" alt="CD6297F2-3E84-439B-AEF8-3ABD3890AE2A.jpg" border="0" width="202" height="227" align="left" alt="Peerless Foods website with buttons that says 'view'" />In the case of the <a
href="http://www.peerlessfoods.com.au/store/viewItem.asp?idProduct=50" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.peerlessfoods.com.au/store/viewItem.asp?idProduct=50']);" title="Peerless Foods :: Copha Vegetable Shortening">Peerless Foods website</a>, which I was shown on the weekend, there&#8217;s simply the word &#8220;view&#8221; near some text. (See the image to the left.)</p><p>To some it might seem like &#8220;click here&#8221; or &#8220;view&#8221; is the perfect example of poka yoke. It&#8217;s a link and we&#8217;re supposed to click on it and that&#8217;s what it says. But the design* has failed.</p><p>Creating a website design requires making as few assumptions about the user as possible. One of those assumptions might be that the user knows how to use a mouse. That might seem like a reasonable assumption but what about people who use other interactive devices? What about just keyboard or suck and blow straws or touch screens.</p><p>So the minimal assumption has to be that the user realises that there is an interactive device that they can manipulate in a way that will be reflected on the feedback device (screen or screen reader etc., from now on just referred to as &#8220;screen&#8221;).</p><p>So the user moves the cursor around the screen. It&#8217;s the feedback that we provide as designers that tells the user to activate that link. Sometimes that&#8217;s as simple as a different colour text with an underline. Sometimes that&#8217;s a hover state that alters the size of an element. Maybe the cursor changes from an arrow to a hand. Maybe it&#8217;s just as simple as making sure that the right html tags were used.</p><p>There&#8217;s a usability adage that <a
href="http://www.uxbooth.com/blog/the-evolution-of-door-usability/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.uxbooth.com/blog/the-evolution-of-door-usability/']);" title="The Evolution of Door Usability | UX Booth">if there needs to be a sign on the door that says &#8220;push&#8221;, the designer of the door has failed</a>. That fact that the door needs to be pushed to open should be implicit in its design.</p><p>It&#8217;s tempting to put a &#8220;click here&#8221; at the end of a sentence because it&#8217;s the easiest thing for the content creator to do but it complicates issues for the user of the website. It&#8217;s clumsy and it reflects poorly on everybody involved in creating the website.</p><p>Most importantly, it&#8217;s not mistake proof. On the Peerless Foods website, those little green buttons don&#8217;t give the user any extra information. In fact, it&#8217;s not clear that they are even related to the information above them.</p><p>A bit of text that says &#8220;if you want to contact us, <a
href="http://soupgiant.com/contact/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','soupgiant.com/contact/']);" title="Contact  |  Soupgiant">click here</a>&#8221; is nowhere near as succinct and obvious as one that just says &#8220;<a
href="http://soupgiant.com/contact/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','soupgiant.com/contact/']);" title="Contact  |  Soupgiant">contact us</a>&#8220;.</p><p>For more reading on website usability, we recommend <a
href="http://www.useit.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.useit.com/']);" title="useit.com: Jakob Nielsen on Usability and Web Design">the writings of Jakob Neilson</a>, and Steve Krug&#8217;s book, <a
href="http://www.amazon.com/gp/product/0789723107?ie=UTF8&#038;tag=boxcutters-20&#038;linkCode=as2&#038;camp=1789&#038;creative=390957&#038;creativeASIN=0789723107" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','www.amazon.com/gp/product/0789723107?ie=UTF8&#038;tag=boxcutters-20&#038;linkCode=as2&#038;camp=1789&#038;creative=390957&#038;creativeASIN=0789723107']);">Don&#8217;t Make Me Think!</a><img
src="http://www.assoc-amazon.com/e/ir?t=boxcutters-20&#038;l=as2&#038;o=1&#038;a=0789723107" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />. There&#8217;s also a great <a
href="http://example.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','example.com/']);">book about the usability and design of doors and kettles</a> by Donald A. Norman.</p><p>*when I talk about design I include content because it&#8217;s an important part of how people interact with a site. I also include the choice of HTML tags.</p></div><div
id="authorDescription" class="author-description vcard"> <img
alt='' src='http://0.gravatar.com/avatar/0a756ac1918f95ed25a9b8cdbfcf1208?s=96&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-96 photo' height='96' width='96' /><h2>About<cite
class="fn">Josh Kinal</cite></h2><p>Josh Kinal specialises in content strategy with <a
href="http://soupgiant.com">Soupgiant</a>. A writer and broadcaster since 1993, he turned his hand to the web in 2005 and has not looked back since.</p><p>He hosts and produces the weekly <a
href="http://boxcutters.net">Boxcutters podcast</a>, bringing people information about the whole world of television since 2005.</p></div><div
id="page-nav" class="page-nav nav"><div
class="page-nav-older"><span
class="direction">Previous post: </span><a
href="/behind-the-websites/selectivizr-with-css-on-a-cdn/" rel="prev">Selectivizr with CSS on a sub-domain</a></div><div
class="page-nav-newer"></div></div><div
id="comments"><h2> 3 Comments</h2><ol
id="commentsList" class="commentsList"><li
id="comment-1892" class="comment even thread-even depth-1"><div
class="comment-head"><p
class="comment-author vcard"> <img
alt='' src='http://0.gravatar.com/avatar/e2d224f50452b3007288b38357d03bf4?s=32&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-32 photo' height='32' width='32' /><cite
class="fn">Mary</cite> <span
class="says">says:</span></p></div><div
class="comment-body" id="c-body-1892"><p>A bit of text that says &#8216;contact us&#8217; is succinct, but it&#8217;s only obvious if the user can see that clicking on it will do something. I think most people understand that coloured and underlined is a link, but they can get confused if links are presented in another way, or if there is coloured and underlined text that is not clickable.</p><p>Buttons are a bit harder, because some look clickable and some don&#8217;t. For example, the presentation and the position of the &#8216;POST A COMMENT&#8217; text makes me suspect it&#8217;s clickable, but I&#8217;m only sure when I mouse over it and it changes colour.</p></div><div
class="comment-footer" id="c-footer-1892"><p
class="comment-meta"> <a
href="#comment-1892">November 16, 2010 at 8:34 pm</a></p></div><ul
class='children'><li
id="comment-1893" class="comment byuser comment-author-peter odd alt depth-2"><div
class="comment-head"><p
class="comment-author vcard"> <img
alt='' src='http://1.gravatar.com/avatar/d6fa5fdcd09cd9484ebca5c0844cc13b?s=32&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-32 photo' height='32' width='32' /><cite
class="fn"><a
href="http://peterwilson.cc" onclick="javascript:_gaq.push(['_trackEvent','outbound-commentauthor','http://peterwilson.cc']);"  rel='external nofollow' class='url'>Peter Wilson</a></cite> <span
class="says">says:</span></p></div><div
class="comment-body" id="c-body-1893"><p>You make a good point Mary, we&#8217;ll change the text of &#8216;post your comment&#8217; to something more descriptive and direct.</p></div><div
class="comment-footer" id="c-footer-1893"><p
class="comment-meta"> <a
href="#comment-1893">November 17, 2010 at 11:50 am</a></p></div></li></ul></li><li
id="comment-1894" class="comment even thread-odd thread-alt depth-1"><div
class="comment-head"><p
class="comment-author vcard"> <img
alt='' src='http://0.gravatar.com/avatar/ce613f2ae27f26a9d353c90bd095d251?s=32&amp;d=http%3A%2F%2Fbigredtin.com%2Fwp-includes%2Fimages%2Fblank.gif&amp;r=G' class='avatar avatar-32 photo' height='32' width='32' /><cite
class="fn">Glenn</cite> <span
class="says">says:</span></p></div><div
class="comment-body" id="c-body-1894"><p>Where I work one of the digital fellas sent all us writer fellas these two links a couple weeks ago about this stuff.</p><p><a
href="http://www.smashingmagazine.com/2009/10/13/call-to-action-buttons-examples-and-best-practices/" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','www.smashingmagazine.com/2009/10/13/call-to-action-buttons-examples-and-best-practices/']);" rel="nofollow">http://www.smashingmagazine.com/2009/10/13/call-to-action-buttons-examples-and-best-practices/</a></p><p><a
href="http://www.wilsonweb.com/conversion/follansbee-call-to-action.htm" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','www.wilsonweb.com/conversion/follansbee-call-to-action.htm']);" rel="nofollow">http://www.wilsonweb.com/conversion/follansbee-call-to-action.htm</a></p></div><div
class="comment-footer" id="c-footer-1894"><p
class="comment-meta"> <a
href="#comment-1894">November 17, 2010 at 12:22 pm</a></p></div></li></ol><div
id="comment-nav" class="page-nav nav"><div
class="page-nav-older"></div><div
class="page-nav-newer"></div></div><div
id="respond"><h2>Leave a Reply</h2><div
id="cancel-comment-reply"><a
rel="nofollow" id="cancel-comment-reply-link" href="/design/poka-yoke-ux-design/comment-page-1/#respond" style="display:none;">Click here to cancel reply.</a></div><div
class="formContainer"><form
id="commentForm" action="/wp-comments-post.php" method="post"><p
id="commentNotes">Your email is <em>never</em> shared.</p><div
id="namePair" class="inputPair"> <label
for="author">Name <span
class="required">(required)</span></label> <input
id="author" name="author" class="inputText inputReqd inputTextReqd" type="text" value="" size="30" maxlength="50" tabindex="3" /></div><div
id="emailPair" class="inputPair"> <label
for="email">Email <span
class="required">(required)</span></label> <input
id="email" name="email" class="inputText inputEmail inputReqd inputTextreqd inputEmailreqd" type="email" value="" size="30" maxlength="50" tabindex="4" /></div><div
id="urlPair" class="inputPair"> <label
for="url">Website</label> <input
id="url" name="url" class="inputText" type="url" value="" size="30" maxlength="50" tabindex="5" /></div><div
id="commentPair" class="inputPair"> <label
for="comment">Comment <span
class="required">(required)</span></label><textarea id="comment" name="comment" class="inputText inputReqd inputTextReqd" cols="45" rows="8" tabindex="6"></textarea></div><div
class="submit"> <input
id="submit" name="submit" class="button" type="submit" value="Post Your Comment" tabindex="7" /></div><div
class="form-option"><input
type='hidden' name='comment_post_ID' value='882' id='comment_post_ID' /> <input
type='hidden' name='comment_parent' id='comment_parent' value='0' /></div></form></div></div></div></div></div></div><div
id="contentC" class="sidebar"><div
id="search-3" class="widget widget_search"><form
method="get" action="http://bigredtin.com" class="search-form"><div> <label
for="s-556291" class="search-label">Search this Site</label> <input
type="text" name="s" id="s-556291" class="searchInput inputText" /> <input
type="submit" value="Search" class="searchSubmit inputSubmit" /></div></form></div><div
id="twitter-tools" class="widget aktt_widget"><h5 class="widget-title">Tasty Tweets</h5><div
class="aktt_tweets"><ul><li>Both @<a
href="http://twitter.com/soupgiant" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/soupgiant']);" class="aktt_username">soupgiant</a> &amp; @<a
href="http://twitter.com/bigredtin" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin']);" class="aktt_username">bigredtin</a> are back up (given you&#039;re most likely to be reading this in the site&#039;s sidebar, you probably know this) ^pw <a
href="http://twitter.com/bigredtin/statuses/6269695380426753" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/6269695380426753']);" class="aktt_tweet_time">1 week ago</a></li><li>.@soupgiant, @<a
href="http://twitter.com/bigredtin" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin']);" class="aktt_username">bigredtin</a> sites are down due to a data centre power outage. Our provider is working on bringing out server back up. <a
href="http://twitter.com/bigredtin/statuses/6220112747040769" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/6220112747040769']);" class="aktt_tweet_time">1 week ago</a></li><li>Interesting post from @<a
href="http://twitter.com/yoast" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/yoast']);" class="aktt_username">yoast</a> on preventing pages appearing in search engines. robots.txt can&#039;t do alone. <a
href="http://redt.in/cHH2VH" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','redt.in/cHH2VH']);" rel="nofollow">http://redt.in/cHH2VH</a> <a
href="http://twitter.com/bigredtin/statuses/5080217110454272" onclick="javascript:_gaq.push(['_trackEvent','outbound-article','twitter.com/bigredtin/statuses/5080217110454272']);" class="aktt_tweet_time">1 week ago</a></li><li
class="aktt_more_updates"><a
href="http://twitter.com/bigredtin">More updates...</a></li></ul></div></div><div
id="tag_cloud-3" class="widget widget_tag_cloud"><h5 class="widget-title">Tags</h5><div><a
href='/tag/accessibility/' class='tag-link-581' title='2 topics' style='font-size: 10.9647058824pt;'>accessibility</a> <a
href='/tag/accounting/' class='tag-link-40' title='1 topic' style='font-size: 8pt;'>accounting</a> <a
href='/tag/advertising/' class='tag-link-41' title='3 topics' style='font-size: 12.9411764706pt;'>advertising</a> <a
href='/tag/blogging/' class='tag-link-558' title='3 topics' style='font-size: 12.9411764706pt;'>blogging</a> <a
href='/tag/blogs/' class='tag-link-42' title='3 topics' style='font-size: 12.9411764706pt;'>blogs</a> <a
href='/tag/books/' class='tag-link-43' title='3 topics' style='font-size: 12.9411764706pt;'>books</a> <a
href='/tag/boxcutters/' class='tag-link-44' title='2 topics' style='font-size: 10.9647058824pt;'>boxcutters</a> <a
href='/tag/business-names/' class='tag-link-45' title='1 topic' style='font-size: 8pt;'>business names</a> <a
href='/tag/buzzwords/' class='tag-link-46' title='1 topic' style='font-size: 8pt;'>buzzwords</a> <a
href='/tag/caching/' class='tag-link-549' title='2 topics' style='font-size: 10.9647058824pt;'>caching</a> <a
href='/tag/clients/' class='tag-link-47' title='3 topics' style='font-size: 12.9411764706pt;'>clients</a> <a
href='/tag/coding/' class='tag-link-539' title='7 topics' style='font-size: 17.8823529412pt;'>coding</a> <a
href='/tag/comments/' class='tag-link-48' title='1 topic' style='font-size: 8pt;'>comments</a> <a
href='/tag/communication/' class='tag-link-617' title='3 topics' style='font-size: 12.9411764706pt;'>communication</a> <a
href='/tag/content/' class='tag-link-559' title='4 topics' style='font-size: 14.5882352941pt;'>content</a> <a
href='/tag/content-strategy/' class='tag-link-540' title='2 topics' style='font-size: 10.9647058824pt;'>Content Strategy</a> <a
href='/tag/css/' class='tag-link-32' title='11 topics' style='font-size: 20.8470588235pt;'>CSS</a> <a
href='/tag/css3/' class='tag-link-534' title='3 topics' style='font-size: 12.9411764706pt;'>CSS3</a> <a
href='/tag/design/' class='tag-link-54' title='2 topics' style='font-size: 10.9647058824pt;'>Design</a> <a
href='/tag/domains/' class='tag-link-55' title='2 topics' style='font-size: 10.9647058824pt;'>domains</a> <a
href='/tag/expectations/' class='tag-link-57' title='2 topics' style='font-size: 10.9647058824pt;'>expectations</a> <a
href='/tag/google/' class='tag-link-548' title='2 topics' style='font-size: 10.9647058824pt;'>google</a> <a
href='/tag/html5/' class='tag-link-578' title='3 topics' style='font-size: 12.9411764706pt;'>html5</a> <a
href='/tag/javascript/' class='tag-link-34' title='13 topics' style='font-size: 22pt;'>JavaScript</a> <a
href='/tag/jquery/' class='tag-link-65' title='3 topics' style='font-size: 12.9411764706pt;'>jQuery</a> <a
href='/tag/layout/' class='tag-link-552' title='1 topic' style='font-size: 8pt;'>layout</a> <a
href='/tag/marketing/' class='tag-link-66' title='2 topics' style='font-size: 10.9647058824pt;'>marketing</a> <a
href='/tag/phishing/' class='tag-link-91' title='1 topic' style='font-size: 8pt;'>phishing</a> <a
href='/tag/planning/' class='tag-link-583' title='3 topics' style='font-size: 12.9411764706pt;'>planning</a> <a
href='/tag/plugin/' class='tag-link-575' title='4 topics' style='font-size: 14.5882352941pt;'>plugin</a> <a
href='/tag/quadrahosting/' class='tag-link-73' title='2 topics' style='font-size: 10.9647058824pt;'>QuadraHosting</a> <a
href='/tag/reset/' class='tag-link-550' title='1 topic' style='font-size: 8pt;'>reset</a> <a
href='/tag/security/' class='tag-link-79' title='2 topics' style='font-size: 10.9647058824pt;'>security</a> <a
href='/tag/selling/' class='tag-link-596' title='3 topics' style='font-size: 12.9411764706pt;'>selling</a> <a
href='/tag/starting-up/' class='tag-link-82' title='3 topics' style='font-size: 12.9411764706pt;'>starting-up</a> <a
href='/tag/statistics/' class='tag-link-38' title='2 topics' style='font-size: 10.9647058824pt;'>Statistics</a> <a
href='/tag/theme/' class='tag-link-574' title='3 topics' style='font-size: 12.9411764706pt;'>theme</a> <a
href='/tag/themes/' class='tag-link-83' title='3 topics' style='font-size: 12.9411764706pt;'>themes</a> <a
href='/tag/twitter/' class='tag-link-612' title='2 topics' style='font-size: 10.9647058824pt;'>Twitter</a> <a
href='/tag/usability/' class='tag-link-86' title='2 topics' style='font-size: 10.9647058824pt;'>usability</a> <a
href='/tag/web-hosting/' class='tag-link-89' title='2 topics' style='font-size: 10.9647058824pt;'>web hosting</a> <a
href='/tag/wordpress/' class='tag-link-39' title='10 topics' style='font-size: 20.1882352941pt;'>WordPress</a> <a
href='/tag/wp_enqueue_script/' class='tag-link-573' title='3 topics' style='font-size: 12.9411764706pt;'>wp_enqueue_script</a> <a
href='/tag/wp_register_script/' class='tag-link-572' title='2 topics' style='font-size: 10.9647058824pt;'>wp_register_script</a> <a
href='/tag/xhtml/' class='tag-link-542' title='3 topics' style='font-size: 12.9411764706pt;'>xhtml</a></div></div></div></div><div
id="footer"><div
id="footWidgets"><div
id="recent-posts-3" class="foot-widget widget widget_recent_entries"><h5 class="widget-title">Recent Posts</h5><ul><li><a
href="/design/poka-yoke-ux-design/" title="Poka yoke UX design">Poka yoke UX design</a></li><li><a
href="/behind-the-websites/selectivizr-with-css-on-a-cdn/" title="Selectivizr with CSS on a sub-domain">Selectivizr with CSS on a sub-domain</a></li><li><a
href="/behind-the-websites/a-half-baked-css-idea/" title="A half-baked (CSS) idea">A half-baked (CSS) idea</a></li><li><a
href="/business/simplifying-can-complicate-things/" title="Simplifying can complicate things">Simplifying can complicate things</a></li><li><a
href="/business/why-we-host-on-american-servers/" title="Why we host Big Red Tin on US servers">Why we host Big Red Tin on US servers</a></li></ul></div><div
id="categories-3" class="foot-widget widget widget_categories"><h5 class="widget-title">Categories</h5><ul><li
class="cat-item cat-item-557"><a
href="/behind-the-websites/" title="Everything to do with website coding that we can think of. Front-end, back-end, upside and down, you&#039;ll find it here. It also contains our thoughts about Content Management Systems (CMS) and all the other little and technical things.">Behind the Websites</a></li><li
class="cat-item cat-item-31"><a
href="/business/" title="Producing websites is, in itself a business, but it often relates to the business of our clients. We&#039;ll try to put all of those thoughts and processes in here.">Business</a></li><li
class="cat-item cat-item-540"><a
href="/content-strategy/" title="Content whosawhatnow? When producing websites it&#039;s really important to think about what information you&#039;re going to provide, how it&#039;s going to be displayed and how is it going to affect your audience. That&#039;s content strategy in a nutshell. This is where we crack that nut.">Content Strategy</a></li><li
class="cat-item cat-item-54"><a
href="/design/" title="Design is so much more than just the graphics. A lot of thought goes in to how something looks, where elements are placed, what does and doesn&#039;t appear and when. You&#039;ll find that information here.">Design</a></li></ul></div><div
id="linkcat-530" class="foot-widget widget widget_links"><h5 class="widget-title">Handy Links</h5><ul
class='xoxo blogroll'><li><a
href="/about/" rel="me" title="About Big Red Tin">About Big Red Tin</a></li><li><a
href="http://twitter.com/bigredtin" rel="me" title="Follow Big Red Tin on Twitter" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://twitter.com/bigredtin']);">Follow us on Twitter</a></li><li><a
href="/contact" rel="me" title="Get in Contact">Get in Contact</a></li><li><a
href="http://feeds.soupgiant.com/bigredtin" rel="me" title="Subscribe to Big Red Tin in your feed reader" target="" onclick="javascript:_gaq.push(['_trackEvent','outbound-blogroll','http://feeds.soupgiant.com/bigredtin']);">Subscribe by RSS</a></li></ul></div><div
id="text-3" class="foot-widget widget widget_text"><h5 class="widget-title">Side Credits</h5><div
class="textwidget"><ul><li
class="copyright">Copyright &copy; 2009 - 2010 <a
href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li
class="credits credits-dev">Developed by <a
href="http://soupgiant.com/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','soupgiant.com/']);">Soupgiant</a></li><li
class="credits credits-design">Design by <a
href="http://zepol.com.au/" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','zepol.com.au/']);">Zepol</a></li><li
class="powered">Inevitably powered by <a
href="http://wordpress.org" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','wordpress.org']);">WordPress</a></li></ul></div></div></div></div></div>  <script type='text/javascript'>try{jQuery.noConflict();}catch(e){};</script> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/sg-base-min.js?ver=1.1.0'></script> <script type='text/javascript' src='/wp-content/themes/bigredtin/assets/child/j/custom-min.js?ver=1.0.0'></script> <script type='text/javascript' src='/wp-includes/js/jquery/jquery.form.js?ver=2.02m'></script> <script type='text/javascript' src='/wp-content/plugins/contact-form-7/scripts.js?ver=2.3.1'></script> <script src="https://stats.wordpress.com/e-201047.js" type="text/javascript"></script> <script type="text/javascript">st_go({blog:'13871010',v:'ext',post:'882'});var load_cmc=function(){linktracker_init(13871010,882,2);};if(typeof addLoadEvent!='undefined')addLoadEvent(load_cmc);else load_cmc();</script> <!--[if IE 6]> <script type='text/javascript' src='/wp-content/themes/soup02/assets/parent/j/ddbelatedpng-min.js'></script> <script type="text/javascript">if(typeof jQuery=="function"){jQuery(window).ready(function(){DD_belatedPNG.fix('img');});}else{DD_belatedPNG.fix('img');}</script> <![endif]--></body></html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Minified using disk
Page Caching using disk (enhanced)
Database Caching 38/49 queries in 0.007 seconds using apc
Content Delivery Network via sg.assets.sgiant.com/pressgiant

Served from: bigredtin.com @ 2010-11-28 14:02:31 -->