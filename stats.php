<?php if(isset($_SERVER['REMOTE_ADDR']) and $_SERVER['REMOTE_ADDR'] != '78.90.67.20' and strstr($_SERVER['REMOTE_ADDR'],'192.168') == false):  ?>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1065179-29']);
        _gaq.push(['_setDomainName', 'microweber.com']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script type="text/javascript">
        var GoSquared = {acct: "GSN-395984-X"};
        (function(w){
            function gs(){
                w._gstc_lt = +new Date;
                var d = document, g = d.createElement("script");
                g.type = "text/javascript";
                g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
                var s = d.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(g, s);
            }
            w.addEventListener ? w.addEventListener("load", gs, false) : w.attachEvent("onload", gs);
        })(window);
    </script>




<?php endif; ?>
