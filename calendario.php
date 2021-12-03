<?php

require_once 'vendor/autoload.php';
// Use the factory to get your period
$factory = new CalendR\Calendar;
$month = $factory->getMonth(2012, 01);
?>

<table style="border: 2px solid black">
    <?php // Iterate over your month and get weeks ?>
    <?php foreach ($month as $week): ?>
    <tr style="border: 1px solid black">
        <?php // Iterate over your month and get days ?>
        <?php foreach ($week as $day): ?>
            <?php //Check days that are out of your month ?>
            <td style="border: 1px solid black"><?php echo $day ?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>