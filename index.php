<script type="text/javascript">
var oldUrl = 'fluke103.github.io/se/'; // 기본 URL
var changeUrl = 'http://leemobia.com/'; // 기본 URL로 사이트 접속 시 변경하고 싶은 URL
var urlString = location.href;
if (urlString.match(oldUrl)){
    window.location.replace(urlString.replace(oldUrl, changeUrl));
} else {
    // 주소창에 입력한 주소가 oldURL과 다를 경우 아무런 행위도 하지않는다.
}
</script>