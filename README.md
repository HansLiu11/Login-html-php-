前端介面是一 APP 登入畫面，會將接收到的 http response 透過 javascript 的 alert() 顯示於網頁上方
後端程式，用來回應前端程式的 http request，判斷其是否登入成功並做出正確的回應
正確的帳號：ainimal@123
正確的密碼：123123

輸入帳號、密碼皆正確時，response success
輸入帳號、密碼任一錯誤時，response fail
輸入有欄位空白時則 response empty

ps: app.js裡的 url:"http://localhost:8000/login" 使用時出現error
改為url:"login.php" 才可以
# Login-html-php-
