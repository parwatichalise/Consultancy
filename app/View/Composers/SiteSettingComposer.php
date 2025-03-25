<?php
namespace App\View\Composers;

use App\Models\SiteSetting;
use Illuminate\View\View;

class SiteSettingComposer
{
    private $setting;
    public function compose(View $view)
    {
        if (!$this->setting) {
            $this->setting = SiteSetting::first();
        }
        return $view->with('setting', $this->setting);
    }
}
