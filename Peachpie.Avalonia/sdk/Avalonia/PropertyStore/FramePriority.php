<?php
namespace Avalonia\PropertyStore;
/**
 */
enum FramePriority implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Animation = 0;
	case AnimationTemplatedParentTheme = 1;
	case AnimationTheme = 2;
	case StyleTrigger = 3;
	case StyleTriggerTemplatedParentTheme = 4;
	case StyleTriggerTheme = 5;
	case Template = 6;
	case TemplateTemplatedParentTheme = 7;
	case TemplateTheme = 8;
	case Style = 9;
	case StyleTemplatedParentTheme = 10;
	case StyleTheme = 11;
}
