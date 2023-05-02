<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrcamentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nomeCliente" => $this->nome_cliente,
            "emailContato" => $this->email_contato,
            "telefone" => $this->telefone,
            "navegadorWeb" => $this->navegador_web,
            "paginasWeb" => $this->paginas_web,
            "loginWeb" => ($this->login_web) ? true : false,
            "pagamentoWeb" => ($this->pagamento_web) ? true : false,
            "plataformaMobile" => $this->plataforma_mobile,
            "quantidadeTelaMobile" => $this->quantidade_tela_mobile,
            "loginMobile" => ($this->login_mobile) ? true : false,
            "pagamentoMobile" => ($this->pagamento_mobile) ? true : false,
            "plataformaDesktop" => $this->plataforma_desktop,
            "quantidadeTelasDesktop" => $this->quantidade_telas_desktop,
            "impressoraDesktop" => ($this->pagamento_mobile) ? true : false,
            "licencaDesktop" => ($this->pagamento_mobile) ? true : false,
            "deletedAt" => null,
            "createdAt" => Carbon::parse($this->created_at)->format('d/m/Y H:i:s'),
            "updatedAt" => Carbon::parse($this->updated_at)->format('d/m/Y H:i:s')
        ];
    }
}
