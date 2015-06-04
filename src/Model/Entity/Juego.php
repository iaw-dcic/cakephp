<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Juego Entity.
 */
class Juego extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'objectid' => true,
    ];
}
