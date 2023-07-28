<?php
session_start();
$status = $_SESSION['status'];
$error_messages = $_SESSION['error_messages'];
?>

<form action="../../controllers/handler_form.php" method="POST" class="form mt-2">
    <div class="form-group">
        <label for="painting_color" class="label">Цвет покраски:<span class="warning">*</span></label>
        <select class="form-control <?= (!empty($error_messages["painting_color"])) ? 'error' : ''; ?>"
                id="painting_color" name="painting_color" required>
            <option value="" hidden>Выберите цвет</option>
            <option value="red">Красный</option>
            <option value="blue">Синий</option>
            <option value="yellow">Жёлтый</option>
            <option value="green">Зелёный</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tape_color" class="label">Цвет пленки:<span class="warning">*</span></label>
        <select class="form-control <?= (!empty($error_messages["tape_color"])) ? 'error' : ''; ?>"
                id="tape_color" name="tape_color" required>
            <option value="" hidden>Выберите цвет</option>
            <option value="red">Красный</option>
            <option value="blue">Синий</option>
            <option value="yellow">Жёлтый</option>
            <option value="green">Зелёный</option>
        </select>
    </div>
    <div class="form-group">
        <label for="handle_color" class="label">Цвет ручки:<span class="warning">*</span></label>
        <select class="form-control <?= (!empty($error_messages["handle_color"])) ? 'error' : ''; ?>"
                id="handle_color" name="handle_color" required>
            <option value="" hidden>Выберите цвет</option>
            <option value="red">Красный</option>
            <option value="blue">Синий</option>
            <option value="yellow">Жёлтый</option>
            <option value="green">Зелёный</option>
        </select>
    </div>
    <div class="form-group">
        <label for="width" class="label">Ширина (см): <span class="warning">*</span></label>
        <input
            type="number"
            class="form-control <?= (!empty($error_messages["width"])) ? 'error' : ''; ?>"
            id="width"
            name="width"
            min="100"
            max="150"
            placeholder="<?= !empty($error_messages["name"]) ? $error_messages["name"] : "100-150"; ?>"
            required
        />
    </div>
    <div class="form-group">
        <label for="height" class="label">Высота (см): <span class="warning">*</span></label>
        <input
            type="number"
            class="form-control <?= (!empty($error_messages["height"])) ? 'error' : ''; ?>"
            id="height"
            name="height"
            min="180"
            max="250"
            placeholder="<?= !empty($error_messages["name"]) ? $error_messages["name"] : "180-250"; ?>"
            required
        />
    </div>
    <div class="form-group">
        <label for="opening" class="label">Открывание:<span class="warning">*</span></label>
        <select class="form-control <?= (!empty($error_messages["opening"])) ? 'error' : ''; ?>"
                id="opening" name="opening" required>
            <option value="" hidden>Выберите сторону</option>
            <option value="right">Правое</option>
            <option value="left">Левое</option>
        </select>
    </div>
    <div class="form-group">
        <label class="label">Аксессуары:</label>
        <div class="scrollable-container">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    value="peephole"
                    name="accessories[]"
                    id="peephole"
                />
                <label class="form-check-label value" for="peephole">Глазок</label>
            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    value="bell"
                    name="accessories[]"
                    id="bell"
                />
                <label class="form-check-label value" for="bell">Звонок</label>
            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    value="digits"
                    name="accessories[]"
                    id="digits"
                />
                <label class="form-check-label value" for="digits">Номер квартиры</label>
            </div>
        </div>
    </div>
    <span class="message <?=(!empty($error_messages) ) ? 'error' : ''; ?>">
        <?=(!empty($error_messages)) ? 'Проверьте выделенные поля' : ''; ?>
        <?=(!empty($status)) ? 'Заказ оформлен!' : ''; ?>
    </span>
    <div class="form-btn">
        <span class="result disabled">Итого: <span id="price"></span> руб.</span>
        <input type="hidden" class="sum" name="sum">
        <button type="submit" class="btn btn-primary" id="submit" disabled>Отправить комплектацию</button>
    </div>
</form>

<?php unset($_SESSION['status']); ?>
<?php unset($_SESSION['error_messages']); ?>
