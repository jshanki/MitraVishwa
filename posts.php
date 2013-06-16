<?php theme_include('header'); ?>

<section>
		<div class="row">
			<div class="span9" style="margin-left: 30px;">
				<?php if(has_posts()): ?>

				<?php $i = 0; while($i<posts_per_page()): $i++; ?>
					<?php posts(); ?>
						<article class="wrap my-borders">
						<div class="calendar">
						    <span class="month"><?php echo date('M', article_time()); ?></span>
						    <span class="day"><?php echo date('d', article_time()); ?></span>
						</div><!-- calendar -->
						<!--h5 style="color:Brown"><?php echo date('d F Y', article_time()); ?></h5!-->
						<h2 style="vertical-align:top">
							<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h2>
						<div class="content">
							&nbsp;<?php echo article_markdown(); ?>
						</div>
						<footer>
							<small>Posted by <?php echo article_author('real_name'); ?>.</small>
						</footer>
						</article>&nbsp;
					<?php endwhile; ?>
						<!--<h3>Recent Posts</h3>
						<?php $i = 0; while(posts()): $i++; ?>
							<article class="wrap">
								<h4>
									<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
								</h4>
							</article>
						<?php endwhile; ?>!-->

				<?php if(has_pagination()): ?>
					<nav class="pagination">
						<div class="wrap">
							<?php echo posts_prev(); ?>
							<?php echo posts_next(); ?>
						</div>
					</nav>
				<?php endif; ?>

			<?php else: ?>
				<p>Looks like you have some writing to do!</p>
			<?php endif; ?>
			</div>
			<div class="span2 pull-right" style="margin-left:5px;margin-right:30px">
				<div class="row">
						<h4 >Recent Posts</h4>
						<?php while(rwar_latest_posts()): ?>
							<article class="wrap">
								<h5>
									<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
								</h5>
							</article>
						<?php endwhile; ?>

				</div>
				<div class="row" >
					<div class="brand"><h4>Social</h4></div>
					<ul class="nav nav-pills pull-left">
					        <li><a href="<?php echo rss_url(); ?>"><img src="/themes/MitraVishwa/assets/img/rss.png" height="30" width="30" /></a></li>
					       <?php if(twitter_account()): ?>
					        <li><a href="<?php echo twitter_url(); ?>" target="_blank"><img src="/themes/MitraVishwa/assets/img/twitter.png" height="30" width="30" /></a></li>
					       <?php endif; ?>
					       <?php if(facebook_account()): ?>
					        <li><a href="<?php echo facebook_url(); ?>" target="_blank"><img src="/themes/MitraVishwa/assets/img/facebook.png" height="30" width="30" /></a></li>
					       <?php endif; ?>
					</ul>
				</div>
			</div>
				
			
		</div>
</section>

<?php theme_include('footer'); ?>
