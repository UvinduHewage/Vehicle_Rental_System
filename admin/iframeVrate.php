<!-- IT22586766
K. S. D. Koralage -->
<h2>View Current Rates</h2>
<button onclick="withdIframe()">WITH DRIVER RATES</button>
<button onclick="withoutdIframe()">WITHOUT DRIVER RATES</button>
        
<iframe id="wdIFRAME" src="iframeWD.php" frameborder="1"></iframe>
<iframe id="wodIFRAME" src="iframeWOD.php" frameborder="1"></iframe>
        
<script>

    var iframe1 = document.getElementById("wdIFRAME");
    var iframe2 = document.getElementById("wodIFRAME");

    function withdIframe() {
        iframe1.style.display ="block";

        if(iframe2.style.display ==="block")
        {
            iframe2.style.display ="none";
        }
    }

     function withoutdIframe() {
        iframe2.style.display ="block";

        if(iframe1.style.display ==="block")
        {
            iframe1.style.display ="none";
        }
    }
</script>