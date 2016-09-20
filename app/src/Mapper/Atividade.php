<?php

namespace App\Mapper;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atividade
 *
 * @ORM\Table(name="Atividade", indexes={@ORM\Index(name="fk_Atividade_Projeto_idx", columns={"projeto_FK_idProjeto"}), @ORM\Index(name="fk_Atividade_Ator1_idx", columns={"ator_FK_idAtor"})})
 * @ORM\Entity
 */
class Atividade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAtividade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var float
     *
     * @ORM\Column(name="custo", type="float", precision=10, scale=0, nullable=true)
     */
    private $custo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataconclusao", type="datetime", nullable=true)
     */
    private $dataconclusao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa", inversedBy="atividade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ator_FK_idAtor", referencedColumnName="idAtor")
     * })
     */
    private $pessoa;

    /**
     * @var Projeto
     *
     * @ORM\ManyToOne(targetEntity="Projeto", inversedBy="atividade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="projeto_FK_idProjeto", referencedColumnName="idProjeto")
     * })
     */
    private $projeto;

    /**
     * Atividade constructor.
     */
    public function __construct()
    {

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
     * @return float
     */
    public function getCusto(): float
    {
        return $this->custo;
    }

    /**
     * @param float $custo
     */
    public function setCusto(float $custo)
    {
        $this->custo = $custo;
    }

    /**
     * @return \DateTime
     */
    public function getDataconclusao(): \DateTime
    {
        return $this->dataconclusao;
    }

    /**
     * @param \DateTime $dataconclusao
     */
    public function setDataconclusao(\DateTime $dataconclusao)
    {
        $this->dataconclusao = $dataconclusao;
    }

    /**
     * @return boolean
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param boolean $status
     */
    public function setStatus(bool $status)
    {
        $this->status = $status;
    }

    /**
     * @return Pessoa
     */
    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    /**
     * @param Pessoa $pessoa
     */
    public function setPessoa(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    /**
     * @return Projeto
     */
    public function getProjeto(): Projeto
    {
        return $this->projeto;
    }

    /**
     * @param Projeto $projeto
     */
    public function setProjeto(Projeto $projeto)
    {
        $this->projeto = $projeto;
    }

}

