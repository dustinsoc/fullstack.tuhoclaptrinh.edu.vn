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
  echo '<pre>';print_r($rs);exit; // Xem mảng dữ liệu trả về

  /********** Mẫu kết quả
  Array
  (
      [message_id] => m_VsxbeINiE4Xzrab6V53TU_5l0m2M9ETyitTLQDPXTxIDggkpOzShOs7CVn4iZ4QyLRppvxgcJyJyYuNU7_BQSA
      [thread_key] => t_3196563110445368
  )
  ***********/
?>
