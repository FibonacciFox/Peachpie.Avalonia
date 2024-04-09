<?php
namespace Avalonia\Controls\Platform;
class SafeAreaChangedArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 * @since readonly
	 */
	public $SafeAreaPadding;
	/**
	 * @param \Avalonia\Thickness $safeArePadding
	 */
	public function __construct($safeArePadding){}
}