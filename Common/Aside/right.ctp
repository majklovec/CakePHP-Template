<?

/**
 *
 * PHP 5
 *
 * Petr Jeřábek : CakePHP HTML5 Boilerplate Bootstrap Theme
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright   Copyright 2013, Petr Jeřábek  (http://github.com/cikorka)
 * @license     MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link        https://github.com/cikorka/CakePHP-Template
 */

	$this->extend('/Common/content');
?>
<div class="row-fluid">
	<div class="span9">
		<?php echo $this->fetch('content'); ?>
	</div>
	<div class="span3">
		<?php echo $this->fetch('aside.right'); ?>
	</div>
</div>