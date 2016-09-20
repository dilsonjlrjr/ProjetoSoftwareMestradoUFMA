<?php

namespace App\Mapper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 *
 * @ORM\Table(name="Pessoa")
 * @ORM\Entity(repositoryClass="App\Mapper\Repository\PessoaRepository")
 */
class Pessoa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAtor", type="integer", nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="profissao", type="string", length=200, nullable=false)
     */
    private $profissao;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Atividade", mappedBy="pessoa")
     */
    private $atividade;

    /**
     * Pessoa constructor.
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
     * @return string
     */
    public function getProfissao(): string
    {
        return $this->profissao;
    }

    /**
     * @param string $profissao
     */
    public function setProfissao(string $profissao)
    {
        $this->profissao = $profissao;
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

