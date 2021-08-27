 	   

        <?php $mainbannerurl = wp_get_attachment_image_src(get_field('big-banner-url','options'), 'full'); ?>   

        <style>
            .main-banner { background: url(<?php echo $mainbannerurl['0']; ?>) center center/cover no-repeat; }
        </style>

        <?php include (TEMPLATEPATH . '/inc/modal.php' ); ?>

        <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
		<script defer src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
		<script defer src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
		<script defer src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				//Sidebar Toggle
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
				});
			});
		</script>

        <script type="text/javascript">
        //Game Modal Population
        var data = {
            action: 'is_user_logged_in'
        };
        $('#gameModal').on('show.bs.modal', function (event) {
            var button  = $(event.relatedTarget); // Button that triggered the modal 
            var modal = $(this);
            var game_name = null;
            var game_link = null;
            var gameLayer = null;
            
            //console.log("1", game_name, game_link, gameLayer);
            game_name = button.data('game_name');
            game_link = button.data('game_link');
            gameLayer = modal.find('#gameLayer');
            //console.log("2", game_name, game_link, gameLayer);
            
            modal.find('.modal-title').text(game_name)
            $(gameLayer)[0].src = game_link;

            // THIS IS NEEDED IF THERE IS USER LOGIN
            <?php /*>
                //var loginCheck = document.body.classList.contains( 'logged-in' );
                var loginCheck = null;
                //console.log('login = ' + loginCheck); 
                
                if(loginCheck == false) {
                    //console.log (loginCheck);
                    //console.log (game_link);                 
                    if (game_link == '<?php the_field('account_page','options'); ?>' || game_link == '<?php the_field('registration_page','options'); ?>') {
                        game_link = game_link.replace(/^.*\/\/[^\/]+/, '')//Remove Domain to avoid iframe not showing content issue
                        modal.find('.modal-title').text(game_name)
                        $(gameLayer)[0].src = game_link;
                    }
                } else {
                    //console.log (loginCheck);
                    modal.find('.modal-title').text(game_name)
                    $(gameLayer)[0].src = game_link;
                }
            <?php */?>

        });
            
        //Game Modal Close
        window.closeModal = function(){
            $('#gameModal').modal('hide');
        };
        
        </script>
        

		<?php wp_footer(); ?>


	</body>
</html>
