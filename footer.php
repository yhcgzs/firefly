
<div class="back_top show_lg_only">
    <a href="#top"><img src="<?php bloginfo('template_directory'); ?>/img/back_top.png" width="50px" height="50px"></a>
</div>

<footer class="footer">
    <div class="footer_about show_lg_only" >
        <div></div>
        <div class="footer_about_content">
            <div class="footer_about_item ">
                <ul id="footnav" >
	                <?php echo stripslashes(get_option('Y_footer_nav_code'));?>
                </ul>
            </div>
        </div>
        <div></div>
    </div>
    <div class="footer_copyright">
        <span>Copyright © <?php echo date("Y")?> <a  href="<?php echo site_url('/','relative'); ?>"> <?php echo get_bloginfo('name'); ?></a> </span>
        <br>
	    <span>Powered by <a href="http://www.wordpress.org/" target="_blank">WordPress</a> Themes by <a href="https://www.yhcgzs.com/themes/firefly/" target="_blank">Firefly主题</a></span>
        <br>
        <?php if (get_option('Y_footer_nav_beian_btn') == 'Display') { ?>
        <span><a href="http://www.miitbeian.gov.cn/"> <?php echo stripslashes(get_option('Y_footer_nav_beian'));?></a></span>
	    <?php } ?>
    </div>
</footer>
<?php if (get_option('Y_duilian_ad_btn') == 'Display') { ?>
    <script>
    var browser={ie6:function(){return((window.XMLHttpRequest==undefined)&&(ActiveXObject!=undefined))},getWindow:function(){var myHeight=0;var myWidth=0;if(typeof(window.innerWidth)=='number'){myHeight=window.innerHeight;myWidth=window.innerWidth}else if(document.documentElement){myHeight=document.documentElement.clientHeight;myWidth=document.documentElement.clientWidth}else if(document.body){myHeight=document.body.clientHeight;myWidth=document.body.clientWidth}return{'height':myHeight,'width':myWidth}},getScroll:function(){var myHeight=0;var myWidth=0;if(typeof(window.pageYOffset)=='number'){myHeight=window.pageYOffset;myWidth=window.pageXOffset}else if(document.documentElement){myHeight=document.documentElement.scrollTop;myWidth=document.documentElement.scrollLeft}else if(document.body){myHeight=document.body.scrollTop;myWidth=document.body.scrollLeft}return{'height':myHeight,'width':myWidth}},getDocWidth:function(D){if(!D)var D=document;return Math.max(Math.max(D.body.scrollWidth,D.documentElement.scrollWidth),Math.max(D.body.offsetWidth,D.documentElement.offsetWidth),Math.max(D.body.clientWidth,D.documentElement.clientWidth))},getDocHeight:function(D){if(!D)var D=document;return Math.max(Math.max(D.body.scrollHeight,D.documentElement.scrollHeight),Math.max(D.body.offsetHeight,D.documentElement.offsetHeight),Math.max(D.body.clientHeight,D.documentElement.clientHeight))}};var dom={ID:function(id){var type=typeof(id);if(type=='object')return id;if(type=='string')return document.getElementById(id);return null},insertHtml:function(html){var frag=document.createDocumentFragment();var div=document.createElement("div");div.innerHTML=html;for(var i=0,ii=div.childNodes.length;i<ii;i++){frag.appendChild(div.childNodes[i])}document.body.insertBefore(frag,document.body.firstChild)}};var myEvent={add:function(element,type,handler){var ele=dom.ID(element);if(!ele)return;if(ele.addEventListener)ele.addEventListener(type,handler,false);else if(ele.attachEvent)ele.attachEvent("on"+type,handler);else ele["on"+type]=handler},remove:function(element,type,handler){var ele=dom.ID(element);if(!ele)return;if(ele.removeEventListener)ele.removeEventListener(type,handler,false);else if(ele.detachEvent)ele.detachEvent("on"+type,handler);else ele["on"+type]=null}};var position={rightCenter:function(id){var id=dom.ID(id);var ie6=browser.ie6();var win=browser.getWindow();var ele={'height':id.clientHeight,'width':id.clientWidth};if(ie6){var scrollBar=browser.getScroll()}else{var scrollBar={'height':0,'width':0};id.style.position='fixed'}ele.top=parseInt((win.height-ele.height)/2+scrollBar.height);id.style.top=ele.top+'px';id.style.right='3px'},floatRightCenter:function(id){position.rightCenter(id);var fun=function(){position.rightCenter(id)};if(browser.ie6()){myEvent.add(window,'scroll',fun);myEvent.add(window,'resize',fun)}else{myEvent.add(window,'resize',fun)}},leftCenter:function(id){var id=dom.ID(id);var ie6=browser.ie6();var win=browser.getWindow();var ele={'height':id.clientHeight,'width':id.clientWidth};if(ie6){var scrollBar=browser.getScroll()}else{var scrollBar={'height':0,'width':0};id.style.position='fixed'}ele.top=parseInt((win.height-ele.height)/2+scrollBar.height);id.style.top=ele.top+'px';id.style.left='3px'},floatLeftCenter:function(id){position.leftCenter(id);var fun=function(){position.leftCenter(id)};if(browser.ie6()){myEvent.add(window,'scroll',fun);myEvent.add(window,'resize',fun)}else{myEvent.add(window,'resize',fun)}}};

    function ad_left(){
    var html;
    html = '<div id="ad_left" class="duilian_left show_lg_only"><?php echo stripslashes(get_option("Y_duilian_left_code"));?><a  href="javascript:void(0);" onclick="document.getElementById(\'ad_left\').style.display=\'none\'">x</a></div>';
    dom.insertHtml(html);position.floatLeftCenter('ad_left');
    }
    function ad_right(){
    var html;
    html = '<div id="ad_right" class="duilian_right show_lg_only"><?php echo stripslashes(get_option("Y_duilian_right_code"));?><a  style="margin-left: 90px;" href="javascript:void(0);" onclick="document.getElementById(\'ad_right\').style.display=\'none\'">x</a></div>';
    dom.insertHtml(html);position.floatRightCenter('ad_right');
    }
    myEvent.add(window,'load',ad_left);
    myEvent.add(window,'load',ad_right);
    </script>
<?php } ?>
<?php if (get_option('Y_footer_nav_tongji_btn') == 'Display') { ?>
<?php echo stripslashes(get_option('Y_footer_nav_tongji'));?>
<?php } ?>
<?php if (get_option('Y_baidu_zidongtuisong_btn') == 'Display') { ?>
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
<?php } ?>
<?php wp_footer(); ?>
</body>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/javascript.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wp-alu.js"></script>
</html>