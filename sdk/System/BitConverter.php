<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BitConverterMethodsOverride
{
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_1($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_2($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_3($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_4($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_5($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_6($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_7($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_8($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_9($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_10($value){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function GetBytes_11($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_1($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_2($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_3($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_4($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_5($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_6($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_7($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_8($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_9($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_10($destination, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryWriteBytes_11($destination, $value){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function ToChar_1($value, $startIndex){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function ToChar_2($value){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ToInt16_1($value, $startIndex){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ToInt16_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ToInt32_1($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ToInt32_2($value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ToInt64_1($value, $startIndex){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ToInt64_2($value){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function ToUInt16_1($value, $startIndex){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function ToUInt16_2($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ToUInt32_1($value, $startIndex){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ToUInt32_2($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function ToUInt64_1($value, $startIndex){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function ToUInt64_2($value){}
	/**
	 * @return \System\Half
	 */
	#[MethodOverride] public static function ToHalf_1($value, $startIndex){}
	/**
	 * @return \System\Half
	 */
	#[MethodOverride] public static function ToHalf_2($value){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function ToSingle_1($value, $startIndex){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function ToSingle_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function ToDouble_1($value, $startIndex){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function ToDouble_2($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_1($value, $startIndex, $length){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_2($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_3($value, $startIndex){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_4(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function ToBoolean_1($value, $startIndex){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function ToBoolean_2($value){}
}
/**
 */
class BitConverter extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public readonly $IsLittleEndian;
	/**
	 * @uses BitConverterMethodsOverride::GetBytes_1 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_2 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_3 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_4 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_5 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_6 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_7 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_8 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_9 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_10 ($value)
	 * @uses BitConverterMethodsOverride::GetBytes_11 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBytes(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::TryWriteBytes_1 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_2 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_3 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_4 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_5 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_6 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_7 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_8 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_9 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_10 ($destination, $value)
	 * @uses BitConverterMethodsOverride::TryWriteBytes_11 ($destination, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryWriteBytes(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToChar_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToChar_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToChar(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToInt16_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToInt16_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToInt16(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToInt32_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToInt32_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToInt32(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToInt64_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToInt64_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToInt64(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToUInt16_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToUInt16_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToUInt16(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToUInt32_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToUInt32_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToUInt32(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToUInt64_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToUInt64_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToUInt64(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToHalf_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToHalf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToHalf(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToSingle_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToSingle_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToSingle(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToDouble_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToDouble_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToDouble(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToString_1 ($value, $startIndex, $length)
	 * @uses BitConverterMethodsOverride::ToString_2 ($value)
	 * @uses BitConverterMethodsOverride::ToString_3 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToString_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses BitConverterMethodsOverride::ToBoolean_1 ($value, $startIndex)
	 * @uses BitConverterMethodsOverride::ToBoolean_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToBoolean(mixed ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Int64|int
	 */
	public static function DoubleToInt64Bits($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Double|double
	 */
	public static function Int64BitsToDouble($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Int32|int
	 */
	public static function SingleToInt32Bits($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Single
	 */
	public static function Int32BitsToSingle($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Int16
	 */
	public static function HalfToInt16Bits($value){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Half
	 */
	public static function Int16BitsToHalf($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\UInt64
	 */
	public static function DoubleToUInt64Bits($value){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Double|double
	 */
	public static function UInt64BitsToDouble($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\UInt32
	 */
	public static function SingleToUInt32Bits($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Single
	 */
	public static function UInt32BitsToSingle($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\UInt16
	 */
	public static function HalfToUInt16Bits($value){}
	/**
	 * @param \System\UInt16 $value
	 * @return \System\Half
	 */
	public static function UInt16BitsToHalf($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
