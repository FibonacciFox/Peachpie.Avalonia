<?php
namespace System\Text;
/**
 */
class EncodingInfo extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CodePage;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DisplayName;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CodePage(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayName(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public  function GetEncoding(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function Equals($value){}
	/**
	 * @return \System\Text\EncodingProvider
	 */
	protected  function get_Provider(){}
}
