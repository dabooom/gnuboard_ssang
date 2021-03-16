<!-- 페이지 하단 지도 삽입 -->
<div id="mapWrap">
  <div class="mapTitle">LOCATION</div>
  <div id="map" style="width:100%;height:600px;"></div>
  <div class="infoArea active" id="branch_skmh">
    <div class="infoHead">
      <img src="<?php echo G5_IMG_URL ?>/logo_ssang_re.png" alt="로고">
    </div>
    <ul class="cont">
    <li>
        <div class="tit">주소</div>
        <div class="txt">전라남도 구례군 마산면 사도리 장수길 32</div>
      </li>
      <li>
        <div class="tit">전화번호</div>
        <div class="txt">061-782-5179</div>
      </li>
    </ul>
 </div>

</div>




<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=fe172318a96065aabe3c068246706bbb"></script>
<script type="text/javascript">
    var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
    var options = { //지도를 생성할 때 필요한 기본 옵션
      center: new kakao.maps.LatLng(35.21576, 127.49806), //지도의 중심좌표.
      level: 3 //지도의 레벨(확대, 축소 정도)
    };

    var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

    // 지도를 클릭한 위치에 표출할 마커입니다
    var marker = new kakao.maps.Marker({
    // 지도 중심좌표에 마커를 생성합니다
    position: map.getCenter()
    });
    // 지도에 마커를 표시합니다
    marker.setMap(map);

    // 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
    var zoomControl = new kakao.maps.ZoomControl();
    map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);

    // 지도가 확대 또는 축소되면 마지막 파라미터로 넘어온 함수를 호출하도록 이벤트를 등록합니다
    kakao.maps.event.addListener(map, 'zoom_changed', function() {


    });

</script>
