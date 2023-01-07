var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.57097546211174, 126.97780070856042), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
var mapTypeControl = new kakao.maps.MapTypeControl();

// 지도에 컨트롤을 추가해야 지도위에 표시됩니다
// kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
var zoomControl = new kakao.maps.ZoomControl();
map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
 
// 버튼을 클릭하면 아래 배열의 좌표들이 모두 보이게 지도 범위를 재설정합니다 
var points = [
    new kakao.maps.LatLng(37.57097546211174, 126.97780070856042),
    new kakao.maps.LatLng(37.503706315237196, 127.02413243542195),
    new kakao.maps.LatLng(37.642935884349946, 126.78991274029808),
    new kakao.maps.LatLng(37.383469646293484, 127.12266904954768),
    new kakao.maps.LatLng(35.15143019314262, 129.05959620461095),
    new kakao.maps.LatLng(37.52824098427141, 126.87498703293593)
];

// 지도를 재설정할 범위정보를 가지고 있을 LatLngBounds 객체를 생성합니다
var bounds = new kakao.maps.LatLngBounds();    

var i, marker;
for (i = 0; i < points.length; i++) {
    // 배열의 좌표들이 잘 보이게 마커를 지도에 추가합니다
    marker = new kakao.maps.Marker({ position : points[i] });
    marker.setMap(map);
    
    // LatLngBounds 객체에 좌표를 추가합니다
    bounds.extend(points[i]);
}

function setBounds(bounds) {
    // LatLngBounds 객체에 추가된 좌표들을 기준으로 지도의 범위를 재설정합니다
    // 이때 지도의 중심좌표와 레벨이 변경될 수 있습니다
    map.setBounds(bounds);
}

function setCenter(position) {            
    // 이동할 위도 경도 위치를 생성합니다 
    var moveLatLon = position;
    
    // 지도 중심을 이동 시킵니다
    map.setCenter(moveLatLon);
    var level = 3;
    map.setLevel(level);
}

//왼쪽 지점 메뉴 클릭시 지도 위치 변경되서 보이게 처리

//지점 위치 배열&객체로 생성
let areaList = [
    {position:new kakao.maps.LatLng(37.57097546211174, 126.97780070856042)},
    {position:new kakao.maps.LatLng(37.503706315237196, 127.02413243542195)},
    {position:new kakao.maps.LatLng(37.642935884349946, 126.78991274029808)},
    {position:new kakao.maps.LatLng(37.383469646293484, 127.12266904954768)},
    {position:new kakao.maps.LatLng(35.15143019314262, 129.05959620461095)},
    {position:new kakao.maps.LatLng(37.52824098427141, 126.87498703293593)}
]

const kyobo_area = document.querySelectorAll(".kyobo_area > li");

kyobo_area.forEach(function(item,index){

    item.addEventListener("click",function(e){
        e.preventDefault();
        setCenter(areaList[index].position);    
        kyobo_area.forEach(function(items,index){
            items.classList.remove("on");
        });
        item.classList.add("on");
    });
});
