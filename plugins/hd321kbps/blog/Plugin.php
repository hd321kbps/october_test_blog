<?php namespace Hd321kbps\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * blog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'blog',
            'description' => 'Тестовый блог на October CMS',
            'author'      => 'hd321kbps',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Hd321kbps\Blog\Components\Posts' => 'posts'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'hd321kbps.blog.some_permission' => [
                'tab' => 'blog',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation() {
        return [
            'blog' => [
                'label'       => 'Blog',
                'url'         => Backend::url('hd321kbps/blog/post'),
                'icon'        => 'icon-leaf',
                'permissions' => ['hd321kbps.blog.*'],
                'order'       => 500,
            ],
            'sideMenu' => [
                'post' => [
                    'label'       => 'Post',
                    'icon'        => 'icon-copy',
                    'url'         => Backend::url('hd321kbps/blog/post'),
                    'permissions' => ['hd321kbps.blog.access_category']
                ],
                'category' => [
                    'label'       => 'Category',
                    'icon'        => 'icon-copy',
                    'url'         => Backend::url('hd321kbps/blog/category'),
                    'permissions' => ['hd321kbps.blog.access_category']
                ]
            ]
        ];
    }
}
