<?php
	get_header(); ?>

<section class="bg-container-firstview">
	<div class="firstview-container">
		<div class="firstview-content spacer">
			<p class="firstview-scroll">SCROLL</p>
		</div>
		<!-- <div class="firstview-content image">
			<img src="<?php // echo get_stylesheet_directory_uri(); ?>/images/img_front-page_firstview.png" alt="" class="firstview-image">
		</div> -->
		<div class="firstview-content video">
			<video src="<?php echo get_stylesheet_directory_uri(); ?>/video/fv01_movie.mp4" autoplay loop muted playsinline class="firstview-video">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_firstview.png" alt="" class="firstview-image">
			</video>
			<h2 class="firstview-title">
				<span class="main">事業用不動産の<br />プロフェッショナル集団</span>
				<span class="sub">目の前の経営者・投資家に寄り添い<br />誠実に価値を届け続ける</span>
			</h2>
		</div>
	</div>
</section>

<section class="bg-container-video">
	<div class="video-container">
		<div class="video-content">
			<h2 class="video-title">
				<span class="en">MOVIE</span>
				<span class="jp">スペシャルムービー</span>
			</h2>
			<a class="video-link js-video-link">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_video-link.png" alt="" class="video-link-image">
				<p class="video-link-copy">動画で伝えたい東洋不動産</p>
				<div class="video-link-more">
					<span class="text">VIEW MOVIE</span>
					<span class="pict">→</span>
				</div>
			</a>
			<div class="video-embed-container">
				<div class="video-embed-content">
					<h3 class="video-embed-head">東洋不動産の変わらない姿勢</h3>
					<div class="video-embed-frame">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/06mSlLtvTtA?si=bvNGtxd-RwGWj78N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
				<div class="video-content">
					<h3 class="video-embed-head">事業用不動産の仕事の醍醐味</h3>
					<div class="video-embed-frame">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/_drH4cZewhg?si=rGI-g-rC8ZCR3QQ-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-container-about">
	<div class="about-container">
		<div class="about-content">
			<h2 class="about-title">
				<span class="en">ABOUT US</span>
				<span class="jp">私たちが目指すもの</span>
			</h2>
			<p class="about-lede">事業用・投資用不動産のプロフェッショナル集団として、<br />どんなに時代が変わっても私たちが求め続けるもの。</p>
			<div class="about-frame">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_about-image.png" alt="" class="about-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>about/" class="about-link">
					<span class="text">VIEW ABOUT US</span>
					<span class="pict">→</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-container-uniqueness">
	<div class="uniqueness-container">
		<div class="uniqueness-content">
			<h2 class="uniqueness-title">
				<span class="en">UNIQUENESS</span>
				<span class="jp">当社の特徴</span>
			</h2>
			<p class="uniqueness-lede">さまざまな不動産会社がある中で、<br />当社が努力し積み重ねてきた「圧倒的な強み」と「特徴」</p>
			<div class="uniqueness-frame">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_uniqueness-image.png" alt="" class="uniqueness-image">
			</div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>uniqueness/" class="uniqueness-link">
				<span class="text">VIEW UNIQUENESS</span>
				<span class="pict">→</span>
			</a>
		</div>
	</div>
</section>

