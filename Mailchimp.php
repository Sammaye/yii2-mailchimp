<?php

namespace sammaye\mailchimp;

use Yii;
use yii\base\Component;
use \Mailchimp as MailchimpApi;

class Mailchimp extends Component
{
	/**
	 * the api key in use
	 * @var  string
	 */
	public $apikey;
	/**
	 * The options for mailchimp API
	 * @var array
	 */
	public $opts = [];
	
	public $mailChimp;
	
	public function init()
	{
		$this->mailChimp = new MailchimpApi($this->apikey, $this->opts);
	}
	
	public function __get($name)
	{
		try{
			parent::__get($name);
		}catch(\yii\base\UnknownPropertyException $e){
			return $this->mailChimp->$name;
		}
	}
	
	public function __call($name, $parameters = [])
	{
		return call_user_func_array([$this->mailChimp, $name], $parameters);
	}
} 