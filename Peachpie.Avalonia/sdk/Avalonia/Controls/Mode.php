<?php
namespace Avalonia\Controls;
/**
 */
enum Mode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Items = 0;
	case ItemsSource = 1;
}
