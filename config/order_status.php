<?php

return [

    'order_status_admin' => [
        'pending' => [
            'status' => 'Pending',
            'details' => 'Your order is currently pending'
        ],
        'accepted' => [
            'status' => 'Accepted',
            'details' => 'Your order is accepted and in packaging process 👍'
        ],
        'processed_and_ready_to_ship' => [
            'status' => 'Processed and ready to ship',
            'details' => 'Your pacakge has been processed and will be with our delivery parter soon'
        ],
        'dropped_off' => [
            'status' => 'Dropped Off',
            'details' => 'Your package has been dropped off by the seller'
        ],
        'shipped' => [
            'status' => 'Shipped',
            'details' => 'Your package has arrived at our logistics facility'
        ],
        'out_for_delivery' => [
            'status' => 'Out For Delivery',
            'details' => 'Our delivery partner will attempt to delivery your package'
        ],
        'delivered' => [
            'status' => 'Delivered',
            'details' => 'Delivered'
        ],
        'canceled' => [
            'status' => 'Canceled',
            'details' => 'Canceled'
        ]

    ],


    'order_status_vendor' => [
        'pending' => [
            'status' => 'Pending',
            'details' => 'Your order is currently pending'
        ],
        'accepted' => [
            'status' => 'Accepted',
            'details' => 'Your order is accepted and in packaging process 👍'
        ],
        'processed_and_ready_to_ship' => [
            'status' => 'Processed and ready to ship',
            'details' => 'Your package has been processed and will be with our delivery partner soon'
        ],
        'shipped' => [
            'status' => 'Shipped',
            'details' => 'Your order has been shipped and is on its way to you'
        ],
        'delivered' => [
            'status' => 'Delivered',
            'details' => 'Your order has been successfully delivered'
        ],
        'cancelled' => [
            'status' => 'Cancelled',
            'details' => 'Your order has been cancelled by the Vendor'
        ]
    ]
];
