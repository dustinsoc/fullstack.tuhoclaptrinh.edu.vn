<?
//! 1. Khai báo biến
$token = ''; // Chuỗi access_token lấy được từ Facebook
// Chuỗi JSON sử dụng template, xem thêm tại https://developers.facebook.com/docs/messenger-platform/send-messages/templates
$json = '{
  "recipient": {
    "thread_key": "3196563110445368"
  },
  "message": {
    "attachment": {
      "type": "template",
      "payload": {
        "template_type": "button",
        "text": "8h30 rồi kìa mấy má, vào System log giờ lẹ. 😎",
        "buttons": [
          {
            "type": "web_url",
            "url": "https://system.socjsc.com/vi/tasks/",
            "title": "Vào Sysem"
          }
        ]
      }
    }
  }
}';

//! 2. Khai báo thư viện và cấu hình
new fb(); // Thư viện
$soc->fb->setToken($token); // Cài đặt chuỗi token

//! 3. Gửi và in ra mảng dữ liệu trả về
$rs = $soc->fb->sendJsonMessage(json_decode($json, true));
echo '<pre>';print_r($rs);exit; // Xem mảng dữ liệu trả về
?>
