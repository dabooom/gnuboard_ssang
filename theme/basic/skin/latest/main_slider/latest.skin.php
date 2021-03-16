<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = ($options['thumb_width'])?$options['thumb_width']:1920;
$thumb_height = ($options['thumb_height'])?$options['thumb_height']:680;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/slick/slick.css">', 0);
add_javascript('<script src="'.$latest_skin_url.'/slick/slick.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="main_slider">
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = $latest_skin_url.'/img/no_img.png';
    }

	$txt_big = ($list[$i]['wr_1'])?$list[$i]['wr_1']:'구례 쌍산재';
	$txt_small = ($list[$i]['wr_2'])?$list[$i]['wr_2']:'지리산과 섬진강에 기댄 명당';

	$list[$i]['href'] = ($list[$i]['wr_link1'])?$list[$i]['wr_link1']:$list[$i]['href'];

    ?>
	<div class="slide" style="background:#1f202a url(<?php echo $img;?>) no-repeat 50% 0;">
		<div class="wrap">
			<div class="txt_box">
				<strong class="txt_big"><?php echo $txt_big;?></strong>
				<span><?php echo $txt_small;?></span>
			</div>
			<a href="/ssang/bbs/content.php?co_id=ssang" class="ico_more">자세히보기</a>
      <!-- <div class="visual-nav">
        <div><button><span>가정문</span>정원 속 또다른 정원</button></div>
        <div><button><span>영벽문</span>저수지로 향하는 문</button></div>
        <div><button><span>경암당</span>조상을 기리기 위한 블라</button></div>
        <div><button><span>안채</span>안채 블라블라블라 욥욥</button></div>
      </div> -->
		</div>
	</div>
    <?php }  ?>
    <?php
	if (count($list) == 0) { //게시물이 없을 때
		for ($i=1; $i<=3; $i++) {
	?>
	<div class="slide" style="background:#1f202a url(<?php echo $latest_skin_url;?>/img/bg_visual_0<?php echo $i;?>.jpg) no-repeat 50% 0;">
		<div class="wrap">
			<div class="txt_box">
				<strong class="txt_big">IMAGE 0<?php echo $i;?></strong>
				<span>쉽게 관리하는 배너스킨</span>
			</div>
      <a href="/ssang/bbs/group.php?gr_id=space" class="ico_more">자세히보기</a>
		</div>
	</div>
	<?php
		} //for
	}  //if
	?>
</div>

<script type="text/javascript">
	$(function(){
		$(".main_slider").slick({
			dots: false,
			arrows:true,
			infinite: true,
			autoplay:true,
			autoplaySpeed:5000,//5초
			prevArrow: "<button type='button' class='btn_arrow btn_prev'>PREV</button>",
			nextArrow: "<button type='button' class='btn_arrow btn_next'>NEXT</button>"
		});
	});
	$('.slick-dots, .slick-arrow').on('click', function() {
		$('.main_slider').slick('slickPlay');
	});

  // 다영 추가
  // $('.slide>.wrap>.visual-nav>div>button').addClass("active");



</script>
