<h1>Blog products</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Amount</th>
    </tr>
	
	<?php foreach ($products as $product): ?>
	<tr>
        <td><?php echo $product['Product']['p_id']; ?></td>
        <td>
            <?php echo $this->Html->link($product['Product']['p_name'],
array('controller' => 'products', 'action' => 'view', $product['Product']['p_id'])); ?>
        </td>
        <td><?php echo $product['Product']['Value']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($product); ?>
</table>
