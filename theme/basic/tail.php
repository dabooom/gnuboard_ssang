<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_PATH.'/tail.php');
    return;
}
?>

    </div>
    <div id="aside">
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div id="ft_logo"><a href="//dabooom93.cafe24.com/ssang/"><img src="/ssang/img/logo_ssang_white.png" alt=""></a></div>
        <div id="ft_mid">
            <div class="ft_link">
              <a href="/ssang/bbs/content.php?co_id=ssang">쌍산재소개</a>
              <a href="/ssang/bbs/board.php?bo_table=notice">공지사항</a>
              <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
              <!-- <a href="<?php echo get_device_change_url(); ?>">모바일버전</a> -->
            </div>
            <div class="ft_company">
                  <?php echo latest("theme/basic_tail","ft_site",1,200) ?>
        	        <!--<h2>사이트 정보</h2>
                <p class="ft_info">
                이 페이지는 포트폴리오용 페이지 입니다.<br>
                위치  : 전라남도 구례군 마산면 사도리 632<br>
                사업자 등록번호  : 123-45-67890<br>
                통신판매업신고번호 :  제 OO구 - 123호<br>
                개인정보관리책임자 :  정보책임자명<br>
        			</p> -->
        	  </div>
        </div>
        <div id="ft_sns">
            <?php echo latest("theme/basic_tail","ft_sns",1,200) ?>
            <!-- <h2>쌍산재 SNS</h2>
            <ul class="snsList">
              <li><a href="https://www.instagram.com/ssangsanje/" target="_blank"><i class="xi-instagram xi-3x"></i></a>
              </li>
              <li><a href="https://www.facebook.com/pages/%EC%8C%8D%EC%82%B0%EC%9E%AC/136639779869578"><i class="xi-facebook xi-3x"></i></a>
              </li>
              <li><a href="#"><i class="xi-kakaotalk xi-3x"></i></a>
              </li>
            </ul> -->
        </div>
      </div>

      <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
      <div id="ft_copy">Copyright &copy;
      <?php echo latest("theme/basic_tail","ft_copyright",1,200) ?>
      All rights reserved.</div>

	   </div>


    <div id="ft_quick">
      <ul class="quickSns">
        <li><a href="//instagram.com/" target="_blank"><i class="xi-instagram xi-2x"></i></a></li>
        <li><a href="//www.facebook.com/" target="_blank"><i class="xi-facebook xi-2x"></i></a></li>
        <li><a href="//www.youtube.com/" target="_blank"><i class="xi-youtube-play xi-2x"></i></a></li>
        <li><a href="//open.kakao.com/o/" target="_blank"><i class="xi-kakaotalk xi-2x"></i></a></li>
      </ul>
      <div class="quickBtn">
        <p name="quick-toggle-btn" class="quickToggle"><i class="xi-share-alt-o xi-2x"></i></p>
        <p name="quick-toggle-btn" class="quickToggle" style="display:none"><i class="xi-share-alt xi-2x"></i></p>
        <button type="button" id="top_btn">
          <i class="xi-angle-up xi-2x"></i><span class="sound_only">상단으로</span>
        </button>
     </div>
    </div>

    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

            $("#ft_quick>.quickSns").hide();
            $("p[name='quick-toggle-btn']").click(function(){
            $("#ft_quick>.quickSns").slideToggle();
            $("p[name='quick-toggle-btn']").slideToggle();
            });
    });


    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
