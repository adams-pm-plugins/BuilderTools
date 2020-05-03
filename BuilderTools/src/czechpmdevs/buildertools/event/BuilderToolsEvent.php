<?php
/**
 * Created by PhpStorm.
 * User: Adam
 * Date: 5/2/2020
 * Time: 5:01 PM
 */
declare(strict_types=1);

namespace czechpmdevs\buildertools\event;

use pocketmine\event\Cancellable;
use pocketmine\event\Event;
use pocketmine\level\Position;
use pocketmine\Player;

class BuilderToolsEvent extends Event implements Cancellable{
    /** @var Player $player */
    private $player;
    /** @var Position $pos1 */
    private $pos1;
    /** @var Position $pos2 */
    private $pos2;
    /**
     * BuilderToolsEvent constructor.
     * @param Player $player
     * @param Position $pos1
     * @param Position $pos2
     */
    public function __construct(Player $player, Position $pos1, Position $pos2) {
        $this->player = $player;
        $this->pos1 = $pos1;
        $this->pos2 = $pos2;
    }
    /**
     * @return Position
     */
    public function getPos1(): Position{
        return $this->pos1;
    }
    /**
     * @return Position
     */
    public function getPos2(): Position{
        return $this->pos2;
    }
    /**
     * @return Player
     */
    public function getPlayer(): Player{
        return $this->player;
    }
}