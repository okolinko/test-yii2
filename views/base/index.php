<?php

/**
 * @var yii\web\View $this
 */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h2>Реалізувати дві сторінки:</h2>
        <br>
        <div style="width: 70%;display: flex;flex-direction: column;flex-wrap: nowrap;align-content: flex-start;justify-content: flex-start;align-items: flex-start;margin-left: auto;margin-right: auto;">
            <p class="lead mb-3 display-7">1. Сторінка з формою для створення користувача;</p>
            <p class="lead mb-3 display-7">2. Сторінка з таблицею даних для відображення переліку створених користувачів;</p>
        </div>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <h4>Загальні умови:</h4>
                <br>
                <ul>
                    <li>Використання фреймворку Yii2</li>
                    <li>Використання docker контейнерів (docker compose)</li>
                    <li>Зберігання створених даних в БД</li>
                    <li>Відображення даних з БД</li>
                    <li>Створити всі небхідні компоненти, максимально використовуючи можливості фреймворку</li>
                    <li>Організація, підключення та взаємодія компонентів: максимально використовувати можливості фреймворку</li>
                    <li>Не використовувати механізми модулів фреймворку</li>
                    <li>На кожній сторінці маленьке меню з пунктами (сторінками) форми та таблиці </li>
                </ul>
            </div>
            <div class="col-lg-4 mb-3">
                <h4>Сторінка з формою для створення користувача</h4>
                <br>
                <ul>
                    <li>Пполя для форми (всі текстові)</li>
                    <li>Поля:
                    <ol>
                        <li>first_name</li>
                        <li>last_name</li>
                        <li>middle_name</li>
                        <li>email</li>
                        <li>phone</li>
                        <li>document</li>
                    </ol>
                    </li>
                   <li>Обовʼязкові поля:
                       <ol>
                           <li>first_name</li>
                           <li>last_name</li>
                           <li>document</li>
                       </ol>
                   </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h4>Сторінка з таблицею даних для відображення переліку створених користувачів</h4>
                <br>
                <ul>
                    <li>Використання компонента GridView</li>
                    <li>Реалізувати фільтрацію та сортування (функції "з коробки")</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h2>Додатково реалізовано:</h2>
        <br>
        <div style="width: 90%;display: flex;flex-direction: column;flex-wrap: nowrap;align-content: flex-start;justify-content: flex-start;align-items: flex-start;margin-left: auto;margin-right: auto;">
            <p class="lead mb-3 display-7">1. Сторінки регістрації та аунтифікації з формами;</p>
            <p class="lead mb-3 display-7">2. Регістрацію та аунтифікацію користувачив(мінімально необхідне);</p>
            <p class="lead mb-3 display-7">3. Сторінка з таблицею даних для відображення переліку зарегістрованих користувачів (доступна після аунтифікації);</p>
            <p class="lead mb-3 display-7">4. Реалізовано валідацію полів в фомах.</p>
        </div>
        <br>
    </div>
</div>
