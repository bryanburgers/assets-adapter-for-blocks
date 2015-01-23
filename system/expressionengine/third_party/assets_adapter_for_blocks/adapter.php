<?php

// A shim for P&T's Assets
class AssetsAdapterForBlocks
{
	private $EE;
	private $_fieldtype;

	function __construct($ee)
	{
		$this->EE = $ee;
	}

	public function setFieldtype($fieldtype)
	{
		$this->_fieldtype = $fieldtype;
	}

	public function pre_process($data)
	{
		// Assets has some things hardcoded when content_type is 'grid'. Since
		// Blocks is pretty darn close to Grid, we want Assets to treat us
		// like Grid. So, let's lie and say we're Grid.
		//
		// $this->_fieldtype->content_type = 'grid';
		//
		// Unfortunately, content_type is a private variable. So, we need to
		// be even sneakier.
		$refObject = new ReflectionObject($this->_fieldtype);
		$refProperty = $refObject->getProperty('content_type');
		$refProperty->setAccessible(true);
		$refProperty->setValue($this->_fieldtype, 'grid');

		// And continue on with our lives.
		return $this->_fieldtype->pre_process($data);
	}

	public function grid_replace_tag($data, $params = array(), $tagdata = false)
	{
		// The real grid_replace_tag does a little bit of work to look up what
		// the variable prefix should be. But Blocks doesn't need that. So
		// let's skip that, and go right to replace_tag.
		return $this->_fieldtype->replace_tag($data, $params, $tagdata);
	}
}
