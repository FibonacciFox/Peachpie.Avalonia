<?php
namespace Avalonia\Controls;
class DependencyResolver extends \System\Object implements
	\Avalonia\IAvaloniaDependencyResolver
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Controls\MenuItem+DependencyResolver
	 */
	public static $Instance;
	/**
	 * @param \System\Type $serviceType
	 * @return \System\Object|object
	 */
	public function GetService($serviceType){}
	/**
	 */
	public function __construct(){}
}