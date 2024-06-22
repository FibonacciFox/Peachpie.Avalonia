<?php
namespace Avalonia\Automation;
enum ExpandCollapseState
{

	
	case Collapsed = '0';
	case Expanded = '1';
	case LeafNode = '2';
	case PartiallyExpanded = '3';

}