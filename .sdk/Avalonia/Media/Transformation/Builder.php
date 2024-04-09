<?php
namespace Avalonia\Media\Transformation;
final class Builder extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Void|void
	 */
	public function AppendTranslate($x, $y){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Void|void
	 */
	public function AppendRotate($angle){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Void|void
	 */
	public function AppendScale($x, $y){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Void|void
	 */
	public function AppendSkew($x, $y){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \System\Void|void
	 */
	public function AppendMatrix($matrix){}
	/**
	 * @return \System\Void|void
	 */
	public function AppendIdentity(){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation $toAdd
	 * @return \System\Void|void
	 */
	public function Append($toAdd){}
	/**
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public function Build(){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations+Builder $left
	 * @param \Avalonia\Media\Transformation\TransformOperations+Builder $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperations+Builder $left
	 * @param \Avalonia\Media\Transformation\TransformOperations+Builder $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	public function __construct($capacity){}
}