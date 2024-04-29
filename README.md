Sau khi tải code về xong và trước khi chạy có 3 lưu ý:
  - Đầu tiên hãy giải nén file vendor.zip, giải nén tại thư mục chính.
  - Thứ 2 là sau khi tải xong về các bạn lưu ý cho anh là vào server/connection, tại file connection này có 2 hàm là sendActivationEmail với sendResetpasswordEmails, tại mỗi hàm các bạn hãy tìm cho anh dòng "$mail->Body" và cập nhật địa chỉ lại cho phù hợp với máy của mình nhé.
  - Thứ 3 là nhớ Import database vào phpmyadmin để có thể hoạt động được nhé.
Khi đăng ký tài khoản các bạn nhớ đăng ký bằng gmail thật của mình để server gửi mã đến kích hoạt tài khoản nhé.
Tai khoản chính để test hệt thống có mail và mật khẩu lần lượt là admin@gmail.com và 123456
QUAN TRỌNG: KHI CÁC BẠN PUSH CODE LẦN ĐẦU TIÊN NHỚ TẠO BRANCH VÀ PUSH VÀO BRANCH NHÉ, NHỮNG LẦN SAU CỨ PUSH VÀO BRANCH CỦA MÌNH THÔI, KHÔNG CẦN TẠO LẠI NỮA
