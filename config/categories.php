<?php

/*
|--------------------------------------------------------------------------
| 8 หมวดผลิตภัณฑ์ S.SMART
|--------------------------------------------------------------------------
| ใช้ร่วมกันทั้งหน้า Home, Dealer และเพจProduct (shell page)
| น้องใบพลูสามารถเพิ่มสินค้าในแต่ละหมวดภายหลังได้ที่ view: category.blade.php
*/

return [
    'smart-switch' => [
        'no'    => '01',
        'name'  => 'สวิตช์ไฟอัจฉริยะ',
        'en'    => 'Smart Switch',
        'desc'  => 'Touch Switch, WiFi/Zigbee Switch, AG Glass Series รองรับ 1–6 ช่อง',
        'image' => 'images/proof/switch-black-marble.jpg',
        'products' => [
            ['image' => 'images/products/real/zigbee-switch-1gang-black.jpg', 'name' => 'S.Smart On/Off Switch Zigbee 1 Gang', 'spec' => '118×74×36 มม. กระจก Tempered'],
            ['image' => 'images/products/real/zigbee-switch-2gang-black.jpg', 'name' => 'S.Smart On/Off Switch Zigbee 2 Gang', 'spec' => '118×74×36 มม. กระจก Tempered'],
            ['image' => 'images/products/real/zigbee-switch-3gang-black.jpg', 'name' => 'S.Smart On/Off Switch Zigbee 3 Gang', 'spec' => '118×74×36 มม. กระจก Tempered'],
            ['image' => 'images/products/real/zigbee-switch-4gang-black.jpg', 'name' => 'S.Smart On/Off Switch Zigbee 4 Gang', 'spec' => '118×74×36 มม. กระจก Tempered'],
            ['image' => 'images/products/real/touch-panels-4colors.jpg', 'name' => 'Touch Switch Series', 'spec' => 'สีทอง / เทา / ขาว / ดำ'],
            ['image' => 'images/products/real/touch-switch-3gang-set.jpg', 'name' => 'Touch Switch 3 Gang', 'spec' => 'พร้อมชุดติดตั้งครบกล่อง'],
            ['image' => 'images/products/real/toggle-gold-eu-series.jpg', 'name' => 'EU Series Stainless Toggle', 'spec' => 'สแตนเลสสีทอง 86×86 มม.'],
            ['image' => 'images/products/real/toggle-black-4gang.jpg', 'name' => 'Stainless Toggle 4 Gang 2 Way', 'spec' => 'สีดำ 86×86 มม.'],
            ['image' => 'images/products/real/dimmer-trio.jpg', 'name' => 'Stainless Switch Dimmer', 'spec' => 'สวิตช์หรี่ไฟ ทอง / ขาว / ดำ'],
            ['image' => 'images/products/real/dimmer-silver-2gang.jpg', 'name' => 'Stainless Dimmer 2 Gang', 'spec' => 'สีเงิน 86×86 มม.'],
            ['image' => 'images/products/real/bronze-classic-2gang.jpg', 'name' => 'Classic Bronze Switch 2 Gang', 'spec' => 'ซีรีส์บรอนซ์คลาสสิก'],
            ['image' => 'images/products/real/black-bronze-4gang.jpg', 'name' => 'Black Bronze Switch 4 Gang', 'spec' => 'ซีรีส์ Black Bronze'],
            ['image' => 'images/products/real/x39uag-ag-glass.jpg', 'name' => 'S.Smart Switch รุ่น X39UAG', 'spec' => 'AG Glass — วัสดุเดียวกับ iPhone'],
            ['image' => 'images/products/real/no-neutral-zigbee-1gang-white.jpg', 'name' => 'No Neutral Zigbee Switch 1 Gang', 'spec' => '16A AC100–240V ไม่ต้องใช้สาย N'],
            ['image' => 'images/products/real/no-neutral-zigbee-2gang-white.jpg', 'name' => 'No Neutral Zigbee Switch 2 Gang', 'spec' => '16A AC100–240V ไม่ต้องใช้สาย N'],
            ['image' => 'images/products/real/no-neutral-zigbee-3gang-white.jpg', 'name' => 'No Neutral Zigbee Switch 3 Gang', 'spec' => '16A AC100–240V ไม่ต้องใช้สาย N'],
            ['image' => 'images/products/real/smart-dimmer-white.jpg', 'name' => 'S.Smart Light Switch Dimmer', 'spec' => 'สวิตช์หรี่ไฟอัจฉริยะ สีขาว'],
            ['image' => 'images/products/real/bronze-dimmer-led500w.jpg', 'name' => 'Bronze Dimmer LED 500W', 'spec' => 'สวิตช์หรี่ไฟซีรีส์บรอนซ์'],
        ],
    ],
    'ac-control' => [
        'no'    => '02',
        'name'  => 'ระบบควบคุมเครื่องปรับอากาศ',
        'en'    => 'Air Conditioning Control',
        'desc'  => 'IR Controller, Thermostat, Smart AC Controller ควบคุมแอร์ทุกยี่ห้อ',
        'image' => 'images/proof/switch-3gang-ac.jpg',
    ],
    'smart-curtain' => [
        'no'    => '03',
        'name'  => 'ระบบม่านอัจฉริยะ',
        'en'    => 'Smart Curtain',
        'desc'  => 'Curtain Motor, Roller Blind Motor รองรับ WiFi และ Zigbee',
        'image' => 'images/proof/curtain-sheer-city.jpg',
    ],
    'security' => [
        'no'    => '04',
        'name'  => 'ระบบรักษาความปลอดภัย',
        'en'    => 'Security System',
        'desc'  => 'Smart Lock, Video Doorbell, Auto Gate, กล้อง CCTV',
        'image' => 'images/proof/doorbell-teak-door.jpg',
        'products' => [
            ['image' => 'images/products/real/remootio3-gate-controller.jpg', 'name' => 'Remootio 3', 'spec' => 'ควบคุมประตูอัตโนมัติผ่านแอปมือถือ'],
            ['image' => 'images/products/real/touch-doorbell.jpg', 'name' => 'Touch Switch Bell', 'spec' => 'กริ่งสัมผัสหน้าห้องพัก'],
            ['image' => 'images/products/real/black-bronze-doorbell.jpg', 'name' => 'Black Bronze Doorbell Switch', 'spec' => 'สวิตช์กระดิ่งซีรีส์ Black Bronze'],
            ['image' => 'images/products/real/bronze-doorbell-switch.jpg', 'name' => 'Bronze Doorbell Switch', 'spec' => 'สวิตช์กระดิ่งซีรีส์บรอนซ์'],
        ],
    ],
    'sensor' => [
        'no'    => '05',
        'name'  => 'เซ็นเซอร์อัจฉริยะ',
        'en'    => 'Smart Sensor',
        'desc'  => 'PIR Motion, Door Sensor, Smoke Detector, Water Leak Sensor',
        'image' => 'images/proof/panel-scene-6key.jpg',
        'products' => [
            ['image' => 'images/products/real/smart-sensor.jpg', 'name' => 'S.Smart Door/Window Sensor', 'spec' => 'ไร้สาย — Wi-Fi / Zigbee / RF 433MHz'],
        ],
    ],
    'energy' => [
        'no'    => '06',
        'name'  => 'ระบบจัดการพลังงาน',
        'en'    => 'Energy Management',
        'desc'  => 'Smart Plug, Energy Monitor, Smart Circuit Breaker',
        'image' => 'images/proof/switch-pantry.jpg',
        'products' => [
            ['image' => 'images/products/real/energy-saving-switch.jpg', 'name' => 'Energy Saving Switch', 'spec' => 'ระบบตัดไฟอัตโนมัติ'],
            ['image' => 'images/products/real/hotel-keycard-switch.jpg', 'name' => 'Keycard Energy Saving Switch', 'spec' => 'สวิตช์คีย์การ์ดประหยัดพลังงาน'],
            ['image' => 'images/products/real/black-bronze-hotel-cutoff.jpg', 'name' => 'Black Bronze ตัวตัดไฟโรงแรม', 'spec' => 'ซีรีส์ Black Bronze'],
        ],
    ],
    'control' => [
        'no'    => '07',
        'name'  => 'ระบบควบคุมบ้านอัจฉริยะ',
        'en'    => 'Home Control',
        'desc'  => 'Smart Panel, Gateway, Scene Controller, Voice Control',
        'image' => 'images/proof/panel-hall-wide.jpg',
        'products' => [
            ['image' => 'images/products/real/scene-controller-lcd.jpg', 'name' => 'Scene Controller', 'spec' => 'เรียกฉาก Welcome / Relax / Reading / Night'],
            ['image' => 'images/products/real/scene-panel-bank.jpg', 'name' => 'Touch Control Panel', 'spec' => 'แผงสัมผัสควบคุมรวม — ติดตั้งจริงหน้างาน'],
            ['image' => 'images/products/real/touch-panel-row-black.jpg', 'name' => 'Smart Touch Panel Series', 'spec' => 'จัดชุดเรียงแผง 1–3 Gang ตามหน้างาน'],
        ],
    ],
    'accessories' => [
        'no'    => '08',
        'name'  => 'อุปกรณ์ไฟฟ้าและอุปกรณ์เสริม',
        'en'    => 'Electrical & Accessories',
        'desc'  => 'Socket, Wall Plate, LED Strip, Wiring Accessories',
        'image' => 'images/proof/lighting-led-wardrobe.jpg',
        'products' => [
            ['image' => 'images/products/real/socket-eu-stainless-set.jpg', 'name' => 'EU Stainless Socket', 'spec' => '146×90 มม. หลายเฉดสี'],
            ['image' => 'images/products/real/socket-2usb-c-silver.jpg', 'name' => 'Socket + 2 USB-C', 'spec' => 'EU14633/2USB-C สีเงิน'],
            ['image' => 'images/products/real/socket-usb-gold.jpg', 'name' => 'Socket + Duo USB สีทอง', 'spec' => 'EU33/2UB-G 86×86 มม.'],
            ['image' => 'images/products/real/socket-usb-copper.jpg', 'name' => 'Socket + USB สีทองแดง', 'spec' => 'Universal 3 ขา + USB Charger'],
            ['image' => 'images/products/real/socket-5pin-copper.jpg', 'name' => 'Universal Socket 5 ขา', 'spec' => 'ซีรีส์ทองแดง'],
            ['image' => 'images/products/real/socket-2usb-silver.jpg', 'name' => 'Socket + 2 USB สีเงิน', 'spec' => 'EU14633/2USB-S'],
            ['image' => 'images/products/real/socket-popup-floor.jpg', 'name' => 'Pop-up Floor Socket', 'spec' => 'ปลั๊กฝังพื้นแบบผุดขึ้น'],
            ['image' => 'images/products/real/outlet-tv-gold.jpg', 'name' => 'Stainless Outlet TV', 'spec' => 'EU33/TV-G สีทอง 86×86 มม.'],
            ['image' => 'images/products/real/outlet-lan-gold.jpg', 'name' => 'Stainless Outlet LAN', 'spec' => 'EU33/LAN-G สีทอง 86×86 มม.'],
            ['image' => 'images/products/real/outlet-telephone-gold.jpg', 'name' => 'Stainless Outlet Telephone', 'spec' => 'EU3/3T-G สีทอง 86×86 มม.'],
            ['image' => 'images/products/real/wall-box.jpg', 'name' => 'Wall Box', 'spec' => 'กล่องฝังผนังสำหรับงานติดตั้ง'],
            ['image' => 'images/products/real/function-accessories.jpg', 'name' => 'Function Accessories', 'spec' => 'โมดูล USB / LAN / TEL'],
        ],
    ],
];
