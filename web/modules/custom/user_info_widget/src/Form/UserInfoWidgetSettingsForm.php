<?php
/**
 * Settings Form
 * PHP version 7.4.19
 *
 * @file
 * Contains \Drupal\user_info_widget\Form\UserInfoWidgetSettingsForm
 *
 * @category Form
 * @package  User_Info_Widget
 * @author   devasghar <dev.asghar@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @link     https://www.drupal.org/project/user_info_widget
 */

namespace Drupal\user_info_widget\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\system\Entity\Menu;

/**
 * Class UserInfoWidgetSettingsForm
 *
 * @category Form
 * @package  User_Info_Widget
 * @author   devasghar <dev.asghar@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @link     https://www.drupal.org/project/user_info_widget
 */
class UserInfoWidgetSettingsForm extends ConfigFormBase
{

    /**
     * Get the form ID.
     *
     * @return string
     */
    public function getFormId()
    {
        return 'user_info_widget_settings_form';
    }

    /**
     * Get editable configuration names.
     *
     * @return string[]
     */
    protected function getEditableConfigNames()
    {
        return [
        'user_info_widget.settings',
        ];
    }

    /**
     * Build the Drupal config form.
     *
     * @param array              $form       Form object
     * @param FormStateInterface $form_state Form state object
     *
     * @return array
     *  Return form object
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {

        $form['userinfowidget_profile_picture'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Field machine name of user\'s profile picture'),
        '#default_value' => $this->config('user_info_widget.settings')
            ->get('userinfowidget_profile_picture'),
        '#description' => $this->t(
            'Specify the user\'s profile picture field machine name and upload a default image there. Click <a href="@here">here</a> to manage user\'s fields.', [
            '@here' => Url::fromRoute('entity.user.field_ui_fields')
            ->toString(),
            ]
        ),
        ];

        $menus = Menu::loadMultiple();
        foreach ($menus as $menu) {
            $options[$menu->id()] = $menu->label();
        }

        $form['userinfowidget_widget_menu'] = [
        '#type' => 'radios',
        '#title' => $this->t('Attach menu to the widget'),
        '#options' => $options,
        '#default_value' => $this->config('user_info_widget.settings')
            ->get('userinfowidget_widget_menu'),
        '#description' => $this->t('Specify the menu that will be attached as a dropdown to the widget.'),
        ];

        $form['userinfowidget_show_username'] = [
        '#type' => 'radios',
        '#title' => t('Show <strong>username</strong> in the dropdown.'),
        '#default_value' => $this->config('user_info_widget.settings')
            ->get('userinfowidget_show_username'),
        '#options' => [1 => 'Yes', 0 => 'No'],
        '#description' => t('Whether to show username in the dropdown menu or not.'),
        ];

        return parent::buildForm($form, $form_state);
    }

    /**
     * Submit form
     *
     * @param array              $form       Form object
     * @param FormStateInterface $form_state Form state object
     *
     * @return NULL
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->config('user_info_widget.settings')
            ->set('userinfowidget_profile_picture', $form_state->getValue('userinfowidget_profile_picture'))
            ->set('userinfowidget_widget_menu', $form_state->getValue('userinfowidget_widget_menu'))
            ->set('userinfowidget_show_username', $form_state->getValue('userinfowidget_show_username'))
            ->save();

        $messenger = \Drupal::messenger();
        $messenger->addMessage('Setting saved!', 'status');

        parent::buildForm($form, $form_state);
    }

}
