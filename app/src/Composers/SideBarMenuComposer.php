<?php namespace UpstatePHP\Website\Composers;

class SidebarMenuComposer
{
    public function compose($view)
    {
        $currentRoute = $view['app']['router']->getCurrentRoute()->getPath();

        $view->with('sidebarMenu', [
            [
                'active' => str_contains($view['app']['url']->route('admin.events.index'), $currentRoute),
                'text' => 'Events',
                'link' => $view['app']['url']->route('admin.events.index')
            ],
            [
                'active' => str_contains($view['app']['url']->route('admin.venues.index'), $currentRoute),
                'text' => 'Venues',
                'link' => $view['app']['url']->route('admin.venues.index')
            ]
        ]);
    }
}