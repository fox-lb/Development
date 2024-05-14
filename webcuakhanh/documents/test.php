<button onclick="openPopup()">Mở cửa sổ nổi</button>
<script>function openPopup() {
    // Cài đặt các thuộc tính cho cửa sổ nổi
    var width = 600;
    var height = 400;
    var left = (window.innerWidth - width) / 2;
    var top = (window.innerHeight - height) / 2;
    var options = 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + width + ', height=' + height + ', top=' + top + ', left=' + left;

    // Mở cửa sổ nổi
    var popup = window.open('document.php', 'popup', options);
}</script>