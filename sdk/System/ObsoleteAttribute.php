<?php
namespace System;
/**
 */
class ObsoleteAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsError;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DiagnosticId;
	/**
	 * @var \System\String
	 * @property
	 */
	public $UrlFormat;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsError(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DiagnosticId(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DiagnosticId($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_UrlFormat(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_UrlFormat($value){}
}
