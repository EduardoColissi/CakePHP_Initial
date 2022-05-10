<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CatsArtigo Entity
 *
 * @property int $id
 * @property string $nome_cat_artigo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Artigo[] $artigos
 */
class CatsArtigo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_cat_artigo' => true,
        'created' => true,
        'modified' => true,
        'artigos' => true,
    ];
}
