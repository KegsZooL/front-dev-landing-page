<div class="preview-of-course-structure">
<div class="description-of-the-proffesion-with-recording-elements">
    <h2>Профессиия</h2>
    <h1>Frontend - разработчик</h1>
    <p>
    Научитесь писать код для сайтов и веб-сервисов — с нуля за 9 месяцев. 
    Сделаете первые шаги или смените направление в IT.
    </p>
    <div class="course-entry-structure">
    <div class="course-entry-structure__content">
        <div class="start-of-date-to-stream">
        <div class="start-of-date-to-stream__description">
            <p>Дата старта потока</p>
            <h2>26 сентября<h2>
        </div>
        </div>
        <div class="discount-expiration-date">
            <div class="discount-expiration-date__description">
                <p>Дата окончания скидок</p>
                <h2>
                <?php 
                    $course_end_date = get_option('course_end_date');
                    if ($course_end_date) {
                        $date = DateTime::createFromFormat('Y-m-d', $course_end_date);

                        if ($date) {
                            echo esc_html( date_i18n('j F', $date->getTimestamp()) );
                        } else { echo 'Некорректный формат даты'; }
                    } else {
                        echo '30 декабря';
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <a class="course-entry-button smooth-goto" href="#tariffs" onclick="toggleMenu">Начать обучение</a>
    </div>
</div>
<img src="<?php echo get_template_directory_uri();?>/resources/svg/developer-picture.svg" class="icon-developer" alt="developer">

<div class="description-of-the-proffesion-with-recording-elements__mobile">
    <div class="top-content">
    <div class="top-content__description">
        <h2>Профессиия</h2>
        <h1>Frontend - разработчик</h1>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/resources/svg/developer-picture.svg" alt="developer">
    </div>
    <div class="bottom-content">
    <p>
        Научитесь писать код для сайтов и веб-сервисов — с нуля за 9 месяцев. 
        Сделаете первые шаги или смените направление в IT.
    </p>
    <div class="course-entry-structure">
        <div class="course-entry-structure__content">
        <div class="start-of-date-to-stream">
            <div class="start-of-date-to-stream__description">
            <p>Дата старта потока</p>
            <h2>26 сентября<h2>
            </div>
        </div>
        <div class="discount-expiration-date">
            <div class="discount-expiration-date__description">
            <p>Дата окончания скидок</p>
            <h2>20 сентября<h2>
            </div>
        </div>
        </div>
        <a class="course-entry-button smooth-goto" href="#tariffs" onclick="toggleMenu">Начать обучение</a>
    </div>
    </div>
</div>

</div>