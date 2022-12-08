<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
            ],
            'devider',
            'crud' => [
                'icon' => 'edit',
                'title' => 'Siswa',
            ],
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
            ],
            'devider',
        ];
    }
}
