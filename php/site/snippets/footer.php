  <footer class="full">
  		<div class="row">
		<div class="grid_12">
	    <?php echo kirbytext($site->copyright()) ?>
	    </div>
		</div>
  </footer>
</body>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47755915-1', 'thelob.by');
  ga('send', 'pageview');

</script>

<script type="text/javascript">

/*
* Black and white bars
*/
function Array_fromList(l) {
     var a = [];
     for (var i= 0; i<l.length; i++)
         a.push(l[i]);
     return a;
 }
 var e = Array_fromList(document.getElementsByClassName("full"));
 for (var i= 0; i<e.length; i++) {
  if (i % 2 == 0)
    e[i].classList.add("black");
 }
</script>

</html>