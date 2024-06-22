<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MarkupBindingChainExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Data\Core\Plugins\IStreamPlugin $customPlugin
	 */
	#[MethodOverride]public function __construct_2 ($customPlugin){}
}
class StreamNode extends \Avalonia\Data\Core\ExpressionNode
{
	use MarkupBindingChainExceptionOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \Avalonia\Data\Core\ExpressionNode
	 */
	public $Next;
	/**
	 * @property
	 * @var \System\WeakReference_1[System\Object]
	 */
	public $Target;
	private function GetPlugin($reference){}
	/**
	 * @uses StreamNodeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StreamNodeOverride::__construct_2 <br>public , args: ($customPlugin)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}