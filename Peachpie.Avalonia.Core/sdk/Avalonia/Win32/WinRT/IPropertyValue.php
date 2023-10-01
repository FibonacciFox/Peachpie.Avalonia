<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IPropertyValue
{
	/**
	 */
	public function get_Type();
	/**
	 */
	public function get_IsNumericScalar();
	/**
	 */
	public function get_UInt8();
	/**
	 */
	public function get_Int16();
	/**
	 */
	public function get_UInt16();
	/**
	 */
	public function get_Int32();
	/**
	 */
	public function get_UInt32();
	/**
	 */
	public function get_Int64();
	/**
	 */
	public function get_UInt64();
	/**
	 */
	public function get_Single();
	/**
	 */
	public function get_Double();
	/**
	 */
	public function get_Char16();
	/**
	 */
	public function get_Boolean();
	/**
	 */
	public function get_String();
	/**
	 */
	public function get_Guid();
	/**
	 * @param \System\Void* $value
	 */
	public function GetDateTime($value);
	/**
	 * @param \System\Void* $value
	 */
	public function GetTimeSpan($value);
	/**
	 * @param \System\Void* $value
	 */
	public function GetPoint($value);
	/**
	 * @param \System\Void* $value
	 */
	public function GetSize($value);
	/**
	 * @param \System\Void* $value
	 */
	public function GetRect($value);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetUInt8Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetInt16Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetUInt16Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetInt32Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetUInt32Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetInt64Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetUInt64Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetSingleArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetDoubleArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetChar16Array($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetBooleanArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetStringArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetInspectableArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetGuidArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetDateTimeArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetTimeSpanArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetPointArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetSizeArray($__valueSize);
	/**
	 * @param \System\UInt32* $__valueSize
	 */
	public function GetRectArray($__valueSize);
}
