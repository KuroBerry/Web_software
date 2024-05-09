Sau khi tải code về xong và trước khi chạy có 3 lưu ý:
  - Đầu tiên hãy giải nén file vendor.zip, giải nén tại thư mục chính.
  - Thứ 2 là sau khi tải xong về các bạn lưu ý cho anh là vào server/connection, tại file connection này có 2 hàm là sendActivationEmail với sendResetpasswordEmails, tại mỗi hàm các bạn hãy tìm cho anh dòng "$mail->Body" và cập nhật địa chỉ lại cho phù hợp với máy của mình nhé.
  - Thứ 3 là nhớ Import database vào phpmyadmin để có thể hoạt động được nhé.
Khi đăng ký tài khoản các bạn nhớ đăng ký bằng gmail thật của mình để server gửi mã đến kích hoạt tài khoản nhé.

Tài khoản chính để test hệt thống có mail và mật khẩu lần lượt là admin@gmail.com và 123456

QUAN TRỌNG: KHI CÁC BẠN PUSH CODE LẦN ĐẦU TIÊN NHỚ TẠO BRANCH VÀ PUSH VÀO BRANCH NHÉ, NHỮNG LẦN SAU CỨ PUSH VÀO BRANCH CỦA MÌNH THÔI, KHÔNG CẦN TẠO LẠI NỮA

Sau bản cập nhật mới nhất (ngày 8/5/2024), anh đã cập nhật hoàn chỉnh tính năng quản lý đơn hàng cho trang web. Các bạn lưu ý những điều sau: 
  - Những đơn hàng "order" lưu trong database sẽ không được tạo.
  - Mỗi lần test các tính năng "Duyệt, xóa" đơn hàng thì trạng thái đơn hàng sẽ được cập nhật và lưu vào hệ thống.
  - Để tiện nhất các bạn hãy dùng cú pháp sau"

    
    INSERT INTO `orders` (`id`, `status`, `customer_id`, `order_list`) VALUES 
    (NULL, '0', '2', '1,3,5,7'),
    (NULL, '0', '3', '2,4,6'),
    (NULL, '0', '4', '1,2,3,4,5'),
    (NULL, '0', '5', '3,4,5,6,7'),
    (NULL, '0', '6', '2,4,6,8'),
    (NULL, '0', '7', '1,3,5,7,9');

    
    để có thể tạo lại các đơn hàng ngẫu nhiên nhanh nhất (tiện cho việc demo).
