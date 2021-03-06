<?php echo $header; ?>
<div class="mid-content">
	<div class="container main">
		<div class="row">
			<div class="content about span12">
				<div class="well">

					<h1>About Laravel</h1>

					<p>
						Laravel is a PHP framework committed to elegance and simplicity. Programming doesn't have to be painful.
						In fact, it can be enjoyable with the right tools. Laravel is one of those tools.
						Dig into its <a href="<?php echo url('docs'); ?>">wonderful documentation</a> to learn more.
					</p>

					<p>
						Laravel is for all PHP programmers, even beginners. In fact, Laravel's documentation makes Laravel a great
						choice for both beginning and advanced PHP programmers. In addition to the documentation, Laravel's friendly
						community is always willing to help answer questions that aren't covered in the documentation. Just ask in
						the <a href="http://forums.laravel.com">forums</a>!
					</p>

					<h2>History</h2>

					<div class="row">
						<div class="span3">
							<img src="<?php echo asset('img/taylor.png'); ?>" class="thumbnail" alt="taylor otwell">
						</div>
						<div class="span8">
							<p>
								Hi. I'm Taylor Otwell and I created Laravel in April of 2011. I love building tools that make development enjoyable,
								and that's why I created Laravel. After exploring and enjoying frameworks, I needed something that was up-to-date with
								the latest PHP 5.3 has to offer while maintaining a low barrier of entry through great documentation. Sadly, I didn't
								find what I was looking for. So, I began writing a framework that was powerful and flexible, yet intuitive and expressive.
								A few months later, Laravel was born, and its had a growing and friendly community ever since. I think you'll love joining the club.
							</p>

							<p>
								Currently, I'm Software Engineer at <a href="http://userscape.com">UserScape</a>, where I work on the next generation of
								<a href="http://helpspot.com">HelpSpot</a>. Previously, I developed Microsoft .NET solutions for one of the largest freight
								carriers in the nation.
							</p>
						</div>
					</div>

					<a name="donations"></a>
					<h2>Donations</h2>

					<p>Donations may be sent via PayPal to <?php echo HTML::email('taylorotwell@gmail.com'); ?>.</p>

					<p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="taylorotwell@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Laravel">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
					</p>

					<h2>Laravel's License</h2>

					<p>Laravel is open-sourced software licensed under the <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a>.</p>
				</div>

			</div>
		</div>
	</div>
</div>

<?php echo $footer; ?>