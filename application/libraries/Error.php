<?php
/**
 * This class will be showing errors on site
 *
 */
class Error {
	private $view_path = 'common/errors.php';
	private $messageview_path = 'common/messages.php';

	private $errors				 = array();
	private $scopeErrors		 = array();
	private $useScope			 = '';
	private $messages			 = array();
	private $CI 				= false;

	public function __construct() {
		$this->CI = & get_instance();
		$this->restore();
	}

	/**
	 * Save errors in session
	 *
	 */
	public function keep() {
		$this->CI->session->set_flashdata('message_errors', $this->errors());
		$this->CI->session->set_flashdata('message_messages', $this->messages());
	}

	public function useScope($scope)
	{
		$this->useScope = $scope;
		return $this;
	}

	/**
	 * Delete all errors
	 *
	 */
	private function restore() {
		$errors 	= $this->CI->session->flashdata('message_errors');
		$messages 	= $this->CI->session->flashdata('message_messages');
		if ($errors)
		$this->errors = $errors;
			
		if ($messages)
		$this->messages = $messages;
	}

	/**
	 * Add new Error
	 *
	 * @param string $error
	 */
	public function addError($error) {
		if ($this->useScope)
		$this->scopeErrors[$this->useScope][] = $error;
		else
		$this->errors[] = $error;
	}

	public function hasScopeErrors()
	{
		if (isset($this->scopeErrors[$this->useScope]))
		return count($this->scopeErrors[$this->useScope]);
		else
		return 0;
	}

	public function transferScopeErrors()
	{
		$errors = array();
		foreach ($this->scopeErrors as $scopeErrors) {
			foreach ($scopeErrors as $error)
			$errors[] = $error;
		}

		$this->errors = array_merge($this->errors, $errors);
	}

	public function addMessage($message)
	{
		$this->messages[] = $message;
	}

	/**
	 * Return count errors
	 *
	 * @return int
	 */
	public function hasErrors() {
		return count($this->errors);
	}

	public function messages()
	{
		$messages = $this->messages;
		$this->messages = array();
		return $messages;
	}

	/**
	 * Return all errors and clear array
	 *
	 * @return unknown
	 */
	public function errors() {
		$errors 		= $this->errors;
		$this->errors 	= array();
		return $errors;
	}

	/**
	 * Showing errors
	 *
	 */
	public function renderErrors($intoVar = false) {
		if ($intoVar) {
			$html = $this->CI->load->view($this->view_path, array('errors' => $this->errors()), TRUE);
			return $html;
		} else {
			$this->CI->load->view($this->view_path, array('errors' => $this->errors()));
		}
	}

	public function renderMessages()
	{
		$this->CI->load->view($this->messageview_path, array('messages' => $this->messages()));
	}

	/**
	 * Render Error
	 *
	 */
	public function render() {
		$this->renderErrors();
		$this->renderMessages();
	}
}
?>