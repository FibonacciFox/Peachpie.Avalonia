<?php
namespace Avalonia\Controls;
/**
 */
class DependencyResolver extends \System\Object implements 
	\Avalonia\IAvaloniaDependencyResolver
{
	/**
	 * @var \Avalonia\Controls\MenuItem+DependencyResolver
	 * @field
	 */
	public readonly $Instance;
	/**
	 * @param \System\Type $serviceType
	 * @return \System\Object|object
	 */
	public  function GetService($serviceType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
