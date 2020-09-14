<?php
require_once __DIR__ . '/Classes/Order.php';

require_once __DIR__ . '/Classes/Customer.php';

$customer1 = new Customer('David', 'Platt', 'david@queryquest.us', '253A Dimpsey Road', 'Halifax', 'PA', 17032, '717-896-7669');
$order1 = new Order('pen', 20, 0.25, 0.06);

var_dump($customer1, $order1);

echo ("<br><br>");

$customer2 = new Customer('Michal', 'Styk', 'mstyk@mail.com', '100 Slovak Lane', 'Harrisburg', 'PA', 17011, '717-555-1212');

$order2 = new Order('pencil', 24, 0.10, 0.06);

var_dump($customer2, $order2);

echo("PHP execution completed Successfully");
?>
