<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class StringSyntaxAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $CompositeFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $DateOnlyFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $DateTimeFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $EnumFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $GuidFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Json;
	/**
	 * @var \System\String
	 * @field
	 */
	public $NumericFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Regex;
	/**
	 * @var \System\String
	 * @field
	 */
	public $TimeOnlyFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $TimeSpanFormat;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Uri;
	/**
	 * @var \System\String
	 * @field
	 */
	public $Xml;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Syntax;
	/**
	 * @var \System\Object[]
	 * @property
	 */
	public readonly $Arguments;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Syntax(){}
	/**
	 * @return \System\Object[]
	 */
	public  function get_Arguments(){}
}
