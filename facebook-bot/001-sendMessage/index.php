<?
  //! 1. Khai báo biến
  $token = ''; // Chuỗi access_token lấy được từ Facebook
  $thread = ''; // ID của nhóm chat
  $message = ''; // Nội dung tin nhắn, cho phép định dạng bằng markdown

  //! 2. Khai báo thư viện và cấu hình
  new fb(); // Thư viện
  $soc->fb->setToken($token); // Cài đặt chuỗi token

  //! 3. Gửi và in ra mảng dữ liệu trả về
  $rs = $soc->fb->sendMessage($thread, $message); // Gửi
  var_dump($rs); // In mảng kết quả
?>