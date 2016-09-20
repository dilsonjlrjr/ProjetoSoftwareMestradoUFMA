<?php

namespace App\Mapper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Projeto
 *
 * @ORM\Table(name="Projeto")
 * @ORM\Entity(repositoryClass="App\Mapper\Repository\ProjetoRepository")
 */
class Projeto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProjeto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var PersistentCollection
     *
     * @ORM\OneToMany(targetEntity="Atividade", mappedBy="projeto", cascade={"remove"})
     */
    private $atividade;

    /**
     * Projeto constructor.
     */
    public function __construct()
    {
        $this->atividade = new ArrayCollection();
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
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return ArrayCollection
     */
    public function getAtividade()
    {
        return $this->atividade;
    }

    /**
     * @param Atividade $atividade
     */
    public function setAtividade(Atividade $atividade)
    {
        $atividade->setProjeto($this);
        $this->atividade->add($atividade);
    }

}

