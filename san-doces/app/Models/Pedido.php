<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'nome',
        'email',
        'whatsapp',
        'data_encomenda',
        'categoria',
        'produto',
        'observacao',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'data_encomenda' => 'date',
        ];
    }

    public function whatsappUrl(): string
    {
        $data = $this->data_encomenda?->format('d/m/Y') ?? '';

        $texto = "Ola! Meu nome e {$this->nome} e gostaria de fazer uma encomenda.\n"
            ."Categoria: {$this->categoria}\n"
            ."Pedido: {$this->produto}\n"
            ."Data: {$data}\n"
            ."WhatsApp: {$this->whatsapp}\n"
            ."E-mail: {$this->email}";

        if ($this->observacao) {
            $texto .= "\nObservacao: {$this->observacao}";
        }

        return 'https://wa.me/5515991444740?text='.rawurlencode($texto);
    }
}
