<?php
return [
    [
        'name' => 'Trang tổng quan',
        'icon' => 'fa fa-home',
        'route' => 'admin.dashboard',
        'open'=>'0'
    ],
    [
        'name' => 'Quản lý sản phẩm',
        'icon' => 'fa fa-cube',
        'route' => 'admin.product.product.index',
        'open'=>'1',
        'items' => [
            [
                'name' => 'Quản lý danh mục',
                'icon' => 'fa fa-list',
                'route' => 'admin.product.category.index',
                'open'=>'0'
            ],
            [
                'name' => 'Quản lý sản phẩm',
                'icon' => 'fa fa-gift',
                'route' => 'admin.product.category.index',
                'open'=>'1',
                'items' => [
                    [
                        'name' => 'Quản lý danh mục',
                        'icon' => 'fa fa-list',
                        'route' => 'admin.dashboard',
                        'open'=>'0'
                    ],
                    [
                        'name' => 'Quản lý sản phẩm',
                        'icon' => 'fa fa-gift',
                        'route' => 'admin.dashboard',
                        'open'=>'0'
                    ]
                ]
            ]
        ]
    ]

];
