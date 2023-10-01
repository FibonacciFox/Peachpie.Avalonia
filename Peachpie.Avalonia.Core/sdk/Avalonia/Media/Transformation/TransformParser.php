<?php
namespace Avalonia\Media\Transformation;
/**
 */
class TransformParser extends \System\Object
{
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public static function Parse($s){}
	/**
	 * @param \System\ReadOnlySpan_1& $functionPart
	 * @param \Avalonia\Media\Transformation\TransformFunction $function
	 * @param \Avalonia\Media\Transformation\Builder& $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseFunction($functionPart, $function, $builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformFunction $function
	 * @param \Avalonia\Media\Transformation\UnitValue& $value
	 * @param \Avalonia\Media\Transformation\Unit $unit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyZeroOrUnit($function, $value, $unit){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformFunction $function
	 * @param \Avalonia\Media\Transformation\UnitValue& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyZeroOrAngle($function, $value){}
	/**
	 * @param \Avalonia\Media\Transformation\Unit $unit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsAngleUnit($unit){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformFunction $function
	 * @param \Avalonia\Media\Transformation\UnitValue& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowFormatInvalidValue($function, $value){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformFunction $function
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowFormatInvalidValueCount($function, $count){}
	/**
	 * @param \System\ReadOnlySpan_1& $part
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseUnit($part){}
	/**
	 * @param \System\ReadOnlySpan_1& $part
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTransformFunction($part){}
	/**
	 * @param \Avalonia\Media\Transformation\UnitValue& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToRadians($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
