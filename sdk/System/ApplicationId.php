<?php
namespace System;
/**
 */
class ApplicationId extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Culture;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ProcessorArchitecture;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public readonly $PublicKeyToken;
	/**
	 * @return \System\String|string
	 */
	public  function get_Culture(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ProcessorArchitecture(){}
	/**
	 * @return \System\Version
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_PublicKeyToken(){}
	/**
	 * @return \System\ApplicationId
	 */
	public  function Copy(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
}
