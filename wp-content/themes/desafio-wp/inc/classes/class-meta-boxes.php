<?php
/**
 * Register Meta Boxes
 *
 * @package bx-desafio
 */

namespace BX_DESAFIO_THEME\Inc;

use BX_DESAFIO_THEME\Inc\Traits\Singleton;

/**
 * Class Meta_Boxes
 */
class Meta_Boxes
{
    use Singleton;

    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box'], 10, 2);
        add_action('save_post', [$this, 'save_post_meta_data']);
    }

    /**
     * Add custom meta box.
     *
     * @return void
     */
    public function add_custom_meta_box()
    {
        $screens = [
            'unique_ID' => ['video-duration-page-options', 'video-id-page-options'],
            'box_title' => ['Tempo de duração', 'URL do vídeo'],
            'callback' => ['video_duration_meta_box_html', 'video_id_meta_box_html'],
            'post_type' => ['video'],
            'context' => ['side', 'normal'],
            'priority' => ['high', 'high'],
        ];


        for ($i = 0; $i < sizeof($screens['unique_ID']); $i++) {
            add_meta_box(
                $screens['unique_ID'][$i],
                __($screens['box_title'][$i], 'box-desafio'),
                [$this, $screens['callback'][$i]],
                $screens['post_type'][$i],
                $screens['context'][$i],
                $screens['priority'][$i]
            );
        }
    }

    /**
     * Custom meta box HTML( for form )
     *
     * @param  object $post Post.
     * @return void
     */
    public function video_duration_meta_box_html($post)
    {
        $video_duration = get_post_meta($post->ID, '_bx_play_video_duration', true);

        /**
         * Use nonce for verification.
         * This will create a hidden input field with id and name as
         * 'schedule_meta_box_nonce' and unique nonce input value.
         */

        $output = "<input class='css-1g9qb21' type='number' id='video-duration-field' name='bx_play_video_duration' value='$video_duration' />";

        echo $output;
    }

    public function video_id_meta_box_html($post)
    {
        $video_id = get_post_meta($post->ID, '_bx_play_video_ID', true);
        $vide_id_description = _e('Ex. (https://www.youtube.com/watch?v=DcvvWjExea4)', 'box-desafio');

        /**
         * Use nonce for verification.
         * This will create a hidden input field with id and name as
         * 'schedule_meta_box_nonce' and unique nonce input value.
         */

        $output = "
          <label for='video-id-field'>$vide_id_description</label>
          <input class='css-1g9qb21' type='text' id='video-id-field' name='bx_play_video_ID' value='$video_id' />
        ";

        echo $output;
    }

    /**
     * Save post meta into database
     * when the post is saved.
     *
     * @param  integer $post_id Post id.
     * @return void
     */
    public function save_post_meta_data($post_id)
    {
        /**
         * When the post is saved or updated we get $_POST available
         * Check if the current user is authorized
         */

        $bx_play_video_duration = isset($_POST['bx_play_video_duration']) ? $_POST['bx_play_video_duration'] : '';
        $bx_play_video_id = isset($_POST['bx_play_video_ID']) ? $_POST['bx_play_video_ID'] : '';

        $video_duration = sanitize_text_field($bx_play_video_duration);
        $video_id = sanitize_text_field($bx_play_video_id);

        if ($video_duration):
            update_post_meta($post_id, '_bx_play_video_duration', $video_duration);
        endif;

        if ($video_id):
            update_post_meta($post_id, '_bx_play_video_ID', $video_id);
        endif;

        if (!current_user_can('edit_post', $post_id)) :
            return;
        endif;
    }
}
