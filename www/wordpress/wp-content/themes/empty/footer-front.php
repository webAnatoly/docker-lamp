<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package empty
 */

?>



<footer class="footer">
                <div class="arrow-btn footer-arrow-btn arrow-btn--reversed" role="button" onclick="location.href='#wrapper-top'">
                  <div class="arrow-btn__top-arrow">
                    <div class="arrow-btn__decorator"></div><svg height="84" width="84" viewBox="0 0 84 84" class="svg__arrow-btn-top-arrow">
<polygon points="0,0 42,15 83,0 42,80" style="fill:#b8574d;stroke:#b8574d;stroke-width:1" />
</svg>
                  </div>
                  <div class="arrow-btn__bottom-arrow"><svg height="84" width="84" viewBox="0 0 84 84" class="svg__arrow-btn-bottom-arrow">
<polygon points="0,0 42,11 83,0 42,60" style="fill:#b8574d;stroke:#b8574d;stroke-width:1" />
</svg>
                  </div>
                </div>
        <div class="row footer__row">
          <div class="col-6 footer__col"></div>
          <div class="col-6 footer__col">
            <p>Все права защищены. &copy;</p>
            <p>RED-DRAGON 2019</p>
          </div>
        </div>
      </footer>
      <!-- <script src="./js/main.js"></script> -->
    </div>
		<?php wp_footer(); ?>
  </body>
</html>
