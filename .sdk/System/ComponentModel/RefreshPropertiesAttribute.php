<?php
namespace System\ComponentModel;
final class RefreshPropertiesAttribute extends \System\Attribute
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\RefreshPropertiesAttribute
	 */
	public static $All;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\RefreshPropertiesAttribute
	 */
	public static $Repaint;
	/**
	 * @field
	 * @since readonly
	 * @var \System\ComponentModel\RefreshPropertiesAttribute
	 */
	public static $Default;
	/**
	 * @property
	 * @var \System\ComponentModel\RefreshProperties
	 * @since readonly
	 */
	public $RefreshProperties;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\ComponentModel\RefreshProperties $refresh
	 */
	public function __construct($refresh){}
}