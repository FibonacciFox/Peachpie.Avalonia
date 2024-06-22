<?php
namespace System;
final class UriInfo extends \System\Object
{

	/**
	 * @field
	 * @var \System\Uri+Offset
	 */
	public $Offset;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $String;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Host;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $IdnHost;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $PathAndQuery;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $ScopeId;
	/**
	 * @property
	 * @var \System\Uri+MoreInfo
	 * @since readonly
	 */
	public $MoreInfo;
	/**
	 */
	public function __construct(){}
}