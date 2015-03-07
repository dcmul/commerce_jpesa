To complete payment, Send <b><?php print $order_total; ?></b> <b><?php print $order_currency; ?></b> to <b><?php print $order_phone_no; ?></b>, then wait<br> 
for the <b><?php print $order_provider; ?> - Transaction ID</b>.
<br>
<?php if(!empty($order_exrate)) : ?>
The exchange rate for converting <b><?php print $order_currency; ?></b> to <b><?php print $order_old_currency; ?></b> is <b><?php print $order_exrate; ?></b>
<?php endif; ?>

<?php
 
$table_element = array('#theme' => 'table', '#rows' => $table_rows, );
print drupal_render($table_element);
?>
