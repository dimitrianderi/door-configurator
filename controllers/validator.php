<?php

$error_messages = [];
$err = 'Поле заполнено некорректно';

if (empty($painting_color)) $error_messages['painting_color'] = $err;
if (empty($tape_color)) $error_messages['tape_color'] = $err;
if (empty($handle_color)) $error_messages['handle_color'] = $err;
if (empty($opening)) $error_messages['opening'] = $err;
if (empty($width_door) || $width_door < 100 || $width_door > 150) $error_messages['width'] = $err;
if (empty($height_door) || $height_door < 180 || $height_door > 250) $error_messages['height'] = $err;
