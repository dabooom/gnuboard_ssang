<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head_wide.php');
?>


<?php
echo latest('theme/main_slider', 'slide', 4, 23);
?>

<!-- <?php

// echo latest('latest 폴더속 폴더명', '게시판테이블명', 출력개수, 제목길이);
// 내가 사용하는 테마 폴더안에 skin/latest 폴더안에 넣었다면,
// echo latest('theme/latest 폴더속 폴더명', '게시판테이블명', 출력개수, 제목길이);

?> -->


<?php
echo latest('theme/swiper_card', 'promotion', 5, 23);
?>

<?php
include_once(G5_THEME_PATH.'/section_place.php');
?>

<?php
//echo latest('theme/section_overview', 'overview', 8, 23);
?>

<?php
include_once(G5_THEME_PATH.'/section_media.php');
?>

<?php
include_once(G5_THEME_PATH.'/section_map.php');
?>

<?php
include_once(G5_THEME_PATH.'/tail.php');
