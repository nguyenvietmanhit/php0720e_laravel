<?php
/**
 * 1 - Laravel
 * + Framework: giống như MVC thuần
 * + CMS (WP, Zoomla...): hệ quản trị nội dung
 * 2 - Cài đặt:
 * + Laravel cài đặt dựa trên version PHP hiện tại
 * + Sử dụng tool Composer để cài đặt
 * + Composer: công cụ quản lý thư viện, vì Laravel
 * cần các thư viện bên thứ 3 thì mới chạy đc
 * + composer install
 * + composer update
 * 3 - Cấu trúc thư mục của Laravel
 * 4 - artisan
 * Học Laravel phải biết dùng artisan: tạo rất nhiều
 * thứ chuẩn Laravel bằng artisan
 * 5 - CODE CRUD quản lý sản phẩm
 * + Tạo CSDL: php0720e_laravel
 * CREATE DATABASE IF NOT EXISTS php0720e_laravel
 * CHARACTER SET utf8 COLLATE utf8_general_ci
 * + Tạo bảng products: dùng artisan để tạo thông
 * qua cơ chế migrate
 * id: khóa chính
 * name: tên sp, varchar
 * price: giá sp, int
 * description: chi tiết sp, TEXT
 * status: trạng thái sp: 0 - ẩn, 1 - hiển thị, tinyint
 * created_at: ngày tạo bản ghi, t ự động sinh
 * updated_at: ngày cập nhật cuối
 * + Tạo file migrate cho chức năng tạo bảng
 * File sinh ra nằm tại database/migration
 * + Chạy lệnh sau để tạo cấu trúc CSDL theo các
 * file migrate đã tạo:
 * php artisan migrate
 * + Cần kết nối CSDL thì mới chạy đc migrate, cài
 * đặt tại file .env
 * + Tạo controller chuẩn Laravel bằng artisan:
 * php artisan make:controller ProductController
 * + Tạo model chuẩn Laravel bằng artisan:
 * php artisan make:model Product
 * + Tạo view: tạo thủ công trong resources:
 * Laravel sử dụng Engine Template là Blade cho view
 * resources/views/
 *                /layouts/main.blade.php
 *                /products/index.blade.php
 *                         /create.blade.php
 *                         /update.blade.php
 *                         /detail.blade.php
 *
 * + Khai báo các route để truy cập chức năng thông
 *qua url của trình duyệt: routes/web.php
 */
