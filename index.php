<?php require_once __DIR__ . '/views/layouts/start.php' ?>
    <a href="https://t.me/+rgrTsg8CG7AzN2Uy" class="link" target="_blank">Наш телеграм-канал</a>
    <div class="wrapper mx-5 my-2">
        <h1 class="text-center mb-4">Конфигуратор входной двери</h1>
        <main class="main">
            <section class="main__doors">
                <div class="main__doors-item" id="door1">
                    <span class="main__doors-handle" id="handle-front"></span>
                </div>
                <div class="main__doors-item" id="door2">
                    <span class="main__doors-handle" id="handle-back"></span>
                </div>
            </section>
            <section class="main__params">
                <h4 class="main__params-title">Параметры</h4>
                <?php require_once __DIR__ . '/views/components/form.php' ?>
            </section>
            <section class="main__list">
                <h4 class="main__list-title">Последние заказы</h4>
                <?php require_once __DIR__ . '/views/components/list.php'; ?>
            </section>
        </main>
    </div>
<?php require_once __DIR__ . '/views/layouts/end.php' ?>