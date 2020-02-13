<?php
/*
Plugin Name:  auteurs
Description:  Mon plugin
Version:      1.0
Author:       Florent
*/

if (!defined('WPINC')) {
  die;
}

add_action('init','authors_init_shortcode');

function authors_init_shortcode()
{
    add_shortcode('authors', 'authors_do_shortcode');
}

function authors_do_shortcode($attrs)
{
    $output = '';
    if(!isset($attrs['post']) or empty($attrs['post'])){
        return $output;
    }
    $output = get_post_meta($attrs['post'], 'author-title', true);
    return $output;
}

$authors = new author();

class author
{
  public function __construct()
  {
    $this->hooks();
  }

  public function hooks()
  {
    if (is_admin()) {
      add_action('add_meta_boxes', [$this, 'add_meta_boxes'], 10, 1);
      add_action('save_post', [$this, 'save_form'], 10, 1);
    }
  }

  public function add_meta_boxes()
  {
    add_meta_box('author-meta-box', __('Auteurs supplémentaires'), [$this, 'display_form'], 'page', 'normal');
    add_meta_box('author-meta-box', __('Auteurs supplémentaires'), [$this, 'display_form'], 'post', 'normal');
  }

  public function display_form($post)
  {
    $title = get_post_meta($post->ID, 'author-title', true);
    ?>
    <table class="form-table">
      <tbody>
        <tr>
            <td><input type="text" id="author-title" name="author-title" value="<?= esc_html($title) ?>" class="regular-text" placeholder="Auteurs supplémentaire">
            </td>
        </tr>
      </tbody>
    </table>
    <?php
  }

  public function save_form($post_id)
  {
    if (!isset($_POST['author-title'])) {
      return;
    }

    update_post_meta($post_id, 'author-title', 
    sanitize_text_field($_POST['author-title']));
  }

}