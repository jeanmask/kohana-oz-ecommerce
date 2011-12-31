<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Order product model
 *
 * @package openzula/kohana-oz-ecommerce
 * @author Alex Cartwright <alex@openzula.org>
 * @copyright Copyright (c) 2011, OpenZula
 * @license http://openzula.org/license-bsd-3c BSD 3-Clause License
 */

class Model_Oz_Order_Product extends ORM {

	protected $_belongs_to = array(
		'order' => array(),
	);

	public function rules()
	{
		return array(
			'order_id' => array(
				array('not_empty'),
				array('digit'),
				array('gt', array(':value', 0)),
			),
			'product_id' => array(
				array('not_empty'),
				array('digit'),
				array('gt', array(':value', 0)),
			),
			'variation_id' => array(
				array('digit'),
			),
			'quantity' => array(
				array('not_empty'),
				array('digit'),
				array('gt', array(':value', 0)),
			),
			'price' => array(
				array('not_empty'),
				array('numeric'),
				array('gte', array(':value', 0)),
			),
		);
	}

}
