<?php
namespace Avalonia\Controls;
class DeferredItem extends \System\Object
{
	/**
	 * @property
	 * @var \System\Func_2[System\IServiceProvider,System\Object]
	 * @since readonly
	 */
	public $Factory;
	/**
	 * @param \System\Func_2 $factory [generic: System\IServiceProvider,System\Object]
	 */
	public function __construct($factory){}
}