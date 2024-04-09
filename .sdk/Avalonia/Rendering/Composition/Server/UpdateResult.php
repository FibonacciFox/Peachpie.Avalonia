<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UpdateResultOverride {
	/**
	 * @param \System\Nullable_1 $Bounds [generic: Avalonia\Rect]
	 * @param \System\Boolean|bool $InvalidatedOld
	 * @param \System\Boolean|bool $InvalidatedNew
	 */
	#[MethodOverride]public function __construct_1 ($Bounds, $InvalidatedOld, $InvalidatedNew){}
	/**
	 */
	#[MethodOverride]public function __construct_2 (){}
}
final class UpdateResult extends \System\ValueType implements
	\System\IEquatable_1
{
	use UpdateResultOverride;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $InvalidatedOld;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $InvalidatedNew;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual+UpdateResult $left
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual+UpdateResult $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual+UpdateResult $left
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual+UpdateResult $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Nullable_1 &$Bounds [generic: Avalonia\Rect]
	 * @param \System\Boolean& &$InvalidatedOld
	 * @param \System\Boolean& &$InvalidatedNew
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$Bounds, &$InvalidatedOld, &$InvalidatedNew){}
	/**
	 * @uses UpdateResultOverride::__construct_1 <br>public , args: ($Bounds, $InvalidatedOld, $InvalidatedNew)<br>
	 * @uses UpdateResultOverride::__construct_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}