<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$thumb_width = ($options['thumb_width'])?$options['thumb_width']:300;
$thumb_height = ($options['thumb_height'])?$options['thumb_height']:300;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/slick/slick.css">', 0);
add_javascript('<script src="'.$latest_skin_url.'/slick/slick.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php
    for ($i=0; $i<$list_count; $i++) {

         $img_link_html = '';

        // $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

				for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['src'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            // $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
						$img_content = $img;
            // $img_link_html = run_replace('thumb_image_tag', $img_content, $thumb);
        }
    ?>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>

<section class="main_overview">
	<div class="inner">
		<div class="title">
			<div class="t1">OVERVIEW</div>
			<div class="t2">지리산<br/>쌍산재에서 쉬어가세요</div>
			<div class="progress">
				<div class="bar"></div>
			</div>
			<div class="arrows">
				<button class="arr prev"></button>
				<button class="arr next"></button>
			</div>
		</div>

		<div class="mainSlider">
			<div class="item">
				<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
				<a href="/ssang/bbs/board.php?bo_table=space">
					<div class="inner">
						<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
						<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
					</div>
				</a>
			</div>
			<div class="item">
				<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
				<a href="/ssang/bbs/board.php?bo_table=space">
					<div class="inner">
						<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
						<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
					</div>
				</a>
			</div>
			<div class="item">
				<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
				<a href="/ssang/bbs/board.php?bo_table=space">
					<div class="inner">
						<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
						<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
					</div>
				</a>
			</div>
			<div class="item">
				<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
				<a href="/ssang/bbs/board.php?bo_table=space">
					<div class="inner">
						<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
						<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
					</div>
				</a>
			</div>
		</div>

		<div class="subSliders">
			<div class="inner">
				<div class="subSlider sub1">
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
				</div>
				<div class="subSlider sub2">
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
				</div>
				<div class="subSlider sub3">
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
				</div>
				<div class="subSlider sub4">
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
				</div>
				<div class="subSlider sub5">
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
					</div>
					<div class="item">
						<div class="img" style="background-image: url(<?php //echo $img_content;?>) ;"></div>
						<a href="/ssang/bbs/board.php?bo_table=space">
							<div class="inner">
								<div class="t1"><?php //echo $list[$i]['subject']; ?></div>
								<div class="t2"><?php //echo cut_str(strip_tags($list[$i]['wr_content']), 80)?></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
$('.main_overview .mainSlider').on('init', function(event, slick){
		$('.main_overview .title .progress .bar').css({
			width: (100/slick.slideCount) + "%"
		});
	});

	$('.main_overview .mainSlider').slick({
	  infinite: true,
	  arrows: false,
	  draggable: false,
	  autoplay: true,
	  autoplaySpeed: 6000,
	  swipe: false
	});

	$('.main_overview .mainSlider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		$('.main_overview .title .progress .bar').css({
			width: (100/slick.slideCount)*(nextSlide+1) + "%"
		});
	});

	$('.main_overview .subSlider').on('init', function(slick){
		$(this).find('.item').height($(this).height());
	});

	$('.main_overview .subSlider').on('setPosition', function(slick){
		$(this).find('.item').height($(this).height());
	});

	$('.main_overview .subSlider').slick({
	  infinite: true,
	  arrows: false,
	  draggable: false,
	  autoplay: true,
	  autoplaySpeed: 6000,
	  swipe: false
	});

	$('.main_overview .title .arr.prev').click(function(e) {
		$('.main_overview .mainSlider').slick('slickPrev');
		$('.main_overview .subSlider').slick('slickPrev');
	});

	$('.main_overview .title .arr.next').click(function(e) {
		$('.main_overview .mainSlider').slick('slickNext');
		$('.main_overview .subSlider').slick('slickNext');
	});
</script>
