# Laravel 11 Livewire 強大且可擴充的聊天室

引入 namu 的 wirechat 套件來擴增強大且可擴充的聊天室，無論是要進行一對一即時通訊，還是透過專屬聊天室交流，協助您有條不紊地與團隊成員合作。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行 __Artisan__ 指令的 __reverb:start__ 來執行 Reverb 伺服器啟動。
```sh
$ php artisan reverb:start
```
- 執行 __Artisan__ 指令的 __queue:work__ 來執行隊列作業器啟動來處理訊息廣播和其他隊列任務。
```sh
$ php artisan queue:work --queue=messages,default
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/chats` 來進行聊天室加入。

----

## 畫面截圖
![](https://i.imgur.com/Xi1sJt4.gif)
> 如要與一群人或機構討論特定主題、專案或共同興趣，建議您建立聊天室

![](https://i.imgur.com/Qea0TZA.png)
> 為需要詳細討論的事務建立討論串
