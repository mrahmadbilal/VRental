<?php

class MBB_Hidden extends MBB_Field
{
	public $basic = array(
		'id',
		'name',
		'desc',
		'std',
		'clone'	=> 'checkbox',
	);
}

new MBB_Hidden;