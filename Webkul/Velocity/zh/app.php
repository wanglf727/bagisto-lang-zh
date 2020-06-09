<?php

return [
    'admin'         => [
        'system'    => [
            'velocity' => [
                'general'  => '普通',
                'category'  => '类目',
                'settings'  => '设置',
                'extension_name' => 'Velocity主题',
                'error-module-inactive' => '警告: Velocity主题未激活',
            ],

            'settings' => [
                'channels'=> [
                    'subscription_bar' => '订阅栏内容'
                ],
            ],

            'general' => [
                'status' => '状态',
                'active' => '激活',
                'inactive' => '未激活',
            ],
            'category' => [
                'all' => '所有',
                'left' => '左',
                'right' => '右',
                'active' => '激活',
                'custom' => '自定义',
                'inactive' => '未激活',
                'image-alignment' => '图片对齐',
                'icon-status' => '类目图标状态',
                'image-status' => '类目图片状态',
                'sub-category-show' => '显示子类',
                'image-height' => '图片高度 [像素]',
                'image-width' => '图片宽度 [像素]',
                'show-tooltip' => '显示类目的提示信息',
                'num-sub-category' => '子类数量',
            ]
        ],
        'layouts'   => [
            'velocity' => 'Velocity',
            'cms-pages' => 'CMS页面',
            'meta-data' => '元数据',
            'category-menu' => '类目菜单',
            'header-content' => '头部内容',
        ],
        'contents'  => [
            'self' => 'Self',
            'active' => '激活',
            'new-tab' => '新的选项卡',
            'inactive' => '未激活',
            'title' => '内容列表',
            'select' => '-- 选择 --',
            'add-title' => '创建内容',
            'btn-add-content' => '创建',
            'save-btn-title' => '保存',
            'autocomplete' => '[自动完成]',
            'no-result-found' => '没有记录',
            'search-hint' => '搜索商品...',
            'mass-delete-success' => '已选中的内容删除成功',
            'tab' => [
                'page' => '页面设置',
                'content' => '内容设置',
                'meta_content' => '元数据',
            ],
            'page' => [
                'title' => '标题',
                'status' => '状态',
                'position' => '排序',
            ],
            'content' => [
                'content-type' => '内容类型',
                'custom-title' => '自定义标题',
                'category-slug' => '类目固定链接',
                'link-target' => '页面链接目标',
                'custom-product' => '保存商品',
                'custom-heading' => '自定义头部',
                'catalog-type' => '商品类目类型',
                'static-description' => '内容描述',
                'page-link' => '页面链接 [例如 http://example.com/../../]',
            ],
            'datagrid' => [
                'id' => 'Id',
                'title' => '标题',
                'status' => '状态',
                'position' => '排序',
                'content-type' => '内容类型',
            ]
        ],
        'meta-data' => [
            'footer' => '页尾',
            'title' => 'Velocity元数据',
            'activate-slider' => '使轮播图生效',
            'home-page-content' => '主页内容',
            'footer-left-content' => '页尾左侧内容',
            'subscription-content' => '订阅栏内容',
            'sidebar-categories' => '侧边栏类目',
            'footer-left-raw-content' => '<p></p>',
            'slider-path' => '设置轮播图URL',
            'category-logo' => '类目logo',
            'product-policy' => '商品政策',
            'update-meta-data' => '更新元数据',
            'product-view-image' => '商品显示图像',
            'advertisement-two' => '广告图 2',
            'advertisement-one' => '广告图 1',
            'footer-middle-content' => '页尾中间的内容',
            'advertisement-four' => '广告图 3',
            'advertisement-three' => '广告图 4',
            'images' => '图片',
            'general' => '普通',
            'add-image-btn-title' => '创建图片'
        ],
        'category'  => [
            'save-btn-title' => '保存菜单',
            'title' => '类目菜单列表',
            'add-title' => '创建菜单内容',
            'edit-title' => '编辑菜单内容',
            'btn-add-category' => '创建类目内容',
            'datagrid' => [
                'category-id' => '类目Id',
                'category-name' => '类目名称',
                'category-icon' => '类目图标',
                'category-status' => '状态',
            ],
            'tab' => [
                'general' => '普通',
            ],
            'status' => '状态',
            'active' => '激活',
            'inactive' => '未激活',
            'select' => '-- 选择 --',
            'icon-class' => '图标类',
            'select-category' => '选择类目',
            'tooltip-content' => '提示信息',
            'mass-delete-success' => '已选中的类目菜单删除成功',
        ],
        'general'   => [
            'locale_logo' => '国家地区Logo',
        ],
    ],

    'home'          => [
        'view-all'           => '查看所有',
        'add-to-cart'        => '创建到购物车',
        'hot-categories'     => '热门类目',
        'payment-methods'    => '支付方式',
        'customer-reviews'   => '用户评论',
        'shipping-methods'   => '物流方式',
        'popular-categories' => '流行类目',
    ],

    'header'        => [
        'cart'              => '购物车',
        'cart'              => '购物车',
        'guest'             => '游客',
        'logout'            => '注销',
        'title'             => '账户',
        'account'           => '账户',
        'profile'           => '个人中心',
        'wishlist'          => '收藏',
        'all-categories'    => '所有类目',
        'search-text'       => '搜索商品',
        'welcome-message'   => '欢迎，:customer_name',
        'dropdown-text'     => '管理购物车，订单和收藏',
    ],

    'menu-navbar'   => [
        'text-more'     => '更多',
        'text-category' => '商品类目',
    ],

    'minicart'      => [
        'cart'      => '购物车',
        'view-cart' => '查看购物车',
    ],

    'checkout'      => [
        'qty'       => '数量',
        'checkout'  => '结算',
        'cart'      => [
            'view-cart'     => '查看购物车',
            'cart-summary'  => '购物车摘要',
        ],
        'qty'       => '数量',
        'items'     => '商品',
        'subtotal'  => '小计',
        'sub-total' => '小计',
        'proceed'   => '去结算',
    ],

    'customer'      => [
        'compare'           => [
            'text'                  => '比较',
            'compare_similar_items' => '比较相似商品',
            'added'                 => '成功创建到比较列表',
            'already_added'         => '已存在比较列表',
            'removed'               => '成功从比较列表移除',
            'empty-text'            => "比较列表为空",
        ],
        'login-form'        => [
            'sign-up'               => '注册',
            'new-customer'          => '新用户',
            'customer-login'        => '登录',
            'registered-user'       => '注册用户',
            'your-email-address'    => '邮箱',
            'form-login-text'       => '已有账户，请用邮箱登录',
        ],
        'signup-form'       => [
            'login'             => '登录',
            'become-user'       => '成为用户',
            'user-registration' => '用户注册',
            'form-sginup-text'  => '很高兴成为我们的会员',
        ],
        'forget-password'   => [
            'login'                 => '登录',
            'forgot-password'       => '忘记密码',
            'recover-password'      => '找回密码',
            'recover-password-text' => '输入邮箱找回密码',
        ]
    ],

    'error'         => [
        'go-to-home'            => '主页',
        'page-lost-short'       => '页面丢失内容',
        'something_went_wrong'  => '出错了',
        'page-lost-description' => "你正在访问的页面不可用，可以再次搜索或回退",
    ],

    'products'      => [
        'text'              => '商品',
        'details'           => '详情',
        'reviews-title'     => '评论',
        'reviewed'          => '已评论',
        'review-by'         => '评论被',
        'quick-view'        => '快速查看',
        'not-available'     => '不可用',
        'submit-review'     => '提交品论',
        'ratings'           => ':totalRatings 评分',
        'reviews-count'     => ':totalReviews 评论',
        'customer-rating'   => '用户评分',
        'more-infomation'   => '更多信息',
        'view-all-reviews'  => '查看所有评论',
        'write-your-review' => '评论',
        'short-description' => '简短描述',
        'recently-viewed'   => '最近浏览的商品',
        'be-first-review'   => '成为第一个评论的用户',
    ],

    'shop'          => [
        'gender'    => [
            'male'   => '男',
            'other'  => '其他',
            'female' => '女',
        ],
        'general'   => [
            'no'                     => '否',
            'yes'                    => '是',
            'view'                   => '查看',
            'filter'                 => '筛选',
            'orders'                 => '订单',
            'update'                 => '更新',
            'reviews'                => '评论',
            'addresses'              => '地址',
            'top-brands'             => '卖的最好的品牌',
            'new-password'           => '新密码',
            'downloadables'          => '可下载的商品',
            'confirm-new-password'   => '确认新密码',
            'enter-current-password' => '输入当前密码',

            'alert' => [
                'info'      => '信息',
                'error'     => '错误',
                'success'   => '成功',
                'warning'   => '警告',
            ],
        ],
        'wishlist'  => [
            'add-wishlist-text'     => '创建到收藏列表',
            'remove-wishlist-text'  => '从收藏列表删除'
        ]
    ],

    'responsive'    => [
        'header' => [
            'done'      => '完成',
            'languages' => '语言',
            'greeting'  => '欢迎，:customer！',
        ]
    ],
];
