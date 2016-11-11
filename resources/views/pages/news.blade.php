@extends('layouts.onecontainer')
@section('content')



<?php
    //get the simplepie library
    require_once('php/autoloader.php');
    // Extend the SimplePie class and override the existing sort_items() function with our own.
class SimplePieAlwaysSort extends SimplePie
{
  public function get_items($start = 0, $end = 0)
  {
    if (!isset($this->data['items']))
    {
      if (!empty($this->multifeed_objects))
      {
        $this->data['items'] = self::merge_items($this->multifeed_objects, $start, $end, $this->item_limit);
      }
    }

    return parent::get_items($start, $end);
  }

  public static function merge_items($urls, $start = 0, $end = 0, $limit = 0)
  {
    if (is_array($urls) && sizeof($urls) > 0)
    {
      $items = array();
      foreach ($urls as $arg)
      {
        if ($arg instanceof SimplePie)
        {
          $items = array_merge($items, $arg->get_items(0, $limit));
        }
        else
        {
          trigger_error('Arguments must be SimplePie objects', E_USER_WARNING);
        }
      }

      usort($items, array(get_class($urls[0]), 'sort_items'));

      if ($end === 0)
      {
        return array_slice($items, $start);
      }
      else
      {
        return array_slice($items, $start, $end);
      }
    }
    else
    {
      trigger_error('Cannot merge zero SimplePie objects', E_USER_WARNING);
      return array();
    }
  }
}

$pie = new SimplePieAlwaysSort();
$pie->set_feed_url(array(
        
        'http://dailymail.co.uk',
        'http://www.exberliner.com/',
        'http://www.telegraph.co.uk/news/worldnews/europe/germany/',
        'http://www.nprberlin.de/',));
$pie->set_item_limit(10);
    //enable caching
    $pie->enable_cache(true);
    //provide the caching folder
    $pie->set_cache_location('cache');
    //set the amount of seconds you want to cache the feed
    $pie->set_cache_duration(1800);
    //init the process
    $pie->init();
    //let simplepie handle the content type (atom, RSS...)
    $pie->handle_content_type();

?>
         <div class="grid">
             <?php foreach ($pie->get_items() as $item): ?>
                <div class="grid-item">
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://masonry.desandro.com/masonry.pkgd.js'></script>

        <script src="js/masonry.js"></script>

<div class="aside">
    <div class="aside-top">
        <div class="aside-container"><img src="../../images/sidebar/ford300x600.jpg" width="300" height="600"></div>
    </div>
</div>
@stop