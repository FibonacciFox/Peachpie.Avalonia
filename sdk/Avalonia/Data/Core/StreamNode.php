<?php
namespace Avalonia\Data\Core;
/**
 */
class StreamNode extends \Avalonia\Data\Core\ExpressionNode
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @var \Avalonia\Data\Core\ExpressionNode
	 * @property
	 */
	public $Next;
	/**
	 * @var \System\WeakReference_1[System\Object]
	 * @property
	 */
	public $Target;
	/**
	 * @param \System\WeakReference_1 $reference
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPlugin($reference){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function ValueChanged($value){}
}
