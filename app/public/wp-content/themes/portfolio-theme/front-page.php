<?php get_header(); ?>



<div class="container">
    <h1 class="project-name"><?= __('MY DEVELOPER JURNEY') ?></h1>
		<div id="timeline">

			<?php
				// fetch and display all timeline events
				$args = [
					'posts_per_page' => -1,
					'post_type' => 'event'
				];
				$eventsQuery = new WP_Query($args);
				
				$loopCounter = 1;
				while ($eventsQuery->have_posts()):
					$eventsQuery->the_post();

					// every other event should be on the right
					$right = $loopCounter % 2 == 0 ? 'right' : '';
			?>

				<div class="timeline-item">
					<div class="timeline-icon">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 				width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
							<path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
								c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
								l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
								c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
								c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
							</svg>

					</div>
					<div class="timeline-content <?= $right ?>">
						<h2><?php the_title(); ?></h2>
						<?php if (has_excerpt()): ?>
							<h5 class="mt-3"><?php the_excerpt(); ?></h5>
						<?php endif; ?>
						<p>
							<?php the_content(); ?>
						</p>
						<?php if (get_field('url') && get_field('url_description')): ?>
							<a href="<?php the_field('url') ?>" target="__blank" class="btn"><?php the_field('url_description') ?></a>
						<?php endif; ?>

						<?php 
						if (get_field('related_skills')): ?>
							<h6 class="my-3"><?= __('SKILLS') ?>:</h6>
						<?php
							$relatedSkillsGroups = sort_related_skills(get_field('related_skills'));
							foreach ($relatedSkillsGroups as $groupLevel => $skillGroup):
								$badgeType = get_related_skill_badge_type($groupLevel);
						?>
								<ul class="list-group list-group-horizontal mb-1">
									<?php foreach ($skillGroup as $skill): ?>
										<span class="mr-1 badge <?= $badgeType ?>"><?= $skill->post_title ?></span>
									<?php endforeach; ?>
								</ul>
						<?php
							endforeach;  
						endif; 
						?>
					</div>
				</div>
				<?php $loopCounter++; ?>
			<?php endwhile; ?>
		</div>
	</div>

<?php get_footer(); ?>