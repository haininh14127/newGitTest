<h2><center>Welcome to Eagle Financial Service</center></h2>
<h1></h1>
<p><center><?php echo $this->Html->image('Eagle_Logo.png', array('width' => '200px','height' => '200px')); ?> </center>
<h3>Please select one of the following services:</h3>
<p><?php echo $this->Html->link(__('Customer Profile Management'), array('controller' => 'customers', 'action' => 'index')); ?>
<p><?php echo $this->Html->link(__('Update Non-Stock Investments'), array('controller' => 'investments', 'action' => 'index')); ?>
<p><?php echo $this->Html->link(__('Update Stock Portfolio'), array('controller' => 'stocks', 'action' => 'index')); ?>
