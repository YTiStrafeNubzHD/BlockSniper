<?php

namespace Sandertv\BlockSniper\events;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;
use Sandertv\BlockSniper\Loader;

class ChangeBrushPropertiesEvent extends PluginEvent {
	
	const ACTION_RESET_BRUSH = 0;
	const ACTION_CHANGE_SIZE = 1;
	const ACTION_CHANGE_HEIGHT = 2;
	const ACTION_CHANGE_TYPE = 3;
	const ACTION_CHANGE_SHAPE = 4;
	
	const ACTION_CHANGE_BLOCKS = 5;
	const ACTION_CHANGE_BIOME = 6;
	const ACTION_CHANGE_OBSOLETE = 7;
	const ACTION_CHANGE_DECREMENT = 8;
	const ACTION_CHANGE_HOLLOW = 9;
	
	public static $handlerList = null;
	
	public $player;
	public $action;
	public $value;
	
	public function __construct(Loader $owner, Player $player, int $action, $value) {
		parent::__construct($owner);
		$this->player = $player;
		$this->action = $action;
		$this->value = $value;
	}
	
	/**
	 * Returns the player that changed their Brush.
	 *
	 * @return Player
	 */
	public function getPlayer(): Player {
		return $this->player;
	}
	
	/**
	 * Returns the action of the modification.
	 *
	 * @return int
	 */
	public function getAction(): int {
		return $this->action;
	}
	
	/**
	 * Returns the input arguments from the Brush modification.
	 *
	 * @return mixed
	 */
	public function getActionValue() {
		return $this->value;
	}
}