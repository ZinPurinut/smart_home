<?php

/*
|--------------------------------------------------------------------------
| 8 หมวดผลิตภัณฑ์ S.SMART
|--------------------------------------------------------------------------
| ใช้ร่วมกันทั้งหน้า Home, Dealer และเพจหมวดสินค้า (shell page)
| น้องใบพลูสามารถเพิ่มสินค้าในแต่ละหมวดภายหลังได้ที่ view: category.blade.php
*/

return [
    'smart-switch' => [
        'no'    => '01',
        'name'  => 'สวิตช์ไฟอัจฉริยะ',
        'en'    => 'Smart Switch',
        'desc'  => 'Touch Switch, WiFi/Zigbee Switch, AG Glass Series รองรับ 1–6 ช่อง',
        'image' => 'images/proof/switch-black-marble.jpg',
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
    ],
    'sensor' => [
        'no'    => '05',
        'name'  => 'เซ็นเซอร์อัจฉริยะ',
        'en'    => 'Smart Sensor',
        'desc'  => 'PIR Motion, Door Sensor, Smoke Detector, Water Leak Sensor',
        'image' => 'images/proof/panel-scene-6key.jpg',
    ],
    'energy' => [
        'no'    => '06',
        'name'  => 'ระบบจัดการพลังงาน',
        'en'    => 'Energy Management',
        'desc'  => 'Smart Plug, Energy Monitor, Smart Circuit Breaker',
        'image' => 'images/proof/switch-pantry.jpg',
    ],
    'control' => [
        'no'    => '07',
        'name'  => 'ระบบควบคุมบ้านอัจฉริยะ',
        'en'    => 'Home Control',
        'desc'  => 'Smart Panel, Gateway, Scene Controller, Voice Control',
        'image' => 'images/proof/panel-hall-wide.jpg',
    ],
    'accessories' => [
        'no'    => '08',
        'name'  => 'อุปกรณ์ไฟฟ้าและอุปกรณ์เสริม',
        'en'    => 'Electrical & Accessories',
        'desc'  => 'Socket, Wall Plate, LED Strip, Wiring Accessories',
        'image' => 'images/proof/lighting-led-wardrobe.jpg',
    ],
];
