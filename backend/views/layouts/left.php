<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Country',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/country/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/country/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Team',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/team/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/team/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Tournament',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/tournament/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/tournament/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Match',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/match/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/match/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Player',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/player/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/player/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Fixture',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/fixture/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/fixture/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Team Selection',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/team-selection/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/team-selection/index'],
                            ]
                        ]
                    ],
                    [
                        'label' => 'Score',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Create',
                                'icon' => 'circle-o',
                                'url' => ['/score/create'],
                            ],
                            [
                                'label' => 'List',
                                'icon' => 'circle-o',
                                'url' => ['/score/index'],
                            ]
                        ]
                    ]
                ]
            ]
        ) ?>

    </section>

</aside>
