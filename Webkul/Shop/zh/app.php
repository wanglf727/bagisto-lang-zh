<?php

return [
    'invalid_vat_format' => '增值税ID格式错误',
    'security-warning' => '发现可疑活动!!!',
    'nothing-to-delete' => '没有删除任何记录',

    'layouts' => [
        'my-account' => '我的账号',
        'profile' => '个人中心',
        'address' => '地址',
        'reviews' => '评论',
        'wishlist' => '收藏',
        'orders' => '订单',
        'downloadable-products' => '商品可下载'
    ],

    'common' => [
        'error' => '出问题了，请稍后再试',
        'no-result-found' => '没有记录'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - 主页',
        'featured-products' => '主打商品',
        'new-products' => '新品',
        'verify-email' => '确认邮箱',
        'resend-verify-email' => '重新发送验证邮件'
    ],

    'header' => [
        'title' => '账号',
        'dropdown-text' => '购物车管理，订单&收藏',
        'sign-in' => '登录',
        'sign-up' => '注册',
        'account' => '账号',
        'cart' => '购物车',
        'profile' => '个人中心',
        'wishlist' => '收藏',
        'cart' => '购物车',
        'logout' => '注销',
        'search-text' => '搜索商品'
    ],

    'minicart' => [
        'view-cart' => '查看购物车',
        'checkout' => '结算',
        'cart' => '购物车',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => '订阅电子期刊',
        'subscribe' => '订阅',
        'locale' => '国家地区',
        'currency' => '货币',
    ],

    'subscription' => [
        'unsubscribe' => '取消订阅',
        'subscribe' => '订阅',
        'subscribed' => '订阅成功',
        'not-subscribed' => '无法订阅，请稍后再试。',
        'already' => '你已经订阅',
        'unsubscribed' => '你已取消订阅。',
        'already-unsub' => '你已经退订',
        'not-subscribed' => '邮件无法发送，请稍后再试'
    ],

    'search' => [
        'no-results' => '无结果',
        'page-title' => config('app.name') . ' - 搜索',
        'found-results' => '没有搜索结果',
        'found-result' => '查到搜索结果'
    ],

    'reviews' => [
        'title' => '标题',
        'add-review-page-title' => '创建评论',
        'write-review' => '写评论',
        'review-title' => '给你的评论起个标题',
        'product-review-page-title' => '商品评论',
        'rating-reviews' => '评分 & 评论',
        'submit' => '提交',
        'delete-all' => '所有评论已删除',
        'ratingreviews' => '评分 :rating & 评论 :review',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'Star',
        'name' => '名字',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => '已有账号',
            'title' => '登录'
        ],

        'signup-form' => [
            'page-title' => '创建账号',
            'title' => '注册',
            'firstname' => '名字',
            'lastname' => '姓',
            'email' => '邮箱',
            'password' => '密码',
            'confirm_pass' => '确认密码',
            'button_title' => '注册',
            'agree' => '同意',
            'terms' => '条款',
            'conditions' => '条件',
            'using' => '使用本站',
            'agreement' => '同意',
            'success' => '账号创建成功',
            'success-verify' => '账号创建成功，已发送验证邮件',
            'success-verify-email-unsent' => '账号创建成功，但未发送验证邮件',
            'failed' => '无法创建账号，请稍后再试',
            'already-verified' => '你的账号已验证或再次发送验证邮件',
            'verification-not-sent' => '发送验证邮件失败，请稍后再试',
            'verification-sent' => '验证邮件已发送',
            'verified' => '你的账号已验证，请登录',
            'verify-failed' => '无法验证你的邮件账号',
            'dont-have-account' => '你没有账号',
            'customer-registration' => '注册成功'
        ],

        'login-text' => [
            'no_account' => '没有账号',
            'title' => '注册',
        ],

        'login-form' => [
            'page-title' => '客户登录',
            'title' => '登录',
            'email' => '邮箱',
            'password' => '密码',
            'forgot_pass' => '忘记密码?',
            'button_title' => '登录',
            'remember' => '记住我',
            'footer' => '© Copyright :year Webkul软件版权所有',
            'invalid-creds' => '请检查你的凭证，然后重试',
            'verify-first' => '确认邮箱.',
            'not-activated' => '你的激活请求已批准',
            'resend-verification' => '重新发送验证邮件'
        ],

        'forgot-password' => [
            'title' => '找回密码',
            'email' => '邮箱',
            'submit' => '发送邮件重置密码',
            'page_title' => '忘记密码？'
        ],

        'reset-password' => [
            'title' => '重置密码',
            'email' => '注册邮箱',
            'password' => '密码',
            'confirm-password' => '确认密码',
            'back-link-title' => '退回登录',
            'submit-btn-title' => '重置密码'
        ],

        'account' => [
            'dashboard' => '编辑个人中心',
            'menu' => '菜单',

            'profile' => [
                'index' => [
                    'page-title' => '个人中心',
                    'title' => '个人中心',
                    'edit' => '编辑',
                ],

                'edit-success' => '个人中心更新成功',
                'edit-fail' => '个人中心更新失败',
                'unmatch' => '旧密码不匹配',

                'fname' => '名字',
                'lname' => '姓',
                'gender' => '性别',
                'other' => '其他',
                'male' => '男',
                'female' => '女',
                'dob' => '出生日期',
                'phone' => '手机',
                'email' => '邮箱',
                'opassword' => '旧密码',
                'password' => '密码',
                'cpassword' => '确认密码',
                'submit' => '更新个人中心',

                'edit-profile' => [
                    'title' => '编辑个人中心',
                    'page-title' => '编辑个人中心'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => '地址',
                    'title' => '地址',
                    'add' => '创建地址',
                    'edit' => '编辑',
                    'empty' => '你没有收货地址，请点击下面的链接创建',
                    'create' => '创建地址',
                    'delete' => '删除',
                    'make-default' => '设为默认',
                    'default' => '默认',
                    'contact' => '联系方式',
                    'confirm-delete' =>  '确认要删除地址？',
                    'default-delete' => '默认地址不能改',
                    'enter-password' => '请输入密码.',
                ],

                'create' => [
                    'page-title' => '创建地址',
                    'company_name' => '公司名称',
                    'first_name' => '名',
                    'last_name' => '姓',
                    'vat_id' => '增值税ID',
                    'vat_help_note' => '[注意：使用国家编码加上增值税ID。例如：INV01234567891]',
                    'title' => '创建地址',
                    'street-address' => '街道地址',
                    'country' => '国家',
                    'state' => '省份',
                    'select-state' => '选择一个省份或区域',
                    'city' => '城市',
                    'postcode' => '邮编',
                    'phone' => '手机',
                    'submit' => '保存地址',
                    'success' => '地址创建成功',
                    'error' => '地址创建失败'
                ],

                'edit' => [
                    'page-title' => '编辑地址',
                    'company_name' => '公司名称',
                    'first_name' => '名',
                    'last_name' => '姓',
                    'vat_id' => '增值税ID',
                    'title' => '编辑地址',
                    'street-address' => '街道地址',
                    'submit' => '保存地址',
                    'success' => '地址更新成功',
                ],
                'delete' => [
                    'success' => '地址删除成功',
                    'failure' => '地址删除失败',
                    'wrong-password' => '密码错误'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => '订单',
                    'title' => '订单',
                    'order_id' => '订单ID',
                    'date' => '日期',
                    'status' => '状态',
                    'total' => 'Total',
                    'order_number' => '订单数量',
                    'processing' => '正在处理',
                    'completed' => '已完成',
                    'canceled' => '已取消',
                    'closed' => '已关闭',
                    'pending' => '待审核',
                    'pending-payment' => '待付款',
                    'fraud' => '欺诈'
                ],

                'view' => [
                    'page-tile' => '订单#:order_id',
                    'info' => '信息',
                    'placed-on' => '搁置',
                    'products-ordered' => '下单商品',
                    'invoices' => '发票',
                    'shipments' => '物流',
                    'SKU' => 'SKU',
                    'product-name' => '名称',
                    'qty' => '数量',
                    'item-status' => '状态',
                    'item-ordered' => '下单 (:qty_ordered)',
                    'item-invoice' => '发票 (:qty_invoiced)',
                    'item-shipped' => '发货 (:qty_shipped)',
                    'item-canceled' => '已取消 (:qty_canceled)',
                    'item-refunded' => '退款 (:qty_refunded)',
                    'price' => '价格',
                    'total' => '总计',
                    'subtotal' => '小计',
                    'shipping-handling' => '物流 & 搬运',
                    'tax' => 'Tax',
                    'discount' => '折扣',
                    'tax-percent' => '税率',
                    'tax-amount' => '税额',
                    'discount-amount' => '折扣总额',
                    'grand-total' => '总计',
                    'total-paid' => '付款总额',
                    'total-refunded' => '退款总额',
                    'total-due' => '应付款',
                    'shipping-address' => '收货地址',
                    'billing-address' => '发票地址',
                    'shipping-method' => '物流方式',
                    'payment-method' => '支付方式',
                    'individual-invoice' => '发票#:invoice_id',
                    'individual-shipment' => '物流#:shipment_id',
                    'print' => 'Print',
                    'invoice-id' => '发票Id',
                    'order-id' => '订单Id',
                    'order-date' => '订单Date',
                    'bill-to' => '发票地址',
                    'ship-to' => '收货地址',
                    'contact' => '联系方式',
                    'refunds' => '退款',
                    'individual-refund' => '退款#:refund_id',
                    'adjustment-refund' => '改为退款',
                    'adjustment-fee' => '调整费用',
                    'cancel-btn-title' => '取消',
                ]
            ],

            'wishlist' => [
                'page-title' => '收藏',
                'title' => '收藏',
                'deleteall' => '删除所有',
                'moveall' => '把所有商品移到购物车',
                'move-to-cart' => '移到到购物车',
                'error' => '创建收藏失败，请稍后再试',
                'add' => '创建收藏成功',
                'remove' => '删除收藏成功',
                'moved' => '从购物车删除成功',
                'option-missing' => '商品选项缺失，创建收藏失败',
                'move-error' => '删除收藏失败，请稍后再试',
                'success' => '创建收藏成功',
                'failure' => '创建收藏失败，请稍后再试',
                'already' => '收藏已存在',
                'removed' => '删除收藏成功',
                'remove-fail' => '删除收藏失败，请稍后再试',
                'empty' => '收藏列表为空',
                'remove-all-success' => '收藏列表已清空',
            ],

            'downloadable_products' => [
                'title' => '商品可下载',
                'order-id' => '订单Id',
                'date' => '日期',
                'name' => '标题',
                'status' => '状态',
                'pending' => '待审核',
                'available' => '有效的',
                'expired' => '失效的',
                'remaining-downloads' => '剩余的下载',
                'unlimited' => '无限制',
                'download-error' => '下载链接已无效'
            ],

            'review' => [
                'index' => [
                    'title' => '评论',
                    'page-title' => '评论'
                ],

                'view' => [
                    'page-tile' => '评论#:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => '低到',
        'remove-filter-link-title' => '清除所有',
        'sort-by' => '排序',
        'from-a-z' => 'A-Z',
        'from-z-a' => 'Z-A',
        'newest-first' => '最新',
        'oldest-first' => '最旧',
        'cheapest-first' => '最便宜',
        'expensive-first' => '最贵',
        'show' => '查看',
        'pager-info' => 'Showing :showing of :total Items',
        'description' => '描述',
        'specification' => '规格',
        'total-reviews' => ':total 评论',
        'total-rating' => ':total_rating 评分 & :total_reviews 评论',
        'by' => '被 :name',
        'up-sell-title' => '猜你喜欢',
        'related-product-title' => '相关商品',
        'cross-sell-title' => '更多选项',
        'reviews-title' => '评分 & 评论',
        'write-review-btn' => '评论',
        'choose-option' => '选择选项',
        'sale' => '促销',
        'new' => '新品',
        'empty' => '该类商品无货',
        'add-to-cart' => '创建到购物车',
        'buy-now' => '现在购买',
        'whoops' => '哎呦!',
        'quantity' => '数量',
        'in-stock' => '现货',
        'out-of-stock' => '没货',
        'view-all' => '查看所有',
        'select-above-options' => '请先选择以上选项',
        'less-quantity' => '数量不能少于1',
        'samples' => '样例',
        'links' => '链接',
        'sample' => '样例',
        'name' => '名称',
        'qty' => '数量',
        'starting-at' => '起始于',
        'customize-options' => '定制选项',
        'choose-selection' => '选择一个选项',
        'your-customization' => '你的定制',
        'total-amount' => '总额',
        'none' => '一个没有',
        'available' => '有效的'
    ],

    'buynow' => [
        'no-options' => '请在购买前选择选项'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => '该商品缺少字段',
                'missing_options' => '该商品缺少选项',
                'missing_links' => '该商品缺少下载链接',
                'qty_missing' => '商品数量至少是1',
                'qty_impossible' => '最多只能创建一件到购物车'
            ],
            'create-error' => '创建购物车时遇到一些问题',
            'title' => '购物车',
            'empty' => '你的购物车是空的',
            'update-cart' => '更新购物车',
            'continue-shopping' => '继续购物',
            'proceed-to-checkout' => '去结算',
            'remove' => '删除',
            'remove-link' => '删除',
            'move-to-wishlist' => '创建收藏',
            'move-to-wishlist-success' => '创建收藏成功',
            'move-to-wishlist-error' => '创建收藏失败，请稍后再试',
            'add-config-warning' => '请先选择选项，再创建到购物车',
            'quantity' => [
                'quantity' => '数量',
                'success' => '购物车更新成功',
                'illegal' => '最少一个',
                'inventory_warning' => '数量错误，请稍后再试',
                'error' => '无法更新，请稍后再试'
            ],

            'item' => [
                'error_remove' => '没有要从购物车中删除的商品',
                'success' => '创建购物车成功',
                'success-remove' => '删除购物车成功',
                'error-add' => '创建购物车失败',
            ],
            'quantity-error' => '数量错误，请稍后再试',
            'cart-subtotal' => '购物车小计',
            'cart-remove-action' => '确定要这么做吗？',
            'partial-cart-update' => '只有部分商品更新了',
            'link-missing' => '',
            'event' => [
                'expired' => '事件已过期'
            ]
        ],

        'onepage' => [
            'title' => '结算',
            'information' => '信息',
            'shipping' => '物流',
            'payment' => '支付',
            'complete' => '完成',
            'billing-address' => '发票地址',
            'sign-in' => '登录',
            'company-name' => '公司名称',
            'first-name' => '名字',
            'last-name' => '姓',
            'email' => '邮箱',
            'address1' => '街道地址',
            'city' => '城市',
            'state' => '省份',
            'select-state' => '选择一个省份或区域',
            'postcode' => '邮编',
            'phone' => '手机',
            'country' => '国家',
            'order-summary' => '订单摘要',
            'shipping-address' => '收货地址',
            'use_for_shipping' => '收货地址',
            'continue' => 'Continue',
            'shipping-method' => '选择物流方式',
            'payment-methods' => '选择支付方式',
            'payment-method' => '支付方式',
            'summary' => '订单摘要',
            'price' => '价格',
            'quantity' => '数量',
            'billing-address' => '发票地址',
            'shipping-address' => '收货地址',
            'contact' => '联系方式',
            'place-order' => '下订单',
            'new-address' => '创建地址',
            'save_as_address' => '保存地址',
            'apply-coupon' => '使用优惠券',
            'amt-payable' => '应付金额',
            'got' => '已得到',
            'free' => '免费',
            'coupon-used' => '使用优惠券',
            'applied' => '应用',
            'back' => '回退',
            'cash-desc' => '现金支付',
            'money-desc' => '转帐支付',
            'paypal-desc' => 'Paypal支付',
            'free-desc' => '免费送货',
            'flat-desc' => '统一汇率',
            'password' => '密码',
            'login-exist-message' => '登录或继续浏览',
            'enter-coupon-code' => '请输入优惠券'
        ],

        'total' => [
            'order-summary' => '订单摘要',
            'sub-total' => '小计',
            'grand-total' => '总计',
            'delivery-charges' => '送货费用',
            'tax' => '税额',
            'discount' => '折扣',
            'price' => '价格',
            'disc-amount' => '折扣金额',
            'new-grand-total' => '总计',
            'coupon' => '优惠券',
            'coupon-applied' => '使用优惠券',
            'remove-coupon' => '删除优惠券',
            'cannot-apply-coupon' => '不能使用优惠券',
            'invalid-coupon' => '优惠券无效',
            'success-coupon' => '优惠券使用成功',
            'coupon-apply-issue' => '优惠券不能使用'
        ],

        'success' => [
            'title' => '订单成功提交',
            'thanks' => '感谢下单！',
            'order-id-info' => '你的订单号是#:order_id',
            'info' => '我们已向你的电子邮箱发送订单详细信息和跟踪信息'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => '新订单确认',
            'heading' => '订单确认!',
            'dear' => ':customer_name 先生',
            'dear-admin' => ':admin_name 先生',
            'greeting' => '感谢下单，订单号 :order_id ，时间 :created_at',
            'greeting-admin' => '订单Id :order_id 时间 :created_at',
            'summary' => '摘要订单',
            'shipping-address' => '收货地址',
            'billing-address' => '发票地址',
            'contact' => '联系方式',
            'shipping' => '物流方式',
            'payment' => '支付方式',
            'price' => '价格',
            'quantity' => '数量',
            'subtotal' => '小计',
            'shipping-handling' => '物流 & 搬运',
            'tax' => 'Tax',
            'discount' => '折扣',
            'grand-total' => '总计',
            'final-summary' => '感谢关注，发货后我们会把运单号发送给你',
            'help' => '如果你需要帮助，请联系我们 :support_email',
            'thanks' => '感谢!',
            'cancel' => [
                'subject' => '订单取消确认',
                'heading' => '订单已取消',
                'dear' => ':customer_name 先生',
                'greeting' => '订单#:order_id 时间 :created_at 已取消',
                'summary' => '摘要订单',
                'shipping-address' => '收货地址',
                'billing-address' => '发票地址',
                'contact' => '联系方式',
                'shipping' => '物流方式',
                'payment' => '支付方式',
                'subtotal' => '小计',
                'shipping-handling' => '物流&搬运',
                'tax' => 'Tax',
                'discount' => '折扣',
                'grand-total' => '总计',
                'final-summary' => '感谢你对我们的关注',
                'help' => '如果你需要任何帮助，请联系我们 :support_email',
                'thanks' => '感谢!',
            ]
        ],

        'invoice' => [
            'heading' => '发票#:invoice_id for 订单#:order_id',
            'subject' => '订单#:order_id 的发票',
            'summary' => '发票摘要',
        ],

        'shipment' => [
            'heading' => '订单#:order_id的物流#:shipment_id已生成',
            'inventory-heading' => '订单#:order_id的物流#:shipment_id已生成',
            'subject' => '订单#:order_id的物流',
            'inventory-subject' => '订单#:order_id的物流#:shipment_id已生成',
            'summary' => '物流摘要',
            'carrier' => '货运',
            'tracking-number' => '追踪号',
            'greeting' => '订单 :order_id 时间 :created_at',
        ],

        'refund' => [
            'heading' => '退款#:refund_id 订单#:order_id',
            'subject' => '退款订单#:order_id',
            'summary' => '退款摘要',
            'adjustment-refund' => '改为退款',
            'adjustment-fee' => '调整费用'
        ],

        'forget-password' => [
            'subject' => '客户重置密码',
            'dear' => ':name 先生',
            'info' => '你收到这封邮件是因为我们收到了你的账号密码重置请求',
            'reset-password' => '重置密码',
            'final-summary' => '如果你没有请求重置密码，则不需要进一步操作',
            'thanks' => '感谢!'
        ],

        'customer' => [
            'new' => [
                'dear' => ':customer_name 先生',
                'username-email' => '用户名/邮箱',
                'subject' => '新客户注册',
                'password' => '密码',
                'summary' => '账号已创建，详情如下：',
                'thanks' => '感谢!',
            ],

            'registration' => [
                'subject' => '新客户注册',
                'customer-registration' => '注册成功',
                'dear' => ':customer_name 先生',
                'greeting' => '欢迎注册',
                'summary' => '账号创建成功，你可以使用邮箱和密码登录。登录后你将能够访问其他服务，包括订单、收藏和个人中心',
                'thanks' => '感谢!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - 邮箱确认',
                'subject' => '邮箱确认',
                'verify' => '确认账号',
                'summary' => '验证邮箱。请单击下面的按钮来验证'
            ],

            'subscription' => [
                'subject' => '订阅邮箱',
                'greeting' => ' 欢迎来到 ' . config('app.name') . ' - 订阅邮箱',
                'unsubscribe' => '取消订阅',
                'summary' => '这是你这段时间以来读过的' . config('app.name') . '邮件，我们不想塞满你的邮箱，如果你不希望收到最新的电子邮件，请点击下面的按钮。'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul软件版权所有',
    ],

    'response' => [
        'create-success' => ':name创建成功',
        'update-success' => ':name更新成功',
        'delete-success' => ':name删除成功',
        'submit-success' => ':name提交成功'
    ],
];
