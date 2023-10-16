<?php
namespace System\Drawing\Imaging;
/**
 */
class EncoderParameter extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\Imaging\Encoder
	 * @property
	 */
	public $Encoder;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $NumberOfValues;
	/**
	 * @var \System\Drawing\Imaging\EncoderParameterValueType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\Drawing\Imaging\EncoderParameterValueType
	 * @property
	 */
	public readonly $ValueType;
	/**
	 * @return \System\Drawing\Imaging\Encoder
	 */
	public  function get_Encoder(){}
	/**
	 * @param \System\Drawing\Imaging\Encoder $value
	 * @return \System\Void|void
	 */
	public  function set_Encoder($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NumberOfValues(){}
	/**
	 * @return \System\Drawing\Imaging\EncoderParameterValueType
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Drawing\Imaging\EncoderParameterValueType
	 */
	public  function get_ValueType(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
