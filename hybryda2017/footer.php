<?php wp_footer(); ?>
<!-- Footer -->
  
<footer class="container-fluid text-center">
  <div class="navbar-inverse">
    <a href="http://www.telc.net.pl" target="_blank" title="TELC Polska"><img src="<?php echo(bloginfo(template_directory).'/images/logo_TELC.jpg'); ?>"></a>
    <a href="http://bonyszkoleniowe.pl/prod/#" target="_blank" title="Bony szkoleniowe"><img src="<?php echo(bloginfo(template_directory).'/images/logo_malopolskie_st.jpg'); ?>"></a>
    <a href="http://www.ecdl.pl" target="_blank" title="Polskie Biuro ECDL"><img src="<?php echo(bloginfo(template_directory).'/images/logo_ECDL.jpg'); ?>"></a>
    <a href="http://hybryda.com.pl/wp/italiano/start.html" target="_blank" title="Podręcznik do języka włoskiego"><img src="<?php echo(bloginfo(template_directory).'/images/italiano.png'); ?>"></a>
    <ul class="nav navbar-nav navbar-right"> 
      <li><a href="<?php echo get_settings('home').'/wp-admin'; ?>/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</footer>

</body>
</html>
