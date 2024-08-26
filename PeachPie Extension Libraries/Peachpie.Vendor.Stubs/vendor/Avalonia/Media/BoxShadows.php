<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BoxShadowsOverride {
	/**
	 * @param \Avalonia\Media\BoxShadow $shadow
	 */
	#[MethodOverride]public function __construct_1 ($shadow){}
	/**
	 * @param \Avalonia\Media\BoxShadow $first
	 * @param \Avalonia\Media\BoxShadow $rest
	 */
	#[MethodOverride]public function __construct_2 ($first, $rest){}
}
final class BoxShadows extends \System\ValueType
{
	use BoxShadowsOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Media\BoxShadow
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasInsetShadows;
	/**
	 * @return \Avalonia\Media\BoxShadows+BoxShadowsEnumerator
	 */
	public function GetEnumerator(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\BoxShadows
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Rect& &$rect
	 * @return \Avalonia\Rect
	 */
	public function TransformBounds(&$rect){}
	/**
	 * @param \Avalonia\Media\BoxShadows $left
	 * @param \Avalonia\Media\BoxShadows $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\BoxShadows $left
	 * @param \Avalonia\Media\BoxShadows $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses BoxShadowsOverride::__construct_1 <br>public , args: ($shadow)<br>
	 * @uses BoxShadowsOverride::__construct_2 <br>public , args: ($first, $rest)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}