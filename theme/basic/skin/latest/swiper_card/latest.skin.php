<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 375;
$thumb_height = 285;

?>

<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/dist/css/swiper.min.css">
<script src="<?php echo $latest_skin_url ?>/dist/js/swiper.min.js"></script>

<section id="mainEvent" class=" promotion">

	<div class="inner">

		<div class="title">PROMOTION</div>
		<div class="t1">계절에 따라 변화하는 쌍산재의 풍경</div>
		<div class="t2">
			<p>그 풍경을 담은 다양한 프로모션과 이벤트들을 만나보세요</p>
			<a href="/ssang/bbs/board.php?bo_table=notice" class="btn">자세히 보기</a>
		</div>
    <div class="swiper-container swiper1">
	    <div class="swiper-wrapper">

	        <?php
	        for ($i=0; $i<count($list); $i++) {
	        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

	        if($thumb['src']) {
	            $img = $thumb['src'];
	        } else {
	            $img = $latest_skin_url.'/img/noimg.png';
	            $thumb['alt'] = '등록된 이미지가 없습니다.';
	        }
	        //$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
	        $img_content = $img;
	        ?>


	        <div class="swiper-slide" onclick="location.href='/ssang/bbs/board.php?bo_table=notice';" style="cursor: pointer;">
	            <div class="sw_tit">
	                <?php echo $list[$i]['subject'] ?>
	            </div>
	            <div class="sw_sub">
	                <?php echo cut_str(strip_tags($list[$i]['wr_content']), 80)?>
	            </div>
	            <div class="sw_img" style="background-image: url('<?php echo $img_content; ?>')";>
	            </div>
	        </div>

	        <?php }  ?>
	        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
	        <div class="swiper-slide">
	            <div class="sw_sub">
	                등록된 게시물이 없습니다.
	            </div>
	        </div>
	        <?php }  ?>


	    </div>
	    <!-- 페이징 -->
	    <div class="swiper-pagination swiper-pagination1"></div>

	    <!-- 좌우버튼 -->
	    <!-- <div class="swiper-button-next"></div>
	    <div class="swiper-button-prev"></div> -->


	</div>
</div>
</section>

<script>
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
				slidesPerView: 3,
        spaceBetween: 30,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, // 루프(반복)옵션 활성화시 주석해제
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        centeredSlides: true,
        // spaceBetween: 15, //좌우측 박스 여백이 필요할 때

    });

</script>
