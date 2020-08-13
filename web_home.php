<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php if (isset($_SESSION['login_error'])) { ?>
	
	<div class="alert alert-danger mt-3"><?php echo $_SESSION['login_error']; ?></div>

<?php } ?>

<div class="alert alert-info mt-3">
	Welcome Home <strong><?php echo App\Controller::session('user_name') ?></strong>
	<p>Demo user <i>Username : admin, Password: admin</i></p>
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
</div>

<?php unset($_SESSION['login_error']);