<section class="bg-container-message">
	<div class="message-container">
		<div class="message-content">
			<h2 class="message-title">
				<span class="en">MESSAGE</span>
				<span class="jp">社長メッセージ</span>
			</h2>
			<div class="message-frame">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_message-image.png" alt="" class="message-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>message/" class="message-link">
					<span class="text">VIEW MESSAGE</span>
					<span class="pict">→</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-container-people">
	<div class="people-container">
		<div class="people-content">
			<h2 class="people-title">
				<span class="en">PEOPLE</span>
				<span class="jp">働く仲間たち</span>
			</h2>

			<ul class="people-list">
				<li class="people-item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>people/fujishiro/" class="people-item-link">
						<div class="people-image-frame">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_people-image-01.png" alt="" class="people-image">
						</div>
						<div class="people-info">
							<div class="people-name">
								<p class="jp">藤代 修平</p>
								<p class="en">FUJISHIRO SHUHEI</p>
							</div>
							<p class="people-division">九州営業部</p>
						</div>
					</a>
				</li>
				<li class="people-item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>people/tsuduki/" class="people-item-link">
						<div class="people-image-frame">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_people-image-02.png" alt="" class="people-image">
						</div>
						<div class="people-info">
							<div class="people-name">
								<p class="jp">都築 美羽</p>
								<p class="en">TSUZUKI  MIU</p>
							</div>
							<p class="people-division">東京営業第一部</p>
						</div>
					</a>
				</li>
				<li class="people-item">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>people/koyama/" class="people-item-link">
						<div class="people-image-frame">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_people-image-03.png" alt="" class="people-image">
						</div>
						<div class="people-info">
							<div class="people-name">
								<p class="jp">小山 大造</p>
								<p class="en">KOYAMA DAIZO</p>
							</div>
							<p class="people-division">東京戦略開発部</p>
						</div>
					</a>
				</li>
			</ul>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>people/" class="people-link">
				<span class="text">VIEW ALL PEOPLE</span>
				<span class="pict">→</span>
			</a>
		</div>
	</div>
</section>

<section class="bg-container-crosstalk">
	<div class="crosstalk-container">
		<div class="crosstalk-content">
			<h2 class="crosstalk-title">
				<span class="jp">会社の雰囲気</span>
				<span class="en">CROSS TALK</span>
			</h2>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_crosstalk-image.png" alt="" class="crosstalk-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>crosstalk/" class="crosstalk-link">
				<span class="text">VIEW CROSS TALK</span>
				<span class="pict">→</span>
			</a>
		</div>
	</div>
</section>

<section class="bg-container-career">
	<div class="career-container">
		<div class="career-content">
			<h2 class="career-title">
				<span class="jp">キャリアパス</span>
				<span class="en">CAREER PATH</span>
			</h2>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_career-image.png" alt="" class="career-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>career/" class="career-link">
				<span class="text">VIEW CAREER</span>
				<span class="pict">→</span>
			</a>
		</div>
	</div>
</section>

<section class="bg-container-recruitment">
	<div class="recruitment-container">
		<div class="recruitment-content">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_front-page_recruitment-image.png" alt="" class="recruitment-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>recruitment/" class="recruitment-link">
				<div class="recruitment-label">
					<span class="jp">採用情報</span>
					<span class="en">RECRUIT</span>
				</div>
				<div class="recruitment-link-item">
					<span class="text">VIEW RECRUIT</span>
					<span class="pict">→</span>
				</div>
			</a>
		</div>
	</div>
</section>

<dialog class="dialog js-video is-can-scroll">
	<div class="dialog-video-content">
		<div class="dialog-video-tab-wrap">
			<input id="TAB-01" type="radio" name="TAB" class="dialog-video-tab-switch" checked="checked" /><label class="dialog-video-tab-label" for="TAB-01">Movie #01</label>
			<div class="dialog-video-tab-content">
				<h3 class="dialog-video-tab-head">東洋不動産の変わらない姿勢</h3>
				<div class="dialog-video-tab-block">
					<div class="embed">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/06mSlLtvTtA?si=GK_aR3fdogZiLLCf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<input id="TAB-02" type="radio" name="TAB" class="dialog-video-tab-switch" /><label class="dialog-video-tab-label" for="TAB-02">Movie #02</label>
			<div class="dialog-video-tab-content">
				<h3 class="dialog-video-tab-head">事業用不動産の仕事の醍醐味</h3>
				<div class="dialog-video-tab-block">
					<div class="embed">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/_drH4cZewhg?si=rGI-g-rC8ZCR3QQ-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<button class="js-video-close dialog-video-close"></button>
	</div>
</dialog>

<?php
	get_footer(); ?>