<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UmAlQuraCalendarOverride {
	/**
	 * @param \System\ComponentModel\EditorBrowsableState $state
	 */
	#[MethodOverride]public function __construct_1 ($state){}
	/**
	 */
	#[MethodOverride]public function __construct_2 (){}
}
final class EditorBrowsableAttribute extends \System\Attribute
{
	use UmAlQuraCalendarOverride;

	/**
	 * @property
	 * @var \System\ComponentModel\EditorBrowsableState
	 * @since readonly
	 */
	public $State;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses EditorBrowsableAttributeOverride::__construct_1 <br>public , args: ($state)<br>
	 * @uses EditorBrowsableAttributeOverride::__construct_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}