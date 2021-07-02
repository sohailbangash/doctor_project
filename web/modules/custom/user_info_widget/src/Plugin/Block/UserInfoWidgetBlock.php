<?php
/**
 * Block plugin
 * PHP version 7.4.19
 *
 * @file
 * Contains \Drupal\user_info_widget\Plugin\Block\UserInfoWidgetBlock
 *
 * @category Block_Plugin
 * @package  User_Info_Widget
 * @author   devasghar <dev.asghar@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @link     https://www.drupal.org/project/user_info_widget
 */

namespace Drupal\user_info_widget\Plugin\Block;

use Drupal;
use Drupal\Core\Block\BlockBase;
use Drupal\file\Entity\File;

/**
 * Provides a 'UserInfoWidgetBlock' block.
 *
 * @Block(
 *  id = "user_info_widget_block",
 *  admin_label = @Translation("User Info Widget"),
 * )
 *
 * @category Block_Plugin
 * @package  User_Info_Widget
 * @author   devasghar <dev.asghar@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @link     https://www.drupal.org/project/user_info_widget
 */
class UserInfoWidgetBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function build()
    {
        $alt = null;
        $title = null;
        $username = null;
        $picture = null;

        $config = Drupal::config('user_info_widget.settings');
        $user = Drupal::entityTypeManager()
            ->getStorage('user')
            ->load(Drupal::currentUser()->id());

        if ($profile_field = $config->get('userinfowidget_profile_picture')) {
            if ($file = $this->getFileOptions($user, $profile_field)) {
                $picture = file_create_url($file['uri']);

                if ($file['alt']) {
                    $alt = $file['alt'];
                }

                if ($file['title']) {
                    $title = $file['title'];
                }
            }
        }

        if ($username = $config->get('userinfowidget_show_username')) {
            $username = $user->label();
        } else {
            $username = '';
        }

        return [
        '#theme' => 'user_info_widget',
        '#user_picture' => !empty($picture) && getimagesize($picture) ? $picture : '',
        '#config_path' => Drupal\Core\Url::fromRoute('user_info_widget.admin_settings')
        ->toString(),
        '#menu' => $config->get('userinfowidget_widget_menu'),
        '#alt' => $alt,
        '#title' => $title,
        '#username' => $username,
        '#attached' => [
        'library' => [
          'user_info_widget/user-info-widget',
        ]]];
    }

    /**
     * Get file field uri
     *
     * @param $entity    \Drupal\Core\Entity\EntityInterface object
     * @param $fieldName string Field macine name
     *
     * @return null[]
     */
    public function getFileOptions($entity, $fieldName)
    {
        $file_options = [];
        if ($entity->hasField($fieldName)) {
            try {
                $field = $entity->{$fieldName};

                if ($field && $field->target_id) {
                    $file = File::load($field->target_id);

                    if ($file) {
                        $file_options = [
                        'alt' => $field->alt,
                        'title' => $field->title,
                        'uri' => $file->getFileUri(),
                        ];
                    }
                }
            } catch (\Exception $e) {
                Drupal::logger('get_image_uri')->notice($e->getMessage(), []);
            }

            if (!isset($file_options['uri']) || is_null($file_options['uri'])) {
                try {
                    $field = $entity->get($fieldName);

                    if ($field) {
                        $default_image = $field->getSetting('default_image');

                        if ($default_image && $default_image['uuid']) {
                            $entity_repository = Drupal::service('entity.repository');
                            $defaultImageFile = $entity_repository->loadEntityByUuid('file', $default_image['uuid']);

                            if ($defaultImageFile) {
                                $file_options = [
                                  'alt' => $default_image['alt'],
                                  'title' => $default_image['title'],
                                  'uri' => $defaultImageFile->getFileUri(),
                                ];
                            }
                        }
                    }
                } catch (\Exception $e) {
                    Drupal::logger('get_image_uri')->notice($e->getMessage(), []);
                }
            }
        }

        return $file_options;
    }

}
