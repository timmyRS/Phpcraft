<?php
namespace Phpcraft\Command;
class StringArgumentProvider extends ArgumentProvider
{
	/**
	 * @var $value string
	 */
	private $value;

	public function __construct(CommandSender &$sender, string $arg)
	{
		$this->value = $arg;
	}

	function getValue(): string
	{
		return $this->value;
	}
}
