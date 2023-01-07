<?php 
    $title = "지점 위치";
    include "../common/header.php";
?>
<div class="loc-cont">
    <div class="t-location">
        <div class="center">
            <h2>교보문고 대표 지점</h2>
        </div>
    </div>
    <div class="f-location">
        <div class="center">
            <div class="location_Wrap">
                <ul class="kyobo_area">
                    <li class="on"><a href="#">광화문점</a></li>
                    <li><a href="#">강남점</a></li>
                    <li><a href="#">일산점</a></li>
                    <li><a href="#">분당점</a></li>
                    <li><a href="#">부산점</a></li> 
                    <li><a href="#">목동점</a></li> 
                </ul>
                <div id="map"></div>
                <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=b60658d4e27eb38bb0923a2fde340253"></script>
            </div>
        </div>
    </div>
</div>
<?php 
    $map = "map";
    include "../common/footer.php";
?>