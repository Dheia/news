<?php namespace Pkurg\PostEditor;

use Config;
use Event;
use Pkurg\PostEditor\Models\Settings;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{

    public $require = ['RainLab.Blog'];

    public function registerPermissions()
    {
        return [
            'pkurg.posteditor.manage' => [
                'tab' => 'Post Editor',
                'label' => 'Manage Post Editor',
            ],

        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Post Editor',
                'description' => 'Manage Post Editor settings.',
                'category' => SettingsManager::CATEGORY_CMS,
                'icon' => 'oc-icon-edit',
                'class' => 'Pkurg\PostEditor\Models\Settings',
                'order' => 500,
                'permissions' => ['pkurg.posteditor.manage'],

            ],
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Pkurg\PostEditor\FormWidgets\Editor' => 'grapeposteditor',

        ];
    }

    public function boot()
    {

        if (is_null(Settings::get('savelocal'))) {

            Settings::set('savelocal', 1);

        }
        if (is_null(Settings::get('show_page'))) {

            Settings::set('show_page', 1);

        }

        Event::listen('backend.form.extendFields', function ($form) {

            if (Settings::get('show_page', false) && $form->model instanceof \RainLab\Blog\Models\Post) {
                replaceEditor($form);

            }

        });

        function replaceEditor($form)
        {

            $replacable = [
                'codeeditor', 'Eein\Wysiwyg\FormWidgets\Trumbowyg', 'richeditor', 'RainLab\Blog\FormWidgets\BlogMarkdown',
                'RainLab\Blog\FormWidgets\MLBlogMarkdown', 'mlricheditor',
            ];

            $multilanguage = [
                'RainLab\Blog\FormWidgets\MLBlogMarkdown', 'mlricheditor',
            ];

            foreach ($form->getFields() as $field) {

                if (!empty($field->config['type']) && in_array($field->config['type'], $replacable)) {
                    if (Settings::instance()->editor == 'richeditor') {
                        $editor = in_array($field->config['type'], $multilanguage) ? 'mlricheditor' : 'richeditor';
                        $field->config['type'] = $field->config['widget'] = $editor;
                    } else {

                        //$field->config['type'] = $field->config['widget'] = 'mlricheditor';//'Pkurg\PostEditor\FormWidgets\Editor';
                        $field->config['type'] = $field->config['widget'] = 'Pkurg\PostEditor\FormWidgets\Editor';

                        // $form->addSecondaryTabFields([

                        //     'content_html' => [

                        //         'cssClass' => 'pkurg',
                        //         'type' => 'Pkurg\PostEditor\FormWidgets\Editor',
                        //         'tab' => 'Styles',

                        //     ],

                        // ]);

                    }

                    return;
                }
            }
        }

    }

}
