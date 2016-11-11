 	     <?php foreach ($feed->get_items() as $item): ?>
 				<div class="grid-cell">
					 <?php if ($enclosure = $item->get_enclosure())
						{
						// Display the thumbnail as an image and link it back to the YouTube page, and adding the video's title as a tooltip for the link.
						echo '<a href="' . $item->get_permalink() . '" title="' . $item->get_title() . '"><img class="u-full-width-alt" src="' . $enclosure->get_thumbnail() . '" /></a>';
						}
						?>
    		
    					<h6 style="background:url(<?php $feed = $item->get_feed(); ?>)"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h6>
    					<p class="footnote">Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>">
    					<?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> | <?php echo $item->get_date('j M Y | g:i a T'); ?></p>
    		
    			</div>
		<?php endforeach; ?>