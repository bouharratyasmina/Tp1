<?php

namespace wdd\slug;
use illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
    public function Register(){
        
    }

}
?>