<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SegmentAsValueTypeMethodsOverride
{
	/**
	 * @return \System\IO\Pipelines\SegmentAsValueType
	 */
	#[MethodOverride] public static function op_Implicit_1($s){}
	/**
	 * @return \System\IO\Pipelines\BufferSegment
	 */
	#[MethodOverride] public static function op_Implicit_2($s){}
}
/**
 */
class SegmentAsValueType extends \System\ValueType
{
	/**
	 * @uses SegmentAsValueTypeMethodsOverride::op_Implicit_1 ($s)
	 * @uses SegmentAsValueTypeMethodsOverride::op_Implicit_2 ($s)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
}
