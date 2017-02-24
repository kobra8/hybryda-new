<?php wp_footer(); ?>
<!-- Footer -->
  
<footer class="container-fluid text-center">
  <div class="navbar-inverse">
    <img src="<?php echo(bloginfo(template_directory).'/images/logo_TELC.jpg'); ?>">
    <img src="<?php echo(bloginfo(template_directory).'/images/logo_malopolskie_st.jpg'); ?>">
    <img src="<?php echo(bloginfo(template_directory).'/images/logo_ECDL.jpg'); ?>">
    <ul class="nav navbar-nav navbar-right"> 
      <li><a href="<?php echo get_settings('home').'/wp-admin'; ?>/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</footer>

<!-- Scripts -->
            <script src="<?php echo(bloginfo(template_directory).'/js/jquery.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/bootstrap.js'); ?>"></script>
			

</body>
</html>
