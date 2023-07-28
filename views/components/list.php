<?php /** @var array $list */ ?>
<?php require_once './controllers/create_list.php'; ?>

<div class="main__wrapper">
    <?php foreach ($list as $item) : ?>
        <form action="./controllers/list_handler.php" method="POST" class="form__list">
            <input type="hidden" value="<?=$item['id'];?>" name="id">
            <button type="submit">Заказ № . <?=$item['id'];?></button>
        </form>
    <?php endforeach; ?>
</div>
