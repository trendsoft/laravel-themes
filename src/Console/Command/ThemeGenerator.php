<?php

namespace LaravelTheme\Console\Command;

use Illuminate\Console\Command;

class ThemeGenerator extends Command
{
    protected $signature = 'make:theme {slug : the theme slug}';

    protected $description = 'create a theme';

    public function handle()
    {
        $name          = trim($this->argument('slug'));
        $themes_path   = config('theme.paths.absolute');
        $theme         = json_decode(file_get_contents(__DIR__.'/../../templates/theme.json'), true);
        $theme['slug'] = $name;
        if ( ! file_exists($themes_path.'/'.$name)) {
            mkdir($themes_path.'/'.$name, 0777);
            file_put_contents($themes_path.'/'.$name.'/theme.json', json_encode($theme));
        }
    }
}
