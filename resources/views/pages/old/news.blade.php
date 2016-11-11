@extends('layouts.onecontainer')
@section('content')



<?php
    //get the simplepie library
    require_once('php/autoloader.php');
    // Extend the SimplePie class and override the existing sort_items() function with our own.
class SimplePie_Random_Sort extends SimplePie
{
    public static function sort_items($a, $b)
    {
        return rand(-1, 1);
    }
}
    //grab the feed
    $feed = new SimplePie_random_sort();
    
    $feed->set_feed_url(array(
        
        'http://dailymail.co.uk',
        'http://www.exberliner.com/',
        'http://www.telegraph.co.uk/news/worldnews/europe/germany/',
        'http://www.nprberlin.de/',
    ));
    
    $feed->set_item_limit(10);
    //enable caching
    $feed->enable_cache(true);
    //provide the caching folder
    $feed->set_cache_location('cache');
    //set the amount of seconds you want to cache the feed
    $feed->set_cache_duration(1800);
    //init the process
    $feed->init();
    //let simplepie handle the content type (atom, RSS...)
    $feed->handle_content_type();
?>
         <div class="listing">
             <?php foreach ($feed->get_items() as $item): ?>
                <div class="brick">
<a href="<?php echo $item->get_permalink(); ?>">
                     <?php ($enclosure = $item->get_enclosure()) ?>
                      <?php if ($enclosure->get_link())
                        {
                        echo '<img src="' . $enclosure->get_link() . '" class="img-news" />';
                        }
                        else echo'';
                        ?>
            
                        <div class="feed-text"><h6 style="background:url(<?php $feed = $item->get_feed(); ?>)"><?php echo $item->get_title(); ?></a></h6>
                        <p class="footnote">Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>">
                        <?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> | <?php echo $item->get_date('j M Y | g:i a T'); ?></p>
                      </div>

</div>              
        <?php endforeach; ?>
    </div>


<div class="aside">
    <div class="aside-top">
        <div class="aside-container"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
    </div>
</div>
@stop