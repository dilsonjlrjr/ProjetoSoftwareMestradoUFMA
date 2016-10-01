<?php

namespace App\Mapper;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DetalhamentoAtividade
 * @package App\Mapper
 *
 * @ORM\Table(name="DetalhamentoAtividade")
 * @ORM\Entity
 */
class DetalhamentoAtividade
{

    /**
     * @var int
     *
     * @ORM\Column(name="idDetalhamentoAtividade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="quantidade", type="integer")
     */
    private $quantidade;

    /**
     * @var Atividade
     *
     * @ORM\ManyToOne(targetEntity="Atividade", inversedBy="detalhamentoAtividade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atividade_FK_idAtividade", referencedColumnName="idAtividade")
     * })
     */
    private $atividade;

    /**
     * @var Material
     *
     * @ORM\ManyToOne(targetEntity="Material", inversedBy="detalhamentoAtividade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="material_FK_idMaterial", referencedColumnName="idMaterial")
     * })
     */
    private $material;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return Atividade
     */
    public function getAtividade(): Atividade
    {
        return $this->atividade;
    }

    /**
     * @param Atividade $atividade
     */
    public function setAtividade(Atividade $atividade)
    {
        $this->atividade = $atividade;
    }

    /**
     * @return Material
     */
    public function getMaterial(): Material
    {
        return $this->material;
    }

    /**
     * @param Material $material
     */
    public function setMaterial(Material $material)
    {
        $this->material = $material;
    }

}