<?php namespace UpstatePHP\Website\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->add('events.next', 'NextEventComposer');
        $this->add('partials.menu', 'MenuComposer');
        $this->add('organizations.admin.form', 'OrganizationTypesComposer');
        $this->add('buckets.recent-tweets', 'RecentTweetsComposer');
    }

    protected function add($view, $class)
    {
        $this->app->view->composer($view, '\UpstatePHP\Website\Composers\\'.$class);
    }
} 