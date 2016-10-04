<?php

namespace App\Mapper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Material
 * @package App\Mapper
 *
 * @ORM\Table(name="Material")
 * @ORM\Entity(repositoryClass="App\Mapper\Repository\MaterialRepository")
 */
class Material
{

    /**
     * @var int
     *
     * @ORM\Column(name="idMaterial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="descricao", type="string", length=300)
     */
    private $descricao;

    /**
     * @var int
     * @ORM\Column(name="quantidade", type="integer")
     */
    private $quantidade;

    /**
     * @var PersistentCollection
     *
     * @ORM\OneToMany(targetEntity="DetalhamentoAtividade", mappedBy="material")
     */
    private $detalhamentoAtividade;

    /**
     * Material constructor.
     */
    public function __construct()
    {
        $this->detalhamentoAtividade = new ArrayCollection();
    }

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
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
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
     * @return PersistentCollection
     */
    public function getDetalhamentoAtividade(): PersistentCollection
    {
        return $this->detalhamentoAtividade;
    }

    /**
     * @param DetalhamentoAtividade $detalhamentoAtividade
     */
    public function setDetalhamentoAtividade(DetalhamentoAtividade $detalhamentoAtividade)
    {
        $detalhamentoAtividade->setMaterial($this);
        $this->detalhamentoAtividade->add($detalhamentoAtividade);
    }

}