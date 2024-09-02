<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractOverride {
	/**
	 * @param \System\String|string $syntax
	 */
	#[MethodOverride]public function __construct_1 ($syntax){}
	/**
	 * @param \System\String|string $syntax
	 * @param \System\Object ...$arguments
	 */
	#[MethodOverride]public function __construct_2 ($syntax, ...$arguments){}
}
final class StringSyntaxAttribute extends \System\Attribute
{
	use ContractOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const CompositeFormat = 'CompositeFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const DateOnlyFormat = 'DateOnlyFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const DateTimeFormat = 'DateTimeFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const EnumFormat = 'EnumFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const GuidFormat = 'GuidFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Json = 'Json';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const NumericFormat = 'NumericFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Regex = 'Regex';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const TimeOnlyFormat = 'TimeOnlyFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const TimeSpanFormat = 'TimeSpanFormat';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Uri = 'Uri';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Xml = 'Xml';
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Syntax;
	/**
	 * @property
	 * @var \System\Object[]|array
	 * @since readonly
	 */
	public $Arguments;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses StringSyntaxAttributeOverride::__construct_1 <br>public , args: ($syntax)<br>
	 * @uses StringSyntaxAttributeOverride::__construct_2 <br>public , args: ($syntax, ...$arguments)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}